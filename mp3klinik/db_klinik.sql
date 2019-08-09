-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 12:28 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbklinikmp3`
--
CREATE DATABASE IF NOT EXISTS `dbklinikmp3` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbklinikmp3`;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` varchar(5) NOT NULL,
  `nama_dokter` varchar(60) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(65) NOT NULL,
  `kota` varchar(45) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `foto` varchar(75) DEFAULT NULL,
  `kd_spesialis` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `nama_dokter`, `jk`, `agama`, `alamat`, `kota`, `telp`, `foto`, `kd_spesialis`) VALUES
('19001', 'VANNY ELSYAVITRIANI BOWO', 'L', 'Islam', 'Jl.Penggalang Raya no.367 RT010/006, Kec.Rawalumbu', 'Bekasi', '081321498254', 'vanny.jpg', '1'),
('19002', 'ENY HANDAYANI', 'P', 'Islam', 'Pancoran Barat', 'Jakarta', '08119333646', 'eny.jpg', '2'),
('19003', 'SITI KHALIFAH', 'P', 'Islam', 'Pondok Ungu', 'Bekasi', '0857-7691-1296', 'siti.jpg', '3'),
('19004', 'RAFI DAFFA M', 'L', 'Islam', 'Rawalumbu', 'Bekasi', '085886432326', 'daffa.jpg', '4'),
('19005', 'NURUL HIDAYAH', 'P', 'Islam', 'Pondok Ungu', 'Bekasi', '081932883727', 'nurul.jpg', '1'),
('19006', 'SELJA SANPE', 'L', 'Kristen Protest', 'Narogong', 'Bekasi', '0895387275199', 'selja.jpg', '2'),
('19007', 'VERA FIRDYANA', 'P', 'Islam', 'Pondok Ungu', 'Bekasi', '08950-33333-10', 'vera.jpg', '3'),
('19008', 'FADHLY MOEHAMMAD', 'L', 'Islam', 'Pondok Kopi', 'Jakarta', '0812-9529-7032', 'fadhly.jpg', '2'),
('19009', 'FADHIL SIDIKI MAULANA', 'L', 'Islam', 'Galaxy', 'Bekasi', '081282031573', 'fadhil.jpg', '1'),
('19010', 'AHMAD ABDI PRAYOGA', 'L', 'Islam', 'Tambun', 'Bekasi', '082248296212', 'yoga.jpg', '2'),
('19011', 'ARIEF FIRMANSYAH', 'L', 'Islam', 'Summarecon', 'Bekasi', '08121394576', 'arief.jpg', '3'),
('19012', 'MUHAMMAD TAUFIQ', 'L', 'Islam', 'Pondok Ungu', 'Bekasi', '0895387275199', 'opik.jpg', '4');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `kd_pasien` varchar(5) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kd_pasien`, `nama_pasien`, `jk`, `tgl_lahir`, `agama`, `alamat`, `telp`) VALUES
('19002', 'Dani Yusuf', 'L', '1997-04-14', 'Islam', 'Jl.Pancoran Timur', '085790524691'),
('19003', 'Nur Sakinah', 'P', '1992-12-28', 'Islam', 'Cihanjuang, Bandung', '088888990657'),
('19004', 'Hamida Mushafa Z', 'P', '1996-02-21', 'Islam', 'Cibiru, Bandung', '085790529807'),
('19005', 'Raden Trizny Larasati', 'P', '1995-04-28', 'Islam', 'Antapani Bandung', '0818650566');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaaan`
--

CREATE TABLE `pemeriksaaan` (
  `id_pemeriksaan` int(5) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `kd_pasien` varchar(5) NOT NULL,
  `kd_dokter` varchar(5) NOT NULL,
  `keluhan` text NOT NULL,
  `tindakan` text NOT NULL,
  `jasa_adm` int(7) NOT NULL,
  `jasa_dokter` int(7) NOT NULL,
  `biaya_obat` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaaan`
--

INSERT INTO `pemeriksaaan` (`id_pemeriksaan`, `tgl_pemeriksaan`, `kd_pasien`, `kd_dokter`, `keluhan`, `tindakan`, `jasa_adm`, `jasa_dokter`, `biaya_obat`) VALUES
(1, '2019-04-01', '19002', '19001', 'Mual Mual', 'Diperiksa dan diberi obat.', 10000, 50000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `kd_spesialis` varchar(5) NOT NULL,
  `nama_spesialis` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`kd_spesialis`, `nama_spesialis`) VALUES
('1', 'Dokter Umum'),
('2', 'Dokter Jantung'),
('3', 'Dokter Gigi'),
('4', 'Dokter Hati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kd_pasien`);

--
-- Indexes for table `pemeriksaaan`
--
ALTER TABLE `pemeriksaaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`kd_spesialis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
