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
    // echo " successfully connected";
}

$id = $_GET['id'];
//echo $id;

$sql = "DELETE FROM test WHERE id=$id";

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
            <a href="tablerecord.php" class="btn btn-info mt-3">View Records</a>
            <a href="deleterecord.php" class="btn btn-warning mt-3">Previous Page</a>

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
