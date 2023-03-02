<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require '../auth/dbcon.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $rollno2 = mysqli_real_escape_string($conn,$_POST['rollno2']);
    $t2fsd   = mysqli_real_escape_string($conn,$_POST['t2fsd']);
    $t2py    = mysqli_real_escape_string($conn,$_POST['t2py']);
    $t2de    = mysqli_real_escape_string($conn,$_POST['t2de']);
    $t2maths = mysqli_real_escape_string($conn,$_POST['t2maths']);
    $t2etc   = mysqli_real_escape_string($conn,$_POST['t2etc']);

    $query = "INSERT INTO test2 values($rollno2,$t2fsd,$t2py,$t2de,$t2maths,$t2etc)";
    $optional = "UPDATE test2 SET fsd='$t2fsd',py='$t2py',de='$t2de',maths='$t2maths',etc='$t2etc' where rollno='$rollno2'";
    $sel = "SELECT * FROM test2 where rollno='$rollno2'";
    
    $check = mysqli_query($conn,$sel);

    if (mysqli_num_rows($check)=="1"){
        mysqli_query($conn,$optional);
        echo "1";
    }
    else{
        mysqli_query($conn,$query);
        echo "2";
    }
}
?>