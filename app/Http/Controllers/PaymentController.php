<?php

namespace App\Http\Controllers;

use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use Omnipay\PayPal\Message\RestAuthorizeRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    // private $gateway;
    

    // public function __construct()
    // {
    //     $this->gateway = Omnipay::create('PayPal_Rest');
    //     $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
    //     $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
    //     $this->gateway->setTestMode(true);
       
    // }	

    // public function pay(Request $request)
    // {
    //     try {
    //         $response = $this->gateway->purchase(array(
    //             'amount' => $request->amount,
    //             'currency' => env('PAYPAL_CURRENCY'),
    //             // 'description' => 'This is a test authorize transaction.',
    //             'returnUrl' => url('success'),
    //             'cancelUrl' => url('error'),
    //         ))->send();
           

    //         if ($response->isRedirect()) {
    //             $response->redirect();
    //         } else {
    //             dd($response->getMessage());
    //         }
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }

    public function index ()
    {
        return view('Payment.payment');
    }
    public function getAccessToken(): string
    {
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => 'Basic '.base64_encode(config('paypal.client_id').':'.config('paypal.client_secret'))
        ];
        $response = Http::withHeaders($headers)
            ->withBody('grant_type=client_credentials', 'application/x-www-form-urlencoded')
            ->post(config('paypal.base_url').'/v1/oauth2/token');

        return json_decode($response->body())->access_token;
    }
    public function create(int $amount =10): string
    {   
        $id = uuid_create();
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$this->getAccessToken(),
            'PayPal-Request-Id' => $id,
        ];

        $body = [
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [    'reference_id' => $id,
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => number_format($amount, 2),
                    ]
                ]
            ],
            // 'application_context' => [
            //     'brand_name' => 'Example INC',
            //     'landing_page' => 'BILLING',
            //     'shipping_preference' => 'SET_PROVIDED_ADDRESS',
            //     'user_action' => 'PAY_NOW',
            //     'return_url' => route('success'),
            //     'cancel_url' => route('error')
            // ]
        ];

        $response = Http::withHeaders($headers)
            ->withBody(json_encode($body), 'application/json')
            ->post(config('paypal.base_url').'/v2/checkout/orders');
        
        Session :: put('request_id', $id);
        Session::put('order_id', json_decode($response->body())->id);

        return json_decode($response->body())->id;
    }

    public function complete()
    {
        $url = config('paypal.base_url').'/v2/checkout/orders/'.Session::get('order_id').'/capture';
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$this->getAccessToken(),

        ];
        $response = Http::withHeaders($headers)
            ->post($url,null);

        return json_decode($response->body());

    }
}