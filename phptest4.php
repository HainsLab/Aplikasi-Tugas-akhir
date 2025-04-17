<?php
include "koneksi.php"; // Pastikan file koneksi database Anda sudah benar

if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis'];
    $kendaraan = $_POST['kendaraan'];
    $warna = $_POST['warna'];

    if (!empty($jenis) && !empty($kendaraan) && !empty($warna)) {
        // Query database berdasarkan pilihan pengguna
        $query = "SELECT * FROM kendaraan WHERE jenis = '$jenis' AND nama = '$kendaraan' AND warna = '$warna'";
        $result = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            echo '<p class="text-hasil">Berdasarkan data yang Anda masukkan, kendaraan Anda adalah:</p>';
            echo '<p>Jenis: ' . $row['jenis'] . '</p>';
            echo '<p>Nama: ' . $row['nama'] . '</p>';
            echo '<p>Harga: Rp. ' . number_format($row['harga'], 0, ',', '.') . '</p>';
            echo '<p>Warna: ' . $row['warna'] . '</p>';
        } else {
            echo '<p>Data tidak ditemukan.</p>';
        }
    } else {
        echo '<p>Silakan pilih semua opsi.</p>';
    }
}
?>
