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
