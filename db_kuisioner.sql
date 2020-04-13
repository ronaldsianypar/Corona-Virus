-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Apr 2020 pada 13.36
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kuisioner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi`
--

CREATE TABLE IF NOT EXISTS `relasi` (
  `id_pertanyaan` int(2) NOT NULL,
  `id_penyakit` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi`
--

INSERT INTO `relasi` (`id_pertanyaan`, `id_penyakit`) VALUES
(1, 1),
(2, 1),
(3, 1),
(1, 2),
(2, 2),
(4, 2),
(1, 3),
(2, 3),
(5, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE IF NOT EXISTS `tb_pasien` (
  `id` int(4) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `umur` int(3) NOT NULL,
  `kelamin` enum('P','W') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id`, `nama`, `umur`, `kelamin`, `alamat`) VALUES
(97, 'Ronald Sianipar', 16, 'P', 'Bogor'),
(100, 'Munir', 43, 'P', 'Bogor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE IF NOT EXISTS `tb_pertanyaan` (
  `id_pertanyaan` int(2) NOT NULL,
  `pertanyaan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `pertanyaan`) VALUES
(1, 'Pergi Keluar Rumah'),
(2, 'Menggunakan Transaportasi Umum: Online, Angkot, Bus, Taksi, Kereta Api'),
(3, 'Tidak Memakai Masker Pada Saat Berkumpul Dengan Orang Lain'),
(4, 'Berjabat Tangan Dengan Orang Lain'),
(5, 'Tidak Membersihkan Tangan Dengan Hand Sanitizer / Tissue Basah Sebelum Pegang Kemudi Mobil / Motor'),
(6, 'Menyentuh Benda/Uang Yang Juga Disentuh Orang Lain'),
(7, 'Tidak Menjaga Jarak 1,5 Meter Dengan Orang Lain Ketika: Belanja, Bekerja, Belajar, Ibadah'),
(8, 'Makan Diluar Rumah(Warung/Restaurant)'),
(9, 'Tidak Minum Hangat & Cuci Tangan Dengan Sabun Setelah Tiba Di Tujuan'),
(10, 'Berada Di Wilayah Kelurahan Tempat Pasien Tertular'),
(11, 'Tidak Pasang Hand Sanitizer Di Depan Pintu Masuk, Untuk Kebersihan Tangan Sebelum Pegang Gagang(Handle)Pintu masuk rumah'),
(12, 'Tidak Mencuci Tangan Dengan Sabun Setelah Tiba Di Depan Rumah '),
(13, 'Tidak Menyediakan : Tissue Basah / Antiseptic, Masker, Sabun Antiseptic Bagi Keluarga Di Rumah'),
(14, 'Tidak Segera Merendam Baju & Celana Bekas Pakai Di Luar Rumah Kedalam Air Panas / Sabun'),
(15, 'Tidak Segera Mandi Keramas Setelah Tiba Di Rumah'),
(16, 'Tidak Mensosialisasi Check List Penilaian Resiko Pribadi Ini Kepada Keluarga Di Rumah'),
(17, 'Dalam Sehari Tidak Kena Cahaya Matahari Minimal 15 Menit '),
(18, 'Tidak Jalan Kaki/Berolahraga Minimal 30 Menit Setiap Hari'),
(19, 'Jarang Minum Vitamin C & E, Dan Kurang Tidur'),
(20, 'Usia diatas 60 tahun'),
(21, 'Mempunyai Penyakit : Jantung/Diabetes/Gangguan Pernapasan Kronik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `id_pertanyaan` int(2) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `temp`
--

INSERT INTO `temp` (`id_pertanyaan`, `status`) VALUES
(1, 'Iya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
