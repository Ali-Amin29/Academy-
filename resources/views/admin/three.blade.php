<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
 
    <div class="container" id="form">
        <div class="container mt-3">

            <h2>login Gemes</h2>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <!-- -----------------------form -------------------- -->
            <form action="{{ route('three') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-sm-4">
                        <input type="file" class="form-control" placeholder="Enter photo" name="photo1"
                            onchange="previewImage(event)" required>
                    </div>
                    <div class="col-sm-4">

                        <input type="text" class="form-control" placeholder="Enter name" name="name1"
                            id="ahmed" required>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Enter descrption" name="descrption1"
                            id="sss" required>
                    </div>

                </div>

                <!-- end frsit row -->
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="file" class="form-control" placeholder="Enter photo" name="photo2"
                            onchange="previewImage1(event)" required>
                    </div>

                    <div class="col-sm-4">

                        <input type="text" class="form-control" placeholder="Enter games" name="name2"
                            id="ahmed1" required>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Enter descrption" name="descrption2"
                            id="sss1" required>
                    </div>

                </div>


                <!-- end frist row -->
                <br>
                <div class="row">
                  <div class="col-sm-4">
                    <input type="file" class="form-control" placeholder="Enter photo" name="photo3" required>
                </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Enter name games" name="name3" required>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Enter descrption" name="descrption3" required>
                    </div>
             
                </div>
                <div id="add_image" style="float:right">
                </div>
                <br>
                <br>
                

              <button type="submit" class="btn btn-primary">submit</button>
            </form>


            <div class="tests">
                <div class="one">
                    <img id="preview" alt="" class="rounded-circle" width="250px"height="150px">
                    <div class="tex" style="border: 2px solid red;">
                        <h2 class="text-center" id="sara"> </h2>
                        <p class="text-center" id="ss"></p>
                    </div>
                </div>

                <div class="one">
                    <img id="preview1" alt="">
                    <div class="tex">
                        <h2 class="text-center" id="sara1"> </h2>
                        <p class="text-center" id="ss1"></p>
                    </div>
                </div>

            </div>








        </div>
    </div>

    <script>
        // var element = document.getElementById('add');
        // var file1 = document.getElementById('add_image');
        // element.onclick = function (event) {
        //   event.preventDefault();
        //   file1.innerHTML = "<div class='row'><div class='col'><input type='text' class='form-control' placeholder='Enter games' name='email'></div><div class='col'><input type='password' class='form-control' placeholder='Enter name' name='pswd'></div><div class='col'><input type='file' class='form-control' placeholder='Enter photo' name='pswd'></div></div>"
        // };


        const previewImage = e => {
            const preview = document.getElementById('preview');
            preview.src = URL.createObjectURL(e.target.files[0]);
            preview.onload = () => URL.revokeObjectURL(preview.src);
        };
        const previewImage1 = e => {
            const previews = document.getElementById('preview1');
            previews.src = URL.createObjectURL(e.target.files[0]);
            previews.onload = () => URL.revokeObjectURL(previews.src);
        };
        const previewImage3 = e => {
            const preview = document.getElementById('preview3');
            preview.src = URL.createObjectURL(e.target.files[0]);
            preview.onload = () => URL.revokeObjectURL(preview.src);
        };

        ahmed.addEventListener("input", function(event) {

            sara.innerText = ahmed.value;

        });
        sss.addEventListener("input", function(event) {

            ss.innerText = sss.value;
        });
        // ///////////////////////////////two///////////////////
        ahmed1.addEventListener("input", function(event) {

            sara1.innerText = ahmed1.value;

        });
        sss1.addEventListener("input", function(event) {

            ss1.innerText = sss1.value;
        });
    </script>
</body>

</html>
