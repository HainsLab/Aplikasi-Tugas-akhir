<script>
    document.addEventListener("DOMContentLoaded", function() {
        const brandSelect = document.getElementById("brandSelect");
        const yearSelect = document.getElementById("tahun");
        const priceSelect = document.getElementById("Price");
        const performaSelect = document.getElementById("performaRender");
        const kategoriGameSelect = document.getElementById("katgame");
        const pcieSelect = document.getElementById("PCIe");
        const resolusiSelect = document.getElementById("resolusi");
        const psuSelect = document.getElementById("PSU");
        const casingSelect = document.getElementById("casing");

        const data = {
            "NVIDIA": {
                "2018": {
                    "price": ["B9", "B10", "B12"],
                    "performa": ["M3"],
                    "kategoriGame": ["Y1", "Y2", "Y3", "Y4"],
                    "pcie": ["P2"],
                    "resolusi": ["R2", "R3", "R4"],
                    "psu": ["W3", "W4", "W5"],
                    "casing": ["C2", "C3"]
                },
                "2019": {
                    "price": ["B2", "B3", "B4", "B5", "B12"],
                    "performa": ["M1", "M2", "M3"],
                    "kategoriGame": ["Y1", "Y2", "Y3", "Y4"],
                    "pcie": ["P2"],
                    "resolusi": ["R1", "R2", "R3", "R4"],
                    "psu": ["W2", "W3", "W4", "W5", "W6"],
                    "casing": ["C1", "C2", "C3"],
                },
                "2020": {
                    "price": ["B2", "B3", "B5", "B6", "B8", "B9", "B12"],
                    "performaRender": ["M1", "M2", "M3", "M4"],
                    "kategoriGame": ["Y1", "Y2", "Y3", "Y4"],
                    "pcie": ["P2", "P5"],
                    "resolusi": ["R1", "R2", "R3", "R4"],
                    "psu": ["W1", "W2", "W4", "W6", "W7", ],
                    "casing": ["C1", "C2", "C3"]
                },
                "2021": {
                    "price": ["B6", "B7", "B11"],
                    "performaRender": ["M3", "M4"],
                    "kategoriGame": ["Y1", "Y2", "Y4"],
                    "pcie": ["P5"],
                    "resolusi": ["R3", "R4"],
                    "psu": ["W5", "W6", "W7", ],
                    "casing": ["C2", "C3"]
                },
                "2022": {
                    "price": ["B1", "B11", "B12", "B13"],
                    "performaRender": ["M1", "M4"],
                    "kategoriGame": ["Y1", "Y2", "Y3", "Y4"],
                    "pcie": ["P1", "P5"],
                    "resolusi": ["R2", "R3", "R4"],
                    "psu": ["W1", "W2", "W6", "W8"],
                    "casing": ["C1", "C2", "C3"]
                },
                "2023": {
                    "price": ["B6", "B7", "B9", "B10"],
                    "performaRender": ["M2", "M3", "M4"],
                    "kategoriGame": ["Y1", "Y2", "Y3", "Y4"],
                    "pcie": ["P4", "P5"],
                    "resolusi": ["R2", "R3", "R4"],
                    "psu": ["W2", "W3", "W4", "W5"],
                    "casing": ["C2", "C3"]
                },
                "2024": {
                    "price": ["B10", "B11", "B12"],
                    "performaRender": ["M4"],
                    "kategoriGame": ["Y1", "Y2", "Y3", "Y4"],
                    "pcie": ["P5"],
                    "resolusi": ["R3", "R4"],
                    "psu": ["W4", "W5", "W6", "W7", "W8"],
                    "casing": ["C2", "C3"]
                }
            }
        };
        /*"AMD": {
            "2018": {"price": ["B3", "B5", "B7"], "performa": ["M2"], "kategoriGame": ["Y1", "Y3"], "pcie": ["P1"], "resolusi": ["R1", "R2"], "psu": ["W1", "W2"], "casing": ["C1", "C2"]},
            "2019": {"price": ["B2", "B4", "B6", "B8"], "performa": ["M1", "M3"], "kategoriGame": ["Y1", "Y2", "Y3", "Y4"], "pcie": ["P2"], "resolusi": ["R1", "R2", "R3"], "psu": ["W2", "W4"], "casing": ["C1", "C3"]}
        }*/
    

    function updateOptions(selectElement, options) {
        selectElement.innerHTML = '<option value="">Choose</option>';
        if (options) {
            options.forEach(option => {
                const newOption = document.createElement("option");
                newOption.value = option;
                newOption.textContent = option;
                selectElement.appendChild(newOption);
            });
        }
    }

    function updateAllDropdowns() {
        const selectedBrand = brandSelect.value;
        if (selectedBrand && data[selectedBrand]) {
            const years = Object.keys(data[selectedBrand]);
            updateOptions(yearSelect, years);
        }
    }

    function updateDependentDropdowns() {
        const selectedBrand = brandSelect.value;
        const selectedYear = yearSelect.value;
        if (selectedBrand && selectedYear && data[selectedBrand][selectedYear]) {
            const details = data[selectedBrand][selectedYear];
            updateOptions(priceSelect, details.price);
            updateOptions(performaSelect, details.performa);
            updateOptions(kategoriGameSelect, details.kategoriGame);
            updateOptions(pcieSelect, details.pcie);
            updateOptions(resolusiSelect, details.resolusi);
            updateOptions(psuSelect, details.psu);
            updateOptions(casingSelect, details.casing);
        }
    }

    brandSelect.addEventListener("change", updateAllDropdowns); yearSelect.addEventListener("change", updateDependentDropdowns);
    });
</script>