<?php 
include "koneksi.php";

if (isset($_POST['register'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];

$sql=mysqli_query($conn,"insert into user values('','$username','$password','$email','$namalengkap','$alamat')");

echo "<script>
      alert('Akun Anda Berhasil Terdaftar');
      location.href='login.php';
    </script>";

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web galery foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php 
    include "layout/header.html";
    ?>

    <main class="container">
      <div class="row justify-content-center">
      <div class="col-sm-4 mt-4">
      <h1>Registrasi</h1>
      <form action= "register.php" method="POST">
  <div class="row mb-1">
    <label for="username" class="form-label">Username:</label>
    <input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username">
  </div>
  <div class="row mb-1">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password">
  </div>
  <div class="row mb-1">
  <label for="email" class="form-label">Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email">
  </div>
  <div class="row mb-1">
  <label for="namalengkap" class="form-label">Nama Lengkap:</label>
    <input type="text" class="form-control" id="namalengkap" placeholder="Nama lengkap" name="namalengkap">
  </div>
  <div class="row mb-1">
    <label for="alamat" class="form-label">Alamat:</label>
    <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat">
  </div>
  <div class="form-check mb-1">
  
  </div>
  <button type="submit" class="btn btn-primary" name="register">Register</button>
</form>
    </main>

    <?php 
    include "layout/footer.html";
    ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>