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
<style>
#shrey {
            stroke: red;
            stroke-dasharray: 92.17662048339844;
            stroke-dashoffset: 92.17662048339844;
            stroke-linecap: round;
            animation: sign 6s linear;
            animation-fill-mode: both;
            animation-iteration-count: infinite;
        }
        @keyframes sign {
            to {
                stroke-dashoffset: 0;
            }
        }
</style>
<footer>
    <div class="d-flex justify-content-center bg-dark" style="height: 10vh;"><span class="text-light py-3"> Made with
        <svg width="45" height="45" fill="none" viewBox="0 0 16 16">
            <path id ="shrey"
            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8"/>
          </svg> by Shrey Patel</span>
    </div>
</footer>
</body>
</html>