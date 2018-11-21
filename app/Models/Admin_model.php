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
    protected  $table = 'pouzivatelia';

    protected $fillable = [
        'meno','priezvisko', 'IBAN', 'mesto','adresa','mail','heslo','telefon','telefon2','opravnenie','kancelaria_id'
    ];
}