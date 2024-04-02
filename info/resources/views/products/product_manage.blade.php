@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
    <style>
        table{
            border-radius: 20px;
        }
        .main-text{
            color: dodgerblue;
        }
        .hidden{
         
        
        }
        .btn1{
            background-color: rgb(65, 174, 225);
            font-size: 16px;
            border-radius: 5px;
        }
        .btn2 {
            background-color: rgb(225, 65, 65);
            font-size: 16px;
            border-radius: 5px;
        }
        a{
            color: black;
        }
        .form-control{
          width: 1000px;
          margin-right: 10px;
        }
        .submit_btn{
         background-color: rgb(89, 0, 255);
         box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
         border-radius:5px;
        }
        
        
    </style>
<body>
 <table class="table table-striped container table-bordered ">
    <h1 class="container">Products Manage Table</h1>
    <thead class="main-text ">
        <tr>
            <form method="POST" action="{{route('products.delete')}}">
            <div class=" container">
                <input type="search" id="search" class="form-control" placeholder="Type query" aria-label="Search" />
              </div>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
            <th>
            <button type="submit" class="submit_btn">Delete</button> 

            </th>
        </tr>
    </thead>
    <tbody id="myTable"  class="hidden row1">
       
            @csrf
        @foreach($products as $item)
        <tr class="">
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>
             @php $i=1; @endphp
            @foreach($item->images as $image)
            @if($i > 0)
            <td>
                <img src="{{asset('product/'.$image->image)}}"style="height:100px; width:80px;">
            </td>
            @endif
            @php $i--; @endphp
            @endforeach
            <td>{{$item->price}}</td>
            <td>{{$item->quantity}}</td>
            <td>
                <button class="btn1"><a  href="{{route('products.edit_create',$item->id)}}">Update</a></button>
                <button class="btn2"><a onclick="return confirm('Are you sure you want to deleted the product')" href="{{route('products.destory',$item->id)}}">Delete</a></button>
            </td>
            <td>
               
                <input type="checkbox" class="check_box" name="id[{{$item->id}}]" value="{{$item->id}}">
               
            </td>
            
        </tr>
        @endforeach
    </tbody>
</form>
</table>   
</body>
</html>

<script>
$(document).ready(function(){
    $('#search').on('keyup',function(){
        var value = $(this).val().toLowerCase();
        $('#myTable tr').filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
$(document).ready(function(){
$('').click(function(){
    var id = $(this).val();
    console.log(id);
})
})
</script>

@endsection