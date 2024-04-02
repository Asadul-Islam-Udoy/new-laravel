@extends('layout.master')
@section('content')
@include('layout.nav')
<style>
     body{
      background-repeat: no-repeat, repeat;
      background-color: #cccccc;
     background-image: url({{url('back/back3.jpg')}});
  }
    .card{
      height:250px;
      width: 200px;
      margin-left: 20px;
    }
    .image{
  height: 250px;
  width: 200px;
  border-radius: 5px;
  
}
form{
    border:;
  
}
.btns{
    width: 192px;
    border-radius: 10px;
    height: 30px;
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    
}
.top-down{
    margin-top: 200px;
}
.top{
  margin-top: -170px;
}
    
 

.in_image{
    height: 600px;
    border-radius: 10px;
 

}
.nproduct{
  height: 50px;
  border-radius: 5px;
  background-color: rgb(37, 13, 245);
  box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;

    
    
}
.product{
  font-style: initial;
  color: rgb(245, 245, 13);
  opacity: 0.6;
  width: 650px;
}
.carousel{
  background-color: black;
}
.order {
 
  margin-top:;
  width: 550px;
  font-style: italic;
  box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;

 
}
.order a{
  color: red;
  margin-left: 10px;
  text-decoration: none;
}
.carousel-inner{
  margin-top: 20px;
}
    </style>
 <body>
<div class="row">
    <div class="col-md-7 top">
        <div class="widget">
        <div class="row">
            @foreach ($products as $item)
            <div class="col-md-4 top-down">
                <div class="card-duck ">
                 <div class="card "id="card">
                  @php $i=1; @endphp
                  @foreach($item->images as $image)
                  @if($i > 0)
                  <a  href="{{route('products.show',$item->slug)}}">
                
                    <img id="por" src="{{asset('product/'.$image->image)}}" class="card-img-top img image" alt="...">
                  </a>
                  @endif
                  @php $i--; @endphp                                                                                                                    
                  @endforeach
                  <a  href="{{route('products.show',$item->slug)}}">
                  <h5 class="card-title">{{$item->title}}</h5>
                  </a>
                  <a  href="{{route('products.show',$item->slug)}}">
                  <h3 class="card-title"  href="">{{$item->price}}</h3> 
                  </a>
                  <form action="{{route('card.store')}}" method="post">
                    @csrf 
                    <input type="hidden" name="product_id" value="{{$item->id}}">
                    <button class="btns button " type="submit" name="">Add to Card</button>    
                  </form>
                </div>
            </div>
            </div>
            @endforeach
        </div>
    </div> 
</div>
<div class="col-md-5">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="product">
     <h4 class="nproduct"><marquee>This is a new products in the web side.....</marquee>
      <button class="order">
        <span class="badge badge-danger">{{App\Models\Card::totalItem()}}</span>
        <a href="{{route('card')}}">Order</a>
      </button></h4>
      </div>
        <div class="carousel-inner   ">
            <div class="carousel-item active">
             <img class=" in_image card-img-topd-block w-100"  src="/new/a.jpg">
            </div>
            <div class="carousel-item ">
              <img class=" in_image card-img-topd-block w-100"  src="/new/b.jpg">
             </div>
             <div class="carousel-item ">
              <img class=" in_image card-img-topd-block w-100"  src="/new/c.jpg">
             </div>
             <div class="carousel-item ">
              <img class=" in_image card-img-topd-block w-100"  src="/new/e.jpg">
             </div>
             <div class="carousel-item ">
              <img class=" in_image card-img-topd-block w-100"  src="/new/g.jpg">
             </div>
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
</div>
</body>
<script>
 $(document).ready(function(){
  $(".img").on({mouseenter:function(){
    $(this).animate({
     
      height: '300px',
      width: '250px',
    },1000);
  },
  mouseleave:function(){
    $(this).animate({
      left: '100px',
      height: '250px',
      width: '200px'
    },1000)
  }
})
});
$(".img").mouseenter(function(){
 $(".card-title").css("color","red");
})
$(".img").mouseleave(function(){
 $(".card-title").css("color","#ffe4c4");
})
$(document).ready(function(){
  $(".button").on({mouseenter:function(){
    $(this).addClass(".button").css("background-color"," #007bff")
  },
  mouseleave:function(){
    $(this).css("background-color","pink")
  }
})
})


</script>
@endsection