<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewPshow extends Model
{
    public function images(){
        return $this->hasMany(product_image::class);
}
}