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
     height: 500px;
     object-fit: cover;
    }img{
     width: 100%;
     height: 500px;
     object-fit: cover;

    }.card{
      width: 100%;
      
      background-color: #FFF;
      border: 2px solid #FFF;
      margin-top: 10px;
      box-shadow: 2px 3px 7px blue;
    }
    li{
      list-style: none
    }
  </style>
</head>
<body>
 

 



 

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
      <div class="slider">

          <img src="{{ asset('Gemes/'.$game->photo) }}" alt="" srcset="">
      </div>
      </div>
    </div>
</div>
<div class="container">
     <div class="row">

 
      <div class="col-sm-4">
        <div class="card text-end" >
<p class="text-center"> apply now </p>
<ul style="padding: 10px">
  <li><p>اسم اللعبه :{{ $game->name  ?? "not have cosh unti" }}</p></li>
 <li> <p>اسم المدرب :{{ $game->team->name ??"not now " }}</p></li>
 <li><p>اسم الاكاديميه : {{ $game->user->name }} </p></li>
 <li> <p>اسمك : {{ Auth::user()->name }} </p></li>
 <li> <p>الاميل :  {{ Auth::user()->email }} </p></li>
 <button style="width: 100%"  class="d-block btn btn-success d-block">APLLY</button>
</ul>
         </div>

      </div>









          <div class="col-sm-8">

               <div class="text text-center">
                    <p > من افضل المدربين ف تعليم {{ $game->name  ?? "not have cosh unti;; now"}} </p>
                    <p>الكابتن {{ $game->team->name ?? "not now " }}</p>
                   
                   </div>
                   <div class="detailse text-end">
                  @foreach ($details as $detail )
                  @php
                       echo $detail->content ?? "not havecontent untill now";
                  @endphp 
                       
                  @endforeach
                   </div>
          </div>
         
          
     </div>
</div>
    
  
  </div>
</section>

