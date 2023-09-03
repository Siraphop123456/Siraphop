<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <div class="card">
                        <div class="card-header">
                            Register
                        </div>
                        <div class="card-body">
                            <form action="crud/Create.php" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                <div class="mb-3">
                                    <label for="password" class="form-label">email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
  
</html>