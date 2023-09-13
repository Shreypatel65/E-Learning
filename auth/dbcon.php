<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$server= "localhost";
$username= "root";
$password= "yourpassword"; //Enter your password
$database= "info";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Error".mysqli_connect_error());
}
?>
