<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    //
    public function patients()
    {
        return $this->belongsTo(Patient::class);
    }

}
