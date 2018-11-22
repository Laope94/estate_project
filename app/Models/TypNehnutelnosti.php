<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypNehnutelnosti extends Model
{
    protected $table = 'typ_nehnutelnosti';

    protected $fillable = ['id', 'typ', 'created_at', 'updated_at'];
}
