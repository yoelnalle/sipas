-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 12:23 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bpdt`
--
CREATE DATABASE IF NOT EXISTS `bpdt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bpdt`;

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE IF NOT EXISTS `disposisi` (
  `id_disposisi` int(2) NOT NULL AUTO_INCREMENT,
  `disposisi` varchar(255) NOT NULL,
  `kode` varchar(3) NOT NULL,
  PRIMARY KEY (`id_disposisi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `disposisi`, `kode`) VALUES
(1, 'Tindak Lanjuti', 'd1'),
(2, 'Tanggapan/saran', 'd2'),
(3, 'Harap Mewakili', 'd3'),
(4, 'Hadir Bersama Saya', 'd4'),
(5, 'Siapkan Bahan', 'd5'),
(6, 'Jadwalkan', 'd6'),
(7, 'Untuk Diketahui', 'd7'),
(8, 'Untuk Dipelajari dan Laporkan', 'd8'),
(9, 'Untuk Diselesaikan dan Laporkan', 'd9'),
(10, 'Untuk Dilaksanakan dan Laporkan', 'd10'),
(11, 'Untuk Dikoordinasikan', 'd11'),
(12, 'Untuk Diarsipkan', 'd12');

-- --------------------------------------------------------

--
-- Table structure for table `kasubag`
--

CREATE TABLE IF NOT EXISTS `kasubag` (
  `id_ksb` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ksb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kasubag`
--

INSERT INTO `kasubag` (`id_ksb`, `nama`, `nama_lengkap`) VALUES
(1, 'LALIN', 'KASIE LALU LINTAS DAN ANGKUTAN SDP'),
(2, 'SARPRAS', 'KASIE SARANA DAN PRASARANA SDP'),
(3, 'TJ', 'KASIE TRANSPORTASI JALAN'),
(4, 'TU', 'KASUBBAG TATA USAHA');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE IF NOT EXISTS `surat` (
  `id_srt` int(11) NOT NULL AUTO_INCREMENT,
  `Nmr_Agenda` varchar(20) NOT NULL,
  `asal_srt` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `pukul` time NOT NULL,
  `nmr_srt` varchar(30) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `id_ksb` int(3) NOT NULL,
  `catatan` text,
  `catatan1` text,
  `d1` varchar(50) DEFAULT NULL,
  `d2` varchar(50) DEFAULT NULL,
  `d3` varchar(50) DEFAULT NULL,
  `d4` varchar(50) DEFAULT NULL,
  `d5` varchar(50) DEFAULT NULL,
  `d6` varchar(50) DEFAULT NULL,
  `d7` varchar(50) DEFAULT NULL,
  `d8` varchar(50) DEFAULT NULL,
  `d9` varchar(50) DEFAULT NULL,
  `d10` varchar(50) DEFAULT NULL,
  `d11` varchar(50) DEFAULT NULL,
  `d12` varchar(50) DEFAULT NULL,
  `dis1` varchar(50) DEFAULT NULL,
  `dis2` varchar(50) DEFAULT NULL,
  `dis3` varchar(50) DEFAULT NULL,
  `dis4` varchar(50) DEFAULT NULL,
  `dis5` varchar(50) DEFAULT NULL,
  `dis6` varchar(50) DEFAULT NULL,
  `dis7` varchar(50) DEFAULT NULL,
  `dis8` varchar(50) DEFAULT NULL,
  `dis9` varchar(50) DEFAULT NULL,
  `dis10` varchar(50) DEFAULT NULL,
  `dis11` varchar(50) DEFAULT NULL,
  `dis12` varchar(50) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `ukuran` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_srt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_srt`, `Nmr_Agenda`, `asal_srt`, `tgl`, `pukul`, `nmr_srt`, `perihal`, `id_ksb`, `catatan`, `catatan1`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `d9`, `d10`, `d11`, `d12`, `dis1`, `dis2`, `dis3`, `dis4`, `dis5`, `dis6`, `dis7`, `dis8`, `dis9`, `dis10`, `dis11`, `dis12`, `foto`, `ukuran`) VALUES
(2, 'test', 'test', '2020-01-04', '23:05:00', 'test/nomor', 'test', 2, 'test', '', 'Tindak Lanjuti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Untuk Dikoordinasikan', 'Untuk Diarsipkan', 'Tindak Lanjuti', NULL, 'Harap Mewakili', NULL, NULL, 'Jadwalkan', NULL, NULL, NULL, NULL, NULL, NULL, 'AdminLTE_2___Invoice1.pdf', 70),
(4, 'test/test', 'Test asal surat', '2019-12-12', '11:14:00', 'test/no/surat/', '', 4, '', 'test catatan kasie', 'Tindak Lanjuti', NULL, 'Harap Mewakili', NULL, NULL, NULL, 'Untuk Diketahui', NULL, NULL, NULL, NULL, NULL, NULL, 'Tanggapan/saran', NULL, NULL, NULL, 'Jadwalkan', NULL, NULL, NULL, NULL, NULL, NULL, 'AdminLTE_2___Invoice2.pdf', 70),
(5, 'test/14/01/2020', 'test 14 01 2020', '2020-01-12', '04:02:00', 'test/nomor/surat/ 14 01 2020', 'test perihal 14 01 2020', 3, 'test catatan 14 01 2020', '', 'Tindak Lanjuti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Untuk Dilaksanakan dan Laporkan', NULL, 'Untuk Diarsipkan', 'Tindak Lanjuti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AdminLTE_2___Invoice3.pdf', 70),
(6, 'test/surat/nomor/age', 'test asal surat level lalin', '2018-04-21', '23:05:00', 'test level lalin', '', 1, '', '', NULL, NULL, NULL, NULL, 'Siapkan Bahan', 'Jadwalkan', NULL, NULL, NULL, NULL, NULL, NULL, 'Tindak Lanjuti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AdminLTE_2___Invoice4.pdf', 70);

-- --------------------------------------------------------

--
-- Table structure for table `surat_klr`
--

CREATE TABLE IF NOT EXISTS `surat_klr` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `perihal` text NOT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `surat_klr`
--

INSERT INTO `surat_klr` (`id_surat`, `tanggal`, `no_surat`, `alamat`, `perihal`, `keterangan`, `file`, `size`) VALUES
(1, '2019-05-24', 'test/nomor/surat', 'test/alamat', 'test perihal', 'test keterangan', 'AdminLTE_2___Invoice.pdf', 70);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(2, 'yoel nalle', 'yoelnalle', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(3, 'adimas', 'adimas', '923345ecd1a47e4f67dba70655d4d096b5e72690', 'kabag'),
(4, 'ecko', 'ecko', '5b5e2ba03ed8792fb2055628148ddd7e0a58488f', 'lalin'),
(5, 'sarpras', 'sarpras', 'af265b4754d2a073521bd8da0261d4e600bbd27f', 'sarpras'),
(7, 'mario', 'mario', 'addb47291ee169f330801ce73520b96f2eaf20ea', 'TJ'),
(8, 'yakob', 'yakob', '306c230f0eb2e0bec72f0044aa21073fb7714548', 'TU'),
(9, 'semua', 'semua', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'umum');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
