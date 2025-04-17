<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Dinamis dengan Harga</title>
</head>

<body>
    <form method="POST">
        <label for="jenis">Pilih Jenis Kendaraan:</label>
        <select name="jenis" id="jenis" onchange="updateKendaraan()">
            <option value="">-- Pilih Jenis --</option>
            <option value="mobil">Mobil</option>
            <option value="motor">Motor</option>
        </select>

        <label for="kendaraan">Pilih Kendaraan:</label>
        <select name="kendaraan" id="kendaraan" onchange="updateHarga()">
            <option value="">-- Pilih Kendaraan --</option>
        </select>

        <label for="harga">Harga:</label>
        <select name="harga" id="harga">
            <option value="">-- Pilih Harga --</option>
        </select>

        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        // Data kendaraan dengan harga
        const dataKendaraan = {
            motor: [{
                    value: "Beat",
                    text: "Beat",
                    harga: "15000000"
                },
                {
                    value: "Supra",
                    text: "Supra",
                    harga: "13000000"
                }
            ],
            mobil: [{
                    value: "Toyota",
                    text: "Toyota",
                    harga: "100000000"
                },
                {
                    value: "Honda",
                    text: "Honda",
                    harga: "200000000"
                }
            ]
        };

        // Update dropdown kendaraan berdasarkan jenis kendaraan yang dipilih
        function updateKendaraan() {
            const jenis = document.getElementById("jenis").value;
            const kendaraanSelect = document.getElementById("kendaraan");
            const hargaSelect = document.getElementById("harga");

            // Kosongkan dropdown kendaraan & harga sebelum diisi ulang
            kendaraanSelect.innerHTML = '<option value="">-- Pilih Kendaraan --</option>';
            hargaSelect.innerHTML = '<option value="">-- Pilih Harga --</option>';

            if (jenis && dataKendaraan[jenis]) {
                dataKendaraan[jenis].forEach(kendaraan => {
                    const option = document.createElement("option");
                    option.value = kendaraan.value;
                    option.textContent = kendaraan.text;
                    kendaraanSelect.appendChild(option);
                });
            }
        }

        // Update dropdown harga berdasarkan kendaraan yang dipilih
        function updateHarga() {
            const jenis = document.getElementById("jenis").value;
            const kendaraan = document.getElementById("kendaraan").value;
            const hargaSelect = document.getElementById("harga");

            // Kosongkan dropdown harga sebelum diisi ulang
            hargaSelect.innerHTML = '<option value="">-- Pilih Harga --</option>';

            if (jenis && kendaraan) {
                const selectedKendaraan = dataKendaraan[jenis].find(k => k.value === kendaraan);
                if (selectedKendaraan) {
                    const option = document.createElement("option");
                    option.value = selectedKendaraan.harga;
                    option.textContent = "Rp " + new Intl.NumberFormat('id-ID').format(selectedKendaraan.harga);
                    hargaSelect.appendChild(option);
                }
            }
        }
    </script>
    <?php
    include "phptest3.php"; // Pastikan ini file koneksi database Anda
    ?>

</body>

</html>