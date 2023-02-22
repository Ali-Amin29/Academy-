<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    #nav{
      height: 80px;
 
    }
    #logo{
      color: #0D6EFD;
    }
    .nav-link:hover{
      color: #0D6EFD;

    }.slider{
      width: 100%;
       
      background-size: cover
    }.slider.text{
 width: 50px
    }
    .about_us{
      width: 100%;
    
      padding-bottom: 40px;
     }.about_us .one{
border: 1px solid #DDD;
padding: 10px;
text-align: center;
box-shadow: 1px 3px 7px #0D6EFD;
margin-top: 80px;

    }
    .about_us .one i{
      
  
    font-size: 60px;
     border-radius: 50%;
    }.me{
       background-color: #DDD;
      padding-top: 50px;
      padding-bottom: 50px;
     
    } 
    .me img{
      width: 90%;
      height:400px
    }
    .games{
      
       padding-top: 40px;
      padding-bottom: 50px;
    }.games .one { 
box-shadow: 3px 7px 7px #333;
border: 1px solid #DDD;
margin-bottom: 15px
    }.games .one img{
      width: 100%;
      height: 200px
    }.games .one button{
      width: 100%
    }.team{
      padding-top: 30px;
       padding-bottom: 50px;
      background-image: url("https://oxigeno.bold-themes.com/swimming-water-polo/wp-content/uploads/sites/2/2017/12/home_inner_01.jpg"); background-position: 50% 0px;
    }.team span{
      
      color: #0262D3  
    }.our_team{
     
      background-color: #ddd;
    }.our_team img{
      width: 200px;
      height: 200px;
      border-radius: 50%;
      margin-bottom: 20px;
      box-shadow: 3px 7px 7px #333;

    }.two{
      width: 100%;
      height: 600px;
      background-image: url("https://oxigeno.bold-themes.com/swimming-water-polo/wp-content/uploads/sites/2/2017/10/inner-hero-about-us.jpg"); background-position: 50% 0px;
      background-size: cover
   
      
    }.two .text h2{
  margin-top: 80px;
  
  font-size: 50px;

    }.two .text h2 span{
      color:#0D6EFD;

    }.games span{
       font-size: 40px;
       margin-bottom: 10px;
 
    }.twoo{
      border-radius: 10%
    }
  </style>
</head>
<body>
 

 
 @if ($users->theam->theam ==1 )


 

<nav class="navbar navbar-expand-sm navbar-dark bg-dark" id='nav'>
  <div class="container">
    <a class="navbar-brand" href="javascript:void(0)">Academy <span id='logo'>Shorouk</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav m-auto">
        <li class="nav-item ">
          <a class="nav-link text-primary" href="javascript:void(0)">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Gmes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Cathch</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Call </a>
        </li>
      </ul>
      <form class="d-flex">
<button class="btn btn-primary">Call Us</button>
      </form>
    </div>
  </div>
</nav>
{{-- section slider --}}

<section class="slider">
  <div class="container-fulid">
    <div class="row">
      <div class="col-sm-12">
      
      <div class="text text-white">

<!-- Carousel -->
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
      <img src="{{ asset('About/'.$users->about_us->image2) }}"alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('About/'.$users->about_us->image3) }}" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('About/1669338659.jpg') }}" alt="New York" class="d-block" style="width:100%">
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
    </div>
  </div>
</section>
{{-- -----------------------------------------Abouts----------------- --}}
<section class="about_us">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="one">
          <i class="fa-solid fa-face-smile"></i>
                    <h3>ahmed samir </h3>  
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, rerum.</p>   
        </div>
      </div>
      <div class="col-lg-4">
        <div class="one">
          <i class="fa-solid fa-users"></i>
                    <h3>ahmed samir </h3>  
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, rerum.</p>   
        </div>
      </div>
      <div class="col-lg-4">
        <div class="one">
          <i class="fa-solid fa-layer-group"></i>
                    <h3>ahmed samir </h3>  
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, rerum.</p>   
        </div>
      </div>
      


    </div>
  </div>
</section>

<section class="me">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="img">
         
 <img src="{{ asset('About/'.$users->about_us->image1) }}" alt="" srcset="">

</div>
      </div>

      <div class="col-lg-6">
     
          
   
        <div class="text">
          <h2>ABOUT ME<hr class="text-primary"></h2>

          <p>
     {{ $users->about_us->descrption }}
          </p>
        </div>
       </div>
    </div>
  </div>
</section>


<section class="games">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">games</h2>
        <h3 class="section-subheading text-muted"><i>Lorem ipsum dolor sit amet consectetur.</i></h3>
    </div>
@foreach ($users->game as $game )
  
     

      <div class="col-lg-4">
      <div class="one">
        <a href="{{ url('details_game',$game->id) }}">
<img src="{{ asset('Gemes/'.$game->photo) }}" alt="" srcset="">
</a>
<div class="text text-center">
  <h3>{{ $game->name }}</h3>
  <p>{{ $game->descrption1 }}</p>
  <button class="btn btn-primary" type="submit" >Applay</button>

</div>
      </div>
    </div>
    @endforeach

 

    </div>
  </div>
</section>
 

<section class="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
<h2>OUR <span>AWARDS</span></h2>
      </div>
      <div class="row">
        <div class="col-lg-8 text-white">
 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptate distinctio eaque, itaque officiis, consectetur dolorum fugit odit optio omnis unde minima et ex, vitae saepe ipsa cum architecto maiores.</p>
        </div>

        <div class="row p-2">
 
          <div class="col col-lg-2">
            <img src="https://oxigeno.bold-themes.com/swimming-water-polo/wp-content/uploads/sites/2/2017/10/Trophy_01.png" alt="" srcset="">
          </div>
          <div class="col col-lg-2">
            <img src="https://oxigeno.bold-themes.com/swimming-water-polo/wp-content/uploads/sites/2/2017/10/Trophy_03.png" alt="" srcset="">
          </div>
          <div class="col col-lg-2">
            <img src="https://oxigeno.bold-themes.com/swimming-water-polo/wp-content/uploads/sites/2/2017/10/Trophy_07.png" alt="" srcset="">
          </div>
          <div class="col col-lg-2">
            <img src="https://oxigeno.bold-themes.com/swimming-water-polo/wp-content/uploads/sites/2/2017/10/Trophy_01.png" alt="" srcset="">
          </div>
          <div class="col col-lg-2">
            <img src="https://oxigeno.bold-themes.com/swimming-water-polo/wp-content/uploads/sites/2/2017/10/Trophy_02.png" alt="" srcset="">
          </div>
          <div class="col col-lg-2">
            <img src="https://oxigeno.bold-themes.com/swimming-water-polo/wp-content/uploads/sites/2/2017/10/Trophy_05.png" alt="" srcset="">

          </div>        </div>      </div>

      </section>

  </div>

<section class="our_team">
<div class="container">
  <div class="row">
    <h2>Team</h2>

    @foreach ($users->team as $team )
    <div class="col-lg-3">
      <img src="{{asset('Team/'.$team->photo) }}" alt="" srcset="">
      <p class="text-center">{{ $team->name }}</p>
    </div>
    @endforeach

</section>
@endif
{{-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

@if(!$users->theam->theam)
<?php  dd(15);      ?> 
@else
@if ($users->theam->theam ==2 )
<section class="two">

 
<nav class="navbar navbar-expand-sm navbar-dark " id='nav'>
  <div class="container">
   
   
    <a style="color:#0D6EFC" class="navbar-brand" href="javascript:void(0)">
      {{ $users->name }}</span></a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
          <a class="nav-link text-primary" href="javascript:void(0)">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Gmes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Cathch</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Call </a>
        </li>
      </ul>
 
    </div>
  </div>
</nav>


<div class="text text-center">


  <h2><span>OXYGEN</span> {{ $users->name }} </h2>
  
</div>
</section>


<section class="me">
  <div class="container">
    <div class="row">
      <div class="col col-lg-6">
        <div class="img">
          
 <img style="border-radius: 10%" src="{{ asset('About/'.$users->about_us->image1) }}" alt="" srcset="">

</div>
      </div>

      <div class="col-lg-6">
     
          
   
        <div class="text" >
          <h2>ABOUT ME<hr class="text-primary"></h2>

          <p style="word-wrap: break-word; ">
     {{ $users->about_us->descrption }}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="games">
  <div class="container">
 <h2 class="text-center">All cames</h2>
 <p class="text-center"><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsa. </i></p>
 <br>
 <br>
 
    <div class="row">

@foreach ($users->game as $game )

 <div class="col-lg-4 col-sm-6">
 <div class="one">
  <a href="{{ url('details_game',$game->id) }}">
    <img src="{{ asset('Gemes/'.$game->photo) }}" alt="" srcset="">
    </a>
    <div class="text text-center">
  <h3>{{ $game->name }}</h3>
  <p>{{ $game->descrption1 }}</p>
  <button type="button" class="btn btn-primary ahmed" data-bs-toggle="modal" data-bs-target="#myModal">
    Open modal
  </button>
    {{-- {{ $game->id }} id game
  <br>
  {{ $game->user_id }} id acdmaye
  <br>
  {{ Auth::user()->id }} id user --}}


</div>
      </div>
    </div>
    @endforeach
    </div>
  </div>
</section>





<section class="our_team">
  <div class="container">
    our teame
    <div class="row">
  @foreach ($users->team as $team )
  <div class="col-lg-3">
    <img style="border-radius: 10%" src="{{asset('Team/'.$team->photo) }}" alt="" srcset="" id="twoo">
    <p class="text-center">{{ $team->name }}</p>    <p class="text-center">{{ $team->descrption }}</p>

  </div>
  @endforeach
</div>
</div>

</section>


<footer class="footer py-4 " style="background-color: #0E68FC">
  <div class="container" >
      <div class="row align-items-center">
          <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website Ahmed Samir</div>
          <div class="col-lg-4 my-3 my-lg-0">
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <div class="col-lg-4 text-lg-end">
              <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
              <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
          </div>
      </div>
  </div>
</footer>


 
@endif
@if ($users->theam->theam ==3)
 
@include('theam.three_theam')

@endif






</div>
























<!-- The Modal -->
<div class="modal" id="myModal">
<div class="modal-dialog">
  <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>

    <!-- Modal body -->
<div class="modal-body">
<form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">NAME:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter name" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">phone:</label>
    <input type="number" class="form-control" id="pwd" placeholder="Enter phone" name="pswd">
  </div>
   
  <button  type="submit" class="btn btn-primary ">Submit</button>
  <button style="float: right" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

    </div>


    
    <!-- Modal footer -->
     
  </form>
  </div>
</div>
</div>

 @endif
 

</body>
</html>


  