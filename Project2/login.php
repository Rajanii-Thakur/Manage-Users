<?php
session_start();
include "connect.php";
include 'function.php';
getHeader();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $connection->query("SELECT * FROM myuser WHERE username='$username'");
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role'];
        
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <h2 class = "text-center text-secondary fw-bold fst-italics mt-5">Login to Our Website</h2>
    <div class="container mt-5 w-50 ">
<form action="login.php" method="POST">
  <div class="input-group mb-3">
    <span class="input-group-text  fw-bold fst-italic" id="username">Name</span>
    <input type="text" class="form-control" name="username" >
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text  fw-bold fst-italic" id="password">Password</span>
    <input type="password" class="form-control" name="password"  >
  </div>
  <div class="d-grid gap-2">
  <button class="btn btn-primary fw-bold fst-italic mt-3" type="submit">Login</button></div>
</form>
<div class="text-center mt-3 fw-bold fst-italic">
Not registered??<a href="signup.php" class="text-info">Add New User Click Here</a></div></div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
<?php
include 'function.php';
getFooter();?>