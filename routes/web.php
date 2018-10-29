<?php

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

//registracia
Route::view('/register', "register");
Route::post('/registrovat', 'autentification_controller@registrovat');

//registracia kancelarie
Route::view('/register-kancelarie', "register_kancelarie");
Route::post('/registraciaKancelarie', 'autentification_controller@registraciaKancelarie');

//login
Route::view('/prihlasenie', "login");
Route::post('/prihlaseny', 'autentification_controller@login');