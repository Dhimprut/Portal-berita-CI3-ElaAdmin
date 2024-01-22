-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 01:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portal_dimas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `nama_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `id_kategori`, `nama_artikel`, `isi_artikel`) VALUES
(3, 4, 'Mount Pilatus', '<b>Mount Pilatus</b> atau <i>Gunung Pilatis</i> merupakan gunung massif terkenal yang menghadap ke Lucerne di Swiss.Gunung ini mempunyai ketinggian 2.128 meter dengan puncak tertinggi bernama Tomlishorn.Pemandangan dari atas Gunung Pilatus ini sangat indah karena para pengunjung akan melihat pegunungan yang tertutup salju.Untuk mencapai ke sini, bisa menggunakan transportasi steepest cogwheel (sejenis kereta gantung) yang sangat curam.'),
(4, 5, 'QhotelSwis', '<div><div><i>Lorem ipsum dolor sit amet </i><b>consectetur</b> adipisicing elit. Aut dolorum adipisci itaque, nihil sunt enim iusto esse atque dicta sequi. Soluta magni expedita recusandae enim impedit asperiores quas cupiditate! Deleniti.</div><div>Ut iusto voluptate illo eaque ab cupiditate delectus deleniti vero ex nihil nisi quibusdam tenetur neque natus saepe quidem facilis qui cum, culpa ipsum soluta rerum nostrum quod! Asperiores, enim.</div></div>'),
(5, 6, 'Kucing', '<div><i>Lorem ipsum dolor sit amet&nbsp;</i>consectetur&nbsp;adipisicing elit. Aut dolorum adipisci itaque, nihil sunt enim iusto esse atque dicta sequi. Soluta magni expedita recusandae enim impedit asperiores quas cupiditate! Deleniti.</div><div>Ut iusto voluptate illo eaque ab cupiditate delectus deleniti vero ex nihil nisi quibusdam tenetur neque natus saepe quidem facilis qui cum, culpa ipsum soluta rerum nostrum quod! Asperiores, enim.</div>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `gambar`, `deskripsi`) VALUES
(3, 'alm.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt tempore magni labore aliquam esse'),
(4, 'alm2.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt tempore magni labore aliquam esse'),
(5, 'alm3.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt tempore magni labore aliquam esse'),
(7, 'solarsystem.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt tempore magni labore aliquam esse');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(4, 'Wisata Alam'),
(5, 'Hotel'),
(6, 'Hewan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
