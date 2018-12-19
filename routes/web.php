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


use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function (){
    return redirect('/');
});

Route::view('/kontakt', 'kontakt');

// ---------------------------------------ADMIN-----------------------------------------------------
//TODO: linky pre správu admina vždy začínajú /admin-tools (obdoba /estate-cms - pozri nižšie)
//users
Route::get('/admin-tools/add-user',  'AdminController@getAgencyList');
Route::post('/admin-tools/addusr', 'AdminController@addusr');
Route::post('/admin-tools/addUser', 'AdminController@addUser');
Route::get('/admin-tools/showUsers', 'AdminController@showUsers'); //pristup iba pre admina -> hotovo

Route::get('/admin-tools/showUsersOfPrivilege/{privilege}', 'AdminController@showUsersOfPrivilege'); //pristup iba pre admina -> hotovo
Route::get('/admin-tools/showUsersOfAgency/{UUID}', 'AdminController@showUsersOfAgency');

Route::get('/admin-tools/updateUsr/{UUID}', 'AdminController@showUser');
Route::post('/admin-tools/updateUser', "AdminController@updateUser");
Route::get('/admin-tools/deleteUser/{UUID}', "AdminController@deleteUser");

//estates
Route::get('/admin-tools/showEstates', 'AdminController@showEstates'); //pristup iba pre admina -> hotovo
Route::get('/admin-tools/showEstatesOfUser/{UUID}', 'AdminController@showEstatesOfUser');
Route::get('/admin-tools/showEstatesOfAgency/{UUID}', 'AdminController@showEstatesOfAgency');
Route::get('/admin-tools/inzerat/{UUID}', 'AdminController@getEstate');

Route::get('/admin-tools/updateEstt/{UUID}', 'AdminController@showEstate');
Route::post('/admin-tools/updateEstate', "AdminController@updateEstate");

Route::get('/admin-tools/deleteEstate/{UUID}', "AdminController@deleteEstate");
Route::get('/admin-tools/deleteEstateDetail/{UUID}', "AdminController@deleteEstateDetail");

//admins
Route::get('/admin-tools', 'AdminController@showAgencies'); //pristup iba pre admina -> hotovo
Route::get('/admin-tools/kancelarie', 'AdminController@showAgencies'); //pristup iba pre admina -> hotovo
Route::view('/admin-tools/pridat-kancelariu', 'dashboard/dash_add_kancelaria'); //-> pozriet este
Route::post('/admin-tools/addAgency', 'AdminController@addAgency');
Route::get('/admin-tools/updateAgnc/{UUID}', 'AdminController@showAgency');
Route::post('/admin-tools/updateAgency', "AdminController@updateAgency");
Route::get('/admin-tools/deleteAgency/{UUID}', "AdminController@deleteAgency");


// ---------------------------------------KANCELARIA-----------------------------------------------------
Route::get('/estate-cms', 'AdminController@getCurrentAgencyEstates'); //pristup iba pre kancelariu a zamestnanca -> hotovo
Route::view('/estate-cms/pridat-inzerat', 'dashboard/dash_add_inzerat');
Route::get('/estate-cms/inzeraty/', 'AdminController@getCurrentAgencyEstates'); //pristup iba pre kancelariu a zamestnanca -> hotovo
Route::post('/estate-cms/addEstate', 'AdminController@addEstate');
Route::get('/estate-cms/zamestnanci', 'AdminController@getCurrentAgencyUsers'); //pristup iba pre kancelariu a zamestnanca -> hotovo
Route::get('/estate-cms/inzerat/{UUID}', 'AdminController@getEstate');
Route::get('/estate-cms/pridat-zamestnanca', 'AdminController@getAgencyList');
Route::post('/estate-cms/addUser', 'AdminController@addUser');
Route::get('/estate-cms/deleteEstate{UUID}', "AdminController@deleteEstate");
//charts
Route::get('estate-cms/charts', 'ChartController@index');


Route::get('/estate-cms/showEstatesOfUser/{UUID}', 'AdminController@showEstatesOfUser');

Route::get('/estate-cms/deleteEstateDetail/{UUID}', "AdminController@deleteEstateDetail");
Route::get('/estate-cms/deleteEstate/{UUID}', "AdminController@deleteEstate");
Route::get('/estate-cms/updateEstt/{UUID}', 'AdminController@showEstate');
Route::get('/estate-cms/updateAgnc/{id}', 'AdminController@showAgencyid');
Route::post('/estate-cms/updateAgency', "AdminController@updateAgency");
Route::post('/estate-cms/updateEstate', "AdminController@updateEstate");
Route::get('/estate-cms/showEstatesOfAgenc/', 'AdminController@showEstatesOfAgenc');
// ---------------------------------------POUZIVATELIA-----------------------------------------------------
//registracia kancelarie
Route::get('/registracia-kancelarie', function (){
    return view('/auth/register_kancelarie');
});

Route::post('/registraciaKancelarie', 'UserController@registraciaKancelarie');
//pouzivatelia vypis
//Route::get('/pouzivatelia', "UserController@showAllAction");

//editovanie pozuivatela
Route::get('updateUserP', "UserController@updateUserProfile");

//môj profil
Route::get('/profil', "UserController@getMe"); //pristup iba pre regist. pouzivatela -> hotovo

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
Route::post('updateAdvProfile/', "InzeratController@updateAdvProfile");

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