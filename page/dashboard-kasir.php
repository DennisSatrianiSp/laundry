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
        <h3 class="judul-text">Dashboard</h3>
        <hr class="garis" />
        <div class="row">
          <div class="col-md-3">
            <div class="card kartu">
              <h4 class="text-center">Jumlah Transaksi</h4>
              <h1 class="text-center">0</h1>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card kartu">
              <h4 class="text-center">Jumlah Member</h4>
              <h1 class="text-center">0</h1>
            </div>
          </div>
          <form class="d-flex" role="search">
            <input class="form-control me-2 mt-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark" type="submit">Search</button>
          </form>
          <div class="col-md-12">
            <div class="card mt-3 p-3">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Invoice</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Nama Paket Cucian</th>
                    <th scope="col">Jumlah cucian (kg)</th>
                    <th scope="col">Tanggal di ambil Pesanan</th>
                    <th scope="col">Status Pesanan</th>
                    <th scope="col">Jumlah Uang</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>INVOICE0012</td>
                    <td>Andika</td>
                    <td>Standart Kiloan</td>
                    <td>1 Kg</td>
                    <td>20-03-2023</td>
                    <td><span style="color: green;">Selesai</span></td>
                    <td>
                      Rp 10.000
                    </td>
                  </tr>
                </tbody>
              </table>
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