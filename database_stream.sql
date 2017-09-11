-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 09:18 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_stream`
--

-- --------------------------------------------------------

--
-- Table structure for table `assurance`
--

CREATE TABLE IF NOT EXISTS `assurance` (
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Nama_Teknisi` varchar(30) NOT NULL,
  `Kode_Angka_QR` varchar(30) NOT NULL,
  `Nama_ODP` varchar(30) NOT NULL,
  `Port_ODP` varchar(30) NOT NULL,
  `No_Service` varchar(20) NOT NULL,
  `SN_ONT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assurance`
--

INSERT INTO `assurance` (`Tanggal`, `Nama_Teknisi`, `Kode_Angka_QR`, `Nama_ODP`, `Port_ODP`, `No_Service`, `SN_ONT`) VALUES
('2017-09-11 06:43:51', 'amija1', 'QR123456', 'Hello', '80', '081328079678', '564688965REW');

-- --------------------------------------------------------

--
-- Table structure for table `deployment`
--

CREATE TABLE IF NOT EXISTS `deployment` (
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Nama_Teknisi` varchar(30) NOT NULL,
  `Kode_Angka_QR` varchar(30) NOT NULL,
  `Nama_ODP` varchar(30) NOT NULL,
  `Kapasitas_ODP` int(11) NOT NULL,
  `Status_Port` varchar(30) NOT NULL,
  `Port_ODP_Input` varchar(30) NOT NULL,
  `Koordinat_ODP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deployment`
--

INSERT INTO `deployment` (`Tanggal`, `Nama_Teknisi`, `Kode_Angka_QR`, `Nama_ODP`, `Kapasitas_ODP`, `Status_Port`, `Port_ODP_Input`, `Koordinat_ODP`) VALUES
('2017-09-11 07:01:07', 'amija1', 'QR123', 'ODP890076', 8, 'amija2', '90', '-7,54567743210');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE IF NOT EXISTS `maintenance` (
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Nama_Teknisi` varchar(30) NOT NULL,
  `Kode_Angka_QR` varchar(30) NOT NULL,
  `Nama_ODP` varchar(30) NOT NULL,
  `Port_ODP` varchar(30) NOT NULL,
  `No_Service` varchar(20) NOT NULL,
  `SN_ONT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`Tanggal`, `Nama_Teknisi`, `Kode_Angka_QR`, `Nama_ODP`, `Port_ODP`, `No_Service`, `SN_ONT`) VALUES
('2017-09-11 07:06:20', 'amija1', 'QR123456', 'ODP89', '80', '08132456728', '89A6151133');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Nama_Teknisi` varchar(30) NOT NULL,
  `Kode_Angka_QR` varchar(30) NOT NULL,
  `Nama_ODP` varchar(30) NOT NULL,
  `Port_ODP` varchar(30) NOT NULL,
  `No_Service` varchar(20) NOT NULL,
  `SN_ONT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`Tanggal`, `Nama_Teknisi`, `Kode_Angka_QR`, `Nama_ODP`, `Port_ODP`, `No_Service`, `SN_ONT`) VALUES
('2017-09-11 07:07:56', 'amija2', 'QRODP9090', 'ODP1', '45', '081328078776', '766144242901');

-- --------------------------------------------------------

--
-- Table structure for table `provisioning`
--

CREATE TABLE IF NOT EXISTS `provisioning` (
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Nama_Teknisi` varchar(30) NOT NULL,
  `Kode_Angka_QR` varchar(30) NOT NULL,
  `Nama_ODP` varchar(30) NOT NULL,
  `Port_ODP` varchar(30) NOT NULL,
  `No_Service` varchar(20) NOT NULL,
  `SN_ONT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provisioning`
--

INSERT INTO `provisioning` (`Tanggal`, `Nama_Teknisi`, `Kode_Angka_QR`, `Nama_ODP`, `Port_ODP`, `No_Service`, `SN_ONT`) VALUES
('2017-09-11 07:15:30', 'amija2', 'QRODP9090', 'ODP71716GAGAG', 'odp333', '081328765455', '67175144141AUAY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assurance`
--
ALTER TABLE `assurance`
  ADD PRIMARY KEY (`Kode_Angka_QR`);

--
-- Indexes for table `deployment`
--
ALTER TABLE `deployment`
  ADD PRIMARY KEY (`Kode_Angka_QR`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`Kode_Angka_QR`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`Kode_Angka_QR`);

--
-- Indexes for table `provisioning`
--
ALTER TABLE `provisioning`
  ADD PRIMARY KEY (`Kode_Angka_QR`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
