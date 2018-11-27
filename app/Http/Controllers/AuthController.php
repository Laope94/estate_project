<?php
/**
 * Created by PhpStorm.
 * User: Matej
 * Date: 19. 11. 2018
 * Time: 19:29
 */

namespace App\Http\Controllers;


use App\Models\User;

class AuthController extends Controller
{
    public function login($id){
        $opravnenie = User::where("id", "=", $id)->get("privilege");
        //rozdelenie pouzivatelov
        //0 - registrovany, 1 - realitka, 2 - admin realitky, 3 - admin, 4 - super admin
        if($opravnenie == 0){

        } else if($opravnenie == 1){

        } else if($opravnenie == 2){

        } else if($opravnenie == 3){

        } else if($opravnenie == 4){

        }
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }
}