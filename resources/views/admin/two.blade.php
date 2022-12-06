<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>


<body>
  <div class="container" id="form">
    <div class="container mt-3">

      <h2>About Your Acdemy</h2>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="75" aria-valuemin="0"
          aria-valuemax="100"></div>
      </div>
      <!-- form -->
      <form action="{{ route('store_two') }}" method="POST" enctype="multipart/form-data">
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
            <input type="file" class="form-control" id="file" name="image1" onchange="previewImage(event)" required>
            <br>
            {{-- two --}}
            <label for="file">photo For slider </label>

            <input type="file" name="image2" class="form-control accept="image/*" onchange="previewImage2(event)" required>
          </div>
          <br>
          {{-- three --}}
          <label for="file" id="slider2" style="display: none">photo For slider2 </label>

          <input type="file" name="image3" id="image3" class="form-control accept="image/*" onchange="previewImage3(event)" style="display: none">
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
          
          <!-- add_image -->
          <div id="add_image"></div>
          <!-- test add -->


  <br>
  <br>
   
 

  <img id="preview"/>
  <img id="preview2"/>
  <img id="preview3"/>
</div>
  <script>
    
     const previewImage = e => {
        const preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(e.target.files[0]);
        preview.onload = () => URL.revokeObjectURL(preview.src);
     };
     const previewImage2 = e => {
        const preview = document.getElementById('preview2');
        preview.src = URL.createObjectURL(e.target.files[0]);
        preview.onload = () => URL.revokeObjectURL(preview.src);
     };
     const previewImage3 = e => {
        const preview = document.getElementById('preview3');
        preview.src = URL.createObjectURL(e.target.files[0]);
        preview.onload = () => URL.revokeObjectURL(preview.src);
     };
  </script>


  </div>


  <script>

    var slider2 = document.getElementById('slider2');
    var elementss = document.getElementById('add');
    var file1 = document.getElementById('add_image');
    elementss.onclick = function (event) {
      event.preventDefault();
      image3.style.display='block';
      slider2.style.display='block';
      elementss.style.display='none';

    };


  </script>



</body>

</html>