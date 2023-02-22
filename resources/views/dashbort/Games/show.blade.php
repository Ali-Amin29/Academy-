@extends('dashbort.layouts.layout')
@section('content')





<style>
   .one{
    
       height: 100px;
       width: 100%
   }
</style>

 
<div class="row">
  <div class="one">
   Nama:
   <h2> {{ $games->name }}</h2>
  </div>
</div>

<div class="row">
   <div class="one">
      descrption:
    <h2> {{ $games->descrption1 }}</h2>
   </div>
 </div>


 <div class="row">
   <div class="one">
      photo:
      <img width="80px"height="60px" src="{{ asset('Gemes/'.$games->photo) }}" alt="" srcset="">

   </div>
 </div>


 <div class="row">
   <div class="one">
      اسم المدرب


 
 
      <h2>{{ $games->team->name ?? "لايوجد مدرب حتي الان"}}</h2>
   </div>
 </div>








  
 

@endsection