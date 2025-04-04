<?php
include 'connect.php';
$id = $_GET['id'];

// Get user ID
$id = isset($_GET['id']) ? $_GET['id'] : '';
if (empty($id)) {
    //die("Invalid User ID.");
} else {
    //echo $id;
}
$result = $connection->query("SELECT * FROM myuser WHERE id = $id");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-4">
        <h2>User Details</h2>
               <span>Name:<?php echo $user['username']; ?></span>
           
                 <span> Role:<?php echo $user['role']; ?></span>
            </div>
         <a href="userlist.php" class="">Back</a>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>