<?php
/**
 * Created by PhpStorm.
 * User: Matej
 * Date: 19. 11. 2018
 * Time: 19:29
 */

namespace App\Http\Controllers;


class AuthController extends Controller
{
    public function login(){

    }

    public function logout(){
        Auth::logout();
        return view('login');
    }
}