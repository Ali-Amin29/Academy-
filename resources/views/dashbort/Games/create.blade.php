@extends('dashbort.layouts.layout')
@section('content')
<h2>Add Games</h2>
  <form class="form-horizontal" action="{{ route('Games.store') }}" method="POST" enctype="multipart/form-data">
     @csrf

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
    <div class="form-group">
     <label for="comment">Comment:</label>
     <textarea class="form-control" rows="5" id="comment" name="descrption" required></textarea>
   </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="file" >Photo:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="file" placeholder="Enter photo" name="photo" required>
      </div>
    </div>
    
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>


@endsection