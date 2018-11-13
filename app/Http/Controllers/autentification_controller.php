<?php
/**
 * Created by PhpStorm.
 * User: Matej
 * Date: 29. 10. 2018
 * Time: 10:32
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inzerat;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class autentification_controller extends Controller
{
    public function login(Request $request){
        $mail = $request->input('email');
        $heslo = md5($request->input('password'));
        $id = User::select('id')->where("mail", "=", $mail)->first();
        $idSubst = substr($id, 6);

        $data = DB::select('SELECT id FROM pouzivatelia WHERE mail = ? and heslo = ?', [$mail, $heslo]);
        if(count($data) == 1){
            //sem pojde view ktory vypise inzeraty daneho usera, alebo ukaze jeho profil

            echo "Ahoj, úspešne si sa prihlásil. <br /><br />";
            $inzeraty = Inzerat::where('pouzivatelia_id', '=', $idSubst)->get();
            echo "<strong>Tu sú tvoje inzeráty: </strong><br /><br />";
            foreach ($inzeraty as $inzerat){
                echo "<strong>Názov: </strong>".$inzerat->nadpis.", ";
                echo "<strong>Cena: </strong>".$inzerat->cena."<br />";
            }
        } else {
            echo "Nezadali ste správne prihlasovacie údaje.";
        }
    }

    public function logout(){
        Auth::logout();
        return view('/login');
    }
}