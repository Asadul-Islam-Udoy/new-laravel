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
              <form class="container from-size text-white" action="{{route('district')}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}
              <div class="form-group">
              <label for="name" class="text-danger">District Name :</label>
              <input type="text" class="form-control" id="division" name="name" placeholder="" >
              </div>
              <div class="form-group">
                <label for="division_id">select a division for this district</label>
                <select class="form-control" name="division_id">
                  <option value="">Pleace select a division for the district</option>
                  @foreach($divisions as $division)
                <option value="{{$division->id}}">{{$division->name}}</option>
                @endforeach
                </select>
                </div>
            <button type="submit" name="" class="btn btn-success mt-3">Add District</button>
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