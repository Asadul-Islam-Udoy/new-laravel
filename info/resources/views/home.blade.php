@extends('layouts.master')

@section('content')
<style>
         body{
     min-height: 100vh;
     background-size:cover;
     
     background-position: center;
     background-image: url({{url('back/back4.jpg')}});
  }
    .navbar-nav {
        background-color: rgb(15, 187, 240);
    }
    
    .dropdown-toggle{
        color: rgb(20, 243, 39);
        margin-left: 1200px;
    }
    .dropdown-item{
        margin-left: 1200px; 
        display: none;  
        background-color: none;
    }
    .home_page{
        margin-top: 250px;
        margin-left: 580px;
        
    }
    #click{
        color:blue;
        border-radius: 20px;
        font-size: 20px;
        font-style: italic;
    }
    #back{
        color:blue;
        border-radius: 20px;
        font-size: 20px;
        font-style: italic;
    }
    button{
       
        box-shadow: 5px 10px inset;
    }
</style>
<body>
    
<ul class="navbar-nav ms-auto">
    <!-- Authentication Links -->
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else

        <li class="nav-item dropdown">
            <a style=" font-style:italic;"id="navbarDropdown" class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="">
                <a id="num"style="font-size:12px; font-style:italic; color: red;" class="dropdown-item navbar-nav2" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                
                </a>
                <a href="{{route('dashbord')}}" class="dropdown-item navbar-nav3" style="font-size:12px; font-style:italic; color: red;" href="">Dashbord</a>
            </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>

<div class="home_page">
    <button id="click" class="btn btn-warning"><a href="{{route('user.home')}}">Click Me</a></button>
    <button id="back" class="btn btn-warning"><a href="{{route('user')}}">Back Now</a></button>
</div>

<script>
$(document).ready(function(){
   $("#navbarDropdown").click(function(){
   $(".dropdown-item").fadeToggle();

   }) 
})
</script>
</body>
@endsection