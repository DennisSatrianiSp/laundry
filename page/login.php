<?php
require "../proses/koneksi.php";
$hasil = 0123;
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $pass = $_POST["pass"];
  $kasir = $_POST["kasir"];
  $admin = $_POST["admin"];
  // Cek role
  $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    if ($data['role'] == $kasir) {
      if ($pass == $data['password']) {
        $hasil = 1;
        $nama = $data['nama_user'];
      } else if ($pass != $data['password']) {
        $hasil = 2;
      }
    }
    if ($data['role'] != $kasir) {
      $hasil = 2;
    }
    if ($data['role'] == $admin) {
      if ($pass == $data['password']) {
        $hasil = 1;
        $nama = $data['nama_user'];
      } else if ($pass != $data['password']) {
        $hasil = 2;
      }
    }
  }
  if (mysqli_num_rows($result) == 0) {
    $hasil = 2;
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
  <link rel="stylesheet" href="../asset/css/login.css" />
  <!-- Link Font -->
</head>

<body>
  <div class="container-fluid bg-gradient">
    <div class="row">
      <div class="col-md-6 bg-primary w-50 mx-auto">
        <!-- content for left side -->
        <div class="container">
          <div class="row">
            <div Sclass="col">
              <div class="card posisi shadow">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-4 bg-primary1 w-50 mx-auto">
                      <!-- content for left side -->
                      <img src="../asset/img/tulisan_coklat.png" class="gambar1" alt="" />
                      <h1 class="judul">Welcome Back !</h1>
                      <?php if ($hasil === 1) : ?>
                        <script>
                          alert("Selamat datang ! <?= $nama; ?>")
                        </script>
                      <?php endif; ?>
                      <?php if ($hasil === 2) : ?>
                        <script>
                          alert("Username atau Password yang di masukan Salah")
                        </script>
                      <?php endif; ?>
                      <div class="col-md-8 form">
                        <form action="" method="post">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"><b>Username</b></label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" />
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><b>Login
                                Sebagai</b></label>
                            <div class="row">
                              <div class="col-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="kasir" id="exampleRadios2" value="Kasir" /> <label class="form-check-label" for="exampleRadios1">
                                    <b>Kasir</b>
                                  </label>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="admin" id="exampleRadios2" value="Admin" />
                                  <label class="form-check-label" for="exampleRadios2">
                                    <b>Administrator</b>
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn tombol" name="login">
                            Login Now
                          </button>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-4 bg-secondary2 w-50 mx-auto">
                      <!-- content for right side -->
                      <img src="../asset/img/tulisan_coklat.png" class="gambar2" alt="" />
                      <img src="../asset/img/pelangi.png" alt="" class="gambar3" />
                      <img src="../asset/img/gambar1.png" alt="" class="gambar4" />
                      <img src="../asset/img/kucing.png" alt="" class="gambar5" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 bg-secondary w-50 mx-auto">
        <!-- content for right side -->
      </div>
    </div>
  </div>
  <!-- Kumpulan Js -->
  <script src="../asset/css/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
  <script src="../asset/js/main.js"></script>
</body>

</html>