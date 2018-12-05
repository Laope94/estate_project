<?php
/**
 * Created by PhpStorm.
 * User: Matej
 * Date: 29. 10. 2018
 * Time: 23:25
 */

namespace App\Http\Controllers;


use App\Models\Eetvview;
use App\Models\EstateUsers;
use App\Models\Inzerat;
use App\Models\User;
use App\Models\Village_model;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use Webpatser\Uuid\Uuid;

class InzeratController extends Controller
{
    //pridavanie inzeratov
    public function pridajInzerat(Request $request){

        $help =  $request['city'];
        $village = Village_model::where("fullname", "=", $help)->first();
        $vil_id = $village->id;

        $uuid = Uuid::generate();
        $ulica = $request->input('street');
        $plocha = $request->input('plocha');
        $cena = $request->input('cena');
        $izby = $request->input('pocet_izieb');
        $poschodie = $request->input('poschodie');
        $fotografie = $this->foto($request);
        $popis = $request->input('popis');
        $typ_nehnutelnosti_id = $request->input('typ_nehnutelnosti');
        $village_id = $vil_id;
        $timestamp = Carbon::now()->toDateTimeString();
        $token = $request->input('_token');
        $issale = 0;
        $pouzivatel = Auth::id();


        $inzerat = new Inzerat();
        $inzerat->street = $ulica;
        $inzerat->area = $plocha;
        $inzerat->price = $cena;
        $inzerat->room_number = $izby;
        $inzerat->floors = $poschodie;
        $inzerat->issale = $issale;
        $inzerat->pictures = $fotografie;
        $inzerat->description = $popis;
        $inzerat->estate_type_id = $typ_nehnutelnosti_id;
        $inzerat->users_id = $pouzivatel;
        $inzerat->village_id = $village_id;
        $inzerat->agency_id = null;
        $inzerat->UUID = $uuid;
        $inzerat->remember_token = $token;
        $inzerat->created_at = $timestamp;
        $inzerat->updated_at = $timestamp;
        $inzerat->save();

        return redirect()->action('InzeratController@showAllAction');
    }

    //editacia inzeratu
    public function showAction($id){
        $inzerat = Inzerat::find($id);
        return view("edit_inzerat", ['inzerat' => $inzerat]);
    }


    public function mostRecentEstates(){
        //6 najnovších inzerátov z viewu
       $inzeraty = Eetvview::orderBy('id','desc')->take(6)->get();
   // return view("najnovsie", ['inzeraty' => $inzeraty]);
       return view("home", ['inzeraty' => $inzeraty]);

     }
    public function estateDetail($id){
        //všetky detaily inzerátu
        $inzeraty = Eetvview::find($id);
    }





    public function updateAdv(Request $request, $id){
        $timestamp = Carbon::now()->toDateTimeString();
        $inzerat = Inzerat::where("id", "=", $id)->first();
        $inzerat->update(["street" => $request->input('ulica'),
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


    //pridavanie fotiek
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

    public function megaFilter(){
        $estates = Inzerat::where(function($query){
            $types = Input::has('type') ? Input::get('type') : [];
            $isforsale = Input::has('issale') ? Input::get('issale') : [];
            $min_price = Input::has('min_price') ? Input::get('min_price') : null;
            $max_price = Input::has('max_price') ? Input::get('max_price') : null;
            $min_area = Input::has('min_area') ? Input::get('min_area') : null;
            $max_area = Input::has('max_area') ? Input::get('max_area') : null;
            $room_number = Input::has('room_number') ? Input::get('room_number') : null;

            //s tymto treba este nieco spravit, aby to fungovalo spravne, pripadne tam dat combobox
            if(isset($types)){
                foreach ($types as $type) {
                    $query->where('estate_type_id', '=', $type);
                }
            }

            if(isset($isforsale)){
                if(count($isforsale) > 1){

                } else {
                    foreach ($isforsale as $issale) {
                        $query->where('issale', '=', $issale);
                    }
                }
            }

            if(isset($min_price) && isset($max_price)) {
                $query->where('price', '>=', $min_price)
                    ->where('price', '<=', $max_price);
            }

            if(isset($min_area) && isset($max_area)){
                $query->where('area', '>=', $min_area)
                    ->where('area', '<=', $max_area);
            }

            if(isset($room_number)){
                $query->where('room_number', '=', $room_number);
            }
        })->get();
        return view("filter", ['estates' => $estates]);
    }
}