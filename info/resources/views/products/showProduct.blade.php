@extends('layout.master')
@section('content')
@include('layout.nav')

<style>
.carousel{
    height: 500px;
    background-color: bisque;
    margin-left: 20px;
 
}

img{
    height: 500px;
    border-radius: 20px;
}
.color{
   background-color: rgb(22, 17, 17); 
   border-radius: 20px;
}
.color1{
   background-color: bisque;
}
.title_text{
    color: red;
    text-align: center;
}
</style>
<body>
<div class="row color1">
    <div class="col-md-6 mt-2 " class="div1">
       
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner   ">
                @php $i=1; @endphp
                @foreach ($products->images as $item)
                <div class="carousel-item {{$i==1?'active':''}}">
                 <img class=" in_image card-img-topd-block w-100"  src="{{asset('product/'.$item->image)}}">
                </div>
                 @php $i--; @endphp
                 @endforeach
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
    </div>
    <div class="col-md-6 mt-2  color">
        <h3 class="title_text mt-5">Name of Product : {{$products->title}}<span class="badge badge-success">{{$products->quantity}}</span></h3>
        <hr>
        <h3 class="title_text mt-5">Description : {{$products->description}}</h3>
        <hr>
        <h3 class="title_text mt-5">Price : {{$products->price}}</h3>
    </div>
</div>
</body>

@endsection