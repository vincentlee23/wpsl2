-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 03:31 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `namaDepan` varchar(20) NOT NULL,
  `namaTengah` varchar(20) NOT NULL,
  `namaBelakang` varchar(20) NOT NULL,
  `tempatLahir` varchar(20) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `nik` char(20) NOT NULL,
  `wargaNegara` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHp` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kodePos` char(5) NOT NULL,
  `imageDir` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password1` varchar(25) NOT NULL,
  `password2` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `nik`, `wargaNegara`, `email`, `noHp`, `alamat`, `kodePos`, `imageDir`, `username`, `password1`, `password2`) VALUES
('Lee', 'Lee', 'Lee', 'Jakarta', '2002-03-22', '0987654321', 'Indonesia', 'vincentleepaypal@gmail.com', '082124594487', 'TMN PALEM LESTARIC I NO 31, RT/RW 007/005, Kel/Desa CENGKARENG BARAT, Kecamatan CENGKARENG', '11730', 'Uploaded/selfie.jpg', 'vincent', '123', '123'),
('Vincent', 'Vincent', 'Vincent', 'Jakarta', '2022-04-18', '12345678910', 'Indonesia', 'vincentleepaypal@gmail.com', '081234567890', 'TMN PALEM LESTARIC I NO 31, RT/RW 007/005, Kel/Desa CENGKARENG BARAT, Kecamatan CENGKARENG', '11730', 'Uploaded/edited vincent.jpg', 'victoriousking', '12345', '12345'),
('Vincent', 'Lee', 'Galtova', 'Jakarta', '2022-03-09', '3173012303020007', 'Indonesia', 'vincentleepoems@gmail.com', '082124594487', 'TMN PALEM LESTARIC I NO 31, RT/RW 007/005, Kel/Desa CENGKARENG BARAT, Kecamatan CENGKARENG', '11730', 'Uploaded/merah (1).jpg', 'vincentleevk', 'test123', 'test123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
