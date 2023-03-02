<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require '../auth/dbcon.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $rollno4 = mysqli_real_escape_string($conn,$_POST['rollno4']);
    $t4fsd   = mysqli_real_escape_string($conn,$_POST['t4fsd']);
    $t4py    = mysqli_real_escape_string($conn,$_POST['t4py']);
    $t4de    = mysqli_real_escape_string($conn,$_POST['t4de']);
    $t4maths = mysqli_real_escape_string($conn,$_POST['t4maths']);
    $t4etc   = mysqli_real_escape_string($conn,$_POST['t4etc']);

    $query = "INSERT INTO test4 values($rollno4,$t4fsd,$t4py,$t4de,$t4maths,$t4etc)";
    $optional = "UPDATE test4 SET fsd='$t4fsd',py='$t4py',de='$t4de',maths='$t4maths',etc='$t4etc' where rollno='$rollno4'";
    $sel = "SELECT * FROM test4 where rollno='$rollno4'";
    
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