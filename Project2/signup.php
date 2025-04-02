<?php
include "connect.php";
include "function.php";
getHeader(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $connection->query("INSERT INTO myuser (username, password, role) VALUES ('$username', '$password', '$role')");

    echo "Signup successful! <a href='login.php'>Login</a>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
</style>
<body>
  <h2 class="text-center text-secondary fw-bold fst-italics mt-5">Signup Here</h2>
  <div class="container mt-5 w-50 ">
    <form action="signup.php" method="POST">
      <div class="input-group mb-3 mt-3">
        <span class="input-group-text text-secondary fw-bold fst-italic" id="username">Name</span>
        <input type="email" class="form-control" name="username">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text text-secondary  fw-bold fst-italic" id="password">Password</span>
        <input type="password" class="form-control" name="password">
      </div>
      <select name="role" class="text-secondary fw-bold fst-italic">
        <option value="select role">--Select Role--</option>
        <option value="admin">Admin</option>
        <option value="customer">Customer</option>
      </select><br>
      <div class="d-grid gap-2">
        <button class="btn btn-primary fw-bold fst-italic mt-3" type="submit">SIGNUP</button>
      </div>
    </form>
    <div class="text-center mt-3 fw-bold fst-italic">
      Already Have An Account?<a href="login.php" class="text-info">Click here</a></div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</html>
<?php
include 'footer.php';?>