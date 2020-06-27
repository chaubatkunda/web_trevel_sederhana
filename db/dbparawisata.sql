-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `t_info`;
CREATE TABLE `t_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(255) NOT NULL,
  `no_rek` char(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii;


DROP TABLE IF EXISTS `t_kategori_wisata`;
CREATE TABLE `t_kategori_wisata` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_up` datetime DEFAULT CURRENT_TIMESTAMP,
  `jenis_kategori` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_transaksi`;
CREATE TABLE `t_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `invoice` char(50) DEFAULT NULL,
  `wisata` varchar(255) DEFAULT NULL,
  `jumlah_wisatawan` int(11) DEFAULT NULL,
  `chek_in` date DEFAULT NULL,
  `chek_out` date DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `is_success` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `invoice` (`invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_transaksi_detail`;
CREATE TABLE `t_transaksi_detail` (
  `id_det` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_bayar` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `invoice` char(50) DEFAULT NULL,
  `nama_pengirim` varchar(255) DEFAULT NULL,
  `tgl_transfer` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `bukti_transfer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_det`),
  KEY `invoice` (`invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_daftar` datetime DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(125) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `alamat` text,
  `role` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `is_online` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_wisata`;
CREATE TABLE `t_wisata` (
  `id_wisata` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL DEFAULT '0',
  `tgl_up` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_tempat` varchar(255) DEFAULT NULL,
  `ket_wisata` varchar(255) DEFAULT NULL,
  `alamat` text,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_wisata`),
  KEY `kategori_id` (`kategori_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2020-06-27 10:07:49