<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 12.11.2018
 * Time: 15:01
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Admin_model extends Model
{
    protected  $table = 'users';

    protected $fillable = [
        'name','surname', 'IBAN', 'city','address','email','password','phone','phone2','privilege','agency_id'
    ];
}