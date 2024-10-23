<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-sticky">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="#">NataHotel</a>
            <!-- Tombol hamburger untuk mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu yang akan ditampilkan/di-collapse -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cek_harga.php">Cek Harga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner1.jpg" class="d-block w-100" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="images/banner2.jpg" class="d-block w-100" alt="Banner 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Profile hotel -->
    <div class="container content mt-5">
        <h1 class="text-center">Selamat Datang di Nata Hotel</h1>
        <div class="row" style="margin-top: 24px; margin-bottom: 24px;">
            <!-- Left column with the image -->
            <div class="col-md-5">
                <img src="images/hotel.png" alt="Hotel Image" class="img-fluid rounded" style="width: 400px; height: 400px; object-fit: cover;">
            </div>
            <!-- Right column with text, centered vertically -->
            <div class="col-md-7 d-flex align-items-center">
                <div>
                    <p style="margin-bottom: 20px;">
                        Nata Hotel adalah salah satu destinasi terbaik bagi Anda yang mencari kenyamanan dan kemewahan dalam suasana yang tenang dan elegan.
                        Terletak di jantung kota, hotel ini menawarkan akses mudah ke berbagai tempat wisata utama dan pusat perbelanjaan.
                    </p>
                    <p style="margin-bottom: 20px;">
                        Kami menawarkan berbagai jenis kamar mulai dari suite mewah hingga kamar deluxe, semuanya dilengkapi dengan perabotan elegan dan teknologi terkini.
                        Selain itu, Anda dapat menikmati fasilitas seperti kolam renang, pusat kebugaran, spa, dan restoran.
                    </p>
                    <p style="margin-bottom: 20px;">
                        Dengan staf yang ramah dan layanan yang berkualitas, kami berkomitmen untuk membuat setiap momen menginap Anda menjadi pengalaman yang tidak terlupakan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>