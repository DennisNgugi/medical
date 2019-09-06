<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function reports(){
       return $this->hasMany(Report::class);
    }
}
