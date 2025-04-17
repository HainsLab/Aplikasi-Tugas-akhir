<?php
include "koneksi.php"; // Pastikan file koneksi database sudah benar

if (isset($_POST['submit'])) {
    $keperluan = $_POST['keperluan'] ?? '';
    $brand = $_POST['brand'] ?? '';
    $tahun = $_POST['tahunproduksi'] ?? '';
    $budget = $_POST['budget'] ?? '';
    $performa = $_POST['performaRender'] ?? '';
    $kategori_game = $_POST['kategorigame'] ?? '';
    $pcie = $_POST['PCIe'] ?? '';
    $resolusi = $_POST['resolusi'] ?? '';
    $psu = $_POST['PSU'] ?? '';
    $casing = $_POST['casing'] ?? '';

    // Mapping Keperluan
    $mapping_keperluan = [
        "K1" => "Gaming",
        "K2" => "Desain Grafis",
        "K3" => "Animasi",
        "K4" => "AI dan Machine Learning",
        "K5" => "Editing Video"
    ];

    // Mapping Brand
    $mapping_brand = [
        "BS1" => "AMD",
        "BS2" => "NVIDIA"
    ];

    // Mapping Tahun Produksi
    $mapping_tahun = [
        "T1" => "2018",
        "T2" => "2019"
    ];

    // Mapping Budget
    $mapping_budget = [
        "B3"  => "Rp.3.000.000 - Rp.3.999.999",
        "B9"  => "Rp.9.000.000 - Rp.9.999.999",
        "B10" => "Rp.10.000.000 - Rp.15.999.999"
    ];

    // Mapping Performa Render
    $mapping_performa = [
        "M1" => "Entry-Level",
        "M3" => "High-End"
    ];

    // Mapping Kategori Game
    $mapping_kategori_game = [
        "Y2" => "Sedang",
        "Y3" => "Ringan",
        "Y4" => "Saya tidak bermain game"
    ];

    // Mapping PCIe
    $mapping_pcie = [
        "P2" => "PCIe 3.0 x16"
    ];

    // Mapping Resolusi Monitor
    $mapping_resolusi = [
        "R2" => "Full HD (FHD): 1920 x 1080 piksel (1080p)",
        "R3" => "Quad HD (QHD): 2560 x 1440 piksel (1440p)"
    ];

    // Mapping PSU
    $mapping_psu = [
        "W3" => "450 W",
        "W4" => "550 W"
    ];

    // Mapping Casing
    $mapping_casing = [
        "C2" => "Mid Tower",
        "C3" => "Full Tower"
    ];

    // Ubah kode ke teks sebelum dimasukkan ke query
    $keperluan = $mapping_keperluan[$keperluan] ?? '';
    $brand = $mapping_brand[$brand] ?? '';
    $tahun = $mapping_tahun[$tahun] ?? '';
    $budget = $mapping_budget[$budget] ?? '';
    $performa = $mapping_performa[$performa] ?? '';
    $kategori_game = $mapping_kategori_game[$kategori_game] ?? '';
    $pcie = $mapping_pcie[$pcie] ?? '';
    $resolusi = $mapping_resolusi[$resolusi] ?? '';
    $psu = $mapping_psu[$psu] ?? '';
    $casing = $mapping_casing[$casing] ?? '';

    // Pastikan semua input telah diisi
    if (!empty($keperluan) && !empty($brand) && !empty($tahun) && !empty($budget) && !empty($performa) && !empty($kategori_game) && !empty($pcie) && !empty($resolusi) && !empty($psu) && !empty($casing)) {
        // Query untuk mencari kartu grafis berdasarkan filter yang dipilih
        $query = "SELECT * FROM graphic_card WHERE keperluan = ? AND brand = ? AND tahun_produksi = ? AND budget = ? AND performa = ? AND kategori_game = ? AND pcie = ? AND resolusi = ? AND psu = ? AND casing = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssssssssss", $keperluan, $brand, $tahun, $budget, $performa, $kategori_game, $pcie, $resolusi, $psu, $casing);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            echo '<h3>Hasil Pencarian</h3>';
            echo '<table border="1" cellspacing="0" cellpadding="10">';
            echo '<tr>
                    <th>No</th>
                    <th>Keperluan</th>
                    <th>Brand</th>
                    <th>Tahun Produksi</th>
                    <th>Budget</th>
                    <th>Performa</th>
                    <th>Kategori Game</th>
                    <th>PCIe</th>
                    <th>Resolusi</th>
                    <th>PSU</th>
                    <th>Casing</th>
                    <th>Harga</th>
                  </tr>';
            
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $no++ . '</td>';
                echo '<td>' . ucfirst($row['keperluan']) . '</td>';
                echo '<td>' . $row['brand'] . '</td>';
                echo '<td>' . $row['tahun_produksi'] . '</td>';
                echo '<td>' . $row['budget'] . '</td>';
                echo '<td>' . $row['performa'] . '</td>';
                echo '<td>' . $row['kategori_game'] . '</td>';
                echo '<td>' . $row['pcie'] . '</td>';
                echo '<td>' . $row['resolusi'] . '</td>';
                echo '<td>' . $row['psu'] . '</td>';
                echo '<td>' . $row['casing'] . '</td>';
                echo '<td>Rp ' . number_format($row['harga'], 0, ',', '.') . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p style="color:red;">Data tidak ditemukan.</p>';
        }
        mysqli_stmt_close($stmt);
    } else {
        echo '<p style="color:red;">Silakan pilih semua opsi.</p>';
    }
}
?>
