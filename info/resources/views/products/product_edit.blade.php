@extends('layouts.master')
@section('content')
<style>
    body{
      background-repeat: no-repeat, repeat;
      background-color: #cccccc;
     background-image: url({{url('back/back6.jpg')}});
  }
  label{
    color: #0a22f5;
    font-size: 20px;
    font-style:italic;
    
  }
  .form-control{
    font-size: 20px;
    font-style: italic;
    color: rgb(22, 22, 22);
  }
</style>
</head>
<body>
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <h1 class="text-danger">This is a Update Products Create File</h1>
      <div class="main-panel">
        <div class="content-warpper">
              <form class="container from-size text-white" action="{{route('products.edit',$products->id)}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}
              <div class="form-group">
              <label for="name" class="text-color">Title :</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{$products->title}}" >
              </div>
              <div class="form-group">
                <label for="name"class="text-color">Desctiption :</label>
                <textarea type="text" class="form-control" id="descirption" name="description" placeholder="">{{$products->description}}</textarea>
             </div>
                <div class="form-group">
                    <label for="name" class="text-color">Price :</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="" value="{{$products->price}}"  >
                </div>
                    <div class="form-group">
                        <label for="name" class="text-color">Quantity :</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="" value="{{$products->quantity}}"  >
                    </div>
                  
                    @foreach($products->images as $item)
                    <img src="{{asset('product/'.$item->image)}}" style="height: 100px;width: 80px;">
                    @endforeach
                  
                    <div class="form-group">
                      <label for="name" class="text-color">Cover Image :</label>
                      <input type="file" class="form-control" id="product_image" name="image" placeholder=""  >
                   </div>  
                    <div class="form-group">
                        <label for="name" class="text-color">Others Image :</label>
                        <input type="file" class="form-control" id="product_image" name="product_image[]" placeholder=""  >
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
<script>
    $(document).ready(function(){
        $("input").focus(function(){
            $(this).css("background-color","#6f42c1");
            $(this).css("background-color","red")
            $(this).css("opacity","0.7")
        });
        $("input").blur(function(){
            $(this).css("background-color","#fd7e14")
        });
        $("textarea").focus(function(){
            $(this).css("background-color","#6f42c1");
            $(this).css("background-color","red")
            $(this).css("opacity","0.7")
        });
        $("textarea").blur(function(){
            $(this).css("background-color","#fd7e14")
           
        });
    })
</script>
@endsection