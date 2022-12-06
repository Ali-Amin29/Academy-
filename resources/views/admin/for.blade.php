<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     
    <style>

button{
    background-color: #0B5ED7;
        height: 40px;
    b  border-color: #0d6efd;
    color:#FFF;
}

        .active {
             background: green;
             color: #FFF;
    }
    </style>
</head>

<body>
  
    @if ($errors->any())
    {
        @foreach ($errors as $error )
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @endforeach
    }
        
    @endif

    
    <!-- parinet -->
    <div class="container" id="container">
      <div class="container mt-3">
        <h2>login  acdmay</h2>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        <div class="row mt-5 p-5">
            <div class="col-sm-4">
                <div class="card">
                    <img src="../img/free-bootstrap-templates-of-updated-portfolio-twitter-bootstrap-projects-of-free-bootstrap-templates.webp" alt="" class="card-img-top"
                        height="240px">
                    <div class="card-text pt-4 pb-3 text-center">Register as user Trainer
                        <br>
                        If You Ready GO Now
                    </div>
                    <button class="tt" value="3">Angle</button>
                </div>
            </div>
            <!-- end fris user -->
            <div class="col-sm-4">
                <div class="card">
                    <img src="../img/6bde0026f139b7e8d784ec368880e600.jpg" height="240px" alt="" class="card-img-top">
                    <div class="card-text pt-4 pb-3 text-center">Register as Personal Trainer
                        <br>
                        If You Ready GO Now
                    </div>
                    <button class="tt" value="2">Angle</button>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="../img/i (1).webp" alt="" class="card-img-top" height="240px" width="250px">
                    <div class="card-text pt-4 pb-3 text-center">Register as actdemy Trainer
                        <br>
                        If You Ready GO Now
                    </div>
                         <button class="tt" value="1">Angle</button>

                  
                </div>
            </div>
            
            <!-- end row -->
    </div>
    <form action="{{ route('theam') }}" method="post">
        @csrf
            <input type="hidden" value="" id="ah" name="theam" required>
            <button style="float: right" type="submit" class="btn btn-primary"           name="submit">submit</button>  

        </form> 
    </div>

    

    <script>
 
var input=document.getElementById('ah');
console.log(input);
        $(document).ready(function() {
      $(".tt").click(function(e) {
         
       
        var isActive = $(this).hasClass('active');
        $('.active').removeClass('active');
        if (!isActive) {
          $(this).addClass('active');

          var ahmed=$(this).val();
          input.value=innerHtml=ahmed;
           
          console.log(ahmed);
        }
      });
    });
    </script>
</body>

</html>




 

