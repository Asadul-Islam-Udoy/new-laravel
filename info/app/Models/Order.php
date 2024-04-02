<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
      }
      public function cards(){
        return $this->belongsTo(Card::class);
      }
      public function payment_id(){
        return $this->belongsTo(Payment::class);
      }
}
