@extends('dashbort.layouts.layout')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
<h2>Add  detalise Games</h2>
  <form class="form-horizontal" action="{{ route('Game_detalis_store') }}"  method="POST" enctype="multipart/form-data">
     @csrf


     <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name of Game:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$game->name }}" readonly>
      </div>
      {{-- -----------------hidden game _id ------------------------}}

      <input type="hidden" value="{{ $game->id }}" name="game_id">

      {{-- -----------------hidden game _id ------------------------}}

      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name of coach Game:</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $game->team->name ?? 'untill now not select team'}}" readonly>
        </div>

 
    <div class="form-group">
     <label for="comment">Comment:</label>
     <textarea name="content" id="editor"> 
      </textarea>
   </div>

   
    
    
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  

  <script>
     ClassicEditor
         .create( document.querySelector( '#editor' ) )
         .catch( error => {
             console.error( error );
         } );
 </script>
@endsection 