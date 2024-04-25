<?php

// Il faut importer les controllers !

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\DemandeController;
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
Route::get('/dashboard1', function () {
    return view('client.dashboard');
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
//Route::get('/empty-page3', function () {
 //   return view('expert.empty-page3');
//});
Route::get('/empty-page4', function () {
    return view('expert.empty-page4');
});
Route::get('/empty-page5', function () {
    return view('expert.empty-page5');
});
Route::get('/client/dashboard', function () {
    return view('client.dashboard');
});

Route::get('/client/index', function () {
    return view('client.index');
});

Route::get('/client/services', function () {
    return view('client.services');
});

Route::get('/client/settings', function () {
    return view('client.settings');
});


Route::get('/index' , [AccueilController::class, 'indexpage']);
Route::get('/login' , [AccueilController::class, 'loginpage']);
Route::get('/register' , [AccueilController::class, 'registerpage']);
Route::get('/about' , [AccueilController::class, 'aboutpage']);
Route::get('/services' , [AccueilController::class, 'servicespage']);
Route::get('/pricing' , [AccueilController::class, 'pricingpage']);
Route::get('/contact' , [AccueilController::class, 'contactpage']);
Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/dash' , [AccueilController::class, 'adminpage']);

Route::get('/expert/empty-page3', [DemandeController::class, 'showEmptyPage3'])->middleware('auth');
// Ajout de la route pour la mise à jour des demandes
Route::put('/demandes/{demande}', [DemandeController::class, 'update'])->name('demandes.update');


Route::post('/registerpartenaire' , [UsersController::class, 'registerExpert']);
Route::post('/registerclient' , [UsersController::class, 'registerClient']);
Route::post('/con' , [UsersController::class, 'login'])->name('connexion');
