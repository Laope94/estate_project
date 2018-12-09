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
    return view('home');
});

Route::get('/home', function (){
    return redirect('/');
});

// ---------------------------------------POUZIVATELIA-----------------------------------------------------
//registracia kancelarie
Route::get('/registracia-kancelarie', function (){
    return view('/auth/register_kancelarie');
});
Route::post('/registraciaKancelarie', 'UserController@registraciaKancelarie');

//pouzivatelia vypis
Route::get('/pouzivatelia', "UserController@showAllAction");

//mazanie pouzivatela
Route::get('delete-user/{id}','UserController@deleteUser');

//editovanie pozuivatela
Route::get('updateUser/{id}', "UserController@showAction");
Route::get('update/{id}', "UserController@updateUser");
Route::get('updateUserP', "UserController@updateUserProfile");

//môj profil
Route::get('/profil', "UserController@getMe");



//------------------------------------------INZERATY-----------------------------------------------------
//pridanie inzeratu
Route::view('/pridat-inzerat', "/inzerat/add_inzerat");
Route::post('/pridajInzerat', 'InzeratController@pridajInzerat');

//vypis inzeratov
Route::get('/inzeraty', 'InzeratController@showAllAction');

//detail inzerátu
Route::get('inzerat/{UUID}', 'InzeratController@estateDetail');

//inzerat peek estatePeek
Route::get('inzeratpeek', 'InzeratController@estatePeek');

//mazanie inzeratu
Route::get('delete/{id}','InzeratController@deleteAdv');
Route::get('deletep/{UUID}','InzeratController@deleteAdvPeek');

//editovanie inzeratov
Route::get('updateAdv/{UUID}', 'InzeratController@showAction');
Route::get('updateAdvert/{UUID}', "InzeratController@updateAdv");
Route::get('updateAdvProfile/{UUID}', "InzeratController@updateAdvProfile");

//filter inzeratov
Route::get('/inzeraty', 'InzeratController@megaFilter');
Route::get('distFilter', 'InzeratController@filter');

// 6 najnovsich inzeratov
Route::get('/najnovsie', 'InzeratController@mostRecentEstates');



//--------------------------------------------AUTH-------------------------------------------------------
//login
Route::view('/prihlasenie', "/auth/login");
Route::post('/prihlaseny', 'AuthController@login');

Route::post('pridajAdmina',['uses' => 'AdminController@pridajAdmina']);
Route::get('adminform',['as'=> 'Insert','uses' => 'AdminController@adminForm']);
Route::get('zobrazadminov',['as'=> 'Update','uses' => 'AdminController@zobrazAdminov']);
Route::get('zobrazadmina/{id}',['as'=> 'Update','uses' => 'AdminController@zobrazAdmina']);
Route::post('editujadmina/{id}',['as'=> 'Update','uses' => 'AdminController@upravAdmina']);
Route::get('vymazadmina/{id}',['as'=> 'Delete','uses' => 'AdminController@vymazAdmina']);

Route::get('/',['as'=> 'HOME','uses' => 'InzeratController@mostRecentEstates']);

Auth::routes();

Route::get('/charts', 'ChartController@index');