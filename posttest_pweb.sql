-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2022 pada 16.08
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
-- Database: `posttest_pweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_reservasi`
--

CREATE TABLE `daftar_reservasi` (
  `ID` int(4) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Datang` date NOT NULL,
  `Pulang` date NOT NULL,
  `Superior_Single` tinyint(1) DEFAULT NULL,
  `Superior_Single_Value` int(10) DEFAULT NULL,
  `Superior_Double` tinyint(1) DEFAULT NULL,
  `Superior_Double_Value` int(10) DEFAULT NULL,
  `Deluxe_Single` tinyint(1) DEFAULT NULL,
  `Deluxe_Single_Value` int(10) DEFAULT NULL,
  `Deluxe_Double` tinyint(1) DEFAULT NULL,
  `Deluxe_Double_Value` int(10) DEFAULT NULL,
  `Junior_Suite` tinyint(1) DEFAULT NULL,
  `Junior_Suite_Value` int(10) DEFAULT NULL,
  `Aula` tinyint(1) DEFAULT NULL,
  `Ruang_Rapat` tinyint(1) DEFAULT NULL,
  `Tanggal` varchar(20) NOT NULL,
  `Waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_reservasi`
--

INSERT INTO `daftar_reservasi` (`ID`, `Nama`, `Datang`, `Pulang`, `Superior_Single`, `Superior_Single_Value`, `Superior_Double`, `Superior_Double_Value`, `Deluxe_Single`, `Deluxe_Single_Value`, `Deluxe_Double`, `Deluxe_Double_Value`, `Junior_Suite`, `Junior_Suite_Value`, `Aula`, `Ruang_Rapat`, `Tanggal`, `Waktu`) VALUES
(19, 'Jamal', '2022-10-20', '2022-10-27', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, '2022-10-20', '08:56:11am');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_reservasi`
--
ALTER TABLE `daftar_reservasi`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_reservasi`
--
ALTER TABLE `daftar_reservasi`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
