<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// session_start();
require '../auth/dbcon.php';
$tem = $_SESSION['username'];
$query = "SELECT * FROM cred WHERE username='$tem'";
$rs = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($rs)) {
    $sname = $row['sname'];
    $rollno = $row['rollno'];
    $branch = $row['branch'];
    $username = $row['username'];
    $password = $row['password'];
}
?>