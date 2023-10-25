-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2023 pada 16.34
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_bis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `nama_bus` varchar(255) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `jumlah_unit` int(11) NOT NULL,
  `harga_sewa` double NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bus`
--

INSERT INTO `bus` (`id`, `nama_bus`, `fasilitas`, `jumlah_unit`, `harga_sewa`, `gambar`) VALUES
(3, 'Maju Jaya', 'Ac, Toilet, Tv, Wifi, Kamar, Mandi', 10, 2000000, '231017105427.png'),
(4, 'Murni Jaya', 'Ac, Reclining Seats, Wifi', 8, 1800000, '231017100957.png'),
(5, 'Harapan Baru', 'Ac, Tv, DVD Player', 12, 1600000, '231017101603.png'),
(6, 'Mitra', 'Ac, Wifi, Full Musik', 20, 1500000, '231017040612.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
