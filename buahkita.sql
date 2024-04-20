-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 08:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buahkita`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(128) NOT NULL,
  `img` varchar(128) NOT NULL,
  `stock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kategori`, `nama_barang`, `deskripsi`, `harga`, `img`, `stock`) VALUES
(2, 'import', 'Jeruk', 'qweqwe', 4000, 'apel.png', 0),
(15, 'import', 'Durian', 'Durian yang di import dari jepang', 9000, 'apel.png', 0),
(16, 'lokal', 'Mangga', 'sdasadsa', 8000, 'apel.png', 1),
(17, 'lokal', 'Durian', 'Durian dari bantul', 2000, 'apel1.png', 0),
(20, 'lokal', 'Pepaya', 'Pepaya khas jawa', 5000, 'apel4.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `telepon` int(100) NOT NULL,
  `is_active` enum('active','blocked') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `email`, `password`, `telepon`, `is_active`) VALUES
(3, 'Daffa', 'daffa@gmail.com', '$2y$10$/d.r6ZfJD/DLLfu.ophK4.475Tj7z2Fy2j6iZ1ZeJOZ.TVGAvOdE2', 8762, 'blocked'),
(4, 'Bagus Pradita', 'customer@gmail.com', '$2y$10$0nLDfD0O9hu8f2BJSvOhs.9y7aUFTCIB9avtWkOaYVe2pk6.jSeYi', 13579, 'active'),
(5, 'bayu cakra aditya', 'panggilsajabyyy@gmail.com', '$2y$10$3RnkoxOtLZQEOCttlhUKTOqdYuT1kj0WKvz5KI4WfTSkK2uBsGnV.', 2147483647, 'blocked');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'lokal'),
(2, 'import');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `notif_id` int(11) NOT NULL,
  `customer_id` int(128) NOT NULL,
  `notif_id_transaksi` int(11) NOT NULL,
  `read_status` enum('0','read') NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`notif_id`, `customer_id`, `notif_id_transaksi`, `read_status`, `time`) VALUES
(7, 3, 50, 'read', '2023-06-19 09:47:48'),
(8, 4, 51, '0', '2023-07-27 13:22:08'),
(9, 5, 52, '0', '2023-08-11 16:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` enum('admin','operator') NOT NULL,
  `is_active` enum('active','blocked') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `full_name`, `email`, `password`, `level`, `is_active`) VALUES
(11, 'Bagus Pradita', 'm.alifpradita@gmail.com', '$2y$10$StQ49Jihn25jrCN8kqJRw.QseQvV85IJcPxMtTpa1gWiKo8faiokC', 'admin', 'active'),
(12, 'Dinda', 'dinda@gmail.com', '$2y$10$WLm6MxDGJyyvoHbFt.7Vnu7GPauqDmXM3GSUAu4G4fk5LPJPLRpIa', 'operator', 'blocked');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` int(255) NOT NULL,
  `date_created` date NOT NULL,
  `level` enum('admin','operator','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id_token`, `email`, `token`, `date_created`, `level`) VALUES
(32, 'm.alifpradita@gmail.com', 0, '2023-07-18', 'admin'),
(33, 'm.alifpradita@gmail.com', 1, '2023-07-18', 'admin'),
(34, 'm.alifpradita@gmail.com', 0, '2023-07-18', 'admin'),
(35, 'm.alifpradita@gmail.com', 0, '2023-07-18', 'admin'),
(36, 'm.alifpradita@gmail.com', 0, '2023-07-19', 'admin'),
(37, 'm.alifpradita@gmail.com', 0, '2023-07-19', 'admin'),
(38, 'm.alifpradita@gmail.com', 0, '2023-08-06', 'admin'),
(39, 'm.alifpradita@gmail.com', 0, '2023-08-06', 'admin'),
(40, 'm.alifpradita@gmail.com', 0, '2023-08-06', 'admin'),
(41, 'm.alifpradita@gmail.com', 0, '2023-08-06', 'admin'),
(42, 'm.alifpradita@gmail.com', 6, '2023-08-06', 'admin'),
(43, 'm.alifpradita@gmail.com', 2, '2023-08-06', 'admin'),
(44, 'm.alifpradita@gmail.com', 5, '2023-08-11', 'admin'),
(45, 'm.alifpradita@gmail.com', 6, '2023-08-11', 'admin'),
(46, 'm.alifpradita@gmail.com', 0, '2023-08-11', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_customer` varchar(128) NOT NULL,
  `barang_id` int(128) NOT NULL,
  `kategori_transaksi` varchar(255) NOT NULL,
  `jumlah` int(128) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_transaksi` int(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_customer`, `barang_id`, `kategori_transaksi`, `jumlah`, `tanggal`, `kode_transaksi`, `status`) VALUES
(45, 'Bagus Pradita', 2, 'import', 2, '2023-06-17', 43, 'selesai'),
(50, 'Bagus Pradita', 16, 'lokal', 2, '2023-06-19', 44, 'selesai'),
(51, 'Bagus Pradita', 16, 'lokal', 2, '2023-07-27', 34, 'proses'),
(52, 'bayu cakra aditya', 16, 'lokal', 2, '2023-08-11', 45, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id_token`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
