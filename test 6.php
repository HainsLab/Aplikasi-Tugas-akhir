<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi</title>
    <link rel="stylesheet" href="../css/aplikasi.css" />
</head>

<body>


    <nav class="konten">
        <div class="sub-title">
            <h2>Sistem Penunjang Keputusan Pemilihan Graphic Card</h2>
        </div>
        <div class="isi-konten">
            <form method="post"> <!-- Memindahkan form agar mencakup semua elemen input -->
                <p class="text">Keperluan utama anda membeli Graphic Card?</p>
                <select name="keperluan" id="keperluan" onchange="updatebrand()">
                    <option value="">Choose</option>
                    <option value="K1">Gaming</option>
                    <option value="K2">Desain Grafis</option>
                    <option value="K3">Animasi</option>
                    <option value="K4">AI dan Machine Learning</option>
                    <option value="K5">Editing Video</option>
                </select>

                <p class="text">Preferensi Brand Graphic Card?</p>
                <select name="brand" id="brandSelect" onchange="updatetahun()">
                    <option value="">Choose</option>
                </select>

                <p class="text">Pilih keluaran tahun </p>
                <select name="tahunproduksi" id="tahun" onchange="updateprice()">
                    <option value="">Choose</option>
                </select>

                <p class="text"> Berapa Budget yang anda miliki?</p>
                <select name="budget" id="Price" onchange="performaR()">
                    <option value="">Choose</option>
                </select>

                <p class="text">Seberapa tinggi performa yang Anda butuhkan untuk aplikasi rendering atau desain grafis?</p>
                <select name="performaRender" id="performaRender" onchange="kategoriG ()">
                    <option value="">Choose</option>
                </select>

                <p class="text"> Apakah anda bermain game? Game yang ingin anda mainkan termasuk kategori game berat, sedang atau ringan?</p>
                <select name="kategorigame" id="katgame" onchange="pcie()">
                    <option value="">Choose</option>
                </select>

                <p class="text">PCIe Motherboard anda?</p>
                <select name="PCIe" id="PCIe" onchange="Resolusi()">
                    <option value="">Choose</option>
                </select>

                <p class="text">Resolusi Monitor Anda?</p>
                <select name="resolusi" id="resolusi" onchange="psu()">
                    <option value="">Choose</option>
                </select>

                <p class="text">Power Supply anda berapa watt?</p>
                <select name="PSU" id="PSU" onchange="Casing()">
                    <option value="">Choose</option>
                </select>

                <p class="text">Jenis Casing Komputer anda?</p>
                <select name="casing" id="casing">
                    <option value="">Choose</option>
                </select>

                <input type="submit" name="submit" value="Submit" class="custom-button">

            </form>
        </div>
    </nav>

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
                                            text: "Entry-Level",
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
                                            text: "High-End",
                                            Y2: {
                                                text: "Sedang ",
                                                P2: {
                                                    text: "PCIe 3.0 x16",
                                                    R2: {
                                                        text: "Full HD (FHD): 1920 x 1080 piksel (1080p)",
                                                        W3: {
                                                            text: "450 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        },
                                                        W4: {
                                                            text: "550 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        }
                                                    },
                                                    R3: {
                                                        text: "Quad HD (QHD): 2560 x 1440 piksel (1440p)",
                                                        W3: {
                                                            text: "450 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        },
                                                        W4: {
                                                            text: "550 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        }
                                                    },
                                                }
                                            },
                                            Y3: {
                                                text: "ringan",
                                                P2: {
                                                    text: "PCIe 3.0 x16",
                                                    R2: {
                                                        text: "Full HD (FHD): 1920 x 1080 piksel (1080p)",
                                                        W3: {
                                                            text: "450 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        },
                                                        W4: {
                                                            text: "550 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        }
                                                    },
                                                    R3: {
                                                        text: "Quad HD (QHD): 2560 x 1440 piksel (1440p)",
                                                        W3: {
                                                            text: "450 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        },
                                                        W4: {
                                                            text: "550 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        }
                                                    },
                                                }
                                            },
                                            Y4: {
                                                text: "Saya tidak bermain game",
                                                P2: {
                                                    text: "PCIe 3.0 x16",
                                                    R2: {
                                                        text: "Full HD (FHD): 1920 x 1080 piksel (1080p)",
                                                        W3: {
                                                            text: "450 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        },
                                                        W4: {
                                                            text: "550 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        }
                                                    },
                                                    R3: {
                                                        text: "Quad HD (QHD): 2560 x 1440 piksel (1440p)",
                                                        W3: {
                                                            text: "450 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        },
                                                        W4: {
                                                            text: "550 W",
                                                            C2: {
                                                                text: "Mid Tower"
                                                            },
                                                            C3: {
                                                                text: "Full Tower"
                                                            }
                                                        }
                                                    },
                                                }

                                            }
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
                        }
                    }
                }
            }
        };

        function updateDropdown(selectId, data) {
            let select = document.getElementById(selectId);
            select.innerHTML = "<option value=''>Choose</option>";

            for (let key in data) {
                let option = document.createElement("option");
                option.value = key;
                option.text = data[key].text;
                select.appendChild(option);
            }
        }

        function updatebrand() {
            let keperluan = document.getElementById("keperluan").value;
            if (keperluan && dataGraphicCard[keperluan]) {
                updateDropdown("brandSelect", dataGraphicCard[keperluan]);
            }
        }

        function updatetahun() {
            let keperluan = document.getElementById("keperluan").value;
            let brand = document.getElementById("brandSelect").value;
            if (keperluan && brand && dataGraphicCard[keperluan][brand]) {
                updateDropdown("tahun", dataGraphicCard[keperluan][brand].tahun);
            }
        }

        function updateprice() {
            let keperluan = document.getElementById("keperluan").value;
            let brand = document.getElementById("brandSelect").value;
            let tahun = document.getElementById("tahun").value;
            if (keperluan && brand && tahun && dataGraphicCard[keperluan][brand].tahun[tahun]) {
                updateDropdown("Price", dataGraphicCard[keperluan][brand].tahun[tahun].budget);
            }
        }

        function performaR() {
            let keperluan = document.getElementById("keperluan").value;
            let brand = document.getElementById("brandSelect").value;
            let tahun = document.getElementById("tahun").value;
            let budget = document.getElementById("Price").value;
            if (keperluan && brand && tahun && budget && dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget]) {
                updateDropdown("performaRender", dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget].render);
            }
        }

        function kategoriG() {
            let keperluan = document.getElementById("keperluan").value;
            let brand = document.getElementById("brandSelect").value;
            let tahun = document.getElementById("tahun").value;
            let budget = document.getElementById("Price").value;
            let render = document.getElementById("performaRender").value;
            if (keperluan && brand && tahun && budget && render && dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget].render[render]) {
                updateDropdown("katgame", dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget].render[render]);
            }
        }

        function pcie() {
            let keperluan = document.getElementById("keperluan").value;
            let brand = document.getElementById("brandSelect").value;
            let tahun = document.getElementById("tahun").value;
            let budget = document.getElementById("Price").value;
            let render = document.getElementById("performaRender").value;
            let game = document.getElementById("katgame").value;
            if (keperluan && brand && tahun && budget && render && game && dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget].render[render][game]) {
                updateDropdown("PCIe", dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget].render[render][game]);
            }
        }

        function Resolusi() {
            let keperluan = document.getElementById("keperluan").value;
            let brand = document.getElementById("brandSelect").value;
            let tahun = document.getElementById("tahun").value;
            let budget = document.getElementById("Price").value;
            let render = document.getElementById("performaRender").value;
            let game = document.getElementById("katgame").value;
            let pcie = document.getElementById("PCIe").value;
            if (keperluan && brand && tahun && budget && render && game && pcie && dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget].render[render][game][pcie]) {
                updateDropdown("resolusi", dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget].render[render][game][pcie]);
            }
        }

        function psu() {
            let keperluan = document.getElementById("keperluan").value;
            let brand = document.getElementById("brandSelect").value;
            let tahun = document.getElementById("tahun").value;
            let budget = document.getElementById("Price").value;
            let render = document.getElementById("performaRender").value;
            let game = document.getElementById("katgame").value;
            let pcie = document.getElementById("PCIe").value;
            let resolusi = document.getElementById("resolusi").value;
            if (keperluan && brand && tahun && budget && render && game && pcie && resolusi && dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget].render[render][game][pcie][resolusi]) {
                updateDropdown("PSU", dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget].render[render][game][pcie][resolusi]);
            }
        }

        function Casing() {
            let keperluan = document.getElementById("keperluan").value;
            let brand = document.getElementById("brandSelect").value;
            let tahun = document.getElementById("tahun").value;
            let budget = document.getElementById("Price").value;
            let render = document.getElementById("performaRender").value;
            let game = document.getElementById("katgame").value;
            let pcie = document.getElementById("PCIe").value;
            let resolusi = document.getElementById("resolusi").value;
            let psu = document.getElementById("PSU").value;
            if (keperluan && brand && tahun && budget && render && game && pcie && resolusi && psu && dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget].render[render][game][pcie][resolusi][psu]) {
                updateDropdown("casing", dataGraphicCard[keperluan][brand].tahun[tahun].budget[budget].render[render][game][pcie][resolusi][psu]);
            }
        }
    </script>
    <?php
    include "phptest6.php"; // Pastikan ini file koneksi database Anda
    ?>
</body>

</html>