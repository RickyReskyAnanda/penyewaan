-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 11:28 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penyewaan`
--
CREATE DATABASE IF NOT EXISTS `penyewaan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `penyewaan`;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE IF NOT EXISTS `tabel_admin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(50) NOT NULL,
  `foto_admin` varchar(50) NOT NULL,
  `jk_admin` enum('laki-laki','perempuan') NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_gambar`
--

CREATE TABLE IF NOT EXISTS `tabel_gambar` (
  `id_gambar` int(6) NOT NULL AUTO_INCREMENT,
  `nama_gambar` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `id_back` int(6) NOT NULL,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jadwal`
--

CREATE TABLE IF NOT EXISTS `tabel_jadwal` (
  `id_jadwal` int(6) NOT NULL AUTO_INCREMENT,
  `nama_jadwal` varchar(50) NOT NULL,
  `jam_awal_jadwal` varchar(10) NOT NULL,
  `jam_akhir_jadwal` varchar(10) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `status` enum('terlaksana','sedang-berlangsung','menunggu') NOT NULL,
  `id_tempat` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE IF NOT EXISTS `tabel_pendaftaran` (
  `id_pendaftaran` int(6) NOT NULL AUTO_INCREMENT,
  `id_user` int(6) NOT NULL,
  `id_tempat` int(6) NOT NULL,
  `waktu_pendaftaran` datetime NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_pendaftaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tempat`
--

CREATE TABLE IF NOT EXISTS `tabel_tempat` (
  `id_tempat` int(5) NOT NULL AUTO_INCREMENT,
  `nama_tempat` varchar(100) NOT NULL,
  `jenis_tempat` enum('balai-diklat','gedung-serbaguna') NOT NULL,
  `pembayaran` enum('tunai','kredit') NOT NULL,
  `lokasi` text NOT NULL,
  PRIMARY KEY (`id_tempat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE IF NOT EXISTS `tabel_user` (
  `id_user` int(6) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `email_user` int(50) NOT NULL,
  `pass_user` int(100) NOT NULL,
  `jk_user` enum('laki-laki','perempuan') NOT NULL,
  `tgl_lahir_user` date NOT NULL,
  `tempat_lahir_user` varchar(50) NOT NULL,
  `pekerjaan_user` varchar(50) NOT NULL,
  `no_hp_user` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel user = data client ' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
