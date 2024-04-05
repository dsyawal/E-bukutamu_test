-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2023 pada 02.17
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
-- Database: `db_bukutamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bukutamu`
--

CREATE TABLE `tb_bukutamu` (
  `id` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat_instansi` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `bertemu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_bukutamu`
--

INSERT INTO `tb_bukutamu` (`id`, `tanggal`, `nama`, `alamat_instansi`, `no_hp`, `keperluan`, `bertemu`) VALUES
(1, '2023-12-04', 'didit', 'swu', '757575785975', 'magang', 'pak teguh'),
(2, '2023-12-03', 'dimas', 'bsi', '07286216298', 'magang', 'pak teguh'),
(3, '2023-12-04', 'Septi', '', '', '', 'Pak Teguh'),
(4, '2023-12-04', 'Niam', 'SWU', '08291372871', '', 'pak teguh'),
(5, '2023-12-04', 'Niam', 'SWU', '08317389828', '', 'cizhih'),
(6, '2023-12-04', 'ggugo', 'SWU', 'zjicjsijzi', '', 'cizhih'),
(7, '2023-12-04', 'Septi', 'SWU', 'zjicjsijzi', 'magang', 'Pak Teguh'),
(8, '2023-12-05', 'Umu Hanifah', 'SWU', '0832783684', 'magang', 'pak teguh'),
(9, '2023-12-05', 'Putra', 'UNU', '0902371201279', 'magang', 'Pak Teguh '),
(10, '2023-12-05', 'Amin Surat', 'SWU', '08298367169', 'Magang', 'pak teguh'),
(11, '2023-12-05', 'umu', 'swu', '023902179370', 'magang', 'babeh');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
