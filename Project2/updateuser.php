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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['name'];
    $rolee = $_POST['role'];

    $sql = "UPDATE myuser SET username='$username' WHERE id ='$id'";
    $result = $connection->query(query: $sql);
    $user = $result->fetch_assoc();

    if(!empty('name')) {
        echo "Record Updated.";
    } else {
        echo "Record Not Updated";


    if (!empty($username) && !empty($rolee)) {
        $connection->query("UPDATE myuser SET username='$username', role='$rolee' WHERE id=$id");
        //echo "<p>User updated successfully!</p>";
    }else {
        echo "<p>All fields are required!</p>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-4">
        <h2>Update User</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $user['username']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <input type="text" name="role" class="form-control" value="<?php echo $user['role']; ?>">
            </div>
            <button type="submit" class="btn btn-success"> <a href="userlist.php" class="text-decoration-none text-white"> Update</a></button>
            <a href="userlist.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
