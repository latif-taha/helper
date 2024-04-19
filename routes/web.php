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
Route::get('/expert', function () {
    return view('expert.index');
});
Route::get('/dashboard', function () {
    return view('expert.dashboard');
});
Route::get('/empty-page', function () {
    return view('expert.empty-page');
});
Route::get('/empty-page1', function () {
    return view('expert.empty-page1');
});
Route::get('/empty-page2', function () {
    return view('expert.empty-page2');
});
Route::get('/empty-page3', function () {
    return view('expert.empty-page3');
});


Route::get('/index' , [AccueilController::class, 'indexpage']);
Route::get('/login' , [AccueilController::class, 'loginpage']);
Route::get('/register' , [AccueilController::class, 'registerpage']);
Route::get('/about' , [AccueilController::class, 'aboutpage']);
Route::get('/services' , [AccueilController::class, 'servicespage']);
Route::get('/pricing' , [AccueilController::class, 'pricingpage']);
Route::get('/contact' , [AccueilController::class, 'contactpage']);
