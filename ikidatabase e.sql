-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2014 at 03:33 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(4) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'haji dan umroh'),
(2, 'pendidikan islam'),
(3, 'dunia islam');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE IF NOT EXISTS `tabel_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`username`, `password`) VALUES
('admin01', 'qwerty1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_berita`
--

CREATE TABLE IF NOT EXISTS `tabel_berita` (
  `id_berita` int(4) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(40) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `kategori` int(4) NOT NULL,
  `waktu_posting` datetime NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tabel_berita`
--

INSERT INTO `tabel_berita` (`id_berita`, `judul_berita`, `isi_berita`, `gambar`, `kategori`, `waktu_posting`) VALUES
(1, 'Pelatihan CnC diwarnai keIslaman', 'akjnsdknaksdnkanskdnkanskdnaksndkjasnkjdnajksdnkjandjkbasjdbajhdbffdjhabshjdfbasbfjasbfs fsdj fjsd fjsd fjsd fjshd fjs djf sjd fjsd fjsd fjs fjsd fj sdfj sjdf js dfjhs dfjhs dhjfsd ', 'islam.jpg', 2, '2014-05-21 15:12:20'),
(2, 'jhvjhv', 'jfxjgxjfxghfxgffxhfdx', 'islam.jpg', 3, '2014-05-14 00:01:05'),
(3, 'mskasmnd', 'kansdkja snkjda skd s dkjasdk asdkja dkja sdka skd askd aksd ', 'islamic.jph', 3, '2014-05-14 07:53:49'),
(4, 'Islam keren', '<p>asjndkajsndkjnbakjsdjakbsdjhbjahsvdbhjasbdvhmavsdnasvda</p>\r\n', '', 0, '2014-05-14 12:00:52'),
(5, 'cnc indonesia', '<p>dsadsadas</p>\r\n', '', 3, '2014-05-14 16:52:22'),
(6, 'sadasdas', '<p>dasdasdadasd</p>\r\n', '2.png', 1, '2014-05-14 17:57:47'),
(7, 'askjnas', '<p>asasas</p>\r\n', '4.png', 2, '2014-05-14 22:34:33'),
(8, 'sakjn', '<p>asasndaskjdn</p>\r\n', '2.png', 2, '2014-05-14 22:36:05'),
(9, 'sakjn', '<p>asasndaskjdn</p>\r\n', '2.png', 2, '2014-05-14 22:37:59'),
(10, 'asdkjnasdkjn', '<p>sadkjnasdkan</p>\r\n', '1.png', 2, '2014-05-14 22:46:36'),
(11, 'dasajkds', '<p>asdasd</p>\r\n', '4.png', 2, '2014-05-14 22:59:17'),
(12, 'dasajkds', '<p>asdasd</p>\r\n', '4.png', 2, '2014-05-14 23:00:07'),
(13, 'dasajkds', '<p>asdasd</p>\r\n', '4.png', 2, '2014-05-14 23:00:24'),
(14, 'dasajkds', '<p>asdasd</p>\r\n', '4.png', 2, '2014-05-14 23:02:20'),
(15, 'dasajkds', '<p>asdasd</p>\r\n', '4.png', 2, '2014-05-14 23:02:23'),
(16, 'dasajkds', '<p>asdasd</p>\r\n', '4.png', 2, '2014-05-14 23:02:29'),
(17, 'adasd', '<p>dasdasd</p>\r\n', '4.png', 2, '2014-05-14 23:04:44'),
(18, 'adasd', '<p>dasdasd</p>\r\n', '4.png', 2, '2014-05-14 23:06:28'),
(19, 'adasd', '<p>dasdasd</p>\r\n', '4.png', 2, '2014-05-14 23:06:47'),
(20, 'adasd', '<p>dasdasd</p>\r\n', '4.png', 2, '2014-05-14 23:08:21'),
(21, 'adasd', '<p>dasdasd</p>\r\n', '4.png', 2, '2014-05-14 23:08:51'),
(22, 'ds', '<p>dfsdfsdfsdfsdfsdfsdfsdfdf</p>\r\n', '1.png', 2, '2014-05-14 23:09:15'),
(23, 'asdasd', '<p>asdasdasdasdas</p>\r\n', 'penulisan2.png', 3, '2014-05-14 23:15:05'),
(24, 'wkwk', '<p>islam adalahhhh</p>\r\n', '20140514_172018.jpg', 3, '2014-05-15 09:04:27'),
(25, 'wkwk', '<p>islam as</p>\r\n', '20140514_172018.jpg', 2, '2014-05-15 09:05:30'),
(27, 'wkwkkj', '<p>islam askj nn j j jnkjnkjnkjnkjnkjnkjnk</p>\r\n', '20140514_172128.jpg', 2, '2014-05-15 10:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tabel_pelanggan` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` text NOT NULL,
  `id_pelanggan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tabel_pelanggan`
--

INSERT INTO `tabel_pelanggan` (`user_id`, `nama_pelanggan`, `id_pelanggan`, `alamat`, `no_telp`) VALUES
(6, 'lkjhgfd', '987654', 'jhgf', '765487878732'),
(8, 'jhvhg', '786876', 'hjvhv', '786876');
