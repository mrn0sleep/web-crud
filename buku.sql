-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2026 at 05:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT 0,
  `deskripsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `nama_buku`, `penerbit`, `jumlah`, `deskripsi`) VALUES
(7, 'Filosofi Teras', 'Kompas Penerbit', 116, 'Panduan praktis filosofi Stoisisme untuk mental yang lebih tangguh di masa kini.'),
(8, 'Bumi', 'Gramedia Pustaka Utama', 8, 'Novel petualangan dunia paralel karya Tere Liye yang mengisahkan Raib, Seli, dan Ali.'),
(9, 'Pemrograman Web dengan PHP 8', 'Informatika', 12, 'Panduan teknis membangun aplikasi web modern menggunakan PHP versi terbaru.'),
(10, 'Algoritma dan Struktur Data', 'Andi Offset', 5, 'Buku wajib mahasiswa IT untuk memahami dasar-dasar logika pemrograman dan efisiensi kode.'),
(11, 'Hujan', 'Gramedia Pustaka Utama', 7, 'Kisah tentang persahabatan, cinta, dan teknologi di masa depan yang penuh haru.'),
(12, 'Negeri 5 Menara', 'Gramedia', 9, 'Perjalanan santri di Pondok Madani dengan semboyan legendaris Man Jadda Wajada.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
