@extends('layout.master')
@section('content')
<style>
    body{
        background-color: aliceblue;
    }
    .adding{
        background-color: aqua;
        box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;

    }
    .submit{
        width: 100px;
        height: 40px;
        margin-left: 120px;
        background-color: bisque;
        border-radius: 5px;
        box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;

    }
    #remove_btn{
        color: red;
        background-color: blue;
        border-radius: 5px;
    }
</style>
<body>
<form action="{{route('categorys.store')}}" method="post">
    @csrf
    <table class="table  container table-bordered mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><input type='text' name='name[]'></td>
            <td><input type='text' name='price[]'></td>
            <td><input type='file' name='image[]'></td>
             <td class="adding">
                <a id="add_btn">Add</a>
            </td>
            </tr>
        </tbody>
    </table>
    <button class="submit" type="submit">submit</button>
</form>
</body>
<script>
$(document).ready(function(){
    $("#add_btn").on('click',function(){
    $("tbody").append(" <tr><td><input class='input' type='text' name='name[]'></td><td><input class='input' type='text' name='price[]'></td><td><input class='input' type='file' name='image[]'></td><td><button id='remove_btn'>x</button></td> </tr>");
    });
})
$(document).on('click','#remove_btn',function(){
    $(this).parents('tr').remove();
})
</script>
@endsection