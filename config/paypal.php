<?php

return [
    'base_url' => env('PAYPAL_MODE', 'sandbox') === 'live' ? 'https://api.paypal.com' : 'https://api.sandbox.paypal.com',
     'mode' => env('PAYPAL_MODE', 'sandbox'), // 'live' or 'sandbox
    'client_id' => env('PAYPAL_CLIENT_ID'),
    'client_secret' => env('PAYPAL_CLIENT_SECRET'),
    'currency' => env('PAYPAL_CURRENCY', 'USD'),
];