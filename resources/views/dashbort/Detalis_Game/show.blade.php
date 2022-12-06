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
 
    @php
      echo  $details->content; 

    @endphp
 
  </div>
</div>

 



  
 

@endsection