<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    protected $fillable = [
    'Cod_Bro','Price','Id_Est',
];
    public function estados(){
        return $this->belongsTo(State::class,'Id_Est','Id_Est');
    }
}
