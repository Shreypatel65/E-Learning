<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="signup.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
            color: black;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
    require 'nav.php';
    ?>
    <div class="container-fluid" style="padding-top: 2%;">
    <div class="row" >
    <div class="col-sm-3"><a href="./video.php"><span title="FSD-I: Lecture 1">
        <div class="card" >
          <img src="js.svg" class="card-img-top" alt="product2" height="400px" width="400px">
          <div class="card-body">
            <h5 class="card-title">Lecture 1</h5>
            <p class="card-text">Contents: Basic JS tags</p>
          </div>
        </div></a></span>
      </div>
    <div class="col-sm-3"><a href="./video.php"><span title="FSD-I: Lecture 1">
        <div class="card" >
          <img src="js.svg" class="card-img-top" alt="product2" height="400px" width="400px">
          <div class="card-body">
            <h5 class="card-title">Lecture 2</h5>
            <p class="card-text">Contents: JS Operators</p>
          </div>
        </div></a></span>
      </div>
    <div class="col-sm-3"><a href="./video.php"><span title="FSD-I: Lecture 1">
        <div class="card" >
          <img src="js.svg" class="card-img-top" alt="product2" height="400px" width="400px">
          <div class="card-body">
            <h5 class="card-title">Lecture 3</h5>
            <p class="card-text">Contents: JS Objects</p>
          </div>
        </div></a></span>
      </div>
    <div class="col-sm-3"><a href="./video.php"><span title="FSD-I: Lecture 1">
        <div class="card" >
          <img src="js.svg" class="card-img-top" alt="product2" height="400px" width="400px">
          <div class="card-body">
            <h5 class="card-title">Lecture 4</h5>
            <p class="card-text">Contents: JS Functions</p>
          </div>
        </div></a></span>
      </div>
      </div>
    </div>
    <div class="container-fluid" style="padding-top: 2%;">
      <div class="row">
      <div class="col-sm-3"><a href="./video.php"><span title="FSD-I: Lecture 1">
        <div class="card" >
          <img src="js.svg" class="card-img-top" alt="product2" height="400px" width="400px">
          <div class="card-body">
            <h5 class="card-title">Lecture 5</h5>
            <p class="card-text">Contents: JS Classes</p>
          </div>
        </div></a></span>
      </div>
      <div class="col-sm-3"><a href="./video.php"><span title="FSD-I: Lecture 1">
        <div class="card" >
          <img src="js.svg" class="card-img-top" alt="product2" height="400px" width="400px">
          <div class="card-body">
            <h5 class="card-title">Lecture 6</h5>
            <p class="card-text">Contents: JS AJAX</p>
          </div>
        </div></a></span>
      </div>
    </div>
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