<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 21.11.2018
 * Time: 17:27
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Region_model extends Model
{
    protected  $table = 'regions';

    protected $fillable = [
        'name', 'shortcut'
    ];
}