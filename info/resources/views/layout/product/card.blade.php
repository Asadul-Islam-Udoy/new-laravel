@extends('layouts.master')
@section('content')
@include('layout.nav')
<style>
    body{
        background-color: cadetblue;
    }
    .botn{
        margin-left: 1000px;
      
    }
    .botn.a:hover{
        text-decoration: none;
    }
    .text{
      
        font-style: italic;
        color: rgb(30, 63, 211);
    }
</style>
<table class="table container table-bordered ">
    <h1 style="margin-left : 105px; font-style :italic;">This is a card manage table</h1>
<thead>
    <tr>
        <th>NO</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Product Image</th>
        <th>Product Quantity</th>
        <th>Unit Price</th>
        <th>Sub total Price</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>
    @php
    $total_price = 0;
    @endphp
    @foreach(App\Models\Card::totalCard() as $cards)
    <tr>
      <td>{{$loop->index+1}}</td>
      <td>{{$cards->product->title}}</td>
      <td>{{$cards->product->description}}</td>
      <td>
        @if($cards->product->images->count() >0)
        <img style="height: 100px; width:80px;" src={{asset('product/'.$cards->product->images->first()->image)}}>
        @endif
      </td>
      <td>
        <form action="{{route('quantity_update',$cards->id)}}" method="POST">
            @csrf
            <input  type="number" name="product_quantity" class="" value="{{$cards->product_quantity}}">
            <button style="background : rgb(9, 174, 240); margin-top :5px; width :210px; border-radius :50px; font-style :italic;" type="submit">Update</button>
         
        </form>
      </td>
      <td>{{$cards->product->price}}</td>
      <td>
        @php
        $total_price += $cards->product->price*$cards->product_quantity;
        @endphp
        {{$cards->product->price*$cards->product_quantity}}
      </td>
      <td>
        <form action="{{route('card.delete',$cards->id)}}" method="POST">
            @csrf
            <button style="background-color: blue; border-radius :10px; width :100px; height:40px; font-style:italic;" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
    <tr>
        <td colspan="4"></td>
        <td><strong>Total Amount =></strong></td>
        <td colspan="3">
            <strong>{{$total_price}} Taka</strong>
        </td>
    </tr>
</tbody>
</table>
<div class="botn">
    <button class="btn btn-warning"><a href="{{route('product.index')}}" class="text">Continue Shopping</a></button>
    <button class="btn btn-dark ml-1"><a href="{{route('checkout')}}"  class="text">Checkout</a></button>
</div>

@endsection