-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2025 at 02:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_graphic_cards`
--

CREATE TABLE `brand_graphic_cards` (
  `Kode_brand` varchar(255) NOT NULL,
  `Brand_Graphic_Card` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand_graphic_cards`
--

INSERT INTO `brand_graphic_cards` (`Kode_brand`, `Brand_Graphic_Card`) VALUES
('BS1', 'AMD'),
('BS2', 'NVIDIA');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `Kode_budget` varchar(255) NOT NULL,
  `range_budget` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`Kode_budget`, `range_budget`) VALUES
('B1', 'Rp.1.000.000 - Rp.1.999.999'),
('B10', 'Rp.10.000.000 - Rp.15.999.999'),
('B11', 'Rp.16.000.000 - Rp.19.999.999'),
('B12', 'Rp.20.000.000 - Rp.29.999.999'),
('B13', 'Rp.30.000.000 Keatas'),
('B2', 'Rp.2.000.000 - Rp.2.999.999'),
('B3', 'Rp.3.000.000 - Rp.3.999.999'),
('B4', 'Rp.4.000.000 - Rp.4.999.999'),
('B5', 'Rp.5.000.000 - Rp.6.999.999'),
('B6', 'Rp.6.000.000 - Rp.6.999.999'),
('B7', 'Rp.7.000.000 - Rp.7.999.999'),
('B8', 'Rp.8.000.000 - Rp.8.999.999'),
('B9', 'Rp.9.000.000 - Rp.9.999.999');

-- --------------------------------------------------------

--
-- Table structure for table `casing`
--

CREATE TABLE `casing` (
  `Kode_casing` varchar(255) NOT NULL,
  `jenis_casing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `casing`
--

INSERT INTO `casing` (`Kode_casing`, `jenis_casing`) VALUES
('C1', 'Mini Tower'),
('C2', 'Mid Tower'),
('C3', 'Full Tower');

-- --------------------------------------------------------

--
-- Table structure for table `graphic_card`
--

CREATE TABLE `graphic_card` (
  `Kode_graphic_card` varchar(255) NOT NULL,
  `nama_graphic_card` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graphic_card`
--

INSERT INTO `graphic_card` (`Kode_graphic_card`, `nama_graphic_card`) VALUES
('G1', 'GeForce RTX 2070'),
('G10', 'GeForce GTX 1650'),
('G11', 'GeForce RTX 3060 Ti'),
('G12', 'GeForce RTX 3070'),
('G13', 'GeForce RTX 3080'),
('G14', 'GeForce RTX 3090'),
('G15', 'GeForce RTX 3070 Ti'),
('G16', 'GeForce RTX 3080 Ti'),
('G17', 'GeForce RTX 4080'),
('G18', 'GeForce RTX 4090'),
('G19', 'GeForce RTX 3090 Ti'),
('G2', 'GeForce RTX 2080'),
('G20', 'GeForce GTX 1630'),
('G21', 'GeForce RTX 4060'),
('G22', 'GeForce RTX 4070'),
('G23', 'GeForce RTX 4070 Ti'),
('G24', 'GeForce RTX 4060 Ti 8 GB'),
('G25', 'GeForce RTX 4060 Ti 16 GB'),
('G26', 'GeForce RTX 4070 SUPER'),
('G27', 'GeForce RTX 4070 Ti SUPER'),
('G28', 'GeForce RTX 4080 SUPER'),
('G29', 'Radeon RX 590'),
('G3', 'GeForce RTX 2080 TI'),
('G30', 'Radeon RX 5500 XT'),
('G31', 'Radeon RX 5700'),
('G32', 'Radeon RX 5700 XT'),
('G33', 'Radeon RX 560 XT'),
('G34', 'Radeon RX 6800'),
('G35', 'Radeon RX 6800 XT'),
('G36', 'Radeon RX 6900 XT'),
('G37', 'Radeon RX 5600 XT'),
('G38', 'Radeon RX 6600'),
('G39', 'Radeon RX 6600 XT'),
('G4', 'GeForce GTX 1650 SUPER'),
('G40', 'Radeon RX 6700 XT'),
('G41', 'Radeon RX 7900 XT'),
('G42', 'Radeon RX 7900 XTX'),
('G43', 'Radeon RX 6650 XT'),
('G44', 'Radeon RX 6950 XT'),
('G45', 'Radeon RX 6400'),
('G46', 'Radeon RX 6500 XT'),
('G47', 'Radeon RX 7600'),
('G48', 'Radeon RX 7800 XT'),
('G49', 'Radeon RX 7700 XT'),
('G5', 'GeForce GTX 1660 SUPER'),
('G50', 'Radeon RX 7600 XT'),
('G6', 'GeForce RTX 2080 SUPER'),
('G7', 'GeForce RTX 2060 SUPER'),
('G8', 'GeForce RTX 2070 SUPER'),
('G9', 'GeForce RTX 2060');

-- --------------------------------------------------------

--
-- Table structure for table `graphic_cards`
--

CREATE TABLE `graphic_cards` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `memory` varchar(255) DEFAULT NULL,
  `bus` varchar(50) DEFAULT NULL,
  `psu` varchar(50) DEFAULT NULL,
  `tahun_produksi` int(11) DEFAULT NULL,
  `budget` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graphic_cards`
--

INSERT INTO `graphic_cards` (`id`, `nama`, `memory`, `bus`, `psu`, `tahun_produksi`, `budget`) VALUES
(1, 'GeForce RTX 2070', '8 GB, GDDR6, 256 bit', 'PCIe 3.0 x16', '450 W', 2018, 'Rp9.519.000'),
(2, 'GeForce RTX 2080', '8 GB, GDDR6, 256 bit', 'PCIe 3.0 x16', '550 W', 2018, 'Rp15.950.000'),
(3, 'GeForce RTX 2080 TI', '11 GB, GDDR6, 352 bit', 'PCIe 3.0 x16', '600 W', 2018, 'Rp23.499.999'),
(4, 'GeForce GTX 1650 SUPER', '4 GB, GDDR6, 128 bit', 'PCIe 3.0 x16', '300 W', 2019, 'Rp2.090.000'),
(5, 'GeForce GTX 1660 SUPER', '6 GB, GDDR6, 192 bit', 'PCIe 3.0 x16', '300 W', 2019, 'Rp3.180.000'),
(6, 'GeForce RTX 2080 SUPER', '8 GB, GDDR6, 256 bit', 'PCIe 3.0 x16', '600 W', 2019, 'Rp24.568.000'),
(7, 'GeForce RTX 2060 SUPER', '8 GB, GDDR6, 256 bit', 'PCIe 3.0 x16', '450 W', 2019, 'Rp3.695.000'),
(8, 'GeForce RTX 2070 SUPER', '8 GB, GDDR6, 256 bit', 'PCIe 3.0 x16', '550 W', 2019, 'Rp4.900.000'),
(9, 'GeForce RTX 2060', '6 GB, GDDR6, 192 bit', 'PCIe 3.0 x16', '450 W', 2019, 'Rp4.090.000'),
(10, 'GeForce GTX 1650', '4 GB, GDDR5, 128 bit', 'PCIe 3.0 x16', '250 W', 2020, 'Rp2.425.000'),
(11, 'GeForce RTX 3060 Ti', '8 GB, GDDR6, 256 bit', 'PCIe 4.0 x16', '550 W', 2020, 'Rp5.915.000'),
(12, 'GeForce RTX 3070', '8 GB, GDDR6, 256 bit', 'PCIe 4.0 x16', '550 W', 2020, 'Rp6.490.000'),
(13, 'GeForce RTX 3080', '10 GB, GDDR6X, 320 bit', 'PCIe 4.0 x16', '700 W', 2020, 'Rp8.390.000'),
(14, 'GeForce RTX 3090', '24 GB, GDDR6X, 384 bit', 'PCIe 4.0 x16', '750 W', 2020, 'Rp48.990.000'),
(15, 'GeForce RTX 3070 Ti', '8 GB, GDDR6X, 256 bit', 'PCIe 4.0 x16', '600 W', 2021, 'Rp6.890.000'),
(16, 'GeForce RTX 3080 Ti', '12 GB, GDDR6X, 384 bit', 'PCIe 4.0 x16', '750 W', 2021, 'Rp16.195.000'),
(17, 'GeForce RTX 4080', '16 GB, GDDR6X, 256 bit', 'PCIe 4.0 x16', '700 W', 2022, 'Rp17.900.000'),
(18, 'GeForce RTX 4090', '24 GB, GDDR6X, 384 bit', 'PCIe 4.0 x16', '850 W', 2022, 'Rp40.097.000'),
(19, 'GeForce RTX 3090 Ti', '24 GB, GDDR6X, 384 bit', 'PCIe 4.0 x16', '850 W', 2022, 'Rp20.279.200'),
(20, 'GeForce GTX 1630', '4 GB, GDDR6, 64 bit', 'PCIe 3.0 x8', '250 W', 2022, 'Rp1.900.000'),
(21, 'GeForce RTX 4060', '8 GB, GDDR6, 128 bit', 'PCIe 4.0 x8', '300 W', 2023, 'Rp6.757.000'),
(22, 'GeForce RTX 4070', '12 GB, GDDR6X, 192 bit', 'PCIe 4.0 x16', '550 W', 2023, 'Rp11.281.000'),
(23, 'GeForce RTX 4070 Ti', '12 GB, GDDR6X, 192 bit', 'PCIe 4.0 x16', '600 W', 2023, 'Rp14.660.000'),
(24, 'GeForce RTX 4060 Ti 8 GB', '8 GB, GDDR6, 128 bit', 'PCIe 4.0 x8', '450 W', 2023, 'Rp7.669.000'),
(25, 'GeForce RTX 4060 Ti 16 GB', '16 GB, GDDR6, 128 bit', 'PCIe 4.0 x8', '450 W', 2023, 'Rp9.750.000'),
(26, 'GeForce RTX 4070 SUPER', '12 GB, GDDR6X, 192 bit', 'PCIe 4.0 x16', '550 W', 2024, 'Rp13.485.000'),
(27, 'GeForce RTX 4070 Ti SUPER', '16 GB, GDDR6X, 256 bit', 'PCIe 4.0 x16', '600 W', 2024, 'Rp17.882.000'),
(28, 'GeForce RTX 4080 SUPER', '16 GB, GDDR6X, 256 bit', 'PCIe 4.0 x16', '700 W', 2024, 'Rp22.728.000'),
(29, 'Radeon RX 590', '8 GB, GDDR5, 256 bit', 'PCIe 3.0 x16', '450 W', 2018, 'Rp3.090.000'),
(30, 'Radeon RX 5500 XT', '4 GB, GDDR6, 128 bit', 'PCIe 4.0 x8', '300 W', 2019, 'Rp1.750.000'),
(31, 'Radeon RX 5700', '8 GB, GDDR6, 256 bit', 'PCIe 4.0 x16', '450 W', 2019, 'Rp3.188.445'),
(32, 'Radeon RX 5700 XT', '8 GB, GDDR6, 256 bit', 'PCIe 4.0 x16', '550 W', 2019, 'Rp3.399.999'),
(33, 'Radeon RX 560 XT', '4 GB, GDDR5, 256 bit', 'PCIe 3.0 x16', '450 W', 2019, 'Rp2.190.000'),
(34, 'Radeon RX 6800', '16 GB, GDDR6, 256 bit', 'PCIe 4.0 x16', '600 W', 2020, 'Rp6.220.000'),
(35, 'Radeon RX 6800 XT', '16 GB, GDDR6, 256 bit', 'PCIe 4.0 x16', '700 W', 2020, 'Rp7.990.000'),
(36, 'Radeon RX 6900 XT', '16 GB, GDDR6, 256 bit', 'PCIe 4.0 x16', '700 W', 2020, 'Rp9.500.000'),
(37, 'Radeon RX 5600 XT', '6 GB, GDDR6, 192 bit', 'PCIe 4.0 x16', '450 W', 2020, 'Rp2.890.000'),
(38, 'Radeon RX 6700 XT', '12 GB, GDDR6, 192 bit', 'PCIe 4.0 x16', '600 W', 2021, 'Rp6.300.000'),
(39, 'Radeon RX 6500 XT', '4 GB, GDDR6, 64 bit', 'PCIe 4.0 x4', '300 W', 2022, 'Rp2.250.000'),
(40, 'Radeon RX 6600 XT', '8 GB, GDDR6, 128 bit', 'PCIe 4.0 x16', '450 W', 2021, 'Rp5.000.000'),
(41, 'Radeon RX 7600', '8 GB, GDDR6, 128 bit', 'PCIe 4.0 x8', '300 W', 2023, 'Rp4.820.000'),
(42, 'Radeon RX 7900 XT', '20 GB, GDDR6, 320 bit', 'PCIe 4.0 x16', '700 W', 2022, 'Rp14.000.000'),
(43, 'Radeon RX 7900 XTX', '24 GB, GDDR6, 384 bit', 'PCIe 4.0 x16', '800 W', 2022, 'Rp16.000.000'),
(44, 'Radeon RX 6950 XT', '16 GB, GDDR6, 256 bit', 'PCIe 4.0 x16', '850 W', 2022, 'Rp12.800.000'),
(45, 'Radeon RX 6800 XT', '16 GB, GDDR6, 256 bit', 'PCIe 4.0 x16', '700 W', 2021, 'Rp10.700.000'),
(46, 'Radeon RX 6600', '8 GB, GDDR6, 128 bit', 'PCIe 4.0 x16', '450 W', 2021, 'Rp5.900.000'),
(47, 'Radeon RX 6400', '4 GB, GDDR6, 64 bit', 'PCIe 4.0 x4', '350 W', 2022, 'Rp2.540.000'),
(48, 'Radeon RX 6700', '10 GB, GDDR6, 160 bit', 'PCIe 4.0 x16', '550 W', 2023, 'Rp5.500.000'),
(49, 'Radeon RX 6950 XT', '16 GB, GDDR6, 256 bit', 'PCIe 4.0 x16', '700 W', 2023, 'Rp10.200.000'),
(50, 'Radeon RX 7600 XT', '8 GB, GDDR6, 192 bit', 'PCIe 4.0 x16', '600 W', 2024, 'Rp7.600.000');

-- --------------------------------------------------------

--
-- Table structure for table `katgame`
--

CREATE TABLE `katgame` (
  `Kode_katgame` varchar(255) NOT NULL,
  `kategori_game` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `katgame`
--

INSERT INTO `katgame` (`Kode_katgame`, `kategori_game`) VALUES
('Y1', 'Berat'),
('Y2', 'Sedang'),
('Y3', 'Ringan'),
('Y4', 'Saya tidak bermain game');

-- --------------------------------------------------------

--
-- Table structure for table `keperluan`
--

CREATE TABLE `keperluan` (
  `kode_keperluan` varchar(11) NOT NULL,
  `keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keperluan`
--

INSERT INTO `keperluan` (`kode_keperluan`, `keperluan`) VALUES
('K1', 'Gaming'),
('K2', 'Desain Grafis'),
('K3', 'Animasi'),
('K4', 'AI dan Machine Learning'),
('K5', 'Editing Video');

-- --------------------------------------------------------

--
-- Table structure for table `pcie`
--

CREATE TABLE `pcie` (
  `Kode_PCIe` varchar(255) NOT NULL,
  `Slot_PCIe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pcie`
--

INSERT INTO `pcie` (`Kode_PCIe`, `Slot_PCIe`) VALUES
('P1', 'PCIe 3.0 x8'),
('P2', 'PCIe 3.0 x16'),
('P3', 'PCIe 4.0 x4'),
('P4', 'PCIe 4.0 x8'),
('P5', 'PCIe 4.0 x16');

-- --------------------------------------------------------

--
-- Table structure for table `psu`
--

CREATE TABLE `psu` (
  `Kode_psu` varchar(255) NOT NULL,
  `rekomendasi_psu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `psu`
--

INSERT INTO `psu` (`Kode_psu`, `rekomendasi_psu`) VALUES
('W1', '250 W'),
('W2', '300 W'),
('W3', '300 W'),
('W4', '550 W'),
('W5', '550 W'),
('W6', '550 W'),
('W7', '550 W'),
('W8', '850 W');

-- --------------------------------------------------------

--
-- Table structure for table `render`
--

CREATE TABLE `render` (
  `Kode_render` varchar(255) NOT NULL,
  `performa_render` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `render`
--

INSERT INTO `render` (`Kode_render`, `performa_render`) VALUES
('M1', 'Entry-Level'),
('M2', 'Mid-Range'),
('M3', 'High-End'),
('M4', 'Flagship');

-- --------------------------------------------------------

--
-- Table structure for table `resolusi`
--

CREATE TABLE `resolusi` (
  `Kode_resolusi` varchar(255) NOT NULL,
  `resolusi_monitor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resolusi`
--

INSERT INTO `resolusi` (`Kode_resolusi`, `resolusi_monitor`) VALUES
('R1', 'HD (High Definition): 1280 x 720 piksel (720p)'),
('R2', 'Full HD (FHD): 1920 x 1080 piksel (1080p)'),
('R3', 'Quad HD (QHD): 2560 x 1440 piksel (1440p)'),
('R4', 'Ultra HD (UHD) atau 4K: 3840 x 2160 piksel');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_produksi`
--

CREATE TABLE `tahun_produksi` (
  `Kode_tahun` varchar(2) NOT NULL,
  `tahun_produksi` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tahun_produksi`
--

INSERT INTO `tahun_produksi` (`Kode_tahun`, `tahun_produksi`) VALUES
('T1', 2018),
('T2', 2019),
('T3', 2020),
('T4', 2021),
('T5', 2022),
('T6', 2023),
('T7', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Muhammad Ihsan', 'mihsan2201@gmail.com', 'ccb6d94ca83a17ed9c4a65d9908d31fb'),
(2, 'Muhammad Ihsan', 'aayaka2201@gmail.com', 'ccb6d94ca83a17ed9c4a65d9908d31fb'),
(3, 'myers', 'mihsan467@gmail.com', 'ccb6d94ca83a17ed9c4a65d9908d31fb'),
(4, 'Muhammad Ihsan', 'mihsan010819@gmail.com', 'ccb6d94ca83a17ed9c4a65d9908d31fb'),
(5, 'ishan2201', 'aayaka22011@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Muhammad Ihsan', 'mihsan4678@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'admin', 'admin1@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_graphic_cards`
--
ALTER TABLE `brand_graphic_cards`
  ADD PRIMARY KEY (`Kode_brand`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`Kode_budget`);

--
-- Indexes for table `casing`
--
ALTER TABLE `casing`
  ADD PRIMARY KEY (`Kode_casing`);

--
-- Indexes for table `graphic_card`
--
ALTER TABLE `graphic_card`
  ADD PRIMARY KEY (`Kode_graphic_card`);

--
-- Indexes for table `graphic_cards`
--
ALTER TABLE `graphic_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katgame`
--
ALTER TABLE `katgame`
  ADD PRIMARY KEY (`Kode_katgame`);

--
-- Indexes for table `keperluan`
--
ALTER TABLE `keperluan`
  ADD PRIMARY KEY (`kode_keperluan`);

--
-- Indexes for table `pcie`
--
ALTER TABLE `pcie`
  ADD PRIMARY KEY (`Kode_PCIe`);

--
-- Indexes for table `psu`
--
ALTER TABLE `psu`
  ADD PRIMARY KEY (`Kode_psu`);

--
-- Indexes for table `render`
--
ALTER TABLE `render`
  ADD PRIMARY KEY (`Kode_render`);

--
-- Indexes for table `resolusi`
--
ALTER TABLE `resolusi`
  ADD PRIMARY KEY (`Kode_resolusi`);

--
-- Indexes for table `tahun_produksi`
--
ALTER TABLE `tahun_produksi`
  ADD PRIMARY KEY (`Kode_tahun`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `graphic_cards`
--
ALTER TABLE `graphic_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
