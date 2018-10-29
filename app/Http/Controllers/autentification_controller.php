<?php
/**
 * Created by PhpStorm.
 * User: Matej
 * Date: 29. 10. 2018
 * Time: 10:32
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class autentification_controller extends Controller
{
    public function registrovat(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = md5($request->input('password'));

        if($name == null || $email == null || $password == null){
            echo "Nevyplnili ste všetky údaje!";
        } else{
            DB::insert('INSERT INTO users(id, name, email, password) VALUES(?,?,?,?)', [null, $name, $email, $password]);
            echo "Vaša registrácia prebehla úspešne.";
        }
    }

    public function login(Request $request){
        $name = $request->input('name');
        $password = md5($request->input('password'));

        $data = DB::select('SELECT id FROM users WHERE name = ? and password = ?', [$name, $password]);

        if(count($data) == 1){
            echo "Ahoj ".$name." úspešne si sa prihlásil/a.";
        } else {
            echo "Nezadali ste správne prihlasovacie údaje.";
        }
    }

    //dorobit
    public function logout(){

    }
}
?>