<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $table = 'users';

    protected $fillable = ['name', 'priezvisko', 'IBAN', 'mesto', 'adresa', 'email',
        'password', 'telefon', 'telefon2', 'opravnenie', 'kancelaria_id', 'remember_token', 'created_at', 'updated_at'];
}
