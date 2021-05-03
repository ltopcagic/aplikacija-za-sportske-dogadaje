<?php

use App\Models\Dogadaj;
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

//Test ruta
Route::get('/proba', [App\Http\Controllers\UpitController::class, 'index']);

//Dogadaji rute

Route::get('/dogadaji', [App\Http\Controllers\DogadajController::class, 'index']);
Route::get('/novidogadaj/create', [App\Http\Controllers\DogadajController::class, 'create']);
Route::post('/novidogadaj', [App\Http\Controllers\DogadajController::class, 'store']);
Route::get('/mojidogadaji', [App\Http\Controllers\DogadajController::class, 'moji_dogadaji']);
Route::get('/mojidogadaji/{dogadaj}/izmjenadogadaja', [App\Http\Controllers\DogadajController::class, 'edit']);
Route::put('/mojidogadaji/{dogadaj}/', [App\Http\Controllers\DogadajController::class, 'update']);

//Upiti rute
Route::get('/postaviupit/{dogadaj}/', [App\Http\Controllers\UpitController::class, 'create']);
Route::post('/postaviupit/{dogadaj}/', [App\Http\Controllers\UpitController::class, 'store']);
Route::get('/poslaniupiti', [App\Http\Controllers\UpitController::class, 'poslani_upiti']);
Route::get('/dolazniupiti', [App\Http\Controllers\UpitController::class, 'dolazni_upiti']);
Route::get('/dolazniupiti/{upit}/odgovor', [App\Http\Controllers\UpitController::class, 'edit']);
Route::put('/dolazniupiti/{upit}/', [App\Http\Controllers\UpitController::class, 'update']);







