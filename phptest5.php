<?php
include "koneksi.php"; // Pastikan file koneksi database Anda benar

if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis'];
    $kendaraan = $_POST['kendaraan'];
    $warna = $_POST['warna'];

    if (!empty($jenis) && !empty($kendaraan) && !empty($warna)) {
        // Query database berdasarkan pilihan pengguna
        $query = "SELECT * FROM kendaraan WHERE jenis = '$jenis' AND nama = '$kendaraan' AND warna = '$warna'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo '<h3>Hasil Pencarian</h3>';
            echo '<table border="1" cellspacing="0" cellpadding="10">';
            echo '<tr>
                    <th>No</th>
                    <th>Jenis Kendaraan</th>
                    <th>Nama Kendaraan</th>
                    <th>Harga</th>
                    <th>Warna</th>
                  </tr>';
            
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $no++ . '</td>';
                echo '<td>' . ucfirst($row['jenis']) . '</td>';
                echo '<td>' . $row['nama'] . '</td>';
                echo '<td>Rp ' . number_format($row['harga'], 0, ',', '.') . '</td>';
                echo '<td>' . $row['warna'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p>Data tidak ditemukan.</p>';
        }
    } else {
        echo '<p>Silakan pilih semua opsi.</p>';
    }
}
?>
