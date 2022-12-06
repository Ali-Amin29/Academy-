@extends('dashbort.layouts.layout')
@section('content')

<style>
    .one{
     
        height: 100px;
        width: 100%
    }
</style>
 <div class="row">
   
        
   
    
 </div>
 <br>
 <div class="row">
@foreach ($teams as $teams )
    
 <div class="one" >
الاسم:     <h2>     {{ $teams->name }} </h2>
</div>


<div class="one" >
    الوصف:     <h2>     {{ $teams->descrption }}</h2>
    </div>



<div class="one" >
    مدرب :     <h2>         {{ $teams->Game->name }}
    </h2>
    </div>



<div class="one" >
    Name:     <h2>          <img width="80px"height="60px" src="{{ asset('Team/'.$teams->photo) }}" alt="" srcset="">
    </h2>
    </div>
 </div>


@endforeach




 
 </div>

 @endsection