<?php
session_start();
if(isset($_SESSION['admin'])){
  header("Location: ../admin/");
}
else if(isset($_SESSION['username'])){
  header("Location: ../dashboard");
}
?>
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">E-Learning</a>
      <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../auth/loginpage.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../auth/signuppage.php">SignUp</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button> -->
          <a class="nav-link text-white" href="../auth/adminpage.php">Admin Login</a>
        </form>
      </div>
    </div>
  </nav>
  