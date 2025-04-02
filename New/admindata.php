<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLECT DATA FROM ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="p-3">
                <h2 class="text-center p-3">Submit Admin Data</h2>
            </div>
            <form action="submitdata.php" method="POST">
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
</html>