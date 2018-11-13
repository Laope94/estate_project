<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inzerat extends Model
{
    protected $table = 'inzerat';

    protected $fillable = ['nadpis', 'ulica', 'plocha', 'cena', 'pocet_izieb', 'poschodie',
        'fotografie', 'popis', 'typ_nehnutelnosti_id', 'okres_id', 'pouzivatelia_id',
        'remember_token', 'created_at', 'updated_at'];
}
