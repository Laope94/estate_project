<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 21.11.2018
 * Time: 18:06
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class District_model extends Model
{
    protected  $table = 'districts';

    protected $fillable = [
        'name','region_id'
    ];

    public function villages(){

        return $this->hasMany('App\Models\Village_model','district_id');
    }
}