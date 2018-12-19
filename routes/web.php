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

// ---------------------------------------ADMIN-----------------------------------------------------
//TODO: linky pre správu admina vždy začínajú /admin-tools (obdoba /estate-cms - pozri nižšie)
//users
Route::view('/add-user', "");
Route::post('/admin-tools/addusr', 'AdminController@addusr');
Route::post('/admin-tools/addUser', 'AdminController@addUser');
Route::get('/admin-tools/showUsers', 'AdminController@showUsers');

Route::get('/admin-tools/showUsers', 'AdminController@showUsers');
Route::get('/admin-tools/showUsersOfPrivilege/{privilege}', 'AdminController@showUsersOfPrivilege');
Route::get('/admin-tools/showUsersOfAgency/{UUID}', 'AdminController@showUsersOfAgency');

Route::get('/admin-tools/updateUsr/{UUID}', 'AdminController@showUser');
Route::get('/admin-tools/updateUser/{UUID}', "AdminController@updateUser");
Route::get('/admin-tools/deleteUser/{UUID}', "AdminController@deleteUser");

//estates
Route::get('/admin-tools/showEstates', 'AdminController@showEstates');
Route::get('/admin-tools/showEstatesOfUser/{UUID}', 'AdminController@showEstatesOfUser');
Route::get('/admin-tools/showEstatesOfAgency/{UUID}', 'AdminController@showEstatesOfAgency');
Route::get('/admin-tools/inzerat/{UUID}', 'AdminController@getEstate');

Route::get('/admin-tools/updateEstt/{UUID}', 'AdminController@showEstate');
Route::post('/admin-tools/updateEstate', "AdminController@updateEstate");
Route::get('/admin-tools/deleteEstate/{UUID}', "AdminController@deleteEstate");
Route::get('/admin-tools/deleteEstateDetail/{UUID}', "AdminController@deleteEstateDetail");

//admins
Route::get('/admin-tools', function (){
    if (\Illuminate\Support\Facades\Auth::user() == null) {
        return redirect('/');
    } else {
        return redirect()->action('AdminController@showAgencies');
    }
});
Route::get('/admin-tools/kancelarie', 'AdminController@showAgencies');
Route::view('/admin-tools/pridat-kancelariu', 'dashboard/dash_add_kancelaria');
Route::post('/admin-tools/addAgency', 'AdminController@addAgency');
Route::get('/admin-tools/updateAgnc/{UUID}', 'AdminController@showAgency');
Route::get('/admin-tools/updateAgency/{UUID}', "AdminController@updateAgency");
Route::get('/admin-tools/deleteAgency/{UUID}', "AdminController@deleteAgency");


// ---------------------------------------KANCELARIA-----------------------------------------------------
Route::get('/estate-cms', function (){
     if (\Illuminate\Support\Facades\Auth::user() == null) {
         return redirect('/');
    } elseif(Auth::user()->privilege!=3) {
         return redirect()->action('AdminController@getCurrentAgencyEstates');
    }
});
Route::view('/estate-cms/pridat-inzerat', 'dashboard/dash_add_inzerat');
Route::post('/estate-cms/addEstate', 'AdminController@addEstate');
Route::get('/estate-cms/inzeraty/', 'AdminController@getCurrentAgencyEstates');
Route::get('/estate-cms/zamestnanci', 'AdminController@getCurrentAgencyUsers');
Route::get('/estate-cms/inzerat/{UUID}', 'AdminController@getEstate');
Route::get('/estate-cms/pridat-zamestnanca', 'AdminController@getAgencyList');
Route::get('/estate_cms/deleteEstate{UUID}', "AdminController@deleteEstate");

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

//charts
Route::get('/charts', 'ChartController@index');