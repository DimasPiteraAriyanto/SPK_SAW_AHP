-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2022 pada 04.41
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkrtlh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `nik` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `kit1` int(11) NOT NULL,
  `kit2` int(11) NOT NULL,
  `kit3` int(11) NOT NULL,
  `kit4` int(11) NOT NULL,
  `kit5` int(11) NOT NULL,
  `kit6` int(11) NOT NULL,
  `kit7` int(11) NOT NULL,
  `kit8` int(11) NOT NULL,
  `kit9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`nik`, `nama_alternatif`, `kit1`, `kit2`, `kit3`, `kit4`, `kit5`, `kit6`, `kit7`, `kit8`, `kit9`) VALUES
(2147483647, 'aaa', 3, 3, 3, 3, 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `id_namakriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kode`, `id_namakriteria`) VALUES
(5, 'K1', 1),
(7, 'K2', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_namakriteria`
--

CREATE TABLE `tb_namakriteria` (
  `id_namakriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_namakriteria`
--

INSERT INTO `tb_namakriteria` (`id_namakriteria`, `nama_kriteria`) VALUES
(1, 'K1 - Kondisi Lantai'),
(2, 'K2 - Kondisi Dinding'),
(3, 'K3 - Kondisi Atap'),
(4, 'K4 - Sumber Air'),
(5, 'K5 - Bahan Bakar Masak'),
(6, 'K6 - Fasilitas BAB'),
(7, 'K7 - Kendaraan'),
(8, 'K8 - Alat Elektronik'),
(9, 'K9 - Kendaraan Air');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_namanilaik`
--

CREATE TABLE `tb_namanilaik` (
  `id_namanilaik` int(11) NOT NULL,
  `nama_nilaik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_namanilaik`
--

INSERT INTO `tb_namanilaik` (`id_namanilaik`, `nama_nilaik`) VALUES
(1, 'Sama Penting Dengan'),
(2, 'Mendekati Sedikit Lebih Penting dari'),
(3, 'Sedikit Lebih Penting dari'),
(4, 'Mendekati Lebih Penting dari'),
(5, 'Lebih Penting dari'),
(6, 'Mendekati Sangat Penting dari'),
(7, 'Sangat Penting dari'),
(8, 'Mendekati Mutlak dari'),
(9, 'Mutlak Sangat Penting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilaikriteria`
--

CREATE TABLE `tb_nilaikriteria` (
  `id_nilaikri` int(11) NOT NULL,
  `id_namanilaik` int(11) DEFAULT NULL,
  `nilai_perbandingan` int(11) NOT NULL,
  `nilai_perbandingan2` float NOT NULL,
  `nilai_perbandingan3` float NOT NULL,
  `nilai_perbandingan4` float NOT NULL,
  `nilai_perbandingan5` float NOT NULL,
  `nilai_perbandingan6` float NOT NULL,
  `nilai_perbandingan7` float NOT NULL,
  `nilai_perbandingan8` float NOT NULL,
  `nilai_perbandingan9` float NOT NULL,
  `nilai_perbandingan10` float DEFAULT NULL,
  `nilai_perbandingan11` float DEFAULT NULL,
  `nilai_perbandingan12` float DEFAULT NULL,
  `nilai_perbandingan13` float DEFAULT NULL,
  `nilai_perbandingan14` float DEFAULT NULL,
  `nilai_perbandingan15` float DEFAULT NULL,
  `nilai_perbandingan16` float DEFAULT NULL,
  `nilai_perbandingan17` float DEFAULT NULL,
  `nilai_perbandingan18` float DEFAULT NULL,
  `nilai_perbandingan19` float DEFAULT NULL,
  `nilai_perbandingan20` float DEFAULT NULL,
  `nilai_perbandingan21` float DEFAULT NULL,
  `nilai_perbandingan22` float DEFAULT NULL,
  `nilai_perbandingan23` float DEFAULT NULL,
  `nilai_perbandingan24` float DEFAULT NULL,
  `nilai_perbandingan25` float DEFAULT NULL,
  `nilai_perbandingan26` float DEFAULT NULL,
  `nilai_perbandingan27` float DEFAULT NULL,
  `nilai_perbandingan28` float DEFAULT NULL,
  `nilai_perbandingan29` float DEFAULT NULL,
  `nilai_perbandingan30` float DEFAULT NULL,
  `nilai_perbandingan31` float DEFAULT NULL,
  `nilai_perbandingan32` float DEFAULT NULL,
  `nilai_perbandingan33` float DEFAULT NULL,
  `nilai_perbandingan34` float DEFAULT NULL,
  `nilai_perbandingan35` float DEFAULT NULL,
  `nilai_perbandingan36` float DEFAULT NULL,
  `nilai_perbandingan37` float DEFAULT NULL,
  `nilai_perbandingan38` float DEFAULT NULL,
  `nilai_perbandingan39` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilaikriteria`
--

INSERT INTO `tb_nilaikriteria` (`id_nilaikri`, `id_namanilaik`, `nilai_perbandingan`, `nilai_perbandingan2`, `nilai_perbandingan3`, `nilai_perbandingan4`, `nilai_perbandingan5`, `nilai_perbandingan6`, `nilai_perbandingan7`, `nilai_perbandingan8`, `nilai_perbandingan9`, `nilai_perbandingan10`, `nilai_perbandingan11`, `nilai_perbandingan12`, `nilai_perbandingan13`, `nilai_perbandingan14`, `nilai_perbandingan15`, `nilai_perbandingan16`, `nilai_perbandingan17`, `nilai_perbandingan18`, `nilai_perbandingan19`, `nilai_perbandingan20`, `nilai_perbandingan21`, `nilai_perbandingan22`, `nilai_perbandingan23`, `nilai_perbandingan24`, `nilai_perbandingan25`, `nilai_perbandingan26`, `nilai_perbandingan27`, `nilai_perbandingan28`, `nilai_perbandingan29`, `nilai_perbandingan30`, `nilai_perbandingan31`, `nilai_perbandingan32`, `nilai_perbandingan33`, `nilai_perbandingan34`, `nilai_perbandingan35`, `nilai_perbandingan36`, `nilai_perbandingan37`, `nilai_perbandingan38`, `nilai_perbandingan39`) VALUES
(1, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `nip` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`nip`, `username`, `password`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_namakriteria`
--
ALTER TABLE `tb_namakriteria`
  ADD PRIMARY KEY (`id_namakriteria`);

--
-- Indeks untuk tabel `tb_namanilaik`
--
ALTER TABLE `tb_namanilaik`
  ADD PRIMARY KEY (`id_namanilaik`);

--
-- Indeks untuk tabel `tb_nilaikriteria`
--
ALTER TABLE `tb_nilaikriteria`
  ADD PRIMARY KEY (`id_nilaikri`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_namakriteria`
--
ALTER TABLE `tb_namakriteria`
  MODIFY `id_namakriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_namanilaik`
--
ALTER TABLE `tb_namanilaik`
  MODIFY `id_namanilaik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_nilaikriteria`
--
ALTER TABLE `tb_nilaikriteria`
  MODIFY `id_nilaikri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
