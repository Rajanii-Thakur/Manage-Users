<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "DELETE From myuser WHERE id = '$id'";

if ($connection->query($sql) === TRUE) {
    echo 'Deleted Successfully';
} else {
    echo "Error: " . $connection->error;
}
$connection->close();
 
?>