@extends('layouts.master')
@section('content')
<style>
    body{

    }
</style>
</head>
<body>
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <h1>This is a Update Products Create File</h1>
      <div class="main-panel">
        <div class="content-warpper">
              <form class="container from-size text-white" action="{{route('categorys.edit',$category->id)}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}
              <div class="form-group">
              <label for="name" class="text-danger">Name :</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
              </div>
              <div class="form-group">
                <label for="name" class="text-danger">Description :</label>
                <textarea type="text" class="form-control" id="descirption" name="description" >{{$category->description}}</textarea>
             </div>
                <div class="form-group">
                    <label for="name" class="text-danger">Price :</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$category->price}}" >
                </div>
                    <div class="form-group">
                        <label for="name" class="text-danger">Quantity :</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" value="{{$category->quantity}}" >
                    </div>
                    <div>
                        <h6 style="color: red;">Old Image</h6>
                        <img src="{{asset('category/'.$category->image)}}" style="height: 100px; width: 80px; border-radius:5px;">
                    </div>
                    <div class="form-group">
                      <label for="name" class="text-danger">Product Image :</label>
                      <input type="file" class="form-control" id="image" name="image" placeholder="" >
                   </div>        
            <button type="submit" name="" class="btn btn-success mt-3">Update Now</button>
          </form>
       </div>
      </div>
    </div>
    
    <div class="col-md-3">
    </div>

  </div>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
@endsection