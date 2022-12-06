@extends('dashbort.layouts.layout')
@section('content')
<h2>Add Team</h2>
  <form class="form-horizontal" action="{{ route('Team.store') }}" method="POST" enctype="multipart/form-data">
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
      <label for="sel1">Select games</label>
      <select class="form-control" name="game" id="sel1" >
      
        @foreach ($games as $game )
  
  <option value="{{ $game->id }}">  
    
    {{ $game->name }}
  </option>
@endforeach
 
 
      </select>


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