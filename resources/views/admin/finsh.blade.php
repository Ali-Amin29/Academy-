<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .img{
             width: 550px;
          
        }
        img{
            display: block;
            margin: auto;
        }
        h1{
            letter-spacing: 10px;
            margin-top: 20px;
        } button{
            display: block;
            margin-top: 40px;
            margin-left:200px;
        }
    </style>
</head>
<body>

     
    <?php
  Session::forget('ID');
     unset($_SESSION["ID"]);
     unset($_SESSION['email_user']);
     session_destroy();

 
     ?>
        <div class="img m-auto">
            <img src="../img/coorect.webp" alt="" style="margin:auto">
            <h1 class="text-center">WELCOME WITH US </h1>
            <form action="{{ route('login') }}" method="get">
          <button class="btn btn-success ">go to your home</button>
        </form>
         
    </div>
