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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/o-mnie', function () {
    return view('/about');
});

Route::get('/Terapia', function () {
    return view('service');
});

Route::get('/Cennik', function () {
    return view('pricet');
});

Route::get('/Kontakt', function () {
    return view('Kontakt');
});
