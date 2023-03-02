<?php
session_start();
if (isset($_SESSION['username'])) {
  header("Location: ../dashboard/");
} else if (!isset($_SESSION['admin'])) {
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
          <a class="nav-link active text-white" aria-current="page" href="/admin/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="../admin/list.php">Student List</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <span class="nav-link text-white">Welcome <span class="text-uppercase"><?php echo "{$_SESSION['admin']}"; ?></span></span>
        <span style="font-size: medium;" class="nav-link text-white">&nbsp;||&nbsp;</span>
        <a class="nav-link text-white" href="logout.php">Log-Out</a>
      </form>
    </div>
  </div>
</nav>