<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- parinet -->
    <div class="container" id="container">
        <div class="row mt-5 p-5">
            <div class="col-sm-4">
                <div class="card" style="box-shadow: 1px 3px 7px #000;
                ">
                    <img src=" {{ asset('img/start_run_man_athlete-Sport_HD_Wallpaper_1200x900.jpg') }}" alt="" class="card-img-top"
                        height="240px">
                    <div class="card-text pt-4 pb-3 text-center">Register as user Trainer
                        <br>
                        If You Ready GO Now
                    </div>
                    <a href="{{ route('one','user') }}" class="btn btn-primary">login</a>
                </div>
            </div>
            <!-- end fris user -->
            <div class="col-sm-4">
                <div class="card" style="box-shadow: 1px 3px 7px #000;">
                    <img src="{{ asset('img/Personal_Trainer.jpg') }}" height="240px" alt="" class="card-img-top">
                    <div class="card-text pt-4 pb-3 text-center">Register as Personal Trainer
                        <br>
                        If You Ready GO Now
                    </div>
                    <a href="{{ route('one','coach') }}" class="btn btn-primary">login</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="box-shadow: 1px 3px 7px #000;">
                    <img src="{{ asset('img/i.webp') }}" alt="" class="card-img-top" height="240px" width="250px">
                    <div class="card-text pt-4 pb-3 text-center">Register as actdemy Trainer
                        <br>
                        If You Ready GO Now
                    </div>
                    <a href="{{ route('one','acdamy') }}" class="btn btn-primary">login</a>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>




</body>

</html>

 