<?php

// Il faut importer les controllers !

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index' , [AccueilController::class, 'indexpage']);
Route::get('/login' , [AccueilController::class, 'loginpage']);
Route::get('/register' , [AccueilController::class, 'registerpage']);
Route::get('/about' , [AccueilController::class, 'aboutpage']);
Route::get('/services' , [AccueilController::class, 'servicespage']);
Route::get('/pricing' , [AccueilController::class, 'pricingpage']);
Route::get('/contact' , [AccueilController::class, 'contactpage']);
