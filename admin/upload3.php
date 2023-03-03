<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require '../auth/dbcon.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $rollno3 = mysqli_real_escape_string($conn,$_POST['rollno3']);
    $t3fsd   = mysqli_real_escape_string($conn,$_POST['t3fsd']);
    $t3py    = mysqli_real_escape_string($conn,$_POST['t3py']);
    $t3de    = mysqli_real_escape_string($conn,$_POST['t3de']);
    $t3maths = mysqli_real_escape_string($conn,$_POST['t3maths']);
    $t3etc   = mysqli_real_escape_string($conn,$_POST['t3etc']);

    $query = "INSERT INTO test3 values($rollno3,$t3fsd,$t3py,$t3de,$t3maths,$t3etc)";
    $optional = "UPDATE test3 SET fsd='$t3fsd',py='$t3py',de='$t3de',maths='$t3maths',etc='$t3etc' where rollno='$rollno3'";
    $sel = "SELECT * FROM test3 where rollno='$rollno3'";
    
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