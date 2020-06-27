-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `t_kategori_wisata`;
CREATE TABLE `t_kategori_wisata` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_up` datetime DEFAULT CURRENT_TIMESTAMP,
  `jenis_kategori` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `t_kategori_wisata` (`id_kategori`, `tgl_up`, `jenis_kategori`, `keterangan`, `gambar`) VALUES
(8,	'2020-06-19 02:52:43',	'Pantai',	'sdsds sdsds sdsdsd',	'jembatan.jpeg'),
(9,	'2020-06-19 03:03:43',	'Gunung',	'sdsdsd sdsd sdsd sdsd sdsds sdsd',	'wisatagunung.jpeg');

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

INSERT INTO `t_transaksi` (`id_transaksi`, `tgl_transaksi`, `user_id`, `invoice`, `wisata`, `jumlah_wisatawan`, `chek_in`, `chek_out`, `harga`, `total`, `is_success`) VALUES
(3,	'2020-06-19 06:32:39',	3,	'in1906200001',	'Semeru',	10,	'2020-06-20',	'2020-06-22',	50000,	500000,	1),
(6,	'2020-06-19 07:19:17',	3,	'in1906200002',	'Bromo',	2,	'2020-06-25',	'2020-07-01',	20000,	500000,	2),
(10,	'2020-06-20 01:17:13',	4,	'in2006200001',	'Pantai Tiga Warna',	10,	'2020-06-24',	'2020-07-01',	150000,	1500000,	2);

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

INSERT INTO `t_transaksi_detail` (`id_det`, `tgl_bayar`, `invoice`, `nama_pengirim`, `tgl_transfer`, `jumlah`, `bukti_transfer`) VALUES
(1,	'2020-06-26 00:00:00',	'in1906200001',	'User',	'2020-06-26',	500000,	'Capture.JPG'),
(2,	'2020-06-26 00:00:00',	'in2006200001',	'Alan',	'2020-06-25',	1500000,	'git.JPG');

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

INSERT INTO `t_user` (`id_user`, `tgl_daftar`, `email`, `password`, `nama`, `nohp`, `alamat`, `role`, `foto`, `is_online`) VALUES
(1,	'2020-04-26 07:46:31',	'admin123@gmail.com',	'$2y$10$El8MlN5otlUAXik3GlLGfu6Sd.wu0Dlf75GzTNMpdhJstUT4JBPA.',	'Admin123',	'081359132126',	'Malang.',	1,	'default.png',	1),
(3,	'2020-06-18 22:44:28',	'user@gmail.com',	'$2y$10$KyzLOk.LLP5CnBWJz/2H/.6AWdALv9xLRFkp9KEmi8gHrdSHmU6kK',	'User',	'081247046058',	'Malang',	2,	'default.png',	0),
(4,	'2020-06-19 21:51:24',	'alan@gmail.com',	'$2y$10$LVyHa4MgAs6RmOLD7qKo..QDYN14Ld7WMyBQUz4X7JOyb0/HsPAXq',	'Alan',	'081247046058',	NULL,	2,	'default.png',	0),
(5,	'2020-06-27 12:24:43',	'adam@gmail.com',	'$2y$10$YWQs9Ar3gOK6ClMfmtwATeBzud9DY5RsA721nZ3y7Z1RGu3QyBlW2',	'Adam',	'081247046058',	'',	2,	'default.png',	0),
(6,	'2020-06-27 12:27:42',	'catur@gmail.com',	'$2y$10$MlV1CH8QZucKn.XIzfQdfuJbmklTq0AKSwqy5fTaeG3a0GIMjlEyG',	'Catur',	'081247046058',	'Malang',	2,	'default.png',	0);

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

INSERT INTO `t_wisata` (`id_wisata`, `kategori_id`, `tgl_up`, `nama_tempat`, `ket_wisata`, `alamat`, `harga`, `gambar`) VALUES
(9,	9,	'2020-06-19 03:14:12',	'Bromo',	'Wisata Bromo',	'Bromo',	20000,	'Bromo.jpg'),
(10,	9,	'2020-06-19 03:24:13',	'Semeru',	'Semeru',	'Jawa Timur',	50000,	'wisatagunung.jpeg'),
(11,	8,	'2020-06-20 00:52:55',	'Pantai Tiga Warna Malang',	'Pantai Tigas Warna Merupakan Pantai ... ....',	'Malang Jawa Timur',	150000,	'3_warna.jpg');

-- 2020-06-27 07:37:58
