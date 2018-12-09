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
        //TODO: pridať ineráty usera
        $id = Auth::id();
        $user = Usersvillageview::find($id);
        $inzeraty = Eetvview::where('users_id', $id)->orderBy('id', 'desc')->get();
        return view("user/profile", ['user' => $user],['inzeraty'=>$inzeraty]);
    }

    //registracia kancelarie
    public function registraciaKancelarie(Request $request){
        $uuid = Uuid::generate();
        $nazov = $request->input('nazov');
        $konatel = $request->input('konatel');
        $adresa = $request->input('adresa');
        $telefon = $request->input('tel_cislo');
        $telefon2 = $request->input('tel_num2');
        $mail = $request->input('email');
        $iban = $request->input('iban');
        $ico = $request->input('ico');
        $dic = $request->input('dic');
        $timestamp = Carbon::now()->toDateTimeString();
        $token = $request->input('_token');

        if($telefon2 == null){
            $telefon2 == null;
        } else {
            $telefon2 = $request->input('tel_num2');
        }

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
        $kancel->remember_token = $token;
        $kancel->created_at = $timestamp;
        $kancel->updated_at = $timestamp;
        $kancel->save();

        return redirect()->action('UserController@showAllAction');
    }

    //editacia pouzivatela
    public function showAction($id){
        $user = User::find($id);
        return view("profile", ['user' => $user]);
    }

    public function updateUser($id, Request $request){
        $timestamp = Carbon::now()->toDateTimeString();
        $user = User::where("id", "=", $id)->first();
        $user->update(["name" => $request->input('meno'),
            "surname" => $request->input('priezvisko'),
            "IBAN"=> $request->input('iban'),
            "city" => $request->input('mesto'),
            "address" => $request->input('adresa'),
            "email" => $request->input('mail'),
            "phone" => $request->input('tel_num'),
            "phone2" => $request->input('tel_num2'),
            "privilege" => 0,
            "updated_at" => $timestamp]);

        return redirect()->action('UserController@showAllAction');
    }
    public function updateUserProfile( Request $request){
        $help =  $request['city'];
        $village = Village_model::where("fullname", "=", $help)->first();
        $vil_id = $village->id;
        $timestamp = Carbon::now()->toDateTimeString();
        $id=Auth::id();
        $user = User::find( $id);
        $user->update(["name" => $request->input('name'),
            "surname" => $request->input('surname'),
            "village_id" => $vil_id,
            "address" => $request->input('street'),
            "email" => $request->input('email'),
            "phone" => $request->input('phone_prim'),
            "phone2" => $request->input('phone_sec'),
            "updated_at" => $timestamp]);

        return redirect()->action('UserController@getMe');
    }

    //mazanie pouzivatelov
    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();

        return redirect()->action('UserController@showAllAction');
    }

    //vypis pouzivatelov
    public function showAllAction(){
        $users = User::all();
        return view("users", ['users' => $users]);
    }

    //vypis kancelarii
    public function showKancelarie(){
        $kancle = Kancelaria::all();
        return view("kancelarie", ['kancelarie' => $kancle]);
    }
}