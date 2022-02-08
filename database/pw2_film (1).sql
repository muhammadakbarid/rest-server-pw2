-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 11:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `id_homeproduction` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `producer` varchar(200) NOT NULL,
  `penulis_naskah` varchar(200) NOT NULL,
  `musik` varchar(200) NOT NULL,
  `cimatografi` varchar(200) NOT NULL,
  `editor` varchar(200) NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `negara` varchar(200) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `tahun_rilis` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `id_homeproduction`, `judul`, `producer`, `penulis_naskah`, `musik`, `cimatografi`, `editor`, `durasi`, `poster`, `bahasa`, `negara`, `rating`, `tahun_rilis`) VALUES
(2, 1, 'ajsbdjasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', '123', 'aaa.jpg', 'sadasd', 'asdasd', '12', 0000);

-- --------------------------------------------------------

--
-- Table structure for table `homeproduction`
--

CREATE TABLE `homeproduction` (
  `id_homeproduction` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `pemilik` varchar(200) NOT NULL,
  `tahun_berdiri` year(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `website` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `homeproduction`
--
ALTER TABLE `homeproduction`
  ADD PRIMARY KEY (`id_homeproduction`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homeproduction`
--
ALTER TABLE `homeproduction`
  MODIFY `id_homeproduction` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
