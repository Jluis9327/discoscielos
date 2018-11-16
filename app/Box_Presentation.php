<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box_Presentation extends Model
{
    public function box(){
        return $this->belongsTo(Box::class,'Id_Bo','Id_Bo');
    }
}
