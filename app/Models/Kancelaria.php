<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kancelaria extends Model
{
    protected $table = 'kancelaria';

    protected $fillable = ['nazov', 'konatel', 'adresa', 'telefon', 'telefon2', 'mail',
        'IBAN', 'ICO', 'DIC', 'remember_token', 'created_at', 'updated_at'];
}
