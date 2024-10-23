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
    <title>Cek Harga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-bg navbar-expand-lg navbar-dark navbar-sticky">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="#">NataHotel</a>
            <!-- Hamburger menu untuk mobile -->
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


    <!-- Container untuk form dan hasil pengecekan harga -->
    <div class="container" style="margin-top: 100px;">
        <div class="row">

            <!-- Form Cek Harga Hotel -->
            <div class="col-md-7">
                <div class="box">
                    <h3 class="text-center">Cek Harga Kamar</h3>
                    <form id="cekHargaForm">
                        <div class="mb-3">
                            <label for="tipeKamar" class="form-label">Tipe Kamar</label>
                            <select class="form-control" id="tipeKamar">
                                <option value="300000">Standard</option>
                                <option value="400000">Superior</option>
                                <option value="500000">Deluxe</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlahHari" class="form-label">Jumlah Hari</label>
                            <input type="number" class="form-control" id="jumlahHari">
                        </div>
                        <div class="mb-3">
                            <label for="lantaiKamar" class="form-label">Lantai</label>
                            <input type="number" class="form-control" id="lantaiKamar">
                        </div>
                        <div class="mb-3">
                            <label for="diskon" class="form-label">Diskon</label>
                            <select class="form-control" id="diskon">
                                <option value="0">Tidak Ada</option>
                                <option value="10">Member</option>
                                <option value="100000">Promo HUT</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary w-100" onclick="hitungHarga()">Check Harga</button>
                    </form>
                </div>
            </div>


            <!-- hasil check -->
            <div class="col-md-5 mt-md-0 mt-3 md-3">
                <div class="box py-5 px-4">
                    <h4>Hasil Pengecekan</h4>
                    <div class="price-summary">
                        <div class="price-row">
                            <span class="label">Harga:</span>
                            <span class="value" id="hargaSebelumDiskon">Rp 0</span>
                        </div>
                        <div class="price-row">
                            <span class="label">Diskon:</span>
                            <span class="value" id="diskonHarga">Rp 0</span>
                        </div>
                        <div class="price-row">
                            <span class="label">Total Harga:</span>
                            <span class="value total-price" id="totalHarga">Rp 0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>