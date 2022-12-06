@extends('dashbort.layouts.layout')
@section('content')

 @foreach ( $abouts as $about )
  <div class="row">
  {{ $about->descrption }}
  </div>
 <div class="row">
    <img width="80px"height="60px" src="{{ asset('About/'.$about->image1) }}" alt="" srcset="">
</div>

<div class="row">
    <img width="80px"height="60px" src="{{ asset('About/'.$about->image2) }}" alt="" srcset="">
</div>
  
 <div class="row">
     <img width="80px"height="60px" src="{{ asset('About/'.$about->image3) }}" alt="" srcset="">
 </div>

 @endforeach

@endsection