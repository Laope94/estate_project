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
    protected  $table = 'district';

    protected $fillable = [
        'name', 'veh_reg_num','code','region_id'
    ];
}