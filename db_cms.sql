-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2024 at 07:12 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `penulis`, `judul`, `konten`, `gambar`, `tanggal`, `tags`) VALUES
(1, 'fuu', 'tensura', 'seperti itu', NULL, NULL, NULL),
(3, 'fuu tempest', 'tensura', 'seperti itu', NULL, NULL, NULL),
(4, 'fuu tempest', 'tensura', 'seperti itu', NULL, NULL, NULL),
(5, 'fuu tempest', 'tensura', 'seperti itu', NULL, NULL, NULL),
(6, 'fuu tempest', 'tensura', 'seperti itu', NULL, NULL, NULL),
(7, 'rimuru', 'tensura', 'seperti itu', NULL, NULL, NULL),
(8, 'tensura', 'rimuru', 'seperti itu aplaajhhhh', NULL, NULL, NULL),
(9, 'rimuru', 'tensura', 'seperti itu', NULL, NULL, NULL),
(11, 'efewf', 'dewefw', 'esaca', NULL, NULL, NULL),
(24, 'fuu tempest', 'CDSCFE', ';, fd gdsgs ', NULL, '2024-11-05', 'sdvunhoivs'),
(25, 'fuu tempest', 'CDSCFE', ';, fd gdsgs ', NULL, '2024-11-05', 'sdvunhoivs'),
(26, 'rorrrr', 'cooopoo', 'rwqswqsqsssssww', 'img/artikel/download (1).jfif', '2024-11-05', 'sacasaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
