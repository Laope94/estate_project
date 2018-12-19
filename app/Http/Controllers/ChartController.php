<?php
/**
 * Created by PhpStorm.
 * User: Matej
 * Date: 28. 11. 2018
 * Time: 12:32
 */

namespace App\Http\Controllers;


use App\Models\Kancelaria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index(){
        if(Auth::user() == null){
            return redirect('/');
        }
        if(Auth::user()->privilege != 3){
            return redirect('/');
        } else {
            $agency = Auth::user()->agency_id;
            $agency_id = Kancelaria::where("id", "=", $agency)->first();
            $agency_name = $agency_id->name;

            //typ nehnutelnosti graf pre agenturu
            $type = DB::table('eetvview')
                ->select(
                    DB::raw('type as type'),
                    DB::raw('count(*) as number'))
                ->where('agency', '=', $agency_name)
                ->groupBy('type')
                ->get();
            $type_array[] = ['Type', 'Number'];
            foreach($type as $key => $value)
            {
                $type_array[++$key] = [$value->type, $value->number];
            }

            //typ nehnutelnosti graf globalne
            $type_glob = DB::table('eetvview')
                ->select(
                    DB::raw('type as type'),
                    DB::raw('count(*) as number'))
                ->groupBy('type')
                ->get();
            $type_glob_array[] = ['Type', 'Number'];
            foreach($type_glob as $key => $value)
            {
                $type_glob_array[++$key] = [$value->type, $value->number];
            }

            //na predaj/prenajom graf pre agenturu
            $issale = DB::table('eetvview')
                ->select(
                    DB::raw('issale as issale'),
                    DB::raw('count(*) as number'))
                ->where('agency', '=', $agency_name)
                ->groupBy('issale')
                ->get();
            $issale_array[] = ['Issale', 'Number'];
            foreach($issale as $key => $value)
            {
                $rewritten = "";
                if($value->issale==0)
                    $rewritten = "Prenájom";
                else
                    $rewritten = "Predaj";
                $issale_array[++$key] = [$rewritten, $value->number];
            }

            //na predaj/prenajom graf v globale
            $issale_glob = DB::table('eetvview')
                ->select(
                    DB::raw('issale as issale'),
                    DB::raw('count(*) as number'))
                ->groupBy('issale')
                ->get();
            $issale_glob_array[] = ['Issale', 'Number'];
            foreach($issale_glob as $key => $value)
            {
                $rewritten = "";
                if($value->issale==0)
                    $rewritten = "Prenájom";
                else
                    $rewritten = "Predaj";
                $issale_glob_array[++$key] = [$rewritten, $value->number];
            }

            return view('charts')->with('type', json_encode($type_array))
                ->with('type_glob', json_encode($type_glob_array)) //mozno prepisat to co je v uvodzovkach
                ->with('issale', json_encode($issale_array))
                ->with('issale_glob', json_encode($issale_glob_array)); //mozno prepisat to co je v uvodzovkach
        }
    }
}