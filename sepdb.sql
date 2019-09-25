-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Sep 2019 pada 09.39
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_online`
--

CREATE TABLE `admin_online` (
  `id_online` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_online`
--

INSERT INTO `admin_online` (`id_online`, `id_pengguna`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(6) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `berkas`) VALUES
(10, '115-252-1-PB7.pdf'),
(11, '412-1312-1-PB10.pdf'),
(1, '412-1312-1-PB3.pdf'),
(3, '412-1312-1-PB4.pdf'),
(4, '412-1312-1-PB5.pdf'),
(6, '412-1312-1-PB6.pdf'),
(7, '412-1312-1-PB7.pdf'),
(8, '412-1312-1-PB8.pdf'),
(9, '412-1312-1-PB9.pdf'),
(2, 'kf_Software_Testing.pdf'),
(5, 'kf_Software_Testing_Types_of_Testing.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cetak`
--

CREATE TABLE `cetak` (
  `id_transaksi` int(11) NOT NULL,
  `id_berkas` int(6) NOT NULL,
  `id_kertas` varchar(6) NOT NULL,
  `id_warna` varchar(6) NOT NULL,
  `id_finishing` varchar(6) NOT NULL,
  `salinan` char(3) NOT NULL,
  `waktu_proses` int(11) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cetak`
--

INSERT INTO `cetak` (`id_transaksi`, `id_berkas`, `id_kertas`, `id_warna`, `id_finishing`, `salinan`, `waktu_proses`, `keterangan`) VALUES
(1, 1, 'kts01', 'wrn1', 'fin01', '2', 0, 'semua halaman'),
(2, 2, 'kts02', 'wrn2', 'Fin02', '3', 0, 'halam 3 saja'),
(3, 3, 'kts01', 'wrn1', 'fin01', '1', 0, 'Semua Halaman'),
(4, 4, 'kts01', 'wrn1', 'fin01', '1', 0, 'semua halaman'),
(6, 6, 'kts01', 'wrn1', 'fin01', '1', 0, 'semua halaman'),
(7, 7, 'kts01', 'wrn2', 'Fin02', '2', 0, 'semua di print'),
(8, 8, 'kts01', 'wrn1', 'fin01', '1', 0, 'full'),
(10, 9, 'kts01', 'wrn1', 'fin01', '2', 0, 'semua haaman'),
(11, 10, 'kts02', 'wrn1', 'fin01', '1', 0, 'sde'),
(13, 11, 'kts01', 'wrn1', 'Fin02', '1', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `finishing`
--

CREATE TABLE `finishing` (
  `id_finishing` varchar(6) NOT NULL,
  `finishing` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `finishing`
--

INSERT INTO `finishing` (`id_finishing`, `finishing`) VALUES
('fin01', 'Jilid'),
('Fin02', 'Staples');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_transaksi`
--

CREATE TABLE `jenis_transaksi` (
  `id_jenis_transaksi` varchar(3) NOT NULL,
  `jenis_transaksi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_transaksi`
--

INSERT INTO `jenis_transaksi` (`id_jenis_transaksi`, `jenis_transaksi`) VALUES
('tr1', 'cetak dokumen'),
('tr2', 'isi saldo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kertas`
--

CREATE TABLE `kertas` (
  `id_kertas` varchar(6) NOT NULL,
  `kertas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kertas`
--

INSERT INTO `kertas` (`id_kertas`, `kertas`) VALUES
('kts01', 'A4'),
('kts02', 'F4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` varchar(6) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
('lvl1', 'Admin'),
('lvl2', 'Pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id_level` varchar(6) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` char(12) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `kata_sandi` char(15) NOT NULL,
  `saldo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_level`, `nama_lengkap`, `alamat`, `email`, `no_tlp`, `nama_pengguna`, `kata_sandi`, `saldo`) VALUES
(1, 'lvl1', 'Priya Yudha Swandana', 'perum. pondok tanggul asri ', 'priyayudha.sw27@gmai', '081330375369', 'dana', '12345678', 0),
(2, 'lvl2', 'Aditia Afif', 'lumajang', 'adit@gmail.com', '080808800800', 'adit', '123', 99000),
(3, 'lvl2', 'pak wahyu', 'Jember', 'pakwahyu@gmail.com', '081345987632', 'pak wahyu', '123', NULL),
(4, 'lvl2', 'Detaaaaaaaa', 'Jember', 'deta@gmail.com', '081345987632', 'Deta', 'satuduatiga', 1000),
(5, 'lvl2', 'citra cantik', 'Blitar', 'citra@gmail.com', '081345987633', 'citra cantik', 'CITRA', 1000),
(6, 'lvl2', 'fariz', 'jl.in aja', 'fariz@gmail.com', '081345987632', 'fariz', 'user', 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Belum Cetak'),
(2, 'Sudah Cetak'),
(3, 'saldo tidak cukup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_jenis_transaksi` varchar(3) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1',
  `waktu_selesai` int(11) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `topup` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_jenis_transaksi`, `id_admin`, `id_pengguna`, `id_status`, `waktu_selesai`, `harga`, `waktu`, `topup`) VALUES
(1, 'tr1', NULL, 2, 2, NULL, 3000, '2019-01-03 17:36:18', NULL),
(2, 'tr1', NULL, 2, 2, NULL, 2000, '2019-01-03 17:36:59', NULL),
(3, 'tr1', NULL, 2, 1, NULL, NULL, '2019-01-03 19:01:25', NULL),
(4, 'tr1', NULL, 2, 1, NULL, NULL, '2019-01-03 19:45:40', NULL),
(5, 'tr2', NULL, 2, 1, NULL, NULL, '2019-01-03 19:56:26', 6000),
(6, 'tr1', NULL, 3, 1, NULL, 100000, '2019-01-16 10:37:53', NULL),
(7, 'tr1', NULL, 2, 2, NULL, 2000, '2019-01-16 11:13:13', NULL),
(8, 'tr1', NULL, 4, 2, NULL, 5000, '2019-01-16 11:37:50', NULL),
(9, 'tr2', NULL, 4, 1, NULL, NULL, '2019-01-16 11:42:10', 6000),
(10, 'tr1', NULL, 2, 1, NULL, NULL, '2019-01-16 11:48:03', NULL),
(11, 'tr1', NULL, 5, 2, NULL, 2000, '2019-01-16 11:57:17', NULL),
(12, 'tr2', NULL, 5, 1, NULL, NULL, '2019-01-16 11:59:10', 3000),
(13, 'tr1', NULL, 6, 2, NULL, 2000, '2019-01-16 12:35:47', NULL),
(14, 'tr2', NULL, 6, 1, NULL, NULL, '2019-01-16 12:38:18', 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warna`
--

CREATE TABLE `warna` (
  `id_warna` varchar(6) NOT NULL,
  `warna` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warna`
--

INSERT INTO `warna` (`id_warna`, `warna`) VALUES
('wrn1', 'Berwarna'),
('wrn2', 'Hitam-putih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_online`
--
ALTER TABLE `admin_online`
  ADD PRIMARY KEY (`id_online`),
  ADD UNIQUE KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_pengguna_2` (`id_pengguna`),
  ADD KEY `id_pengguna_3` (`id_pengguna`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `berkas` (`berkas`),
  ADD KEY `berkas_2` (`berkas`);

--
-- Indexes for table `cetak`
--
ALTER TABLE `cetak`
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_berkas` (`id_berkas`),
  ADD KEY `id_kertas` (`id_kertas`),
  ADD KEY `id_warna` (`id_warna`),
  ADD KEY `id_finishing` (`id_finishing`);

--
-- Indexes for table `finishing`
--
ALTER TABLE `finishing`
  ADD PRIMARY KEY (`id_finishing`);

--
-- Indexes for table `jenis_transaksi`
--
ALTER TABLE `jenis_transaksi`
  ADD PRIMARY KEY (`id_jenis_transaksi`);

--
-- Indexes for table `kertas`
--
ALTER TABLE `kertas`
  ADD PRIMARY KEY (`id_kertas`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_satatus` (`id_status`),
  ADD KEY `id_jenis_transaksi` (`id_jenis_transaksi`);

--
-- Indexes for table `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`id_warna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_online`
--
ALTER TABLE `admin_online`
  MODIFY `id_online` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin_online`
--
ALTER TABLE `admin_online`
  ADD CONSTRAINT `admin_online_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `cetak`
--
ALTER TABLE `cetak`
  ADD CONSTRAINT `cetak_ibfk_1` FOREIGN KEY (`id_warna`) REFERENCES `warna` (`id_warna`),
  ADD CONSTRAINT `cetak_ibfk_3` FOREIGN KEY (`id_kertas`) REFERENCES `kertas` (`id_kertas`),
  ADD CONSTRAINT `cetak_ibfk_4` FOREIGN KEY (`id_finishing`) REFERENCES `finishing` (`id_finishing`),
  ADD CONSTRAINT `cetak_ibfk_5` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `cetak_ibfk_6` FOREIGN KEY (`id_berkas`) REFERENCES `berkas` (`id_berkas`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_admin`) REFERENCES `admin_online` (`id_online`),
  ADD CONSTRAINT `transaksi_ibfk_5` FOREIGN KEY (`id_jenis_transaksi`) REFERENCES `jenis_transaksi` (`id_jenis_transaksi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
