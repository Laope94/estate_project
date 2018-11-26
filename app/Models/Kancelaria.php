<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kancelaria extends Model
{
    protected $table = 'agencies';

    protected $fillable = ['name', 'director', 'address', 'phone', 'phone2', 'email',
        'IBAN', 'ICO', 'DIC', 'remember_token', 'created_at', 'updated_at'];
}
