<?php
require 'dbcon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['admin'] = $username;
        unset($_SESSION['username']);
        echo "2";
        exit();
    } else {
        echo "0";
    }
}
