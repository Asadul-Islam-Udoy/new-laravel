@extends('layouts.master')
@section('content')
<link href="{{ asset('/public/index.css') }}" rel="stylesheet">

<style>
   body{
    background-color: bisque;
}
.color{
   
    background-color: rgb(131, 131, 197);
    border-radius: 10px;
   
}
.div{
  margin-left: 500px;
  font-style: italic;
}
.table{
    border-radius: 10px;
}
</style>
<table class="table table-dark table-striped container">
    <div class="color">
        <h1 class="div">Division Table</h1>
    </div>
    
        <thead>
           
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Division Name</th>
            <th scope="col">Priority</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($division as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->priority}}</td>
            <td>
                <button class="btn btn-danger"><a href="" >Update</a></button>
                <button class="btn btn-warning"><a href="" >Delete</a></button>
            </td>
        </tr>
        @endforeach
        <tbody>
  </table>

@endsection