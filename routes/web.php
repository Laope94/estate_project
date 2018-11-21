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

// ---------------------------------------POUZIVATELIA-----------------------------------------------------
//registracia noveho clena
Route::view('/registracia', "register");
Route::post('/register', 'UserController@registrovat');

//registracia kancelarie
Route::view('/register-kancelarie', "register_kancelarie");
Route::post('/registraciaKancelarie', 'UserController@registraciaKancelarie');

//pouzivatelia vypis
Route::get('/pouzivatelia', "UserController@showAllAction");

//mazanie pouzivatela
Route::get('delete-user/{id}','UserController@deleteUser');

//editovanie pozuivatela
Route::get('updateUser/{id}', "UserController@showAction");
Route::get('update/{id}', "UserController@updateUser");

//------------------------------------------INZERATY-----------------------------------------------------
//pridanie inzeratu
Route::view('/pridanie-inzeratu', "add_inzerat");
Route::post('/pridajInzerat', 'InzeratController@pridajInzerat');

//vypis inzeratov
Route::get('/inzeraty', 'InzeratController@showAllAction');

//mazanie inzeratu
Route::get('delete/{id}','InzeratController@deleteAdv');

//editovanie inzeratov
Route::get('updateAdv/{id}', 'InzeratController@showAction');
Route::get('updateAdvert/{id}', "InzeratController@updateAdv");

//--------------------------------------------AUTH-------------------------------------------------------
//login
Route::view('/prihlasenie', "login");
Route::post('/prihlaseny', 'AuthController@login');


//--------------------------------------------ADMIN------------------------------------------------------
Route::post('pridajAdmina',['uses' => 'AdminController@pridajAdmina']);
Route::get('adminform',['as'=> 'Insert','uses' => 'AdminController@adminForm']);
Route::get('zobrazadminov',['as'=> 'Update','uses' => 'AdminController@zobrazAdminov']);
Route::get('zobrazadmina/{id}',['as'=> 'Update','uses' => 'AdminController@zobrazAdmina']);
Route::post('editujadmina/{id}',['as'=> 'Update','uses' => 'AdminController@upravAdmina']);
Route::get('vymazadmina/{id}',['as'=> 'Delete','uses' => 'AdminController@vymazAdmina']);


Route::get('zobrazinzeraty',['as'=> 'Update','uses' => 'AdminController@zobrazInzeraty']);
Route::get('zobrazinzerat/{id}',['as'=> 'Update','uses' => 'AdminController@zobrazInzerat']);
Route::post('editujinzerat/{id}',['as'=> 'Update','uses' => 'AdminController@upravInzerat']);
Route::get('vymazinzerat/{id}',['as'=> 'Delete','uses' => 'AdminController@vymazInzeraz']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
