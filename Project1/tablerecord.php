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
  <title>Users Records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand text-info-emphasis" href="#">Queries</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-info-emphasis" aria-current="page" href="landingpage.php">Home</a>
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
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Birthday</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      <?php while ($row = $result->fetch_assoc()) { ?>

        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['birthday']; ?></td>
          <td><a href="updaterecord.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
          <a href="deleterecord.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
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