<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inzerat extends Model
{
    protected $table = 'estates';

    protected $fillable = ['title', 'street', 'area', 'price', 'room_number', 'floors',
        'pictures', 'description', 'estate_type_id', 'users_id', 'district_id','village_id','agency_id',
        'remember_token', 'created_at', 'updated_at'];
}
