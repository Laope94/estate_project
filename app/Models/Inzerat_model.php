<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 20.11.2018
 * Time: 16:06
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Inzerat_model extends Model
{
    protected  $table = 'inzerat';

    protected $fillable = [
        'nadpis','ulica', 'plocha', 'cena','pocet_izieb','poschodie','fotografie','popis','typ_nehnutelnosti_id','okres_id','pouzivatelia_id'
    ];
}