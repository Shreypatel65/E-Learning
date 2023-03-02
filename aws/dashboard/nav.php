<?php
session_start();
if(isset($_SESSION['admin'])){
  header("Location: ../admin/");
}
else if(!isset($_SESSION['username'])){
  header("Location: ../auth/loginpage.php");
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
            <a class="nav-link active text-white" aria-current="page" href="/dashboard/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="./myprofile.php">My Profile</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link text-white" href="./fsd.php">FSD-I</a>
          </li> -->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" >
              FSD-1
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="./HTML/">HTML</a></li>
              <li><a class="dropdown-item" href="./CSS/">CSS</a></li>
              <li><a class="dropdown-item" href="./JS/">JS</a></li>
              <li><a class="dropdown-item" href="./BOOTSTRAP/">Bootstrap</a></li>
            </ul>
          </li>
          <!-- <li class="d-flex" role="search"><a class="nav-link text-white" href="#">Helooo</a></li> -->
          <!-- <li class="nav-item">
            <a class="nav-link text-white" href="../my/signuppage.php">Log-Out</a>
          </li> -->
        </ul>
        <form class="d-flex" role="search">
          <span class="nav-link text-white">Welcome <span class="text-uppercase"><?php echo "{$_SESSION['username']}"; ?></span></span>
          <span style="font-size: medium;" class="nav-link text-white">&nbsp;||&nbsp;</span>
          <a class="nav-link text-white" href="logout.php">Log-Out</a>
        </form>
      </div>
    </div>
  </nav>