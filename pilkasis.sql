-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2019 pada 08.34
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pilkasis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapemilihan`
--

CREATE TABLE `datapemilihan` (
  `idpemilihan` int(5) NOT NULL,
  `tipe` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `idpemilih` varchar(9) COLLATE latin1_general_ci DEFAULT NULL,
  `idkandidat` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `datapemilihan`
--

INSERT INTO `datapemilihan` (`idpemilihan`, `tipe`, `idpemilih`, `idkandidat`, `waktu`) VALUES
(7, 'Siswa', '123456789', '1', '2019-05-28 06:00:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(9) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `mengajar` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `memilih` varchar(1) NOT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'T',
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `idkandidat` int(2) NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nokandidat` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `jumlahsuara` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `visi` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `misi` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','T') COLLATE latin1_general_ci NOT NULL DEFAULT 'T',
  `foto` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`idkandidat`, `username`, `password`, `nama`, `nokandidat`, `jumlahsuara`, `visi`, `misi`, `aktif`, `foto`) VALUES
(1, 'owo', 'ac9b4e0b6a21758534db2a6324d34a54', 'Prabowo Sandi', '2', '', 'Mejadikan RW 16 sebagai RW paling SOLID', '<ol><li>Tahun ini harus haji semua warganya</li><li>\r\nMenjadikan bla..bla...</li><li>\r\njadinya hahahaha</li><li>\r\napa yah</li><li>\r\nbukan deh</li></ol>', 'Y', '02.jpg'),
(2, 'owi', '30ae43ad1aa0a416699051b73a3dfcf6', 'Joko Amin', '1', '', 'Menjadikan RW 16 sebagai RW paling EKSIS', '<ol><li>Membuat pengajian rutin</li><li>\r\nMengundang pembicara kaliber internasional per 3 bulan ke acara RW</li><li>lain-lain</li></ol>', 'Y', '01.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(2) NOT NULL,
  `kelas` varchar(7) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`idkelas`, `kelas`, `jumlah`) VALUES
(7, '01', 25),
(8, '02', 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hakakses` varchar(15) NOT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'T',
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `username`, `password`, `nama`, `jabatan`, `hp`, `email`, `hakakses`, `aktif`, `foto`) VALUES
(16, 'dimas', '7d49e40f4b3d8f68c19406a58303f826', 'dimas pratama', 'ADMIN', '089604563770', 'csds@gmail.com', 'Admin', 'Y', 'index.jpg'),
(17, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin admin', 'ADMIN', '03456765432', 'doasd@gmail.com', 'Admin', 'Y', '2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(9) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tanggallahir` date NOT NULL,
  `idkelas` varchar(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'T',
  `memilih` varchar(1) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `username`, `password`, `nama`, `jk`, `tempatlahir`, `tanggallahir`, `idkelas`, `email`, `hp`, `aktif`, `memilih`, `foto`) VALUES
('116', 'dimas', '12345', 'dimas', 'L', 'sssssss', '2019-05-03', '2', 'muhidinsaimin@gmail.com', '0002', 'Y', '', 'muh.jpg'),
('123456789', 'warga1', 'de6e8d19a4c315b73b6784f1f69471c1', 'WARGA TEST', 'L', 'bandung', '2003-05-28', '7', '92sj@gmail.com', '099887665', 'Y', '', '2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapemilihan`
--
ALTER TABLE `datapemilihan`
  ADD PRIMARY KEY (`idpemilihan`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`idkandidat`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `pengguna` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapemilihan`
--
ALTER TABLE `datapemilihan`
  MODIFY `idpemilihan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `idkandidat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idpengguna` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
