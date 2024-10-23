<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $errors = [];

    if (empty($username) || empty($password)) {
        $errors[] = 'Username dan Password harus diisi';
    }

    if (strlen($password) < 5) {
        $errors[] = 'Password minimal 5 karakter';
    }

    if (!preg_match('/[0-9]/', $password)) {
        $errors[] = 'Password harus terdiri dari huruf dan angka';
    }

    if (empty($errors)) {
        if ($username == 'admin' && $password == 'admin123') {
            $_SESSION['username'] = $username;
            header('Location: home.php');
        } else {
            $errors[] = 'Username atau Password salah';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row w-100 bg-light p-5 shadow rounded" style="min-height: 550px;">
            
            <!-- gambar mobile -->
            <div class="col-md-6 d-flex justify-content-center align-items-center d-md-none mb-4">
                <img src="images/illustration.svg" alt="Illustration" style="width: 150px; height: 150px;">
            </div>


            <!-- Bagian Form -->
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h2 class="text-center mb-4">Selamat Datang Kembali</h2>
                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger">
                        <?php echo implode('<br>', $errors); ?>
                    </div>
                <?php endif; ?>
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>

            <!-- gambar desktop -->
            <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center">
                <img src="images/illustration.svg" alt="Illustration" style="width: 200px; height: 200px;">
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>