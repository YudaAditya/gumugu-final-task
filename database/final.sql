-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 08:37 PM
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
  `source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `name`, `publisher`, `created`, `expired`, `file`, `source`) VALUES
(6, 'Transkrip Sementara', 'Unsyiah', '2020-01-01', '2020-06-30', 'cetak transkrip sementara kurikulum baru.pdf', 'https://krsonline.unsyiah.ac.id/'),
(7, 'Implementasi Pembelajaran Menggambar di Sekolah Dasar: MENGGAMBAR SEBAGAI ALAT PENDIDIKAN', ' Moeljadi Pranata ', '2010-02-14', '2025-10-22', '01.-Implementasi.pdf', 'https://www.researchgate.net/publication/321635737_IMPLEMENTASI_PEMBELAJARAN_ENTREPRENEURIAL_DALAM_PENDIDIKAN_SENI_RUPA'),
(8, 'SPEECH RECOGNITION WITH DEEP RECURRENT NEURAL NETWORKS', 'Department of Computer Science, University of Toronto', '2016-03-15', '2020-12-15', 'Speech recognition with deep recurrent neural networks.pdf', 'https://web.cs.toronto.edu/'),
(9, 'CV Yuda', 'Yuda Aditya', '2019-01-01', '2025-12-31', '1.cv Yuda 2019_compressed.pdf', 'https://www.linkedin.com/in/yudaaditya/'),
(10, 'Seminar', 'Unsyiah', '2020-04-08', '2020-05-22', 'Jadwal Seminar KKP Tahap I.pdf', 'https://unsyiah.ac.id/');

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
(1, '2020-03-20'),
(2, '2020-03-20'),
(3, '2020-03-20'),
(4, '2020-03-21'),
(5, '2020-03-30'),
(6, '2020-04-01'),
(7, '2020-04-01'),
(8, '2020-04-02'),
(9, '2020-04-02'),
(10, '2020-04-02'),
(11, '2020-04-02'),
(12, '2020-04-05'),
(13, '2020-04-05'),
(14, '2020-04-05'),
(15, '2020-04-05'),
(16, '2020-04-05'),
(17, '2020-05-07'),
(18, '2020-04-07'),
(19, '2020-05-07'),
(20, '2020-05-07'),
(21, '2020-05-08'),
(22, '2020-05-08'),
(23, '2020-05-09'),
(24, '2020-05-09'),
(25, '2020-05-09'),
(26, '2020-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `goto`
--

CREATE TABLE `goto` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goto`
--

INSERT INTO `goto` (`id`, `date`, `url`) VALUES
(1, '2020-04-04', 'https://krsonline.unsyiah.ac.id/?source=final&medium=detail-6&campaign=contoh'),
(2, '2020-04-04', 'https://www.researchgate.net/publication/321635737_IMPLEMENTASI_PEMBELAJARAN_ENTREPRENEURIAL_DALAM_PENDIDIKAN_SENI_RUPA?source=final&medium=detail-7&campaign=contoh'),
(3, '2020-04-11', 'https://web.cs.toronto.edu/?source=final&medium=detail-8&campaign=contoh'),
(4, '2020-04-11', 'https://www.linkedin.com/authwall?trk=gf&trkInfo=AQHDkeIAy45umwAAAXH17rTQ5tjUwF6v7_cDLoTqXTFLDq1lvYTtMHuB2Uz9oeaxQt2N55r3otufSKlHCRxtugTaKvSVh73h9Myts-1TJ4Dd-eD395YUWEECFQuJohj3ImZfF4o=&originalReferer=http://127.0.0.1/final/dokumen/detail/9&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fyudaaditya%2F%3Fsource%3Dfinal%26medium%3Ddetail-9%26campaign%3Dcontoh'),
(5, '2020-04-11', 'https://www.linkedin.com/in/yudaaditya/?source=final&medium=detail-9&campaign=contoh'),
(6, '2020-04-11', 'https://www.linkedin.com/in/yudaaditya/?source=final&medium=detail-9&campaign=contoh'),
(7, '2020-04-11', 'https://web.cs.toronto.edu/?source=final&medium=detail-8&campaign=contoh'),
(8, '2020-04-12', 'https://www.researchgate.net/publication/321635737_IMPLEMENTASI_PEMBELAJARAN_ENTREPRENEURIAL_DALAM_PENDIDIKAN_SENI_RUPA?source=final&medium=detail-7&campaign=contoh'),
(9, '2020-04-12', 'https://www.researchgate.net/publication/321635737_IMPLEMENTASI_PEMBELAJARAN_ENTREPRENEURIAL_DALAM_PENDIDIKAN_SENI_RUPA?source=final&medium=detail-7&campaign=contoh'),
(10, '2020-04-12', 'https://web.cs.toronto.edu/?source=final&medium=detail-8&campaign=contoh'),
(11, '2020-04-12', 'https://krsonline.unsyiah.ac.id/?source=final&medium=detail-6&campaign=contoh'),
(12, '2020-04-12', 'https://krsonline.unsyiah.ac.id/?source=final&medium=detail-6&campaign=contoh'),
(13, '2020-04-13', 'https://www.researchgate.net/publication/321635737_IMPLEMENTASI_PEMBELAJARAN_ENTREPRENEURIAL_DALAM_PENDIDIKAN_SENI_RUPA?source=final&medium=detail-7&campaign=contoh'),
(14, '2020-04-13', 'https://web.cs.toronto.edu/?source=final&medium=detail-8&campaign=contoh'),
(15, '2020-04-13', 'https://www.linkedin.com/in/yudaaditya/?source=final&medium=detail-9&campaign=contoh'),
(16, '2020-04-13', 'https://www.linkedin.com/in/yudaaditya/?source=final&medium=detail-9&campaign=contoh'),
(17, '2020-05-09', 'https://krsonline.unsyiah.ac.id/?source=final&medium=detail-6&campaign=contoh');

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
(1, 'trans', '2020-03-20'),
(2, 'cv', '2020-03-20'),
(3, 'im', '2020-03-20'),
(4, 'un', '2020-03-20'),
(5, 'nilai', '2020-03-30'),
(6, 'bambang', '2020-03-30'),
(7, 'implementasi', '2020-04-04'),
(8, 'data', '2020-04-04'),
(9, 'transkrip', '2020-04-04'),
(10, 'krs', '2020-04-04'),
(11, 'cv', '2020-04-05'),
(12, 'trans', '2020-05-09'),
(13, 'transkrip', '2020-05-10'),
(14, 'transkrip', '2020-05-10'),
(15, 'transkrip', '2020-05-10');

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
-- Indexes for table `goto`
--
ALTER TABLE `goto`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `goto`
--
ALTER TABLE `goto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
