<?php
require "../proses/koneksi.php";
$used_numbers = []; // array untuk menyimpan angka yang sudah pernah digunakan
$max_attempts = 1000; // batas jumlah percobaan
$attempt = 0;
do {
    $random_number = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT); // menghasilkan angka acak 3 digit
    $invoice_number = 'INVOICE' . $random_number; // menggabungkan string "INVOICE" dengan angka acak
    $attempt++;
} while (in_array($random_number, $used_numbers) && $attempt < $max_attempts); // memastikan angka yang dihasilkan belum pernah muncul sebelumnya dan tidak melebihi batas percobaan

// Proses
if (isset($_POST['kirim'])) {
    // Ambil data
    $kode = $_POST['kode'];
    $nama = $_POST['nama_pelanggan'];
    $tanggal = $_POST['tgl_masuk'];
    $jumlah = $_POST['qty'];
    $paket = $_POST['paket'];
    $batas = $_POST['batas'];
    $ambil = $_POST['ambil'];
    $status = $_POST['status'];
    $total = $_POST['data'];
    $diskon = "Rp10.000";

    //masukan ke database
    $sql = "INSERT INTO transaksi VALUES ('', '$kode', '$nama', '$tanggal', '$paket', '$jumlah', '$batas', '$ambil', '$diskon', '$status', '$total')";
    $result = mysqli_query($koneksi, $sql);
    if ($result > 0) {
        echo "<script> alert('Hello, world!'); </script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Family Laundry</title>
    <!-- Css boostrap -->
    <link rel="stylesheet" href="../asset/css/bootstrap-5.2.0-dist/css/bootstrap.min.css" />
    <!-- Css Font Awesome -->
    <link rel="stylesheet" href="../asset/css/fontawesome-free-6.1.1-web/css/all.min.css" />
    <!-- Css Saya -->
    <link rel="stylesheet" href="../asset/css/dashboard-kasir.css" />
    <!-- Link Font -->
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 kiri position-fixed">
                <img src="../asset/img/tulisan_putih.png" class="gambar-putih" alt="" />
                <div class="garis-putih"></div>
                <ul class="text-white list">
                    <li class="link">
                        <a class="route" href="dashboard-kasir.php">Dashboard</a>
                    </li>
                    <li class="link"><a class="route" href="aplikasi-kasir.php">Aplikasi Kasir</a></li>
                    <li class="link"><a class="route" href="laporan-transaksi.php">Laporan Trasaksi</a></li>
                </ul>
                <div class="garis-putih1"></div>
                <a href="log-out.php" class="d-flex align-items-center text-white text-decoration-none profile" aria-expanded="false">
                    <img src="../asset/img/profile.png" alt="" width="32" height="32" class="rounded-circle me-2" />
                    <strong>Kasir 1 <i class="fa-solid fa-right-from-bracket ms-3"></i></strong>
                </a>
            </div>
            <div class="col-md-9 kanan1">
                <h3 class="judul-text">Aplikasi Kasir</h3>
                <hr class="garis" />
                <div class="row text-white">
                    <div class="col-md-8 form">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode Invoice</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode" readonly value="<?= $invoice_number; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="nama_pelanggan">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tanggal Masuk</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_masuk">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jumlah Barang</label>
                                <input type="number" class="form-control" id="jumlah" name="qty">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Paket yang di pilih</label>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paketId" onclick="radioClicked()" id="exampleRadios2" value="Kilat" /> <label class="form-check-label" for="exampleRadios1">
                                                <img src="../asset/img/kilat.png" class="paket1" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paketId" onclick="radioClicked()" id="exampleRadios2" value="Standart" />
                                            <label class="form-check-label" for="exampleRadios2">
                                                <img src="../asset/img/standart.png" class="paket1" alt="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <select class="form-select" id="barang" onchange="radioClicked()">
                                    <option selected>Pilih Paket Pesanan</option>
                                    <option value="5000">Kiloan</option>
                                    <option value="10000">Selimut</option>
                                    <option value="5000">Boneka</option>
                                    <option value="15000">Karpet</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Konfirmasi Paket Pesanan</label>
                                <select class="form-select" name="paket" id="exampleSelect">
                                    <option selected>Pilih Paket Pesanan</option>
                                    <option value="Kiloan (Kilat)">Kiloan (Kilat)</option>
                                    <option value="Selimut (Kilat)">Selimut (Kilat)</option>
                                    <option value="Boneka (Kilat)">Boneka (Kilat)</option>
                                    <option value="Karpet (Kilat)">Karpet (Kilat)</option>
                                    <option value="Kiloan (Standart)">Kiloan (Standart)</option>
                                    <option value="Selimut (Standart)">Selimut (Standart)</option>
                                    <option value="Boneka (Standart)">Boneka (Standart)</option>
                                    <option value="Karpet (Standart)">Karpet (Standart)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Batas Waktu</label>
                                <input type="date" class="form-control" name="batas" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tanggal Ambil</label>
                                <input type="date" class="form-control" name="ambil" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleSelect">Status Pesanan</label>
                                <select class="form-select" name="statu" id="exampleSelect">
                                    <option selected>Status Pesanan</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Sedang Proses">Sedang Proses</option>
                                    <option value="Baru Masuk">Baru masuk</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="database" name="data">
                            </div>
                            <button type="submit" class="btn btn-primary float-end" name="kirim">Kirim</button>
                        </form>
                        <div class="total">
                            <h3 class="text-white">Total yang harus di bayar</h3>
                            <h1 class="text-danger" id="harga-barang"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kumpulan Js -->
        <script src="../asset/css/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
        <script src="../asset/js/main.js"></script>
</body>

</html>