-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2019 at 08:11 PM
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
-- Table structure for table `its_admin`
--

CREATE TABLE `its_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_admin`
--

INSERT INTO `its_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'ida', 'ida', 'ida'),
(2, 'lintang', 'kentang', 'kentang'),
(3, 'Nurhidayati', 'ida', '7f78f270e3e1129faf118ed92fdf54db');

-- --------------------------------------------------------

--
-- Table structure for table `its_country`
--

CREATE TABLE `its_country` (
  `id_country` int(11) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_country`
--

INSERT INTO `its_country` (`id_country`, `country`) VALUES
(1, 'Australia'),
(2, 'Indonesia'),
(3, 'Filipina'),
(4, 'Singapura');

-- --------------------------------------------------------

--
-- Table structure for table `its_description`
--

CREATE TABLE `its_description` (
  `id_desc` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `img_desc` varchar(500) NOT NULL,
  `id_status_desc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_description`
--

INSERT INTO `its_description` (`id_desc`, `title`, `sub_title`, `content`, `img_desc`, `id_status_desc`) VALUES
(0, 'ITSWC 2019 POST CONFERENCE', 'Do not miss the upcoming event, Who should attend?', 'Morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris Eonec eu ribero sit amet quam egestas semper. Aenean are ultricies mi senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae vitae. Morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris Eonec eu ribero sit amet quam egestas semper. Aenean are ultricies mi senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae vitae. Morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris Eonec eu ribero sit amet quam egestas semper. Aenean are ultricies mi senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae vitae. Morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris Eonec eu ribero sit amet quam egestas semper. Aenean are ultricies mi senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae vitae.', 'podium3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_pembayaran`
--

CREATE TABLE `its_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `card_number` int(20) NOT NULL,
  `valid_unit` int(5) NOT NULL,
  `cvv` int(5) NOT NULL,
  `id_daftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_pembayaran_jenis`
--

CREATE TABLE `its_pembayaran_jenis` (
  `id_pembayaran_jenis` int(11) NOT NULL,
  `jenis_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_pendaftaran`
--

CREATE TABLE `its_pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_peserta`
--

CREATE TABLE `its_peserta` (
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
-- Dumping data for table `its_peserta`
--

INSERT INTO `its_peserta` (`id_peserta`, `first_name`, `last_name`, `email`, `phone_number`, `organization`, `position`, `industry`, `passport_number`, `foto_passport`, `needs`, `id_country`, `id_phonecode`) VALUES
(2, 'qqq', 'asdf', 'y@gmail.com', 876543, 'asdf', 'dfghj', 'asdf', 'y67u8i9o', 'tbb.jpg', 'asdf', 1, 1),
(6, 'qqq', 'asdf', 'y@gmail.com', 87654, 'adsf', 'dfghj', 'asdf', '34t4', 'tbb.jpg', 'asdf', 1, 1),
(7, 'Risa', 'Augusta', 'augusta@gmail.com', 81233, 'metic', 'ok', 'gama', '2424', 'tbb.jpg', 'huyes', 2, 2),
(8, 'aaaa', 'adf', 'y@gmail.com', 87654, 'ahiodwh', 'dfghj', 'asdf', '4r5t6y7u8i', 'tbb.jpg', '', 1, 1),
(10, 'hhh', 'asdf', 'abc@gmail.com', 876543, 'adsf', 'asdf', 'asdf', '5y68i', 'tbb.jpg', 'adsf', 2, 3),
(13, 'asdf', 'asdf', 'y@gmail.com', 87654, 'asdf', 'asdf', 'sdfgh', '5t6y7u8i9o', 'tbb.jpg', 'asdf', 1, 2),
(15, 'qqq', 'asdf', 'y@gmail.com', 87654, 'asdf', 'dfghj', 'asdf', 'r4r4t5t5y', 'tbb.jpg', '', 2, 2),
(17, 'qqq', 'asdf', 'y@gmail.com', 87654, 'asdf', 'asdf', 'sefef9', 'rt5ty67u', 'tbb.jpg', '', 3, 2),
(19, 'qqq', 'yuhu', 'y@gmail.com', 87654, 'adsf', 'dfghj', 'asdf', 'q1w2e3', 'tbb.jpg', '', 1, 1),
(20, 'haha', 'haha', 'y@gmail.com', 8765432, 'asdf', 'dfghj', 'asdf', 'r4t5y6u7i8', 'tbb.jpg', '', 1, 1),
(22, 'qqq', 'asdf', 'y@gmail.com', 87654, 'asdf', 'dfghj', 'asdf', 'rt56y', 'tbb.jpg', '', 1, 1),
(24, 'sss', 'fddd', 'asss@gmail.com', 87654, 'asdf', 'wd', 'sefef9', '567890oiuy', 'tbb.jpg', 'jkk', 1, 1),
(25, 'ida', 'ida', 'ida@gmail.com', 87654, 'asdf', 'asdf', 'asdf', 'q1q1', 'tbb.jpg', 'coklat', 1, 1),
(27, 'qqq', 'asdf', 'y@gmail.com', 87654, 'asdf', 'dfghj', 'wahaha', 'w2w2', 'tbb.jpg', '', 3, 1),
(28, 'es', 'es', 'y@gmail.com', 553542, 'asdf', 'ok', 'asdf', 'q1w2', 'tbb.jpg', '', 2, 2),
(29, 'qqq', 'asdf', 'a@gmail.com', 87654, 'asdf', 'dfghj', 'gamagama', '1q1q', 'tbb.jpg', 'es krim ', 1, 2),
(31, 'a', 'a', 'y@gmail.com', 87654, 'asdf', 'dfghj', 'asdf1', '1q1qw2', 'tbb.jpg', 'es krim', 2, 2),
(32, 'Risa', 'Augusta', 'ida@gmail.com', 87654, 'metic', 'ok', 'gama', '11111111', 'tbb.jpg', 'aaa', 2, 1),
(33, 'Risa', 'Augusta', 'risa@gmail.com', 87654, 'asdf', 'awd', 'wahaha', '222222', 'tbb.jpg', 'aa', 1, 1),
(34, 'Risa', 'fsf', 'abc@gmail.com', 876543, 'asdf', 'dfghj', 'asdf', '333333', 'tbb.jpg', 'AA', 1, 1),
(35, 'aasdf', 'aa', 'y@gmail.com', 7654, 'asdfg', 'dfghj', 'asdf', '4444444', 'tbb.jpg', 'a', 1, 1),
(36, 'aSdf', 'fsf', 'y@gmail.com', 876543, 'asdfg', 'general manager', 'gama', '555555', 'tbb.jpg', 'aaaa', 2, 1),
(38, 'Risa', 'Augusta', 'a@gmail.com', 87654, 'aaa', 'awd', 'sefef9', '666666666', 'tbb.jpg', 'a', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_phonecode`
--

CREATE TABLE `its_phonecode` (
  `id_phonecode` int(11) NOT NULL,
  `kode_phonecode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_phonecode`
--

INSERT INTO `its_phonecode` (`id_phonecode`, `kode_phonecode`) VALUES
(1, '+61'),
(2, '+62'),
(3, '+63'),
(4, '+65');

-- --------------------------------------------------------

--
-- Table structure for table `its_status`
--

CREATE TABLE `its_status` (
  `id_status` int(11) NOT NULL,
  `status` enum('sudah bayar','belum bayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_status_desc`
--

CREATE TABLE `its_status_desc` (
  `id_status_desc` int(11) NOT NULL,
  `status_desc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_status_desc`
--

INSERT INTO `its_status_desc` (`id_status_desc`, `status_desc`) VALUES
(0, 'Non Active'),
(1, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `its_admin`
--
ALTER TABLE `its_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `its_country`
--
ALTER TABLE `its_country`
  ADD PRIMARY KEY (`id_country`);

--
-- Indexes for table `its_description`
--
ALTER TABLE `its_description`
  ADD PRIMARY KEY (`id_desc`),
  ADD KEY `id_status_desc` (`id_status_desc`);

--
-- Indexes for table `its_pembayaran`
--
ALTER TABLE `its_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indexes for table `its_pembayaran_jenis`
--
ALTER TABLE `its_pembayaran_jenis`
  ADD PRIMARY KEY (`id_pembayaran_jenis`);

--
-- Indexes for table `its_pendaftaran`
--
ALTER TABLE `its_pendaftaran`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `its_peserta`
--
ALTER TABLE `its_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD UNIQUE KEY `passport_number` (`passport_number`),
  ADD KEY `id_country` (`id_country`),
  ADD KEY `id_phonecode` (`id_phonecode`);

--
-- Indexes for table `its_phonecode`
--
ALTER TABLE `its_phonecode`
  ADD PRIMARY KEY (`id_phonecode`);

--
-- Indexes for table `its_status`
--
ALTER TABLE `its_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `its_status_desc`
--
ALTER TABLE `its_status_desc`
  ADD PRIMARY KEY (`id_status_desc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `its_admin`
--
ALTER TABLE `its_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_pembayaran`
--
ALTER TABLE `its_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `its_peserta`
--
ALTER TABLE `its_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `its_description`
--
ALTER TABLE `its_description`
  ADD CONSTRAINT `its_description_ibfk_1` FOREIGN KEY (`id_status_desc`) REFERENCES `its_status_desc` (`id_status_desc`) ON UPDATE CASCADE;

--
-- Constraints for table `its_pembayaran`
--
ALTER TABLE `its_pembayaran`
  ADD CONSTRAINT `its_pembayaran_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `its_pendaftaran` (`id_daftar`) ON UPDATE CASCADE;

--
-- Constraints for table `its_pendaftaran`
--
ALTER TABLE `its_pendaftaran`
  ADD CONSTRAINT `its_pendaftaran_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `its_peserta` (`id_peserta`) ON UPDATE CASCADE;

--
-- Constraints for table `its_peserta`
--
ALTER TABLE `its_peserta`
  ADD CONSTRAINT `its_peserta_ibfk_2` FOREIGN KEY (`id_country`) REFERENCES `its_country` (`id_country`) ON UPDATE CASCADE,
  ADD CONSTRAINT `its_peserta_ibfk_3` FOREIGN KEY (`id_phonecode`) REFERENCES `its_phonecode` (`id_phonecode`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
