<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  
<script src="upload.js"></script> 
<title>Document</title>
</head>
<body>
<?php
require 'nav.php';
require 'adminretrive.php';

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 mt-2" style="margin-left: 10%;">
      <div class="card bg-dark text-white" style="border-radius: 1rem;">
        <div class="card-title">
          <div class="row">
            <div class="col-4 mt-2 mx-2">
              <label for="rollno1">&nbsp;Roll No</label>
              <input type="text" value="<?php echo "$tem"?>" class="form-control-sm" id="rollno1" style="border-radius: 7.5px; width: 100px;" readonly>
            </div>
            <div class="col-6">
              <h5 class="text-center mt-2">Test-1</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t1fsd">FSD-1</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t1fsd"?>" id="t1fsd">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t1py">Python</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t1py"?>" id="t1py">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t1de">DE</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t1de"?>" id="t1de">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t1maths">Maths</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t1maths"?>" id="t1maths">
            </div>  
          </div>
          <div class="row">
            <div class="col-md-2">
            <label for="t1etc">ETC</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t1etc"?>" id="t1etc">
            </div>  
          </div>
        </div>
        <div class="card-footer text-center">
          <button type="submit" class="btn btn-outline-light btn-sm px-5" onclick="one()">Submit</button>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-2" style="margin-left: 10%;">
      <div class="card bg-dark text-white" style="border-radius: 1rem;">
        <div class="card-title">
          <div class="row">
            <div class="col-4 mt-2 mx-2">
              <label for="rollno2">&nbsp;Roll No</label>
              <input type="text" value="<?php echo "$tem"?>" class="form-control-sm" id="rollno2" style="border-radius: 7.5px; width: 100px;" readonly>
            </div>
            <div class="col-6">
              <h5 class="text-center mt-2">Test-2</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t2fsd">FSD-1</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t2fsd"?>" id="t2fsd">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t2py">Python</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t2py"?>" id="t2py">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t2de">DE</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t2de"?>" id="t2de">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t2maths">Maths</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t2maths"?>" id="t2maths">
            </div>  
          </div>
          <div class="row">
            <div class="col-md-2">
            <label for="t2etc">ETC</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t2etc"?>" id="t2etc">
            </div>  
          </div>
        </div>
        <div class="card-footer text-center">
          <button type="submit" class="btn btn-outline-light btn-sm px-5" onclick="two()">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 mt-2" style="margin-left: 10%;">
      <div class="card bg-dark text-white" style="border-radius: 1rem;">
        <div class="card-title">
          <div class="row">
            <div class="col-4 mt-2 mx-2">
              <label for="rollno3">&nbsp;Roll No</label>
              <input type="text" value="<?php echo "$tem"?>" class="form-control-sm" id="rollno3" style="border-radius: 7.5px; width: 100px;" readonly>
            </div>
            <div class="col-6">
              <h5 class="text-center mt-2">Test-3</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t3fsd">FSD-1</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t3fsd"?>" id="t3fsd">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t3py">Python</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t3py"?>" id="t3py">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t3de">DE</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t3de"?>" id="t3de">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t3maths">Maths</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t3maths"?>" id="t3maths">
            </div>  
          </div>
          <div class="row">
            <div class="col-md-2">
            <label for="t3etc">ETC</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t3etc"?>" id="t3etc">
            </div>  
          </div>
        </div>
        <div class="card-footer text-center">
          <button type="submit" class="btn btn-outline-light btn-sm px-5" onclick="three()">Submit</button>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-2" style="margin-left: 10%;">
      <div class="card bg-dark text-white" style="border-radius: 1rem;">
        <div class="card-title">
          <div class="row">
            <div class="col-4 mt-2 mx-2">
              <label for="rollno4">&nbsp;Roll No</label>
              <input type="text" value="<?php echo "$tem"?>" class="form-control-sm" id="rollno4" style="border-radius: 7.5px; width: 100px;" readonly>
            </div>
            <div class="col-6">
              <h5 class="text-center mt-2">Test-4</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t4fsd">FSD-1</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t4fsd"?>" id="t4fsd">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t4py">Python</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t4py"?>" id="t4py">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t4de">DE</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t4de"?>" id="t4de">
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-2">
            <label for="t4maths">Maths</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t4maths"?>" id="t4maths">
            </div>  
          </div>
          <div class="row">
            <div class="col-md-2">
            <label for="t4etc">ETC</label>
            </div>
            <div class="col-md-10">
              <input required class="form-control" type="text" value="<?php echo "$t4etc"?>" id="t4etc">
            </div>  
          </div>
        </div>
        <div class="card-footer text-center">
          <button type="submit" class="btn btn-outline-light btn-sm px-5" onclick="four()">Submit</button>
        </div>
      </div>
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