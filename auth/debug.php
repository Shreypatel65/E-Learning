<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
echo "Helooo ".$_SESSION['username'];
// session_reset();
// session_destroy();
// $_SESSION = "Shrey";
$test = NULL;
echo "$test";
?>