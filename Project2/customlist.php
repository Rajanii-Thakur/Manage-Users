<?php
include 'connect.php';
$sql = "SELECT * From myuser";

$result = $connection->query(query: $sql);
//print_r(value: $result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Role</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      <?php while ($user = $result->fetch_assoc()) { ?>

        <tr>
          <td><?php echo $user['id']; ?></td>
          <td><?php echo $user['username']; ?></td>
          <td><?php echo $user['role']; ?></td>

          <td><a href="?id=<?php echo $row['id']; ?>" class="btn btn-info">View</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>