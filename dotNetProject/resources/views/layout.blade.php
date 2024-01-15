<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title', 'Custom Auth Laravel')</title>
  </head>
  <body>
  @include('Include.header')

  @yield('content') 










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Comforter&family=Dawning+of+a+New+Day&family=Fredericka+the+Great&family=Henny+Penny&family=Homemade+Apple&family=Island+Moments&family=Rubik+Doodle+Shadow&family=Salsa&family=Sofia&display=swap');



body{

        font-family: 'Henny Penny', system-ui !important;
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
    background-image: url('https://www.teahub.io/photos/full/288-2886307_sunset-gif.gif');
    pointer-events: none;
    background-size: 100%;
    background-position: none; 
    z-index: -1;
}
  
    </style>
</html>