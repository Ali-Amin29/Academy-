<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        nav .nav-link {
            font-size: 15x;
            color: #FFF;
            padding: 0px 10px;
           
            font-weight: bold;
            line-height: 80px;
            color: #FFF;
            text-transform: uppercase;
        }

        span {
            color: blue;
        }

        #slider {
            width: 100%;
            height: 540px;
            overflow: hidden;
        }

        .slider_img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        #slider button {
            margin-bottom: 50px
        }.acdemy{
          width: 100%;
          height: 600px;
          padding-top: 70px;
          }.acdemy .one{
          width: 300px;
          box-shadow: 1px 2px 5px #000;
          margin-bottom: 30px

          }.acdemy .one img{
          width: 300px;
          height: 200px;
          overflow: hidden;
        }.acdemy .one .text{
          text-align: center
        }.acdemy .one .text button{
          width: 100%;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="javascript:void(0)">Wh<span>y</span>we </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav m-auto pr-2">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">USER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">USER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">USER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">SERVICE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">GAMES</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">


{{-- -------------------------------------------------- --}}




{{-- ------------------------------------------------- --}}
                        @if (isset( Auth::user()->name ))
                        
                       

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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img style="width:70px;height:70px;border-radius:50%" src="{{ asset('Logo/'.Auth::user()->photo ) }}" alt="" srcset="">
                                    </a>
                        
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                            <br>
                                           

                                        </a>

    @if(Auth::user()->state =="coach" || Auth::user()->state =="acdamy" )
     <a class="dropdown-item" href="{{ route('dashbord_admin') }}">
         {{ __('yourPage') }}
                                         <br>
                                        @endif

                                     </a>
                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                       @else
                        <form action="{{ route('login') }}" method="get">
                            
                        <button class="btn btn-primary mt-3">LOGIN</button></a>
                    </form>
                    </li>
                    <form action="{{ route('register') }}" method="get">
                          
                        <button class="btn btn-info mt-3">Register</button></a>
                    </form>
                    @endif
                </ul>

            </div>
        </div>
    </nav>
    {{-- endddddddddddddddddddddddddddddddddddddddddddd --}}

    <section class="slider">
        <div class="container-fulid" id="slider">
            <div class="row">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img width="150px"
                                src="https://dtwhistledev.wpengine.com/wp-content/uploads/2015/12/rugby.jpg"
                                alt="Los Angeles" class="slider_img">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/1638903722_2-sportishka-com-p-sport-legkaya-atletika-sport-krasivo-foto-2.jpg') }}"
                                alt="Chicago" class="slider_img">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/f23807cd64327b3faebccb9709c62718.jpg') }}" alt="New York"
                                class="slider_img">
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>

            </div>
        </div>
    </section>

  
    
    <section class="acdemy">
      <div class="container">
 
    <div class="row">      
  

          @foreach ($coach as $user )


        
      <div class="col-sm-12 col-md-6 col-lg-4">
      
<div class="one">
    <img src="{{ asset('Logo/'.$user->photo) }}" />
    <div class="text">
<h2> {{ $user->name }}</h2>
<p>{{ $user->location }}</p>
 
<form action="{{ route('acdmay_theam',$user->id) }}" method="get">
<button class="btn btn-primary" type="submit">go</button>
</form>
  </div>

</div>
 </div>

 

 @endforeach
      

 
  

    </div>
   </div>
    </section>
    





</body>

</html>
