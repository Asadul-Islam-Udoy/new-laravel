<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function district(){
        return $this->belongsTo(District::class);
    }

    public function User(){
        return $this->belongsTo(District::class);
    }


}
