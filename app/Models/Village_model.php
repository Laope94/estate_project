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
    protected  $table = 'village';

    protected $fillable = [
        'fullname', 'shortname','zip','district_id','region_id'
    ];
}