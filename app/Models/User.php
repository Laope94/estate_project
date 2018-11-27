<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $table = 'users';


    protected $fillable = [
        'name', 'surname', 'city', 'address', 'email', 'password', 'phone', 'phone2', 'privilege', 'agency_id', 'UUID',
        'remember_token', 'created_at', 'updated_at'
    ];
}