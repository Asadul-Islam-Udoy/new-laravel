<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PassController extends Controller
{
    public function login(){
        // $products = Product::orderBy('id','desc')->get();
         return view("home");
     }
     public function home(){
        return view('layouts.homes');
    }
   
    public function search(Request $request){
    $search = $request->search;
    $products = Product::orWhere('title','like','%'.$search.'%')
    ->orWhere('description','like','%'.$search.'%')
    ->orWhere('price','like','%'.$search.'%')->orderBy('id','desc')->paginate(5);
    return view('products.search',compact('search','products'));

    }
    
}
