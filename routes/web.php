<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/negocios', function () {
    return view('negocios');
});
Route::get('/franquicia', function () {
    return view('franquicia');
});
Route::get('/responsabilidad-social', function () {
    return view('responsabilidad-social');
});
Route::get('/unete-a-la-famila-nicxa', function () {
    return view('bolsa-de-trabajo');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
