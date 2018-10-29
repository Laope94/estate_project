<?php
/**
 * Created by PhpStorm.
 * User: Matej
 * Date: 29. 10. 2018
 * Time: 10:32
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class autentification_controller extends Controller
{
    public function registrovat(Request $request){
        $meno = $request->input('name');
        $priezvisko = $request->input('surname');
        $mesto = $request->input('town');
        $adresa = $request->input('address');
        $mail = $request->input('email');
        $telefon = $request->input('tel_num');
        $heslo = md5($request->input('password'));
        $opravnenie = $request->input('permission');
        $timestamp = Carbon::now()->toDateTimeString();
        $token = $request->input('_token'); //remember token, mozno ho tam nebude treba (zistit na co to je)

        if($meno == null || $priezvisko == null || $mesto == null || $adresa == null || $mail == null ||
           $telefon == null || $heslo == null){
            echo "Nevyplnili ste všetky údaje!";
        } else{
            DB::insert('INSERT INTO pouzivatelia(id, meno, priezvisko, mesto, adresa, mail, heslo, telefon, opravnenie, 
                remember_token, created_at, updated_at) 
                VALUES(?,?,?,?,?,?,?,?,?,?,?,?)',
                [null, $meno, $priezvisko,$mesto, $adresa, $mail, $heslo, $telefon, $opravnenie, $token,
                 $timestamp, $timestamp]);
            echo "Vaša registrácia prebehla úspešne.";
        }
    }

    public function login(Request $request){
        $mail = $request->input('email');
        $heslo = md5($request->input('password'));

        $data = DB::select('SELECT id FROM pouzivatelia WHERE mail = ? and heslo = ?', [$mail, $heslo]);
        if(count($data) == 1){
            echo "Ahoj, úspešne si sa prihlásil/a.";
        } else {
            echo "Nezadali ste správne prihlasovacie údaje.";
        }
    }

    public function logout(){
        Auth::logout();
    }
}