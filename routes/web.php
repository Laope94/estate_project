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

// ---------------------------------------ADMIN-----------------------------------------------------
//users
Route::view('/add-user', "");
Route::post('/addUser', 'AdminController@addUser');
Route::get('showUsers', 'AdminController@showUsers');
Route::get('showUsersOfPrivilege/{privilege}', 'AdminController@showUsersOfPrivilege');
Route::get('showUsersOfAgency/{UUID}', 'AdminController@showUsersOfAgency');

Route::get('updateUsr/{UUID}', 'AdminController@showUser');
Route::get('updateUser/{UUID}', "AdminController@updateUser");
Route::get('deleteUser/{UUID}', "AdminController@deleteUser");

//estates
Route::get('showEstates', 'AdminController@showEstates');
Route::get('showEstatesOfUser/{UUID}', 'AdminController@showEstatesOfUser');
Route::get('showEstatesOfAgency/{UUID}', 'AdminController@showEstatesOfAgency');

Route::get('updateEstt/{UUID}', 'AdminController@showEstate');
Route::get('updateEstate/{UUID}', "AdminController@updateEstate");
Route::get('deleteEstate{UUID}', "AdminController@deleteEstate");

//agencies
Route::get('/admin-tools/kancelarie', 'AdminController@showAgencies');
Route::view('/admin-tools/pridat-kancelariu', 'dashboard/dash_add_kancelaria');
Route::get('updateAgnc/{UUID}', 'AdminController@showAgency');
Route::get('updateAgency/{UUID}', "AdminController@updateAgency");
Route::get('deleteAgency/{UUID}', "AdminController@deleteAgency");


// ---------------------------------------KANCELARIA-----------------------------------------------------
Route::get('/estate-cms/', 'AdminController@getCurrentAgencyEstates');
Route::view('/estate-cms/pridat-inzerat', 'dashboard/dash_add_inzerat');
Route::get('/estate-cms/inzeraty/', 'AdminController@getCurrentAgencyEstates');
Route::get('/estate-cms/zamestnanci', 'AdminController@getCurrentAgencyUsers');
Route::get('/estate-cms/inzerat/{UUID}', 'AdminController@getEstate');
Route::get('estate-cms/pridat-zamestnanca', 'AdminController@getAgencyList');

// ---------------------------------------POUZIVATELIA-----------------------------------------------------
//registracia kancelarie
Route::get('/registracia-kancelarie', function (){
    return view('/auth/register_kancelarie');
});
Route::post('/registraciaKancelarie', 'UserController@registraciaKancelarie');

//pouzivatelia vypis
Route::get('/pouzivatelia', "UserController@showAllAction");


//editovanie pozuivatela
Route::get('updateUserP', "UserController@updateUserProfile");

//môj profil
Route::get('/profil', "UserController@getMe");

//------------------------------------------INZERATY-----------------------------------------------------
//pridanie inzeratu
Route::view('/pridat-inzerat', "/inzerat/add_inzerat");
Route::post('/pridajInzerat', 'InzeratController@pridajInzerat');

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
Route::get('/byt-v-dome', function (){
    return view('bytvdome/bytvdome');
});
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


Route::get('/',['as'=> 'HOME','uses' => 'InzeratController@mostRecentEstates']);

Auth::routes();

//charts
Route::get('/charts', 'ChartController@index');