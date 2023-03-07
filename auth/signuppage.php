<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="signup.js"></script>
  <title>Document</title>
</head>
<body id="ent">
  <?php
  require 'nav.php'
  ?>
  <section class="vh-80 gradient-custom">
    <div class="container py-5 h-80">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-3 mt-md-3">
  
                <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
                <p class="text-white-50 mb-5">Please enter your preffered username and password!</p>
  
                <div class="form-outline form-white mb-4">
                  <input type="text" id="typeNameX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeNameX">Name</label>
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="text" id="typeRollX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeRollX">Roll Number</label>
                  <div id="rollnoalert"></div>
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="text" id="typeBranchX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeBranchX">Branch</label>
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="text" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Username</label>
                  <div id="useralert"></div>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" class="form-control form-control-lg"/>
                  <label class="form-label" for="typePasswordX">Password</label>
                  <div id="passwordalert"></div>
                </div>
   
                <button type="submit"class="btn btn-outline-light btn-lg px-5" onclick="submitForm()">Sign Up</button>
                <div>
                  <p class="mb-0" style="padding-top: 5%;">Already registered? <a href="/auth/loginpage.php" class="text-white-50 fw-bold">Sign In</a>
                  </p>
                </div>
                <div id="liveAlertPlaceholder"></div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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