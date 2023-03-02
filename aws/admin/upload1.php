<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../auth/dbcon.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $rollno1 = mysqli_real_escape_string($conn,$_POST['rollno1']);
    $t1fsd   = mysqli_real_escape_string($conn,$_POST['t1fsd']);
    $t1py    = mysqli_real_escape_string($conn,$_POST['t1py']);
    $t1de    = mysqli_real_escape_string($conn,$_POST['t1de']);
    $t1maths = mysqli_real_escape_string($conn,$_POST['t1maths']);
    $t1etc   = mysqli_real_escape_string($conn,$_POST['t1etc']);

    $query = "INSERT INTO test1 values($rollno1,$t1fsd,$t1py,$t1de,$t1maths,$t1etc)";
    $optional = "UPDATE test1 SET fsd='$t1fsd',py='$t1py',de='$t1de',maths='$t1maths',etc='$t1etc' where rollno='$rollno1'";
    $sel = "SELECT * FROM test1 where rollno='$rollno1'";
    
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