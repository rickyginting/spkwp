-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Des 2015 pada 05.19
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk_wp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_alternatif`
--

CREATE TABLE IF NOT EXISTS `wp_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `vektor_s` double NOT NULL,
  `vektor_v` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_alternatif`
--

INSERT INTO `wp_alternatif` (`id_alternatif`, `nama_alternatif`, `vektor_s`, `vektor_v`) VALUES
(9, 'Alternatif 1', 2.4187487548604487, 0.39263918827666),
(10, 'Alternatif 2', 1.2765180070092226, 0.20721912231912),
(11, 'Alternatif 3', 0.9258747122873014, 0.15029865948162),
(12, 'Alternatif 4', 0.656008049939845, 0.10649079103968),
(13, 'Alternatif 5', 0.8830831451806378, 0.14335223888292);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_bobot`
--

CREATE TABLE IF NOT EXISTS `wp_bobot` (
  `id_kriteria` int(11) NOT NULL,
  `nilai_bobot` double NOT NULL,
  `hasil_bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_bobot`
--

INSERT INTO `wp_bobot` (`id_kriteria`, `nilai_bobot`, `hasil_bobot`) VALUES
(27, 5, 0.27777777777778),
(28, 3, 0.16666666666667),
(29, 4, 0.22222222222222),
(30, 4, 0.22222222222222),
(31, 2, 0.11111111111111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_kriteria`
--

CREATE TABLE IF NOT EXISTS `wp_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe_kriteria` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_kriteria`
--

INSERT INTO `wp_kriteria` (`id_kriteria`, `nama_kriteria`, `tipe_kriteria`) VALUES
(27, 'Kriteria 1', 'cost'),
(28, 'Kriteria 2', 'benefit'),
(29, 'Kriteria 3', 'cost'),
(30, 'Kriteria 4', 'benefit'),
(31, 'Kriteria 5', 'cost');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_nilai`
--

CREATE TABLE IF NOT EXISTS `wp_nilai` (
  `id_nilai` int(6) NOT NULL,
  `ket_nilai` varchar(45) NOT NULL,
  `jum_nilai` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_nilai`
--

INSERT INTO `wp_nilai` (`id_nilai`, `ket_nilai`, `jum_nilai`) VALUES
(8, 'Sangat Baik', 5),
(9, 'Baik', 4),
(10, 'Cukup', 3),
(11, 'Buruk', 2),
(12, 'Sangat Buruk', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_pengguna`
--

CREATE TABLE IF NOT EXISTS `wp_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_pengguna`
--

INSERT INTO `wp_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'T Ghazali', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Samudra Wolf', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_rangking`
--

CREATE TABLE IF NOT EXISTS `wp_rangking` (
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai_rangking` double NOT NULL,
  `nilai_normalisasi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_rangking`
--

INSERT INTO `wp_rangking` (`id_alternatif`, `id_kriteria`, `nilai_rangking`, `nilai_normalisasi`) VALUES
(9, 27, 0.75, 1.0831914033433),
(9, 28, 2000, 3.5495366597557),
(9, 29, 18, 0.52607850144555),
(9, 30, 50, 2.3853323044733),
(9, 31, 500, 0.50131932236773),
(10, 27, 1, 1),
(10, 28, 4, 1.2599210498949),
(10, 29, 2, 0.85724398285307),
(10, 30, 3, 1.2765180070092),
(10, 31, 2, 0.92587471228729),
(11, 27, 2, 0.8248605943353),
(11, 28, 2, 1.1224620483094),
(11, 29, 5, 0.69931578676557),
(11, 30, 5, 1.4299691483087),
(11, 31, 1, 1),
(12, 27, 5, 0.63950164426916),
(12, 28, 5, 1.3076604860118),
(12, 29, 4, 0.7348672461378),
(12, 30, 3, 1.2765180070092),
(12, 31, 5, 0.83625103095038),
(13, 27, 2, 0.8248605943353),
(13, 28, 3, 1.200936955176),
(13, 29, 3, 0.78338103693727),
(13, 30, 4, 1.3607900001744),
(13, 31, 5, 0.83625103095038);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_alternatif`
--
ALTER TABLE `wp_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `wp_bobot`
--
ALTER TABLE `wp_bobot`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `wp_kriteria`
--
ALTER TABLE `wp_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `wp_nilai`
--
ALTER TABLE `wp_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `wp_pengguna`
--
ALTER TABLE `wp_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `wp_rangking`
--
ALTER TABLE `wp_rangking`
  ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`), ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_alternatif`
--
ALTER TABLE `wp_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `wp_kriteria`
--
ALTER TABLE `wp_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `wp_nilai`
--
ALTER TABLE `wp_nilai`
  MODIFY `id_nilai` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `wp_pengguna`
--
ALTER TABLE `wp_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
