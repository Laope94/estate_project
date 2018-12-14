<?php
/**
 * Created by PhpStorm.
 * User: Matej
 * Date: 29. 10. 2018
 * Time: 23:25
 */

namespace App\Http\Controllers;


use App\Models\District_model;
use App\Models\Eetvview;
use App\Models\EstateUsers;
use App\Models\Inzerat;
use App\Models\Region_model;
use App\Models\User;
use App\Models\Usersvillageview;
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
    public function pridajInzerat(Request $request)
    {
        $help = $request['city'];
        $village = Village_model::where("fullname", "=", $help)->first();
        $vil_id = $village->id;

        if(!auth::check()){
            //ak pridáva neprihlásený
            $uuid = Uuid::generate();
            $meno = $request->input('name');
            $priezvisko = $request->input('surname');
            $mail = $request->input('email');
            $telefon = $request->input('phone');
            $timestamp = Carbon::now()->toDateTimeString();
            $token = $request->input('_token');


            $user = new User();
            $user->name = $meno;
            $user->surname = $priezvisko;
            $user->phone = $telefon;
            $user->email = $mail;
            $user->agency_id = 1;
            $user->privilege = 0;
            $user->UUID=$uuid;
            $user->remember_token = $token;
            $user->created_at = $timestamp;
            $user->updated_at = $timestamp;
            $user->save();
            $pouz=User::where('email',$mail)->first();
            $id_pouz=$pouz->id;
            $redirect='InzeratController@mostRecentEstates';
        }else{
            $id_pouz=Auth::id();
            $redirect='UserController@getMe';
        }
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
        $timestamp = Carbon::now()->toDateTimeString();
        $token = $request->input('_token');
        $issale = $request->input('ponuka');

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
        $inzerat->agency_id = 1;
        $inzerat->UUID = $uuid;
        $inzerat->remember_token = $token;
        $inzerat->created_at = $timestamp;
        $inzerat->updated_at = $timestamp;
        $inzerat->save();


    $inzerat = new Inzerat();
    $inzerat->street = $ulica;
    $inzerat->area = $plocha;
    $inzerat->price = $cena;
    $inzerat->room_number = $izby;
    $inzerat->floors = $poschodie;
    $inzerat->issale = $issale;
    $inzerat->pictures = 'sample';
    $inzerat->description = $popis;
    $inzerat->estate_type_id = $typ_nehnutelnosti_id;
    $inzerat->users_id = $id_pouz;
    $inzerat->village_id = $vil_id;
    $inzerat->UUID = $uuid;
    $inzerat->remember_token = $token;
    $inzerat->created_at = $timestamp;
    $inzerat->updated_at = $timestamp;
       // dd($ulica,$plocha,$cena,$izby,$poschodie,$issale,$popis,$typ_nehnutelnosti_id,$id_pouz,$vil_id,$token,$timestamp);
    $inzerat->save();
        return redirect()->action('InzeratController@megaFilter');
    }


    //editacia inzeratu
    public function showAction($UUID)
    {
        $inzerat = Eetvview::where('UUID', $UUID)->first();

        return view("inzerat/edit_inzerat", ['inzerat' => $inzerat]);
    }


    public function mostRecentEstates()
    {
        //6 najnovších inzerátov z viewu
        $inzeraty = Eetvview::orderBy('id', 'desc')->take(6)->get();
        // return view("najnovsie", ['inzeraty' => $inzeraty]);
        return view("home", ['inzeraty' => $inzeraty]);

    }

    public function estateDetail($UUID)
    {
        //všetky detaily inzerátu   ------funguje
        $inzerat = Eetvview::where('UUID', $UUID)->first();

        $pouzivatel = Usersvillageview::find($inzerat->users_id);

        return view("inzerat/inzerat_detail", ['inzerat' => $inzerat], ['pouzivatel' => $pouzivatel]);
    }

    public function estatePeek($id)
    {
        //inzerat_peek ----------treba mu ešte poslať to id
        $inzerat = Eetvview::find($id);

        return view("inzerat/inzerat_peek", ['inzerat' => $inzerat]);
    }


    public function updateAdv(Request $request, $UUID)
    {
        $timestamp = Carbon::now()->toDateTimeString();
        $inzerat = Inzerat::where('UUID', $UUID)->first();
        $inzerat->update(["street" => $request->input('street'),
            "area" => $request->input('plocha'),
            "price" => $request->input('cena'),
            "room_number" => $request->input('pocet_izieb'),
            "floors" => $request->input('poschodie'),
            "pictures" => "sample", //$request->input('foto'),
            "description" => $request->input('popis'),
            "issale" => $request->input('ponuka'),
            "estate_type_id" => $request->input('typ_nehnutelnosti'),
            "village_id" => 5, //$request->input('obec'),
            "updated_at" => $timestamp]);

        return redirect()->action('InzeratController@showAllAction');
    }

    public function updateAdvProfile(Request $request, $UUID)
    {
        //funguje ale do viewu treba opakovane zadávať do comboboxov ( option disabled)
        $timestamp = Carbon::now()->toDateTimeString();

        $inzerat = Inzerat::where('UUID', $UUID)->first();;
        $inzerat->update(["street" => $request->input('street'),
            "area" => $request->input('plocha'),
            "price" => $request->input('cena'),
            "room_number" => $request->input('pocet_izieb'),
            "floors" => $request->input('poschodie'),
            "description" => $request->input('popis'),
            "issale" => $request->input('ponuka'),
            "estate_type_id" => $request->input('typ_nehnutelnosti'),
            "village_id" => 5, //$request->input('obec'),
            "updated_at" => $timestamp]);

        return redirect()->action('UserController@getMe');
    }


    //mazanie inzeratov
    public function deleteAdv($UUID)
    {
        $user = Inzerat::where('UUID', $UUID)->first();
        $user->delete();

        return redirect()->action('InzeratController@showAllAction');
    }

    public function deleteAdvPeek($UUID)
    {
        $inzerat = Inzerat::where('UUID', $UUID)->first();
        $inzerat->delete();

        return redirect()->action('UserController@getMe');
    }

    //vypis vsetkych inzeratov
    public function showAllAction()
    {
        $inzeraty = Inzerat::all();
        return view("inzeraty", ['inzeraty' => $inzeraty]);
    }

    //pridavanie fotiek
    public function foto(Request $request)
    {
        $input1 = Uuid::generate();
        $destinationPath = public_path('images/foundation/' . $input1);

        if ($request->hasFile('obrazok')) {

            foreach ($request->file('obrazok') as $foto) {
                //ziskanie koncovky suboru
                $extension = $foto->getClientOriginalExtension();
                //nazov suboru
                $input = Uuid::generate() . '.' . $extension;
                $foto->move($destinationPath, $input);
            }
        }

        return $input1;
    }

    //-------------------------------Filtre--------------------------------------

    public function megaFilter()
    {
        $estates = Eetvview::where(function ($query) {
            $types = Input::has('type') ? Input::get('type') : [];
            $isforsale = Input::has('issale') ? Input::get('issale') : [];
            $min_price = Input::has('min_price') ? Input::get('min_price') : null;
            $max_price = Input::has('max_price') ? Input::get('max_price') : null;
            $min_area = Input::has('min_area') ? Input::get('min_area') : null;
            $max_area = Input::has('max_area') ? Input::get('max_area') : null;
            $room_number = Input::has('room_number') ? Input::get('room_number') : null;
            $region = Input::has('kraj') ? Input::get('kraj') : null;
            $district = Input::has('okres') ? Input::get('okres') : null;
            $village = Input::has('city') ? Input::get('city') : null;

            if (isset($types)) {
                foreach ($types as $type) {
                    if($type == "All"){
                        //nic sa nestane
                    } else {
                    $query->where('type', '=', $type);
                    }
                }
            }

            if (isset($isforsale)) {
                if (count($isforsale) > 1) {
                    //nic sa nestane
                } else {
                    foreach ($isforsale as $issale) {
                        $query->where('issale', '=', $issale);
                    }
                }
            }

            if (isset($min_price) && isset($max_price)) {
                $query->where('price', '>=', $min_price)
                    ->where('price', '<=', $max_price);
            }

            if (isset($min_area) && isset($max_area)) {
                $query->where('area', '>=', $min_area)
                    ->where('area', '<=', $max_area);
            }

            if (isset($room_number)) {
                $query->where('room_number', '=', $room_number);
            }

            if (isset($region)) {
                $help = $region;
                $reg = Region_model::where("id", "=", $help)->first();
                $reg_name = $reg->name;

                $query->where('region', '=', $reg_name);
            }

            if (isset($district)) {
                $help = $district;
                $dist = District_model::where("id", "=", $help)->first();
                $dist_name = $dist->name;

                $query->where('district', '=', $dist_name);
            }

            if (isset($village)) {
                $query->where('village', '=', $village);
            }
        })->get();
        return view("filter", ['estates' => $estates]);
    }

    public function filter(Request $request)
    {
        $district = $request->input('filter');
        $estates = Eetvview::where('district', '=', $district)->get();
        return view("filter", ['estates' => $estates]);
    }
}