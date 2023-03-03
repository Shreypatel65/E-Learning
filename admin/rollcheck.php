<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../auth/dbcon.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    session_start();
    $rollno = mysqli_real_escape_string($conn,$_POST['rollno']);
    $_SESSION['rollno']=$rollno;
    echo "1";
}
?>