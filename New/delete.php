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
    // echo "connected";
}

$id = $_GET['id'];
//echo $id;

$sql = "DELETE FROM users WHERE id=$id";

if ($connection->query($sql) === TRUE) {
    echo '<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="card shadow-lg p-5">
            <h2 class="text-success">🎉 Record Deleted Successfully 🎉</h2>
            <p class="mt-3">Your record has been Deleted successfully.</p>
            <a href="records.php" class="btn btn-primary mt-3">View Records</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
';
} else {
    echo "Error: " . $connection->error;
}
$connection->close();
