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
                <p class="text">Keperluan utama anda membeli Graphic Card?</p>
                <select name="keperluan" id="keperluan">
                    <option value="">Choose</option>
                    <option value="K1">Gaming</option>
                    <option value="K2">Desain Grafis</option>
                    <option value="K3">Animasi</option>
                    <option value="K4">AI dan Machine Learning</option>
                    <option value="K5">Editing Video</option>
                </select>
                <p class="text">Preferensi Brand Graphic Card?</p>
                <select name="brand" id="brandSelect">
                    <option value="">Choose</option>
                    <option value="BS1">AMD</option>
                    <option value="BS2">NVIDIA</option>
                </select>
                <p class="text">Pilih keluaran tahun </p>
                <select name="tahunproduksi" id="tahun">
                    <option value="">Choose</option>
                    <option value="T1">2018</option>
                    <option value="T2">2019</option>
                    <option value="T3">2020</option>
                    <option value="T4">2021</option>
                    <option value="T5">2022</option>
                    <option value="T6">2023</option>
                    <option value="T7">2024</option>
                </select>
                <p class="text"> Berapa Budget yang anda miliki?</p>
                <select name="budget" id="Price">
                    <option value="">Choose</option>
                    <option value="B1">Rp.1.000.000 - Rp.1.999.999</option>
                    <option value="B2">Rp.2.000.000 - Rp.2.999.999</option>
                    <option value="B3">Rp.3.000.000 - Rp.3.999.999</option>
                    <option value="B4">Rp.4.000.000 - Rp.4.999.999</option>
                    <option value="B5">Rp.5.000.000 - Rp.5.999.999</option>
                    <option value="B6">Rp.6.000.000 - Rp.6.999.999</option>
                    <option value="B7">Rp.7.000.000 - Rp.7.999.999</option>
                    <option value="B8">Rp.8.000.000 - Rp.8.999.999</option>
                    <option value="B9">Rp.9.000.000 - Rp.9.999.999</option>
                    <option value="B10">Rp.10.000.000 - Rp.15.999.999</option>
                    <option value="B11">Rp.16.000.000 - Rp.19.999.999</option>
                    <option value="B12">Rp.20.000.000 - Rp.29.999.999</option>
                    <option value="B13">Rp.30.000.000 Keatas</option>
                </select>
                <p class="text">Seberapa tinggi performa yang Anda butuhkan untuk aplikasi rendering atau desain grafis?</p>
                <select name="performaRender" id="performaRender">
                    <option value="">Choose</option>
                    <option value="M1">Entry-Level</option>
                    <option value="M2">Mid-Range</option>
                    <option value="M3">High-End</option>
                    <option value="M4">Flagship</option>
                </select>
                <p class="text"> Apakah anda bermain game? Game yang ingin anda mainkan termasuk kategori game berat, sedang atau ringan?</p>
                <select name="kategorigame" id="katgame">
                    <option value="">Choose</option>
                    <option value="Y1">Berat</option>
                    <option value="Y2">Sedang</option>
                    <option value="Y3">Ringan</option>
                    <option value="Y4">Saya Tidak Bermain Game</option>
                </select>
                <p class="text">PCIe Motherboard anda?</p>
                <select name="PCIe" id="PCIe">
                    <option value="">Choose</option>
                    <option value="P1">PCIe 3.0 x8</option>
                    <option value="P2">PCIe 3.0 x16</option>
                    <option value="P3">PCIe 4.0 x4</option>
                    <option value="P4">PCIe 4.0 x8</option>
                    <option value="P5">PCIe 4.0 x16</option>
                </select>
                <p class="text">Resolusi Monitor Anda?</p>
                <select name="resolusi" id="resolusi">
                    <option value="">Choose</option>
                    <option value="R1">HD (High Definition): 1280 x 720 piksel (720p)</option>
                    <option value="R2">Full HD (FHD): 1920 x 1080 piksel (1080p)</option>
                    <option value="R3">Quad HD (QHD): 2560 x 1440 piksel (1440p)</option>
                    <option value="R4">Ultra HD (UHD) atau 4K: 3840 x 2160 piksel</option>
                </select>
                <p class="text">Power Supply anda berapa watt?</p>
                <select name="PSU" id="PSU">
                    <option value="">Choose</option>
                    <option value="W1">250 W</option>
                    <option value="W2">300 W</option>
                    <option value="W3">450 W</option>
                    <option value="W4">550 W</option>
                    <option value="W5">600 W</option>
                    <option value="W6">700 W</option>
                    <option value="W7">750 W</option>
                    <option value="W8">850 W</option>
                </select>
                <p class="text">Jenis Casing Komputer anda?</p>
                <select name="casing" id="casing">
                    <option value="">Choose</option>
                    <option value="C1">Mini Tower</option>
                    <option value="C2">Mid Tower</option>
                    <option value="C3">Full Tower</option>
                </select>
                <input type="submit" value="Submit" class="custom-button">
                <script>
                    
                </script>
                
            </form>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $keperluan = isset($_POST['keperluan']) ? $_POST['keperluan'] : null;
            $brand = isset($_POST['brand']) ? $_POST['brand'] : null;
            $tahunproduksi = isset($_POST['tahunproduksi']) ? $_POST['tahunproduksi'] : null;
            $budget = isset($_POST['budget']) ? $_POST['budget'] : null;
            $performaRender = isset($_POST['performaRender']) ? $_POST['performaRender'] : null;
            $kategorigame = isset($_POST['kategorigame']) ? $_POST['kategorigame'] : null;
            $PCIe = isset($_POST['PCIe']) ? $_POST['PCIe'] : null;
            $Resolusi = isset($_POST['resolusi']) ? $_POST['resolusi'] : null;
            $PSU = isset($_POST['PSU']) ? $_POST['PSU'] : null;
            $casing = isset($_POST['casing']) ? $_POST['casing'] : null;

            // Menentukan query berdasarkan input
            $query = null;

            if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T1"
                && $budget == "B9"
                && $performaRender == "M3"
                && ($kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P2"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 1";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T1"
                && $budget == "B10"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P2"
                && ($Resolusi == "R2" || $Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W4" || $PSU == "W5")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 2";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T1"
                && $budget == "B12"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P2"
                && ($Resolusi == "R2" || $Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W5" || $PSU == "W6")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 3";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T2"
                && ($budget == "B2" || $budget == "B3")
                && $performaRender == "M1"
                && ($kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                &&  $PCIe == "P2"
                && ($Resolusi == "R1" || $Resolusi == "R2")
                && ($PSU == "W2" || $PSU == "W3")
                && ($casing == "C1" || $casing == "C2")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 4";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T2"
                && ($budget == "B3" || $budget == "B4")
                && $performaRender == "M2"
                && ($kategorigame == "Y2" || $kategorigame == "Y3")
                && $PCIe == "P2"
                && ($Resolusi == "R1" || $Resolusi == "R2")
                && ($PSU == "W2" || $PSU == "W3")
                && ($casing == "C1" || $casing == "C2")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 5";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T2"
                && $budget == "B12"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2")
                && $PCIe == "P2"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W5" || $PSU == "W6")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 6";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T2"
                && $budget == "B3"
                && $performaRender == "M2"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P2"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 7";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T2"
                && $budget == "B4"
                && $performaRender == "M2"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P2"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W4" || $PSU == "W5")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 8";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T2"
                && ($budget == "B4" || $budget == "B5")
                && $performaRender == "M2"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P2"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 9";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T3"
                && ($budget == "B2" || $budget == "B3")
                && $performaRender == "M1"
                && ($kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P2"
                && ($Resolusi == "R1" || $Resolusi == "R2")
                && ($PSU == "W1" || $PSU == "W2")
                && ($casing == "C1" || $casing == "C2")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 10";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T3"
                && $budget == "B5"
                && $performaRender == "M2"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && $PSU == "W4"
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 11";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T3"
                && $budget == "B6"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && $PSU == "W5"
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 12";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T3"
                && ($budget == "B8" || $budget == "B9")
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && $PSU == "W6"
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 13";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T3"
                && $budget == "B12"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && $Resolusi == "R4"
                && $PSU == "W7"
                && $casing == "C3"
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 14";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T4"
                && ($budget == "B6" || $budget == "B7")
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W5" || $PSU == "W6")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 15";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T4"
                && $budget == "B11"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && $PSU == "W7"
                &&  $casing == "C3"
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 16";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T5"
                && $budget == "B11"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && $PSU == "W6"
                && $casing == "C3"
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 17";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T5"
                && $budget == "B13"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && $Resolusi == "R4"
                && $PSU == "W8"
                && $casing == "C3"
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 18";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T5"
                && $budget == "B12"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && $Resolusi == "R4"
                && $PSU == "W8"
                && $casing == "C3"
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 19";
            } else if (
                $keperluan == "K1"
                && $brand == "BS2"
                && $tahunproduksi == "T5"
                && $budget == "B1"
                && $performaRender == "M1"
                && ($kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P1"
                && $Resolusi == "R2"
                && ($PSU == "W1" || $PSU == "W2")
                && ($casing == "C1" || $casing == "C2")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 20";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T6"
                && $budget == "B6"
                && $performaRender == "M2"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P4"
                && $Resolusi == "R2"
                && ($PSU == "W2" || $PSU == "W3")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 21";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T6"
                && $budget == "B10"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P4"
                && $Resolusi == "R3"
                && $PSU == "W4"
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 22";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T6"
                && $budget == "B10"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && $PSU == "W5"
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 23";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T6"
                && $budget == "B7"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P4"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 24";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T6"
                && $budget == "B9"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P4"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 25";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T7"
                && $budget == "B10"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                &&  $PSU == "W4"
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 26";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T7"
                && $budget == "B11"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                &&  $PSU == "W5"
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 27";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS2"
                && $tahunproduksi == "T7"
                && $budget == "B12"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W6" || $PSU == "W7" || $PSU == "W8")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 28";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T1"
                && $budget == "B3"
                && $performaRender == "M1"
                && ($kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P2"
                && ($Resolusi == "R1" || $Resolusi == "R2")
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C1" || $casing == "C2")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 29";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T2"
                && $budget == "B1"
                && $performaRender == "M2"
                && ($kategorigame == "Y4" || $kategorigame == "Y2" || $kategorigame == "Y3")
                && $PCIe == "P4"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W2" || $PSU == "W3")
                && ($casing == "C1" || $casing == "C2")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 30";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T2"
                && $budget == "B3"
                && $performaRender == "M2"
                && ($kategorigame == "Y4" || $kategorigame == "Y2" || $kategorigame == "Y3")
                && $PCIe == "P5"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 31";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T2"
                && $budget == "B3"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P2"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W4" || $PSU == "W5")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 32";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T2"
                && $budget == "B2"
                && $performaRender == "M1"
                && ($kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P2"
                && ($Resolusi == "R1" || $Resolusi == "R2")
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C1" || $casing == "C2")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 33";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T3"
                && $budget == "B6"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W5" || $PSU == "W6")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 34";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T3"
                && $budget == "B7"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W6" || $PSU == "W7")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 35";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T3"
                && $budget == "B9"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W6" || $PSU == "W7")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 36";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T3"
                && $budget == "B2"
                && $performaRender == "M2"
                && ($kategorigame == "Y2" || $kategorigame == "Y3")
                && $PCIe == "P5"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 37";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T4"
                && $budget == "B4"
                && $performaRender == "M2"
                && ($kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P4"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && $PSU == "W2"
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 38";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T4"
                && $budget == "B4"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && ($PCIe == "P4" || $PCIe == "P5")
                && ($Resolusi == "R2" || $Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W2" || $PSU == "W3")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 39";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T4"
                && $budget == "B5"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W4" || $PSU == "W5")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 40";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T5"
                && $budget == "B11"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && $PSU == "W6"
                && ($casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 41";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T5"
                && $budget == "B11"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && $Resolusi == "R4"
                && $PSU == "W8"
                && $casing == "C3"
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 42";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T5"
                && $budget == "B7"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P4"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 43";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T5"
                && $budget == "B11"
                && $performaRender == "M4"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W6" || $PSU == "W7")
                && $casing == "C3"
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 44";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T5"
                && $budget == "B2"
                && $performaRender == "M2"
                && ($kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P3"
                && $Resolusi == "R2"
                && ($PSU == "W1" || $PSU == "W2")
                && ($casing == "C1" || $casing == "C2")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 45";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T5"
                && $budget == "B2"
                && $performaRender == "M2"
                && ($kategorigame == "Y1" || $kategorigame == "Y2")
                && ($PCIe == "P4" || $PCIe == "P5")
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W5" || $PSU == "W6")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 46";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T6"
                && $budget == "B4"
                && $performaRender == "M2"
                && ($kategorigame == "Y2" || $kategorigame == "Y3" || $kategorigame == "Y4")
                && $PCIe == "P4"
                && $Resolusi == "R2"
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C1" || $casing == "C2")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 47";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T6"
                && $budget == "B9"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2")
                && $PCIe == "P5"
                && ($Resolusi == "R3" || $Resolusi == "R4")
                && ($PSU == "W5" || $PSU == "W6")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 48";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T6"
                && $budget == "B8"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2")
                && $PCIe == "P5"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W4" || $PSU == "W5")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 49";
            } else if (($keperluan == "K1" || $keperluan == "K2" || $keperluan == "K3" || $keperluan == "K4" || $keperluan == "K5")
                && $brand == "BS1"
                && $tahunproduksi == "T7"
                && $budget == "B6"
                && $performaRender == "M3"
                && ($kategorigame == "Y1" || $kategorigame == "Y2" || $kategorigame == "Y4")
                && $PCIe == "P4"
                && ($Resolusi == "R2" || $Resolusi == "R3")
                && ($PSU == "W3" || $PSU == "W4")
                && ($casing == "C2" || $casing == "C3")
            ) {
                echo '<p class="text-hasil">Berdasarkan data yang anda masukan, Graphic Card yang cocok adalah :</p>';
                $query = "SELECT * FROM graphic_cards WHERE id = 50";
            }
            if ($query) { // Hanya menjalankan query jika ada query yang terbentuk
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    echo "<div class='table-container'>"; // Bungkus tabel dalam div dengan kelas table-container
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Nama</th><th>Memory</th><th>Bus</th><th>PSU</th><th>Tahun</th><th>Harga</th></tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['memory']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['bus']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['psu']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['tahun_produksi']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['budget']) . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "</div>"; // Tutup div table-container
                } else {
                    echo "<p>Terjadi kesalahan dalam query atau tidak ada data yang ditemukan.</p>";
                }
            } else {
                echo "<p>Tidak ada kondisi yang terpenuhi, silakan coba lagi dengan parameter yang berbeda.</p>";
            }
        }
        ?>
        <div class="border">
            <img src="/Asset/img/bg1.png" class="batas" alt="">
        </div>
    </nav>
    <div class="atas"><?php include '../parts/footer.php'; ?></div>
    <script src="../javascript/aplikasi.js"></script> <!-- Memindahkan script ke bagian bawah -->
</body>

</html>