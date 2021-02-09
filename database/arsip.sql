-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 08:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `file_name` varchar(32) NOT NULL,
  `ref_numb` varchar(128) NOT NULL,
  `file_code` varchar(64) NOT NULL,
  `file_year` smallint(8) NOT NULL,
  `file_body` longtext NOT NULL,
  `file_numb` int(32) DEFAULT NULL,
  `username` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `folder_id`, `file_name`, `ref_numb`, `file_code`, `file_year`, `file_body`, `file_numb`, `username`) VALUES
(1, 1, 'MODUL 1 - Xcode (iOS)', '001', 'BABI', 2020, '<p style=\"text-align:justify\"><strong>2.1&nbsp;&nbsp;&nbsp; Tujuan</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">Mengetahui apa itu bahasa pemrograman <em>Swift.</em></li>\r\n	<li style=\"text-align:justify\">Memahami cara menggunakan fitur-fitur dasar di <em>X-Code.</em></li>\r\n	<li style=\"text-align:justify\">Mampu membuat aplikasi sederhana menggunakan <em>Swift.</em></li>\r\n	<li style=\"text-align:justify\">Mengetahui fungsi dan dapat menggunakan <em>Constrains.</em></li>\r\n	<li style=\"text-align:justify\">Mengenal penggunaan <em>OS MacOS.</em></li>\r\n	<li style=\"text-align:justify\">Dapat mengenal perbedaan <em>X-Code</em><em> </em>dengan IDE Lain-nya.</li>\r\n	<li style=\"text-align:justify\">Dapat mensimulasikan yang telah di buat pada <em>emulator.</em></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2.2&nbsp;Dasar Teori</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><strong>PengenalaniOS</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">iOS adalah sistem operasi perangkat bergerak yang dikembangkan dan didistribusikan oleh Apple Inc. Sistem operasi ini pertama diluncurkan tahun 2007 untuk iPhone dan iPod Touch, dan telah dikembangkan untuk mendukung perangkat Apple lainnya seperti iPad dan Apple TV. Tidak seperti Windows Phone (Windows CE) Microsoft dan Android Google, Apple tidak melisensikan iOS untuk dapat diinstal di perangkat keras non-Apple. Pada12 September 2012, App Store Apple berisi lebih dari 700.000 aplikasi iOS, yang secara kolektif telah diunduh lebih dari 30 miliar kali. SO ini memiliki pangsa pasar 14,9% untuk unit sistem operasi perangkat bergerak telepon cerdas yang dijual pada kuartal ketiga 2012, terbanyak setelah Android Google. Pada bulan Juni 2012, iOS mencakup 65% konsumsi data web perangkat bergerak (termasuk di iPod Touch dan iPad). Pada pertengahan 2012, terdapat 410 juta perangkat bergerak yang diaktifkan. Menurut Apple pada tanggal 12 September 2012, 400juta perangkat bergerak iOS telah dijual sepanjang bulan Juni 2012.</p>\r\n\r\n<p style=\"text-align:justify\">Antarmuka pengguna iOS didasarkan pada konsep manipulasi langsung menggunakan gerakan multisentuh. Elemen kontrol antarmukanya meliputi <em>slider</em>, <em>switch</em>, dan tombol. Interaksi dengan SO ini mencakup gerakan seperti geser, sentuh, jepit, dan jepit<em> </em>buka, masing - masing memiliki arti tersendiri dalam konteks iOS dan antarmuka multi sentuhnya. Akselerometer internalnya dipakai oleh sejumlah aplikasi agar bisa merespon terhadap pengguncangan alat (misalnya membatalkan tindakan) atau memutarnya dalam tiga dimensi (misalnya beralih dari mode potret ke lanskap). iOS diturunkan dari OS X, yang memiliki fondasi Darwin dan karena itu iOS merupakan sistem operasi Unix.</p>\r\n', 1, 'Administrator'),
(3, 3, 'Pendahuluan Transmisi', '11312xsadas', '3211x', 32767, '<p>asdaasd</p>\r\n', 12, 'Administrator'),
(4, 2, 'yuiy', '686', 'hjk', 32767, '<p>1</p>\r\n', 1, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `folder_id` int(11) NOT NULL,
  `folder_name` varchar(64) NOT NULL,
  `folder_cover` varchar(128) DEFAULT NULL,
  `folder_numb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`folder_id`, `folder_name`, `folder_cover`, `folder_numb`) VALUES
(1, 'PEMOGRAMAN PERANGKAT BERGERAK ', 'image-portofolio-6.png', 1),
(2, 'JARINGAN KOMPUTER', 'image-portofolio-7.png', 2),
(3, 'SISTEM BASIS DATA', 'formbank.png', 3),
(5, 'CONSINA', 'formbank1.png', 5),
(6, 'SAMPOERNA', 'image-portofolio-61.png', 6),
(7, 'SUFFLE POP1', 'image-portofolio-71.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `setting_id` int(11) NOT NULL,
  `icon` varchar(64) DEFAULT NULL,
  `logo` varchar(64) DEFAULT NULL,
  `namaweb` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`setting_id`, `icon`, `logo`, `namaweb`) VALUES
(1, 'PT_Solusi_Bangun_Indonesia_Tbk~2.png', 'PT_Solusi_Bangun_Indonesia_Tbk.png', 'PT. SOLUSI BANGUN INDONESIA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(132) NOT NULL,
  `image` varchar(132) DEFAULT NULL,
  `akses_level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `image`, `akses_level`) VALUES
(14, 'Administrator', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'aha7zovlbhewdnatckl7.png', 'admin'),
(18, 'Mawas', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'PT_Solusi_Bangun_Indonesia_Tbk~1.png', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `fk_folder_id` (`folder_id`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`folder_id`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `folder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `fk_folder_id` FOREIGN KEY (`folder_id`) REFERENCES `folder` (`folder_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
