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
}
//collect data from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phones = $_POST['phone'];
    $address = $_POST['address'];
    $comments = $_POST['comment'];

    // echo $name;
    // echo $email;
    // echo $phones;
    // echo $address;
    // echo $comments;

    //insert data into form
    $sql = "INSERT Into users (name, email, phone, address, comment) VALUES ('$name', '$email', '$phones', '$address', '$comments')";
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
            <h2 class="text-success">🎉 Thank You! 🎉</h2>
            <p class="mt-3">Your record has been submitted successfully.</p>
            <a href="records.php" class="btn btn-primary mt-3">View Records</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>';
    } else {
        echo "Error: " . $connection->error;
    }
}
$connection->close();
