<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include "../page/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi</title>
    <link rel="stylesheet" href="../css/aplikasi.css" />
</head>

<body>
    <div class="sidebar"><?php include '../parts/sidebar.php'; ?></div>
    <div class="atas"><?php include '../parts/header.php'; ?></div>

    <nav class="konten">
        <div class="sub-title">
            <h2>Sistem Penunjang Keputusan Pemilihan Graphic Card</h2>
        </div>
        <div class="isi-konten">
            <form method="post"> <!-- Memindahkan form agar mencakup semua elemen input -->
                <form method="post">

                    <p class="text">Keperluan utama anda membeli Graphic Card?</p>
                    <select name="keperluan" id="keperluan">
                        <option value="">Choose</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM keperluan");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['kode_keperluan']}'>{$row['keperluan']}</option>";
                        }
                        ?>
                    </select>

                    <p class="text">Preferensi Brand Graphic Card?</p>
                    <select name="brand" id="brandSelect">
                        <option value="">Choose</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM brand_graphic_cards");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['Kode_brand']}'>{$row['Brand_Graphic_Card']}</option>";
                        }
                        ?>
                    </select>

                    <p class="text">Pilih keluaran tahun</p>
                    <select name="tahunproduksi" id="tahun">
                        <option value="">Choose</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM tahun_produksi ORDER BY tahun_produksi ASC");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['Kode_tahun']}'>{$row['tahun_produksi']}</option>";
                        }
                        ?>
                    </select>

                    <p class="text">Berapa Budget yang anda miliki?</p>
                    <select name="budget" id="Price">
                        <option value="">Choose</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM budget ORDER BY CAST(SUBSTRING(Kode_budget, 2) AS UNSIGNED) ASC");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['Kode_budget']}'>{$row['range_budget']}</option>";
                        }
                        ?>
                    </select>

                    <p class="text">Seberapa tinggi performa yang Anda butuhkan untuk aplikasi rendering atau desain grafis?</p>
                    <select name="performaRender" id="performaRender">
                        <option value="">Choose</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM render");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['Kode_render']}'>{$row['performa_render']}</option>";
                        }
                        ?>
                    </select>

                    <p class="text">Apakah anda bermain game? Game yang ingin anda mainkan termasuk kategori game berat, sedang atau ringan?</p>
                    <select name="kategorigame" id="katgame">
                        <option value="">Choose</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM katgame");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['Kode_katgame']}'>{$row['kategori_game']}</option>";
                        }
                        ?>
                    </select>

                    <p class="text">PCIe Motherboard anda?</p>
                    <select name="PCIe" id="PCIe">
                        <option value="">Choose</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM pcie");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['Kode_PCIe']}'>{$row['Slot_PCIe']}</option>";
                        }
                        ?>
                    </select>

                    <p class="text">Resolusi Monitor Anda?</p>
                    <select name="resolusi" id="resolusi">
                        <option value="">Choose</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM resolusi");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['Kode_resolusi']}'>{$row['resolusi_monitor']}</option>";
                        }
                        ?>
                    </select>

                    <p class="text">Power Supply anda berapa watt?</p>
                    <select name="PSU" id="PSU">
                        <option value="">Choose</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM psu");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['Kode_psu']}'>{$row['rekomendasi_psu']}</option>";
                        }
                        ?>
                    </select>

                    <p class="text">Jenis Casing Komputer anda?</p>
                    <select name="casing" id="casing">
                        <option value="">Choose</option>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM casing");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['Kode_casing']}'>{$row['jenis_casing']}</option>";
                        }
                        ?>
                    </select>

                    <input type="submit" value="Submit" class="custom-button">
                </form>

        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $keperluan     = $_POST['keperluan'] ?? null;
            $brand         = $_POST['brand'] ?? null;
            $tahunproduksi = $_POST['tahunproduksi'] ?? null;
            $budget        = $_POST['budget'] ?? null;
            $performaRender = $_POST['performaRender'] ?? null;
            $kategorigame  = $_POST['kategorigame'] ?? null;
            $PCIe          = $_POST['PCIe'] ?? null;
            $Resolusi      = $_POST['resolusi'] ?? null;
            $PSU           = $_POST['PSU'] ?? null;
            $casing        = $_POST['casing'] ?? null;

            $query = "SELECT g.* 
              FROM rules r
              JOIN graphic_cards g ON r.id_graphic_card = g.id
              WHERE r.kode_keperluan = '$keperluan'
                AND r.kode_brand = '$brand'
                AND r.kode_tahun = '$tahunproduksi'
                AND r.kode_budget = '$budget'
                AND r.kode_render = '$performaRender'
                AND r.kode_katgame = '$kategorigame'
                AND r.kode_pcie = '$PCIe'
                AND r.kode_resolusi = '$Resolusi'
                AND r.kode_psu = '$PSU'
                AND r.kode_casing = '$casing'
              LIMIT 1";

            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                echo "<div class='table-container'><table>";
                echo "<tr><th>ID</th><th>Nama</th><th>Memory</th><th>Bus</th><th>PSU</th><th>Tahun</th><th>Harga</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['memory']}</td>
                    <td>{$row['bus']}</td>
                    <td>{$row['psu']}</td>
                    <td>{$row['tahun_produksi']}</td>
                    <td>{$row['budget']}</td>
                  </tr>";
                }
                echo "</table></div>";
            } else {
                echo "<p>Tidak ada rekomendasi GPU yang sesuai rule di database.</p>";
            }
        }

        ?>
        <div class="border">
            <img src="/Asset/img/bg1.png" class="batas" alt="">
        </div>
    </nav>
    <div class="atas"><?php include '../parts/footer.php'; ?></div>
</body>

</html>