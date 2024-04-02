@extends('layout.master')
@section('content')
<div class="container">
    <table class="table table-bordered mt-3">
        <thead class="thread">
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Action</th>
            </tr>
            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <img src="{{asset('category/'.$item->image)}}" style="height: 100px; width: 80px;">
                    </td>
                    <td>{{$item->description}}</td>
                    <td>
                       <button class="btn btn-success" > <a style="text-decoration: none; color:black;" href="{{route('category.edit_create',$item->id)}}">Update</a></button>
                       <button class="btn btn-danger"> <a onclick="return confirm('Are you sure,you want to deleted')" 
                        style=" border-radius:5px; text-decoration: none; color:black;" href="{{route('category.delete',$item->id)}}">Delete</a></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
@endsection