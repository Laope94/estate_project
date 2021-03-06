<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 21.11.2018
 * Time: 18:06
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Village_model extends Model
{
    protected  $table = 'villages';

    protected $fillable = [
        'fullname', 'shortname','district_id'
    ];


    public function estates(){

        return $this->hasMany('App\Models\Inzerat','village_id');
    }

    public function district(){

        return $this->belongsTo('App\Models\District_model','district_id');
    }
}