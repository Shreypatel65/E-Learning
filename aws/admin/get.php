<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require('../auth/dbcon.php');
$query = "SELECT * FROM cred ORDER BY rollno;";
$result = mysqli_query($conn,$query);
?>