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
  <title>About Me</title>
  <link rel="stylesheet" href="../css/home.css" />


</head>

<body>

  <div class="sidebar"><?php include '../parts/sidebar.php'; ?></div>
  <div class="atas"><?php include '../parts/header.php'; ?></div>

  <nav class="konten">
    <div class="sub-title">
      <div class="isi-konten">
        <p class="paragraf-1">Haloo! Nama saya Muhammad Ihsan, dengan NPM 202143579029, mahasiswa semester akhir 
          di Universitas Indraprasta PGRI, Program Studi Teknik Informatika. Website ini saya kembangkan sebagai 
          salah satu syarat untuk menyelesaikan tugas akhir yang berjudul “Sistem Penunjang Keputusan Pemilihan Graphic 
          Card Komputer Berbasis Website Menggunakan Metode Forward Chaining.” Pembuatan ini juga merupakan bagian dari 
          kewajiban akademik mahasiswa di Universitas Indraprasta PGRI. </p>
      </div>
    </div>
    <div class="border">
      <img src="/Asset/img/bg1.png" class="batas" alt="">
    </div>
  </nav>
  <div class="atas"><?php include '../parts/footer.php'; ?></div>
</body>

</html>