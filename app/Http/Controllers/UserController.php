<?php
/**
 * Created by PhpStorm.
 * User: Matej
 * Date: 05. 11. 2018
 * Time: 16:27
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Eetvview;
use App\Models\Usersvillageview;
use App\Models\Kancelaria;
use App\Models\Village_model;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webpatser\Uuid\Uuid;

class UserController extends Controller
{

    public function getMe(){
        if(Auth::user() == null){
            return redirect('/');
        } else {
            $id = Auth::id();
            $user = Usersvillageview::find($id);
            $inzeraty = Eetvview::where('users_id', $id)->orderBy('id', 'desc')->get();
            return view("user/profile", ['user' => $user],['inzeraty'=>$inzeraty]);
        }
    }

    //registracia kancelarie
    public function registraciaKancelarie(Request $request)
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
        $agency = Kancelaria::where('UUID', $uuid)->first();
        $id_agency = $agency->id;

        //admin kancelárie
        $uuid = Uuid::generate();
        $meno = $request->input('name');
        $priezvisko = $request->input('surname');
        $telefon = $request->input('tel_a');
        $mail = $request->input('email_a');
        $heslo = $request->input('password');
        $timestamp = Carbon::now()->toDateTimeString();
        $token = $request->input('_token');


//admin kancelarie opravnenie 4
        $kancel = new User();
        $kancel->name = $meno;
        $kancel->surname = $priezvisko;
        $kancel->phone = $telefon;
        $kancel->email = $mail;
        $kancel->password = bcrypt($heslo);
        $kancel->UUID = $uuid;
        $kancel->privilege = 4;
        $kancel->agency_id = $id_agency;
        $kancel->remember_token = $token;
        $kancel->created_at = $timestamp;
        $kancel->updated_at = $timestamp;
        $kancel->save();


        return redirect()->action('InzeratController@mostRecentEstates');
    }

    public function updateKancelarie(Request $request, $uuid)
    {
        $help = $request['city'];
        $village = Village_model::where("fullname", $help)->first();

        $timestamp = Carbon::now()->toDateTimeString();
        $kancelaria = Kancelaria::where('UUID', $uuid)->first();
        $kancelaria->update(["name" => $request->input('meno'),
            "director" => $request->input('priezvisko'),
            "address" => $request->input('adresa'),
            "phone" => $request->input('tel_num'),
            "phone2" => $request->input('tel_num2'),
            "email" => $request->input('mail'),
            "IBAN" => $request->input('iban'),
            "ICO" => $request->input('ico'),
            "DIC" => $request->input('dic'),
            "village_id" => $village->id,
            "updated_at" => $timestamp]);

        return redirect()->action('InzeratController@mostRecentEstates');
    }

    //editacia pouzivatela
    public function showAction($id)
    {
        $user = User::find($id);
        return view("profile", ['user' => $user]);
    }

    public function updateUserProfile(Request $request)
    {
        $help = $request['city'];
        $village = Village_model::where("fullname", "=", $help)->first();

        $timestamp = Carbon::now()->toDateTimeString();
        $id = Auth::id();
        $user = User::find($id);
        $user->update(["name" => $request->input('name'),
            "surname" => $request->input('surname'),
            "village_id" => $village->id,
            "address" => $request->input('street'),
            "email" => $request->input('email'),
            "phone" => $request->input('phone_prim'),
            "phone2" => $request->input('phone_sec'),
            "updated_at" => $timestamp]);

        return redirect()->action('UserController@getMe');
    }


}