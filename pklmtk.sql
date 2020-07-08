-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2020 pada 13.31
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Id_admin` varchar(30) NOT NULL,
  `Nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Id_admin`, `Nama_admin`) VALUES
('0000000', 'admin1'),
('0000001', 'admin2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `NIP` varchar(30) NOT NULL,
  `Nama_dosen` varchar(100) NOT NULL,
  `Status_jabatan` varchar(20) NOT NULL,
  `Jenis_kelamin` char(1) NOT NULL,
  `Tempat_lahir` varchar(20) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_hp` char(15) NOT NULL,
  `Foto` varchar(20) NOT NULL,
  `Bidang_kajian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`NIP`, `Nama_dosen`, `Status_jabatan`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Alamat`, `No_hp`, `Foto`, `Bidang_kajian`) VALUES
('100200300400', 'dosen1', 'statistika', 'p', 'Malang', '2020-07-01', 'Malang', '085331290605', '100200300400.jpg', ''),
('200800700600', 'dosen2', 'ALJABAR', 'L', 'Banyuwangi', '2020-07-02', 'Banyuwangi', '085331290605', '200800700600.jpg', ''),
('300900800200', 'dosen3', 'komputasi', 'L', 'Malang', '2020-07-03', 'Malang', '085331290605', '300900800200.png', ''),
('400300800700', 'dosen4', '', 'L', 'Malang', '2020-07-04', 'JAKARTA', '085331290605', '400300800700.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(30) NOT NULL,
  `Nama_mahasiswa` varchar(100) NOT NULL,
  `Jenis_kelamin` char(1) NOT NULL,
  `Tempat_lahir` varchar(20) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_hp` char(15) NOT NULL,
  `Foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama_mahasiswa`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Alamat`, `No_hp`, `Foto`) VALUES
('17610010', 'mahasiswa1', 'p', 'Malang', '2020-07-01', 'Malang', '085331290605', '17610010.png'),
('17610040', 'mahasiswa4', 'L', 'Jakarta', '2020-07-04', 'Surabaya', '085331290605', '17610040.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `Id_role` char(20) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`Id_role`, `Role`) VALUES
('1', 'admin'),
('2', 'dosen'),
('3', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`Username`, `Email`, `Password`, `Role`, `Status`, `Last_login`) VALUES
('0000000', 'admin1@gmail.com', 'admin1', '1', 'aktif', '2020-07-05'),
('0000001', 'admin2@gmail.com', 'admin2', '1', 'aktif', '2020-07-03'),
('0000003', 'admin3@gmail.com', 'admin3', '1', 'aktif', '2020-07-04'),
('0000004', 'admin4@gmail.com', 'admin4', '1', 'aktif', '2020-07-04'),
('100200300400', 'dosen1@gmail.com', 'dosen1', '2', 'aktif', '2020-07-03'),
('17610010', 'mahasiswa1@gmail.com', 'mahasiswa1', '3', 'aktif', '2020-07-03'),
('17610020', 'mahasiswa2@gmail.com', 'mahasiswa2', '3', 'tidak aktif', '2020-07-03'),
('17610030', 'mahasiswa3@gmail.com', 'mahasiswa3', '3', 'tidak aktif', '2020-07-03'),
('17610040', 'mahasiswa4@gmail.com', 'mahasiswa4', '3', 'aktif', '2020-07-05'),
('17610050', 'mahasiswa5@gmail.com', 'mahasiswa5', '3', 'aktif', '2020-07-04'),
('200800700600', 'dosen2@gmail.com', 'dosen2', '2', 'aktif', '2020-07-03'),
('300900800200', 'dosen3@gmail.com', 'dosen3', '2', 'aktif', '2020-07-03'),
('400300800700', 'dosen4@gmail.com', 'dosen4', '2', 'aktif', '2020-07-03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `Id_admin` (`Id_admin`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD UNIQUE KEY `NIP` (`NIP`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD UNIQUE KEY `NIM` (`NIM`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id_role`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `Role` (`Role`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Role`) REFERENCES `roles` (`Id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
