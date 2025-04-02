<?php
//Database connection
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "firstdb";
// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  // echo "connected successfully";
}

$sql = "SELECT * From test";

$result = $connection->query(query: $sql);

//print_r(value: $result)
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listing items</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand text-info-emphasis" href="#">Queries</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-info-emphasis" aria-current="page" href="landingpage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-info-emphasis" aria-current="page" href="form.php">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-info-emphasis" href="tablerecord.php">Records</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-info-emphasis" aria-current="page" href="landingpage.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="p-3">
        <h2 class="text-center p-3">Submit Your Data</h2>
      </div>
      <form action="viewlist.php" method="POST">
        <div class="input-group mb-3">
          <span class="input-group-text text-secondary" id="basic-addon1">Name</span>
          <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text text-secondary" id="emails">Email</span>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text text-secondary" id="address">Address</span>
          <input type="text" class="form-control" name="address" id="address">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text text-secondary" id="phone">Phone</span>
          <input type="number" class="form-control" id="phone" name="phone">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text text-secondary" id="birthday">Birthday</span>
          <input type="date" class="form-control" id="birthday" name="birthday">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
  </div>
  </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="landingpage.php" class="nav-link -active px-2 text-body-primary">Home</a></li>
      <li class="nav-item"><a href="form.php" class="nav-link -active px-2 text-body-primary">Form</a></li>
      <li class="nav-item"><a href="tablerecord.php" class="nav-link -active px-2 text-body-primary">Record</a></li>
      <li class="nav-item"><a href="landingpage.php" class="nav-link -active px-2 text-body-primary">Service</a></li>
      <li class="nav-item"><a href="landingpage.php" class="nav-link -active px-2 text-body-primary">About</a></li>
    </ul>
    <p class="text-center text-body-dark">&copy; 2024 Company, Inc</p>
  </footer>
</div>

</html>