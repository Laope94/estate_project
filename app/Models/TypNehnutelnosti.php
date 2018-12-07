<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypNehnutelnosti extends Model
{
    protected $table = 'estate_types';

    protected $fillable = ['id', 'type', 'created_at', 'updated_at'];



    public function estates(){

        return $this->hasMany('App\Models\Inzerat','estate_type_id');
    }


}
