<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .success {
            border: 2px solid green;

        }

        .notsuccess {
            border: 2px solid red;

        }
    </style>
</head>

<body>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 
 
    <div class="container" id="form">


        <div class="container mt-3">
            <h1>Login <span style="color:blue">{{ $ahmed }}</span></h1>
            <br>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:1%" id="progress"
                    aria-valuenow="75"aria-valuemin="0" aria-valuemax="100"></div>
                    
            </div>


            <!-- form -->
            <form action="{{ route('two') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 mt-3">
                    <label for="email">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required value="{{ old('name') }}">
                    <div style="color: red;" id="error_name">
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>

                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                        required value="{{ old('email') }}">

                    <div style="color: red;" id="error_email">
                        <span style="color:red">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                {{-- password --}}
                <div class="mb-3">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password"name="password" required >
                    <div style="color: red;" id="error_password">

                        <span style="color:red">
                            @error('pswd')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>

                {{-- confirm --}}

                <div class="mb-3">
                    <label for="pwd">confirm:</label>
                    <input type="password" class="form-control" id="confirm" placeholder="Enter confirm"
                        name="password_confirmation" required>
                    <div style="color: red;" id="error_confirm">

                        <span style="color:red">
                            @error('confirm')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>

                <input type="hidden" value="{{ $ahmed }}" name="state">

                <!-- location -->
                <div class="mb-3 mt-3">
                    <label for="location">location:</label>
                    <input type="location" class="form-control" id="location" placeholder="Enter location" name="location" required value="{{ old('location') }}">
                    <div style="color: red;" id="error_location" >

                        <span style="color:red">
                            @error('location')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <!-- text aree -->
                <div class="mb-3 mt-3">
                    <label for="file">Logo</label>
                    <input type="file" class="form-control" id="file" placeholder="Enter file" name="photo" required>
                    <span style="color:red">
                        @error('photo')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <!-- textaree -->

                <button type="submit" class="btn btn-primary float-right">
                    Register
                </button>


            </form>
        </div>

    </div>









    <script>
        var progress = document.getElementById('progress');
        var username = document.getElementById('name');
        var email = document.getElementById('email');
        var pwd = document.getElementById('pwd');
        var confirm = document.getElementById('confirm');
        var error_name = document.getElementById('error_name');
        var con = document.getElementById('con');
         const re =
            /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

        username.addEventListener("input", function(event) {

            if (username.value.length >= 3) {
                progress.style.width = "5%"
                username.style.border = "1px solid green"
                error_name.innerHTML = ''
                progress.innerHTML= ' '
                progress.innerHTML= '20px '

            } else {
                error_name.innerHTML = 'I am expecting an name address!';
                username.style.border = "2px solid red"
                progress.style.width = "0%"

            }
        });


        email.addEventListener("input", function(event) {

            if (email.value.match(re)) {
                progress.style.width = "20%"
                email.style.border = "1px solid green"
                error_email.innerHTML = '';
                progress.innerHTML= ' '
                progress.innerHTML= '30px '

            } else {
                progress.style.width = "5%"
                error_email.innerHTML = 'I am expecting an e-mail address!';
                email.style.border = "2px solid red"

            }



        });

        pwd.addEventListener("input", function(event) {

            if (pwd.value.length >= 8) {
                progress.style.width = "20%"
                pwd.style.border = "1px solid green"
                error_password.innerHTML = '';
            } else {
                error_password.innerHTML = 'I am expecting password lies 8!';
                pwd.style.border = "2px solid red"
                progress.style.width = "15%"
            }
        });

        confirm.addEventListener("input", function(event) {

            if (confirm.value.length >= 8 & confirm.value == pwd.value) {

                progress.style.width = "20%"
                confirm.style.border = "1px solid green"
                error_confirm.innerHTML = '';
            } else {
                error_confirm.innerHTML = 'Not confirm!';
                confirm.style.border = "2px solid red"
                progress.style.width = "15%"
            }
        });


confirm.addEventListener("input", function(event) {

if (confirm.value.length >= 8 & confirm.value == pwd.value) {

    progress.style.width = "20%"
    confirm.style.border = "1px solid green"
    error_confirm.innerHTML = '';
} else {
    error_confirm.innerHTML = 'Not confirm!';
    confirm.style.border = "2px solid red"
    progress.style.width = "15%"
}
});

    </script>

</body>

</html>
