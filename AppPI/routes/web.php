<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


//testiranje

Route::get('/dogadaji', [App\Http\Controllers\DogadajController::class, 'index']);
Route::get('/novidogadaj/create', [App\Http\Controllers\DogadajController::class, 'create']);
Route::post('/novidogadaj', [App\Http\Controllers\DogadajController::class, 'store']);
Route::get('/mojidogadaji', [App\Http\Controllers\DogadajController::class, 'moji_dogadaji']);


