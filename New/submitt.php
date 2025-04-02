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
    //$sql = "INSERT INTO users (name, email, phone, address, comment) VALUES ('$name', '$email', '$phones', '$address', '$comments')";
   // if ($connection->query($sql) === TRUE) {
       // echo 'Submitted successfully';
  //  } else {
  //      echo "Error: " . $connection->error;
  //  }
  }
