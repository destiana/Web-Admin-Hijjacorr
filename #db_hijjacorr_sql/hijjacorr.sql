-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 09:37 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hijjacorr`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1480644819),
('m130524_201442_init', 1480644822),
('m140506_102106_rbac_init', 1482426800),
('m151024_072453_create_route_table', 1482430687);

-- --------------------------------------------------------

--
-- Table structure for table `model1`
--

CREATE TABLE `model1` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `model2`
--

CREATE TABLE `model2` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `model3`
--

CREATE TABLE `model3` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `model4`
--

CREATE TABLE `model4` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `panduan`
--

CREATE TABLE `panduan` (
  `id_panduan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `panduan_app`
--

CREATE TABLE `panduan_app` (
  `id_panduan_app` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `panduan_app`
--

INSERT INTO `panduan_app` (`id_panduan_app`, `judul`, `isi`, `gambar`, `url`) VALUES
(1, 'Home', 'Panduan Aplikasi 1', 'a.png', 'http://localhost/Hijjacorr/backend/web/uploads/a.png'),
(2, 'Proses Capture', 'Panduan Aplikasi 2', 'a2.png', ''),
(3, 'Hasil Capture Tidak Sesuai', 'Panduan Aplikasi 3', 'a3.png', ''),
(4, 'Hasil Capture Sesuai', 'Panduan Aplikasi 4', 'a4.png', ''),
(5, 'Setting', 'Panduan Aplikasi 5', 'a6.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id`, `judul`, `isi`, `gambar`, `url`) VALUES
(1, 'Pengertian Hijab', 'Hijab adalah kata dalam bahasa Arab yang berarti penghalang. Namun dalam keilmuan Islam, hijab lebih tepat merujuk kepada tatacara berpakaian yang pantas sesuai dengan tuntunan agama. Namun dalam keilmuan Islam, hijab lebih tepat merujuk kepada tatacara berpakaian yang pantas sesuai dengan tuntunan agama. Jilbab adalah kerudung wanita yang menutupi kepala dan wajahnya apabila ia keluar untuk suatu keperluan. Ada pula yang mengartikan Jilbab itu sebagai pakaian yang lebar sekaligus kerudung. Dalam Islam, hukum berhijab bagi wanita muslimah adalah wajib.', '1.png', ''),
(2, 'Pengertian Hijab', 'Di zaman sekarang ini semakin semarak saja kita lihat perempuan-perempuan muslimah untuk memperlihatkan penampilan yang cantik, anggun, gaul dan mempesona. Dia memakai Jilbab berdasarkan trend mode, semakin gaul Jilbab yang dipakainya itu semakin pede saja ia yang memakainya belum lagi jika kita coba menyelidiki sikap dan tingkah lakunya perempuan-perempuan yang terjilbab itu, ada yang tidak bisa mengendalikan emosi dan hasratnya. Ada yang memakai Jilbab atas motif sudah taubat. Ada yang memakaianya karena menyadari bahwa umurnya semakin tua sehingga semakin ingin memasrahkan diri pada yang kuasa, dan masih banyak alasan-alasan perempuan muslimah ingin memakai Jilbab.\r\n\r\nMemakai hijab merupakan salah satu kewajiban setiap wanita muslim. Saat ini memang sudah banyak para anak perempuan yang mengenakan hijab. Namun dengan tujuan apakah seseorang mengenakan hijab tersebut? Sudah benarkah cara mereka mengenakan hijab?', '2.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tuntunan`
--

CREATE TABLE `tuntunan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'VuNno1O8dUT_PnBzKE3md-tFM9PRf1gU', '$2y$13$K5llmUG8XRYQfkt6beR8Q.CsD/vEdLuCPcxJ4/Hnsvyr4V17bxIga', NULL, 'admin@admin.com', 10, 1480644869, 1480644869),
(2, 'root', 'a8e0vk947f3RSdbz5ooqPdgVMINlp_k5', '$2y$13$1n1T/.KayGU/A.SNsXVjEOlqWNxjEq7U0Fka4.9KUXA/.O5TGPmJm', NULL, 'root@root.com', 10, 1481202666, 1481202666);

-- --------------------------------------------------------

--
-- Table structure for table `verif_gambar`
--

CREATE TABLE `verif_gambar` (
  `id_verif_gambar` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `model1`
--
ALTER TABLE `model1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model2`
--
ALTER TABLE `model2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model3`
--
ALTER TABLE `model3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model4`
--
ALTER TABLE `model4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panduan`
--
ALTER TABLE `panduan`
  ADD PRIMARY KEY (`id_panduan`);

--
-- Indexes for table `panduan_app`
--
ALTER TABLE `panduan_app`
  ADD PRIMARY KEY (`id_panduan_app`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuntunan`
--
ALTER TABLE `tuntunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `verif_gambar`
--
ALTER TABLE `verif_gambar`
  ADD PRIMARY KEY (`id_verif_gambar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `model1`
--
ALTER TABLE `model1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `model2`
--
ALTER TABLE `model2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `model3`
--
ALTER TABLE `model3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `model4`
--
ALTER TABLE `model4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `panduan`
--
ALTER TABLE `panduan`
  MODIFY `id_panduan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `panduan_app`
--
ALTER TABLE `panduan_app`
  MODIFY `id_panduan_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tuntunan`
--
ALTER TABLE `tuntunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `verif_gambar`
--
ALTER TABLE `verif_gambar`
  MODIFY `id_verif_gambar` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
