<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 12.11.2018
 * Time: 17:10
 */

namespace App\Http\Controllers;


use App\Models\District_model;
use App\Models\Inzerat;
use App\Models\Kancelaria;
use App\Models\Region_model;
use App\Models\User;
use App\Models\Village_model;
use App\Models\Usersvillageview;
use App\Models\Eetvview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webpatser\Uuid\Uuid;
use Carbon\Carbon;

class AdminController
{
    public function adminForm(){

        return view('');
    }


    public function showUsers(){
        //načíta všetkých userov okrem neregistrovaných
        if(Auth::user() == null){
            return redirect('/');
        }
        if(Auth::user()->privilege < 4){
            return redirect('/');
        } else {
            $users=Usersvillageview::where('privilege','<','4')->get();
            return view("dashboard/dash_users",['users' =>$users]);
        }
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


    public function updateUser( Request $request){
        $help = $request['city'];

        $village = Village_model::where("fullname", "=", $help)->first();
        $uuid=$request->input('uuid');
        $admin=User::where('UUID',$uuid)->first();
        $help2 = $request['agency'];
        $agency=Kancelaria::where('name',$help2)->first();
        $admin ->update (["name"=>$request->input('name'),
            "surname"=>$request->input('surname'),
            "email"=>$request->input('email'),
            "address"=>$request->input('street'),
            "phone"=>$request->input('phone_prim'),
            "phone2"=>$request->input('phone_sec'),
            "privilege"=>$request->input('privilege'),
            "password"=>bcrypt($request->input('password')),
            "agency_id" =>$agency->id,
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
        $agencies=Kancelaria::all();

        return view("/dashboard/dash_edit_user", ['agencies'=>$agencies],['users'=>$user]);
    }

    public function showUsersOfPrivilege($privilege){

        if(Auth::user() == null){
            return redirect('/');
        }
        if(Auth::user()->privilege != 5){
            return redirect('/');
        } else {
            if($privilege==0){
                //načíta neregistrovaných userov ...možno sa to zíde na štatistiku
                $users=User::where("privillege",0 )->get();
            }else{
                //načíta userov so zvoleným oprávnením až na neregistrovaných
                $users=Usersvillageview::where("privilege",$privilege )->get();
            }
            return view("/dashboard/dash_users",['users' =>$users]);
        }
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
        if(Auth::user() == null){
            return redirect('/');
        }
        if(Auth::user()->privilege > 3 || Auth::user()->privilege < 2 ){
            return redirect('/');
        } else {
            $agency=Kancelaria::where('id', Auth::user()->agency_id)->first();
            $agency_name=$agency->name;
            if($agency_name!="0") {
                $users = Usersvillageview::where("agency", $agency_name)->get();
                return view("/dashboard/dash_users", ['users' =>$users]);
            }
        }
    }




    public function showEstate($uuid){
        //načíta detaily zvoleného usera
        $estate=Eetvview::where('UUID',$uuid)->first();

        return view("/dashboard/dash_edit_inzerat", ['inzerat'=>$estate]);
    }

    public function showEstates(){
        //načíta všetky inzeráty
        if(Auth::user() == null){
            return redirect('/');
        }
        if(Auth::user()->privilege < 4){
            return redirect('/');
        } else {
            $estates=Eetvview::all();
            return view("/dashboard/dash_inzeraty", ['estates'=>$estates]);
        }

    }
    public function showEstatesOfUser($uuid){
        //načíta inzeráty zvoleného usera
        $useru=User::where('UUID',$uuid)->first();
        $userid=$useru->id;
        $estates=Eetvview::where('users_id',$userid)->get();

        return view("dashboard/dash_inzeraty", ['estates'=>$estates]);
    }

    public function getEstate($uuid){
        $inzerat = Inzerat::where('UUID',$uuid)->first();
        return view('dashboard/dash_inzerat', ['inzerat'=>$inzerat]);
    }

    public function addEstate(Request $request)
    {

        $id_pouz=Auth::id();
        $help =  $request['city'];
        $village = Village_model::where("fullname", "=", $help)->first();
        $vil_id = $village->id;

        $uuid = Uuid::generate();
        $ulica = $request->input('street');
        $plocha = $request->input('plocha');
        $cena = $request->input('cena');
        $izby = $request->input('pocet_izieb');
        $poschodie = $request->input('poschodie');
        $popis = $request->input('popis');

        $typ_nehnutelnosti_id = $request->input('typ_nehnutelnosti');
       $timestamp = Carbon::now()->toDateTimeString();
        $token = $request->input('_token');
        $issale = $request->input('ponuka');



        $inzerat = new Inzerat();
        $inzerat->street = $ulica;
        $inzerat->area = $plocha;
        $inzerat->price = $cena;
        $inzerat->room_number = $izby;
        $inzerat->floors = $poschodie;
        $inzerat->issale = $issale;
        $inzerat->description = $popis;
        $inzerat->estate_type_id = $typ_nehnutelnosti_id;
        $inzerat->users_id = $id_pouz;
        $inzerat->village_id = $vil_id;
        $inzerat->UUID = $uuid;
        $inzerat->remember_token = $token;
        $inzerat->created_at = $timestamp;
        $inzerat->updated_at = $timestamp;
        //dd($ulica,$plocha,$cena,$izby,$poschodie,$issale,$popis,$typ_nehnutelnosti_id,$id_pouz,$vil_id,$token,$timestamp);
        $inzerat->save();
        $this->foto($request, $uuid);
        return redirect()->action('AdminController@showEstates');
    }
    public function foto(Request $request, $uuid)
    {

        if ($request->hasFile('obrazok')) {
            $destinationPath = public_path('images/foundation/' . $uuid);

            foreach ($request->file('obrazok') as $foto) {
                //ziskanie koncovky suboru
                $extension = $foto->getClientOriginalExtension();
                //nazov suboru
                $input = Uuid::generate() . '.' . $extension;
                $foto->move($destinationPath, $input);
            }
        }

    }
    public function updateEstate(Request $request){

        $timestamp = Carbon::now()->toDateTimeString();
        $help =  $request['city'];
        $village = Village_model::where("fullname", "=", $help)->first();
        $vil_id = $village->id;
        $UUID=$request->uuid;
        $inzerat = Inzerat::where('UUID',$UUID)->first();
        $inzerat->update(["street" => $request->input('street'),
            "area"=> $request->input('plocha'),
            "price" => $request->input('cena'),
            "room_number" => $request->input('pocet_izieb'),
            "floors" => $request->input('poschodie'),
            "issale" => $request->input('ponuka'),
            "description" => $request->input('popis'),
            "estate_type_id" => $request->input('typ_nehnutelnosti'),
            "village_id" => $vil_id,
            "updated_at" => $timestamp]);
        $this->foto($request, $UUID);
        $auth=Auth::user();
       // $user=User::find($auth->id);

        if($auth->privilege<4){
           // $c='ifide';
           // dd($c);
            //$this->showEstatesOfAgency($user->agency->UUID );
            return redirect()->action('AdminController@showEstatesOfAgenc');
        }else{
            return redirect()->action('AdminController@showEstates');
        }

    }



    public function showEstatesOfAgenc(){
        //načíta inzeráty zvolenej agentúry

        $auth=Auth::user();
        $user=User::find($auth->id);
        $agency = Kancelaria::where('UUID', $user->agency->UUID)->first();
        $agencyname = $agency->name;
        $estates = Eetvview::where('agency', $agencyname)->get();
        return view("dashboard/dash_inzeraty", ['estates' => $estates]);
    }

    public function deleteEstate($UUID){
       //$c='ciao';
       // dd($c);
        $inzerat=Inzerat::where('UUID',$UUID)->first();
        $inzerat->delete();
        //return redirect()->action('AdminController@showEstates');
        return back();
    }
    public function deleteEstateDetail($UUID){

        $inzerat=Inzerat::where('UUID',$UUID)->first();
        $inzerat->delete();
        //return redirect()->action('AdminController@showEstates');
        $auth=Auth::user();
        // $user=User::find($auth->id);

        if($auth->privilege<4){
            // $c='ifide';
            // dd($c);
            //$this->showEstatesOfAgency($user->agency->UUID );
            return redirect()->action('AdminController@showEstatesOfAgenc');
        }else{
            return redirect()->action('AdminController@showEstates');
        }


    }
    public function deleteEstateOfUser($uuid){
        $inzerat=Inzerat::where('UUID',$uuid)->first();
        $pouzid=$inzerat->users_id;
        $inzerat->delete();
        $estates=Eetvview::where('users_id',$pouzid)->get();
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
        if(Auth::user() == null){
            return redirect('/');
        }
        if(Auth::user()->privilege > 3 || Auth::user()->privilege < 2 ){
            return redirect('/');
        } else {
            $agency = Kancelaria::where('id', Auth::user()->agency_id)->first();
            $agencyname = $agency->name;
            $estates = Eetvview::where('agency', $agencyname)->get();
            return view("dashboard/dash_inzeraty", ['estates' => $estates]);
        }
    }


    public function showAgency($uuid){

        //načíta všetky kancelárie
        $agency=Kancelaria::where('UUID',$uuid)->first();

        $village=Village_model::where('id',$agency->village_id)->first();

       // dd($region);

        return view("dashboard/dash_edit_kancelaria",['agency' =>$agency],['village'=>$village]);
    }

    public function showAgencyid($id){

        //načíta všetky kancelárie
        $agency=Kancelaria::where('id',$id)->first();

        $village=Village_model::where('id',$agency->village_id)->first();

        // dd($region);

        return view("dashboard/dash_edit_kancelaria",['agency' =>$agency],['village'=>$village]);
    }



    public function showAgencies(){
        //načíta všetky kancelárie
        if(Auth::user() == null){
            return redirect('/');
        }
        if(Auth::user()->privilege < 4){
            return redirect('/');
        } else {
            $agencies=Kancelaria::where('id','>','1')->get();
            return view("dashboard/dash_kancelarie",['agencies' =>$agencies]);
        }
    }
    public function addAgency(Request $request)
    {
        $help = $request['city'];
        $village = Village_model::where("fullname", $help)->first();

        $uuid = Uuid::generate();
        $nazov = $request->input('estate_name');
        $konatel = $request->input('konatel');
        $adresa = $request->input('street');
        $telefon = $request->input('tel_1');
        $telefon2 = $request->input('tel_2');
        $mail = $request->input('email');
        $iban = $request->input('iban');
        $ico = $request->input('ico');
        $dic = $request->input('dic');
        $timestamp = Carbon::now()->toDateTimeString();
        $token = $request->input('_token');
        $village_id = $village->id;


        $kancel = new Kancelaria();
        $kancel->name = $nazov;
        $kancel->director = $konatel;
        $kancel->address = $adresa;
        $kancel->phone = $telefon;
        $kancel->phone2 = $telefon2;
        $kancel->email = $mail;
        $kancel->IBAN = $iban;
        $kancel->ICO = $ico;
        $kancel->DIC = $dic;
        $kancel->UUID = $uuid;
        $kancel->village_id = $village_id;
        $kancel->remember_token = $token;
        $kancel->created_at = $timestamp;
        $kancel->updated_at = $timestamp;
        $kancel->save();



        return redirect()->action('AdminController@showAgencies');
    }


    public function getAgencyList(){
        //kancelárie + kancelária 0
        if(Auth::user() == null){
            return redirect('/');
        }
        if(Auth::user()->privilege < 2){
            return redirect('/');
        } else {
            $user=Auth::user();
            $agencies=Kancelaria::all();
            return view("dashboard/dash_add_user",['agencies' =>$agencies],['user' =>$user]);
        }
    }

    public function updateAgency(Request $request){
        $timestamp = Carbon::now()->toDateTimeString();
        $uuid=$request->input('uuid');
        $help = $request['city'];
        $village = Village_model::where("fullname", $help)->first();
        $kancelaria = Kancelaria::where('UUID',$uuid)->first();
        $kancelaria->update(["name" => $request->input('estate_name'),
            "director" => $request->input('konatel'),
            "address" => $request->input('street'),
            "phone" => $request->input('tel_1'),
            "phone2" => $request->input('tel_2'),
            "email" => $request->input('email'),
            "IBAN"=> $request->input('iban'),
            "ICO"=> $request->input('ico'),
            "DIC"=> $request->input('dic'),
            "village_id" => $village->id,
            "updated_at" => $timestamp]);

        $auth=Auth::user();
        // $user=User::find($auth->id);

        if($auth->privilege<4){
            // $c='ifide';
            // dd($c);
            //$this->showEstatesOfAgency($user->agency->UUID );
            return redirect()->action('AdminController@showEstatesOfAgenc');
        }else{
            return redirect()->action('AdminController@showAgencies');
        }

    }
    public function deleteAgency($uuid){

        $kancelaria = Kancelaria::where('UUID',$uuid)->first();
        $kancelaria->delete();

        return redirect()->action('AdminController@showAgencies');
    }


}