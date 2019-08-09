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
-- Database: `dbsekolahmp3`
--
CREATE DATABASE IF NOT EXISTS `dbsekolahmp3` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbsekolahmp3`;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(11) NOT NULL,
  `nama` char(20) DEFAULT NULL,
  `kd_mapel` varchar(5) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `tahun_mengajar` int(4) NOT NULL,
  `alamat` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `kd_mapel`, `tanggal_lahir`, `jk`, `agama`, `telp`, `tahun_mengajar`, `alamat`) VALUES
(100001, 'Ibnu Maulana', 'IPA', '2019-03-12', 'L', 'Islam', '089558739213', 2000, 'Jl. Lurus'),
(100002, 'Reni Mayani', 'MTK', '2001-08-10', 'P', 'Kristen', '08775434545', 2005, 'Jl. Dahlia 5 No. 7'),
(100003, 'Indri', 'IPS', '1989-01-02', 'P', 'Budha', '0843534342', 2000, 'Jl. Kamboja Raya No. 1'),
(100004, 'Tuti Wibowo', 'MTK', '1990-08-17', 'P', 'Islam', '0878754354324', 2005, 'Jl. Wijaya No.9'),
(100005, 'Wahyuni', 'IPS', '1975-05-01', 'P', 'Hindu', '088724324312', 2006, 'Jl. Teratai 4 No.58'),
(100006, 'Indri Syahlindri', 'PAI', '2019-07-13', 'P', 'Islam', '078978349535', 2005, 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` varchar(3) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `nama_mapel`) VALUES
('BHS', 'Bahasa'),
('IPA', 'Ilmu Pengetahuan Alam'),
('IPS', 'Ilmu Pengetahuan Sosial'),
('MTK', 'Matematika'),
('OR', 'Olah Raga'),
('PAI', 'Pendidikan Agama Islam'),
('PLH', 'Pendidikan Lingkungan Hidup');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(5) NOT NULL,
  `nis` int(11) NOT NULL,
  `kd_mapel` varchar(3) NOT NULL,
  `nilai_harian` decimal(4,2) NOT NULL,
  `nilai_uts` decimal(4,2) NOT NULL,
  `nilai_uas` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `kd_mapel`, `nilai_harian`, `nilai_uts`, `nilai_uas`) VALUES
(2001, 19001, 'MTK', '90.00', '70.00', '80.00'),
(2002, 19002, 'IPS', '67.00', '90.00', '87.00'),
(2003, 19004, 'BHS', '60.00', '50.00', '40.00');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama` char(20) DEFAULT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `nip` int(11) DEFAULT NULL,
  `tahun_masuk` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `alamat`, `telp`, `nip`, `tahun_masuk`) VALUES
(19001, 'Denis Ahmad', 'Jakarta', '2001-01-01', 'L', 'Katholik', 'Jl. Angin Biru', '088965434', 100001, 2019),
(19002, 'Astuti Wulandari', 'Bandung', '2001-07-02', 'P', 'Islam', 'Jl. Laut gelap', '0854434854', 100001, 2019),
(19003, 'Manohara Adelia', 'Surabaya', '2001-04-20', 'P', 'Islam', 'Jl. Baju bagus', '08998743543', 100002, 2019),
(19004, 'Hasan Sabri', 'Yogyakarta', '2001-07-01', 'L', 'Islam', 'Jl. celana lengan panjang', '08787643254', 100002, 2019),
(19005, 'Budi Santoso', 'Semarang', '2001-08-11', 'L', 'Islam', 'Jl. topi miring', '0858753451', 100001, 2019),
(19006, 'Ahmad Fansory', 'Bekasi', '2019-07-02', 'L', 'Islam', 'Jakarta', '089214217421', 100006, 2001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
