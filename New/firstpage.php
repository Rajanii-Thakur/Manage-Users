<?php

//connect mysqli procedural method
$servername = "localhost";
$username = "root";
$password = null;

// Create connection
$connection = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


//connect to server using Mysqli object oriented
$servername = "localhost";
$username = "root";
$password = null;

// Create connection
$connection = new mysqli($servername, $username, $password);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";

//connection using Mysqli PDO(PHP Data Object)
$servername = "localhost";
$username = "root";
$password = null;

try {
  $connection = new PDO("mysql:host=$servername;dbname=hello", $username, $password);
  // set the PDO error mode to exception
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>

