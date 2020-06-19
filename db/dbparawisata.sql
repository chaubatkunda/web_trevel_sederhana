-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2020 pada 02.36
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbparawisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_alat_camp`
--

CREATE TABLE `t_alat_camp` (
  `id_alat` int(11) DEFAULT NULL,
  `tgl_up` datetime DEFAULT current_timestamp(),
  `p_alat` int(11) DEFAULT NULL,
  `ket_p` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori_wisata`
--

CREATE TABLE `t_kategori_wisata` (
  `id_kategori` int(11) NOT NULL,
  `tgl_up` datetime DEFAULT current_timestamp(),
  `jenis_kategori` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kategori_wisata`
--

INSERT INTO `t_kategori_wisata` (`id_kategori`, `tgl_up`, `jenis_kategori`, `gambar`) VALUES
(8, '2020-06-19 02:52:43', 'Pantai', 'jembatan.jpeg'),
(9, '2020-06-19 03:03:43', 'Gunung', 'wisatagunung.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_transaksi`
--

CREATE TABLE `t_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` datetime DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `invoice` char(50) DEFAULT NULL,
  `wisata` varchar(255) DEFAULT NULL,
  `chek_in` date DEFAULT NULL,
  `chek_out` date DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_transaksi`
--

INSERT INTO `t_transaksi` (`id_transaksi`, `tgl_transaksi`, `user_id`, `invoice`, `wisata`, `chek_in`, `chek_out`, `harga`, `total`) VALUES
(3, '2020-06-19 06:32:39', 3, 'in1906200001', 'Semeru', '2020-06-20', '2020-06-22', 50000, 500000),
(6, '2020-06-19 07:19:17', 3, 'in1906200002', 'Bromo', '2020-06-25', '2020-07-01', 20000, 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `tgl_daftar` datetime DEFAULT current_timestamp(),
  `email` varchar(125) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `is_online` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `tgl_daftar`, `email`, `password`, `nama`, `nohp`, `alamat`, `role`, `foto`, `is_online`) VALUES
(1, '2020-04-26 07:46:31', 'maniklusi31@gmail.com', '$2y$10$Es8vTyN71bTzpXxKwMYpseB.POMUIt3.mCoG.gYyX.Me3c4iBCdue', 'Chau Batkunda', '081359132126', 'Malang.', 1, 'default.png', 1),
(3, '2020-06-18 22:44:28', 'user@gmail.com', '$2y$10$KyzLOk.LLP5CnBWJz/2H/.6AWdALv9xLRFkp9KEmi8gHrdSHmU6kK', 'User', '081247046058', 'Malang', 2, 'default.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_wisata`
--

CREATE TABLE `t_wisata` (
  `id_wisata` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL DEFAULT 0,
  `tgl_up` datetime NOT NULL DEFAULT current_timestamp(),
  `nama_tempat` varchar(255) DEFAULT NULL,
  `ket_wisata` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_wisata`
--

INSERT INTO `t_wisata` (`id_wisata`, `kategori_id`, `tgl_up`, `nama_tempat`, `ket_wisata`, `alamat`, `harga`, `gambar`) VALUES
(9, 9, '2020-06-19 03:14:12', 'Bromo', 'Wisata Bromo', 'Bromo', 20000, 'Bromo.jpg'),
(10, 9, '2020-06-19 03:24:13', 'Semeru', 'Semeru', 'Jawa Timur', 50000, 'wisatagunung.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_kategori_wisata`
--
ALTER TABLE `t_kategori_wisata`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `t_wisata`
--
ALTER TABLE `t_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_kategori_wisata`
--
ALTER TABLE `t_kategori_wisata`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `t_transaksi`
--
ALTER TABLE `t_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_wisata`
--
ALTER TABLE `t_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
