<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "DELETE From myuser WHERE id = '$id'";

if ($connection->query($sql) === TRUE) {
    echo 'Deleted Successfully.<br>
                <a href="userlist.php" class="btn btn-info mt-3">View Records</a>';
} else {
    echo "Error: " . $connection->error;
}
$connection->close();
 
?>