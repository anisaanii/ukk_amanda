<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WELCOME TO GALERI FOTO</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
    body {
      background-color: white;
    }
  </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.php">GALERIFOTO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav me-auto">

                </div>
                <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
                <a href="login.php" class="btn btn-outline-success m-1">Login</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>Login Aplikasi</h5>
                    </div>
                    <form action="config/aksi_login.php" method="post" enctype="multipart/form-data">
                    <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>

                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        
                        
                        
                        <div class="d-grid mt-2">
                            <button class="btn btn-primary" type="submit" name="kirim">MASUK</button>
                        </div>
                    </form>
                    <hr>
                    <p>Belum punya akun? <a href="register.php">Daftar disini!</a></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
        <p>&copy; UKK 2024 | AMANDA</p>
    </footer>

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>