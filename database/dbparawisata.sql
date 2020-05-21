-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2020 pada 19.33
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
(1, '2020-04-26 22:33:52', 'Pantai', 'pantai.jpg');

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
(1, '2020-04-26 07:46:31', 'maniklusi31@gmail.com', '$2y$10$Es8vTyN71bTzpXxKwMYpseB.POMUIt3.mCoG.gYyX.Me3c4iBCdue', 'Chau Batkunda', '081359132126', 'Malang.', 1, 'default.png', 0),
(2, '2020-05-09 22:43:44', 'alan@gmail.com', '$2y$10$SF8AS1rK8ynioord/FzKjeDI1kIQAxaNPUyNC8WE3wH8j.xjzvqA.', 'Alan', '081359132126', 'Malang', 2, 'default.png', 0);

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
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_wisata`
--

INSERT INTO `t_wisata` (`id_wisata`, `kategori_id`, `tgl_up`, `nama_tempat`, `ket_wisata`, `alamat`, `harga`) VALUES
(2, 1, '2020-05-06 23:36:04', 'Alun-alun Batu, Malang', 'Kota Wisata Batu Malang', 'Batu Malang', 25000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_kategori_wisata`
--
ALTER TABLE `t_kategori_wisata`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `t_wisata`
--
ALTER TABLE `t_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_kategori_wisata`
--
ALTER TABLE `t_kategori_wisata`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_wisata`
--
ALTER TABLE `t_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
