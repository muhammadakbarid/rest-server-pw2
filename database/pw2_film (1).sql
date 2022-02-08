-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2022 pada 16.44
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `film`
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
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id_film`, `id_homeproduction`, `judul`, `producer`, `penulis_naskah`, `musik`, `cimatografi`, `editor`, `durasi`, `poster`, `bahasa`, `negara`, `rating`, `tahun_rilis`) VALUES
(6, 2, 'Marry Me (2022 Film)', 'Benny Medina', 'John Rogers', 'John Debney', 'Florian Ballhaus', 'Michael Berenbaum', '112 Minute', 'Marry_Me_2022_Poster.jpg', 'English', 'United States', 'PG-13', 2022);

-- --------------------------------------------------------

--
-- Struktur dari tabel `homeproduction`
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
-- Dumping data untuk tabel `homeproduction`
--

INSERT INTO `homeproduction` (`id_homeproduction`, `nama`, `pemilik`, `tahun_berdiri`, `email`, `alamat`, `no_tlp`, `logo`, `website`, `instagram`, `facebook`, `twitter`) VALUES
(2, 'Akbar Movie', 'akbar muhammad', 2022, 'muhakbar@gmail.com', 'Jl. Poltekpos', '08123456789', 'images-removebg-preview.png', 'www.akbrmovie.com', 'akbr', 'akbrfb', 'akbrtw'),
(4, 'Media Tamaa', 'nazziilla', 2022, 'mediatama2@gmail.com', 'Jl. Poltekpos No 890', '08123456789', 'WhatsAppImage2022-01-20at14.08.06(1).jpeg', 'www.mediatama2@gmail.com', 'mediatama2ig', 'mediatama2fb', 'mediatama2tw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`) VALUES
(1, 'nazzilla ap', 'auliyanazzilla@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeks untuk tabel `homeproduction`
--
ALTER TABLE `homeproduction`
  ADD PRIMARY KEY (`id_homeproduction`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `homeproduction`
--
ALTER TABLE `homeproduction`
  MODIFY `id_homeproduction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
