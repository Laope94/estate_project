<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 12.11.2018
 * Time: 17:10
 */

namespace App\Http\Controllers;


use App\Models\Inzerat;
use App\Models\Kancelaria;
use App\Models\User;
use App\Models\Village_model;
use App\Models\Usersvillageview;
use App\Models\Eetvview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webpatser\Uuid\Uuid;

class AdminController
{
    public function adminForm(){

        return view('');
    }


    public function showUsers(){
        //načíta všetkých userov okrem neregistrovaných
        $users=Usersvillageview::where('privilege','<','4')->get();
        return view("dashboard/dash_users",['users' =>$users]);
    }

    public function addusr(){
        $agencies=Kancelaria::all();
        $privilege=Auth::user()->privilege;
        return view("dashboard/dash_add_user",['agencies' =>$agencies],['privilege' =>$privilege]);
    }
    public function addUser(Request $request){
        //pridá usera so zvoleným oprávnením


        $help = $request['city'];
        $village = Village_model::where("fullname", "=", $help)->first();

        $uuid = Uuid::generate();
        $meno = $request ->input('name');
        $priezvisko = $request ->input('surname');
        $adresa=$request ->input('street');
        $email = $request ->input('email');
        $heslo = $request ->input('password');
        $telefon=$request ->input('phone_prim');
        $telefon2=$request ->input('phone_sec');
        $opravnenie=$request ->input('privilege');
        $kancelaria_id=$request ->input('agency');


        $admin = new User();
        $admin -> name = $meno;
        $admin -> surname = $priezvisko;
        $admin -> address = $adresa;
        $admin-> email = $email;
        $admin-> password=bcrypt($heslo);
        $admin -> phone = $telefon;
        $admin -> phone2 = $telefon2;
        $admin->UUID=$uuid;
        $admin -> privilege = $opravnenie;
        $admin -> agency_id = $kancelaria_id;
        $admin -> village_id = $village->id;
        $admin ->save();

        return redirect()->action('AdminController@showUsers');

    }


    public function updateUser($uuid, Request $request){
        $help = $request['city'];
        $village = Village_model::where("fullname", "=", $help)->first();

        $admin=User::where('UUID',$uuid)->first();
        $admin ->update (["name"=>$request->input('meno'),
            "surname"=>$request->input('priezvisko'),
            "email"=>$request->input('email'),
            "address"=>$request->input('adresa'),
            "phone"=>$request->input('telefon'),
            "phone2"=>$request->input('telefon2'),
            "privilege"=>$request->input('opravnenie'),
            "password"=>bcrypt($request->input('heslo')),
            "agency_id" =>$request->input('agency_id'),
            "village_id" =>$village->id
        ]);


        return redirect()->action('AdminController@showUsers');
    }

    public function deleteUser($uuid){
        $admin=User::where('UUID',$uuid)->first();
        $admin->delete();


        return redirect()->action('AdminController@showUsers');

    }

    public function showUser($uuid){
        //načíta detaily zvoleného usera
        $user=Usersvillageview::where('UUID',$uuid)->first();

        return view("", ['users'=>$user]);
    }

    public function showUsersOfPrivilege($privilege){

    if($privilege==0){
        //načíta neregistrovaných userov ...možno sa to zíde na štatistiku
        $users=User::where("privillege",0 )->get();
    }else{
        //načíta userov so zvoleným oprávnením až na neregistrovaných
        $users=Usersvillageview::where("privilege",$privilege )->get();
    }
        return view("/dashboard/dash_users",['users' =>$users]);
}

    public function showUsersOfAgency($uuid){
        //pokiaľ sa id agentúry nerovná 1 (agentúra pridaná len aby nemali users null agency_id kvôli db viewu) načíta userov agentúry
        $agency=Kancelaria::where('UUID',$uuid)->first();
        $agency_id=$agency->id;
        if($agency_id!=1) {
            $users = Usersvillageview::where("agency_id", $agency_id)->get();

            return view("",['users' =>$users]);
        }
    }

    public function getCurrentAgencyUsers(){
        $agency=Kancelaria::where('id', Auth::user()->agency_id)->first();
        $agency_name=$agency->name;
        if($agency_name!="0") {
            $users = Usersvillageview::where("agency", $agency_name)->get();
            return view("/dashboard/dash_users", ['users' =>$users]);
        }
    }






    public function showEstates(){
        //načíta všetky inzeráty
        $estates=Eetvview::all();
        return view("/dashboard/dash_inzeraty", ['estates'=>$estates]);
    }

    public function getEstate($uuid){
        $inzerat = Inzerat::where('UUID',$uuid)->first();
        return view('dashboard/dash_inzerat', ['inzerat'=>$inzerat]);
    }

    public function updateEstate(Request $request, $UUID){

        $timestamp = Carbon::now()->toDateTimeString();

        $inzerat = Inzerat::where('UUID',$UUID)->first();
        $inzerat->update(["street" => $request->input('street'),
            "area"=> $request->input('plocha'),
            "price" => $request->input('cena'),
            "room_number" => $request->input('pocet_izieb'),
            "floors" => $request->input('poschodie'),
            "issale" => $request->input('ponuka'),
            "description" => $request->input('popis'),
            "estate_type_id" => $request->input('typ_nehnutelnosti'),
            "users_id" => $request->input('users_id'),
            "village_id" => $request->input('village_id'),
            "updated_at" => $timestamp]);

        return redirect()->action('AdminController@showEstates');
    }

    public function deleteEstate($UUID){

        $inzerat=Inzerat::where('UUID',$UUID)->first();
        $inzerat->delete();
        //return redirect()->action('AdminController@showEstates');
        return back();
    }
    public function deleteEstateDetail($UUID){

        $inzerat=Inzerat::where('UUID',$UUID)->first();
        $inzerat->delete();
        //return redirect()->action('AdminController@showEstates');
        return redirect()->action('AdminController@showUsers');
    }
    public function deleteEstateOfUser($uuid){
        $inzerat=Inzerat::where('UUID',$uuid)->first();
        $pouzid=$inzerat->users_id;
        $inzerat->delete();
        $estates=Eetvview::where('users_id',$pouzid)->get();
        return view("dashboard/dash_inzeraty", ['estates'=>$estates]);



    }

    public function showEstatesOfUser($uuid){
        //načíta inzeráty zvoleného usera
        $useru=User::where('UUID',$uuid)->first();
        $userid=$useru->id;
        $estates=Eetvview::where('users_id',$userid)->get();

        return view("dashboard/dash_inzeraty", ['estates'=>$estates]);
    }

    public function showEstatesOfAgency($uuid){
        //načíta inzeráty zvolenej agentúry
            $agency = Kancelaria::where('UUID', $uuid)->first();

            $agencyname = $agency->name;

            $estates = Eetvview::where('agency', $agencyname)->get();
        return view("dashboard/dash_inzeraty", ['estates' => $estates]);
    }

    public function getCurrentAgencyEstates(){
        $agency = Kancelaria::where('id', Auth::user()->agency_id)->first();
        $agencyname = $agency->name;
        $estates = Eetvview::where('agency', $agencyname)->get();
        return view("dashboard/dash_inzeraty", ['estates' => $estates]);
    }






    public function showAgencies(){

        //načíta všetky kancelárie
        $agencies=Kancelaria::where('id','>','1')->get();
        return view("dashboard/dash_kancelarie",['agencies' =>$agencies]);
    }

    public function getAgencyList(){
        //kancelárie + kancelária 0
        $user=Auth::user();
        $agencies=Kancelaria::all();
        return view("dashboard/dash_add_user",['agencies' =>$agencies],['user' =>$user]);
    }

    public function updateAgency($uuid, Request $request){
        $timestamp = Carbon::now()->toDateTimeString();
        $kancelaria = Kancelaria::where('UUID',$uuid)->first();
        $kancelaria->update(["name" => $request->input('meno'),
            "director" => $request->input('priezvisko'),
            "address" => $request->input('adresa'),
            "phone" => $request->input('tel_num'),
            "phone2" => $request->input('tel_num2'),
            "email" => $request->input('mail'),
            "IBAN"=> $request->input('iban'),
            "ICO"=> $request->input('ico'),
            "DIC"=> $request->input('dic'),
            "village_id" => $request->input('village_id'),
            "updated_at" => $timestamp]);


        return redirect()->action('AdminController@showAgencies');
    }
    public function deleteAgency($uuid){

        $kancelaria = Kancelaria::where('UUID',$uuid)->first();
        $kancelaria->delete();

        return redirect()->action('AdminController@showAgencies');
    }


}