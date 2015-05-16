-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2015 at 02:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `healthymommy`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `isi_berita` longtext,
  `foto_berita` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(11) NOT NULL,
  `trisemester` int(11) DEFAULT NULL,
  `judul_forum` varchar(255) DEFAULT NULL,
  `isi_forum` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_foto` int(11) NOT NULL,
  `foto` longblob,
  `judul_foto` varchar(100) DEFAULT NULL,
  `caption` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infografik`
--

CREATE TABLE IF NOT EXISTS `infografik` (
  `id_info` int(11) NOT NULL,
  `umur` int(11) DEFAULT NULL,
  `gambar` longblob,
  `keterangan` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_forum` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `isi_komentar` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `umur_kehamilan` int(11) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
 ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `infografik`
--
ALTER TABLE `infografik`
 ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id_komentar`), ADD KEY `FK_komentar_user` (`email`), ADD KEY `FK_komentar_forum` (`id_forum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
ADD CONSTRAINT `FK_komentar_forum` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_komentar_user` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
