<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'pouzivatelia';

    protected $fillable = ['meno', 'priezvisko', 'IBAN', 'mesto', 'adresa', 'mail',
        'heslo', 'telefon', 'telefon2', 'opravnenie', 'kancelaria_id', 'remember_token', 'created_at', 'updated_at'];
}
