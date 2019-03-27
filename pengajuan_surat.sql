-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 09:08 AM
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
-- Table structure for table `bandara`
--

DROP TABLE IF EXISTS `bandara`;
CREATE TABLE `bandara` (
  `NIK` varchar(25) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `NIK` varchar(25) NOT NULL,
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
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `password`, `nama`, `jabatan`, `perusahaan`, `email_per`, `alamat_per`, `no_telp`, `ttd`, `kop_surat`) VALUES
('deni156', '12345', 'deni nugroho', 'direktur', 'lion', '1@1.com', 'kota bumi', '1', 'deni156.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `kop_surat`
--

DROP TABLE IF EXISTS `kop_surat`;
CREATE TABLE `kop_surat` (
  `id_kop` int(11) NOT NULL,
  `dir_kop` varchar(255) NOT NULL,
  `nama_kop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

DROP TABLE IF EXISTS `surat`;
CREATE TABLE `surat` (
  `nomor_surat` varchar(50) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `flight_number` varchar(100) NOT NULL,
  `aircraft_reg` varchar(100) NOT NULL,
  `std` varchar(100) NOT NULL,
  `etd` varchar(100) NOT NULL,
  `sta` varchar(100) NOT NULL,
  `lta` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tgl_kirim` varchar(255) NOT NULL,
  `tgl_dibaca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandara`
--
ALTER TABLE `bandara`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `kop_surat`
--
ALTER TABLE `kop_surat`
  ADD PRIMARY KEY (`id_kop`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`nomor_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kop_surat`
--
ALTER TABLE `kop_surat`
  MODIFY `id_kop` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;