<?php
require 'dbcon.php';
  $sname = $_POST["sname"];
  $rollno = $_POST["rollno"];
  $branch = $_POST["branch"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  // $query = "INSERT INTO cred (username, password) VALUES ('$username', '$password')";
  $query = "INSERT INTO cred VALUES ('$username','$password','$branch',$rollno,'$sname')";
  $check1 = "SELECT * FROM cred WHERE username='$username'";
  $check2 = "SELECT * FROM cred WHERE rollno='$rollno'";
  $val1 = mysqli_query($conn,$check1);
  $val2 = mysqli_query($conn,$check2);
  // if (mysqli_num_rows($val)==0) {

  //       if (mysqli_query($conn, $query)) {
  //           echo "1";
  //       } 
  //       else {
  //           echo "0";
  //       }
  // }
  // else {
  //   echo "0";
  // }

  if (mysqli_num_rows($val1)!=0) {
    echo "2";
  }
  else {
    if (mysqli_num_rows($val2)!=0) {
      echo "0";
    }
    else {
      if(mysqli_query($conn,$query)){
        echo "1";
      }
      else {
        echo "fail";
      }
    }
  }
  mysqli_close($conn);
?>
