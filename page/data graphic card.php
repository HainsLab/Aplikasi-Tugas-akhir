<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include "koneksi.php";

// Query untuk mendapatkan data pelanggan
$q = "SELECT * FROM graphic_cards";
$ex = mysqli_query($conn, $q);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Graphic Card</title>
    <link rel="stylesheet" href="../css/data.css" />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="sidebar">
        <?php include '../parts/sidebar.php'; ?>
    </div>
    <div class="atas">
        <?php include '../parts/header.php'; ?>
    </div>
    
    <nav class="konten">
        <div class="sub-title">
            <h4>Berikut merupakan Data Graphic Card beserta spesifikasinya yang digunakan pada sistem penunjang keputusan:</h4>
            <div class="isi-konten">
                <div class="table-container">
                    <table border=1>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Memory</th>
                            <th>Bus</th>
                            <th>PSU</th>
                            <th>Tahun</th>
                            <th>Harga</th>
                        </tr>

                        <?php
                        while ($r = mysqli_fetch_array($ex)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($r['id']) . "</td>";
                            echo "<td>" . htmlspecialchars($r['nama']) . "</td>";
                            echo "<td>" . htmlspecialchars($r['memory']) . "</td>";
                            echo "<td>" . htmlspecialchars($r['bus']) . "</td>";
                            echo "<td>" . htmlspecialchars($r['psu']) . "</td>";
                            echo "<td>" . htmlspecialchars($r['tahun_produksi']) . "</td>";
                            echo "<td>" . htmlspecialchars($r['budget']) . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="border">
            <img src="/Asset/img/bg1.png" class="batas" alt="">
        </div>
    </nav>
    
    <div class="atas">
        <?php include '../parts/footer.php'; ?>
    </div>
</body>

</html>
