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
        <h1>This is a Products Create File</h1>
      <div class="main-panel">
        <div class="content-warpper">
              <form class="container from-size text-white" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}
              <div class="form-group">
              <label for="name" class="text-danger">Title :</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="" >
              </div>
              <div class="form-group">
                <label for="name" class="text-danger">Desctiption :</label>
                <textarea type="text" class="form-control" id="descirption" name="description" placeholder="" ></textarea>
             </div>
                <div class="form-group">
                    <label for="name" class="text-danger">Price :</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="" >
                </div>
                    <div class="form-group">
                        <label for="name" class="text-danger">Quantity :</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="" >
                    </div>
                    <div class="form-group">
                      <label for="name" class="text-danger">Cover Image :</label>
                      <input type="file" class="form-control" id="product_image" name="image" placeholder="" >
                   </div>  
                    <div class="form-group">
                        <label for="name" class="text-danger">Others Image :</label>
                        <input type="file" class="form-control" id="product_image" name="product_image[]" placeholder="" >
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