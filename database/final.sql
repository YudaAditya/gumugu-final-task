-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 06:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `publisher` varchar(200) NOT NULL,
  `created` date NOT NULL,
  `expired` date NOT NULL,
  `file` text NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `download` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `name`, `publisher`, `created`, `expired`, `file`, `view`, `download`) VALUES
(6, 'Transkrip Sementara', 'Unsyiah', '2020-01-01', '2020-06-30', 'cetak transkrip sementara kurikulum baru.pdf', 0, 16),
(7, 'Implementasi Pembelajaran Menggambar di Sekolah Dasar: MENGGAMBAR SEBAGAI ALAT PENDIDIKAN', ' Moeljadi Pranata ', '2010-02-14', '2025-10-22', '01.-Implementasi.pdf', 0, 6),
(8, 'SPEECH RECOGNITION WITH DEEP RECURRENT NEURAL NETWORKS', 'Department of Computer Science, University of Toronto', '2016-03-15', '2020-12-15', 'Speech recognition with deep recurrent neural networks.pdf', 0, 11),
(9, 'CV Yuda', 'Yuda Aditya', '2019-01-01', '2025-12-31', '1.cv Yuda 2019_compressed.pdf', 0, 10),
(10, 'Seminar', 'Unsyiah', '2020-04-08', '2020-05-22', 'Jadwal Seminar KKP Tahap I.pdf', 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `date`) VALUES
(1, '2020-04-10'),
(2, '2020-04-10'),
(3, '2020-04-10'),
(4, '2020-04-10'),
(5, '2020-04-10'),
(6, '2020-04-10'),
(7, '2020-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `keyword` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `keyword`, `date`) VALUES
(1, 'trans', '2020-04-08'),
(2, '', '2020-04-08'),
(3, 'im', '2020-04-08'),
(4, 'un', '2020-04-08'),
(5, 'nilai', '2020-04-10'),
(6, 'bambang', '2020-04-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
