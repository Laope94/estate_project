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


Route::post('pridajAdmina',['uses' => 'AdminController@pridajAdmina']);
Route::get('adminform',['as'=> 'Insert','uses' => 'AdminController@adminForm']);
Route::get('zobrazadminov',['as'=> 'Update','uses' => 'AdminController@zobrazAdminov']);
Route::get('zobrazadmina/{id}',['as'=> 'Update','uses' => 'AdminController@zobrazAdmina']);
Route::post('editujadmina/{id}',['as'=> 'Update','uses' => 'AdminController@upravAdmina']);
Route::get('vymazadmina/{id}',['as'=> 'Delete','uses' => 'AdminController@vymazAdmina']);