<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}




echo "Welcome, " . $_SESSION['username'] ."!<br>";

if ($_SESSION['role'] == 'admin') {
    echo "<a href='admin.php'class='btn btn-success fw-bold fst-italic mt-3'>Go to Admin Panel</a><br>";
} else {
    echo "<a href='customer.php'class='btn btn-success fw-bold fst-italic mt-3'>Go to Customer Dashboard</a><br>";
}
?>

<a href="logout.php" class="btn btn-primary fw-bold fst-italic mt-3">Logout</a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
</body>
</html>