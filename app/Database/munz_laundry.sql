-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2021 at 06:17 AM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `munz_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_detail_transaksi`
--

CREATE TABLE `m_detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `qty` tinyint(4) DEFAULT NULL,
  `total_harga` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_member`
--

CREATE TABLE `m_member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(100) DEFAULT NULL,
  `alamat_member` text DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `telp_member` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_member`
--

INSERT INTO `m_member` (`id_member`, `nama_member`, `alamat_member`, `jenis_kelamin`, `telp_member`) VALUES
(3, 'Rizky Naufaldhi', 'Jl. Bunga Asoka', 'laki-laki', '08xxxxxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `m_outlet`
--

CREATE TABLE `m_outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(100) DEFAULT NULL,
  `alamat_outlet` text DEFAULT NULL,
  `telp_outlet` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_outlet`
--

INSERT INTO `m_outlet` (`id_outlet`, `nama_outlet`, `alamat_outlet`, `telp_outlet`) VALUES
(1, 'Munz Medan, Medan Selayang', 'Jl. Bunga Rinte', '08xxxxxxxxxx'),
(2, 'Munz Pekanbaru', 'Jl. Cendana No. V', '08xxxxxxxxxx'),
(4, 'Munz Medan, Medan Polonia', 'Jl. Antariksa No. 56A', '08xxxxxxxxxx'),
(5, 'Munz Surabaya', 'Jl. Pemuda Pancasila No. IX', '08xxxxxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `m_paket`
--

CREATE TABLE `m_paket` (
  `id_paket` int(11) NOT NULL,
  `id_outlet` int(11) DEFAULT NULL,
  `jenis_paket` enum('satuan','kiloan') DEFAULT NULL,
  `nama_paket` varchar(100) DEFAULT NULL,
  `harga_paket` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_paket`
--

INSERT INTO `m_paket` (`id_paket`, `id_outlet`, `jenis_paket`, `nama_paket`, `harga_paket`) VALUES
(6, 1, 'kiloan', 'Baju/kg', '5000.00'),
(7, 1, 'satuan', 'Baju/pcs', '500.00'),
(8, 2, 'kiloan', 'Baju/kg', '6000.00'),
(9, 2, 'satuan', 'Baju/pcs', '600.00'),
(10, 4, 'kiloan', 'Baju/kg', '7000.00'),
(11, 4, 'satuan', 'Baju/pcs', '700.00'),
(12, 5, 'kiloan', 'Baju/kg', '8000.00'),
(13, 5, 'satuan', 'Baju/pcs', '800.00'),
(14, 1, 'satuan', 'Selimut', '3000.00'),
(15, 2, 'satuan', 'Selimut', '5500.00'),
(16, 4, 'satuan', 'Selimut', '3500.00'),
(17, 5, 'satuan', 'Selimut', '6000.00'),
(18, 2, 'kiloan', 'Celana/kg', '10000.00'),
(19, 4, 'satuan', 'Helikopter', '1000000.00');

-- --------------------------------------------------------

--
-- Table structure for table `m_transaksi`
--

CREATE TABLE `m_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_invoice` varchar(100) DEFAULT NULL,
  `tgl_transaksi` datetime DEFAULT NULL,
  `batas_waktu` datetime DEFAULT NULL,
  `biaya_tambahan` decimal(12,2) DEFAULT NULL,
  `diskon` decimal(12,2) DEFAULT NULL,
  `pajak` decimal(12,2) DEFAULT NULL,
  `total_biaya` decimal(12,2) DEFAULT NULL,
  `status` enum('baru','proses','selesai','diterima') DEFAULT NULL,
  `konfirmasi` enum('lunas','belum_lunas') DEFAULT NULL,
  `id_outlet` int(11) DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `id_outlet` int(11) DEFAULT NULL,
  `role` enum('admin','kasir','owner') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id_user`, `nama_user`, `username`, `password`, `id_outlet`, `role`) VALUES
(18, 'Atqa Munzir', 'admin', '123', 5, 'admin'),
(19, 'Izla Safatiha', 'izlacun', '123', 4, 'owner'),
(20, 'Alif Nugraha', 'alipoi02', '123', 1, 'owner'),
(21, 'Nazirah Munzir', 'muhnaz', '123', 2, 'owner'),
(22, 'Lucky Mahendra', 'mucky', '123', 1, 'kasir'),
(23, 'Faisal Ammar', 'pesalgemink', '123', 2, 'kasir'),
(24, 'Ibnu Rusyid', 'ibno', '123', 4, 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_detail_transaksi`
--
ALTER TABLE `m_detail_transaksi`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `m_member`
--
ALTER TABLE `m_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `m_outlet`
--
ALTER TABLE `m_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indexes for table `m_paket`
--
ALTER TABLE `m_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `m_transaksi`
--
ALTER TABLE `m_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_detail_transaksi`
--
ALTER TABLE `m_detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `m_member`
--
ALTER TABLE `m_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_outlet`
--
ALTER TABLE `m_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_paket`
--
ALTER TABLE `m_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `m_transaksi`
--
ALTER TABLE `m_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
