-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2022 pada 17.06
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admintkj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tguru`
--

CREATE TABLE `tguru` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `hp` int(255) NOT NULL,
  `tangal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tguru`
--

INSERT INTO `tguru` (`id`, `nip`, `nama`, `pendidikan`, `mata_pelajaran`, `kelamin`, `hp`, `tangal_lahir`, `tempat_lahir`, `alamat`, `gambar`, `is_active`) VALUES
(11, 1212312, 'sasdas', 'asasads', 'sasdss', 'Laki Laki', 1231, '2022-11-04', 'saads', 'wasdsadad', 's_lk3EscrOkREyzy81k2_pv55JJj.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tguru`
--
ALTER TABLE `tguru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tguru`
--
ALTER TABLE `tguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
