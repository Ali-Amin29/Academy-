@extends('dashbort.layouts.layout')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
<h2>Add  detalise Games</h2>
  <form class="form-horizontal" action="{{ route('set_detalis_game') }}" method="POST" enctype="multipart/form-data">
     @csrf

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
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
  </form>

  <script>
     ClassicEditor
         .create( document.querySelector( '#editor' ) )
         .catch( error => {
             console.error( error );
         } );
 </script>
@endsection