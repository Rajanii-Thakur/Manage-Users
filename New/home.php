<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Collection of data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Database Queries</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="records.php">Table Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="records.php">Records</a>
          </li>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="delete.php">Action</a></li>
            </li>
          </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="p-3">
        <h2 class="text-center p-3">Submit Your Data</h2>
      </div>
      <form action="recordsubmit.php" method="POST">
        <div class="input-group mb-3">
          <span class="input-group-text text-secondary" id="basic-addon1">Name</span>
          <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text text-secondary" id="emails">Email</span>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text text-secondary" id="Phone">Phone No</span>
          <input type="number" class="form-control" name="phone" id="phone">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text text-secondary" id="address">Address</span>
          <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text text-secondary" id="comment">Comments</span>
          <input type="text" class="form-control" id="comment" name="comment">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
  </div>
  </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="card text-center p-5">
  <div class="card-body">
    <h5 class="card-title">Everything is here</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-info">Go somewhere</a>
  </div>
</div>

</html>