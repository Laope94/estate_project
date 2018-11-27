<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 12.11.2018
 * Time: 17:10
 */

namespace App\Http\Controllers;

use App\Models\Admin_model;
use App\Models\Inzerat_model;
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
        $admin -> name = $meno;
        $admin -> surname = $priezvisko;
        $admin-> IBAN = $IBAN;
        $admin -> city = $mesto;
        $admin -> address = $adresa;
        $admin-> email = $email;
        $admin-> password=$heslo;
        $admin -> phone = $telefon;
        $admin -> phone2 = $telefon2;
        $admin -> privilege = $opravnenie;
        $admin -> agency_id = $kancelaria_id;
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
        $admin ->update (["name"=>$request->input('meno'),
            "surname"=>$request->input('priezvisko'),
            "IBAN"=>$request->input('IBAN'),
            "email"=>$request->input('email'),
            "address"=>$request->input('adresa'),
            "city"=>$request->input('mesto'),
            "phone"=>$request->input('telefon'),
            "phone2"=>$request->input('telefon2'),
            "privilege"=>$request->input('opravnenie'),
            "password"=>$request->input('heslo')]);


        return redirect()->action('AdminController@zobrazAdminov');
}





    public function vymazInzerat($id){
        $inzerat=Inzerat::find($id);
        $inzerat->delete();
        $inzeraty=Inzerat::all();
        return view("zobrazinzeraty",['inzeraty' =>$inzeraty]);

    }

}