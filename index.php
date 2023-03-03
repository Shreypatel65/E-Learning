<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  
<style>
  .bg-img-1{
    background-image: url(/auth/images/one.jpg);
  }
  .bg-img-2{
    background-image: url(/auth/images/two.jpg);
  }
  .bg-img-3{
    background-image: url(/auth/images/three.jpg);
  }
  .carousel-image{
    height: 100vh;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }
  #shrey {
            stroke-dasharray: 1214.5989990234375;
            stroke-dashoffset: 1214.5989990234375;
            animation: sign 4s ease;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
        }
        @keyframes sign {
            to {
                stroke-dashoffset: 0;
            }
        }
</style>
<title>Document</title>
</head>
<body>
<?php
require 'auth/nav.php'
?>
<div id="carouselExampleInterval" class="carousel slide bg-dark" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item carousel-image bg-img-1 active" data-bs-interval="3000">
      <!-- <img src="/auth/images/one.jpg" class="d-block w-100 text-light" height="765" alt="..."> -->
    </div>
    <div class="carousel-item carousel-image bg-img-2" data-bs-interval="3000">
      <!-- <img src="/auth/images/two.jpg" class="d-block w-100" height="765" alt="..."> -->
    </div>
    <div class="carousel-item carousel-image bg-img-3" data-bs-interval="3000">
      <!-- <img src="/auth/images/three.jpg" class="d-block w-100" height="765" alt="..."> -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<footer>
    <div class="d-flex justify-content-center bg-dark" style="height: 10vh;"><span class="text-light py-3"> Made with
      <svg width="50" height="50" viewBox="0 0 512 512">
        <path id ="shrey" fill="none" stroke="red"  stroke-linecap="round" stroke-linejoin="round" stroke-width="30"
        d="M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z"/>
      </svg> by Shrey Patel</span>
    </div>
</footer>
</body>
</html>