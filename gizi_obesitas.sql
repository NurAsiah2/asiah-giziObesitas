-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2021 at 09:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gizi_obesitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `buah`
--

CREATE TABLE `buah` (
  `Index` int(100) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` tinytext NOT NULL,
  `Gr` int(100) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buah`
--

INSERT INTO `buah` (`Index`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(0, 'Alpokat', '1/2 buah besar', 60, 4.62, 0.54, 3.9),
(1, 'Anggur', '20 buah sedang', 165, 21.12, 0.825, 0.33),
(2, 'Apel merah', '1 buah kecil', 85, 12.665, 0.255, 0.34),
(3, 'Apel malang', '1 buah sedang', 75, 10.35, 0.225, 0.15),
(4, 'Belimbing', '1 buah besar', 140, 12.32, 0.56, 0.56),
(5, 'Blewah', '1 potong sedang', 70, 9.1, 0.91, 0.21),
(6, 'Duku', '16 buah sedang', 80, 12.88, 0.8, 1.6),
(7, 'Durian', '2 biji besar', 35, 9.8, 8.75, 1.05),
(8, 'Jambu air', '2 buah sedang', 110, 12.98, 0.66, 0.22),
(9, 'Jambu biji', '1 buah besar', 100, 12.2, 0.9, 0.3),
(10, 'Jambu boi', '1 buah kecil', 90, 12.78, 0.54, 0.27),
(11, 'Jeruk bali', '1 potong', 105, 13.02, 0.63, 0.21),
(12, 'Jeruk garut', '1 buah sedang', 115, 12.535, 0.92, 0.345),
(13, 'Jeruk manis', '2 buah sedang', 100, 12.32, 0.99, 0.22),
(14, 'Jeruk nipis', '1 1/4 gelas', 135, 16.605, 1.08, 5),
(15, 'Kedondong', '2 buah sedang', 120, 12.36, 1.2, 0.12),
(16, 'Kesemek', '1/2 buah', 65, 13, 0.52, 0.26),
(17, 'Kurma', '3 buah', 15, 11.2545, 0.3675, 0.0585),
(18, 'Leci', '10 buah', 75, 1.1925, 0.06, 0.03),
(19, 'Mangga', '3/4 buah besar', 90, 10.08, 0.63, 0.18),
(20, 'Manggis', '2 buah sedang', 80, 12.48, 0.48, 0.48),
(21, 'Markisa', '3/4 buah sedang', 35, 8.183, 0.77, 0.245),
(22, 'Melon', '1 potong', 90, 16.34, 1.596, 0.361),
(23, 'Nangka masak', '3 biji sedang', 45, 12.42, 0.54, 0.135),
(24, 'Nanas', '1/4 buah sedang', 85, 13.015, 0.38, 0.19),
(25, 'Pear', '1/2 buah sedang', 85, 21.811, 0.5355, 0.17),
(26, 'Pepaya', '1 potong besar', 190, 23.18, 0.95, 0),
(27, 'Pisang ambon', '1 buah sedang', 50, 12.9, 0.6, 0.1),
(28, 'Pisang kepok', '1 buah', 45, 11.835, 0.36, 0.225),
(29, 'Pisang mas', '2 buah', 40, 13.44, 0.56, 0.08),
(30, 'Pisang raja', '2 buah kecil', 40, 12.44, 0.48, 0.08),
(31, 'Rambutan', '8 buah', 75, 13.575, 0.675, 0.75),
(32, 'Sawo', '1 buah sedang', 55, 12.32, 0.275, 0.605),
(33, 'Salak', '2 buah sedang', 65, 13.585, 13.585, 0),
(34, 'Semangka', '2 potong sedang', 180, 12.42, 0.9, 0.36),
(35, 'Sirsak', '1/2 gelas', 60, 9.78, 0.6, 0.18),
(36, 'Srikaya', '2 buah besar', 50, 12.6, 0.85, 0.3),
(37, 'Strawberry', '4 buah besar', 215, 16.555, 1.505, 0.645);

-- --------------------------------------------------------

--
-- Table structure for table `inputdata`
--

CREATE TABLE `inputdata` (
  `id` int(11) NOT NULL,
  `tinggi` int(255) NOT NULL,
  `berat` int(255) NOT NULL,
  `umur` int(255) NOT NULL,
  `aktivitas` enum('Ringan','Sedang','Berat') NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `karbohidrat` set('0.60','0.61','0.62','0.63','0.64','0.65','0.66','0.67','0.68','0.69','0.70','0.71','0.72','0.73','0.74','0.75') NOT NULL,
  `protein` enum('0.10','0.11','0.12','0.13','0.14','0.15') NOT NULL,
  `lemak` enum('0.15','0.16','0.17','0.18','0.19','0.20') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inputdata`
--

INSERT INTO `inputdata` (`id`, `tinggi`, `berat`, `umur`, `aktivitas`, `jk`, `karbohidrat`, `protein`, `lemak`) VALUES
(5, 149, 70, 34, 'Ringan', 'Laki-laki', '0.75', '0.10', '0.15'),
(9, 45, 55, 55, '', 'Laki-laki', '0.60', '0.10', '0.15'),
(10, 23, 2, 3, '', 'Laki-laki', '0.60', '0.10', '0.15'),
(11, 34, 5, 5, 'Ringan', 'Laki-laki', '0.60', '0.10', '0.15'),
(12, 12, 3, 4, '', 'Laki-laki', '0.60', '0.10', '0.15');

-- --------------------------------------------------------

--
-- Table structure for table `sayur`
--

CREATE TABLE `sayur` (
  `Index` int(100) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` varchar(255) NOT NULL,
  `Gr` varchar(255) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sayur`
--

INSERT INTO `sayur` (`Index`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(0, 'Tomat sayur', '', '100', 4.2, 1, 0.3),
(1, 'Daun bawang', '', '100', 5.2, 1.8, 0.7),
(2, 'Bayam', '', '100', 6.5, 3.5, 0.5),
(3, 'Kapri muda', '', '100', 17.7, 6.7, 0.4),
(4, 'Brokoli', '', '100', 6.6, 2.8, 0.4),
(5, 'Kembang kol', '', '100', 4.9, 2.4, 0.2),
(6, 'Kemangi', '', '100', 7.5, 5.5, 0.3),
(7, 'Kangkung', '', '100', 5.4, 3, 0.3),
(8, 'Bit', '', '100', 9.6, 1.6, 0.1),
(9, 'Kol', '', '100', 5.3, 1.4, 0.2),
(10, 'Daun kecipir', '', '0.4', 8.5, 5, 0.5),
(11, 'Buncis', '', '100', 7.7, 2.4, 0.2),
(12, 'Daun Kacang Panjang', '', '100', 5.8, 4.1, 0.4),
(13, 'Terong', '', '100', 5.5, 1.1, 0.2),
(14, 'Daun talas', '', '100', 7.4, 3, 0.8),
(15, 'Labu waluh', '', '100', 1.1, 0.3, 0.3),
(16, 'Pepaya muda', '', '100', 4.9, 2.1, 0.1),
(17, 'Labu Siam', '', '100', 6.7, 0.6, 0.1),
(18, 'Pare', '', '100', 6.6, 1.1, 0.3),
(19, 'Kacang panjang', '', '100', 7.8, 2.7, 0.3),
(20, 'Genjer', '', '100', 7.7, 1.7, 0.2),
(21, 'Jagung muda', '', '100', 7.4, 2.2, 0.1),
(22, 'Sawi', '', '100', 4, 2.3, 0.3),
(23, 'Wortel', '', '100', 9.3, 1.2, 0.3),
(24, 'Bayam merah', '', '100', 10, 4.6, 0.5),
(25, 'Daun melinjo', '', '100', 21.3, 5, 1.3),
(26, 'Kacang kapri', '', '100', 17.7, 6.7, 0.4),
(27, 'Mlinjo', '', '100', 13.3, 5, 0.7),
(28, 'Daun talas', '', '100', 4.1, 2.1, 12.3),
(29, 'Kluwih', '', '100', 27.2, 1.5, 0.3),
(30, 'Daun papaya', '', '100', 11.9, 8, 2),
(31, 'Taoge kedelai', '', '100', 6.4, 9, 2.6),
(32, 'Daun singkong', '', '100', 13, 6.8, 1.2);

-- --------------------------------------------------------

--
-- Table structure for table `sumberhewani`
--

CREATE TABLE `sumberhewani` (
  `Index` int(100) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` set('1/2 Gelas','4 Buah Besar','5 1/2 Sendok Besar','3 Buah Sedang','2 Buah Sedang','12 Biji','10 Sendok Makan','2 Gelas','1 Gelas','3/4 Gelas','3 Iris','1 1/2 Potong','3 Potong Sedang','1/2 Biji Sedang','5 Sendok Makan','1 Potong Sedang','8 Sendok Makan','5 Sendok Makan','1 Biji Sedang') NOT NULL,
  `Gr` int(100) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sumbernabati`
--

CREATE TABLE `sumbernabati` (
  `Id` int(255) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` tinytext NOT NULL,
  `Gr` int(100) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumbernabati`
--

INSERT INTO `sumbernabati` (`Id`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(1, 'Kacang Hijau', '2 Sendok Makan', 20, 3.66, 1.74, 0.1),
(2, 'Kacang Kedelai', '2 1/2Sendok Makan', 25, 6.225, 10, 4.175),
(3, 'Kacang Merah', '2 Sendok Makan', 20, 5.6, 2.2, 0.44),
(4, 'Kacang Mete', '1 1/2 Sendok Makan', 15, 5.235, 2.925, 7.095),
(5, 'Kacang Tanah Kupas', '2 Sendok Makan', 15, 3.165, 3.795, 6.42),
(6, 'Kacang Tolo', '2 Sendok Makan', 20, 11.32, 4.88, 0.38),
(7, 'Keju Kacang Tanah', '1 Sendok Makan', 15, 3.135, 4.05, 7.35),
(8, 'Kembang Tahu', '1 Lembar', 20, 4.66, 9.78, 2.76),
(9, 'Petai Segar', '1/2 Gelas', 55, 12.1, 5.72, 5.06),
(10, 'Tahu', '1 Biji Besar ', 110, 1.76, 8.58, 5.06),
(11, 'Sari Kedelai', '2 1/2 Gelas', 185, 79.55, 55.5, 37),
(13, 'nasi lagi', '1/2 gelas', 7443, 30.04, 2.76, 5.76);

-- --------------------------------------------------------

--
-- Table structure for table `sumberpokok`
--

CREATE TABLE `sumberpokok` (
  `Id` int(11) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` set('1/2 Gelas','4 Buah Besar','5 1/2 Sendok Besar','3 Buah Sedang','2 Buah Sedang','12 Biji','10 Sendok Makan','2 Gelas','1 Gelas','3/4 Gelas','3 Iris','1 1/2 Potong','3 Potong Sedang','1/2 Biji Sedang','5 Sendok Makan','1 Potong Sedang','8 Sendok Makan','5 Sendok Makan','1 Biji Sedang') NOT NULL,
  `Gr` int(100) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumberpokok`
--

INSERT INTO `sumberpokok` (`Id`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(1, 'Bihun', '1/2 Gelas', 60, 49.26, 2.82, 0.06),
(2, 'Biskuit', '4 Buah Besar', 40, 30.04, 2.76, 5.76),
(3, 'Havermout', '5 1/2 Sendok Besar', 45, 38.79, 6.39, 3.33),
(4, 'Jagung segar', '3 Buah Sedang', 125, 41.375, 5.875, 1.625),
(5, 'Kentang', '2 Buah Sedang', 210, 40.11, 4.2, 0.21),
(6, 'Kentang Hitam', '12 Biji', 125, 42.125, 1.125, 0.5),
(7, 'Maizena', '10 Sendok Makan', 50, 127.5, 0.45, 0),
(8, 'Makaroni', '1/2 Gelas', 50, 39.35, 4.35, 0.2),
(9, 'Mie Basah', '2 Gelas', 200, 28, 1.2, 6.6),
(10, 'Mie Kering', '1 Gelas', 50, 25, 3.95, 5.9),
(11, 'Nasi Beras Giling Putih', '3/4 Gelas', 100, 40.6, 2.1, 0.1),
(12, 'Nasi Beras Giling Merah', '3/4 Gelas', 100, 40.6, 2.1, 0.1),
(13, 'Nasi Beras Giling Hitam', '3/4 Gelas', 100, 40.6, 2.1, 0.1),
(14, 'Nasi Beras 1/2 Giling', '3/4 Gelas', 100, 33.2, 4, 0.5),
(15, 'Nasi Ketan Putih', '3/4 Gelas', 100, 79.4, 6.7, 0.7),
(16, 'Roti Putih', '3 Iris', 70, 35, 5.6, 0.84),
(17, 'Roti warna Coklat', '3 Iris', 70, 34.79, 5.53, 1.05),
(18, 'Singkong', '1 1/2 Potong', 120, 6.72, 0.24, 4.32),
(19, 'Sukun', '3 Potong Sedang', 150, 42.15, 2.1, 0.3),
(20, 'Talas', '1/2 Biji Sedang', 125, 29.625, 2.375, 0.25),
(21, 'Tape Beras Ketan', '5 Sendok Makan', 100, 34.4, 2.8, 1),
(22, 'Tape Singkong', '1 Potong Sedang', 100, 42.5, 0.5, 0.1),
(23, 'Tepung Tapioka', '8 Sendok Makan', 50, 43.45, 0.25, 0.15),
(24, 'Tepung Beras', '8 Sendok Makan', 50, 40, 3.5, 0.25),
(25, 'Tepung Hungkwe', '10 Sendok Makan', 50, 41.75, 2.25, 0.5),
(26, 'Tepung Sagu', '8 Sendok Makan', 50, 42.35, 0.35, 0.1),
(27, 'Tepung Singkong', '5 Sendok Makan', 50, 43.35, 0.25, 0.15),
(28, 'Tepung biasa', '1 1/2 Potong', 50, 38.65, 4.45, 0.65);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'asiah', 'asiah@gmail.com', '$2y$10$kfZRWhZdUkntRA37DVRKv.eeIIJpe54V.MyT4FGrtUZcbA4qyfbCC', 1, 1, 1640364194),
(5, 'Nur Asiah', 'asiahnur@gmail.com', '$2y$10$HNnKioRf7arYMEwT9tcCrOPkjh6bbuSa4lMugnjTTXTkPlHdAj/6O', 2, 1, 1640408885);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `Id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`Id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Input Data', 'user', 'fas fa-fw fa-laptop-medical', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inputdata`
--
ALTER TABLE `inputdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumbernabati`
--
ALTER TABLE `sumbernabati`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sumberpokok`
--
ALTER TABLE `sumberpokok`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inputdata`
--
ALTER TABLE `inputdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sumbernabati`
--
ALTER TABLE `sumbernabati`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sumberpokok`
--
ALTER TABLE `sumberpokok`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
