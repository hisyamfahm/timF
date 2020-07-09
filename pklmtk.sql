-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 05:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pklmtk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_admin` varchar(30) NOT NULL,
  `Nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_admin`, `Nama_admin`) VALUES
('admin58', 'addMIN'),
('admin85', 'addMIN');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `Id_agenda` char(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `Tempat` varchar(30) NOT NULL,
  `Nama_agenda` varchar(100) NOT NULL,
  `Dari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `Id_berita` char(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `Judul` varchar(250) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Dokumen` varchar(250) NOT NULL,
  `Isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIP` varchar(30) NOT NULL,
  `Nama_dosen` varchar(100) NOT NULL,
  `Status_jabatan` varchar(20) NOT NULL,
  `Bidang_kajian` varchar(100) NOT NULL,
  `Jenis_kelamin` char(1) NOT NULL,
  `Tempat_lahir` varchar(20) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_hp` char(15) NOT NULL,
  `Foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `Nama_dosen`, `Status_jabatan`, `Bidang_kajian`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Alamat`, `No_hp`, `Foto`) VALUES
('1234567', 'dosen80', 'ketua jurusan', '', 'l', 'malang', '2020-07-09', 'malang', '098765432156', 'mahasiswa65.jpg'),
('dosen57', 'amelia subagyo', 'dosen', '', 'p', 'Banyuwangi', '2020-07-02', 'Banyuwangi', '085331290605', 'dosen57.png');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(30) NOT NULL,
  `Nama_mahasiswa` varchar(100) NOT NULL,
  `Jenis_kelamin` char(1) NOT NULL,
  `Tempat_lahir` varchar(20) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_hp` char(15) NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama_mahasiswa`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Alamat`, `No_hp`, `Foto`) VALUES
('mahasiswa56', 'amelia subagyo', 'p', 'Banyuwangi', '2020-06-20', 'MALANG', '085331290605', 'mahasiswa56.png'),
('mahasiswa65', 'Amelia Vega', 'p', 'Banyuwangi', '2020-06-04', 'Banyuwangi', '085331290605', 'mahasiswa65.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `Id_pengumuman` char(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `Judul` varchar(250) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Dokumen` varchar(250) NOT NULL,
  `Isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Id_role` char(20) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`Id_role`, `Role`) VALUES
('1', 'admin'),
('2', 'mahasiswa'),
('3', 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` char(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Email`, `Password`, `Role`, `Status`, `Last_login`) VALUES
('1234567', 'doseen@gmail.com', '17610080', '3', 'tidak aktif', '2020-07-01'),
('17610051', 'admin51@gmail.com', '17610051', '1', 'aktif', '2020-07-01'),
('17610056', 'example@gmail.com', '17610056', '2', 'tidak aktif', '2020-07-02'),
('admin58', 'admin@gmail.com', '17610058', '1', 'aktif', '2020-07-02'),
('admin85', 'admiiin@gmail.com', '17610085', '1', 'tidak aktif', '2020-07-01'),
('dosen57', 'dosen@gmail.com', '17610057', '3', 'aktif', '2020-07-02'),
('mahasiswa56', 'mahasiswa@gmail.com', '17610056', '2', 'aktif', '2020-07-02'),
('mahasiswa65', 'mhs@gmail.com', '17610065', '2', 'aktif', '2020-07-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `Id_admin` (`Id_admin`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`Id_berita`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD UNIQUE KEY `NIP` (`NIP`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD UNIQUE KEY `NIM` (`NIM`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`Id_pengumuman`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `Role` (`Role`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `pengumuman_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Role`) REFERENCES `roles` (`Id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
