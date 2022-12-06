 
@extends('dashbort.layouts.layout')
@section('content')
<h2>Add About</h2>
 
   <!-- form -->
   <form action="{{ route('About.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- one --}}
    <div class="form-group">
      <label for="comment">About Us:</label>
      <textarea class="form-control" rows="5" id="comment" name="descrption" required></textarea>
    </div>
    <span style="color: red">
      @error('descrption')
        {{ $message }}
      @enderror
    </span>
    <br>

 


    {{-- two --}}
    <div class="mb-3">
      <div class="custom-file">
        <label for="file">photo For About </label>
        <input type="file" class="form-control" id="file" name="image1"  required>
        <br>
        {{-- two --}}
        <label for="file">photo For slider </label>

        <input type="file" name="image2" class="form-control accept="image/ required>
      </div>
      <br>
      {{-- three --}}
      <label for="file" id="slider2">photo For slider2 </label>

      <input type="file" name="image3" id="image3" class="form-control accept="image    
    </div>
    </div>
    <br>
   
 
<div class="add_image" style="float:right">
<a id="add" href="#">+add image</a>


</div>
<button type="submit" class="btn btn-primary float-right">
  Register
</button>
</form>
      
 

<br>
<br>


 


 

@endsection