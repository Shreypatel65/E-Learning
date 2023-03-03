<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  
<script src="select.js"></script>
<title>Document</title>
</head>
<body>
<?php
require 'nav.php';
?>
    <div class="container py-5" style="height: 83.1vh">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-3 mt-md-3">
  
                <h2 class="fw-bold mb-2 text-uppercase">Admin Panel</h2>
                <p class="text-white-50 mb-5">Marks entry system</p>
  
                <div class="form-outline form-white mb-4">
                  <input type="text" id="rollno" class="form-control form-control-lg" />
                  <label class="form-label" for="rollno">Roll No</label>
                </div>
  
                <button type="submit"class="btn btn-outline-light btn-lg px-5" onclick="check()">Continue</button>

              <div class="justify-content-center text-center" style="padding-top: 5%;">
                <div class="container" id="liveAlertPlaceholder"></div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <style>
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