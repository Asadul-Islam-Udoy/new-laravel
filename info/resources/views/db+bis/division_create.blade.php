@extends('layouts.master')
@section('content')
</head>
<body>
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <div class="main-panel">
        <div class="content-warpper">
              <form class="container from-size text-white" action="{{route('divisions')}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}
              <div class="form-group">
              <label for="name" class="text-danger">Division Name :</label>
              <input type="text" class="form-control" id="division" name="name" placeholder="" >
              </div>
              <div class="form-group">
                <label for="division_id"  class="text-danger">Priority :</label>
                <input type="number" class="form-control" id="priority" name="priority" placeholder="" >
                </div>
            <button type="submit" name="" class="btn btn-success mt-3">Add Division</button>
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