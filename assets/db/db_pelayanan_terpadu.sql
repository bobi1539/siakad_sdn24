-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Sep 2021 pada 17.27
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelayanan_terpadu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_dokumen`
--

CREATE TABLE `tabel_dokumen` (
  `kode_dokumen` int(11) NOT NULL,
  `nama_dokumen` varchar(100) NOT NULL,
  `syarat` varchar(100) NOT NULL,
  `lama_pembuatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_dokumen`
--

INSERT INTO `tabel_dokumen` (`kode_dokumen`, `nama_dokumen`, `syarat`, `lama_pembuatan`) VALUES
(1, 'SKTM', 'ktpkkdll', '20 hari'),
(2, 'SKmati 2', 'ktp 2', '22 hari'),
(4, 'SKmati 23', 'ktp 2', '22 hari'),
(6, 'surat keterangan domisili', 'ktp,kk,foto', '2 jam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_hasil`
--

CREATE TABLE `tabel_hasil` (
  `no_pengajuan` int(11) NOT NULL,
  `dokumen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jorong`
--

CREATE TABLE `tabel_jorong` (
  `kode_jorong` int(11) NOT NULL,
  `nama_jorong` varchar(100) NOT NULL,
  `kepala_jorong` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_jorong`
--

INSERT INTO `tabel_jorong` (`kode_jorong`, `nama_jorong`, `kepala_jorong`) VALUES
(1, 'jalikur', 'habib'),
(2, 'bukareh', 'tayab'),
(7, 'jalikur 2', 'tes'),
(8, 'pincuran', 'kevin'),
(10, 'Dangau Baru', 'Fauzi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_login`
--

CREATE TABLE `tabel_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nik_penduduk` varchar(100) NOT NULL,
  `no_pegawai` varchar(100) NOT NULL,
  `role_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_login`
--

INSERT INTO `tabel_login` (`username`, `password`, `nik_penduduk`, `no_pegawai`, `role_id`) VALUES
('admin', '$2y$10$00ls/BWGBFdd7kdMGSuipOsnCgzUUgHm/ccbp13DmE1uhODthFulC', '', 'x12345', 'admin'),
('fauzi', '$2y$10$d4POBsKINHuh/8tSvckH8OHwunWWx7fBFQNkKBUo4/MuMp6GJGmGi', '0987654321', '', 'user'),
('irpan', '$2y$10$djtfcl8vrieRczBwJWhCyur/OzCxtFW8D3rEjnWJySnNA0Q3SqxO6', '', 'abc1000', 'admin'),
('kevin', '$2y$10$MEjP.2unHTFrkQzEXIqpR.VaN/7TDHYOwkdjil72oT8hYD2Qv8dIC', '13161900000023', '', 'user'),
('otong', '$2y$10$PDspDpq0M9UGBumc4U4j9ez.VZKMPV/bR14HHVYQf2wd7nSLdlqEC', '123', '', 'user'),
('ucup', '$2y$10$0ESCx47Lnn2oJmNt3N55nuuof/VMKbbfLWnfVgkPw9CvcvfbYDr/W', '123456', '', 'user'),
('william', '$2y$10$MMyMxTztbSPgHEaR2f1TeeSQvpyeNQO2xzRf93KxAevrrbXcFCVwG', '', '0001', 'admin'),
('yuno', '$2y$10$xG9X5tw.khp5vJRzAl50cOmEh3aX2mOzDXopacwIppTxEYeWscPFC', '', '009', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pegawai`
--

CREATE TABLE `tabel_pegawai` (
  `no_pegawai` varchar(50) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_pegawai`
--

INSERT INTO `tabel_pegawai` (`no_pegawai`, `nama_pegawai`, `jabatan`, `jenis_kelamin`) VALUES
('0001', 'william', 'PENATA MADYA PELAYANAN', 'laki-laki'),
('009', 'titit', 'pegawai', 'laki-laki'),
('abc1000', 'irpan', '123', 'laki-laki'),
('x12345', 'habib mantap', 'staff', 'laki-laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penduduk`
--

CREATE TABLE `tabel_penduduk` (
  `nik_penduduk` varchar(50) NOT NULL,
  `nama_penduduk` varchar(100) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `kode_jorong` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_penduduk`
--

INSERT INTO `tabel_penduduk` (`nik_penduduk`, `nama_penduduk`, `no_kk`, `kode_jorong`, `tanggal_lahir`, `tempat`, `jenis_kelamin`, `pendidikan`, `alamat`) VALUES
('0987654321', 'Ji Mamen', '123456', 10, '2021-09-30', 'Jakarta', 'laki-laki', 'sma', 'bukittinggi'),
('123', 'otong surotong', '1234567890', 1, '1999-02-01', 'kamang magek', 'perempuan', 'sma tilkan', 'jalikua patanangan'),
('123456', 'ucup', '12313', 1, '2019-01-02', 'bkt', 'laki-laki', 'sma', 'jalan sudirman bukittinggi'),
('13161900000023', 'kevinding', '12345', 2, '2021-09-30', 'padang', 'laki-laki', 'sma 2', 'JALAN SUDIRMAN BUKITTINGGI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pengajuan`
--

CREATE TABLE `tabel_pengajuan` (
  `nik_penduduk` varchar(50) NOT NULL,
  `no_pengajuan` int(11) NOT NULL,
  `kode_dokumen` int(11) NOT NULL,
  `tanggal_pengajuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_dokumen`
--
ALTER TABLE `tabel_dokumen`
  ADD PRIMARY KEY (`kode_dokumen`);

--
-- Indeks untuk tabel `tabel_hasil`
--
ALTER TABLE `tabel_hasil`
  ADD PRIMARY KEY (`no_pengajuan`);

--
-- Indeks untuk tabel `tabel_jorong`
--
ALTER TABLE `tabel_jorong`
  ADD PRIMARY KEY (`kode_jorong`);

--
-- Indeks untuk tabel `tabel_login`
--
ALTER TABLE `tabel_login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tabel_pegawai`
--
ALTER TABLE `tabel_pegawai`
  ADD PRIMARY KEY (`no_pegawai`);

--
-- Indeks untuk tabel `tabel_penduduk`
--
ALTER TABLE `tabel_penduduk`
  ADD PRIMARY KEY (`nik_penduduk`);

--
-- Indeks untuk tabel `tabel_pengajuan`
--
ALTER TABLE `tabel_pengajuan`
  ADD PRIMARY KEY (`nik_penduduk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_dokumen`
--
ALTER TABLE `tabel_dokumen`
  MODIFY `kode_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tabel_jorong`
--
ALTER TABLE `tabel_jorong`
  MODIFY `kode_jorong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
