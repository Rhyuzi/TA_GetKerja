-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 08:33 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` varchar(15) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `nama`, `pass`, `level`) VALUES
('admin001', 'Admin', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
('ptazirahayu', 'PT.AZIRAHAYU', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
('ptpertamina', 'PT.PERTAMINA', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
('ptsmk2', 'PT.SMK2', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`noid` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`noid`, `user_id`, `nama`, `pass`, `alamat`, `tanggal_lahir`, `tempat_lahir`, `email`, `nohp`, `level`) VALUES
(3, 'azi1121', 'Azi Rahayu', '3117950bc175e4d426bd301e1cc1501c', 'jln.manaweh', '29 Juni 2001', 'Cimahi', 'azitom2@gmail.com', '089614110279', 3),
(4, 'bayu1121', 'Bayu Prasetyo', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Jln.Kecamatan', '2019-04-11', 'Cimahi', 'azitom2@gmail.com', '089614110279', 3),
(5, 'bayu1121', 'Bayu Prasetyo', 'a384b6463fc216a5f8ecb6670f86456a', 'Jln.Kecamatan', '2019-04-23', 'Cimahi', 'azitom2@gmail.com', '089614110279', 3),
(6, 'dikaa_', 'Andika Rizki Ramdani', 'b59c67bf196a4758191e42f76670ceba', 'Jln.sangkuriang', '2001-11-15', 'Cimahi', 'andika@gmail.com', '085085085085', 3),
(7, 'farhan1121', 'Farhan Assyfa', '716242881b1c44df77147dcdd727ba2e', 'Cililin', '2019-04-26', 'Cililin', 'farhan@gmail.com', '0981221512512', 3),
(8, 'rhyuzi123', 'Kuro Rhyuuzi', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Jln.Kecamatan', '2201-01-01', 'Cimahi', 'barpas@gmail.com', '085221512612', 3),
(9, 'azi123', 'azi rahayu', '5611b93e2026720a9689e6663e9adcfb', 'safas', '2001-01-01', 'cimahi', 'azitom2@gmail.com', '089614110279', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
`noid` int(11) NOT NULL,
  `nama_perusahaan` varchar(80) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `pengalaman_kerja` text NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`noid`, `nama_perusahaan`, `nama`, `tempat`, `tanggal_lahir`, `alamat_lengkap`, `id_jabatan`, `pengalaman_kerja`, `id_status`) VALUES
(34, 'PT.PERTAMINA', 'Azi Rahayu', 'Cimahi', '29 Juni 2001', 'jln.manaweh', 3, 'mggmjgmgm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
`id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Chief Technology Officer'),
(2, 'Chief Financial Officer'),
(3, 'WP Pemasaran'),
(4, 'Chief Marketing Officer'),
(5, 'Chief Operating Officer');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan_kerja`
--

CREATE TABLE IF NOT EXISTS `lowongan_kerja` (
`noid` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lowongan_kerja`
--

INSERT INTO `lowongan_kerja` (`noid`, `nama_perusahaan`, `id_jabatan`, `kota`, `provinsi`, `keterangan`) VALUES
(2, 'PT.PERTAMINA', 3, 'Cimahi', 'Jawa Barat', 'Dicari Pekerja yang mau bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`id_status` int(11) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Dalam proses'),
(2, 'Diterima'),
(3, 'Tidak Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidang_perusahaan`
--

CREATE TABLE IF NOT EXISTS `tbl_bidang_perusahaan` (
`id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_bidang_perusahaan`
--

INSERT INTO `tbl_bidang_perusahaan` (`id_bidang`, `nama_bidang`) VALUES
(1, 'IT'),
(2, 'MULTIMEDIA'),
(3, 'MEKATRONIKA'),
(4, 'ANIMASI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_record_perusahaan`
--

CREATE TABLE IF NOT EXISTS `tbl_record_perusahaan` (
`noid` int(11) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `ceo_perusahaan` varchar(20) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_record_perusahaan`
--

INSERT INTO `tbl_record_perusahaan` (`noid`, `nama_perusahaan`, `ceo_perusahaan`, `id_bidang`, `alamat`, `kota`, `keterangan`) VALUES
(13, 'PT.PDAM', 'Azi Rahayu', 1, 'Jln.Kecamatan Kelurahan Cibabat', 'Cimahi', 'Tidak Ada'),
(14, 'PT.PERSERO', 'Bayu Prasetyo', 2, 'Jln.Pesantren', 'Cimahi', 'Dicari Pekerja Usia 17 tahun'),
(15, 'PT.BARA ENTERPRISE', 'Ghani', 2, 'Jln.LeuwiGajah', 'Cimahi', 'Kekurangan Makanan'),
(16, 'PT.GUNA JAYA', 'Rizky Sanjaya', 3, 'Jln.Ciamis BlokF', 'Bandung', 'Tidak ada'),
(17, 'PT.SUTISNA', 'Adzi Bilal', 1, 'Jln.Cihanjuang', 'Cimahi', 'Tidak ada'),
(18, 'PT.PAMOYANAN', 'Oyan', 2, 'Jln.PAsar Atas', 'Cimahi', 'Tidak ada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`noid`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
 ADD PRIMARY KEY (`noid`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
 ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
 ADD PRIMARY KEY (`noid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tbl_bidang_perusahaan`
--
ALTER TABLE `tbl_bidang_perusahaan`
 ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_record_perusahaan`
--
ALTER TABLE `tbl_record_perusahaan`
 ADD PRIMARY KEY (`noid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `noid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
MODIFY `noid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
MODIFY `noid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_bidang_perusahaan`
--
ALTER TABLE `tbl_bidang_perusahaan`
MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_record_perusahaan`
--
ALTER TABLE `tbl_record_perusahaan`
MODIFY `noid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
