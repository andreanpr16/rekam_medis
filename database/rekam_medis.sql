-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 05:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_dokter`
--

CREATE TABLE `data_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `kd_spesialis` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_rekam` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_spesialis`
--

CREATE TABLE `data_spesialis` (
  `kd_spesialis` varchar(3) NOT NULL,
  `spesialis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_spesialis`
--

INSERT INTO `data_spesialis` (`kd_spesialis`, `spesialis`) VALUES
('ANK', 'Anak'),
('DLM', 'Dalam'),
('KDG', 'Kandungan'),
('UMM', 'Umum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD UNIQUE KEY `kd_spesialis` (`kd_spesialis`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_rekam`),
  ADD UNIQUE KEY `no_telepon` (`no_telepon`);

--
-- Indexes for table `data_spesialis`
--
ALTER TABLE `data_spesialis`
  ADD PRIMARY KEY (`kd_spesialis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_dokter`
--
ALTER TABLE `data_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id_rekam` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD CONSTRAINT `data_dokter_ibfk_1` FOREIGN KEY (`kd_spesialis`) REFERENCES `data_spesialis` (`kd_spesialis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
