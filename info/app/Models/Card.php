<?php

namespace App\Models;
use Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
   public function product(){
    return $this->belongsTo(Product::class);
   }
   public function order(){
    return $this->belongsTo(Order::class);
   }
   public function user(){
    return $this->belongsTo(Product::class);
   }
   public static function totalCard(){
    if(Auth::check()){
        $cards =Card::where('user_id',Auth::id())->where('ip_address',request()->ip())->where('order_id',NULL)->get();
    }
    else{
        $cards= Card::where('ip_address',request()->ip())->where('order_id',NULL)->get();
    }
    return $cards;
   }
   public static function totalItem(){
    if(Auth::check()){
        $cards = Card ::where('user_id',Auth::id())->where('ip_address',request()->ip())->where('order_id',NULL)->get();

    }
    else{
        $cards= Card::where('ip_address',request()->ip())->where('order_id',NULL)->get(); 
    }
    $total_card = 0;
    foreach($cards as $card){
        $total_card += $card->product_quantity;
    }
    return $total_card;
   }
}