<?php
/**
 * Created by PhpStorm.
 * User: Matej
 * Date: 29. 10. 2018
 * Time: 23:25
 */

namespace App\Http\Controllers;


use App\Models\Inzerat;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Webpatser\Uuid\Uuid;

class InzeratController extends Controller
{
    //treba nejako poriesit foreign key
    public function pridajInzerat(Request $request){
        $nadpis = $request->input('nadpis');
        $ulica = $request->input('ulica');
        $plocha = $request->input('plocha');
        $cena = $request->input('cena');
        $izby = $request->input('pocet_izieb');
        $poschodie = $request->input('poschodie');
        $fotografie = $this->foto($request);
        $popis = $request->input('popis');
        $typ_nehnutelnosti_id = $request->input('typ_nehnutelnosti');
        $okres = $request->input('okres');
        $timestamp = Carbon::now()->toDateTimeString();
        $token = $request->input('_token');
        $pouzivatel = 3;

        if($nadpis == null || $plocha == null || $cena == null || $izby == null || $poschodie == null ||
            $popis == null || $typ_nehnutelnosti_id == null || $okres == null){
            echo "Nevyplnili ste všetky údaje!";
        } else{
            $inzerat = new Inzerat();
            $inzerat->title = $nadpis;
            $inzerat->street = $ulica;
            $inzerat->area = $plocha;
            $inzerat->price = $cena;
            $inzerat->room_number = $izby;
            $inzerat->floors = $poschodie;
            $inzerat->pictures = $fotografie;
            $inzerat->description = $popis;
            $inzerat->estate_type_id = $typ_nehnutelnosti_id;
            $inzerat->district_id = $okres;
            $inzerat->users_id = $pouzivatel;
            $inzerat->remember_token = $token;
            $inzerat->created_at = $timestamp;
            $inzerat->updated_at = $timestamp;
            $inzerat->save();

            return redirect()->action('InzeratController@showAllAction');
        }
    }

    //editacia inzeratu
    public function showAction($id){
        $inzerat = Inzerat::find($id);
        return view("edit_inzerat", ['inzerat' => $inzerat]);
    }

    public function updateAdv(Request $request, $id){
        $timestamp = Carbon::now()->toDateTimeString();
        $inzerat = Inzerat::where("id", "=", $id)->first();
        $inzerat->update(["title" => $request->input('nadpis'),
            "street" => $request->input('ulica'),
            "area"=> $request->input('plocha'),
            "price" => $request->input('cena'),
            "room_number" => $request->input('pocet_izieb'),
            "floors" => $request->input('poschodie'),
            "pictures" => "foto", //$request->input('foto'),
            "description" => $request->input('popis'),
            "estate_type_id" => $request->input('typ_nehnutelnosti'),
            "district_id" => $request->input('okres'),
            "updated_at" => $timestamp]);

        return redirect()->action('InzeratController@showAllAction');
    }

    //mazanie inzeratov
    public function deleteAdv($id) {
        $user = Inzerat::find($id);
        $user->delete();

        return redirect()->action('InzeratController@showAllAction');
    }

    //vypis vsetkych inzeratov
    public function showAllAction(){
        $inzeraty = Inzerat::all();
        return view("inzeraty", ['inzeraty' => $inzeraty]);
    }

    //pripadne sa pozriet na resize fotiek este
    public function foto(Request $request){
        $input1 = Uuid::generate();
        $destinationPath = public_path('images/'.$input1);

        if ($request->hasFile('obrazok')) {

            foreach ($request->file('obrazok') as $foto) {
                //ziskanie koncovky suboru
                $extension = $foto->getClientOriginalExtension();
                //nazov suboru
                $input = Uuid::generate().'.'.$extension;
                $foto->move($destinationPath, $input);
            }
        }

        return $input1;
    }

    //-------------------------------Filtre--------------------------------------
    //vsade pridat view potom

    //filter na lokalitu
    public function localityFilter(Request $request){
        $okres_id = $request->input('okres');
        $lokalita = Inzerat::all()->where("district_id", "=", $okres_id);
    }

    public function priceFilter(Request $request){
        $cena = $request->input('cena');
        $cenovo = Inzerat::all()->where("price", ">=", $cena+5000);
    }

    public function typeFilter(Request $request){
        $typ_nehnutelnosti = $request->input('typ_nehnutelnosti');
        $typ = Inzerat::all()->where("estate_type_id", "=", $typ_nehnutelnosti);
    }

    public function roomFilter(Request $request){
        $izby = $request->input('pocet_izieb');
        $pocet_izieb = Inzerat::all()->where("room_number", "=", $izby);
    }

    public function officeFilter(Request $request){
        $office = $request->input('office');
        $kancel = Inzerat::all()->where("agency_id", "=", $office);
    }
}