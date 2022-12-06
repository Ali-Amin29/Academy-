@extends('dashbort.layouts.layout')
@section('content')




@foreach ($abouts as $about )

<h2>Add Games</h2>
  <form class="form-horizontal" action="{{ route('About.update',$about->id) }}" method="POST" enctype="multipart/form-data">
     {{ method_field('PUT') }}
     @csrf

     
    <div class="form-group">
     <label for="comment">Comment:</label>
     <textarea class="form-control" rows="5" id="comment" name="descrption" required>  
          {{ $about->descrption }}"</textarea>
   </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>

  @endforeach
@endsection