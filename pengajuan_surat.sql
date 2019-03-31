-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 07:33 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengajuan_surat`
--
CREATE DATABASE IF NOT EXISTS `pengajuan_surat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pengajuan_surat`;

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

DROP TABLE IF EXISTS `approve`;
CREATE TABLE `approve` (
  `surat_bandara` varchar(255) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `nik_bandara` varchar(50) NOT NULL,
  `tgl_approve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bandara`
--

DROP TABLE IF EXISTS `bandara`;
CREATE TABLE `bandara` (
  `nik_bandara` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `email_per` varchar(100) NOT NULL,
  `alamat_per` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `ttd` varchar(255) NOT NULL,
  `kop_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandara`
--

INSERT INTO `bandara` (`nik_bandara`, `password`, `nama`, `jabatan`, `perusahaan`, `email_per`, `alamat_per`, `no_telp`, `ttd`, `kop_surat`) VALUES
('kuya123', '12345', 'rifky ahmad', 'direktur', 'lion', '2@2.com', '2', '2', 'kuya123.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `nik` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `email_per` varchar(100) NOT NULL,
  `alamat_per` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `ttd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `password`, `nama`, `jabatan`, `perusahaan`, `email_per`, `alamat_per`, `no_telp`, `ttd`) VALUES
('deni123', '12345', 'deni nugroho', 'direktur', 'lion', '1@1.com', 'kota bumi', '1', 'deni123.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kop_surat`
--

DROP TABLE IF EXISTS `kop_surat`;
CREATE TABLE `kop_surat` (
  `dir_kop` varchar(255) NOT NULL,
  `nama_kop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kop_surat`
--

INSERT INTO `kop_surat` (`dir_kop`, `nama_kop`) VALUES
('lion.jpg', 'lion'),
('sriwijaya.jpg', 'sriwijaya');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

DROP TABLE IF EXISTS `surat`;
CREATE TABLE `surat` (
  `nomor_surat` varchar(50) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `kop_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `arr_dep` varchar(50) NOT NULL,
  `extend` varchar(50) NOT NULL,
  `flight_number` varchar(100) NOT NULL,
  `aircraft_reg` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL,
  `std` varchar(100) NOT NULL,
  `etd` varchar(100) NOT NULL,
  `sta` varchar(100) NOT NULL,
  `lta` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tgl_kirim` varchar(255) NOT NULL,
  `tgl_dibaca` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`surat_bandara`);

--
-- Indexes for table `bandara`
--
ALTER TABLE `bandara`
  ADD PRIMARY KEY (`nik_bandara`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `kop_surat`
--
ALTER TABLE `kop_surat`
  ADD PRIMARY KEY (`nama_kop`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`nomor_surat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
