<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="../css/home.css" />


</head>

<body>

  <div class="sidebar"><?php include '../parts/sidebar.php'; ?></div>
  <div class="atas"><?php include '../parts/header.php'; ?></div>

  <nav class="konten">
    <div class="sub-title">
      <h2>Tujuan dibuatnya website ini</h2>
      <div class="isi-konten">
        <p class="paragraf-1">Dibuatnya Website ini untuk memenuhi Tugas Akhir saya yang berjudul
          “Sistem Penunjang Keputusan Pemilihan Graphic Card Komputer Berbasis Website Menggunakan
          Metode Forward Chaining” sebagai salah satu kewajiban mahasiswa Universitas Indraprasta PGRI </p>
      </div>
    </div>
    <div class="border">
      <img src="/Asset/img/bg1.png" class="batas" alt="">
    </div>
    <div class="konten-1">
      <h2 class="sub-title"> Teknologi yang digunakan</h2>
      <div class="teknologi">
        <div class="box">
          <img src="/Asset/img/logo-html.png" class="logo-html" alt="">
          <p class="text-logo">HTML</p>
        </div>
        <div class="box">
          <img src="/Asset/img/scss-logo.png" class="logo-scss" alt="">
          <p class="text-logo">SCSS</p>
        </div>
        <div class="box">
          <img src="/Asset/img/logo-javascript.png" class="logo-javascript" alt="">
          <p class="text-logo">Javascript</p>
        </div>
      </div>
      <div class="teknologi">
        <div class="box">
          <img src="/Asset/img/logo-php.png" alt="" class="logo-php">
          <p class="text-logo">PHP</p>
        </div>
        <div class="box">
          <img src="/Asset/img/mysql-logo.png" alt="" class="logo-mysql">
          <p class="text-logo">MySQL</p>
        </div>
      </div>
    </div>
    <div class="border">
      <img src="/Asset/img/bg1.png" class="batas" alt="">
    </div>
  </nav>
  <div class="atas"><?php include '../parts/footer.php'; ?></div>
</body>

</html>