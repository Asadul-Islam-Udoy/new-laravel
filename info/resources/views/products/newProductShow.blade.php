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
        <h1>This is a New Products Image Create File</h1>
      <div class="main-panel">
        <div class="content-warpper">
              <form class="container from-size text-white" action="{{route('products.Nstore')}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}
                    <div class="form-group">
                        <label for="name" class="text-danger">Add New  Image :</label>
                        <input type="file" class="form-control" id="image" name="image[]" placeholder="" >
                     </div>   
                     <div class="form-group">
                        <label for="name" class="text-danger">Status:</label>
                        <input type="text" class="form-control" id="" name="status" placeholder="" >
                     </div> 
                            
            <button type="submit" name="" class="btn btn-success mt-3">Submit</button>
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