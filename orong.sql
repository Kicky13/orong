-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 06:35 AM
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
  `id_kriteria` int(5) NOT NULL,
  `nama_kriteria` varchar(35) NOT NULL,
  `id_posisi` varchar(5) NOT NULL,
  `id_jenis` int(3) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `nama_kriteria`, `id_posisi`, `id_jenis`, `bobot`) VALUES
(1, 'Postur', 'GP', 1, 20),
(2, 'BarisBerbaris', 'GP', 1, 10),
(3, 'PemahamanTempo', 'GP', 1, 20),
(4, 'Musikalisasi', 'GP', 1, 10),
(5, 'Ketenangan', 'GP', 1, 10),
(6, 'Penampilan', 'GP', 1, 10),
(7, 'PrestasiKelas', 'GP', 2, 10),
(8, 'Kelas', 'GP', 2, 10),
(9, 'Musikalisasi', 'BR', 1, 20),
(10, 'KekuatanNafas', 'BR', 1, 20),
(11, 'CepatTanggap', 'BR', 1, 15),
(12, 'BarisBerbaris', 'BR', 1, 10),
(13, 'JarakRumah', 'BR', 2, 20),
(14, 'PrestasiKelas', 'BR', 2, 15),
(15, 'PemahamanTempo', 'BT', 1, 25),
(16, 'PosturTubuh', 'BT', 1, 20),
(17, 'Stamina', 'BT', 1, 20),
(18, 'Ketenangan', 'BT', 1, 15),
(19, 'PrestasiKelas', 'BT', 2, 15),
(20, 'JarakRumah', 'BT', 2, 5),
(21, 'Musikalisasi', 'PT', 1, 20),
(22, 'CepatTanggap', 'PT', 1, 20),
(23, 'Stamina', 'PT', 1, 20),
(24, 'PosturTubuh', 'PT', 1, 10),
(25, 'PrestasiKelas', 'PT', 2, 15),
(26, 'JarakRumah', 'PT', 2, 15),
(27, 'KelincahanTubuh', 'CG', 1, 20),
(28, 'PosturTubuh', 'CG', 1, 15),
(29, 'Ketenangan', 'CG', 1, 15),
(30, 'Stamina', 'CG', 1, 25),
(31, 'PrestasiKelas', 'CG', 2, 15),
(32, 'JarakRumah', 'CG', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penilaian` int(10) NOT NULL,
  `id_rekrutmen` int(5) NOT NULL,
  `id_kriteria` int(5) NOT NULL,
  `total_penilaian` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(1) NOT NULL,
  `nama_peserta` varchar(40) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `no_absen` int(3) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `nama_peserta`, `kelas`, `no_absen`, `tanggal_lahir`) VALUES
(1, 'Ahmad Maulana', '5A', 12, '2015-09-22');

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
  `id_peserta` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_rekrutmen`
--
ALTER TABLE `tb_rekrutmen`
  MODIFY `id_rekrutmen` int(5) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `tb_penilaian_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `tb_kriteria` (`id_kriteria`),
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
