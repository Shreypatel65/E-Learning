<?php
  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ALL);
  // Connect to the database
  require 'dbcon.php';
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the username and password from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query the database to see if there's a match
    $query = "SELECT * FROM cred WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // If there's a match, log the user in
    if (mysqli_num_rows($result) > 0) {
      session_start();
      $_SESSION['username'] = $username;
      unset($_SESSION['admin']);
    echo "1";
      exit();
    } else {
      echo "0";
    }
  }
?>
