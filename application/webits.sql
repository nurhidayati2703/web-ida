-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 05:33 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webits`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'ida', 'ida', 'ida'),
(2, 'lintang', 'kentang', 'kentang');

-- --------------------------------------------------------

--
-- Table structure for table `t_country`
--

CREATE TABLE `t_country` (
  `id_country` int(11) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_country`
--

INSERT INTO `t_country` (`id_country`, `country`) VALUES
(1, 'Australia'),
(2, 'Indonesia'),
(3, 'Filipina'),
(4, 'Singapura');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayaran`
--

CREATE TABLE `t_pembayaran` (
  `card_number` int(20) NOT NULL,
  `valid_unit` int(5) NOT NULL,
  `cvv` int(5) NOT NULL,
  `id_daftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pendaftaran`
--

CREATE TABLE `t_pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_peserta`
--

CREATE TABLE `t_peserta` (
  `id_peserta` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `position` varchar(25) NOT NULL,
  `industry` varchar(50) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
  `foto_passport` varchar(500) NOT NULL,
  `needs` text,
  `id_country` int(11) NOT NULL,
  `id_phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_peserta`
--

INSERT INTO `t_peserta` (`id_peserta`, `first_name`, `last_name`, `email`, `phone_number`, `organization`, `position`, `industry`, `passport_number`, `foto_passport`, `needs`, `id_country`, `id_phonecode`) VALUES
(2, 'qqq', 'asdf', 'y@gmail.com', 876543, 'asdf', 'dfghj', 'asdf', 'y67u8i9o', 'tbb.jpg', 'asdf', 1, 1),
(3, 'qqq', 'asdf', 'y@gmail.com', 87654, 'asdf', 'dfghj', 'asdf', '5t6y7u8i9o', 'tbb.jpg', 'asdf', 1, 1),
(4, 'aSdf', 'asdf', 'abc@gmail.com', 87654, 'asdf', 'asdf', 'asdf', '5t6y7u8i9o', 'tbb.jpg', 'ASDFG', 2, 1),
(5, 'aSdf', 'asdf', 'abc@gmail.com', 87654, 'asdf', 'asdf', 'asdf', '5t6y7u8i9o', 'tbb.jpg', 'ASDFG', 2, 1),
(6, 'qqq', 'asdf', 'y@gmail.com', 87654, 'adsf', 'dfghj', 'asdf', '34t4', 'tbb.jpg', 'asdf', 1, 1),
(7, 'Risa', 'Augusta', 'augusta@gmail.com', 81233, 'metic', 'ok', 'gama', '2424', 'tbb.jpg', 'huyes', 2, 2),
(8, 'aaaa', 'adf', 'y@gmail.com', 87654, 'ahiodwh', 'dfghj', 'asdf', '4r5t6y7u8i', 'tbb.jpg', '', 1, 1),
(9, 'aSdf', 'a', 'y@gmail.com', 87654, 'asdfg', 'general manager', 'sefef9', '5t6y7u8i9o', 'tbb.jpg', '', 1, 2),
(10, 'hhh', 'asdf', 'abc@gmail.com', 876543, 'adsf', 'asdf', 'asdf', '5y68i', 'tbb.jpg', 'adsf', 2, 3),
(11, 'qqq', 'asdf', 'y@gmail.com', 876543, 'asdf', 'dfghj', 'asdf', '567890oiuy', 'tbb.jpg', 'asdf', 2, 1),
(12, 'www', 'asdf', 'haha@gmail.com', 876543, 'asdf', 'asdf', 'sdfgh', '5t6y7u8i9o', 'tbb.jpg', 'asf', 1, 2),
(13, 'asdf', 'asdf', 'y@gmail.com', 87654, 'asdf', 'asdf', 'sdfgh', '5t6y7u8i9o', 'tbb.jpg', 'asdf', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_phonecode`
--

CREATE TABLE `t_phonecode` (
  `id_phonecode` int(11) NOT NULL,
  `kode_phonecode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_phonecode`
--

INSERT INTO `t_phonecode` (`id_phonecode`, `kode_phonecode`) VALUES
(1, '+61'),
(2, '+62'),
(3, '+63'),
(4, '+65');

-- --------------------------------------------------------

--
-- Table structure for table `t_status`
--

CREATE TABLE `t_status` (
  `id_status` int(11) NOT NULL,
  `status` enum('sudah bayar','belum bayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `t_country`
--
ALTER TABLE `t_country`
  ADD PRIMARY KEY (`id_country`);

--
-- Indexes for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indexes for table `t_pendaftaran`
--
ALTER TABLE `t_pendaftaran`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `t_peserta`
--
ALTER TABLE `t_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `id_country` (`id_country`),
  ADD KEY `id_phonecode` (`id_phonecode`);

--
-- Indexes for table `t_phonecode`
--
ALTER TABLE `t_phonecode`
  ADD PRIMARY KEY (`id_phonecode`);

--
-- Indexes for table `t_status`
--
ALTER TABLE `t_status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_peserta`
--
ALTER TABLE `t_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  ADD CONSTRAINT `t_pembayaran_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `t_pendaftaran` (`id_daftar`) ON UPDATE CASCADE;

--
-- Constraints for table `t_pendaftaran`
--
ALTER TABLE `t_pendaftaran`
  ADD CONSTRAINT `t_pendaftaran_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `t_peserta` (`id_peserta`) ON UPDATE CASCADE;

--
-- Constraints for table `t_peserta`
--
ALTER TABLE `t_peserta`
  ADD CONSTRAINT `t_peserta_ibfk_2` FOREIGN KEY (`id_country`) REFERENCES `t_country` (`id_country`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_peserta_ibfk_3` FOREIGN KEY (`id_phonecode`) REFERENCES `t_phonecode` (`id_phonecode`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
