<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Order;
use App\Models\Card;


class CheckOutController extends Controller
{
public function index(){
   $payments = Payment::orderBy('priority','asc')->get();
   return view('layout.product.checkout',compact('payments')); 
}
}
