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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <label for="keperluan" class="text">Keperluan utama anda membeli Graphic Card?</label>
                <select name="keperluan" id="keperluan" onchange="updatebrand()">
                    <option value="">Choose</option>
                    <option value="K1">Gaming</option>
                    <option value="K2">Desain Grafis</option>
                    <option value="K3">Animasi</option>
                    <option value="K4">AI dan Machine Learning</option>
                    <option value="K5">Editing Video</option>
                </select>

                <label for="brandSelect" class="text">Preferensi Brand Graphic Card?</label>
                <select name="brand" id="brandSelect" onchange="updatetahun()">
                    <option value="">Choose</option>
                </select>

                <label for="tahun" class="text">Pilih keluaran tahun </label>
                <select name="tahunproduksi" id="tahun" onchange="updateprice()">
                    <option value="">Choose</option>
                </select>

                <label for="Price" class="text"> Berapa Budget yang anda miliki?</label>
                <select name="budget" id="Price" onchange="performaRender()">
                    <option value="">Choose</option>
                </select>

                <label for="performaRender" class="text">Seberapa tinggi performa yang Anda butuhkan untuk aplikasi rendering atau desain grafis?</label>
                <select name="performaRender" id="performaRender" onchange="katgame()">
                    <option value="">Choose</option>
                </select>

                <label for="katgame" class="text"> Apakah anda bermain game? Game yang ingin anda mainkan termasuk kategori game berat, sedang atau ringan?</label>
                <select name="kategorigame" id="katgame" onchange="PCIe()">
                    <option value="">Choose</option>
                </select>

                <label for="PCIe" class="text">PCIe Motherboard anda?</label>
                <select name="PCIe" id="PCIe" onchange="resolusi()">
                    <option value="">Choose</option>
                </select>

                <label for="resolusi" class="text">Resolusi Monitor Anda?</label>
                <select name="resolusi" id="resolusi" onchange="PSU()">
                    <option value="">Choose</option>
                </select>

                <label for="PSU" class="text">Power Supply anda berapa watt?</label>
                <select name="PSU" id="PSU" onchange="casing()">
                    <option value="">Choose</option>
                </select>

                <label for="casing" class="text">Jenis Casing Komputer anda?</label>
                <select name="casing" id="casing">
                    <option value="">Choose</option>
                </select>

                <input type="submit" value="Submit" class="custom-button">
            </form>
            <script>
                const dataGraphicCard = {
                    K1: { // Keperluan: Gaming
                        BS1: { // Brand: AMD
                            text: "AMD",
                            tahun: {
                                T1: { // Tahun 2018
                                    text: "2018",
                                    budget: {
                                        B3: {
                                            text: "Rp.3.000.000 - Rp.3.999.999",
                                            render: {
                                                M1: {
                                                    text: "Entry-Level"
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    K2: { // Keperluan: Desain Grafis
                        BS2: { // Brand: NVIDIA
                            text: "NVIDIA",
                            tahun: {
                                T1: { // Tahun 2018
                                    text: "2018",
                                    budget: {
                                        B9: {
                                            text: "Rp.9.000.000 - Rp.9.999.999",
                                            render: {
                                                M3: {
                                                    text: "High-End"
                                                }
                                            }
                                        },
                                        B10: {
                                            text: "Rp.10.000.000 - Rp.15.999.999",
                                            render: {
                                                M3: {
                                                    text: "High-End"
                                                }
                                            }
                                        }
                                    }
                                },
                                T2: {
                                    text: "2019"
                                } // Tahun 2019 tanpa budget
                            }
                        }
                    }
                };



                // Update dropdown kendaraan berdasarkan jenis kendaraan yang dipilih
                function updateKendaraan() {
                    const jenis = document.getElementById("jenis").value;
                    const kendaraanSelect = document.getElementById("kendaraan");
                    const hargaSelect = document.getElementById("harga");
                    const warnaSelect = document.getElementById("warna");

                    // Kosongkan dropdown kendaraan, harga, dan warna sebelum diisi ulang
                    kendaraanSelect.innerHTML = '<option value="">-- Pilih Kendaraan --</option>';
                    hargaSelect.innerHTML = '<option value="">-- Pilih Harga --</option>';
                    warnaSelect.innerHTML = '<option value="">-- Pilih Warna --</option>';

                    if (jenis && dataKendaraan[jenis]) {
                        dataKendaraan[jenis].forEach(kendaraan => {
                            const option = document.createElement("option");
                            option.value = kendaraan.value;
                            option.textContent = kendaraan.text;
                            kendaraanSelect.appendChild(option);
                        });
                    }
                }

                // Update dropdown harga dan warna berdasarkan kendaraan yang dipilih
                function updateHarga() {
                    const jenis = document.getElementById("jenis").value;
                    const kendaraan = document.getElementById("kendaraan").value;
                    const hargaSelect = document.getElementById("harga");
                    const warnaSelect = document.getElementById("warna");

                    // Kosongkan dropdown harga & warna sebelum diisi ulang
                    hargaSelect.innerHTML = '<option value="">-- Pilih Harga --</option>';
                    warnaSelect.innerHTML = '<option value="">-- Pilih Warna --</option>';

                    if (jenis && kendaraan) {
                        const selectedKendaraan = dataKendaraan[jenis].find(k => k.value === kendaraan);
                        if (selectedKendaraan) {
                            // Menambahkan harga kendaraan
                            const optionHarga = document.createElement("option");
                            optionHarga.value = selectedKendaraan.harga;
                            optionHarga.textContent = "Rp " + new Intl.NumberFormat('id-ID').format(selectedKendaraan.harga);
                            hargaSelect.appendChild(optionHarga);

                            // Menambahkan warna kendaraan
                            const optionWarna = document.createElement("option");
                            optionWarna.value = selectedKendaraan.warna;
                            optionWarna.textContent = selectedKendaraan.warna;
                            warnaSelect.appendChild(optionWarna);
                        }
                    }
                }
            </script>
        </div>
</body>

</html>