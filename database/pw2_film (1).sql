-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 08:34 AM
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
(6, 2, 'Marry Me (2022 Film)', 'Benny Medina', 'John Rogers', 'John Debney', 'Florian Ballhaus', 'Michael Berenbaum', '112 Minute', 'Marry_Me_2022_Poster.jpg', 'English', 'United States', 'PG-13', 2022),
(7, 4, 'Moonfall', 'Harald Kloser', 'Roland Emmerich', 'Thomas Wander', 'Robby Baumgartner', 'Adam Wolfe', '130 Minute', 'Moonfall_2022_poster.jpg', 'English', 'United States', 'PG-13', 2022),
(8, 5, 'Death on the Nile', 'Kenneth Branagh', 'Michael Green', 'Patrick Doyle', 'Haris Zambarloukos', 'Úna Ní Dhonghaíle', '127 Minute', 'Death_On_The_Nile_Theatrical_Poster.jpg', 'English', 'United States', 'PG-13', 2022),
(9, 6, 'The Batman', 'Dylan Clark', 'Matt Reeves', 'Michael Giacchino', 'Greig Fraser', 'William Hoy', '175 Minute', 'The_Batman_Official_Poster.jpg', 'English', 'United States', 'PG-13', 2022),
(10, 6, 'Nope', 'Ian Cooper', 'Jordan Peele', 'Michael Abels', 'Hoyte van Hoytema', 'Daniel Kaluuya', '130 Minute', 'Nope_2022_Poster.jpg', 'English', 'United States', 'PG-13', 2022),
(11, 7, 'The Desperate Hour', 'Andrew D. Corkin', 'Christopher Sparling', 'Fil Eisler', 'John Brawley', 'Lee Haugen', '85 Minutes', 'The_Desperate_Hour_Poster.jpg', 'English', 'United States', 'PG-13', 2022),
(12, 8, 'Dog', 'Channing Tatum', 'Reid Carolin', 'Thomas Newman', 'Newton Thomas Sigel', 'Leslie Jones', '90 Minutes', 'Dog_Movie_Poster.jpg', 'English', 'United States', 'PG-13', 2022);

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

--
-- Dumping data for table `homeproduction`
--

INSERT INTO `homeproduction` (`id_homeproduction`, `nama`, `pemilik`, `tahun_berdiri`, `email`, `alamat`, `no_tlp`, `logo`, `website`, `instagram`, `facebook`, `twitter`) VALUES
(2, 'Akbar Movie', 'akbar muhammad', 2022, 'muhakbar@gmail.com', 'Jl. Poltekpos', '08123456789', 'images-removebg-preview.png', 'www.akbrmovie.com', 'akbr', 'akbrfb', 'akbrtw'),
(4, 'Miles Films', 'Mira Lesmana', 2000, 'milesfilms@gmail.com', 'Jl. Poltekpos No 890', '08123456789', 'milesfilms-768x451.jpg', 'www.milesfilms@gmail.com', 'milesfilmsig', 'milesfilmsfb', 'milesfilmstw'),
(5, 'Rapi Films', 'Gope T Samtani', 1971, 'rapifilms@gmail.com', 'Jl. Sarimanah No.567 Bandung', '08123456789', 'ofNVK5Rf_400x400.jpg', 'www.rapifilms.com', 'rapifilmsig', 'rapifilmsfb', 'rapifilmstw'),
(6, 'Starvision Plus', 'Chand Parwez Servialahir', 1988, 'starvisionplus@gmail.com', 'JL. Letda Sucipto Nom 789 Bandung', '08123456789', '20140715035726!Starvisionplus.jpg', 'www.starvisionplus.com', 'starvisionplusig', 'starvisionplusfb', 'starvisionplustw'),
(7, 'Visinema Pictures', 'Angga Dwimas Sasongko', 2008, 'visinemapictures@gmail.com', 'Jl. Djunjungan No. 890 Bandung', '08123456789', 'maxresdefault(1).jpg', 'www.visinemapictures.com', 'visinemapicturesig', 'visinemapicturesfb', 'visinemapicturestw'),
(8, 'LifeLike Pictures', 'Sheila Timothy dan Luki Wanandi', 2008, 'lifelikepictures@gmail.com', 'Jl. Senopati No. 654 Jakarta Selatan', '08123456789', 'unnamed.jpg', 'www.lifelikepictures.com', 'lifelikepicturesig', 'lifelikepicturesfb', 'lifelikepicturestw');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL DEFAULT 1,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(10, 30, 'fd223c3150e746728310cdd8e8c4db8c', 1, 0, 0, NULL, 2147483647),
(11, 31, '050aefed4c76d7e753aedb4bb4629cb0', 1, 0, 0, NULL, 2147483647),
(12, 32, '96be45225508bf75b9f121a19f3a0107', 1, 0, 0, NULL, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` enum('admin','member') NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `hak_akses`) VALUES
(30, 'Akbar', 'akbar@gmail.com', '$2y$10$U45/sDrLtIcWt9uY71.v7OfvMO18d/fdvCmDkCdsh4tenQU/RS0Wm', 'admin'),
(31, 'Nazzilla', 'nazzilla@gmail.com', '$2y$10$FAzBrBLSQvtx3l5h53BwFeH.hcvNByu0T/TFX97h4umayL4/4Os/S', 'admin'),
(32, 'member', 'member@gmail.com', '$2y$10$ZsAxqzMYd/pDy/EKZs72KOYy24nXhb6NGuekkZed1FE5oQagADUve', 'member');

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
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `homeproduction`
--
ALTER TABLE `homeproduction`
  MODIFY `id_homeproduction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
