@extends('layout.master')
@section('content')
@include('layout.nav')
<style>
     body{
      background-repeat: no-repeat, repeat;
      background-color: #373131;
     }
    .card{
      height:140px;
      width:110px;
      margin-left: 20px;
      
    }
    .image{
      height:140px;
      width:110px;
      border-radius: 5px;
    
      box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;

  
}
form{
    border:;
  
}
.btns{
    width: 120px;
    font-size: 10px;
    border-radius: 10px;
    height: 20px;
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    
}
.top-down{
  margin-top:30px;
  height: 230px;
}
.top{
margin-top: 
}
    
 

.in_image{
    height: 650px;
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
  width: 610px;
}
.carousel{
  background-color: black;
  height: 100vh;
}
.order {
 
  margin-top:;
  width: 610px;
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
.topdown {
height: 112vh;
 overflow-y: scroll; 
 margin-top: 0px;
 border: 5px solid rgb(58, 42, 73);
 background-color: rgb(89, 91, 107)
 

}
.card-title{
  font-style: italic;
}
/*footer start*/
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}


.footer-distributed{
	background: #666;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}


    </style>
 <body>
<div class="row">
<div class="col-md-8 top  topdown ">
  <div class="widget">
  <div class="row">
      @foreach ($products as $item)
      <div class="col-md-3 top-down">
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
            <h6 class="card-title">{{$item->title}}</h6>
            </a>
            <a  href="{{route('products.show',$item->slug)}}">
            <h6 class="card-title"  href="">price : {{$item->price}}</h6> 
            </a>
            <form action="{{route('card.store')}}" method="post">
              @csrf 
              <input type="hidden" name="product_id" value="{{$item->id}}">
              <button class="btns button "type="submit" name="">Add to Card</button>    
            </form>
          </div>
      </div>
      </div>
      @endforeach
  </div>
</div> 
</div>
<!--- carosel -->
<div class="col-md-4">
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
<!--footer-->
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Pricing</a>
				
					<a href="#">About</a>
					
					<a href="#">Faq</a>
					
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name © 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1.555.555.5555</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
</body>
<script>
 $(document).ready(function(){
  $(".img").on({mouseenter:function(){
    $(this).animate({
     
      height: '200px',
      width: '150px',
    },1000);
  },
  mouseleave:function(){
    $(this).animate({
      left: '100px',
      height:'140px',
      width:'110px'
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