<?php 
$_SESSION=0;
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="nav-link active fs-5 fw-bold fst-italic">
        <img src="./img2.avif" alt="Logo" width="50" height="34" class="d-inline-block align-text-top ">
        Creations
      </a>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active fs-5 fw-bold fst-italic" aria-current="page" href="index.php">Home</a>
        </li>
        <?php
        if (!isset($_SESSION['username'])) {
            ?>
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold fst-italic" href="signup.php">SignUp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold fst-italic" href="login.php">Login</a>
        </li>
        <?php
        }else { ?>   <li class="nav-item">
            <a class="nav-link" href="dashboard.php">My account, <?php echo $_SESSION['username']; ?> </a>
          </li><?php } ?>
        <li class="nav-item">
          <a class="nav-link active fs-5 fw-bold fst-italic" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5 fw-bold fst-italic" aria-current="page" href="#">Contacts</a>
        </li>
      </ul>
    </div>
  </nav>
  
 