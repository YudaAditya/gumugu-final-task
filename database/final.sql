-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 06:55 PM
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
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `source` varchar(200) NOT NULL,
  `medium` varchar(200) NOT NULL,
  `campaign` varchar(200) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `source`, `medium`, `campaign`, `link`) VALUES
(1, 'final', 'detail-10', 'data', 'https://unsyiah.ac.id/'),
(2, 'final', 'navbar', 'services', 'https://www.gumugu.com/services#web/'),
(3, 'final', 'footer', 'gumugu', 'https://www.gumugu.com/'),
(4, 'final', 'detail-9', 'data', 'https://www.linkedin.com/in/yudaaditya/'),
(5, 'final', 'navbar', 'services', 'https://www.gumugu.com/services#web/'),
(6, 'final', 'detail-7', 'data', 'https://www.researchgate.net/publication/321635737_IMPLEMENTASI_PEMBELAJARAN_ENTREPRENEURIAL_DALAM_PENDIDIKAN_SENI_RUPA'),
(7, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(8, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(9, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(10, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(11, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(12, 'final', 'navbar', 'company', 'https://www.gumugu.com/about/'),
(13, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(14, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(15, 'final', 'detail-6', 'data', 'https://krsonline.unsyiah.ac.id/'),
(16, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(17, 'final', 'navbar', 'services', 'https://www.gumugu.com/services#web/'),
(18, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(19, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(20, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(21, 'final', 'navbar', 'services', 'https://www.gumugu.com/services#web/'),
(22, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(23, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(24, 'final', 'navbar', 'homepage', 'https://www.gumugu.com/'),
(25, 'final', 'navbar', 'homepage', 'https://www.gumugu.com'),
(26, 'final', 'navbar', 'services', 'https://www.gumugu.com/services#web'),
(27, 'final', 'navbar', 'homepage', 'https://www.gumugu.com'),
(28, 'final', 'navbar', 'homepage', 'https://www.gumugu.com'),
(29, 'final', 'navbar', 'final-homepage', 'http://127.0.0.1/final/'),
(30, 'final', 'navbar', 'final-homepage', 'http://127.0.0.1/final/');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `ip_address`, `date`) VALUES
(1, '127.0.0.1', '2020-06-10'),
(2, '127.0.0.1', '2020-06-10'),
(3, '127.0.0.1', '2020-06-10');

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
(4, '2020-04-11', 'https://www.linkedin.com/in/yudaaditya/?source=final&medium=detail-9&campaign=contoh'),
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
(17, '2020-05-09', 'https://krsonline.unsyiah.ac.id/?source=final&medium=detail-6&campaign=contoh'),
(18, '2020-05-11', 'https://krsonline.unsyiah.ac.id/?source=final&medium=detail-6&campaign=contoh'),
(19, '2020-05-11', 'https://www.linkedin.com/in/yudaaditya/?source=final&medium=detail-9&campaign=contoh'),
(20, '2020-05-11', 'https://www.linkedin.com/in/yudaaditya/?source=final&medium=detail-9&campaign=contoh'),
(21, '2020-05-29', 'https://unsyiah.ac.id/?source=final&medium=detail-10&campaign=data');

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
(15, 'transkrip', '2020-05-10'),
(16, 'bambang', '2020-05-12'),
(17, 'transkrip', '2020-05-12'),
(18, 'cv', '2020-05-12'),
(19, '', '2020-05-26'),
(20, 'bambang', '2020-05-29'),
(21, 'bambang', '2020-05-29'),
(22, 'transkrip', '2020-05-29'),
(23, 'transkrip', '2020-05-29'),
(24, 'cv', '2020-05-29'),
(25, 'data', '2020-05-30'),
(26, 'bambang', '2020-05-30'),
(27, 'implementasi', '2020-05-30'),
(28, '<div id=\"searchBar\" class=\"input-group mb-3 input-group-lg\"> 						<div class=\"input-group-prepend\"> 							<span class=\"btn\"> 								<i class=\"fas fa-search\"></i> 							</span> 						</div> 						<input type=\"text\" class=\"form-control\" placeholder=\"Cari disini ya...\" aria-label=\"\" aria-describedby=\"basic-addon1\" id=\"cari\" name=\"cari\" placeholder=\"cari\" autocomplete=\"off\" autofocus>  						<button id=\"searchButton\" class=\"btn btn-outline-secondary\" type=\"button\"><input class=\"btn\" type=\"submit\" value=\"Cari\" name=\"submit\"></button> 					</div>', '2020-05-30'),
(29, '<script> alert(\"Hello World!!\"); </script>', '2020-05-30'),
(30, 'cari', '2020-05-31'),
(31, 'admin', '2020-06-04'),
(32, 'admin', '2020-06-04'),
(33, 'admin', '2020-06-05'),
(34, 'cv', '2020-06-05'),
(35, 'implementasi', '2020-06-05'),
(36, 'implementasi', '2020-06-06'),
(37, 'speech', '2020-06-07'),
(38, 'bambang', '2020-06-08'),
(39, 'bambang', '2020-06-08'),
(40, 'implementasi', '2020-06-08'),
(41, 'speech', '2020-06-08'),
(42, 'se', '2020-06-08'),
(43, 'sem', '2020-06-08'),
(44, '<script> alert(\"Hello World!!\"); </script>', '2020-06-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
