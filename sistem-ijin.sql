-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 03:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem-ijin`
--

-- --------------------------------------------------------

--
-- Table structure for table `santri_kampus_1`
--

CREATE TABLE `santri_kampus_1` (
  `id` int(11) NOT NULL,
  `gedung` varchar(255) NOT NULL,
  `kamar` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `jenjang` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `wali` varchar(125) NOT NULL,
  `no_telepon` varchar(125) NOT NULL,
  `izin` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tgl_ijin` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `santri_kampus_1`
--

INSERT INTO `santri_kampus_1` (`id`, `gedung`, `kamar`, `nama`, `kelas`, `jenjang`, `alamat`, `wali`, `no_telepon`, `izin`, `keterangan`, `tgl_ijin`, `tgl_kembali`, `status`) VALUES
(2, 'Utsman bin Affan', '306', 'Ahmad Hilaluddin Amrul Haqq', '11 MA', 'MA', '1', 'qqq', '7877', 'Pulang', 'sddsds', 1625393606, '2021-07-04', 2);

-- --------------------------------------------------------

--
-- Table structure for table `santri_kampus_2`
--

CREATE TABLE `santri_kampus_2` (
  `id` int(11) NOT NULL,
  `gedung` varchar(255) NOT NULL,
  `kamar` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `jenjang` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `wali` varchar(125) NOT NULL,
  `no_telepon` varchar(125) NOT NULL,
  `izin` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tgl_ijin` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `santri_kampus_3`
--

CREATE TABLE `santri_kampus_3` (
  `id` int(11) NOT NULL,
  `gedung` varchar(255) NOT NULL,
  `kamar` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `jenjang` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `wali` varchar(125) NOT NULL,
  `no_telepon` varchar(125) NOT NULL,
  `izin` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tgl_ijin` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `santri_kampus_4`
--

CREATE TABLE `santri_kampus_4` (
  `id` int(11) NOT NULL,
  `gedung` varchar(255) NOT NULL,
  `kamar` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `jenjang` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `wali` varchar(125) NOT NULL,
  `no_telepon` varchar(125) NOT NULL,
  `izin` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tgl_ijin` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Rizki Darmawan', 'rizkidarmawan.0402102@gmail.com', '82136068_564015250820961_3123872779741429760_n.jpg', '$2y$10$x17EPe1mMNikeSqGFYznkOUgLto6SL7WrQ1VuZ6Y5yTq8RLa7INFi', 1, 1, 1623510902),
(11, 'Admin Kampus 3', 'adminkampus3@gmail.com', 'default.jpg', '$2y$10$Otn1XpjVhsr0/VEH/0qX1.8MqR54MxoELjfI4VjIezTuruazbr2z.', 12, 1, 1625382246),
(12, 'Admin Kampus 4', 'adminkampus4@gmail.com', 'default.jpg', '$2y$10$ZFyDscGPICfHc9MwHEKla.q7WPRblJrgnZD4krlLctQEnx/m176q.', 13, 1, 1625382485),
(13, 'Admin Kampus 2', 'adminkampus2@gmail.com', 'default.jpg', '$2y$10$XwXnmBfFRziugGkvpsJJdOBDwDKgNQjsAK/CFgnlkve0yDSDLtbLy', 11, 1, 1625382539),
(14, 'Admin Perizinan-Kantor Pusat', 'adminkampus1@gmail.com', 'default.jpg', '$2y$10$1EfqRyst847lew57cCMi6O8h9L3KUYmefqh29G.jCiUdgtYUQJwS2', 14, 1, 1625382604);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(46, 1, 3),
(49, 1, 15),
(50, 10, 2),
(52, 11, 2),
(53, 12, 2),
(54, 13, 2),
(55, 13, 15),
(56, 14, 15),
(57, 14, 2),
(58, 1, 16),
(59, 14, 16),
(60, 12, 16),
(61, 1, 17),
(62, 14, 17),
(63, 11, 17),
(65, 10, 18),
(66, 1, 18),
(67, 14, 18);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(15, 'Kampus_4'),
(16, 'Kampus_3'),
(17, 'Kampus_2'),
(18, 'Kampus_1');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(10, 'Admin Kampus 1'),
(11, 'Admin Kampus 2'),
(12, 'Admin Kampus 3'),
(13, 'Admin Kampus 4'),
(14, 'Admin Peizinan');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user/user', 'fas fa-fw fa-user ', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(7, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(21, 15, 'Perizinan Santri', 'kampus_4', 'fas fa-fw fa-user-plus', 1),
(22, 15, 'Masa Izin', 'kampus_4/masaIzin', 'fas fa-fw fa-user-clock', 1),
(23, 15, 'Log Perizinan', 'kampus_4/log', 'fas fa-fw fa-user-check', 1),
(24, 16, 'Perizinan Santri', 'kampus_3', 'fas fa-fw fa-user-plus', 1),
(25, 16, 'Masa Izin', 'kampus_3/masaIzin', 'fas fa-fw fa-user-clock', 1),
(26, 16, 'Log Perizinan', 'kampus_3/log', 'fas fa-fw fa-user-check', 1),
(27, 17, 'Perizinan Santri', 'kampus_2', 'fas fa-fw fa-user-plus', 1),
(28, 17, 'Masa Izin', 'kampus_2/masaIzin', 'fas fa-fw fa-user-clock', 1),
(29, 17, 'Log Perizinan', 'kampus_2/log', 'fas fa-fw fa-user-check', 1),
(30, 18, 'Perizinan Santri', 'kampus_1', 'fas fa-fw fa-user-plus', 1),
(31, 18, 'Masa Izin', 'kampus_1/masaIzin', 'fas fa-fw fa-user-clock', 1),
(32, 18, 'Log Perizianan', 'kampus_1/log', 'fas fa-fw fa-user-check', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `santri_kampus_1`
--
ALTER TABLE `santri_kampus_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `santri_kampus_2`
--
ALTER TABLE `santri_kampus_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `santri_kampus_3`
--
ALTER TABLE `santri_kampus_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `santri_kampus_4`
--
ALTER TABLE `santri_kampus_4`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `santri_kampus_1`
--
ALTER TABLE `santri_kampus_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `santri_kampus_2`
--
ALTER TABLE `santri_kampus_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `santri_kampus_3`
--
ALTER TABLE `santri_kampus_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `santri_kampus_4`
--
ALTER TABLE `santri_kampus_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
