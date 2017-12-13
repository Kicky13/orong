-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 08:04 PM
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
  `akses` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `akses`) VALUES
(1, 'admin'),
(2, 'latih');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(5) NOT NULL,
  `id_penilaian` int(10) NOT NULL
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
('BT5', 'JarakRumah', 'BT', 2, 5),
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
(7, 6, 'BR1', 7),
(8, 6, 'BR2', 7),
(9, 6, 'BR3', 7),
(10, 6, 'BR4', 7),
(11, 6, 'BR5', 7),
(12, 6, 'BR6', 7),
(13, 4, 'GP1', 7),
(14, 4, 'GP2', 7),
(15, 4, 'GP3', 7),
(16, 4, 'GP4', 7),
(17, 4, 'GP5', 7),
(18, 4, 'GP6', 7),
(19, 4, 'GP7', 7),
(20, 4, 'GP8', 7),
(21, 11, 'GP1', 7),
(22, 11, 'GP2', 8),
(23, 11, 'GP3', 7),
(24, 11, 'GP4', 8),
(25, 11, 'GP5', 7),
(26, 11, 'GP6', 7),
(27, 11, 'GP7', 6),
(28, 11, 'GP8', 8),
(29, 12, 'GP1', 8),
(30, 12, 'GP2', 9),
(31, 12, 'GP3', 8),
(32, 12, 'GP4', 7),
(33, 12, 'GP5', 8),
(34, 12, 'GP6', 5),
(35, 12, 'GP7', 8),
(36, 12, 'GP8', 7),
(37, 15, 'GP1', 7),
(38, 15, 'GP2', 7),
(39, 15, 'GP3', 7),
(40, 15, 'GP4', 7),
(41, 15, 'GP5', 7),
(42, 15, 'GP6', 5),
(43, 15, 'GP7', 9),
(44, 15, 'GP8', 9),
(45, 17, 'GP1', 6),
(46, 17, 'GP2', 8),
(47, 17, 'GP3', 8),
(48, 17, 'GP4', 8),
(49, 17, 'GP5', 6),
(50, 17, 'GP6', 5),
(51, 17, 'GP7', 6),
(52, 17, 'GP8', 8);

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
(2, 'Robin', '4B', 34, '2008-08-01'),
(3, 'Andi', '5C', 23, '2017-10-30'),
(4, 'Dias', '4D', 13, '2007-11-01'),
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
(15, 'Novsa', '5A', 17, '2008-02-08');

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
  `skor` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekrutmen`
--

INSERT INTO `tb_rekrutmen` (`id_rekrutmen`, `id_angkatan`, `id_posisi`, `id_peserta`, `skor`) VALUES
(2, 1, 'BT', 2, NULL),
(3, 1, 'CG', 2, NULL),
(4, 1, 'GP', 3, NULL),
(5, 1, 'PT', 3, NULL),
(6, 1, 'BR', 4, 10),
(7, 1, 'BT', 4, NULL),
(8, 1, 'BT', 5, NULL),
(9, 1, 'CG', 5, NULL),
(10, 1, 'CG', 6, NULL),
(11, 1, 'GP', 6, NULL),
(12, 1, 'GP', 7, NULL),
(13, 1, 'CG', 8, NULL),
(14, 1, 'PT', 8, NULL),
(15, 1, 'GP', 9, NULL),
(16, 1, 'PT', 9, NULL),
(17, 1, 'GP', 10, NULL),
(18, 1, 'PT', 10, NULL),
(19, 1, 'BR', 11, NULL),
(20, 1, 'BT', 11, NULL),
(21, 1, 'BR', 12, NULL),
(22, 1, 'BT', 13, NULL),
(23, 1, 'PT', 13, NULL),
(24, 1, 'BR', 14, NULL),
(25, 1, 'CG', 14, NULL),
(26, 1, 'BR', 15, NULL);

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
  `email` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `jumlah_akses_panduan` int(1) NOT NULL,
  `jenis_panduan` varchar(6) NOT NULL,
  `jumlah_akses_uji` int(1) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `alamat`, `jumlah_akses_panduan`, `jenis_panduan`, `jumlah_akses_uji`, `password`, `id_akses`) VALUES
(1, 'Ahmad Ichsanul Karim', 'ahmadichsank@gmail.com', 'Jl. Jawa VII', 0, '', 0, 'admin', 1);

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
  ADD KEY `id_penilaian` (`id_penilaian`);

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
-- AUTO_INCREMENT for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_rekrutmen`
--
ALTER TABLE `tb_rekrutmen`
  MODIFY `id_rekrutmen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_requires`
--
ALTER TABLE `tb_requires`
  MODIFY `id_require` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_penilaian` (`id_penilaian`);

--
-- Constraints for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD CONSTRAINT `tb_kriteria_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jeniskriteria` (`id_jenis`);

--
-- Constraints for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD CONSTRAINT `tb_penilaian_ibfk_2` FOREIGN KEY (`id_rekrutmen`) REFERENCES `tb_rekrutmen` (`id_rekrutmen`);

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
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `tb_akses` (`id_akses`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
