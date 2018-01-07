-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2018 at 08:18 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orong`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(1) NOT NULL,
  `akses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `akses`) VALUES
(1, 'Admin Utama'),
(2, 'Pelatih');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(5) NOT NULL,
  `id_rekrutmen` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_angkatan`
--

CREATE TABLE `tb_angkatan` (
  `id_angkatan` int(5) NOT NULL,
  `nama_angkatan` text NOT NULL,
  `tahun_angkatan` varchar(10) NOT NULL,
  `status_angkatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_angkatan`
--

INSERT INTO `tb_angkatan` (`id_angkatan`, `nama_angkatan`, `tahun_angkatan`, `status_angkatan`) VALUES
(1, 'Tigabelas', '2017/2018', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jeniskriteria`
--

CREATE TABLE `tb_jeniskriteria` (
  `id_jenis` int(3) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jeniskriteria`
--

INSERT INTO `tb_jeniskriteria` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Benefit'),
(2, 'Cost');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(35) NOT NULL,
  `id_posisi` varchar(5) NOT NULL,
  `id_jenis` int(3) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `nama_kriteria`, `id_posisi`, `id_jenis`, `bobot`) VALUES
('BR1', 'Musikalisasi', 'BR', 1, 2),
('BR2', 'KekuatanNafas', 'BR', 1, 2),
('BR3', 'CepatTanggap', 'BR', 1, 1.5),
('BR4', 'BarisBerbaris', 'BR', 1, 1),
('BR5', 'JarakRumah', 'BR', 2, 2),
('BR6', 'PrestasiKelas', 'BR', 2, 1.5),
('BT1', 'PemahamanTempo', 'BT', 1, 2.5),
('BT2', 'Ketenangan', 'BT', 1, 1.5),
('BT3', 'Stamina', 'BT', 1, 2),
('BT4', 'PosturTubuh', 'BT', 1, 2),
('BT5', 'JarakRumah', 'BT', 2, 0.5),
('BT6', 'PrestasiKelas', 'BT', 2, 1.5),
('CG1', 'Stamina', 'CG', 1, 2.5),
('CG2', 'KelincahanTubuh', 'CG', 1, 2),
('CG3', 'PosturTubuh', 'CG', 1, 1.5),
('CG4', 'Ketenangan', 'CG', 1, 1.5),
('CG5', 'JarakRumah', 'CG', 2, 1),
('CG6', 'PrestasiKelas', 'CG', 2, 1.5),
('GP1', 'Penampilan', 'GP', 1, 1),
('GP2', 'Ketenangan', 'GP', 1, 1),
('GP3', 'Musikalisasi', 'GP', 1, 1),
('GP4', 'PemahamanTempo', 'GP', 1, 2),
('GP5', 'BarisBerbaris', 'GP', 1, 1),
('GP6', 'Postur', 'GP', 1, 2),
('GP7', 'PrestasiKelas', 'GP', 2, 1),
('GP8', 'Kelas', 'GP', 2, 1),
('PT1', 'Musikalisasi', 'PT', 1, 2),
('PT2', 'CepatTanggap', 'PT', 1, 2),
('PT3', 'Stamina', 'PT', 1, 2),
('PT4', 'PosturTubuh', 'PT', 1, 1),
('PT5', 'PrestasiKelas', 'PT', 2, 1.5),
('PT6', 'JarakRumah', 'PT', 2, 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `id_log` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `aktivitas` text NOT NULL,
  `tgl_aktivitas` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`id_log`, `id_user`, `aktivitas`, `tgl_aktivitas`) VALUES
(1, 1, 'Login', '2018-01-07 03:44:58'),
(2, 1, 'Menyunting informasi calon peserta Robin', '2018-01-07 04:48:26'),
(3, 1, 'Menyunting informasi admin Ichsan', '2018-01-07 04:56:37'),
(4, 1, 'Menambahkan admin Albert', '2018-01-07 05:09:22'),
(5, 1, 'Menambahkan admin Albert', '2018-01-07 05:10:08'),
(6, 1, 'Logout', '2018-01-07 05:12:44'),
(7, 2, 'Login', '2018-01-07 05:13:03'),
(8, 2, 'Logout', '2018-01-07 05:17:01'),
(9, 2, 'Login', '2018-01-07 05:30:36'),
(10, 2, 'Menambahkan calon peserta Jane', '2018-01-07 06:44:18'),
(11, 2, 'Menghapus calon peserta', '2018-01-07 06:46:46'),
(12, 2, 'Menyunting informasi calon peserta Dias', '2018-01-07 06:59:52'),
(13, 2, 'Menyunting informasi calon peserta Dias', '2018-01-07 07:00:29'),
(14, 2, 'Logout', '2018-01-07 07:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penilaian` int(10) NOT NULL,
  `id_rekrutmen` int(5) NOT NULL,
  `id_kriteria` varchar(5) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_penilaian`, `id_rekrutmen`, `id_kriteria`, `nilai`) VALUES
(7, 19, 'BR1', 8),
(8, 19, 'BR2', 8),
(9, 19, 'BR3', 6),
(10, 19, 'BR4', 9),
(11, 19, 'BR5', 7),
(12, 19, 'BR6', 8),
(13, 21, 'BR1', 6),
(14, 21, 'BR2', 5),
(15, 21, 'BR3', 6),
(16, 21, 'BR4', 5),
(17, 21, 'BR5', 5),
(18, 21, 'BR6', 6),
(19, 24, 'BR1', 8),
(20, 24, 'BR2', 6),
(21, 24, 'BR3', 6),
(22, 24, 'BR4', 6),
(23, 24, 'BR5', 6),
(24, 24, 'BR6', 8),
(25, 26, 'BR1', 7),
(26, 26, 'BR2', 8),
(27, 26, 'BR3', 6),
(28, 26, 'BR4', 5),
(29, 26, 'BR5', 7),
(30, 26, 'BR6', 7),
(31, 4, 'GP1', 7),
(32, 4, 'GP2', 7),
(33, 4, 'GP3', 7),
(34, 4, 'GP4', 7),
(35, 4, 'GP5', 7),
(36, 4, 'GP6', 7),
(37, 4, 'GP7', 7),
(38, 4, 'GP8', 7),
(39, 11, 'GP1', 7),
(40, 11, 'GP2', 7),
(41, 11, 'GP3', 8),
(42, 11, 'GP4', 7),
(43, 11, 'GP5', 8),
(44, 11, 'GP6', 7),
(45, 11, 'GP7', 6),
(46, 11, 'GP8', 8),
(55, 15, 'GP1', 5),
(56, 15, 'GP2', 7),
(57, 15, 'GP3', 7),
(58, 15, 'GP4', 7),
(59, 15, 'GP5', 7),
(60, 15, 'GP6', 7),
(61, 15, 'GP7', 9),
(62, 15, 'GP8', 9),
(63, 17, 'GP1', 5),
(64, 17, 'GP2', 6),
(65, 17, 'GP3', 8),
(66, 17, 'GP4', 8),
(67, 17, 'GP5', 8),
(68, 17, 'GP6', 6),
(69, 17, 'GP7', 6),
(70, 17, 'GP8', 8),
(85, 12, 'GP1', 5),
(86, 12, 'GP2', 8),
(87, 12, 'GP3', 7),
(88, 12, 'GP4', 8),
(89, 12, 'GP5', 9),
(90, 12, 'GP6', 8),
(91, 12, 'GP7', 8),
(92, 12, 'GP8', 7),
(93, 2, 'BT1', 7),
(94, 2, 'BT2', 7),
(95, 2, 'BT3', 8),
(96, 2, 'BT4', 7),
(97, 2, 'BT5', 8),
(98, 2, 'BT6', 5),
(99, 7, 'BT1', 8),
(100, 7, 'BT2', 7),
(101, 7, 'BT3', 6),
(102, 7, 'BT4', 7),
(103, 7, 'BT5', 6),
(104, 7, 'BT6', 8),
(105, 8, 'BT1', 9),
(106, 8, 'BT2', 7),
(107, 8, 'BT3', 6),
(108, 8, 'BT4', 7),
(109, 8, 'BT5', 7),
(110, 8, 'BT6', 7),
(111, 20, 'BT1', 6),
(112, 20, 'BT2', 6),
(113, 20, 'BT3', 7),
(114, 20, 'BT4', 7),
(115, 20, 'BT5', 9),
(116, 20, 'BT6', 6),
(117, 22, 'BT1', 8),
(118, 22, 'BT2', 9),
(119, 22, 'BT3', 8),
(120, 22, 'BT4', 7),
(121, 22, 'BT5', 5),
(122, 22, 'BT6', 4),
(123, 5, 'PT1', 8),
(124, 5, 'PT2', 8),
(125, 5, 'PT3', 7),
(126, 5, 'PT4', 6),
(127, 5, 'PT5', 8),
(128, 5, 'PT6', 9),
(129, 14, 'PT1', 8),
(130, 14, 'PT2', 7),
(131, 14, 'PT3', 6),
(132, 14, 'PT4', 6),
(133, 14, 'PT5', 8),
(134, 14, 'PT6', 7),
(135, 16, 'PT1', 9),
(136, 16, 'PT2', 8),
(137, 16, 'PT3', 8),
(138, 16, 'PT4', 6),
(139, 16, 'PT5', 7),
(140, 16, 'PT6', 8),
(141, 18, 'PT1', 7),
(142, 18, 'PT2', 5),
(143, 18, 'PT3', 7),
(144, 18, 'PT4', 5),
(145, 18, 'PT5', 8),
(146, 18, 'PT6', 7),
(147, 23, 'PT1', 8),
(148, 23, 'PT2', 6),
(149, 23, 'PT3', 6),
(150, 23, 'PT4', 6),
(151, 23, 'PT5', 9),
(152, 23, 'PT6', 9),
(153, 3, 'CG1', 8),
(154, 3, 'CG2', 8),
(155, 3, 'CG3', 7),
(156, 3, 'CG4', 8),
(157, 3, 'CG5', 5),
(158, 3, 'CG6', 8),
(159, 9, 'CG1', 8),
(160, 9, 'CG2', 8),
(161, 9, 'CG3', 7),
(162, 9, 'CG4', 7),
(163, 9, 'CG5', 7),
(164, 9, 'CG6', 8),
(165, 10, 'CG1', 7),
(166, 10, 'CG2', 8),
(167, 10, 'CG3', 7),
(168, 10, 'CG4', 9),
(169, 10, 'CG5', 8),
(170, 10, 'CG6', 8),
(171, 13, 'CG1', 9),
(172, 13, 'CG2', 7),
(173, 13, 'CG3', 7),
(174, 13, 'CG4', 8),
(175, 13, 'CG5', 9),
(176, 13, 'CG6', 8),
(177, 25, 'CG1', 7),
(178, 25, 'CG2', 7),
(179, 25, 'CG3', 7),
(180, 25, 'CG4', 8),
(181, 25, 'CG5', 6),
(182, 25, 'CG6', 8),
(183, 29, 'GP1', 8),
(184, 29, 'GP2', 8),
(185, 29, 'GP3', 9),
(186, 29, 'GP4', 8),
(187, 29, 'GP5', 6),
(188, 29, 'GP6', 9),
(189, 29, 'GP7', 8),
(190, 29, 'GP8', 9),
(191, 32, 'GP1', 9),
(192, 32, 'GP2', 7),
(193, 32, 'GP3', 8),
(194, 32, 'GP4', 9),
(195, 32, 'GP5', 8),
(196, 32, 'GP6', 8),
(197, 32, 'GP7', 9),
(198, 32, 'GP8', 8),
(199, 34, 'GP1', 5),
(200, 34, 'GP2', 9),
(201, 34, 'GP3', 7),
(202, 34, 'GP4', 9),
(203, 34, 'GP5', 9),
(204, 34, 'GP6', 7),
(205, 34, 'GP7', 7),
(206, 34, 'GP8', 7),
(207, 37, 'GP1', 7),
(208, 37, 'GP2', 8),
(209, 37, 'GP3', 5),
(210, 37, 'GP4', 9),
(211, 37, 'GP5', 7),
(212, 37, 'GP6', 5),
(213, 37, 'GP7', 8),
(214, 37, 'GP8', 5),
(215, 52, 'GP1', 8),
(216, 52, 'GP2', 7),
(217, 52, 'GP3', 8),
(218, 52, 'GP4', 7),
(219, 52, 'GP5', 5),
(220, 52, 'GP6', 9),
(221, 52, 'GP7', 7),
(222, 52, 'GP8', 9),
(223, 6, 'BR1', 8),
(224, 6, 'BR2', 6),
(225, 6, 'BR3', 8),
(226, 6, 'BR4', 7),
(227, 6, 'BR5', 5),
(228, 6, 'BR6', 6),
(229, 31, 'BR1', 6),
(230, 31, 'BR2', 7),
(231, 31, 'BR3', 9),
(232, 31, 'BR4', 8),
(233, 31, 'BR5', 9),
(234, 31, 'BR6', 8),
(235, 38, 'BR1', 8),
(236, 38, 'BR2', 8),
(237, 38, 'BR3', 8),
(238, 38, 'BR4', 7),
(239, 38, 'BR5', 6),
(240, 38, 'BR6', 9),
(241, 40, 'BR1', 9),
(242, 40, 'BR2', 7),
(243, 40, 'BR3', 7),
(244, 40, 'BR4', 8),
(245, 40, 'BR5', 8),
(246, 40, 'BR6', 7),
(247, 42, 'BR1', 7),
(248, 42, 'BR2', 8),
(249, 42, 'BR3', 9),
(250, 42, 'BR4', 7),
(251, 42, 'BR5', 5),
(252, 42, 'BR6', 5),
(253, 44, 'BR1', 5),
(254, 44, 'BR2', 8),
(255, 44, 'BR3', 8),
(256, 44, 'BR4', 8),
(257, 44, 'BR5', 7),
(258, 44, 'BR6', 6),
(259, 33, 'BT1', 6),
(260, 33, 'BT2', 6),
(261, 33, 'BT3', 9),
(262, 33, 'BT4', 8),
(263, 33, 'BT5', 9),
(264, 33, 'BT6', 5),
(265, 43, 'BT1', 7),
(266, 43, 'BT2', 7),
(267, 43, 'BT3', 8),
(268, 43, 'BT4', 5),
(269, 43, 'BT5', 9),
(270, 43, 'BT6', 5),
(271, 46, 'BT1', 8),
(272, 46, 'BT2', 5),
(273, 46, 'BT3', 7),
(274, 46, 'BT4', 5),
(275, 46, 'BT5', 8),
(276, 46, 'BT6', 5),
(277, 48, 'BT1', 9),
(278, 48, 'BT2', 8),
(279, 48, 'BT3', 6),
(280, 48, 'BT4', 6),
(281, 48, 'BT5', 6),
(282, 48, 'BT6', 6),
(283, 50, 'BT1', 6),
(284, 50, 'BT2', 7),
(285, 50, 'BT3', 8),
(286, 50, 'BT4', 7),
(287, 50, 'BT5', 6),
(288, 50, 'BT6', 7),
(289, 41, 'PT1', 8),
(290, 41, 'PT2', 6),
(291, 41, 'PT3', 4),
(292, 41, 'PT4', 8),
(293, 41, 'PT5', 5),
(294, 41, 'PT6', 5),
(295, 45, 'PT1', 7),
(296, 45, 'PT2', 5),
(297, 45, 'PT3', 5),
(298, 45, 'PT4', 7),
(299, 45, 'PT5', 6),
(300, 45, 'PT6', 4),
(301, 49, 'PT1', 7),
(302, 49, 'PT2', 4),
(303, 49, 'PT3', 6),
(304, 49, 'PT4', 8),
(305, 49, 'PT5', 7),
(306, 49, 'PT6', 5),
(307, 53, 'PT1', 6),
(308, 53, 'PT2', 5),
(309, 53, 'PT3', 7),
(310, 53, 'PT4', 9),
(311, 53, 'PT5', 8),
(312, 53, 'PT6', 6),
(313, 55, 'PT1', 8),
(314, 55, 'PT2', 7),
(315, 55, 'PT3', 7),
(316, 55, 'PT4', 7),
(317, 55, 'PT5', 9),
(318, 55, 'PT6', 5),
(319, 36, 'CG1', 8),
(320, 36, 'CG2', 7),
(321, 36, 'CG3', 7),
(322, 36, 'CG4', 6),
(323, 36, 'CG5', 6),
(324, 36, 'CG6', 7),
(325, 39, 'CG1', 7),
(326, 39, 'CG2', 6),
(327, 39, 'CG3', 8),
(328, 39, 'CG4', 7),
(329, 39, 'CG5', 7),
(330, 39, 'CG6', 7),
(331, 47, 'CG1', 6),
(332, 47, 'CG2', 5),
(333, 47, 'CG3', 6),
(334, 47, 'CG4', 6),
(335, 47, 'CG5', 5),
(336, 47, 'CG6', 7),
(337, 51, 'CG1', 7),
(338, 51, 'CG2', 7),
(339, 51, 'CG3', 5),
(340, 51, 'CG4', 7),
(341, 51, 'CG5', 7),
(342, 51, 'CG6', 8),
(343, 54, 'CG1', 7),
(344, 54, 'CG2', 6),
(345, 54, 'CG3', 6),
(346, 54, 'CG4', 8),
(347, 54, 'CG5', 8),
(348, 54, 'CG6', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(7) NOT NULL,
  `nama_peserta` varchar(40) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `no_absen` int(3) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `nama_peserta`, `kelas`, `no_absen`, `tanggal_lahir`) VALUES
(1, 'Ahmad Maulana', '5A', 12, '2015-09-22'),
(2, 'Robin', '4B', 34, '2007-02-14'),
(3, 'Andi', '5C', 23, '2017-10-30'),
(4, 'Dias', '5A', 13, '2017-05-08'),
(5, 'Bagus', '5A', 5, '2006-10-31'),
(6, 'Ridlo', '5A', 25, '2007-11-01'),
(7, 'Razak', '6A', 10, '2005-01-04'),
(8, 'Rois', '6B', 20, '2006-06-01'),
(9, 'Puji', '5C', 30, '2007-11-06'),
(10, 'Rigel', '6A', 24, '2006-11-07'),
(11, 'Ma\'ruf', '6B', 17, '2005-11-01'),
(12, 'Syaiful', '4A', 32, '2005-03-05'),
(13, 'Rahman', '5A', 24, '2006-11-01'),
(14, 'Akbar', '6A', 3, '2005-01-03'),
(15, 'Novsa', '5A', 17, '2008-02-08'),
(16, 'Rigelum', '5A', 20, '2012-04-11'),
(17, 'Abdul', '5A', 20, '2006-02-08'),
(18, 'Somad', '6B', 24, '2005-12-14'),
(19, 'Somad', '5A', 10, '2006-12-14'),
(20, 'Minal', '5A', 14, '2006-12-14'),
(21, 'Rohim', '4A', 26, '2006-12-14'),
(22, 'Icha', '4A', 16, '2006-12-14'),
(23, 'Sodik', '5A', 25, '2007-03-09'),
(24, 'Aini', '5A', 13, '2005-12-14'),
(25, 'Momo', '4B', 21, '2006-12-15'),
(26, 'Fita', '6B', 15, '2005-12-14'),
(27, 'Abu', '5A', 16, '2007-12-15'),
(28, 'Faiq', '5C', 15, '2005-12-14'),
(29, 'Rina', '4A', 17, '2005-12-14'),
(30, 'Rohim', '4B', 16, '2007-12-14'),
(31, 'Jannah', '5A', 15, '2005-12-14'),
(32, 'Ainul', '5A', 17, '2007-01-04'),
(33, 'Ainul', '5A', 17, '2007-01-04'),
(34, 'Ainul', '4B', 21, '2005-01-04'),
(35, 'Abcd', '5A', 12, '2008-01-04'),
(36, 'Jane', '5A', 32, '2008-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_posisi`
--

CREATE TABLE `tb_posisi` (
  `id_posisi` varchar(4) NOT NULL,
  `nama_posisi` varchar(35) NOT NULL,
  `deskripsi_posisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_posisi`
--

INSERT INTO `tb_posisi` (`id_posisi`, `nama_posisi`, `deskripsi_posisi`) VALUES
('BR', 'Brassline', 'Brassline adalah'),
('BT', 'Battery', 'Battery adalah '),
('CG', 'Colour Guard', 'Colour Guard adalah'),
('GP', 'GitaPati', 'Gita Pati adalah'),
('PT', 'Pit Instrument', 'Pit Instrument adalah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekrutmen`
--

CREATE TABLE `tb_rekrutmen` (
  `id_rekrutmen` int(5) NOT NULL,
  `id_angkatan` int(5) NOT NULL,
  `id_posisi` varchar(4) NOT NULL,
  `id_peserta` int(7) DEFAULT NULL,
  `submitter` text NOT NULL,
  `skor` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekrutmen`
--

INSERT INTO `tb_rekrutmen` (`id_rekrutmen`, `id_angkatan`, `id_posisi`, `id_peserta`, `submitter`, `skor`) VALUES
(2, 1, 'BT', 2, '', 8.15139),
(3, 1, 'CG', 2, '', 8.99306),
(4, 1, 'GP', 3, '', 7.79365),
(5, 1, 'PT', 3, '', 7.79861),
(6, 1, 'BR', 4, '', 8.63889),
(7, 1, 'BT', 4, '', 7.63889),
(8, 1, 'BT', 5, '', 7.96429),
(9, 1, 'CG', 5, '', 8.54067),
(10, 1, 'CG', 6, '', 8.50694),
(11, 1, 'GP', 6, '', 8.06944),
(12, 1, 'GP', 7, '', 8.24206),
(13, 1, 'CG', 8, '', 8.57639),
(14, 1, 'PT', 8, '', 7.48909),
(15, 1, 'GP', 9, '', 7.22222),
(16, 1, 'PT', 9, '', 8.4881),
(17, 1, 'GP', 10, '', 7.73611),
(18, 1, 'PT', 10, '', 6.90575),
(19, 1, 'BR', 11, '', 8.14385),
(20, 1, 'BT', 11, '', 7.25),
(21, 1, 'BR', 12, '', 7.38889),
(22, 1, 'BT', 13, '', 9.25),
(23, 1, 'PT', 13, '', 6.94444),
(24, 1, 'BR', 14, '', 7.54861),
(25, 1, 'CG', 14, '', 8.29861),
(26, 1, 'BR', 15, '', 7.61111),
(29, 1, 'GP', 17, '', 8.52778),
(31, 1, 'BR', 19, '', 7.52083),
(32, 1, 'GP', 19, '', 8.625),
(33, 1, 'BT', 20, '', 8.14444),
(34, 1, 'GP', 20, '', 8.46032),
(36, 1, 'CG', 22, '', 8.40377),
(37, 1, 'GP', 22, '', 7.86111),
(38, 1, 'BR', 23, '', 8.38889),
(39, 1, 'CG', 23, '', 8.11111),
(40, 1, 'BR', 24, '', 8.12698),
(41, 1, 'PT', 24, '', 7.86667),
(42, 1, 'BR', 25, '', 9.33333),
(43, 1, 'BT', 25, '', 7.61667),
(44, 1, 'BR', 26, '', 8.0119),
(45, 1, 'PT', 26, '', 7.58333),
(46, 1, 'BT', 27, '', 7.37361),
(47, 1, 'CG', 27, '', 7.32738),
(48, 1, 'BT', 28, '', 8.08333),
(49, 1, 'PT', 28, '', 7.21587),
(50, 1, 'BT', 29, '', 7.63492),
(51, 1, 'CG', 29, '', 7.6379),
(52, 1, 'GP', 30, '', 8.07936),
(53, 1, 'PT', 30, '', 7.27083),
(54, 1, 'CG', 31, '', 8.02778),
(55, 1, 'PT', 31, '', 8.08889);

-- --------------------------------------------------------

--
-- Table structure for table `tb_requires`
--

CREATE TABLE `tb_requires` (
  `id_require` int(5) NOT NULL,
  `id_angkatan` int(5) NOT NULL,
  `id_posisi` varchar(4) NOT NULL,
  `jumlah_require` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_requires`
--

INSERT INTO `tb_requires` (`id_require`, `id_angkatan`, `id_posisi`, `jumlah_require`) VALUES
(1, 1, 'BR', 5),
(2, 1, 'BT', 5),
(3, 1, 'CG', 6),
(4, 1, 'GP', 5),
(5, 1, 'PT', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `nama` text NOT NULL,
  `role` text,
  `email` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `role`, `email`, `alamat`, `password`, `id_akses`) VALUES
(1, 'Ichsan', '', 'ahmadichsank@gmail.com', 'Jl. Jawa VII', 'admin', 1),
(2, 'Albert', 'BR', 'albert@gmail.com', 'Jember', 'pelatih', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_penilaian` (`id_rekrutmen`);

--
-- Indexes for table `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `tb_jeniskriteria`
--
ALTER TABLE `tb_jeniskriteria`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_posisi` (`id_posisi`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_rekrutmen` (`id_rekrutmen`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tb_posisi`
--
ALTER TABLE `tb_posisi`
  ADD PRIMARY KEY (`id_posisi`);

--
-- Indexes for table `tb_rekrutmen`
--
ALTER TABLE `tb_rekrutmen`
  ADD PRIMARY KEY (`id_rekrutmen`),
  ADD KEY `id_angkatan` (`id_angkatan`),
  ADD KEY `id_posisi` (`id_posisi`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `tb_requires`
--
ALTER TABLE `tb_requires`
  ADD PRIMARY KEY (`id_require`),
  ADD KEY `id_angkatan` (`id_angkatan`),
  ADD KEY `id_angkatan_2` (`id_angkatan`),
  ADD KEY `id_posisi` (`id_posisi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id hak akses` (`id_akses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  MODIFY `id_angkatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jeniskriteria`
--
ALTER TABLE `tb_jeniskriteria`
  MODIFY `id_jenis` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id_log` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_rekrutmen`
--
ALTER TABLE `tb_rekrutmen`
  MODIFY `id_rekrutmen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tb_requires`
--
ALTER TABLE `tb_requires`
  MODIFY `id_require` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD CONSTRAINT `tb_kriteria_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jeniskriteria` (`id_jenis`);

--
-- Constraints for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD CONSTRAINT `tb_log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_rekrutmen`
--
ALTER TABLE `tb_rekrutmen`
  ADD CONSTRAINT `tb_rekrutmen_ibfk_1` FOREIGN KEY (`id_angkatan`) REFERENCES `tb_angkatan` (`id_angkatan`),
  ADD CONSTRAINT `tb_rekrutmen_ibfk_2` FOREIGN KEY (`id_peserta`) REFERENCES `tb_peserta` (`id_peserta`),
  ADD CONSTRAINT `tb_rekrutmen_ibfk_3` FOREIGN KEY (`id_posisi`) REFERENCES `tb_posisi` (`id_posisi`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `tb_akses` (`id_akses`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
