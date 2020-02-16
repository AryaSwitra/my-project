-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2019 pada 12.59
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Jenis_kelamin` varchar(100) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`, `password`, `Jenis_kelamin`, `gambar`) VALUES
(1, 'Ari', '123', 'laki-laki', 's1.PNG'),
(2, 'Dewi', '123', 'perempuan', '1.jpg'),
(8, 'Arya Switra', '123', 'laki-laki', '1.jpg'),
(13, 'Sintya Dewi', '123', 'laki-laki', 'DD.png'),
(14, 'Desi', '123', 'perempuan', '1.jpg'),
(15, 'Denis', '123', 'laki-laki', '1.jpg'),
(16, 'Danu Iswayuhdi', '123', 'laki-laki', '1.jpg'),
(17, 'Deny', '123', 'laki-laki', '1.jpg'),
(18, 'Yami', '123', 'perempuan', '1.jpg'),
(19, 'Mela', '123', 'perempuan', '1.jpg'),
(21, 'eee', '123', 'laki-laki', '1.jpg'),
(22, 'lala', '123', 'perempuan', 'dpicom.jpg'),
(23, 'dodo', '123', 'laki-laki', '1.jpg'),
(24, 'oi', '123', 'laki-laki', 'saya.jpg'),
(34, 'wow', '123', 'laki-laki', '1.jpg'),
(36, 'nadia', '123', 'perempuan', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
