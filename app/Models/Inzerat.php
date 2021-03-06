<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inzerat extends Model
{
    protected $table = 'estates';

    protected $fillable = ['street', 'area', 'price', 'room_number', 'floors', 'issale',
        'description', 'estate_type_id', 'users_id','village_id', 'UUID',
        'remember_token', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('User');
    }
}