<?php
/**
 * Created by PhpStorm.
 * User: Matej
 * Date: 28. 11. 2018
 * Time: 12:32
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index(){
        $data = DB::table('estates')
            ->select(
                DB::raw('price as price'),
                DB::raw('count(*) as number'))
            ->groupBy('price')
            ->get();
        $array[] = ['Price', 'Number'];
        foreach($data as $key => $value)
        {
            $array[++$key] = [$value->price, $value->number];
        }
        return view('charts')->with('price', json_encode($array));
    }
}