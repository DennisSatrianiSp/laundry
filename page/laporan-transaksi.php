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
      <div class="col-md-3 kiri">
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
      <div class="col-md-9 kanan">
        <h3 class="judul-text">Laporan Transaksi</h3>
        <hr class="garis" />
        <div class="row text-white">
          <div class="col-md-8 form">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id Pelanggan</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis Barang</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jumlah Barang</label>
                <input type="number" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-primary float-end">Submit</button>
              <button type="submit" class="btn btn-primary float-end me-3">Hitung</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Kumpulan Js -->
    <script src="../asset/css/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
    <script src="../asset/js/main.js"></script>
</body>

</html>