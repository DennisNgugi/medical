<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    public function visit()
    {
        return $this->belongsTo(Visit::class);
    }
}
