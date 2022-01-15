-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 07:10 AM
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
  `Id` int(11) NOT NULL,
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

INSERT INTO `buah` (`Id`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(1, 'Alpokat', '1/2 buah besar', 60, 4.62, 0.54, 3.9),
(2, 'Anggur', '20 buah sedang', 165, 21.12, 0.825, 0.33),
(3, 'Apel merah', '1 buah kecil', 85, 12.665, 0.255, 0.34),
(4, 'Belimbing', '1 buah besar', 140, 12.32, 0.56, 0.56),
(5, 'Durian', '2 biji besar', 35, 9.8, 8.75, 1.05),
(6, 'Jambu air', '2 buah sedang', 110, 12.98, 0.66, 0.22),
(7, 'Jambu biji', '1 buah besar', 100, 12.2, 0.9, 0.3),
(8, 'Jeruk bali', '1 potong', 105, 13.02, 0.63, 0.21),
(9, 'Jeruk manis', '2 buah sedang', 100, 12.32, 0.99, 0.22),
(10, 'Jeruk nipis', '1 1/4 gelas', 135, 16.605, 1.08, 5),
(11, 'Kedondong', '2 buah sedang', 120, 12.36, 1.2, 0.12),
(12, 'Mangga', '3/4 buah besar', 90, 10.08, 0.63, 0.18),
(13, 'Manggis', '2 buah sedang', 80, 12.48, 0.48, 0.48),
(14, 'Melon', '1 potong', 90, 16.34, 1.596, 0.361),
(15, 'Nangka masak', '3 biji sedang', 45, 12.42, 0.54, 0.135),
(16, 'Nanas', '1/4 buah sedang', 85, 13.015, 0.38, 0.19);

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
  `jk` enum('Laki-laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inputdata`
--

INSERT INTO `inputdata` (`id`, `tinggi`, `berat`, `umur`, `aktivitas`, `jk`) VALUES
(28, 140, 80, 34, 'Ringan', 'Perempuan'),
(29, 15, 15, 18, 'Ringan', 'Perempuan'),
(30, 20, 20, 20, 'Ringan', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `sayur`
--

CREATE TABLE `sayur` (
  `Id` int(11) NOT NULL,
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

INSERT INTO `sayur` (`Id`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(1, 'Tomat sayur', '', '100', 4.2, 1, 0.3),
(2, 'Daun bawang', '', '100', 5.2, 1.8, 0.7),
(3, 'Bayam', '', '100', 6.5, 3.5, 0.5),
(4, 'Brokoli', '', '100', 6.6, 2.8, 0.4),
(5, 'Kemangi', '', '100', 7.5, 5.5, 0.3),
(6, 'Kangkung', '', '100', 5.4, 3, 0.3),
(7, 'Kol', '', '100', 5.3, 1.4, 0.2),
(8, 'Buncis', '', '100', 7.7, 2.4, 0.2),
(9, 'Terong', '', '100', 5.5, 1.1, 0.2),
(10, 'Labu', '', '100', 1.1, 0.3, 0.3),
(11, 'Pepaya muda', '', '100', 4.9, 2.1, 0.1),
(12, 'Labu Siam', '', '100', 6.7, 0.6, 0.1),
(13, 'Pare', '', '100', 6.6, 1.1, 0.3),
(14, 'Kacang panjang', '', '100', 7.8, 2.7, 0.3),
(15, 'Jagung muda', '', '100', 7.4, 2.2, 0.1),
(16, 'Sawi', '', '100', 4, 2.3, 0.3),
(17, 'Wortel', '', '100', 9.3, 1.2, 0.3),
(18, 'Daun papaya', '', '100', 11.9, 8, 2),
(19, 'Taoge', '', '100', 6.4, 9, 2.6),
(20, 'Daun singkong', '', '100', 13, 6.8, 1.2);

-- --------------------------------------------------------

--
-- Table structure for table `sumberhewani`
--

CREATE TABLE `sumberhewani` (
  `Id` int(11) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` varchar(255) NOT NULL,
  `Gr` int(100) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumberhewani`
--

INSERT INTO `sumberhewani` (`Id`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(1, 'Cumi-cumi', '1 ekor kecil', 45, 0.045, 7.245, 0.315),
(2, 'Daging ayam tanpa kulit', '1 potong sedang', 40, 0, 12.304, 1.416),
(3, 'Udang segar', '5 ekor sedang', 35, 0.035, 7.35, 0.07),
(4, 'Ikan kakap', '1/3 ekor besar', 35, 0, 7, 0.245),
(5, 'Ikan lele', '1/2 ekor sedang', 40, 1.4, 3.12, 14.52),
(6, 'Ikan mujair', '1/3 ekor sedang', 30, 0, 5.61, 0.3),
(7, 'Ikan peda', '1 ekor kecil', 35, 1.33, 3.99, 0.665),
(8, 'Ikan pindang / Layang', '1/2 ekor sedang', 25, 0, 7, 1.05),
(9, 'Ikan teri kering', '1 sendok makan', 20, 0, 6.68, 0.6),
(10, 'Kerang', '1/2 gelas', 90, 3.24, 7.2, 0.99),
(11, 'Ikan lemuru / sarden', '1 potong sedang', 35, 0, 7, 1.05),
(12, 'Putih telur ayam', '2 1/2 butir', 65, 0.52, 7.02, 0),
(13, 'Rebon kering', '2 sendok makan', 10, 0.32, 5.94, 0.36),
(14, 'Rebon basah', '2 sendok makan', 45, 0.315, 7.29, 0.54),
(15, 'Selar kering', '1 ekor', 20, 0, 6.68, 0.6);

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
(2, 'Kacang Tanah Kupas\r\n', '2 Sendok Makan', 15, 3.165, 3.795, 6.42),
(3, 'Tempe\r\n', '2 Potong Besar\r\n', 50, 1.6, 2.3, 2.9),
(4, 'Tahu\r\n', '1 Biji Besar \r\n', 110, 1.76, 8.58, 5.06);

-- --------------------------------------------------------

--
-- Table structure for table `sumberpokok`
--
-- Error reading structure for table gizi_obesitas.sumberpokok: #1932 - Table 'gizi_obesitas.sumberpokok' doesn't exist in engine
-- Error reading data for table gizi_obesitas.sumberpokok: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `gizi_obesitas`.`sumberpokok`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `sumber_pokok`
--

CREATE TABLE `sumber_pokok` (
  `Id` int(11) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` varchar(255) NOT NULL,
  `Gr` int(100) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumber_pokok`
--

INSERT INTO `sumber_pokok` (`Id`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(1, 'Bihun', '1/2 Gelas', 60, 49.26, 2.82, 0.06),
(2, 'Biskuit', '4 Buah Besar', 40, 30.04, 2.76, 5.76),
(3, 'Jagung segar', '3 Buah Sedang', 125, 41.375, 5.875, 1.625),
(4, 'Kentang', '2 Buah Sedang', 210, 40.11, 4.2, 0.21),
(5, 'Kerupuk Udang/Ikan', '3 Biji Sedang', 30, 9.78, 1.26, 6.87),
(6, 'Maizena', '10 Sendok Makan', 50, 127.5, 0.45, 0),
(7, 'Makaroni', '1/2 Gelas', 50, 39.35, 4.35, 0.2),
(8, 'Mie Basah', '2 Gelas', 200, 28, 1.2, 6.6),
(9, 'Mie Kering', '1 Gelas', 50, 25, 3.95, 5.9),
(10, 'Nasi Beras Merah', '10 Sendok Makan', 100, 22.78, 2.56, 0.89),
(11, 'Ubi Jalar Ungu', '1 Biji Sedang', 135, 36.045, 1.08, 0.675),
(12, 'Roti Putih', '3 Iris', 70, 35, 5.6, 0.84),
(13, 'Roti warna Coklat', '3 Iris', 70, 34.79, 5.53, 1.05),
(14, 'Singkong', '1 1/2 Potong', 120, 6.72, 0.24, 4.32),
(15, 'Sukun', '3 Potong Sedang', 150, 42.15, 2.1, 0.3),
(16, 'Tape Beras Ketan', '5 Sendok Makan', 100, 34.4, 2.8, 1),
(17, 'Tape Singkong', '1 Potong Sedang', 100, 42.5, 0.5, 0.1),
(18, 'Tepung Tapioka', '8 Sendok Makan', 50, 43.45, 0.25, 0.15),
(19, 'Tepung Beras putih', '8 Sendok Makan', 50, 40, 3.5, 0.25),
(20, 'Tepung Hungkwe', '10 Sendok Makan', 50, 41.75, 2.25, 0.5),
(21, 'Tepung Singkong', '5 Sendok Makan', 50, 43.35, 0.25, 0.15),
(22, 'Tepung Terigu', '5 Sendok Makan', 50, 38.65, 4.45, 0.65),
(23, 'Ubi Jalar Kuning', '1 Biji Sedang', 135, 36.045, 1.08, 0.675);

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
(1, 'asiah', 'asiah@gmail.com', '$2y$10$kfZRWhZdUkntRA37DVRKv.eeIIJpe54V.MyT4FGrtUZcbA4qyfbCC', 1, 1, 1640364194),
(2, 'Nur Asiah', 'asiahnur@gmail.com', '$2y$10$HNnKioRf7arYMEwT9tcCrOPkjh6bbuSa4lMugnjTTXTkPlHdAj/6O', 2, 1, 1640408885),
(3, 'nasrul', 'nas@gmail.com', '$2y$10$n0PH47FtMrdQFieoO4d.mOqfnpCCp2Vdd8ycxxPVsAe7siD/VYRiy', 2, 1, 1640747696),
(4, 'ayu', 'ayu@gmail.com', '$2y$10$yeqdOveDpdgbOG2AGy34gOslx3gZ6BYO7MrFFrdmFf4oh9cIq4/MG', 2, 1, 1640747728),
(5, 'asiah', 'saya@gmail.com', '$2y$10$RbRcPn/ZdlU6o0OXZ9nUp.bNuf2Lv3dv51xAqbwhYV9zQTTTBXWuO', 2, 1, 1640773591),
(6, 'mila', 'mila@gmail.com', '$2y$10$UH73xso.rrf0gps7X3dGtewTzb4TAUYw0h8hgCJc8gonvkaC497WG', 2, 1, 8);

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
-- Indexes for table `buah`
--
ALTER TABLE `buah`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `inputdata`
--
ALTER TABLE `inputdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sayur`
--
ALTER TABLE `sayur`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sumberhewani`
--
ALTER TABLE `sumberhewani`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sumbernabati`
--
ALTER TABLE `sumbernabati`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sumber_pokok`
--
ALTER TABLE `sumber_pokok`
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
-- AUTO_INCREMENT for table `buah`
--
ALTER TABLE `buah`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `inputdata`
--
ALTER TABLE `inputdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sayur`
--
ALTER TABLE `sayur`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sumberhewani`
--
ALTER TABLE `sumberhewani`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sumbernabati`
--
ALTER TABLE `sumbernabati`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sumber_pokok`
--
ALTER TABLE `sumber_pokok`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
