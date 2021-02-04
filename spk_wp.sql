-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2020 pada 15.15
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_wp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_alternatif`
--

CREATE TABLE `wp_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `kode_alternatif` varchar(10) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `vektor_s` float NOT NULL,
  `vektor_v` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_alternatif`
--

INSERT INTO `wp_alternatif` (`id_alternatif`, `kode_alternatif`, `nama_alternatif`, `vektor_s`, `vektor_v`) VALUES
(70, 'A1', 'Parasman Psb', 1, 0.114879),
(71, 'A2', 'Sartono Hth', 0.896925, 0.103038),
(72, 'A3', 'Hulman Lubis', 0.704774, 0.0809637),
(73, 'A4', 'Ferdinan Tbn', 1, 0.114879),
(74, 'A5', 'Pardamean P', 0.931913, 0.107057),
(75, 'A6', 'Jardiman Hth', 0.704774, 0.0809637),
(76, 'A7', 'Wilmar S ', 0.894895, 0.102805),
(77, 'A8', 'Binsar Pardosi', 0.785767, 0.0902681),
(78, 'A9', 'Hendra lubis', 1, 0.114879),
(79, 'A10', 'Marta marbun', 0.785767, 0.0902681);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_bobot`
--

CREATE TABLE `wp_bobot` (
  `id_kriteria` int(11) NOT NULL,
  `nilai_bobot` double NOT NULL,
  `hasil_bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_bobot`
--

INSERT INTO `wp_bobot` (`id_kriteria`, `nilai_bobot`, `hasil_bobot`) VALUES
(27, 1, 0.21739130434783),
(28, 0.8, 0.17391304347826),
(29, 1, 0.21739130434783),
(30, 0.8, 0.17391304347826),
(31, 1, 0.21739130434783);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_kriteria`
--

CREATE TABLE `wp_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe_kriteria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_kriteria`
--

INSERT INTO `wp_kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `tipe_kriteria`) VALUES
(27, '', 'WNI', 'benefit'),
(28, '', 'Penghasilan dibawah UMK', 'cost'),
(29, '', 'Sudah Berkeluarga', 'benefit'),
(30, '', 'Meguasai Tanah', 'benefit'),
(31, '', 'Memiliki Rumah Tidak Layak', 'benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_nilai`
--

CREATE TABLE `wp_nilai` (
  `id_nilai` int(6) NOT NULL,
  `ket_nilai` varchar(45) NOT NULL,
  `jum_nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_nilai`
--

INSERT INTO `wp_nilai` (`id_nilai`, `ket_nilai`, `jum_nilai`) VALUES
(8, 'Sangat Baik', 1),
(9, 'Baik', 0.8),
(10, 'Cukup', 0.6),
(11, 'Sedang', 0.4),
(12, 'Rendah', 0.2),
(13, 'Sangat Rendah', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_pengguna`
--

CREATE TABLE `wp_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_pengguna`
--

INSERT INTO `wp_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Wasindo', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Jhosua', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_rangking`
--

CREATE TABLE `wp_rangking` (
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai_rangking` double NOT NULL,
  `nilai_normalisasi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_rangking`
--

INSERT INTO `wp_rangking` (`id_alternatif`, `id_kriteria`, `nilai_rangking`, `nilai_normalisasi`) VALUES
(70, 27, 1, 1),
(70, 28, 0.8, 1.0395704241712),
(70, 29, 1, 1),
(70, 30, 0.8, 0.961935792659),
(70, 31, 1, 1),
(71, 27, 1, 1),
(71, 28, 0.2, 1.323000476952),
(71, 29, 0.2, 0.7047742028957),
(71, 30, 0.8, 0.961935792659),
(71, 31, 1, 1),
(72, 27, 1, 1),
(72, 28, 0.8, 1.0395704241712),
(72, 29, 0.2, 0.7047742028957),
(72, 30, 0.8, 0.961935792659),
(72, 31, 1, 1),
(73, 27, 1, 1),
(73, 28, 0.8, 1.0395704241712),
(73, 29, 1, 1),
(73, 30, 0.8, 0.961935792659),
(73, 31, 1, 1),
(74, 27, 1, 1),
(74, 28, 0.6, 1.092904945619),
(74, 29, 1, 1),
(74, 30, 0.4, 0.85269367584001),
(74, 31, 1, 1),
(75, 27, 1, 1),
(75, 28, 0.8, 1.0395704241712),
(75, 29, 0.2, 0.7047742028957),
(75, 30, 0.8, 0.961935792659),
(75, 31, 1, 1),
(76, 27, 1, 1),
(76, 28, 0.8, 1.0395704241712),
(76, 29, 1, 1),
(76, 30, 0.8, 0.961935792659),
(76, 31, 0.6, 0.89489485447272),
(77, 27, 1, 1),
(77, 28, 0.8, 1.0395704241712),
(77, 29, 1, 1),
(77, 30, 0.2, 0.75585762622235),
(77, 31, 1, 1),
(78, 27, 1, 1),
(78, 28, 0.8, 1.0395704241712),
(78, 29, 1, 1),
(78, 30, 0.8, 0.961935792659),
(78, 31, 1, 1),
(79, 27, 1, 1),
(79, 28, 0.8, 1.0395704241712),
(79, 29, 1, 1),
(79, 30, 0.2, 0.75585762622235),
(79, 31, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `wp_alternatif`
--
ALTER TABLE `wp_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `wp_bobot`
--
ALTER TABLE `wp_bobot`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `wp_kriteria`
--
ALTER TABLE `wp_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `wp_nilai`
--
ALTER TABLE `wp_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `wp_pengguna`
--
ALTER TABLE `wp_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `wp_rangking`
--
ALTER TABLE `wp_rangking`
  ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `wp_alternatif`
--
ALTER TABLE `wp_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `wp_kriteria`
--
ALTER TABLE `wp_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `wp_nilai`
--
ALTER TABLE `wp_nilai`
  MODIFY `id_nilai` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `wp_pengguna`
--
ALTER TABLE `wp_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `wp_bobot`
--
ALTER TABLE `wp_bobot`
  ADD CONSTRAINT `wp_bobot_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `wp_kriteria` (`id_kriteria`);

--
-- Ketidakleluasaan untuk tabel `wp_rangking`
--
ALTER TABLE `wp_rangking`
  ADD CONSTRAINT `rangking_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `wp_alternatif` (`id_alternatif`),
  ADD CONSTRAINT `rangking_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `wp_kriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
wp_alternatif