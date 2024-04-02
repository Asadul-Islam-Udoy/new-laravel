<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use Auth;

class CardController extends Controller

{
    public function store(Request $request){
        $this->validate($request,[
            'product_id'=>'required'
        ],
        [
         'product_id.required' =>'Plase give a product_id'   
        ]);
        $cards = Card::Where('user_id',Auth::id())
        ->where('ip_address',request()->ip())
        ->where('product_id',$request->product_id)->first();
        if(!is_null($cards)){
            $cards->increment('product_quantity');
        }
        else{
            $card = new Card;
            if(Auth::check()){
                $card->user_id = Auth::id();
            }
            $card->ip_address = request()->ip();
            $card->product_id = $request->product_id;
            $card->save();
        }
     return  redirect()->route('product.index');
    }
    public function create(){
        return view('layout.product.card');
    }
    public function update(Request $request,$id){
        $card = Card::find($id);
        $card->product_quantity = $request->product_quantity;
        $card->save();
        return redirect()->route('card');

    }
    public function destory($id){
     $card = Card::findOrFail($id);
     $card->delete();
     return redirect()->route('card');
    }
}
