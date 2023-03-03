<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require '../auth/dbcon.php';
session_start();
$tem = $_SESSION['username'];
$one = "SELECT * FROM test1 WHERE rollno=(SELECT rollno FROM cred WHERE username='$tem')";
$two = "SELECT * FROM test2 WHERE rollno=(SELECT rollno FROM cred WHERE username='$tem')"; 
$three = "SELECT * FROM test3 WHERE rollno=(SELECT rollno FROM cred WHERE username='$tem')";
$four = "SELECT * FROM test4 WHERE rollno=(SELECT rollno FROM cred WHERE username='$tem')";


// Test 1 Retrival
$eno = mysqli_query($conn,$one);
if (mysqli_num_rows($eno)!=0) {
while($row = mysqli_fetch_array($eno)) {
    $t1fsd = $row['fsd'];
    $t1py = $row['py'];
    $t1de = $row['de'];
    $t1maths = $row['maths'];
    $t1etc = $row['etc'];
}
}
else {
    $t1fsd=NULL;
    $t1py=NULL; 
    $t1de=NULL; 
    $t1maths=NULL;
    $t1etc=NULL;
}

// Test 2 Retrival
$owt = mysqli_query($conn,$two);
if (mysqli_num_rows($owt)!=0) {
while($row = mysqli_fetch_array($owt)) {
    $t2fsd = $row['fsd'];
    $t2py = $row['py'];
    $t2de = $row['de'];
    $t2maths = $row['maths'];
    $t2etc = $row['etc'];
}
}
else {
    $t2fsd=NULL;
    $t2py=NULL; 
    $t2de=NULL; 
    $t2maths=NULL;
    $t2etc=NULL;
}

//Test 3 Retrival
$erth = mysqli_query($conn,$three);
if (mysqli_num_rows($erth)!=0) {
while($row = mysqli_fetch_array($erth)) {
    $t3fsd = $row['fsd'];
    $t3py = $row['py'];
    $t3de = $row['de'];
    $t3maths = $row['maths'];
    $t3etc = $row['etc'];
}
}
else {
    $t3fsd=NULL;
    $t3py=NULL; 
    $t3de=NULL; 
    $t3maths=NULL;
    $t3etc=NULL;
}

//Test 4 Retrival
$ruof = mysqli_query($conn,$four);
if (mysqli_num_rows($ruof)!=0) {
while($row = mysqli_fetch_array($ruof)) {
    $t4fsd = $row['fsd'];
    $t4py = $row['py'];
    $t4de = $row['de'];
    $t4maths = $row['maths'];
    $t4etc = $row['etc'];
}
}
else {
    $t4fsd=NULL;
    $t4py=NULL; 
    $t4de=NULL; 
    $t4maths=NULL;
    $t4etc=NULL;
}

?>