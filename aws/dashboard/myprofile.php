<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script>
        function show() {
            passwordInput = document.getElementById('one')
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
    <style>
        input {
            border: none transparent;
            outline: none;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    require 'nav.php';
    require 'details.php';
    ?>
    <div class="col-lg-12" style="padding: 5%;">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">
                            <?php echo $sname?>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Roll No</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">
                            <?php echo $rollno?>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Branch</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">
                            <?php echo $branch?>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Username</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">
                            <?php echo $username?>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Password <button id='two' style="background: transparent; border: none;"
                                onclick="show()"><small>(Click to View)</small></button></span></p>
                    </div>
                    <div class="col-sm-9">
                            <input type="password" value="<?php echo $password?>" id="one" readonly>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
</body>
</html>