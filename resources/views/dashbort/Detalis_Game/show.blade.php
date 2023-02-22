@extends('dashbort.layouts.layout')
@section('content')





<style>
   .one{
    
       height: 100px;
       width: 100%
   }.text{
  
       width: 100%;
       background-color: #DDD;
       text-align: end;
   }p{
    }
</style>

 
<div class="row">
  <div class="one">
    <img width="150px"height="100px" src="{{ asset('Gemes/'.$game->photo) }}" alt="" srcset="">
    <h2>{{$game->name }}</h2>
    <p>تحت اشراف المدرب :</p>
    <h2>{{ $game->team->name ?? "لايوجد مدرب حتي الان"}}</h2>

 <hr>
 
 <div class="text ">
  
    @foreach ($details as $details )
    @php
    echo  $details->content ?? " not have contfffent sir "; 
    @endphp
    @endforeach

 
    </div>

   

 

    {{-- @foreach ($game->team as $ahmed )
      
    {{ $ahmed->name }}
    @endforeach --}}

    
 
  </div>
</div>

 



  
 

@endsection