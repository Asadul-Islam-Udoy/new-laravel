@extends('layout.master')
@section('content')
@include('layout.nav')
<style>
    .text-danger{
        font-style: italic;
        font-size: 20px;
    }
    body{
             min-height: 100vh;
             background-size:cover;
             
             background-position: center;
             background-image: url({{url('back/back3.jpg')}});
          }
            .size{
               
                margin-top:40px;
                border-radius: 10px;
                border:3px solid rgb(21, 148, 221);
            }
            label{
                color: rgb(43, 21, 245);
                font-size: 16px;
            }
            .card-header{
                color: rgb(36, 17, 7);
                font-size: 20px;
                font-style: italic;
            }
            .btn-primary{
                border-radius: 10px;
            }
            .col-form-label{
                color: rgb(90, 247, 213);
                font-size: 35px;
                font-style: italic;
            }
            .hidden {
                display: none;
            }
            .myfunction{

                border-radius: 2px;
                color: red;
                box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
                margin-left: 280px;
            }
            .form-control{
                background-color: rgb(195, 248, 248);
            }

</style>
<body>
<div class="container">
    <div class="card mt-4">
    <div class="card card-body"style="background-color :#4a87bd8c;">
        <h1 style="font-style : italic;">Confirm Item</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
        @foreach(App\Models\Card::totalCard() as $cards)
        <p style="font-style:italic;">Name : <strong>{{$cards->product->title}}</strong> -> Price : <strong>{{$cards->product->price}}</strong> -> Item : <strong>{{$cards->product_quantity}}</strong></p>
        <hr>
        @endforeach
         </div>
         <br>
         <div class="col-md-6">
            <br>
            @php
            $total_price = 0;
            @endphp
            @foreach(App\Models\Card::totalCard() as $cards)
            @php
            $total_price += $cards->product->price*$cards->product_quantity;
            @endphp
            @endforeach
            <p  style="font-style:italic;">Total Amount : <strong>{{$total_price}}</strong></p>
            <p  style="font-style:italic;">Total price with shipping cost : <strong>{{$total_price + 100}}</strong></p>
         </div>
        </div>
    </div> 
</div>
</div>
 <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <div class="size">
                        <div style="color: rgb(221, 120, 196); font-size : 50px;" class="card-header">{{ __('This is a Payment From') }}</div>
                         <hr>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
        
                                <div class="row mb-3">
                                    <label for="name" style="font-size : 25px;" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="email" style="font-size : 25px;" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="phone" style="font-size : 25px;" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
        
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="street_address" style="font-size : 25px;" class="col-md-4 col-form-label text-md-end">{{ __('Shipping_address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="shipping_address" type="street_address" class="form-control @error('shipping_address') is-invalid @enderror" name="street_address" value="" required autocomplete="shipping_address">
        
                                        @error('shipping_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="message" style="font-size : 25px;" class="col-md-4 col-form-label text-md-end">{{ __('Messages') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="message" type="message" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message">
        
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="payment" style="font-size : 25px;" class="col-md-4 col-form-label text-md-end">{{ __('Payment') }}</label>
                                    <div class="col-md-6">
                                      <select class="form-control" value='hello'   name="payment_method_id" id="payments">
                                        <option value="">Select your payments Account</option>
                                        @foreach($payments as $payment)
                                        <option  value="{{$payment->short_name}}">{{$payment->name}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-6">
                                        @foreach($payments as $payment)
                                              @if( $payment->short_name == "cash_in")
                                              <div id="payment_{{$payment->short_name}}" class="alert alert-success mt-2 hidden "><button class="myfunction" onclick="myfunction()">x</button>
                                              <div>
                                              <h3>for Cash is there is nathing necessary.Just click Finish Order
                                                  <br>
                                                 <small>
                                                  You will get your product in two or there business day
                                                 </small> 
                                              </h3>
                                              </div>
                                              </div>
                                              @else
                                              <div>
                                                <div id="payment_{{$payment->short_name}}" class="alert alert-success hidden"><button class="myfunction" onclick="myfunction()">X</button>
                                                    <h3>{{$payment->name}} Payment</h3>
                                                    <p>
                                                        <strong>{{$payment->name}} No : {{$payment->no}}</strong>
                                                        <br>
                                                        <strong>Account Type :{{$payment->type}}</strong>
                                                    </p>
                                                    <div class="alert alert-success">
                                                        Please send the above to this on and write your transaction code
                                                    </div>
                                                </div>
                                              </div>
                                              @endif
                                              @endforeach
                                              <div class="hidden" id="transaction_id">
                                                <input type="text" class="form-control" placeholder="enter the transaction code"> 
                                              </div>
                                    <div class="col-md-2">

                                    </div>
                                </div>
                            </div>
                                <div class="row mt-2 mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button style="font-style :italic; border-radius : 5px; background-color :red; color : black;" type="submit" class="btn">
                                            {{ __('Order Now') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
    
                </div>
            </div>
        </div>
</body>
<script type="text/javascript">

$("#payments").change(function(){
        $payment_method = $("#payments").val();
        if($payment_method == "Cash"){
            $("#payment_Cash").removeClass("hidden");
            $("#payment_Bkash").addClass("hidden");
            $("#payment_Nagad").addClass("hidden");
            $("#payment_Rocket").addClass("hidden");
        }
        else if($payment_method == "Bkash"){
            $("#payment_Cash").addClass("hidden");
            $("#payment_Bkash").removeClass("hidden");
            $("#payment_Nagad").addClass("hidden");
            $("#transaction_id").removeClass("hidden");
            $("#payment_Rocket").addClass("hidden");
        }
       else if($payment_method == "Nagad"){
            $("#payment_Cash").addClass("hidden");
            $("#payment_Bkash").addClass("hidden");
            $("#payment_Nagad").removeClass("hidden");
            $("#transaction_id").removeClass("hidden");
            $("#payment_Rocket").addClass("hidden");
        }
        else if($payment_method == "Rocket"){
            $("#payment_Cash").addClass("hidden");
            $("#payment_Bkash").addClass("hidden");
            $("#payment_Nagad").addClass("hidden");
            $("#payment_Rocket").removeClass("hidden");
            $("#transaction_id").removeClass("hidden");
        }
       })
       
      const myfunction=()=>{
        setTimeout(() => {
            $("#payment_Cash").addClass("hidden");
            $("#payment_Bkash").addClass("hidden");
            $("#payment_Nagad").addClass("hidden");
            $("#payment_Rocket").addClass("hidden");
            $("#transaction_id").addClass("hidden");  
        },2000);
       
      }
      $("input").on({mouseenter:function(){
        $(this).css("background-color","#ad7efb")
      },
      mouseleave:function(){
        $(this).css("background"," #343a40")
      }
      })
      $("select").on({mouseenter:function(){
        $(this).css("background-color","#ad7efb")
      },
      mouseleave:function(){
        $(this).css("background","#0a7efb")
      }
      })
      
      
   

</script>
@endsection