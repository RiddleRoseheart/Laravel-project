<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet"  href="../../css/admin.css">

    <title>@yield('title', 'Custom Auth Laravel')</title>
  </head>
  <body style=" background-color: lightpink;">
  @include('Include.adminHeader')

  @yield('content') 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  <style>
body{

color: #444444;


background-attachment: fixed;

}


body::before {
content: "";
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-image: url('https://64.media.tumblr.com/acf2accc7b33caa35a93b900bd772b39/tumblr_oxipqzjgoG1wvcbfqo1_1280.gif');
pointer-events: none;
background-size: 50%;
background-position: none; 
z-index: -1;
}
  </style>
</html>