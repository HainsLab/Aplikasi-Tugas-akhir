<?php
    include "koneksi.php"; // Pastikan ini file koneksi database Anda

    if (isset($_POST['submit'])) {
        $jenis = $_POST['jenis'];
        $kendaraan = $_POST['kendaraan'];

        if (!empty($jenis) && !empty($kendaraan)) {
            // Query database berdasarkan pilihan pengguna
            $query = "SELECT * FROM kendaraan WHERE jenis = '$jenis' AND nama = '$kendaraan'";
            $result = mysqli_query($conn, $query);

            if ($row = mysqli_fetch_assoc($result)) {
                echo '<p class="text-hasil">Berdasarkan data yang Anda masukkan, kendaraan Anda adalah:</p>';
                echo '<p>Jenis: ' . $row['jenis'] . '</p>';
                echo '<p>Nama: ' . $row['nama'] . '</p>';
                echo '<p>Harga: Rp. ' . number_format($row['harga'], 0, ',', '.') . '</p>';
            } else {
                echo '<p>Data tidak ditemukan.</p>';
            }
        } else {
            echo '<p>Silakan pilih semua opsi.</p>';
        }
    }
    ?>