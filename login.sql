-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2023 pada 08.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'Abdul Basyir abada', 30734),
(3, 'ADITYA RADJAK\r\n', 31194),
(4, 'AFDHAL UMAR\r\n', 30736),
(5, 'ANNISA PRICINTA BURUDJI\r\n', 30755),
(6, 'Aprilia Putri Pakaya\r\n', 30756),
(7, 'ARLIN MOINTI\r\n', 30783),
(8, 'Audina Biya\r\n', 30758),
(9, 'AYUB TULUKI\r\n', 30774),
(10, 'Azzura Atallah Yusuf\r\n', 30741),
(11, 'Cinta Citra Mentari Olii\r\n', 30760),
(12, 'Dinda Putri Damayanti Husain\r\n', 30761),
(13, 'Doingganus Kogoya\r\n', 30743),
(14, 'ELSAFIRA IGIRISA\r\n', 30762),
(15, 'Fahrizal Mohamad\r\n', 30779),
(16, 'Febrian Inaku', 30745),
(17, 'FERDIYANSYAH T. ADILI', 30746),
(18, 'ICAL AGRISA HIDA', 30803),
(19, 'Idrus Saputra Pratama M. Hayud', 30748),
(20, 'KEN IZZUMI A. MAKMUR', 30749),
(21, 'Marfel Ibrahim', 30802),
(22, 'Moh. Aditya Daud', 30792),
(23, 'Moh. Fahri Ano', 30795),
(24, 'MOH. FARLAN F.A.N. YUSUF', 30751),
(25, 'MOH. REYNAL', 30744),
(26, 'MOH. RIZKY HUNOW', 30955),
(27, 'Mohammad Bayu Putra Bahtiar', 30752),
(28, 'MUHAMAD PEDROSA H USMAN', 30753),
(29, 'Rafli Djailani', 30801),
(30, 'Rahmat Otta', 30739),
(31, 'REIN FAJAR ISMAIL', 30747),
(32, 'ZASKIA ALIA IBRAHIM', 31283),
(33, 'user', 12345);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
