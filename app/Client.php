<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name','id_City'
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }

}
