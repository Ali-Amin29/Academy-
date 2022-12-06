@extends('dashbort.layouts.layout')
@section('content')





<style>
   .one{
    
        
       width: 100%
   }
</style>


<div class="row">
  
  <div class="one">
    <h2 class="text-center">معلومات عن الاكاديميه</h2>  
      @foreach ($users as $user )
    Name:
    <h3> {{ $user->name }}</h3>
    Email:
    <h3> {{ $user->email }}</h3>
    <img width="150px"height="140px" src="{{ asset('Logo/'.$user->photo) }}" alt="">

  @endforeach 

  </div>
 </div>
 
 <div class="row">
  
  <div class="one">
    <h2 class="text-center">   معلومات الاكاديمه  </h2>
    @foreach ($abouts as $about )
    Name:
    <h3> {{ $about->descrption }}</h3>
    Email:
    
    <img style="display: flex" width="150px"height="140px" src="{{ asset('About/'.$about->image1) }}" alt="">

  @endforeach

  <div class="row">
  
    <div class="one">
      <h2 class="text-center">   العاب الاكاديمه  </h2>
      @foreach ($games as $game )
      Name:
      <h3> {{ $game->name }}</h3>
      Email:
      
      <img style="display: flex" width="150px"height="140px" src="{{ asset('Logo/1669317566.jpg') }}" alt="">
  
    @endforeach



  <div class="row">
  
    <div class="one">
      <h2 class="text-center">   العاب الاكاديمه  </h2>
      @foreach ($teams as $team )
      Name:
      <h3> {{ $team->name }}</h3>
      Email:
 
      <img style="display: flex" width="150px"height="140px" src="{{ asset('Team/'.$team->photo) }}" alt="">
  
    @endforeach

@endsection