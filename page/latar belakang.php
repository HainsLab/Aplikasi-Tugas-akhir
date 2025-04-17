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
  <title>Latar Belakang</title>
  <link rel="stylesheet" href="../css/latarbelakang.css" />


</head>

<body>

  <div class="sidebar"><?php include '../parts/sidebar.php'; ?></div>
  <div class="atas"><?php include '../parts/header.php'; ?></div>

  <nav class="konten">
    
      <div class="isi-konten">
        <p class="paragraf-1">
          Pemilihan Graphic Card yang tepat dapat meningkatkan efisiensi dalam mendesain 
          maupun dalam bermain game. Namun, karena banyaknya pilihan graphic card yang 
          saat ini tersedia di pasaran dengan beragam spesifikasi seringkali membuat 
          konsumen kesulitan dalam memilih graphic card yang sesuai dengan kebutuhan.</p>
          <p class="paragraf-2">
          Oleh karena itu, Sistem Penunjang Keputusan diperlukan untuk pemilihan Graphic Card.
          Sistem Penunjang Keputusan dalam memilih Graphic Card ini diharapkan dapat membantu 
          pemilihan keputusan yang tepat dalam memilih Graphic Card berdasarkan kebutuhan menggunakan 
          metode forward chaining.
          </p>
      </div>
    
    <div class="border">
      <img src="/Asset/img/bg1.png" class="batas" alt="">
    </div>
  </nav>
  <div class="atas"><?php include '../parts/footer.php'; ?></div>
</body>

</html>