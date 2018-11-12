<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 12.11.2018
 * Time: 17:10
 */

namespace App\Http\Controllers;

use App\Models\Admin_model;
use Illuminate\Http\Request;
class AdminController
{
    public function adminForm(){

        return view('pridajadmina');
    }

    public function zobrazAdminov(){
        $admini=Admin_model::all();
        return view("zobrazadminov",['admini' =>$admini]);
    }
    public function pridajAdmina(Request $request){

        $meno = $request ->input('meno');
        $priezvisko = $request ->input('priezvisko');
        $IBAN=$request ->input('IBAN');
        $mesto=$request ->input('mesto');
        $adresa=$request ->input('adresa');
        $email = $request ->input('mail');
        $heslo = $request ->input('heslo');
        $telefon=$request ->input('telefon');
        $telefon2=$request ->input('telefon2');
        $opravnenie=$request ->input('opravnenie');
        $kancelaria_id=$request ->input('kancelaria_id');

        $admin = new Admin_model();
        $admin -> meno = $meno;
        $admin -> priezvisko = $priezvisko;
        $admin-> IBAN = $IBAN;
        $admin -> mesto = $mesto;
        $admin -> adresa = $adresa;
        $admin-> mail = $email;
        $admin-> heslo=$heslo;
        $admin -> telefon = $telefon;
        $admin -> telefon2 = $telefon2;
        $admin -> opravnenie = $opravnenie;
        $admin -> kancelaria_id = $kancelaria_id;
        $admin ->save();
        return response()->view('pridajadmina');


    }
    public function zobrazAdmina($id){
        $admin=Admin_model::find($id);
        return view("upravadmina", ['admin'=>$admin]);
    }


    public function vymazAdmina($id){
        $admin=Admin_model::find($id);
        $admin->delete();
        $admini=Admin_model::all();
        return view("zobrazadminov",['admini' =>$admini]);

    }

    public function upravAdmina($id, Request $request){
        $admin=Admin_model::where("id","=",$id )->first();
        $admin ->update (["meno"=>$request->input('meno'),
            "priezvisko"=>$request->input('priezvisko'),
            "IBAN"=>$request->input('IBAN'),
            "mail"=>$request->input('email'),
            "adresa"=>$request->input('adresa'),
            "mesto"=>$request->input('mesto'),
            "telefon"=>$request->input('telefon'),
            "telefon2"=>$request->input('telefon2'),
            "opravnenie"=>$request->input('opravnenie'),
            "heslo"=>$request->input('heslo')]);


        return redirect()->action('AdminController@zobrazAdminov');
}

}