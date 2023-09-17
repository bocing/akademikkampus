-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 01, 2018 at 11:06 AM
-- Server version: 10.1.31-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sourceco_rapordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensiswa`
--

DROP TABLE IF EXISTS `absensiswa`;
CREATE TABLE `absensiswa` (
  `id` int(11) NOT NULL,
  `idngajar` int(11) DEFAULT '0',
  `ke` int(11) DEFAULT '0',
  `idsiswa` int(11) DEFAULT '0',
  `idjadwal` int(11) DEFAULT '0',
  `hadir` int(11) DEFAULT '0',
  `keterangan` varchar(80) DEFAULT ' ',
  `tahunid` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `absensiswa`
--

TRUNCATE TABLE `absensiswa`;
--
-- Dumping data for table `absensiswa`
--

INSERT INTO `absensiswa` (`id`, `idngajar`, `ke`, `idsiswa`, `idjadwal`, `hadir`, `keterangan`, `tahunid`) VALUES
(106, 43, 1, 585, 4, 3, ' ', 0),
(107, 43, 1, 631, 4, 1, ' ', 0),
(108, 43, 1, 679, 4, 1, ' ', 0),
(109, 43, 1, 786, 4, 1, ' ', 0),
(110, 43, 1, 854, 4, 1, ' ', 0),
(111, 43, 1, 906, 4, 1, ' ', 0),
(112, 43, 1, 929, 4, 1, ' ', 0),
(113, 44, 2, 585, 4, 1, ' ', 0),
(114, 44, 2, 631, 4, 1, ' ', 0),
(115, 44, 2, 679, 4, 1, ' ', 0),
(116, 44, 2, 786, 4, 1, ' ', 0),
(117, 44, 2, 854, 4, 1, ' ', 0),
(118, 44, 2, 906, 4, 1, ' ', 0),
(119, 44, 2, 929, 4, 1, ' ', 0),
(120, 41, 1, 567, 3, 1, ' ', 0),
(121, 41, 1, 688, 3, 1, ' ', 0),
(122, 41, 1, 720, 3, 1, ' ', 0),
(123, 41, 1, 958, 3, 1, ' ', 0),
(124, 41, 1, 993, 3, 1, ' ', 0),
(125, 42, 2, 567, 3, 1, ' ', 0),
(126, 42, 2, 688, 3, 3, ' ', 0),
(127, 42, 2, 720, 3, 1, ' ', 0),
(128, 42, 2, 958, 3, 1, ' ', 0),
(129, 42, 2, 993, 3, 1, ' ', 0),
(130, 46, 3, 567, 3, 1, ' ', 0),
(131, 46, 3, 688, 3, 2, ' ', 0),
(132, 46, 3, 720, 3, 1, ' ', 0),
(133, 46, 3, 958, 3, 1, ' ', 0),
(134, 46, 3, 993, 3, 1, ' ', 0),
(135, 49, 1, 585, 5, 1, ' ', 0),
(136, 49, 1, 631, 5, 1, ' ', 0),
(137, 49, 1, 679, 5, 3, ' ', 0),
(138, 49, 1, 786, 5, 1, ' ', 0),
(139, 49, 1, 854, 5, 1, ' ', 0),
(140, 49, 1, 906, 5, 1, ' ', 0),
(141, 49, 1, 929, 5, 1, ' ', 0),
(142, 50, 2, 585, 5, 1, ' ', 0),
(143, 50, 2, 631, 5, 1, ' ', 0),
(144, 50, 2, 679, 5, 1, ' ', 0),
(145, 50, 2, 786, 5, 1, ' ', 0),
(146, 50, 2, 854, 5, 1, ' ', 0),
(147, 50, 2, 906, 5, 1, ' ', 0),
(148, 50, 2, 929, 5, 1, ' ', 0),
(154, 52, 1, 567, 6, 0, ' ', 0),
(155, 52, 1, 688, 6, 1, ' ', 0),
(156, 52, 1, 720, 6, 1, ' ', 0),
(157, 52, 1, 958, 6, 1, ' ', 0),
(158, 52, 1, 993, 6, 1, ' ', 0),
(161, 54, 2, 1030, 15, 0, ' ', 0),
(162, 51, 1, 567, 8, 0, ' ', 0),
(163, 51, 1, 688, 8, 1, ' ', 0),
(164, 51, 1, 720, 8, 1, ' ', 0),
(165, 51, 1, 958, 8, 1, ' ', 0),
(166, 51, 1, 993, 8, 1, ' ', 0),
(172, 55, 1, 567, 7, 0, ' ', 0),
(173, 55, 1, 688, 7, 1, ' ', 0),
(174, 55, 1, 720, 7, 1, ' ', 0),
(175, 55, 1, 958, 7, 1, ' ', 0),
(176, 55, 1, 993, 7, 1, ' ', 0),
(177, 72, 2, 567, 8, 1, ' ', 0),
(178, 72, 2, 688, 8, 1, ' ', 0),
(179, 72, 2, 720, 8, 1, ' ', 0),
(180, 72, 2, 958, 8, 1, ' ', 0),
(181, 72, 2, 993, 8, 1, ' ', 0),
(182, 63, 7, 567, 6, 1, ' ', 0),
(183, 63, 7, 688, 6, 1, ' ', 0),
(184, 63, 7, 720, 6, 1, ' ', 0),
(185, 63, 7, 958, 6, 1, ' ', 0),
(186, 63, 7, 993, 6, 1, ' ', 0),
(187, 73, 1, 1030, 16, 2, ' ', 0),
(188, 74, 1, 1030, 17, 2, ' ', 0),
(191, 75, 1, 1030, 18, 2, ' ', 0),
(192, 76, 1, 1030, 13, 2, ' ', 0),
(193, 77, 2, 1030, 18, 3, ' ', 0),
(194, 78, 1, 1030, 12, 3, ' ', 0),
(199, 79, 2, 1030, 12, 0, ' ', 0),
(200, 57, 1, 1030, 14, 1, ' ', 0),
(201, 81, 2, 1030, 16, 0, ' ', 0),
(202, 53, 1, 1030, 15, 1, ' ', 0),
(203, 45, 3, 585, 4, 1, ' ', 0),
(204, 45, 3, 631, 4, 1, ' ', 0),
(205, 45, 3, 679, 4, 1, ' ', 0),
(206, 45, 3, 786, 4, 1, ' ', 0),
(207, 45, 3, 854, 4, 1, ' ', 0),
(208, 45, 3, 906, 4, 1, ' ', 0),
(209, 45, 3, 929, 4, 1, ' ', 0),
(210, 45, 3, 932, 4, 1, ' ', 0),
(211, 82, 2, 1030, 17, 2, ' ', 0),
(212, 83, 3, 567, 8, 2, ' ', 0),
(213, 83, 3, 720, 8, 1, ' ', 0),
(214, 83, 3, 993, 8, 3, ' ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `acl_resources`
--

DROP TABLE IF EXISTS `acl_resources`;
CREATE TABLE `acl_resources` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` enum('module','controller','action','other') NOT NULL DEFAULT 'other',
  `parent` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `acl_resources`
--

TRUNCATE TABLE `acl_resources`;
--
-- Dumping data for table `acl_resources`
--

INSERT INTO `acl_resources` (`id`, `name`, `type`, `parent`, `created`, `modified`) VALUES
(1, 'welcome', 'module', NULL, '2012-11-12 12:07:26', NULL),
(2, 'auth', 'module', NULL, '2012-11-12 04:00:23', NULL),
(3, 'auth/login', 'controller', 2, '2012-11-12 12:43:42', '2012-11-12 12:44:06'),
(4, 'auth/logout', 'controller', 2, '2012-11-12 12:43:56', NULL),
(5, 'auth/user', 'controller', 2, '2012-11-12 04:07:59', '2012-11-12 08:29:29'),
(6, 'acl', 'module', NULL, '2012-02-02 13:47:43', NULL),
(7, 'acl/resource', 'controller', 6, '2012-02-02 13:47:57', NULL),
(8, 'acl/resource/index', 'action', 7, '2012-02-02 13:48:21', NULL),
(9, 'acl/resource/add', 'action', 7, '2012-02-02 13:48:35', '2012-10-16 17:26:12'),
(10, 'acl/resource/edit', 'action', 7, '2012-02-02 13:48:50', '2012-07-09 18:44:38'),
(11, 'acl/resource/delete', 'action', 7, '2012-02-02 13:49:06', NULL),
(12, 'acl/role', 'controller', 6, '2012-07-12 17:54:16', NULL),
(13, 'acl/role/index', 'action', 12, '2012-07-12 17:55:29', NULL),
(14, 'acl/role/add', 'action', 12, '2012-07-12 17:56:00', NULL),
(15, 'acl/role/edit', 'action', 12, '2012-07-12 17:56:19', NULL),
(16, 'acl/role/delete', 'action', 12, '2012-07-12 17:56:55', NULL),
(17, 'acl/rule', 'controller', 6, '2012-07-12 17:53:04', NULL),
(18, 'acl/rule/edit', 'action', 17, '2012-07-12 17:53:25', NULL),
(19, 'informasi', 'module', NULL, '2015-02-20 06:57:31', '2015-04-11 06:20:05'),
(20, 'master', 'module', NULL, '2015-04-10 04:19:16', NULL),
(33, 'master/vendor', 'controller', 20, '2015-04-10 10:15:06', NULL),
(91, 'simak', 'module', NULL, '2015-04-15 03:58:05', NULL),
(92, 'simak/inventaris_ruangan', 'controller', 91, '2015-04-15 03:58:28', NULL),
(93, 'simak/inventaris_unit', 'controller', 91, '2015-04-15 03:58:43', NULL),
(94, 'simak/ruangan', 'controller', 91, '2015-04-15 03:58:58', NULL),
(140, 'master/jeul', 'controller', 20, '2016-03-09 17:17:13', '2016-05-15 17:45:48'),
(168, 'master/mapel', 'controller', 20, '2016-03-11 16:50:17', '2016-05-15 17:45:21'),
(170, 'master/siswa', 'controller', 20, '2016-03-11 17:07:37', '2016-05-15 17:44:35'),
(179, 'inventaris', 'module', NULL, '2016-03-12 15:25:39', '2016-05-15 17:38:25'),
(180, 'setting', 'module', NULL, '2016-03-12 15:36:23', NULL),
(187, 'persediaan/at', 'controller', 179, '2016-03-12 20:58:54', NULL),
(195, 'master/ruang', 'module', 20, '2016-03-12 21:20:37', '2016-05-15 17:45:07'),
(196, 'master/sekolah', 'controller', 20, '2016-03-12 21:35:44', '2016-05-15 17:46:12'),
(197, 'master/pengguna', 'controller', 20, '2016-03-13 00:46:18', NULL),
(198, 'setting/tahun', 'controller', 180, '2016-03-13 01:03:17', '2016-08-08 11:25:47'),
(199, 'setting/sekolah', 'controller', 180, '2016-03-13 01:04:07', '2016-08-08 11:26:05'),
(200, 'tool', 'module', NULL, '2016-03-13 16:57:00', NULL),
(201, 'tool/backupdb', 'controller', 200, '2016-03-13 16:57:38', NULL),
(206, 'master/guru', 'controller', 20, '2016-04-25 22:16:28', '2016-05-15 17:44:48'),
(209, 'kelassiswa', 'module', NULL, '2016-05-15 17:55:09', '2016-05-15 18:16:53'),
(210, 'gurumapel', 'module', NULL, '2016-05-15 17:55:24', '2016-05-15 18:17:12'),
(211, 'ulangan', 'module', NULL, '2016-05-15 18:49:15', NULL),
(212, 'penilaian', 'module', NULL, '2016-05-15 18:49:25', '2016-05-15 18:49:37'),
(213, 'laporan', 'module', NULL, '2016-05-15 18:50:07', '2016-05-15 18:53:10'),
(214, 'absen', 'module', NULL, '2016-05-15 18:51:03', '2016-08-01 21:47:20'),
(215, 'ekstra', 'module', NULL, '2016-05-15 18:52:37', NULL),
(216, 'jadwal', 'module', NULL, '2016-05-15 18:54:31', NULL),
(217, 'jadwal/jadwalbelajar', 'module', 216, '2016-05-31 17:50:08', '2016-05-31 20:00:20'),
(218, 'jadwal/jadwaluts', 'module', 216, '2016-05-31 17:50:24', '2016-05-31 20:00:33'),
(219, 'Wilayah', 'module', NULL, '2016-05-31 18:07:25', NULL),
(220, 'jadwal/jadwaluas', 'module', 216, '2016-05-31 22:00:23', NULL),
(221, 'jadwal/jadwallain', 'module', 216, '2016-05-31 22:00:41', NULL),
(222, 'kelassiswa/kelolakelas', 'controller', 209, '2016-06-04 16:36:25', '2016-06-04 16:55:31'),
(223, 'kelassiswa/enrollsiswa', 'controller', 209, '2016-06-04 16:36:50', '2016-06-04 16:46:22'),
(224, 'master/kelompok', 'module', 20, '2016-06-10 17:06:06', NULL),
(225, 'master/jurusan', 'controller', 20, '2016-06-19 22:35:18', NULL),
(226, 'penilaian/prosesnilai', 'controller', 212, '2016-06-20 21:20:38', NULL),
(227, 'penilaian/cetakrapor', 'controller', 212, '2016-06-20 21:20:58', NULL),
(228, 'penilaian/prosesnilai2', 'controller', 212, '2016-07-05 18:55:18', NULL),
(229, 'penilaian/laporan', 'controller', 212, '2016-07-07 10:52:07', NULL),
(230, 'kelassiswa/siswaperkelas', 'controller', 209, '2016-07-11 13:24:09', NULL),
(231, 'penilaian/sikap', 'controller', 212, '2016-07-15 16:50:00', NULL),
(232, 'penilaian/psg', 'controller', 212, '2016-07-15 18:08:25', NULL),
(233, 'penilaian/sikap2', 'controller', 212, '2016-07-16 09:18:41', NULL),
(234, 'penilaian/psg2', 'controller', 212, '2016-07-16 21:31:51', NULL),
(235, 'master/tahun', 'controller', 20, '2016-08-01 21:32:30', NULL),
(236, 'absen/akar', 'controller', 214, '2016-08-04 20:38:38', NULL),
(237, 'absen/agur', 'controller', 214, '2016-08-04 20:45:08', '2016-08-08 10:58:52'),
(238, 'master/kar', 'controller', 20, '2016-08-04 20:47:17', NULL),
(239, 'cetakrapor', 'controller', NULL, '2016-08-08 10:34:18', NULL),
(240, 'absen/pregur', 'module', 214, '2016-08-08 10:59:12', NULL),
(241, 'laporan/absen', 'module', 213, '2016-08-15 20:32:34', NULL),
(242, 'laporan/absen/browse_001', 'module', 213, '2016-08-15 20:32:48', '2016-08-18 10:35:23'),
(243, 'ekstra/ekstra', 'module', 215, '2016-08-18 09:16:35', NULL),
(244, 'ekstra/ekstra1', 'module', 215, '2016-08-18 09:16:46', NULL),
(246, 'ekstra/prestasi', 'module', 215, '2016-08-18 09:17:15', NULL),
(247, 'ekstra/prestasi2', 'module', 215, '2016-08-18 09:17:27', NULL),
(248, 'ekstra/ekstra2', 'module', 215, '2016-08-18 10:05:27', NULL),
(249, 'laporan/absen/browse_002', 'module', 213, '2016-08-18 10:35:54', NULL),
(250, 'laporan/absen/browse_003', 'module', 213, '2016-08-18 10:36:07', NULL),
(251, 'laporan/nilai/browse_001', 'module', 213, '2016-08-18 10:58:15', NULL),
(252, 'laporan/nilai/browse_002', 'module', 213, '2016-08-18 10:58:34', NULL),
(253, 'laporan/nilai/browse_003', 'module', 213, '2016-08-18 10:58:50', NULL),
(254, 'laporan/nilai', 'module', 213, '2016-08-18 10:59:04', NULL),
(255, 'laporan/nilai/browse_004', 'module', 213, '2016-08-18 11:14:24', NULL),
(256, 'laporan/nilai/browse_005', 'module', 213, '2016-08-18 11:14:42', '2016-08-18 11:17:47'),
(257, 'cetakrapor/sampul1', 'module', 239, '2016-08-18 14:16:40', NULL),
(258, 'cetakrapor/sampul2', 'module', 239, '2016-08-18 14:16:53', NULL),
(259, 'cetakrapor/biodata', 'module', 239, '2016-08-18 14:18:20', NULL),
(260, 'penilaian/kb', 'module', 212, '2016-09-24 20:21:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acl_roles`
--

DROP TABLE IF EXISTS `acl_roles`;
CREATE TABLE `acl_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `acl_roles`
--

TRUNCATE TABLE `acl_roles`;
--
-- Dumping data for table `acl_roles`
--

INSERT INTO `acl_roles` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrator', '2011-12-27 12:00:00', NULL),
(2, 'Kepala Sekolah', NULL, NULL),
(3, 'Wali Kelas', '2016-03-09 16:56:08', NULL),
(4, 'Guru', NULL, NULL),
(5, 'Admin', NULL, NULL),
(6, 'Tata Usaha', '2016-08-14 23:02:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acl_role_parents`
--

DROP TABLE IF EXISTS `acl_role_parents`;
CREATE TABLE `acl_role_parents` (
  `role_id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `acl_role_parents`
--

TRUNCATE TABLE `acl_role_parents`;
-- --------------------------------------------------------

--
-- Table structure for table `acl_rules`
--

DROP TABLE IF EXISTS `acl_rules`;
CREATE TABLE `acl_rules` (
  `role_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `access` enum('allow','deny') NOT NULL DEFAULT 'deny',
  `priviledge` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `acl_rules`
--

TRUNCATE TABLE `acl_rules`;
--
-- Dumping data for table `acl_rules`
--

INSERT INTO `acl_rules` (`role_id`, `resource_id`, `access`, `priviledge`) VALUES
(7, 74, 'allow', NULL),
(7, 75, 'allow', NULL),
(7, 76, 'allow', NULL),
(8, 20, 'allow', NULL),
(8, 21, 'deny', NULL),
(8, 22, 'deny', NULL),
(8, 23, 'deny', NULL),
(8, 24, 'deny', NULL),
(8, 25, 'deny', NULL),
(8, 26, 'deny', NULL),
(8, 27, 'deny', NULL),
(8, 28, 'deny', NULL),
(8, 29, 'deny', NULL),
(8, 30, 'deny', NULL),
(8, 31, 'deny', NULL),
(8, 33, 'deny', NULL),
(8, 35, 'deny', NULL),
(8, 36, 'deny', NULL),
(8, 38, 'allow', NULL),
(8, 39, 'allow', NULL),
(8, 40, 'allow', NULL),
(8, 41, 'allow', NULL),
(8, 42, 'allow', NULL),
(8, 43, 'allow', NULL),
(9, 20, 'allow', NULL),
(9, 21, 'deny', NULL),
(9, 22, 'deny', NULL),
(9, 23, 'deny', NULL),
(9, 24, 'deny', NULL),
(9, 25, 'deny', NULL),
(9, 26, 'deny', NULL),
(9, 27, 'deny', NULL),
(9, 28, 'deny', NULL),
(9, 29, 'deny', NULL),
(9, 30, 'deny', NULL),
(9, 31, 'deny', NULL),
(9, 33, 'deny', NULL),
(9, 35, 'deny', NULL),
(9, 36, 'deny', NULL),
(9, 112, 'deny', NULL),
(9, 113, 'deny', NULL),
(11, 19, 'allow', NULL),
(11, 44, 'allow', NULL),
(11, 45, 'allow', NULL),
(11, 46, 'deny', NULL),
(11, 47, 'deny', NULL),
(11, 48, 'allow', NULL),
(11, 49, 'deny', NULL),
(11, 51, 'allow', NULL),
(11, 52, 'allow', NULL),
(11, 57, 'deny', NULL),
(12, 80, 'allow', NULL),
(12, 81, 'allow', NULL),
(12, 82, 'allow', NULL),
(13, 91, 'allow', NULL),
(13, 92, 'allow', NULL),
(13, 93, 'allow', NULL),
(13, 94, 'allow', NULL),
(15, 19, 'allow', NULL),
(15, 21, 'deny', NULL),
(15, 22, 'deny', NULL),
(15, 23, 'deny', NULL),
(15, 24, 'deny', NULL),
(15, 25, 'deny', NULL),
(15, 26, 'deny', NULL),
(15, 27, 'deny', NULL),
(15, 28, 'deny', NULL),
(15, 29, 'deny', NULL),
(15, 30, 'deny', NULL),
(15, 31, 'deny', NULL),
(15, 33, 'deny', NULL),
(15, 35, 'deny', NULL),
(15, 36, 'deny', NULL),
(15, 38, 'allow', NULL),
(15, 39, 'allow', NULL),
(15, 40, 'allow', NULL),
(15, 41, 'allow', NULL),
(15, 42, 'allow', NULL),
(15, 43, 'allow', NULL),
(15, 44, 'allow', NULL),
(15, 45, 'allow', NULL),
(15, 46, 'allow', NULL),
(15, 47, 'allow', NULL),
(15, 48, 'allow', NULL),
(15, 49, 'allow', NULL),
(15, 50, 'allow', NULL),
(15, 51, 'allow', NULL),
(15, 52, 'allow', NULL),
(15, 57, 'allow', NULL),
(15, 100, 'allow', NULL),
(15, 101, 'allow', NULL),
(15, 102, 'allow', NULL),
(15, 109, 'allow', NULL),
(15, 112, 'deny', NULL),
(15, 113, 'deny', NULL),
(17, 20, 'allow', NULL),
(17, 21, 'allow', NULL),
(17, 22, 'allow', NULL),
(17, 23, 'allow', NULL),
(17, 24, 'allow', NULL),
(17, 25, 'allow', NULL),
(17, 26, 'allow', NULL),
(17, 27, 'allow', NULL),
(17, 28, 'allow', NULL),
(17, 29, 'allow', NULL),
(17, 30, 'allow', NULL),
(17, 31, 'allow', NULL),
(17, 33, 'allow', NULL),
(17, 35, 'allow', NULL),
(17, 36, 'allow', NULL),
(19, 21, 'deny', NULL),
(19, 23, 'deny', NULL),
(19, 25, 'deny', NULL),
(19, 28, 'deny', NULL),
(19, 29, 'deny', NULL),
(19, 30, 'deny', NULL),
(19, 31, 'deny', NULL),
(19, 33, 'deny', NULL),
(19, 35, 'deny', NULL),
(19, 36, 'deny', NULL),
(19, 112, 'deny', NULL),
(19, 113, 'deny', NULL),
(21, 2, 'allow', NULL),
(21, 3, 'allow', NULL),
(21, 4, 'allow', NULL),
(21, 5, 'allow', NULL),
(21, 19, 'allow', NULL),
(21, 44, 'allow', NULL),
(21, 45, 'deny', NULL),
(21, 46, 'deny', NULL),
(21, 47, 'deny', NULL),
(21, 48, 'deny', NULL),
(21, 49, 'deny', NULL),
(21, 51, 'allow', NULL),
(21, 52, 'deny', NULL),
(21, 57, 'deny', NULL),
(21, 103, 'allow', NULL),
(21, 104, 'allow', NULL),
(21, 105, 'allow', NULL),
(21, 106, 'allow', NULL),
(25, 6, 'allow', NULL),
(25, 7, 'allow', NULL),
(25, 8, 'allow', NULL),
(25, 9, 'allow', NULL),
(25, 10, 'allow', NULL),
(25, 11, 'allow', NULL),
(25, 12, 'allow', NULL),
(25, 13, 'allow', NULL),
(25, 14, 'allow', NULL),
(25, 15, 'allow', NULL),
(25, 16, 'allow', NULL),
(25, 17, 'allow', NULL),
(25, 18, 'allow', NULL),
(25, 20, 'allow', NULL),
(25, 21, 'deny', NULL),
(25, 22, 'deny', NULL),
(25, 23, 'deny', NULL),
(25, 24, 'deny', NULL),
(25, 25, 'deny', NULL),
(25, 26, 'deny', NULL),
(25, 27, 'deny', NULL),
(25, 28, 'deny', NULL),
(25, 29, 'deny', NULL),
(25, 30, 'deny', NULL),
(25, 31, 'deny', NULL),
(25, 33, 'deny', NULL),
(25, 35, 'deny', NULL),
(25, 36, 'deny', NULL),
(25, 38, 'deny', NULL),
(25, 39, 'deny', NULL),
(25, 40, 'deny', NULL),
(25, 41, 'deny', NULL),
(25, 42, 'deny', NULL),
(25, 43, 'deny', NULL),
(25, 50, 'deny', NULL),
(25, 53, 'deny', NULL),
(25, 54, 'deny', NULL),
(25, 55, 'deny', NULL),
(25, 56, 'deny', NULL),
(25, 58, 'deny', NULL),
(25, 59, 'deny', NULL),
(25, 60, 'deny', NULL),
(25, 77, 'deny', NULL),
(25, 78, 'deny', NULL),
(25, 79, 'deny', NULL),
(25, 107, 'deny', NULL),
(25, 108, 'deny', NULL),
(25, 111, 'deny', NULL),
(25, 112, 'deny', NULL),
(25, 113, 'deny', NULL),
(25, 120, 'deny', NULL),
(26, 6, 'deny', NULL),
(26, 7, 'deny', NULL),
(26, 8, 'deny', NULL),
(26, 9, 'deny', NULL),
(26, 10, 'deny', NULL),
(26, 11, 'deny', NULL),
(26, 12, 'deny', NULL),
(26, 13, 'deny', NULL),
(26, 14, 'deny', NULL),
(26, 15, 'deny', NULL),
(26, 16, 'deny', NULL),
(26, 17, 'deny', NULL),
(26, 18, 'deny', NULL),
(26, 21, 'deny', NULL),
(26, 22, 'deny', NULL),
(26, 23, 'deny', NULL),
(26, 24, 'deny', NULL),
(26, 25, 'deny', NULL),
(26, 26, 'deny', NULL),
(26, 27, 'deny', NULL),
(26, 28, 'deny', NULL),
(26, 29, 'deny', NULL),
(26, 30, 'deny', NULL),
(26, 31, 'deny', NULL),
(26, 33, 'deny', NULL),
(26, 35, 'deny', NULL),
(26, 36, 'deny', NULL),
(26, 38, 'deny', NULL),
(26, 39, 'deny', NULL),
(26, 40, 'deny', NULL),
(26, 41, 'deny', NULL),
(26, 42, 'deny', NULL),
(26, 43, 'deny', NULL),
(26, 50, 'deny', NULL),
(26, 53, 'deny', NULL),
(26, 54, 'deny', NULL),
(26, 55, 'deny', NULL),
(26, 56, 'deny', NULL),
(26, 58, 'deny', NULL),
(26, 59, 'deny', NULL),
(26, 60, 'deny', NULL),
(26, 74, 'deny', NULL),
(26, 75, 'deny', NULL),
(26, 76, 'deny', NULL),
(26, 77, 'deny', NULL),
(26, 78, 'deny', NULL),
(26, 79, 'deny', NULL),
(26, 103, 'deny', NULL),
(26, 104, 'deny', NULL),
(26, 105, 'deny', NULL),
(26, 106, 'deny', NULL),
(26, 107, 'deny', NULL),
(26, 108, 'deny', NULL),
(26, 111, 'deny', NULL),
(26, 112, 'deny', NULL),
(26, 113, 'deny', NULL),
(26, 116, 'deny', NULL),
(26, 117, 'deny', NULL),
(26, 118, 'deny', NULL),
(26, 119, 'deny', NULL),
(26, 120, 'deny', NULL),
(27, 20, 'allow', NULL),
(27, 21, 'allow', NULL),
(27, 22, 'allow', NULL),
(27, 23, 'allow', NULL),
(27, 24, 'allow', NULL),
(27, 25, 'allow', NULL),
(27, 26, 'allow', NULL),
(27, 27, 'allow', NULL),
(27, 28, 'allow', NULL),
(27, 29, 'allow', NULL),
(27, 30, 'allow', NULL),
(27, 31, 'allow', NULL),
(27, 33, 'allow', NULL),
(27, 35, 'allow', NULL),
(27, 36, 'allow', NULL),
(27, 112, 'allow', NULL),
(27, 113, 'allow', NULL),
(28, 21, 'deny', NULL),
(28, 22, 'deny', NULL),
(28, 23, 'deny', NULL),
(28, 24, 'deny', NULL),
(28, 25, 'deny', NULL),
(28, 26, 'deny', NULL),
(28, 27, 'deny', NULL),
(28, 28, 'deny', NULL),
(28, 29, 'deny', NULL),
(28, 30, 'deny', NULL),
(28, 31, 'deny', NULL),
(28, 33, 'deny', NULL),
(28, 35, 'deny', NULL),
(28, 36, 'deny', NULL),
(28, 112, 'deny', NULL),
(28, 113, 'deny', NULL),
(29, 21, 'deny', NULL),
(29, 22, 'allow', NULL),
(29, 23, 'deny', NULL),
(29, 24, 'deny', NULL),
(29, 25, 'deny', NULL),
(29, 26, 'allow', NULL),
(29, 27, 'allow', NULL),
(29, 28, 'deny', NULL),
(29, 29, 'deny', NULL),
(29, 30, 'deny', NULL),
(29, 31, 'deny', NULL),
(29, 33, 'deny', NULL),
(29, 35, 'deny', NULL),
(29, 36, 'deny', NULL),
(29, 112, 'deny', NULL),
(29, 113, 'deny', NULL),
(30, 45, 'allow', NULL),
(30, 46, 'deny', NULL),
(30, 47, 'deny', NULL),
(30, 48, 'deny', NULL),
(30, 49, 'allow', NULL),
(30, 52, 'allow', NULL),
(30, 57, 'allow', NULL),
(31, 53, 'allow', NULL),
(31, 54, 'allow', NULL),
(31, 55, 'allow', NULL),
(31, 56, 'allow', NULL),
(31, 107, 'allow', NULL),
(31, 108, 'allow', NULL),
(31, 120, 'deny', NULL),
(32, 58, 'allow', NULL),
(32, 59, 'deny', NULL),
(32, 60, 'deny', NULL),
(32, 111, 'deny', NULL),
(33, 53, 'allow', NULL),
(33, 54, 'allow', NULL),
(33, 55, 'allow', NULL),
(33, 56, 'allow', NULL),
(33, 58, 'allow', NULL),
(33, 107, 'allow', NULL),
(33, 108, 'deny', NULL),
(33, 120, 'deny', NULL),
(34, 1, 'allow', NULL),
(34, 2, 'allow', NULL),
(34, 3, 'allow', NULL),
(34, 4, 'allow', NULL),
(34, 5, 'allow', NULL),
(34, 6, 'allow', NULL),
(34, 7, 'allow', NULL),
(34, 8, 'allow', NULL),
(34, 9, 'allow', NULL),
(34, 10, 'allow', NULL),
(34, 11, 'allow', NULL),
(34, 12, 'allow', NULL),
(34, 13, 'allow', NULL),
(34, 14, 'allow', NULL),
(34, 15, 'allow', NULL),
(34, 16, 'allow', NULL),
(34, 17, 'allow', NULL),
(34, 18, 'allow', NULL),
(34, 19, 'allow', NULL),
(34, 20, 'allow', NULL),
(34, 21, 'allow', NULL),
(34, 22, 'allow', NULL),
(34, 23, 'allow', NULL),
(34, 24, 'allow', NULL),
(34, 25, 'allow', NULL),
(34, 26, 'allow', NULL),
(34, 27, 'allow', NULL),
(34, 28, 'allow', NULL),
(34, 29, 'allow', NULL),
(34, 30, 'allow', NULL),
(34, 31, 'allow', NULL),
(34, 33, 'allow', NULL),
(34, 35, 'allow', NULL),
(34, 36, 'allow', NULL),
(34, 38, 'allow', NULL),
(34, 39, 'allow', NULL),
(34, 40, 'allow', NULL),
(34, 41, 'allow', NULL),
(34, 42, 'allow', NULL),
(34, 43, 'allow', NULL),
(34, 44, 'allow', NULL),
(34, 45, 'allow', NULL),
(34, 46, 'allow', NULL),
(34, 47, 'allow', NULL),
(34, 48, 'allow', NULL),
(34, 49, 'allow', NULL),
(34, 50, 'allow', NULL),
(34, 51, 'allow', NULL),
(34, 52, 'allow', NULL),
(34, 53, 'allow', NULL),
(34, 54, 'allow', NULL),
(34, 55, 'allow', NULL),
(34, 56, 'allow', NULL),
(34, 57, 'allow', NULL),
(34, 58, 'allow', NULL),
(34, 59, 'allow', NULL),
(34, 60, 'allow', NULL),
(34, 61, 'allow', NULL),
(34, 62, 'allow', NULL),
(34, 63, 'allow', NULL),
(34, 64, 'allow', NULL),
(34, 65, 'allow', NULL),
(34, 66, 'allow', NULL),
(34, 67, 'allow', NULL),
(34, 68, 'allow', NULL),
(34, 69, 'allow', NULL),
(34, 70, 'allow', NULL),
(34, 71, 'allow', NULL),
(34, 72, 'allow', NULL),
(34, 73, 'allow', NULL),
(34, 74, 'allow', NULL),
(34, 75, 'allow', NULL),
(34, 76, 'allow', NULL),
(34, 77, 'allow', NULL),
(34, 78, 'allow', NULL),
(34, 79, 'allow', NULL),
(34, 80, 'allow', NULL),
(34, 81, 'allow', NULL),
(34, 82, 'allow', NULL),
(34, 91, 'allow', NULL),
(34, 92, 'allow', NULL),
(34, 93, 'allow', NULL),
(34, 94, 'allow', NULL),
(34, 100, 'allow', NULL),
(34, 101, 'allow', NULL),
(34, 102, 'allow', NULL),
(34, 103, 'allow', NULL),
(34, 104, 'allow', NULL),
(34, 105, 'allow', NULL),
(34, 106, 'allow', NULL),
(34, 107, 'allow', NULL),
(34, 108, 'allow', NULL),
(34, 109, 'allow', NULL),
(34, 110, 'allow', NULL),
(34, 111, 'allow', NULL),
(34, 112, 'allow', NULL),
(34, 113, 'allow', NULL),
(34, 116, 'allow', NULL),
(34, 117, 'allow', NULL),
(34, 118, 'allow', NULL),
(34, 119, 'allow', NULL),
(34, 120, 'allow', NULL),
(35, 1, 'deny', NULL),
(35, 6, 'deny', NULL),
(35, 7, 'deny', NULL),
(35, 8, 'deny', NULL),
(35, 9, 'deny', NULL),
(35, 10, 'deny', NULL),
(35, 11, 'deny', NULL),
(35, 12, 'deny', NULL),
(35, 13, 'deny', NULL),
(35, 14, 'deny', NULL),
(35, 15, 'deny', NULL),
(35, 16, 'deny', NULL),
(35, 17, 'deny', NULL),
(35, 18, 'deny', NULL),
(35, 20, 'deny', NULL),
(35, 21, 'deny', NULL),
(35, 22, 'deny', NULL),
(35, 23, 'deny', NULL),
(35, 24, 'deny', NULL),
(35, 25, 'deny', NULL),
(35, 26, 'deny', NULL),
(35, 27, 'deny', NULL),
(35, 28, 'deny', NULL),
(35, 29, 'deny', NULL),
(35, 30, 'deny', NULL),
(35, 31, 'deny', NULL),
(35, 33, 'deny', NULL),
(35, 35, 'deny', NULL),
(35, 36, 'deny', NULL),
(35, 38, 'deny', NULL),
(35, 39, 'deny', NULL),
(35, 40, 'deny', NULL),
(35, 41, 'deny', NULL),
(35, 42, 'deny', NULL),
(35, 43, 'deny', NULL),
(35, 46, 'deny', NULL),
(35, 47, 'deny', NULL),
(35, 50, 'deny', NULL),
(35, 53, 'deny', NULL),
(35, 54, 'deny', NULL),
(35, 55, 'deny', NULL),
(35, 56, 'deny', NULL),
(35, 58, 'deny', NULL),
(35, 59, 'deny', NULL),
(35, 60, 'deny', NULL),
(35, 61, 'allow', NULL),
(35, 62, 'deny', NULL),
(35, 63, 'deny', NULL),
(35, 64, 'deny', NULL),
(35, 65, 'deny', NULL),
(35, 66, 'deny', NULL),
(35, 67, 'deny', NULL),
(35, 68, 'deny', NULL),
(35, 69, 'deny', NULL),
(35, 70, 'deny', NULL),
(35, 71, 'allow', NULL),
(35, 72, 'deny', NULL),
(35, 73, 'allow', NULL),
(35, 75, 'deny', NULL),
(35, 78, 'deny', NULL),
(35, 80, 'allow', NULL),
(35, 81, 'deny', NULL),
(35, 82, 'allow', NULL),
(35, 91, 'allow', NULL),
(35, 92, 'allow', NULL),
(35, 93, 'allow', NULL),
(35, 94, 'allow', NULL),
(35, 100, 'deny', NULL),
(35, 101, 'deny', NULL),
(35, 107, 'deny', NULL),
(35, 108, 'deny', NULL),
(35, 110, 'deny', NULL),
(35, 111, 'deny', NULL),
(35, 112, 'deny', NULL),
(35, 113, 'deny', NULL),
(35, 116, 'allow', NULL),
(35, 117, 'allow', NULL),
(35, 118, 'allow', NULL),
(35, 119, 'allow', NULL),
(35, 120, 'deny', NULL),
(36, 91, 'allow', NULL),
(36, 92, 'allow', NULL),
(36, 93, 'allow', NULL),
(36, 94, 'allow', NULL),
(37, 77, 'allow', NULL),
(37, 78, 'allow', NULL),
(37, 79, 'allow', NULL),
(38, 80, 'allow', NULL),
(38, 81, 'allow', NULL),
(38, 82, 'allow', NULL),
(39, 1, 'allow', NULL),
(39, 61, 'allow', NULL),
(39, 62, 'allow', NULL),
(39, 63, 'allow', NULL),
(39, 64, 'allow', NULL),
(39, 65, 'allow', NULL),
(39, 66, 'allow', NULL),
(39, 67, 'allow', NULL),
(39, 68, 'allow', NULL),
(39, 69, 'allow', NULL),
(39, 70, 'allow', NULL),
(39, 71, 'allow', NULL),
(39, 72, 'allow', NULL),
(39, 73, 'allow', NULL),
(39, 91, 'allow', NULL),
(39, 92, 'allow', NULL),
(39, 93, 'allow', NULL),
(39, 94, 'allow', NULL),
(39, 110, 'allow', NULL),
(40, 110, 'deny', NULL),
(41, 1, 'deny', NULL),
(41, 61, 'deny', NULL),
(41, 62, 'deny', NULL),
(41, 63, 'deny', NULL),
(41, 64, 'deny', NULL),
(41, 65, 'deny', NULL),
(41, 66, 'deny', NULL),
(41, 67, 'deny', NULL),
(41, 68, 'deny', NULL),
(41, 69, 'deny', NULL),
(41, 70, 'deny', NULL),
(41, 71, 'deny', NULL),
(41, 72, 'deny', NULL),
(41, 73, 'deny', NULL),
(41, 91, 'deny', NULL),
(41, 92, 'deny', NULL),
(41, 93, 'deny', NULL),
(41, 94, 'deny', NULL),
(42, 20, 'allow', NULL),
(42, 21, 'deny', NULL),
(42, 22, 'deny', NULL),
(42, 23, 'deny', NULL),
(42, 24, 'deny', NULL),
(42, 25, 'deny', NULL),
(42, 26, 'deny', NULL),
(42, 27, 'deny', NULL),
(42, 28, 'deny', NULL),
(42, 29, 'deny', NULL),
(42, 30, 'deny', NULL),
(42, 31, 'deny', NULL),
(42, 33, 'deny', NULL),
(42, 35, 'deny', NULL),
(42, 36, 'deny', NULL),
(42, 38, 'allow', NULL),
(42, 39, 'allow', NULL),
(42, 40, 'allow', NULL),
(42, 41, 'allow', NULL),
(42, 42, 'allow', NULL),
(42, 43, 'allow', NULL),
(42, 50, 'allow', NULL),
(42, 112, 'deny', NULL),
(42, 113, 'deny', NULL),
(43, 50, 'deny', NULL),
(44, 20, 'deny', NULL),
(44, 21, 'deny', NULL),
(44, 22, 'deny', NULL),
(44, 23, 'deny', NULL),
(44, 24, 'deny', NULL),
(44, 25, 'deny', NULL),
(44, 26, 'deny', NULL),
(44, 27, 'deny', NULL),
(44, 28, 'deny', NULL),
(44, 29, 'deny', NULL),
(44, 30, 'deny', NULL),
(44, 31, 'deny', NULL),
(44, 33, 'deny', NULL),
(44, 35, 'deny', NULL),
(44, 36, 'deny', NULL),
(44, 38, 'deny', NULL),
(44, 39, 'deny', NULL),
(44, 40, 'deny', NULL),
(44, 41, 'deny', NULL),
(44, 42, 'deny', NULL),
(44, 43, 'deny', NULL),
(44, 112, 'deny', NULL),
(44, 113, 'deny', NULL),
(46, 58, 'allow', NULL),
(46, 59, 'allow', NULL),
(46, 60, 'allow', NULL),
(46, 111, 'allow', NULL),
(47, 60, 'deny', NULL),
(48, 20, 'allow', NULL),
(48, 100, 'allow', NULL),
(48, 101, 'allow', NULL),
(48, 102, 'allow', NULL),
(48, 109, 'allow', NULL),
(50, 100, 'deny', NULL),
(50, 101, 'deny', NULL),
(50, 102, 'deny', NULL),
(50, 109, 'deny', NULL),
(4, 214, 'allow', NULL),
(4, 237, 'allow', NULL),
(4, 236, 'deny', NULL),
(4, 240, 'allow', NULL),
(4, 2, 'allow', NULL),
(4, 5, 'allow', NULL),
(4, 216, 'deny', NULL),
(4, 217, 'deny', NULL),
(4, 221, 'deny', NULL),
(4, 220, 'deny', NULL),
(4, 218, 'deny', NULL),
(4, 209, 'deny', NULL),
(4, 223, 'deny', NULL),
(4, 222, 'deny', NULL),
(4, 230, 'deny', NULL),
(4, 213, 'allow', NULL),
(4, 20, 'deny', NULL),
(4, 206, 'deny', NULL),
(4, 140, 'deny', NULL),
(4, 225, 'deny', NULL),
(4, 238, 'deny', NULL),
(4, 224, 'deny', NULL),
(4, 168, 'deny', NULL),
(4, 197, 'deny', NULL),
(4, 195, 'deny', NULL),
(4, 196, 'deny', NULL),
(4, 170, 'deny', NULL),
(4, 235, 'deny', NULL),
(4, 33, 'deny', NULL),
(4, 212, 'allow', NULL),
(4, 227, 'deny', NULL),
(4, 229, 'allow', NULL),
(4, 226, 'allow', NULL),
(4, 228, 'allow', NULL),
(4, 232, 'allow', NULL),
(4, 234, 'allow', NULL),
(4, 231, 'allow', NULL),
(4, 233, 'allow', NULL),
(4, 180, 'deny', NULL),
(4, 199, 'deny', NULL),
(4, 198, 'deny', NULL),
(4, 91, 'deny', NULL),
(4, 92, 'deny', NULL),
(4, 93, 'deny', NULL),
(4, 94, 'deny', NULL),
(4, 200, 'deny', NULL),
(4, 201, 'deny', NULL),
(4, 211, 'deny', NULL),
(4, 1, 'deny', NULL),
(4, 219, 'deny', NULL),
(6, 214, 'allow', NULL),
(6, 237, 'allow', NULL),
(6, 236, 'allow', NULL),
(6, 240, 'allow', NULL),
(6, 209, 'allow', NULL),
(6, 223, 'allow', NULL),
(6, 222, 'allow', NULL),
(6, 230, 'allow', NULL),
(6, 213, 'allow', NULL),
(6, 20, 'allow', NULL),
(6, 206, 'allow', NULL),
(6, 140, 'allow', NULL),
(6, 225, 'allow', NULL),
(6, 238, 'allow', NULL),
(6, 224, 'allow', NULL),
(6, 168, 'allow', NULL),
(6, 197, 'allow', NULL),
(6, 195, 'allow', NULL),
(6, 196, 'allow', NULL),
(6, 170, 'allow', NULL),
(6, 235, 'allow', NULL),
(6, 33, 'allow', NULL),
(6, 212, 'allow', NULL),
(6, 227, 'allow', NULL),
(6, 229, 'allow', NULL),
(6, 226, 'allow', NULL),
(6, 228, 'allow', NULL),
(6, 232, 'allow', NULL),
(6, 234, 'allow', NULL),
(6, 231, 'allow', NULL),
(6, 233, 'allow', NULL),
(6, 180, 'allow', NULL),
(6, 199, 'allow', NULL),
(6, 198, 'allow', NULL),
(6, 91, 'allow', NULL),
(6, 92, 'allow', NULL),
(6, 93, 'allow', NULL),
(6, 94, 'allow', NULL),
(6, 200, 'allow', NULL),
(6, 201, 'allow', NULL),
(6, 211, 'allow', NULL),
(6, 1, 'allow', NULL),
(6, 219, 'allow', NULL),
(2, 6, 'deny', NULL),
(2, 7, 'deny', NULL),
(2, 9, 'deny', NULL),
(2, 11, 'deny', NULL),
(2, 10, 'deny', NULL),
(2, 8, 'deny', NULL),
(2, 12, 'deny', NULL),
(2, 14, 'deny', NULL),
(2, 16, 'deny', NULL),
(2, 15, 'deny', NULL),
(2, 13, 'deny', NULL),
(2, 17, 'deny', NULL),
(2, 18, 'deny', NULL),
(2, 2, 'deny', NULL),
(2, 3, 'deny', NULL),
(2, 4, 'deny', NULL),
(2, 5, 'deny', NULL),
(2, 19, 'deny', NULL),
(2, 179, 'deny', NULL),
(2, 187, 'deny', NULL),
(2, 213, 'allow', NULL),
(2, 20, 'deny', NULL),
(2, 206, 'deny', NULL),
(2, 140, 'deny', NULL),
(2, 225, 'deny', NULL),
(2, 238, 'deny', NULL),
(2, 224, 'deny', NULL),
(2, 168, 'deny', NULL),
(2, 197, 'deny', NULL),
(2, 195, 'deny', NULL),
(2, 196, 'deny', NULL),
(2, 170, 'deny', NULL),
(2, 235, 'deny', NULL),
(2, 33, 'deny', NULL),
(2, 180, 'deny', NULL),
(2, 199, 'deny', NULL),
(2, 198, 'deny', NULL),
(2, 91, 'deny', NULL),
(2, 92, 'deny', NULL),
(2, 93, 'deny', NULL),
(2, 94, 'deny', NULL),
(2, 1, 'deny', NULL),
(1, 214, 'allow', NULL),
(1, 237, 'allow', NULL),
(1, 236, 'allow', NULL),
(1, 240, 'allow', NULL),
(1, 6, 'allow', NULL),
(1, 7, 'allow', NULL),
(1, 9, 'allow', NULL),
(1, 11, 'allow', NULL),
(1, 10, 'allow', NULL),
(1, 8, 'allow', NULL),
(1, 12, 'allow', NULL),
(1, 14, 'allow', NULL),
(1, 16, 'allow', NULL),
(1, 15, 'allow', NULL),
(1, 13, 'allow', NULL),
(1, 17, 'allow', NULL),
(1, 18, 'allow', NULL),
(1, 2, 'allow', NULL),
(1, 3, 'allow', NULL),
(1, 4, 'allow', NULL),
(1, 5, 'allow', NULL),
(1, 239, 'allow', NULL),
(1, 215, 'allow', NULL),
(1, 243, 'allow', NULL),
(1, 244, 'allow', NULL),
(1, 246, 'allow', NULL),
(1, 247, 'allow', NULL),
(1, 210, 'allow', NULL),
(1, 19, 'allow', NULL),
(1, 179, 'allow', NULL),
(1, 187, 'allow', NULL),
(1, 216, 'allow', NULL),
(1, 217, 'allow', NULL),
(1, 221, 'allow', NULL),
(1, 220, 'allow', NULL),
(1, 218, 'allow', NULL),
(1, 209, 'allow', NULL),
(1, 223, 'allow', NULL),
(1, 222, 'allow', NULL),
(1, 230, 'allow', NULL),
(1, 213, 'allow', NULL),
(1, 241, 'allow', NULL),
(1, 242, 'allow', NULL),
(1, 20, 'allow', NULL),
(1, 206, 'allow', NULL),
(1, 140, 'allow', NULL),
(1, 225, 'allow', NULL),
(1, 238, 'allow', NULL),
(1, 224, 'allow', NULL),
(1, 168, 'allow', NULL),
(1, 197, 'allow', NULL),
(1, 195, 'allow', NULL),
(1, 196, 'allow', NULL),
(1, 170, 'allow', NULL),
(1, 235, 'allow', NULL),
(1, 33, 'allow', NULL),
(1, 212, 'allow', NULL),
(1, 227, 'allow', NULL),
(1, 229, 'allow', NULL),
(1, 226, 'allow', NULL),
(1, 228, 'allow', NULL),
(1, 232, 'allow', NULL),
(1, 234, 'allow', NULL),
(1, 231, 'allow', NULL),
(1, 233, 'allow', NULL),
(1, 180, 'allow', NULL),
(1, 199, 'allow', NULL),
(1, 198, 'allow', NULL),
(1, 91, 'allow', NULL),
(1, 92, 'allow', NULL),
(1, 93, 'allow', NULL),
(1, 94, 'allow', NULL),
(1, 200, 'allow', NULL),
(1, 201, 'allow', NULL),
(1, 211, 'deny', NULL),
(1, 1, 'deny', NULL),
(1, 219, 'deny', NULL),
(5, 214, 'allow', NULL),
(5, 237, 'allow', NULL),
(5, 236, 'allow', NULL),
(5, 240, 'allow', NULL),
(5, 6, 'allow', NULL),
(5, 7, 'deny', NULL),
(5, 9, 'deny', NULL),
(5, 11, 'deny', NULL),
(5, 10, 'deny', NULL),
(5, 8, 'deny', NULL),
(5, 12, 'allow', NULL),
(5, 14, 'allow', NULL),
(5, 16, 'allow', NULL),
(5, 15, 'allow', NULL),
(5, 13, 'allow', NULL),
(5, 17, 'allow', NULL),
(5, 18, 'allow', NULL),
(5, 2, 'allow', NULL),
(5, 3, 'allow', NULL),
(5, 4, 'allow', NULL),
(5, 5, 'allow', NULL),
(5, 239, 'allow', NULL),
(5, 215, 'allow', NULL),
(5, 243, 'allow', NULL),
(5, 244, 'allow', NULL),
(5, 248, 'allow', NULL),
(5, 246, 'allow', NULL),
(5, 247, 'allow', NULL),
(5, 210, 'allow', NULL),
(5, 19, 'allow', NULL),
(5, 179, 'deny', NULL),
(5, 187, 'deny', NULL),
(5, 216, 'allow', NULL),
(5, 217, 'allow', NULL),
(5, 221, 'allow', NULL),
(5, 220, 'allow', NULL),
(5, 218, 'allow', NULL),
(5, 209, 'allow', NULL),
(5, 223, 'allow', NULL),
(5, 222, 'allow', NULL),
(5, 230, 'allow', NULL),
(5, 213, 'allow', NULL),
(5, 20, 'allow', NULL),
(5, 206, 'allow', NULL),
(5, 140, 'allow', NULL),
(5, 225, 'allow', NULL),
(5, 238, 'allow', NULL),
(5, 224, 'allow', NULL),
(5, 168, 'allow', NULL),
(5, 197, 'allow', NULL),
(5, 195, 'allow', NULL),
(5, 196, 'allow', NULL),
(5, 170, 'allow', NULL),
(5, 235, 'allow', NULL),
(5, 33, 'allow', NULL),
(5, 212, 'allow', NULL),
(5, 227, 'allow', NULL),
(5, 229, 'allow', NULL),
(5, 226, 'allow', NULL),
(5, 228, 'allow', NULL),
(5, 232, 'allow', NULL),
(5, 234, 'allow', NULL),
(5, 231, 'allow', NULL),
(5, 233, 'allow', NULL),
(5, 180, 'allow', NULL),
(5, 199, 'allow', NULL),
(5, 198, 'allow', NULL),
(5, 91, 'allow', NULL),
(5, 92, 'allow', NULL),
(5, 93, 'allow', NULL),
(5, 94, 'allow', NULL),
(5, 200, 'allow', NULL),
(5, 201, 'allow', NULL),
(5, 211, 'allow', NULL),
(5, 1, 'allow', NULL),
(5, 219, 'allow', NULL),
(3, 214, 'deny', NULL),
(3, 239, 'allow', NULL),
(3, 213, 'allow', NULL),
(3, 241, 'allow', NULL),
(3, 242, 'allow', NULL),
(3, 249, 'allow', NULL),
(3, 250, 'allow', NULL),
(3, 254, 'allow', NULL),
(3, 251, 'allow', NULL),
(3, 252, 'allow', NULL),
(3, 253, 'allow', NULL),
(3, 255, 'allow', NULL),
(3, 256, 'allow', NULL),
(3, 20, 'deny', NULL),
(3, 206, 'deny', NULL),
(3, 140, 'deny', NULL),
(3, 225, 'deny', NULL),
(3, 224, 'deny', NULL),
(3, 168, 'deny', NULL),
(3, 197, 'deny', NULL),
(3, 195, 'deny', NULL),
(3, 196, 'deny', NULL),
(3, 170, 'deny', NULL),
(3, 33, 'deny', NULL),
(3, 227, 'allow', NULL),
(3, 229, 'allow', NULL),
(3, 226, 'allow', NULL),
(3, 228, 'allow', NULL),
(3, 232, 'allow', NULL),
(3, 234, 'allow', NULL),
(3, 231, 'allow', NULL),
(3, 233, 'allow', NULL),
(3, 180, 'deny', NULL),
(3, 199, 'deny', NULL),
(3, 198, 'deny', NULL),
(3, 91, 'deny', NULL),
(3, 92, 'deny', NULL),
(3, 93, 'deny', NULL),
(3, 94, 'deny', NULL),
(3, 200, 'deny', NULL),
(3, 201, 'deny', NULL),
(3, 211, 'deny', NULL),
(3, 1, 'deny', NULL),
(3, 219, 'deny', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `admin`
--

TRUNCATE TABLE `admin`;
--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a74389');

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

DROP TABLE IF EXISTS `agama`;
CREATE TABLE `agama` (
  `id` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ordering` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `agama`
--

TRUNCATE TABLE `agama`;
--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama`, `ordering`) VALUES
(1, 'Islam', 1),
(3, 'Khatolik', 2),
(4, 'Protestan', 3),
(5, 'Hindu', 4),
(6, 'Budha', 5);

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `acara` varchar(200) NOT NULL DEFAULT '',
  `kegiatan` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `agenda`
--

TRUNCATE TABLE `agenda`;
--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tanggal`, `acara`, `kegiatan`) VALUES
(4, '2012-03-30', 'peresmian kelas', 'makan makan'),
(5, '2012-03-30', 'perpisahan kelas 3`', 'makan makan'),
(6, '2012-03-30', 'perpisahan kelas 3`', 'makan makan'),
(7, '2012-03-30', 'perpisahan kelas 3`', 'makan makan'),
(8, '2012-03-30', 'perpisahan kelas 3`', 'makan makan'),
(9, '2012-03-30', 'perpisahan kelas 3`', 'makan makan'),
(10, '2012-03-30', 'perpisahan kelas 3`', 'makan makan');

-- --------------------------------------------------------

--
-- Table structure for table `ake`
--

DROP TABLE IF EXISTS `ake`;
CREATE TABLE `ake` (
  `akeid` int(11) DEFAULT NULL,
  `jml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `ake`
--

TRUNCATE TABLE `ake`;
--
-- Dumping data for table `ake`
--

INSERT INTO `ake` (`akeid`, `jml`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

DROP TABLE IF EXISTS `alumni`;
CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `nama_alumni` varchar(20) NOT NULL DEFAULT '',
  `angkatan` int(4) NOT NULL,
  `email` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `alumni`
--

TRUNCATE TABLE `alumni`;
--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama_alumni`, `angkatan`, `email`) VALUES
(12, 'bejo', 1995, 'bejo@gmail.com'),
(13, 'bejo', 1995, 'bejo@gmail.com'),
(14, 'bejo', 1995, 'bejo@gmail.com'),
(15, 'bejo', 1995, 'bejo@gmail.com'),
(16, 'bejo', 1995, 'bejo@gmail.com'),
(17, 'bejo', 1995, 'bejo@gmail.com'),
(18, 'bejo', 1995, 'bejo@gmail.com'),
(19, 'bejo', 1995, 'bejo@gmail.com'),
(20, 'bejo', 1995, 'bejo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `title_artikel` varchar(100) NOT NULL DEFAULT '',
  `note_artikel` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `artikel`
--

TRUNCATE TABLE `artikel`;
--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `title_artikel`, `note_artikel`) VALUES
(17, 'Cara Jitu Menumbuhkan Semangat Belajar Pada Anak', 'Nah, ini adalah tema yang sering ditunggu tunggu oleh orangtua dan juga sering banyak dikeluhkan orangtua. Kenapa anak saya ngga senang belajar, maen aja seharian, keluh seorang Ibu yang hadir disem'),
(18, 'Proses Pembentukan Karakter Pada Anak', 'Karakter tidak dapat dibentuk dengan cara mudah dan murah. Dengan mengalami ujian dan penderitaan jiwa karakter dikuatkan, visi dijernihkan, dan sukses diraih ~ Helen Keller Suatu hari seorang anak la'),
(19, 'Proses Pembentukan Karakter Pada Anak', 'Karakter tidak dapat dibentuk dengan cara mudah dan murah. Dengan mengalami ujian dan penderitaan jiwa karakter dikuatkan, visi dijernihkan, dan sukses diraih ~ Helen Keller Suatu hari seorang anak la'),
(20, 'Proses Pembentukan Karakter Pada Anak', 'Karakter tidak dapat dibentuk dengan cara mudah dan murah. Dengan mengalami ujian dan penderitaan jiwa karakter dikuatkan, visi dijernihkan, dan sukses diraih ~ Helen Keller Suatu hari seorang anak la'),
(21, 'Proses Pembentukan Karakter Pada Anak', 'Karakter tidak dapat dibentuk dengan cara mudah dan murah. Dengan mengalami ujian dan penderitaan jiwa karakter dikuatkan, visi dijernihkan, dan sukses diraih ~ Helen Keller Suatu hari seorang anak la'),
(22, 'Proses Pembentukan Karakter Pada Anak', 'Karakter tidak dapat dibentuk dengan cara mudah dan murah. Dengan mengalami ujian dan penderitaan jiwa karakter dikuatkan, visi dijernihkan, dan sukses diraih ~ Helen Keller Suatu hari seorang anak la');

-- --------------------------------------------------------

--
-- Table structure for table `asis`
--

DROP TABLE IF EXISTS `asis`;
CREATE TABLE `asis` (
  `id` int(11) NOT NULL,
  `idke` int(11) DEFAULT NULL,
  `idsiswa` int(11) DEFAULT NULL,
  `idngajar` int(11) DEFAULT NULL,
  `idhadir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `asis`
--

TRUNCATE TABLE `asis`;
-- --------------------------------------------------------

--
-- Table structure for table `auth_module`
--

DROP TABLE IF EXISTS `auth_module`;
CREATE TABLE `auth_module` (
  `id` int(11) NOT NULL,
  `nama_module` varchar(255) DEFAULT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `urutan` tinyint(4) NOT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `version` int(11) DEFAULT NULL,
  `urutan2` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `auth_module`
--

TRUNCATE TABLE `auth_module`;
--
-- Dumping data for table `auth_module`
--

INSERT INTO `auth_module` (`id`, `nama_module`, `uri`, `icon`, `jenis`, `urutan`, `created`, `created_by`, `modified`, `modified_by`, `version`, `urutan2`) VALUES
(1, 'KELAS SISWA', 'kelassiswa', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, 0),
(38, 'TOOL', 'tool', NULL, NULL, 34, NULL, '1', NULL, NULL, NULL, 0),
(39, 'SETTING', 'setting', NULL, NULL, 15, NULL, '1', NULL, NULL, NULL, 0),
(40, 'MASTER', 'master', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, 0),
(43, 'INVENTARIS', 'inventaris', NULL, NULL, 14, NULL, NULL, NULL, NULL, NULL, 0),
(46, 'ABSEN', 'absen', NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL, 0),
(47, 'PENILAIAN', 'penilaian', NULL, NULL, 10, '2014-02-01 12:11:11', NULL, NULL, NULL, NULL, 0),
(48, 'EKSTRA KURIKULER', 'ekstraxxx', NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, 0),
(49, 'LAPORAN', 'laporan', NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL, 0),
(50, 'JADWAL', 'jadwal', NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, 0),
(51, 'CETAK RAPOR', 'cetakrapor', NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `auth_rolexxx`
--

DROP TABLE IF EXISTS `auth_rolexxx`;
CREATE TABLE `auth_rolexxx` (
  `role_id` int(11) NOT NULL,
  `nama_role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `auth_rolexxx`
--

TRUNCATE TABLE `auth_rolexxx`;
-- --------------------------------------------------------

--
-- Table structure for table `auth_users`
--

DROP TABLE IF EXISTS `auth_users`;
CREATE TABLE `auth_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `lang` varchar(2) DEFAULT NULL,
  `registered` datetime DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `unit_kerja_id` int(11) DEFAULT NULL,
  `gedung_id` int(11) DEFAULT NULL,
  `pegawai_id` varchar(20) NOT NULL DEFAULT '',
  `hak_akses_poli` varchar(255) NOT NULL DEFAULT '',
  `hak_akses_bangsal` varchar(300) NOT NULL DEFAULT '',
  `hak_akses_apotik` varchar(255) NOT NULL DEFAULT '',
  `hak_akses_stock` varchar(255) DEFAULT NULL,
  `hak_akses_cssd` varchar(255) DEFAULT NULL,
  `lastactivity` int(11) DEFAULT '0',
  `nip` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT ' ',
  `napa` varchar(20) DEFAULT ' ',
  `jeka` int(11) DEFAULT NULL,
  `tltgll` varchar(200) DEFAULT ' ',
  `alamat` varchar(200) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `mapel` varchar(20) DEFAULT NULL,
  `idguru` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `auth_users`
--

TRUNCATE TABLE `auth_users`;
--
-- Dumping data for table `auth_users`
--

INSERT INTO `auth_users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `lang`, `registered`, `role_id`, `name`, `role`, `unit_kerja_id`, `gedung_id`, `pegawai_id`, `hak_akses_poli`, `hak_akses_bangsal`, `hak_akses_apotik`, `hak_akses_stock`, `hak_akses_cssd`, `lastactivity`, `nip`, `nama`, `napa`, `jeka`, `tltgll`, `alamat`, `nohp`, `mapel`, `idguru`) VALUES
(1, 'Administrator', 'Tea', 'admin', 'sdfsdf@gmail,com', 'e6c7590b70a5be7577387ff63ce5398f', 'en', '2012-03-15 19:23:59', 5, 'admin', '5', 0, 0, '0', '17,3,4,5,6,10,13,9,7,2,19,8,1', '16', '', '1,2,3,4', '2,3', 1430711696, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 10),
(198, '', '', 'syahril', '-', '202cb962ac59075b964b07152d234b70', NULL, NULL, 1, 'Syahril, M.Kom', '3', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 7),
(200, '', '', 'aa', 'aaa', '4124bc0a9335c27f086f24ba207a4912', NULL, NULL, 1, 'aaa', '1', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 0),
(201, '', '', '0', '0', '', NULL, NULL, 0, '0', '0', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 0),
(202, '', '', '0', '0', '', NULL, NULL, 0, '0', '0', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 0),
(204, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197010172009012001', 'Dipa Adi Martius, S.', NULL, 1, 'Padang Panjang - 12 ', 'Padang Panjang', '081300123123', NULL, 0),
(205, '', '', 'dipa', 'dima@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 1, 'Dipa Adi Martius', '4', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 117),
(206, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197610172009012009', 'Yunizaldi, S. Pd', NULL, 1, 'Padang Panjang - 12 ', 'Padang Panjang', '08119876772', NULL, 0),
(207, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197810172009012012', 'Linda Gumanti, S. Ko', NULL, 2, 'Padang Panjang - 12 ', 'Padang Panjang', '08192877332', NULL, 0),
(208, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197710172009012555', 'Noval, S. Pd', NULL, 0, 'Padang - 12 Maret 19', 'Padang Panjang', '0815666212832', NULL, 0),
(209, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197410172009012333', 'Erwin, S. Pd', NULL, 1, 'Padang Panjang - 12 ', 'Padang Panjang', '0817652329123', NULL, 0),
(210, '', '', 'noval', 'noval@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 3, 'Noval, S. Pd', '3', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 138),
(211, '', '', 'erwinwalas', 'erwin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 3, 'Erwin, S. Pd', '3', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 0),
(212, '', '', 'linda', 'linda@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 4, 'Linda gumanti, S. Pd', '4', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 119),
(213, '', '', 'yunizaldi', 'datuk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 4, 'Yunizaldi, S. Pd', '4', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 118),
(214, '', '', 'dafwen', 'dafwentoresa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 3, 'Dafwen Toresa', '3', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 0),
(215, '', '', 'candra', 'candra@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 2, 'Candra Susanto, S. Pd', '2', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 0),
(217, '', '', 'dipawalas', 'dipa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 3, 'Dipa Wali Kelas', '3', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 117),
(219, '', '', 'tu', '-', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 6, 'Tata Usaha', '6', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 0),
(220, '', '', 'administrator', '-', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 1, 'Dafwen Toressa', '1', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, NULL, NULL, NULL, NULL, 0),
(221, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '100', 'Siti Aisyah, M. Kom', NULL, 2, '', '', '', NULL, 0),
(222, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, 'ss', 'sss', NULL, 2, 'sss', 'ss', 'sss', NULL, 0),
(223, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '22', 'sdf', NULL, 1, 'asdf', 'asdf', 'asdf', NULL, 0),
(224, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197810172003332012', 'Subandi, S. Pd', NULL, 1, 'Padang - 12 Maret 1990', 'Padang Panjang', '081232312323', NULL, 0),
(225, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197510172009012907', 'Hamdan ATT, MT', NULL, 1, 'Padang - 12 Maret 1967', 'Padang Panjang', '0819777635522', NULL, 0),
(226, '', '', '0', '0', '', NULL, NULL, -1, '0', '-1', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, ' ', NULL, NULL, NULL, 0),
(227, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '1081363188008', 'Dafwen Toresa', NULL, 1, 'Padang Panjang 01 Januari 1977', 'Padang Panjang', '081363188008', NULL, 0),
(228, '', '', 'novalwalas', '-', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 3, 'Noval Saja', '3', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, ' ', NULL, NULL, NULL, 138),
(230, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '238328483843', 'NOVALIADI,S.KOM', NULL, 1, 'Padang Panjang,  01 Maret 1988', 'Padang PAnjang', '0912371283232', NULL, 0),
(231, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '19750818 2005012010', 'WEDIA HIDAYANA, M.Kom,  M.Pd.T', NULL, 2, 'Padang, 18-8-1975', '', '', NULL, 0),
(232, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197606012002122008', 'ELISABETH RITA ,S.Pd', NULL, 2, 'Padang, 1-6-1976', '', '', NULL, 0),
(233, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198208182009021001', 'ZAINAL AMRI, MA', NULL, 0, 'Tanjung Barulak,18-8-1982', 'Padang Panjang', '', NULL, 0),
(234, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197608172008011007', 'AGUS SUPRATMAN, S.Pd', NULL, 1, 'Paninjauan, 27-1-1977', 'Padang Panjang', '', NULL, 0),
(235, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '196308091985122002', 'TUTI HELEN, S.Pd', NULL, 0, 'Bukittinggi,9-8-1963', 'Padang Panjang', '', NULL, 0),
(236, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '196604101990031007', 'Drs. SUHERMAN', NULL, 1, 'Pitalah, 10-4-1966', 'Padang Panjang', '', NULL, 0),
(237, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197704112002122005', 'NELI YUFIDA, S.Pd', NULL, 2, 'Tanah Datar, 11-4-1977', 'Padang Panjang', '', NULL, 0),
(238, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '196812042003121002', 'PANDAPOTAN,S.Pd', NULL, 2, 'Pacuan Tampang,4-12-1968', 'Padang Panjang', '', NULL, 0),
(239, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '196708072005012004', 'MULYATI, S.Pd', NULL, 2, 'Pd.Panjang, 7-8-1967', 'Padang Panjang', '', NULL, 0),
(240, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197112022005012007', 'SUSY DESFITRI, S.Pd', NULL, 2, 'Padang, 2-12-1971', 'Padang Panjang', '', NULL, 0),
(241, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197611212005012008', 'SUSY ELVINA, S.Ag', NULL, 0, 'Bukittinggi,21-11-1976', 'Padang Panjang', '', NULL, 0),
(242, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197308122005011003', 'SURYA GUNAWAN, S.Pd', NULL, 1, 'Pd.Panjang, 12-8-1973', 'Padang Panjang', '', NULL, 0),
(243, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197209142005012005', 'RINA SILVITRI, S.Pd', NULL, 0, 'Pd.Panjang, 20-9-1972', 'Padang Panjang', '', NULL, 0),
(244, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197206262006042027', 'EVANITA, S.Pd', NULL, 2, 'Pd.Panjang, 26-6-1972', 'Padang Panjang', '', NULL, 0),
(245, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197311282006042004', 'HUSNI AINI, S.Pd', NULL, 2, 'Palembang,28-11-1975', 'Padang Panjang', '', NULL, 0),
(246, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197812092006041005', 'CANDARA TRI SUSANTO, ST', NULL, 1, 'Cilacap, 9-12-2978', 'Padang Panjang', '', NULL, 0),
(247, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198105072006041004', 'FIRDAUS, S.Pd', NULL, 1, 'Solok,,7-5-1981', 'Padang Panjang', '', NULL, 0),
(248, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198007102006042006', 'ROZA SUSANTI, S.Pd.I', NULL, 2, 'Balinga, 10-7-1980', 'Padang Panjang', '', NULL, 0),
(249, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '196104291986031003', 'Drs.IVERY MORPHI, M.Pd', NULL, 1, 'Dangung-Dangung 50 Kota, 29-4-1961', 'Padang Panjang', '', NULL, 0),
(250, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197205162006012014', 'ANDRIZA, S.Pd', NULL, 2, 'Pd.Panjang, 16-5-1972', 'Padang Panjang', '', NULL, 0),
(251, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197306162006042023', 'YASTATI, S.Pd', NULL, 2, 'Kubu Nan Limo,16-6-1973', 'Padang Panjang', '', NULL, 0),
(252, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '196707102007011010', 'Drs. ERIZON CHRISTIAR', NULL, 1, 'Pd.Panjang,10-7-1967', 'Padang Panjang', '', NULL, 0),
(253, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '196509152007012007', 'Dra. NUR ASWATI', NULL, 2, 'Gunung, 19-9-1965', 'Padang Panjang', '', NULL, 0),
(254, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '196512182007011002', 'MUSBAR. S.Pd', NULL, 1, 'Tanah Datar, 18-12-1965', 'Padang Panjang', '', NULL, 0),
(255, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197504142008022001', 'YUSMA ELDA, S.Pd', NULL, 2, 'Latikan, 14-4-1975', 'Padang Panjang', '', NULL, 0),
(256, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198109102006042012', 'SANDRA WELI, S.Pd', NULL, 2, 'Pd.Panjang, 10-9-1981', 'Padang Panjang', '', NULL, 0),
(257, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198005052008022001', 'MERI SUSANTI, S.Pd', NULL, 2, 'Padang, 5-5-1980', 'Padang Panjang', '', NULL, 0),
(258, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197807262008012001', 'WIRDAYETTI. S.Pd', NULL, 2, 'Pd.Panjang, 26-7-1978', 'Padang Panjang', '', NULL, 0),
(259, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197009252008012002', 'LENTIVA, S.Pd', NULL, 2, 'Pd.Panjang, 25-9-1970', 'Padang Panjang', '', NULL, 0),
(260, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198307032008022001', 'HILWATI, S.Pd', NULL, 2, 'Pd.Panjang, 3-7-1983', 'Padang Panjang', '', NULL, 0),
(261, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197810072008022001', 'FERA SUSANTI M.Pd.T', NULL, 2, 'Pd.Panjang, 7-10-1978', 'Padang Panjang', '', NULL, 0),
(262, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198201272008022001', 'YETTI FITRIANI, S.Pd', NULL, 2, 'Sei,Lasi, 27-1-1982', 'Padang Panjang', '', NULL, 0),
(263, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198203152008022001', 'JUSLINA PANDIANGAN, S.Pd', NULL, 2, 'Nasumandar, 15-3-1982', 'Padang panjang', '', NULL, 0),
(264, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198207272008022001', 'NOVA FITRI YULIZA, S.Pd', NULL, 2, 'Guguk, 27 Juli 1982', 'Padang Panjang', '', NULL, 0),
(265, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198208312008022001', 'RIDVIA LISA. S.Pd', NULL, 2, 'Payakumbuh, 31-8-1982', 'Padang Panjang', '', NULL, 0),
(266, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198307092008022002', 'RENI SUSANDRA DEWI, S.Pd', NULL, 2, 'Kubu Apar, 9-7-1983', 'Padang Panjang', '', NULL, 0),
(267, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197607142006041004', 'SOFYAN,S.Pd', NULL, 1, 'Pariangan, 14-7-1976', 'Padang Panjang', '', NULL, 0),
(268, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '197608022009021001', 'FAHMI ZAIN,S.Pd', NULL, 1, 'Kepala Hilalang, 2-8-1976', 'Padang Panjang', '', NULL, 0),
(269, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198102152009022001', 'RAHMAYENI,S.Pd', NULL, 2, 'Padang, 15-2-1981', 'Padang Panjang', '', NULL, 0),
(270, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '19800310 200902 1 00', 'MAR ARIF, S.Pd.I', NULL, 1, 'Lalan , 10-3-1980', 'Padang Panjang', '', NULL, 0),
(271, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '1981132010012007', 'ERMA HELFIITA,S.Pd', NULL, 2, 'Payakumbuh, 13-1-1981', 'Padang Panjang', '', NULL, 0),
(272, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198801142011012004', 'MIFTAHUL HIDAYATI,S.PdI', NULL, 2, 'Bukittinggi, 14-1-1988', 'Padang Panjang', '', NULL, 0),
(273, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198710302011012003', 'NURFATMAH,S.Pd', NULL, 2, 'Ladang Laweh/ 30-10-1987', 'Padang Panjang', '', NULL, 0),
(274, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '198608162011012008', 'FITRA GUSNITA,S.Pd', NULL, 2, 'Koto Gadang, 16-8-1986', 'Padang Panjang', '', NULL, 0),
(275, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, 0, '0', 'LINA EKA PUTRI,S.Pd', NULL, 2, 'Bukittinggi, 31-1-1985', 'Padang Panjang', '', NULL, 0),
(276, '', '', 'lindawalas', 'linda@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 3, 'Linda Gumanti, S. Kom', '3', NULL, NULL, '0', '', '', '', NULL, NULL, 0, NULL, ' ', ' ', NULL, ' ', NULL, NULL, NULL, 119);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

DROP TABLE IF EXISTS `bulan`;
CREATE TABLE `bulan` (
  `noBulan` int(11) NOT NULL DEFAULT '0' COMMENT 'nomor bulan',
  `naBulan` varchar(9) DEFAULT ' ' COMMENT 'nama bulan',
  `NA` varchar(1) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='InnoDB free: 10240 kB; InnoDB free: 9216 kB';

--
-- Truncate table before insert `bulan`
--

TRUNCATE TABLE `bulan`;
--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`noBulan`, `naBulan`, `NA`) VALUES
(1, 'Januari', 'N'),
(2, 'Pebruari', 'N'),
(3, 'Maret', 'N'),
(4, 'April', 'N'),
(5, 'Mei', 'N'),
(6, 'Juni', 'N'),
(7, 'Juli', 'N'),
(8, 'Agustus', 'N'),
(9, 'September', 'N'),
(10, 'Oktober', 'N'),
(11, 'November', 'N'),
(12, 'Desember', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

DROP TABLE IF EXISTS `departemen`;
CREATE TABLE `departemen` (
  `iddep` int(11) NOT NULL COMMENT 'id departemen',
  `urpro` int(11) DEFAULT '0',
  `iddev` int(11) DEFAULT '0' COMMENT 'id devisi',
  `nadep` varchar(50) DEFAULT '' COMMENT 'nama departemen',
  `kadep` int(6) DEFAULT '0' COMMENT 'id kepala departemen dari bual',
  `akper` int(4) DEFAULT '0' COMMENT 'Akun Persediaan',
  `akper1` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun persediaan bahan baku',
  `akper2` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun persediaan wip',
  `akper3` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun persediaan barang jadi',
  `akper4` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun persediaan hachiko',
  `akper5` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun persediaan toppan',
  `akper6` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun persediaan b-trend',
  `akper7` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun persediaan umum',
  `jual` int(4) DEFAULT '0' COMMENT 'Akun Pendapatan Penjualan',
  `jual1` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun penjualan kotor',
  `jual2` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun diskon penjualan',
  `jual3` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun return penjualan',
  `jual4` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun intensif penjualan',
  `jual5` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun bonus penjualan',
  `jual6` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun biaya kirim penjualan',
  `hpjsaldo1` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun saldo awal bahan baku',
  `hpjsaldo2` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun saldo akhir bahan baku',
  `hpjbeli1` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun pembelian bahan baku',
  `hpjbeli2` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun koreksi pembelian bahan baku',
  `hpjbeli3` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun return pembelian bahan baku',
  `hpjbeli4` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun diskon pembelian bahan baku',
  `hpjjual1` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun penjualan bahan baku',
  `hpjjual2` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun return jual bahan baku',
  `hpjtrans1` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun transfer in bahan baku',
  `hpjtrans2` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun transfer out bahan baku',
  `hpjlain1` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun SPSI',
  `hpjlain2` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun expedisi',
  `hpjlain3` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun langsung',
  `hpjlain4` int(6) NOT NULL DEFAULT '0' COMMENT 'id akun FOH',
  `akunnrat` int(4) DEFAULT '0' COMMENT 'Akun nr at',
  `akunakumat` int(4) DEFAULT '0' COMMENT 'Akumulasi AT',
  `akunbiayaat` int(4) DEFAULT '0' COMMENT 'Akun Biaya AT',
  `bebas` tinyint(4) DEFAULT '0',
  `NA` char(1) DEFAULT 'N',
  `uj` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 MAX_ROWS=30;

--
-- Truncate table before insert `departemen`
--

TRUNCATE TABLE `departemen`;
-- --------------------------------------------------------

--
-- Table structure for table `devisi`
--

DROP TABLE IF EXISTS `devisi`;
CREATE TABLE `devisi` (
  `iddev` int(11) NOT NULL,
  `nadev` varchar(50) DEFAULT ' ',
  `kadev` int(6) DEFAULT '0' COMMENT 'id kepala devisi ke bual'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `devisi`
--

TRUNCATE TABLE `devisi`;
-- --------------------------------------------------------

--
-- Table structure for table `fullpost`
--

DROP TABLE IF EXISTS `fullpost`;
CREATE TABLE `fullpost` (
  `id_full` int(11) NOT NULL,
  `title_posting` varchar(225) NOT NULL DEFAULT '',
  `note_posting` varchar(1000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `fullpost`
--

TRUNCATE TABLE `fullpost`;
-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `no` int(5) NOT NULL DEFAULT '0',
  `idsaker` int(3) DEFAULT '0',
  `nip` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `napa` varchar(20) DEFAULT NULL,
  `jeka` int(11) DEFAULT NULL,
  `tltgll` varchar(200) DEFAULT ' ',
  `alamat` varchar(150) DEFAULT ' ',
  `tempat` varchar(20) DEFAULT ' ',
  `nohp` varchar(20) DEFAULT NULL,
  `mapel` varchar(100) DEFAULT NULL,
  `idsk` int(2) DEFAULT '0',
  `idjbt` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `guru`
--

TRUNCATE TABLE `guru`;
--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `no`, `idsaker`, `nip`, `pass`, `nama`, `napa`, `jeka`, `tltgll`, `alamat`, `tempat`, `nohp`, `mapel`, `idsk`, `idjbt`) VALUES
(117, 117, 0, '197010172009012001', NULL, 'DIPA ADI MARTIUS, S. Pd, M. Pd.T', NULL, 1, 'Padang Panjang - 12 Maret 1970', 'Padang Panjang', ' ', '', NULL, 0, 0),
(118, 118, 0, '197706242008021001', NULL, 'YUNIZALDI, S.Pd', NULL, 1, 'Padang Panjang,24-6-1977', 'Padang Panjang', ' ', '', NULL, 0, 0),
(119, 119, 0, '198109302006012002', NULL, 'LINDA GUMANTI, S.Kom', NULL, 2, 'Sumanik, 30-9-2981', 'Padang Panjang', ' ', '', NULL, 0, 0),
(121, 121, 0, '197206262007011006', NULL, 'ERWIN, S. Pd', NULL, 1, 'B.Tinggi, 26-6-1972', 'Padang Panjang', ' ', '', NULL, 0, 0),
(137, 0, 0, '0', NULL, 'Dafwen Toresa', NULL, 1, 'Padang Panjang 01 Januari 1977', 'Padang Panjang', ' ', '081363188008', NULL, 0, 0),
(138, 0, 0, '198111072005011003', NULL, 'NOVAL JERRI, S.Kom, M.Pd.T', NULL, 1, 'Muaro Bungo,7-11-1981', 'Padang Panjang', ' ', '', NULL, 0, 0),
(139, 0, 0, '197508182005012010', NULL, 'WEDIA HIDAYANA, M.Kom,  M.Pd.T', NULL, 2, 'Padang, 18-8-1975', 'Padang Panjang', ' ', '', NULL, 0, 0),
(140, 0, 0, '197606012002122008', NULL, 'ELISABETH RITA ,S.Pd', NULL, 2, 'Padang, 1-6-1976', 'Padang Panjang', ' ', '', NULL, 0, 0),
(141, 0, 0, '198208182009021001', NULL, 'ZAINAL AMRI, MA', NULL, 0, 'Tanjung Barulak,18-8-1982', 'Padang Panjang', ' ', '', NULL, 0, 0),
(142, 0, 0, '197608172008011007', NULL, 'AGUS SUPRATMAN, S.Pd', NULL, 1, 'Paninjauan, 27-1-1977', 'Padang Panjang', ' ', '', NULL, 0, 0),
(143, 0, 0, '196308091985122002', NULL, 'TUTI HELEN, S.Pd', NULL, 0, 'Bukittinggi,9-8-1963', 'Padang Panjang', ' ', '', NULL, 0, 0),
(144, 0, 0, '196604101990031007', NULL, 'Drs. SUHERMAN', NULL, 1, 'Pitalah, 10-4-1966', 'Padang Panjang', ' ', '', NULL, 0, 0),
(145, 0, 0, '197704112002122005', NULL, 'NELI YUFIDA, S.Pd', NULL, 2, 'Tanah Datar, 11-4-1977', 'Padang Panjang', ' ', '', NULL, 0, 0),
(146, 0, 0, '196812042003121002', NULL, 'PANDAPOTAN,S.Pd', NULL, 2, 'Pacuan Tampang,4-12-1968', 'Padang Panjang', ' ', '', NULL, 0, 0),
(147, 0, 0, '196708072005012004', NULL, 'MULYATI, S.Pd', NULL, 2, 'Pd.Panjang, 7-8-1967', 'Padang Panjang', ' ', '', NULL, 0, 0),
(148, 0, 0, '197112022005012007', NULL, 'SUSY DESFITRI, S.Pd', NULL, 2, 'Padang, 2-12-1971', 'Padang Panjang', ' ', '', NULL, 0, 0),
(149, 0, 0, '197611212005012008', NULL, 'SUSY ELVINA, S.Ag', NULL, 0, 'Bukittinggi,21-11-1976', 'Padang Panjang', ' ', '', NULL, 0, 0),
(150, 0, 0, '197308122005011003', NULL, 'SURYA GUNAWAN, S.Pd', NULL, 1, 'Pd.Panjang, 12-8-1973', 'Padang Panjang', ' ', '', NULL, 0, 0),
(151, 0, 0, '197209142005012005', NULL, 'RINA SILVITRI, S.Pd', NULL, 0, 'Pd.Panjang, 20-9-1972', 'Padang Panjang', ' ', '', NULL, 0, 0),
(152, 0, 0, '197206262006042027', NULL, 'EVANITA, S.Pd', NULL, 2, 'Pd.Panjang, 26-6-1972', 'Padang Panjang', ' ', '', NULL, 0, 0),
(153, 0, 0, '197311282006042004', NULL, 'HUSNI AINI, S.Pd', NULL, 2, 'Palembang,28-11-1975', 'Padang Panjang', ' ', '', NULL, 0, 0),
(154, 0, 0, '197812092006041005', NULL, 'CANDARA TRI SUSANTO, ST', NULL, 1, 'Cilacap, 9-12-2978', 'Padang Panjang', ' ', '', NULL, 0, 0),
(155, 0, 0, '198105072006041004', NULL, 'FIRDAUS, S.Pd', NULL, 1, 'Solok,,7-5-1981', 'Padang Panjang', ' ', '', NULL, 0, 0),
(156, 0, 0, '198007102006042006', NULL, 'ROZA SUSANTI, S.Pd.I', NULL, 2, 'Balinga, 10-7-1980', 'Padang Panjang', ' ', '', NULL, 0, 0),
(157, 0, 0, '196104291986031003', NULL, 'Drs.IVERY MORPHI, M.Pd', NULL, 1, 'Dangung-Dangung 50 Kota, 29-4-1961', 'Padang Panjang', ' ', '', NULL, 0, 0),
(158, 0, 0, '197205162006012014', NULL, 'ANDRIZA, S.Pd', NULL, 2, 'Pd.Panjang, 16-5-1972', 'Padang Panjang', ' ', '', NULL, 0, 0),
(159, 0, 0, '197306162006042023', NULL, 'YASTATI, S.Pd', NULL, 2, 'Kubu Nan Limo,16-6-1973', 'Padang Panjang', ' ', '', NULL, 0, 0),
(160, 0, 0, '196707102007011010', NULL, 'Drs. ERIZON CHRISTIAR', NULL, 1, 'Pd.Panjang,10-7-1967', 'Padang Panjang', ' ', '', NULL, 0, 0),
(161, 0, 0, '196509152007012007', NULL, 'Dra. NUR ASWATI', NULL, 2, 'Gunung, 19-9-1965', 'Padang Panjang', ' ', '', NULL, 0, 0),
(162, 0, 0, '196512182007011002', NULL, 'MUSBAR. S.Pd', NULL, 1, 'Tanah Datar, 18-12-1965', 'Padang Panjang', ' ', '', NULL, 0, 0),
(163, 0, 0, '197504142008022001', NULL, 'YUSMA ELDA, S.Pd', NULL, 2, 'Latikan, 14-4-1975', 'Padang Panjang', ' ', '', NULL, 0, 0),
(164, 0, 0, '198109102006042012', NULL, 'SANDRA WELI, S.Pd', NULL, 2, 'Pd.Panjang, 10-9-1981', 'Padang Panjang', ' ', '', NULL, 0, 0),
(165, 0, 0, '198005052008022001', NULL, 'MERI SUSANTI, S.Pd', NULL, 2, 'Padang, 5-5-1980', 'Padang Panjang', ' ', '', NULL, 0, 0),
(166, 0, 0, '197807262008012001', NULL, 'WIRDAYETTI. S.Pd', NULL, 2, 'Pd.Panjang, 26-7-1978', 'Padang Panjang', ' ', '', NULL, 0, 0),
(167, 0, 0, '197009252008012002', NULL, 'LENTIVA, S.Pd', NULL, 2, 'Pd.Panjang, 25-9-1970', 'Padang Panjang', ' ', '', NULL, 0, 0),
(168, 0, 0, '198307032008022001', NULL, 'HILWATI, S.Pd', NULL, 2, 'Pd.Panjang, 3-7-1983', 'Padang Panjang', ' ', '', NULL, 0, 0),
(169, 0, 0, '197810072008022001', NULL, 'FERA SUSANTI M.Pd.T', NULL, 2, 'Pd.Panjang, 7-10-1978', 'Padang Panjang', ' ', '', NULL, 0, 0),
(170, 0, 0, '198201272008022001', NULL, 'YETTI FITRIANI, S.Pd', NULL, 2, 'Sei,Lasi, 27-1-1982', 'Padang Panjang', ' ', '', NULL, 0, 0),
(171, 0, 0, '198203152008022001', NULL, 'JUSLINA PANDIANGAN, S.Pd', NULL, 2, 'Nasumandar, 15-3-1982', 'Padang panjang', ' ', '', NULL, 0, 0),
(172, 0, 0, '198207272008022001', NULL, 'NOVA FITRI YULIZA, S.Pd', NULL, 2, 'Guguk, 27 Juli 1982', 'Padang Panjang', ' ', '', NULL, 0, 0),
(173, 0, 0, '198208312008022001', NULL, 'RIDVIA LISA. S.Pd', NULL, 2, 'Payakumbuh, 31-8-1982', 'Padang Panjang', ' ', '', NULL, 0, 0),
(174, 0, 0, '198307092008022002', NULL, 'RENI SUSANDRA DEWI, S.Pd', NULL, 2, 'Kubu Apar, 9-7-1983', 'Padang Panjang', ' ', '', NULL, 0, 0),
(175, 0, 0, '197607142006041004', NULL, 'SOFYAN,S.Pd', NULL, 1, 'Pariangan, 14-7-1976', 'Padang Panjang', ' ', '', NULL, 0, 0),
(176, 0, 0, '197608022009021001', NULL, 'FAHMI ZAIN,S.Pd', NULL, 1, 'Kepala Hilalang, 2-8-1976', 'Padang Panjang', ' ', '', NULL, 0, 0),
(177, 0, 0, '198102152009022001', NULL, 'RAHMAYENI,S.Pd', NULL, 2, 'Padang, 15-2-1981', 'Padang Panjang', ' ', '', NULL, 0, 0),
(178, 0, 0, '19800310 200902 1 00', NULL, 'MAR ARIF, S.Pd.I', NULL, 1, 'Lalan , 10-3-1980', 'Padang Panjang', ' ', '', NULL, 0, 0),
(179, 0, 0, '1981132010012007', NULL, 'ERMA HELFIITA,S.Pd', NULL, 2, 'Payakumbuh, 13-1-1981', 'Padang Panjang', ' ', '', NULL, 0, 0),
(180, 0, 0, '198801142011012004', NULL, 'MIFTAHUL HIDAYATI,S.PdI', NULL, 2, 'Bukittinggi, 14-1-1988', 'Padang Panjang', ' ', '', NULL, 0, 0),
(181, 0, 0, '198710302011012003', NULL, 'NURFATMAH,S.Pd', NULL, 2, 'Ladang Laweh/ 30-10-1987', 'Padang Panjang', ' ', '', NULL, 0, 0),
(182, 0, 0, '198608162011012008', NULL, 'FITRA GUSNITA,S.Pd', NULL, 2, 'Koto Gadang, 16-8-1986', 'Padang Panjang', ' ', '', NULL, 0, 0),
(183, 0, 0, '0', NULL, 'LINA EKA PUTRI,S.Pd', NULL, 2, 'Bukittinggi, 31-1-1985', 'Padang Panjang', ' ', '', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hadr`
--

DROP TABLE IF EXISTS `hadr`;
CREATE TABLE `hadr` (
  `id` int(11) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `hadr`
--

TRUNCATE TABLE `hadr`;
--
-- Dumping data for table `hadr`
--

INSERT INTO `hadr` (`id`, `nama`, `nilai`) VALUES
(0, 'Alfa', NULL),
(1, 'Hadir', NULL),
(2, 'Sakit', NULL),
(3, 'Izin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `haker`
--

DROP TABLE IF EXISTS `haker`;
CREATE TABLE `haker` (
  `kode` int(11) DEFAULT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `haker` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `haker`
--

TRUNCATE TABLE `haker`;
--
-- Dumping data for table `haker`
--

INSERT INTO `haker` (`kode`, `bulan`, `haker`) VALUES
(1, 'Januari', 25),
(2, 'Pebruari', 20),
(3, 'Maret', 25),
(4, 'April', 26),
(5, 'Mei', 0),
(6, 'Juni', 0),
(7, 'Juli', 25),
(8, 'Agus', 25),
(9, 'September', 26),
(10, 'Oktober', 27),
(11, 'November', 0),
(12, 'Desember', 26);

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

DROP TABLE IF EXISTS `hari`;
CREATE TABLE `hari` (
  `hariid` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Nama_en` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `NA` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Truncate table before insert `hari`
--

TRUNCATE TABLE `hari`;
--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`hariid`, `nama`, `Nama_en`, `NA`) VALUES
(1, 'Senin', 'Monday', 'N'),
(2, 'Selasa', 'Tuesday', 'N'),
(3, 'Rabu', 'Wednesday', 'N'),
(4, 'Kamis', 'Thursday', 'N'),
(5, 'Jumat', 'Friday', 'N'),
(6, 'Sabtu', 'Saturday', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

DROP TABLE IF EXISTS `hasil`;
CREATE TABLE `hasil` (
  `hasilid` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ordering` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `hasil`
--

TRUNCATE TABLE `hasil`;
--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`hasilid`, `nama`, `ordering`) VALUES
(1, '> 5.000.000', 1),
(2, '2.000.000 s/d 5.000.000', 2),
(3, '< 2.000.000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE `home` (
  `id_posting` int(11) NOT NULL,
  `title_posting` varchar(200) NOT NULL DEFAULT '',
  `note_posting` varchar(225) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `home`
--

TRUNCATE TABLE `home`;
--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id_posting`, `title_posting`, `note_posting`) VALUES
(20, 'Kulit Buatan yang Tetap Bisa Rasakan Sentuhan', 'Peneliti dari Stanford University, AS, membuat sensor kulit buatan dinamakan super skin yang bisa digunakan untuk robot sehingga memiliki kemampuan untuk merasakan sentuhan.\n\n\"Sensor ini bisa merasakan tekanan dari cubitan ri'),
(21, 'Virus Terbesar di Dunia Ditemukan', 'Ilmuwan dikejutkan oleh penemuan virus terbesar di dunia di wilayah lepas pantai Chile. Virus ini memiliki lebih dari 1000 genome, demikian papar ilmuwan pada AFP, Senin (10/10/2011). Virus jenis baru tersebut dinamakan Megav'),
(22, '14.000 Bintang Baru Terdeteksi', 'lmuwan NASA berhasil mendeteksi citra detail wilayah pembentukan bintang baru yang berjarak sangat jauh dari Bumi. Citra menakjubkan itu diambil dengan Chandra X Ray Observatory.\n\nBerdasarkan publikasi Daily Mail, Minggu (16/'),
(23, 'Fosil Kumbang Berwarna dari Zaman Dinosaurus', 'Fosil biasa ditemukan dalam rupa hitam putih. Namun kali ini, ilmuwan berhasil menemukan fosil kumbang prasejarah yang berwarna metalik cerah. Penemuan ini dipublikasikan di jurnal Proceeding of the Royal Society B dan membuk'),
(24, 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `infosekolah`
--

DROP TABLE IF EXISTS `infosekolah`;
CREATE TABLE `infosekolah` (
  `id_info` int(11) NOT NULL,
  `title_info` varchar(100) NOT NULL DEFAULT '',
  `note_info` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `infosekolah`
--

TRUNCATE TABLE `infosekolah`;
-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `idjbt` int(11) NOT NULL,
  `kode` char(20) DEFAULT '',
  `nama` varchar(50) NOT NULL DEFAULT '',
  `tunja` double(15,2) DEFAULT '0.00',
  `level` int(11) DEFAULT '0',
  `uma` double(15,2) DEFAULT '0.00',
  `tran` double(15,2) DEFAULT '0.00',
  `pensi` double(15,2) DEFAULT '0.00',
  `perum` double(15,2) DEFAULT '0.00',
  `thr` double(15,2) DEFAULT '0.00',
  `trflembur` int(11) DEFAULT '0',
  `tunjis` double(15,2) DEFAULT '0.00',
  `tunak` double(15,2) DEFAULT '0.00',
  `idaktif` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `jabatan`
--

TRUNCATE TABLE `jabatan`;
-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `id` bigint(20) NOT NULL,
  `kelasid` int(11) DEFAULT '0',
  `mapelid` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `hariid` smallint(6) NOT NULL DEFAULT '1',
  `jammulai` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '08:00:00',
  `jamselesai` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '09:59:00',
  `tglmulai` date DEFAULT NULL,
  `tglselesai` date DEFAULT NULL,
  `guruid` int(11) DEFAULT NULL,
  `ruangid` int(11) DEFAULT NULL,
  `tugas1` decimal(5,2) NOT NULL DEFAULT '0.00',
  `tugas2` decimal(5,2) NOT NULL DEFAULT '0.00',
  `tugas3` decimal(5,2) NOT NULL DEFAULT '0.00',
  `tugas4` decimal(5,2) NOT NULL DEFAULT '0.00',
  `tugas5` decimal(5,2) NOT NULL DEFAULT '0.00',
  `tugas6` decimal(5,2) NOT NULL DEFAULT '0.00',
  `tugas7` decimal(5,2) NOT NULL DEFAULT '0.00',
  `tugas8` decimal(5,2) NOT NULL DEFAULT '0.00',
  `tugas9` decimal(5,2) NOT NULL DEFAULT '0.00',
  `presensi` decimal(5,2) NOT NULL DEFAULT '0.00',
  `uts` decimal(5,2) NOT NULL DEFAULT '0.00',
  `uas` decimal(5,2) NOT NULL DEFAULT '0.00',
  `final` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `responsi` decimal(5,2) NOT NULL DEFAULT '0.00',
  `tahunid` int(11) DEFAULT NULL,
  `kb` double(15,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Truncate table before insert `jadwal`
--

TRUNCATE TABLE `jadwal`;
--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `kelasid`, `mapelid`, `nama`, `hariid`, `jammulai`, `jamselesai`, `tglmulai`, `tglselesai`, `guruid`, `ruangid`, `tugas1`, `tugas2`, `tugas3`, `tugas4`, `tugas5`, `tugas6`, `tugas7`, `tugas8`, `tugas9`, `presensi`, `uts`, `uas`, `final`, `responsi`, `tahunid`, `kb`) VALUES
(1, 22, 35, NULL, 1, '08.00', '10.00', NULL, NULL, 31, 8, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 2, 0.00),
(2, 22, 20, NULL, 1, '10.15', '11.15', NULL, NULL, 50, 10, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 2, 0.00),
(3, 13, 36, NULL, 1, '13:00', '15:00', NULL, NULL, 120, 8, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(4, 13, 23, NULL, 1, '10:00', '12:00', NULL, NULL, 10, 8, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(5, 13, 74, NULL, 1, '08:00', '10:00', NULL, NULL, 117, 8, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(6, 22, 23, NULL, 1, '08.00', '10.00', NULL, NULL, 10, 9, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(7, 22, 36, NULL, 1, '10:00', '12:00', NULL, NULL, 120, 9, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(8, 22, 74, NULL, 1, '13:00', '15:00', NULL, NULL, 117, 9, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(9, 21, 60, NULL, 1, '08.00', '10.00', NULL, NULL, 119, 22, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(10, 21, 74, NULL, 1, '10:00', '12:00', NULL, NULL, 117, 22, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(11, 21, 63, NULL, 1, '13:00', '15:00', NULL, NULL, 119, 22, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(12, 23, 34, NULL, 1, '08.00', '10.00', NULL, NULL, 117, 7, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(13, 23, 36, NULL, 1, '10:00', '12:00', NULL, NULL, 120, 7, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(14, 23, 23, NULL, 1, '13:00', '15:00', NULL, NULL, 10, 10, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(15, 23, 63, NULL, 2, '08.00', '10.00', NULL, NULL, 119, 7, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(16, 23, 16, NULL, 2, '10:00', '12:00', NULL, NULL, 126, 7, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(17, 23, 26, NULL, 2, '13:00', '15:00', NULL, NULL, 127, 7, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00),
(18, 23, 19, NULL, 3, '08.00', '10.00', NULL, NULL, 133, 7, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'N', '0.00', 1, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `jarak`
--

DROP TABLE IF EXISTS `jarak`;
CREATE TABLE `jarak` (
  `jarakid` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `jarak`
--

TRUNCATE TABLE `jarak`;
--
-- Dumping data for table `jarak`
--

INSERT INTO `jarak` (`jarakid`, `nama`) VALUES
(1, '> 5 Km'),
(2, '2-5 Km'),
(3, '0-2 Km');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `jurusan`
--

TRUNCATE TABLE `jurusan`;
--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode`, `nama`, `ordering`) VALUES
(1, '1980', 'Rekayasa Perangkat Lunak (RPL)', NULL),
(2, '1234', 'Teknik Komputer Jaringan (TKJ)', NULL),
(4, '4332', 'Multimedia (MM)', NULL),
(5, '1239', 'Broadcasting', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kar`
--

DROP TABLE IF EXISTS `kar`;
CREATE TABLE `kar` (
  `id` int(11) NOT NULL,
  `no` int(11) DEFAULT '0',
  `nip` varchar(60) DEFAULT '',
  `nik` varchar(20) DEFAULT ' ',
  `nama` varchar(100) DEFAULT ' ',
  `noktp` varchar(20) DEFAULT ' ',
  `nohp` varchar(20) DEFAULT ' ',
  `idgol` int(11) DEFAULT '0',
  `tltgll` varchar(150) DEFAULT ' ',
  `tl` varchar(100) DEFAULT ' ',
  `jeka` int(11) DEFAULT '0',
  `idnikah` int(11) DEFAULT '0',
  `jmla` int(11) DEFAULT NULL,
  `idpddk` int(2) DEFAULT '0',
  `idagama` int(11) DEFAULT '0',
  `alamat` varchar(200) DEFAULT ' ',
  `notelp` varchar(20) DEFAULT ' ',
  `nonp` varchar(20) DEFAULT ' ',
  `gapok` double(15,2) DEFAULT '0.00',
  `tglb` date DEFAULT '2000-01-01',
  `tglk2` date DEFAULT '2000-01-01',
  `naba` varchar(50) DEFAULT ' ',
  `norek` varchar(20) DEFAULT ' ',
  `namarek` varchar(50) DEFAULT ' ',
  `idjbt` int(11) DEFAULT '0',
  `idsk` int(11) DEFAULT '0',
  `ptkp` varchar(20) DEFAULT ' ',
  `honorsks` double(15,2) DEFAULT '0.00',
  `tglc` date DEFAULT '2000-01-01',
  `tglk` date DEFAULT '2000-01-01',
  `tglt` date DEFAULT '2000-01-01',
  `idsaker` int(11) DEFAULT '0',
  `idjafung` int(11) DEFAULT '0',
  `idshif` int(11) DEFAULT '1',
  `nktam` varchar(20) DEFAULT ' ',
  `nidn` varchar(20) DEFAULT ' '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `kar`
--

TRUNCATE TABLE `kar`;
--
-- Dumping data for table `kar`
--

INSERT INTO `kar` (`id`, `no`, `nip`, `nik`, `nama`, `noktp`, `nohp`, `idgol`, `tltgll`, `tl`, `jeka`, `idnikah`, `jmla`, `idpddk`, `idagama`, `alamat`, `notelp`, `nonp`, `gapok`, `tglb`, `tglk2`, `naba`, `norek`, `namarek`, `idjbt`, `idsk`, `ptkp`, `honorsks`, `tglc`, `tglk`, `tglt`, `idsaker`, `idjafung`, `idshif`, `nktam`, `nidn`) VALUES
(323, 1, '196305221985032003', ' ', 'LINAYATMI', ' ', '', 0, 'Bukittinggi,22-5-1963', ' ', 2, 0, NULL, 0, 0, 'Padang Panjang', ' ', ' ', 0.00, '2000-01-01', '2000-01-01', ' ', ' ', ' ', 0, 0, ' ', 0.00, '2000-01-01', '2000-01-01', '2000-01-01', 0, 0, 1, ' ', ' '),
(329, 2, '197407012007012008', ' ', 'YULIARTI', ' ', '', 0, 'Pd.Panjang, 01-7-1874', ' ', 2, 0, NULL, 0, 0, 'Padang Panjang', ' ', ' ', 0.00, '2000-01-01', '2000-01-01', ' ', ' ', ' ', 0, 0, ' ', 0.00, '2000-01-01', '2000-01-01', '2000-01-01', 0, 0, 1, ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `kelamin`
--

DROP TABLE IF EXISTS `kelamin`;
CREATE TABLE `kelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ordering` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `kelamin`
--

TRUNCATE TABLE `kelamin`;
--
-- Dumping data for table `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`, `ordering`) VALUES
(1, 'Laki-Laki', NULL),
(2, 'Perempuan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL DEFAULT '',
  `nama` varchar(255) DEFAULT NULL,
  `ordering` tinyint(4) DEFAULT NULL,
  `waliid` int(11) DEFAULT '0',
  `kapasitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `kelas`
--

TRUNCATE TABLE `kelas`;
--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kode`, `nama`, `ordering`, `waliid`, `kapasitas`) VALUES
(13, '1TKJ2', '1 TKJ 2', NULL, 117, 30),
(14, '1TKJ3', '1 TKJ 3', NULL, 118, 30),
(21, '1MM1', '1 MM 1', NULL, 119, 30),
(22, '1TKJ1', '1 TKJ 1', NULL, 138, 30),
(23, '1RPL1', '1 RPL 1', NULL, 121, 30);

-- --------------------------------------------------------

--
-- Table structure for table `kelassiswa`
--

DROP TABLE IF EXISTS `kelassiswa`;
CREATE TABLE `kelassiswa` (
  `id` int(11) NOT NULL,
  `idkelas` int(11) NOT NULL,
  `idsiswa` int(11) NOT NULL,
  `tahunid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `kelassiswa`
--

TRUNCATE TABLE `kelassiswa`;
--
-- Dumping data for table `kelassiswa`
--

INSERT INTO `kelassiswa` (`id`, `idkelas`, `idsiswa`, `tahunid`) VALUES
(40, 13, 585, 1),
(39, 13, 631, 1),
(42, 13, 679, 1),
(37, 13, 786, 1),
(38, 13, 854, 1),
(41, 13, 906, 1),
(36, 13, 929, 1),
(52, 13, 932, 1),
(43, 21, 567, 1),
(48, 21, 639, 1),
(50, 21, 662, 1),
(60, 21, 720, 1),
(63, 21, 764, 1),
(46, 21, 859, 1),
(45, 21, 860, 1),
(44, 21, 932, 1),
(49, 21, 958, 1),
(61, 21, 991, 1),
(56, 21, 993, 1),
(24, 22, 554, 2),
(29, 22, 556, 2),
(28, 22, 557, 2),
(31, 22, 567, 1),
(9, 22, 586, 2),
(16, 22, 615, 2),
(19, 22, 616, 2),
(21, 22, 655, 2),
(25, 22, 677, 2),
(20, 22, 690, 2),
(22, 22, 711, 2),
(8, 22, 716, 2),
(3, 22, 717, 2),
(33, 22, 720, 1),
(12, 22, 726, 2),
(15, 22, 727, 2),
(13, 22, 750, 2),
(10, 22, 763, 2),
(23, 22, 784, 2),
(6, 22, 818, 2),
(26, 22, 850, 2),
(30, 22, 851, 2),
(4, 22, 856, 2),
(2, 22, 857, 2),
(17, 22, 864, 2),
(14, 22, 890, 2),
(18, 22, 891, 2),
(11, 22, 914, 2),
(5, 22, 930, 2),
(7, 22, 955, 2),
(1, 22, 956, 2),
(32, 22, 993, 1),
(27, 22, 1026, 2),
(65, 23, 541, 1),
(53, 23, 1030, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

DROP TABLE IF EXISTS `kelompok`;
CREATE TABLE `kelompok` (
  `kelid` int(11) NOT NULL,
  `kode` char(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ordering` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `kelompok`
--

TRUNCATE TABLE `kelompok`;
--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`kelid`, `kode`, `nama`, `ordering`) VALUES
(1, '4', 'C2 (Dasar Program Keahlian)', 4),
(2, '2', 'Kelompok B (Wajib)', 2),
(3, '1', 'Kelompok A (Wajib)', 1),
(4, '3', 'C1 (Dasar Bidang Keahlian)', 3),
(5, '5', 'C3 (Paket Keahlian)', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kerja`
--

DROP TABLE IF EXISTS `kerja`;
CREATE TABLE `kerja` (
  `kerjaid` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ordering` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `kerja`
--

TRUNCATE TABLE `kerja`;
--
-- Dumping data for table `kerja`
--

INSERT INTO `kerja` (`kerjaid`, `nama`, `ordering`) VALUES
(1, 'PNS', 1),
(2, 'Pegawai Swasta', 2),
(3, 'Pegawai BUMN', 3),
(4, 'Dokter', 4),
(5, 'Lainnya', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kora`
--

DROP TABLE IF EXISTS `kora`;
CREATE TABLE `kora` (
  `no` int(11) DEFAULT '0',
  `idlem` int(11) NOT NULL,
  `nik` char(20) DEFAULT NULL,
  `noBulan` int(11) DEFAULT '0',
  `thn` int(11) DEFAULT NULL,
  `kora` int(11) DEFAULT '0',
  `korel` time DEFAULT '00:00:00',
  `kotel` double(15,2) DEFAULT '0.00',
  `tanda` varchar(20) DEFAULT ' ',
  `tankor` char(1) DEFAULT '',
  `kocep` double(15,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `kora`
--

TRUNCATE TABLE `kora`;
-- --------------------------------------------------------

--
-- Table structure for table `lemkarrinci`
--

DROP TABLE IF EXISTS `lemkarrinci`;
CREATE TABLE `lemkarrinci` (
  `id` int(11) DEFAULT NULL,
  `idl` varchar(20) DEFAULT ' ',
  `no` int(11) DEFAULT '0',
  `idlem` int(11) NOT NULL,
  `nik` char(20) DEFAULT NULL,
  `noBulan` int(11) DEFAULT '0',
  `thn` int(11) DEFAULT NULL,
  `lembur` time DEFAULT '00:00:00',
  `hadir` int(11) DEFAULT '0',
  `tgl` date DEFAULT '2014-01-01',
  `masuk` time DEFAULT '00:00:00',
  `keluar` time DEFAULT '00:00:00',
  `tanda` char(10) DEFAULT '',
  `Early` time DEFAULT '00:00:00',
  `Late` time DEFAULT '00:00:00',
  `jammasuk` time DEFAULT '08:00:00',
  `jamplg` time DEFAULT '16:00:00',
  `korel` time DEFAULT '00:00:00',
  `kora` int(11) DEFAULT '0',
  `kotel` double(15,2) DEFAULT '0.00',
  `tankor` char(1) DEFAULT '',
  `status` varchar(20) DEFAULT ' ',
  `tahunid` int(11) DEFAULT NULL,
  `koreksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `lemkarrinci`
--

TRUNCATE TABLE `lemkarrinci`;
--
-- Dumping data for table `lemkarrinci`
--

INSERT INTO `lemkarrinci` (`id`, `idl`, `no`, `idlem`, `nik`, `noBulan`, `thn`, `lembur`, `hadir`, `tgl`, `masuk`, `keluar`, `tanda`, `Early`, `Late`, `jammasuk`, `jamplg`, `korel`, `kora`, `kotel`, `tankor`, `status`, `tahunid`, `koreksi`) VALUES
(323, '08-323', 323, 116, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '00:00:00', '00:00:00', 'Manual', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 2),
(327, '08-327', 323, 117, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '00:00:00', '00:00:00', 'Manual', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 3),
(328, '08-328', 327, 118, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'n', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(323, '08-323', 323, 119, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', 'M', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(327, '08-327', 323, 120, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '00:00:00', '00:00:00', 'Manual', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(328, '08-328', 327, 121, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', 'n', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(323, '08-323', 323, 122, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', 'M', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(327, '08-327', 323, 123, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '00:00:00', '00:00:00', 'Manual', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 3),
(328, '08-328', 327, 124, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', 'n', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(117, '08-117', 117, 125, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'M', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(118, '08-118', 117, 126, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'a', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(119, '08-119', 118, 127, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'n', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(121, '08-121', 118, 128, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'u', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(137, '08-137', 119, 129, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'a', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(138, '08-138', 119, 130, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'l', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(139, '08-139', 121, 131, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(140, '08-140', 121, 132, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(141, '08-141', 137, 133, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(142, '08-142', 137, 134, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(143, '08-143', 138, 135, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(144, '08-144', 138, 136, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(145, '08-145', 139, 137, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(146, '08-146', 139, 138, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(147, '08-147', 140, 139, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(148, '08-148', 140, 140, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(149, '08-149', 141, 141, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(150, '08-150', 141, 142, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(151, '08-151', 142, 143, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(152, '08-152', 142, 144, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(153, '08-153', 143, 145, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(154, '08-154', 143, 146, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(155, '08-155', 144, 147, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(156, '08-156', 144, 148, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(157, '08-157', 145, 149, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(158, '08-158', 145, 150, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(159, '08-159', 146, 151, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(160, '08-160', 146, 152, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(161, '08-161', 147, 153, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(162, '08-162', 147, 154, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(163, '08-163', 148, 155, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(164, '08-164', 148, 156, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(165, '08-165', 149, 157, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(166, '08-166', 149, 158, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(167, '08-167', 150, 159, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(168, '08-168', 150, 160, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(169, '08-169', 151, 161, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(170, '08-170', 151, 162, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(171, '08-171', 152, 163, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(172, '08-172', 152, 164, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(173, '08-173', 153, 165, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(174, '08-174', 153, 166, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(175, '08-175', 154, 167, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(176, '08-176', 154, 168, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(177, '08-177', 155, 169, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(178, '08-178', 155, 170, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(179, '08-179', 156, 171, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(180, '08-180', 156, 172, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(181, '08-181', 157, 173, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(182, '08-182', 157, 174, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(183, '08-183', 158, 175, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lemkarrincig`
--

DROP TABLE IF EXISTS `lemkarrincig`;
CREATE TABLE `lemkarrincig` (
  `id` int(11) DEFAULT NULL,
  `idl` varchar(20) DEFAULT ' ',
  `no` int(11) DEFAULT '0',
  `idlem` int(11) NOT NULL,
  `nik` char(20) DEFAULT NULL,
  `noBulan` int(11) DEFAULT '0',
  `thn` int(11) DEFAULT NULL,
  `lembur` time DEFAULT '00:00:00',
  `hadir` int(11) DEFAULT '0',
  `tgl` date DEFAULT '2014-01-01',
  `masuk` time DEFAULT '00:00:00',
  `keluar` time DEFAULT '00:00:00',
  `tanda` char(10) DEFAULT '',
  `Early` time DEFAULT '00:00:00',
  `Late` time DEFAULT '00:00:00',
  `jammasuk` time DEFAULT '08:00:00',
  `jamplg` time DEFAULT '16:00:00',
  `korel` time DEFAULT '00:00:00',
  `kora` int(11) DEFAULT '0',
  `kotel` double(15,2) DEFAULT '0.00',
  `tankor` char(1) DEFAULT '',
  `status` varchar(20) DEFAULT ' ',
  `tahunid` int(11) DEFAULT NULL,
  `koreksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `lemkarrincig`
--

TRUNCATE TABLE `lemkarrincig`;
--
-- Dumping data for table `lemkarrincig`
--

INSERT INTO `lemkarrincig` (`id`, `idl`, `no`, `idlem`, `nik`, `noBulan`, `thn`, `lembur`, `hadir`, `tgl`, `masuk`, `keluar`, `tanda`, `Early`, `Late`, `jammasuk`, `jamplg`, `korel`, `kora`, `kotel`, `tankor`, `status`, `tahunid`, `koreksi`) VALUES
(117, '08-117', 117, 237, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'M', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(118, '08-118', 117, 238, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '00:00:00', '00:00:00', 'Manual', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 2),
(119, '08-119', 118, 239, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'n', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(121, '08-121', 118, 240, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'u', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(137, '08-137', 119, 241, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'a', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(138, '08-138', 119, 242, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', 'l', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(139, '08-139', 121, 243, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(140, '08-140', 121, 244, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(141, '08-141', 137, 245, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(142, '08-142', 137, 246, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(143, '08-143', 138, 247, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(144, '08-144', 138, 248, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '17:00:00', 'Manual', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 2),
(145, '08-145', 139, 249, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(146, '08-146', 139, 250, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(147, '08-147', 140, 251, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(148, '08-148', 140, 252, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(149, '08-149', 141, 253, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(150, '08-150', 141, 254, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(151, '08-151', 142, 255, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(152, '08-152', 142, 256, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(153, '08-153', 143, 257, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(154, '08-154', 143, 258, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(155, '08-155', 144, 259, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(156, '08-156', 144, 260, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(157, '08-157', 145, 261, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(158, '08-158', 145, 262, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(159, '08-159', 146, 263, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(160, '08-160', 146, 264, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(161, '08-161', 147, 265, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(162, '08-162', 147, 266, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(163, '08-163', 148, 267, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(164, '08-164', 148, 268, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(165, '08-165', 149, 269, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(166, '08-166', 149, 270, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(167, '08-167', 150, 271, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(168, '08-168', 150, 272, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(169, '08-169', 151, 273, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(170, '08-170', 151, 274, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(171, '08-171', 152, 275, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(172, '08-172', 152, 276, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(173, '08-173', 153, 277, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(174, '08-174', 153, 278, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(175, '08-175', 154, 279, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(176, '08-176', 154, 280, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(177, '08-177', 155, 281, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(178, '08-178', 155, 282, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(179, '08-179', 156, 283, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(180, '08-180', 156, 284, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(181, '08-181', 157, 285, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(182, '08-182', 157, 286, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(183, '08-183', 158, 287, NULL, 8, 2016, '00:00:00', 1, '2016-08-01', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(117, '08-117', 117, 288, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', 'M', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(118, '08-118', 117, 289, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', 'a', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(119, '08-119', 118, 290, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', 'n', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(121, '08-121', 118, 291, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', 'u', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(137, '08-137', 119, 292, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', 'a', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(138, '08-138', 119, 293, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', 'l', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(139, '08-139', 121, 294, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(140, '08-140', 121, 295, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(141, '08-141', 137, 296, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(142, '08-142', 137, 297, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(143, '08-143', 138, 298, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(144, '08-144', 138, 299, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(145, '08-145', 139, 300, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(146, '08-146', 139, 301, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(147, '08-147', 140, 302, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(148, '08-148', 140, 303, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(149, '08-149', 141, 304, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(150, '08-150', 141, 305, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(151, '08-151', 142, 306, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(152, '08-152', 142, 307, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(153, '08-153', 143, 308, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(154, '08-154', 143, 309, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(155, '08-155', 144, 310, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(156, '08-156', 144, 311, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(157, '08-157', 145, 312, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(158, '08-158', 145, 313, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(159, '08-159', 146, 314, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(160, '08-160', 146, 315, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(161, '08-161', 147, 316, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(162, '08-162', 147, 317, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(163, '08-163', 148, 318, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(164, '08-164', 148, 319, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(165, '08-165', 149, 320, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(166, '08-166', 149, 321, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(167, '08-167', 150, 322, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(168, '08-168', 150, 323, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(169, '08-169', 151, 324, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(170, '08-170', 151, 325, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(171, '08-171', 152, 326, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(172, '08-172', 152, 327, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(173, '08-173', 153, 328, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(174, '08-174', 153, 329, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(175, '08-175', 154, 330, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(176, '08-176', 154, 331, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(177, '08-177', 155, 332, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(178, '08-178', 155, 333, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(179, '08-179', 156, 334, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(180, '08-180', 156, 335, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(181, '08-181', 157, 336, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(182, '08-182', 157, 337, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(183, '08-183', 158, 338, NULL, 8, 2016, '00:00:00', 1, '2016-08-02', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(117, '08-117', 117, 339, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', 'M', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(118, '08-118', 117, 340, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', 'a', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(119, '08-119', 118, 341, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', 'n', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(121, '08-121', 118, 342, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', 'u', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(137, '08-137', 119, 343, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', 'a', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(138, '08-138', 119, 344, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', 'l', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(139, '08-139', 121, 345, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(140, '08-140', 121, 346, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(141, '08-141', 137, 347, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(142, '08-142', 137, 348, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(143, '08-143', 138, 349, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(144, '08-144', 138, 350, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(145, '08-145', 139, 351, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(146, '08-146', 139, 352, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(147, '08-147', 140, 353, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(148, '08-148', 140, 354, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(149, '08-149', 141, 355, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(150, '08-150', 141, 356, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(151, '08-151', 142, 357, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(152, '08-152', 142, 358, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(153, '08-153', 143, 359, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(154, '08-154', 143, 360, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(155, '08-155', 144, 361, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(156, '08-156', 144, 362, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(157, '08-157', 145, 363, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(158, '08-158', 145, 364, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(159, '08-159', 146, 365, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(160, '08-160', 146, 366, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(161, '08-161', 147, 367, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(162, '08-162', 147, 368, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(163, '08-163', 148, 369, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(164, '08-164', 148, 370, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(165, '08-165', 149, 371, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(166, '08-166', 149, 372, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(167, '08-167', 150, 373, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(168, '08-168', 150, 374, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(169, '08-169', 151, 375, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(170, '08-170', 151, 376, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(171, '08-171', 152, 377, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(172, '08-172', 152, 378, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(173, '08-173', 153, 379, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(174, '08-174', 153, 380, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(175, '08-175', 154, 381, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(176, '08-176', 154, 382, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(177, '08-177', 155, 383, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(178, '08-178', 155, 384, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(179, '08-179', 156, 385, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(180, '08-180', 156, 386, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(181, '08-181', 157, 387, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(182, '08-182', 157, 388, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0),
(183, '08-183', 158, 389, NULL, 8, 2016, '00:00:00', 1, '2016-08-03', '08:00:00', '16:00:00', '', '00:00:00', '00:00:00', '08:00:00', '16:00:00', '00:00:00', 0, 0.00, '', 'Manual', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

DROP TABLE IF EXISTS `mapel`;
CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ordering` tinyint(4) DEFAULT NULL,
  `kelid` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `mapel`
--

TRUNCATE TABLE `mapel`;
--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `kode`, `nama`, `ordering`, `kelid`) VALUES
(16, 'A04', 'Matematika', NULL, 3),
(17, 'B03', 'Prakarya dan Kewirausahaan', NULL, 2),
(18, 'B02', 'Pendidikan Jasmani Olah Raga', NULL, 2),
(19, 'B01', 'Seni Budaya', NULL, 2),
(20, 'A06', 'Bahasa Inggris', NULL, 1),
(21, 'A05', 'Sejarah Indonesia', NULL, 1),
(22, 'A04', 'Matematika', NULL, 1),
(23, 'A03', 'Bahasa Indonesia', NULL, 1),
(24, 'A02', 'Pendidikan Kewarganegaraan', NULL, 1),
(25, 'A01', 'Pendidikan Agama dan Budi Pekerti', NULL, 1),
(26, 'C101', 'Fisika', NULL, 3),
(27, 'C102', 'Pemrograman Dasar', NULL, 3),
(28, 'C103', 'Sistem Komputer', NULL, 3),
(29, 'C104', 'IPA Terapan', NULL, 3),
(30, 'C105', 'Pengantar Pariwisata', NULL, 3),
(31, 'C106', 'Pengantar Ekonomi dan Bisnis', NULL, 3),
(32, 'C107', 'Pengantar Akuntansi ', NULL, 3),
(33, 'C108', 'Pengantar Administrasi Perkantoran', NULL, 3),
(34, 'C201', 'Perakitan Komputer', NULL, 4),
(35, 'C202', 'Simulasi Digital', NULL, 4),
(36, 'C203', 'Sistem Operasi', NULL, 4),
(37, 'C204', 'Jaringan Dasar', NULL, 4),
(38, 'C205', 'Pemrograman Web', NULL, 4),
(39, 'C206', 'Industri Perhotelan', NULL, 4),
(40, 'C207', 'Sanitasi Hygiene dan Keselamatan Kerja', NULL, 4),
(41, 'C208', 'Public Relation (PR)', NULL, 4),
(42, 'C209', 'Analisa dan Riset Pasar', NULL, 4),
(43, 'C210', 'Perencanaan Pemasaran', NULL, 4),
(44, 'C211', 'Pengelolaan Usaha Pemasaran', NULL, 4),
(45, 'C212', 'Strategi Pemasaran', NULL, 4),
(46, 'C213', 'Pemasaran On-line', NULL, 4),
(47, 'C214', 'Sanitasi, Hygiene dan Keselamatan Kerja Bidang Makanan', NULL, 4),
(48, 'C215', 'Pengetahuan Bahan Makanan', NULL, 4),
(49, 'C216', 'Boga Dasar', NULL, 4),
(50, 'C217', 'Ilmu Gizi', NULL, 4),
(51, 'C218', 'Etika Profesi', NULL, 4),
(52, 'C219', 'Dasar-dasar Perbankan', NULL, 4),
(53, 'C220', 'Aplikasi Pengolah Angka/Spreadsheet', NULL, 4),
(54, 'C221', 'Akuntansi Perusahaan Jasa', NULL, 4),
(55, 'C222', 'Sanitasi, Hygiene, dan Keselamatan Kerja', NULL, 4),
(56, 'C223', 'Public Relation', NULL, 4),
(57, 'C224', 'Otomatisasi Perkantoran', NULL, 4),
(58, 'C225', 'Korespondensi', NULL, 4),
(59, 'C226', 'Kearsipan', NULL, 4),
(60, 'C301', 'Desain Multimedia', NULL, 5),
(61, 'C302', 'Teknik Animasi 2 Dimensi', NULL, 5),
(62, 'C303', 'Teknik Animasi 3 Dimensi', NULL, 5),
(63, 'C304', 'Pengolahan Citra Digital', NULL, 5),
(64, 'C305', 'Komposisi Foto Digital', NULL, 5),
(65, 'C306', 'Teknik Pengambilan Gambar Bergerak', NULL, 5),
(66, 'C307', 'Teknik Pengolahan Audio', NULL, 5),
(67, 'C308', 'Teknik Pengolahan Video', NULL, 5),
(68, 'C309', 'Desain Multimedia Interaktif', NULL, 5),
(69, 'C310', 'Kerja Proyek Multimedia', NULL, 5),
(70, 'C311', 'Prinsip-Prinsip Bisnis', NULL, 5),
(71, 'C312', 'Pengetahuan Produk', NULL, 5),
(72, 'C313', 'Penataan Barang Dagangan', NULL, 5),
(73, 'C314', 'Komunikasi Bisnis', NULL, 5),
(74, 'C315', 'Pengenalan Komputer', NULL, 1),
(75, 'C316', 'Administrasi Transaksi', NULL, 5),
(76, 'C317', 'Pelayanan Penjualan', NULL, 5),
(77, 'C318', 'Tata Hidang', NULL, 5),
(78, 'C319', 'Pengolahan dan Penyajian Makanan Indonesia', NULL, 5),
(79, 'C320', 'Pengolahan dan Penyajian Makanan Kontinental', NULL, 5),
(80, 'C321', 'Hidangan Kesempatan Khusus dan Fusion Food', NULL, 5),
(81, 'C322', 'Pengelolaan Usaha Boga', NULL, 5),
(82, 'C323', 'Akuntansi Perusahaan Dagang', NULL, 5),
(83, 'C324', 'Akuntansi Keuangan', NULL, 5),
(84, 'C325', 'Akuntansi Perusahaan Manufaktur', NULL, 5),
(85, 'C326', 'Komputer Akuntansi', NULL, 5),
(86, 'C327', 'Administrasi Pajak', NULL, 5),
(87, 'C328', 'Pemesanan Tempat', NULL, 5),
(88, 'C329', 'Menghitung Tarif dan Dokumen Pasasi', NULL, 5),
(89, 'C330', 'Perencanaan dan Pengelolaan Perjalanan Wisata', NULL, 5),
(90, 'C331', 'Pemanduan Perjalanan Wisata', NULL, 5),
(91, 'C332', 'Pengelolaan Meeting, Incentive, Conference, dan Exhibition (MICE)', NULL, 5),
(92, 'C333', 'Front Office ', NULL, 5),
(93, 'C334', 'Tata Graha', NULL, 5),
(94, 'C335', 'Binatu', NULL, 5),
(95, 'C336', 'Administrasi Kepegawaian', NULL, 5),
(96, 'C337', 'Administrasi Keuangan', NULL, 5),
(97, 'C338', 'Administrasi Sarana dan Prasarana', NULL, 5),
(98, 'C339', 'Administrasi Humas dan Keprotokolan', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `materiajar`
--

DROP TABLE IF EXISTS `materiajar`;
CREATE TABLE `materiajar` (
  `id_materi` int(11) NOT NULL,
  `title_materiajar` varchar(100) NOT NULL DEFAULT '',
  `note_materiajar` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `materiajar`
--

TRUNCATE TABLE `materiajar`;
--
-- Dumping data for table `materiajar`
--

INSERT INTO `materiajar` (`id_materi`, `title_materiajar`, `note_materiajar`) VALUES
(5, 'Messi Cetak Gol Cantik, Barca Bungkam Sevilla', 'Barca membuka keunggulan pada menit 19. Tendangan bebas Xavi meluncur dengan indah ke gawang Sevilla yang dikawal Andres Palop.\nLionel Messi menggandakan keunggulan Barca pada menit 25. Dengan jenius,'),
(6, 'Messi Bangga Dipuji Rooney Setinggi Langit', 'Messi tampil memukau saat Barca menghancurkan Bayer Leverkusen 7-1, awal bulan ini. Messi mencetak lima gol sekaligus di laga tersebut. Melalui akun twitter-nya, Rooney memuji Messi sebagai pemain ter');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL DEFAULT '',
  `lastname` varchar(20) NOT NULL DEFAULT '',
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `member`
--

TRUNCATE TABLE `member`;
--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `username`, `password`, `email`) VALUES
(1, 'firstname', 'lastname', 'username', 'password', 'email'),
(2, 'cristiano', 'on', 'ondoel', 'cda2c99fbf5e19f20d33', 'cristiano_ondoel@yah'),
(3, 'ondoel', 'ondoel', 'ondoel', '12b0bf7879467888a92a', 'cristiano_ondoel@yah'),
(4, 'cristiano', 'ondoel', 'ondoel', '202cb962ac59075b964b', 'cristiano_ondoel@yah'),
(5, 'ondoel', 'crot', 'ondoel', '202cb962ac59075b964b', 'cristiano_ondoel@yah');

-- --------------------------------------------------------

--
-- Table structure for table `ngajar`
--

DROP TABLE IF EXISTS `ngajar`;
CREATE TABLE `ngajar` (
  `id` int(11) NOT NULL,
  `ke` int(11) DEFAULT '0',
  `idjadwal` int(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jammulai` varchar(20) DEFAULT NULL,
  `jamselesai` varchar(20) DEFAULT NULL,
  `idguru` int(11) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `materi` varchar(200) DEFAULT NULL,
  `tahunid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `ngajar`
--

TRUNCATE TABLE `ngajar`;
--
-- Dumping data for table `ngajar`
--

INSERT INTO `ngajar` (`id`, `ke`, `idjadwal`, `tgl`, `jammulai`, `jamselesai`, `idguru`, `ket`, `materi`, `tahunid`) VALUES
(41, 1, 3, '2016-08-16', '08:00', '10:00', 10, NULL, 'asdas', 1),
(42, 2, 3, '2016-08-17', '08:00', '10:00', 10, NULL, 'asda', 1),
(43, 4, 4, '2016-08-03', '08:00', '10:00', 10, NULL, 'xxxxx', 1),
(44, 2, 4, '2016-08-19', '08:00', '10:00', 10, NULL, 'asdsa', 1),
(45, 3, 4, '2016-08-06', '08:00', '10:00', 10, NULL, 'asdas', 1),
(46, 3, 3, '2016-08-09', '08:00', '10:00', 10, NULL, 'sdada', 1),
(47, 4, 3, '2016-08-11', '08:00', '10:00', 10, NULL, '', 1),
(48, 5, 3, '2016-08-01', '08:00', '10:00', 10, NULL, 'ujian harian', 1),
(49, 1, 5, '2016-08-01', '08:00', '10:00', 10, NULL, 'sadas', 1),
(50, 2, 5, '2016-08-02', '08:00', '10:00', 10, NULL, '-', 1),
(51, 1, 8, '2016-08-01', '13:00', '15:00', 117, NULL, 'Materi 1111', 1),
(52, 1, 6, '2016-08-31', '08.00', '10.00', 10, NULL, 'sssss', 1),
(53, 1, 15, '2016-09-18', '08.00', '10.00', 119, NULL, '', 1),
(54, 2, 15, '2016-09-20', '08.00', '10.00', 119, NULL, '', 1),
(55, 1, 7, '2016-10-01', '10:00', '12:00', 120, NULL, '', 1),
(56, 2, 6, '2016-10-20', '08.00', '10.00', 10, NULL, '', 1),
(57, 1, 14, '2016-10-31', '13:00', '15:00', 10, NULL, '', 1),
(58, 3, 6, '2016-08-31', '08.00', '10.00', 10, NULL, 'sadsad', NULL),
(59, 4, 6, '2016-08-31', '08.00', '10.00', 10, NULL, 'sssss', NULL),
(60, 5, 6, '2016-08-23', '08.00', '10.00', 10, NULL, 'AAAA', NULL),
(61, 6, 6, '2016-08-23', '08.00', '10.00', 10, NULL, 'AAAA', NULL),
(62, 2, 14, '2016-10-31', '13:00', '15:00', 10, NULL, '', NULL),
(63, 7, 6, '2016-10-01', '08.00', '10.00', 10, NULL, 'ASSSS', 1),
(64, 4, 14, '2016-10-31', '13:00', '15:00', 10, NULL, 'ggggg', 1),
(65, 1, 0, '2016-10-01', '13:00', '15:00', 119, NULL, 'aaa', NULL),
(66, 2, 0, '2016-10-01', '13:00', '15:00', 119, NULL, 'aaa', NULL),
(67, 3, 0, '2016-10-03', '08.00', '10.00', 119, NULL, '', NULL),
(68, 4, 0, '2016-10-05', '13:00', '15:00', 117, NULL, 'aaaa', NULL),
(69, 5, 0, '2016-10-05', '10:00', '12:00', 120, NULL, 'aaaa', NULL),
(70, 6, 0, '2016-10-19', '13:00', '15:00', 117, NULL, 'sss', NULL),
(71, 7, 0, '2016-10-19', '13:00', '15:00', 117, NULL, 'wwwwww', NULL),
(72, 2, 8, '2016-10-02', '13:00', '15:00', 117, NULL, 'qqqqq', 1),
(73, 1, 16, '2016-10-05', '10:00', '12:00', 126, NULL, '', NULL),
(74, 1, 17, '2016-10-05', '13:00', '15:00', 127, NULL, '', NULL),
(75, 1, 18, '2016-10-05', '08.00', '10.00', 133, NULL, '', NULL),
(76, 1, 13, '2016-10-03', '10:00', '12:00', 120, NULL, '', NULL),
(77, 2, 18, '2016-10-06', '08.00', '10.00', 133, NULL, '', NULL),
(78, 1, 12, '2016-10-03', '08.00', '10.00', 117, NULL, '', NULL),
(79, 2, 12, '2016-10-02', '08.00', '10.00', 117, NULL, '', NULL),
(80, 3, 18, '2016-10-05', '08.00', '10.00', 133, NULL, '', NULL),
(81, 2, 16, '2016-10-05', '10:00', '12:00', 126, NULL, '', NULL),
(82, 2, 17, '2016-10-10', '13:00', '15:00', 127, NULL, '', NULL),
(83, 3, 8, '2016-10-10', '13:00', '15:00', 117, NULL, '', NULL),
(84, 3, 5, '2016-10-10', '08:00', '10:00', 117, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilaikb`
--

DROP TABLE IF EXISTS `nilaikb`;
CREATE TABLE `nilaikb` (
  `id` int(11) NOT NULL,
  `mapelid` int(11) DEFAULT NULL,
  `tahunid` int(11) DEFAULT NULL,
  `nilaikb` int(11) DEFAULT '0',
  `nilaikbk` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `nilaikb`
--

TRUNCATE TABLE `nilaikb`;
--
-- Dumping data for table `nilaikb`
--

INSERT INTO `nilaikb` (`id`, `mapelid`, `tahunid`, `nilaikb`, `nilaikbk`) VALUES
(701, 16, 1, 70, 11),
(702, 17, 1, 65, 22),
(703, 18, 1, 65, 0),
(704, 19, 1, 65, 0),
(705, 20, 1, 65, 0),
(706, 21, 1, 6, 0),
(707, 22, 1, 75, 44),
(708, 23, 1, 80, 0),
(709, 24, 1, 0, 0),
(710, 25, 1, 70, 0),
(711, 26, 1, 70, 60),
(712, 27, 1, 80, 60),
(713, 28, 1, 75, 0),
(714, 29, 1, 0, 0),
(715, 30, 1, 0, 0),
(716, 31, 1, 0, 0),
(717, 32, 1, 0, 0),
(718, 33, 1, 0, 0),
(719, 34, 1, 70, 0),
(720, 35, 1, 75, 0),
(721, 36, 1, 80, 0),
(722, 37, 1, 70, 0),
(723, 38, 1, 60, 0),
(724, 39, 1, 0, 0),
(725, 40, 1, 0, 0),
(726, 41, 1, 0, 0),
(727, 42, 1, 0, 0),
(728, 43, 1, 0, 0),
(729, 44, 1, 0, 0),
(730, 45, 1, 0, 0),
(731, 46, 1, 0, 0),
(732, 47, 1, 0, 0),
(733, 48, 1, 0, 0),
(734, 49, 1, 0, 0),
(735, 50, 1, 0, 0),
(736, 51, 1, 0, 0),
(737, 52, 1, 0, 0),
(738, 53, 1, 0, 0),
(739, 54, 1, 0, 0),
(740, 55, 1, 0, 0),
(741, 56, 1, 0, 0),
(742, 57, 1, 0, 0),
(743, 58, 1, 0, 0),
(744, 59, 1, 0, 0),
(745, 60, 1, 0, 0),
(746, 61, 1, 0, 0),
(747, 62, 1, 0, 0),
(748, 63, 1, 75, 0),
(749, 64, 1, 0, 0),
(750, 65, 1, 0, 0),
(751, 66, 1, 0, 0),
(752, 67, 1, 0, 0),
(753, 68, 1, 0, 0),
(754, 69, 1, 0, 0),
(755, 70, 1, 0, 0),
(756, 71, 1, 0, 0),
(757, 72, 1, 0, 0),
(758, 73, 1, 0, 0),
(759, 74, 1, 75, 0),
(760, 75, 1, 0, 0),
(761, 76, 1, 0, 0),
(762, 77, 1, 0, 0),
(763, 78, 1, 0, 0),
(764, 79, 1, 0, 0),
(765, 80, 1, 0, 0),
(766, 81, 1, 0, 0),
(767, 82, 1, 0, 0),
(768, 83, 1, 0, 0),
(769, 84, 1, 0, 0),
(770, 85, 1, 0, 0),
(771, 86, 1, 0, 0),
(772, 87, 1, 0, 0),
(773, 88, 1, 0, 0),
(774, 89, 1, 0, 0),
(775, 90, 1, 0, 0),
(776, 91, 1, 0, 0),
(777, 92, 1, 0, 0),
(778, 93, 1, 0, 0),
(779, 94, 1, 0, 0),
(780, 95, 1, 0, 0),
(781, 96, 1, 0, 0),
(782, 97, 1, 0, 0),
(783, 98, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nilaisiswa`
--

DROP TABLE IF EXISTS `nilaisiswa`;
CREATE TABLE `nilaisiswa` (
  `id` int(11) NOT NULL,
  `idmapel` int(11) NOT NULL DEFAULT '0',
  `idsiswa` int(11) NOT NULL,
  `idkelas` int(11) DEFAULT '0',
  `idguru` int(11) DEFAULT '0',
  `angkap` double(15,2) DEFAULT '0.00',
  `angkak` double(15,2) DEFAULT '0.00',
  `angkas` int(1) DEFAULT '0',
  `desp` text,
  `desk` text,
  `dess` text,
  `tahunid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `nilaisiswa`
--

TRUNCATE TABLE `nilaisiswa`;
--
-- Dumping data for table `nilaisiswa`
--

INSERT INTO `nilaisiswa` (`id`, `idmapel`, `idsiswa`, `idkelas`, `idguru`, `angkap`, `angkak`, `angkas`, `desp`, `desk`, `dess`, `tahunid`) VALUES
(1, 35, 956, 22, 31, 90.00, 90.00, 1, '', '', '', 2),
(2, 74, 585, 13, 10, 50.00, 40.00, 4, 'Kurang membaca', 'Jarang masuk Praktikum', 'Suka berkelahi dan bicara kasar', 1),
(4, 36, 567, 22, 120, 70.00, 90.00, 1, 'Kurang membaca', 'Lebih menyukai Praktek', 'Sikap siswa sangat baik, sopan', 1),
(5, 74, 567, 21, 117, 70.00, 90.00, 1, 'Kurang Membaca', 'Lebih Menyukai Praktek', '', 1),
(6, 74, 958, 22, 117, 50.00, 50.00, 4, 'Malas membaca', 'Sering tidak masuk saat praktek', 'sering berkata kasar dan tidak menghargai guru', 1),
(7, 23, 1030, 23, 0, 80.00, 80.00, 80, 'Baik', 'Baik', 'Baik', 1),
(8, 63, 1030, 23, 0, 50.00, 50.00, 80, 'Kurang membaca', 'Kurang Praktek', 'Baik', 1),
(9, 34, 1030, 23, 0, 90.00, 90.00, 90, 'Baik', 'Baik', 'Baik', 1),
(10, 36, 1030, 23, 0, 75.00, 90.00, 90, 'Kurang membaca', 'Baik', 'Baik', 1),
(11, 26, 1030, 23, 0, 50.00, 50.00, 80, 'Kurang membaca', 'Kurang Praktek', 'Baik', 1),
(12, 16, 1030, 23, 0, 75.00, 75.00, 80, 'Cukup', 'Cukup', 'Baik', 1),
(13, 19, 1030, 23, 0, 80.00, 80.00, 80, 'Baik', 'Baik', 'Baik', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pddk`
--

DROP TABLE IF EXISTS `pddk`;
CREATE TABLE `pddk` (
  `pddkid` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ordering` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `pddk`
--

TRUNCATE TABLE `pddk`;
--
-- Dumping data for table `pddk`
--

INSERT INTO `pddk` (`pddkid`, `nama`, `ordering`) VALUES
(1, 'SD', 1),
(2, 'SMP', 2),
(3, 'SMA', 3),
(4, 'D3', 4),
(5, 'S1', 5),
(6, 'S2', 6),
(7, 'S3', 7);

-- --------------------------------------------------------

--
-- Table structure for table `poce`
--

DROP TABLE IF EXISTS `poce`;
CREATE TABLE `poce` (
  `id` int(11) NOT NULL,
  `awal1` int(11) DEFAULT NULL,
  `akir1` int(11) DEFAULT NULL,
  `awal2` int(11) DEFAULT NULL,
  `akir2` int(11) DEFAULT NULL,
  `awal3` int(11) DEFAULT NULL,
  `akir3` int(11) DEFAULT NULL,
  `pot1` double(15,2) DEFAULT NULL,
  `pot2` double(15,2) DEFAULT NULL,
  `pot3` double(15,2) DEFAULT NULL,
  `pot4` double(15,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `poce`
--

TRUNCATE TABLE `poce`;
--
-- Dumping data for table `poce`
--

INSERT INTO `poce` (`id`, `awal1`, `akir1`, `awal2`, `akir2`, `awal3`, `akir3`, `pot1`, `pot2`, `pot3`, `pot4`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `potr`
--

DROP TABLE IF EXISTS `potr`;
CREATE TABLE `potr` (
  `id` int(11) NOT NULL,
  `awal1` int(11) DEFAULT NULL,
  `akir1` int(11) DEFAULT NULL,
  `awal2` int(11) DEFAULT NULL,
  `akir2` int(11) DEFAULT NULL,
  `awal3` int(11) DEFAULT NULL,
  `akir3` int(11) DEFAULT NULL,
  `pot1` double(15,2) DEFAULT NULL,
  `pot2` double(15,2) DEFAULT NULL,
  `pot3` double(15,2) DEFAULT NULL,
  `pot4` double(15,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `potr`
--

TRUNCATE TABLE `potr`;
--
-- Dumping data for table `potr`
--

INSERT INTO `potr` (`id`, `awal1`, `akir1`, `awal2`, `akir2`, `awal3`, `akir3`, `pot1`, `pot2`, `pot3`, `pot4`) VALUES
(1, 0, 300, 301, 600, 601, 900, 5000.00, 100000.00, 15000.00, 20000.00);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

DROP TABLE IF EXISTS `prestasi`;
CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `jenis` varchar(200) NOT NULL DEFAULT '',
  `tingkat` varchar(50) NOT NULL DEFAULT '',
  `pelaksana` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `prestasi`
--

TRUNCATE TABLE `prestasi`;
--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `jenis`, `tingkat`, `pelaksana`) VALUES
(4, 'lomba karya ilmiah', 'nasional', 'depdiknas'),
(5, 'lomba makan', 'kabupaten', 'depdiknas'),
(6, 'lomba cerdas cermat', 'propinsi', 'depdiknas'),
(7, 'lomba cerdas cermat', 'propinsi', 'depdiknas'),
(8, 'lomba cerdas cermat', 'propinsi', 'depdiknas'),
(9, 'lomba cerdas cermat', 'propinsi', 'depdiknas'),
(10, 'lomba cerdas cermat', 'propinsi', 'depdiknas'),
(11, 'lomba cerdas cermat', 'propinsi', 'depdiknas');

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

DROP TABLE IF EXISTS `rangking`;
CREATE TABLE `rangking` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT ' ',
  `nama` varchar(255) DEFAULT NULL,
  `ordering` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `rangking`
--

TRUNCATE TABLE `rangking`;
--
-- Dumping data for table `rangking`
--

INSERT INTO `rangking` (`id`, `kode`, `nama`, `ordering`) VALUES
(1, 'SB', 'Sangat Baik', NULL),
(2, 'Baik', 'Baik', NULL),
(3, 'C', 'Cukup', NULL),
(4, 'K', 'Kurang', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

DROP TABLE IF EXISTS `ruang`;
CREATE TABLE `ruang` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ordering` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `ruang`
--

TRUNCATE TABLE `ruang`;
--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id`, `kode`, `nama`, `ordering`) VALUES
(7, '03', '1 RPL 1', NULL),
(8, '02', '1 TKJ 2', NULL),
(9, '01', '1 TKJ 1', NULL),
(10, '04', 'Labor Bahasa', NULL),
(11, '05', 'Labor Biologi', NULL),
(12, '06', '1 TKJ 3', NULL),
(20, '07', '1 RPL 2', NULL),
(21, '08', '1 RPL 3', NULL),
(22, '09', '1 MM 1', NULL),
(23, '10', '1 MM 2', NULL),
(24, '11', '1 MM 3', NULL),
(25, '12', '1 BC 1', NULL),
(26, '13', 'Lab ICT', NULL),
(27, '14', 'Lab Perakitan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `saker`
--

DROP TABLE IF EXISTS `saker`;
CREATE TABLE `saker` (
  `idsaker` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `saker`
--

TRUNCATE TABLE `saker`;
--
-- Dumping data for table `saker`
--

INSERT INTO `saker` (`idsaker`, `nama`) VALUES
(1, 'Aktif'),
(2, 'Tugas Belajar'),
(3, 'Izin Belajar'),
(4, 'Cuti Melahirkan'),
(5, 'Cuti Tahunan'),
(6, '-');

-- --------------------------------------------------------

--
-- Table structure for table `sauka`
--

DROP TABLE IF EXISTS `sauka`;
CREATE TABLE `sauka` (
  `saukaid` int(11) DEFAULT NULL,
  `jml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `sauka`
--

TRUNCATE TABLE `sauka`;
--
-- Dumping data for table `sauka`
--

INSERT INTO `sauka` (`saukaid`, `jml`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `sauti`
--

DROP TABLE IF EXISTS `sauti`;
CREATE TABLE `sauti` (
  `sautiid` int(11) DEFAULT NULL,
  `jml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `sauti`
--

TRUNCATE TABLE `sauti`;
--
-- Dumping data for table `sauti`
--

INSERT INTO `sauti` (`sautiid`, `jml`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `seko`
--

DROP TABLE IF EXISTS `seko`;
CREATE TABLE `seko` (
  `id` int(11) DEFAULT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kepsek` varchar(30) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `web` varchar(40) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `npsn` varchar(40) DEFAULT NULL,
  `kodepos` varchar(10) DEFAULT NULL,
  `kel` varchar(200) DEFAULT NULL,
  `kec` varchar(200) DEFAULT NULL,
  `prop` varchar(200) DEFAULT NULL,
  `kota` varchar(200) DEFAULT NULL,
  `nds` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `seko`
--

TRUNCATE TABLE `seko`;
--
-- Dumping data for table `seko`
--

INSERT INTO `seko` (`id`, `kode`, `nama`, `alamat`, `kepsek`, `telp`, `email`, `web`, `ket`, `nip`, `npsn`, `kodepos`, `kel`, `kec`, `prop`, `kota`, `nds`) VALUES
(1, 'SMKN 2', 'Sekolah Menengah Kejuruan Negeri 2  Padang Panjang ', 'Jln. Syekh Ibrahim Musa No. 26 RT VI', 'Drs. Suherman', '0752485794 / 0752840', 'smkn2papa@gmail.com', 'www.smkn2padangpanjang.sch.id', '0', '196604101990031007', '10303606', '27127 ', 'Ganting', 'Padang Panjang Timur', 'Sumatera Barat', 'Padang Panjang', '321086201005');

-- --------------------------------------------------------

--
-- Table structure for table `silabus`
--

DROP TABLE IF EXISTS `silabus`;
CREATE TABLE `silabus` (
  `id_silabus` int(11) NOT NULL,
  `note_silabus` varchar(300) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `silabus`
--

TRUNCATE TABLE `silabus`;
--
-- Dumping data for table `silabus`
--

INSERT INTO `silabus` (`id_silabus`, `note_silabus`) VALUES
(23, 'silabus kurikulum tingkat satuan pendidikan teknologi informasi'),
(24, 'silabus kurikulum tingkat satuan pendidikan teknologi informasi'),
(25, 'silabus kurikulum tingkat satuan pendidikan sejarah'),
(26, 'silabus kurikulum tingkat satuan pendidikan olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nopendaftaran` varchar(20) DEFAULT NULL,
  `noinduk` varchar(20) DEFAULT ' ',
  `nis` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT ' ',
  `nama` varchar(50) DEFAULT NULL,
  `napa` varchar(20) DEFAULT NULL,
  `jeka` int(11) DEFAULT NULL,
  `tltgll` varchar(100) DEFAULT NULL,
  `akeid` int(11) DEFAULT NULL,
  `saukaid` int(11) DEFAULT NULL,
  `sautiid` int(11) DEFAULT NULL,
  `sta` int(11) DEFAULT NULL,
  `bahasa` varchar(40) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT ' ',
  `nohp` varchar(20) DEFAULT NULL,
  `tiberid` int(11) DEFAULT NULL,
  `jarakid` varchar(2) DEFAULT NULL,
  `goldar` char(20) DEFAULT NULL,
  `sakit` varchar(50) DEFAULT NULL,
  `kelainan` varchar(100) DEFAULT NULL,
  `tirat` varchar(20) DEFAULT NULL,
  `sekasal` varchar(100) DEFAULT NULL,
  `alsek` varchar(250) DEFAULT NULL,
  `tglnoijazah` varchar(70) DEFAULT NULL,
  `nil41` double(15,2) DEFAULT '0.00',
  `nil42` double(15,2) DEFAULT '0.00',
  `nil51` double(15,2) DEFAULT '0.00',
  `nil52` double(15,2) DEFAULT '0.00',
  `nil61` double(15,2) DEFAULT '0.00',
  `lamabelajar` varchar(20) DEFAULT NULL,
  `nisn` char(20) DEFAULT NULL,
  `hobi` varchar(50) DEFAULT NULL,
  `namaayah` varchar(60) DEFAULT NULL,
  `tltgllayah` varchar(100) DEFAULT NULL,
  `pddkayah` int(11) DEFAULT NULL,
  `kerjaayah` int(11) DEFAULT NULL,
  `isilainayah` varchar(100) DEFAULT NULL,
  `hasilayah` double(15,2) DEFAULT NULL,
  `alamatayah` varchar(250) DEFAULT NULL,
  `nohpayah` varchar(20) DEFAULT NULL,
  `statusayah` int(11) DEFAULT NULL,
  `namaibu` varchar(50) DEFAULT NULL,
  `tltgllibu` varchar(100) DEFAULT NULL,
  `pddkibu` int(11) DEFAULT NULL,
  `kerjaibu` int(11) DEFAULT '0',
  `isilainibu` varchar(100) DEFAULT NULL,
  `hasilibu` int(11) DEFAULT NULL,
  `alamatibu` varchar(250) DEFAULT NULL,
  `nohpibu` varchar(20) DEFAULT NULL,
  `namawali` varchar(50) DEFAULT NULL,
  `tltgllwali` varchar(100) DEFAULT NULL,
  `pddkwali` int(11) DEFAULT NULL,
  `kerjawali` varchar(20) DEFAULT NULL,
  `isilainwali` varchar(50) DEFAULT NULL,
  `hasilwali` varchar(20) DEFAULT NULL,
  `alamatwali` varchar(250) DEFAULT NULL,
  `nohpwali` varchar(20) DEFAULT NULL,
  `agamaid` int(2) NOT NULL DEFAULT '0',
  `kelasterima` varchar(10) DEFAULT NULL,
  `tglterim` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `siswa`
--

TRUNCATE TABLE `siswa`;
--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nopendaftaran`, `noinduk`, `nis`, `password`, `nama`, `napa`, `jeka`, `tltgll`, `akeid`, `saukaid`, `sautiid`, `sta`, `bahasa`, `alamat`, `nohp`, `tiberid`, `jarakid`, `goldar`, `sakit`, `kelainan`, `tirat`, `sekasal`, `alsek`, `tglnoijazah`, `nil41`, `nil42`, `nil51`, `nil52`, `nil61`, `lamabelajar`, `nisn`, `hobi`, `namaayah`, `tltgllayah`, `pddkayah`, `kerjaayah`, `isilainayah`, `hasilayah`, `alamatayah`, `nohpayah`, `statusayah`, `namaibu`, `tltgllibu`, `pddkibu`, `kerjaibu`, `isilainibu`, `hasilibu`, `alamatibu`, `nohpibu`, `namawali`, `tltgllwali`, `pddkwali`, `kerjawali`, `isilainwali`, `hasilwali`, `alamatwali`, `nohpwali`, `agamaid`, `kelasterima`, `tglterim`) VALUES
(530, '946', '9076', '9978751508', 'er6g22', 'Rizka Alvina', '', 0, '', 0, 0, 0, 0, '', 'Kampung Panas', '', 0, '', '', '', '0', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, '', '', '', '', '', 0, 0, '', 0.00, '', '', 0, '', '', 0, 0, '', 0, '', '', '', '', 0, '', '', '0', '', '', 4, NULL, NULL),
(531, '947', '9077', '9978046151', 'er6g22', 'Rizky Alvina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Panas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(532, '948', '9078', '9985056323', 'er6g22', 'Silvia Afriani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. H. Samanhudi, Sungai Pasak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(533, '945', '9075', '9989270858', 'er6g22', 'Ridwan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jalan Baru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(534, '941', '9071', '9989702843', 'er6g22', 'Rahmadhan Nanda Perdana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Koto Padang Alahan Tabek', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(535, '942', '9072', '9983604808', 'er6g22', 'Raymon Joyusman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bari Tangah Sicincin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(536, '943', '9073', '9976298840', 'er6g22', 'Rezi Desma Yenti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pariaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(537, '944', '9074', '9971481200', 'er6g22', 'Rido Ilahi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Punggung Lading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(538, '937', '9067', '9975385484', 'er6g22', 'Nispu Sya\'Aban. M', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Bagindo Aziz Chan No. 104 B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(539, '938', '9068', '9989097145', 'er6g22', 'Novia Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Tarok Cub. Mentawai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(540, '940', '9070', '9976921584', 'er6g22', 'Nurul Fadhilah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Rahmah Eli No. 02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(541, '939', '9069', '9985814612', 'er6g22', 'Nur Syahida', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Baru Padusunan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(542, '934', '9048', '9972138277', 'er6g22', 'Yulia Eka Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dusun Geringging', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(543, '935', '9063', '9974710758', 'er6g22', 'Lisa Zahara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bukit Bunian Lubuk Aro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(544, '936', '9065', '9975154788', 'er6g22', 'Miya Pertiwi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl Siti Baheram, Sungai Pasak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(545, '931', '9045', '9989318083', 'er6g22', 'Uci Aguska', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Durian Ambalau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(546, '932', '9046', '9998063385', 'er6g22', 'Wenda Melia Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Durian Lilin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(547, '933', '9047', '9986233973', 'er6g22', 'Yuli Sartika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paguah Dalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(548, '928', '9041', '9987482980', 'er6g22', 'Shintia Marlina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Tanjung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(549, '930', '9044', '9986050716', 'er6g22', 'Tiara Utari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ladang Laweh Sicincin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(550, '929', '9042', '9988575374', 'er6g22', 'Silvia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dusun 1 Jorong Kubu Anau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(551, '925', '9038', '9983603087', 'er6g22', 'Reni Julia Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Gelapung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(552, '926', '9039', '9988008465', 'er6g22', 'Rini Kartika Intan Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Sikilir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(553, '927', '9040', '9983336083', 'er6g22', 'Romi Marthin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Sikabu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(554, '923', '9060', '9974229105', 'er6g22', 'Fitri Depi Yanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ampalu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(555, '924', '9061', '9986369574', 'er6g22', 'Govi Yani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Simpang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(556, '921', '9058', '9973937910', 'er6g22', 'Firdayanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Padang Kalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(557, '922', '9059', '9969284439', 'er6g22', 'Firman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Olo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(558, '920', '9057', '9975337732', 'er6g22', 'Elvi Silviana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Binasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(559, '919', '9056', '9984797248', 'er6g22', 'Elsa Mutia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Surau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(560, '918', '9055', '9975236811', 'er6g22', 'Dina Wahyuni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marunggi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(561, '916', '9053', '9985037806', 'er6g22', 'Atika Yasri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lapai Cimparuh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(562, '917', '9054', '9975602513', 'er6g22', 'Dea Nanda Riskana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Air Santok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(563, '913', '9050', '9985114698', 'er6g22', 'Amelia Safitri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Sirah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(564, '914', '9051', '9987142664', 'er6g22', 'Annisa Fitri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kapuh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(565, '915', '9052', '9972628213', 'er6g22', 'Arridha Rahmatika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Syamratulangi Barat No. 29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(566, '911', '9037', '9984034961', 'er6g22', 'Rechi Aftrilia Jayanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Malai Tangah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(567, '912', '9049', '9975489810', 'er6g22', 'Abet Shania Naveli', 'nama panggilan', 1, 'tmplahir', 3, 3, 3, 1, 'bahas sehari hari', 'Kabun Kopi Pasar Lubuki Alung', 'no hp', 1, '3', 'A', 'sakit', '0', '90', 'asal sekolah', 'alamat sekolah', 'tgl ijza', 1.00, 4.00, 2.00, 5.00, 3.00, '5', '5', 'hobi', 'nama ayah', 'tempat lahir ayah', 1, 1, 'lainnya', 1.00, 'alamat ayah', 'no hp ayah', 0, 'nama ibu kandung', 'temp lahir ibu kandung', 0, 1, 'lainnya', 1, 'alamat ibu', 'telp ibu', 'nama wali', 'tempat lahir wali', 2, '2', 'lainny', '1', 'alamat wali', 'nohpwali', 4, '1', '02-02-2016'),
(568, '910', '9036', '9981845547', 'er6g22', 'Putri Diana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Bayur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(569, '909', '9035', '9979808413', 'er6g22', 'Osy Irfani Nazli', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Pulau Air', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(570, '907', '9033', '9975337175', 'er6g22', 'Nuraini Binti Marzuki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ampalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(571, '908', '9034', '9986994884', 'er6g22', 'Nurhayati Alam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp.Bendang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(572, '904', '9030', '9999021450', 'er6g22', 'Mela Ramadhani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Parupuk Jaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(573, '905', '9032', '9979926456', 'er6g22', 'Meri Putri Andani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Palabah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(574, '906', '9031', '9986700475', 'er6g22', 'Mery Malinda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Syam Ratulangi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(575, '903', '9026', '9976229566', 'er6g22', 'Maysa Harnika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Limau Hantu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(576, '902', '9029', '9986623993', 'er6g22', 'Livia Rosmita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sakayan Paku Asam Pulau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(577, '901', '9028', '9985053738', 'er6g22', 'Irmayanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kabun Cimpago', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(578, '900', '9027', '9986238505', 'er6g22', 'Indah Lylla Nuril', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Laban', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(579, '898', '9024', '9980206841', 'er6g22', 'Fadli Wahyudi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dusun Sampan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(580, '899', '9025', '9989141460', 'er6g22', 'Febri Diana Mardalena', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bukit Calik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(581, '896', '9022', '9986511113', 'er6g22', 'Elsa Pramita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ambung Kapur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(582, '897', '9023', '9985237071', 'er6g22', 'Fadilla Mesra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Palak Aneh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(583, '895', '9020', '9970835333', 'er6g22', 'Divia Amanda Eka Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. H. Agus Salim Timur No. 2A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(584, '894', '9019', '9975213994', 'er6g22', 'Desi Yusniarti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Samratulangi No. 26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(585, '893', '9018', '9975435381', 'er6g22', 'Desi Renasari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bukit Sabagai Sungai Pingai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(586, '892', '9017', '9985236734', 'er6g22', 'Dara Roza Pratiwi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Palabah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(587, '890', '9014', '9986198625', 'er6g22', 'Amelia Eka Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Kabun Mudiak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(588, '891', '9016', '9986132768', 'er6g22', 'Asifa Febriani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Manggopoh Dalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(589, '889', '9013', '9987083275', 'er6g22', 'Agnesis Yovani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.St.Nasaruddin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(590, '888', '9011', '9985114690', 'er6g22', 'Suci Ramadhani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. M. Yamin No.08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(591, '886', '8969', '9986997318', 'er6g22', 'Siska Sepriani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Limpato', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(592, '887', '9010', '9985370133', 'er6g22', 'Sonia Syam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Batang Kabung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(593, '884', '9007', '9999345820', 'er6g22', 'Sari Wahyuni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Simpang Limun Lembak Pasang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(594, '885', '9008', '9985053593', 'er6g22', 'Selva Salviana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Talago Sarik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(595, '883', '9006', '9989854344', 'er6g22', 'Resti Rhamadani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Pandeka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(596, '882', '9005', '9986897633', 'er6g22', 'Resti Aprilya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sarang Gagak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(597, '881', '9003', '9976352673', 'er6g22', 'Rafika Octavia Ardila', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Durian Gadang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(598, '880', '9002', '9975984968', 'er6g22', 'Nurul Fadhilla', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Air Santok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(599, '879', '9000', '9986239436', 'er6g22', 'Nabillah Ilhami', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp.Ladang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(600, '878', '9001', '9985397054', 'er6g22', 'Nabila Zaura', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bukit Gongngang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(601, '877', '8998', '9989941352', 'er6g22', 'Muhammad Ikhbal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Rahmi Hatta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(602, '876', '8999', '9982537803', 'er6g22', 'Muhamad Fikri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Kayu Gadang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(603, '873', '8995', '9986861115', 'er6g22', 'Lucy Aulia Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln.Abdul Muis No. 48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(604, '874', '8996', '9980816284', 'er6g22', 'Lusiana Afridasari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Perum Kelapa Gading No.  Jalan Baru Pariaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(605, '871', '8993', '9985135942', 'er6g22', 'Laila Chania', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Taluk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(606, '872', '8994', '9985814736', 'er6g22', 'Liza Hanim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Taji-Taji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(607, '870', '8992', '9985814396', 'er6g22', 'Khadijah Dasman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl,M.Yamin No.17 A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(608, '868', '8990', '9973079675', 'er6g22', 'Indra Laksmana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Apar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(609, '869', '8991', '9985292376', 'er6g22', 'Intan Permata Harizal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tanjung Sabar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(610, '866', '8988', '9974555911', 'er6g22', 'Habibillah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pauh Tengah Sicicin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(611, '867', '8989', '9985854903', 'er6g22', 'Haris Sofiandi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kabun Podok Duo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(612, '865', '8987', '9985327203', 'er6g22', 'Fitriya Raudha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bungo Tanjung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(613, '864', '8986', '9986984937', 'er6g22', 'Fajri Rahman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Wr.Supratman No.78', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(614, '863', '8975', '9975337733', 'er6g22', 'Yulia Maya Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marunggi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(615, '862', '8974', '9801624269', 'er6g22', 'Vivi Musvita Yeni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cimparuh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(616, '861', '8973', '9985112064', 'er6g22', 'Vira Sagita Dewi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Ir. Jamaluddin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(617, '860', '8972', '9985814516', 'er6g22', 'Usna Oktaviyani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Rahman Ely Asrama Kodim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(618, '859', '8971', '9803718342', 'er6g22', 'Ulan Okta Novia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Puco Ruyuang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(619, '857', '9009', '9985539020', 'er6g22', 'Siska Adelia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pakasai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(620, '858', '8970', '9809448307', 'er6g22', 'Triya Fanny Yulanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Perum Mandiri Permai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(621, '855', '8967', '9976631997', 'er6g22', 'Rika Yulfinda Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Tangah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(622, '856', '8968', '9986897233', 'er6g22', 'Sandria Nuwirati Almi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Batang Gadang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(623, '854', '8965', '9985131762', 'er6g22', 'Rice Ayu Krismonica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Mayor Rasyid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(624, '852', '8963', '9985815286', 'er6g22', 'Rahmat Sukri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp.Pondok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(625, '853', '8964', '9985814735', 'er6g22', 'Rara Afrianti Gusra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Taji-Taji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(626, '851', '8962', '9975138115', 'er6g22', 'Rada Nofrianti Arza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marunggi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(627, '849', '8959', '9973960036', 'er6g22', 'Oktariani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Tangah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(628, '850', '8961', '9980415570', 'er6g22', 'Puspa Oktavianti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Tangah Cimparuh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(629, '848', '8985', '9986897881', 'er6g22', 'Ermellia Rahmadani E.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pariaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(630, '847', '8984', '9975141675', 'er6g22', 'Dini Huswati Yulim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Syamratulangi No. 30 A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(631, '846', '8983', '9986202555', 'er6g22', 'Dian Ravidiana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bungo Tanjung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(632, '845', '8982', '9977032495', 'er6g22', 'Desi Yarni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Puar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(633, '844', '8981', '9975104858', 'er6g22', 'Desi Maysari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Campago', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(634, '843', '8980', '9976753083', 'er6g22', 'Annisa Putri Septianti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Tangah Bisati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(635, '842', '8979', '9801247829', 'er6g22', 'Anisa Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Padang Ampalu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(636, '841', '8978', '9807146879', 'er6g22', 'Al Azri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dama Bintang Koto Bangko', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(637, '840', '8977', '9985568537', 'er6g22', 'Ainul Asri Hidayat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lima Hindu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(638, '838', '8939', '9976008791', 'er6g22', 'Zulhamidah Novriyana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ampalu Tinggi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(639, '839', '8976', '9975337742', 'er6g22', 'Agitri Yuni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marunggi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(640, '875', '8997', '9997149844', 'er6g22', 'Meri Alnur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Talogondan, Kurai Taji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(641, '837', '8937', '9977990763', 'er6g22', 'Yulia Rahma Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Apar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(642, '836', '8936', '9971742396', 'er6g22', 'Wilda Novita Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toko Duku, Bisati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(643, '835', '8935', '9986236231', 'er6g22', 'Veronika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Padang Alai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(644, '834', '8934', '9985333149', 'er6g22', 'Sukma Hayati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Tangah Batu Basa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(645, '833', '8932', '9976239331', 'er6g22', 'Sahida Lenny', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Manggopoh Dalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(646, '832', '8931', '9986897751', 'er6g22', 'Risa Afrianti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Guguk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(647, '831', '8958', '9988425876', 'er6g22', 'Nurul Aliffadh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ujung Batung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(648, '830', '8956', '9985058349', 'er6g22', 'Nisa Aulia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Karan Aur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(649, '829', '8955', '9992949380', 'er6g22', 'Naufal Feno Al Azmi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Padang Marapalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(650, '828', '8954', '9985495615', 'er6g22', 'Murti Sari Dewi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Tangah - Punggung Kasik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(651, '827', '8952', '9983953107', 'er6g22', 'Muhammad Rio Raisman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Padang Lariang Timur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(652, '826', '8950', '9973683544', 'er6g22', 'Lily Susanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasar Teleng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);
INSERT INTO `siswa` (`id`, `nopendaftaran`, `noinduk`, `nis`, `password`, `nama`, `napa`, `jeka`, `tltgll`, `akeid`, `saukaid`, `sautiid`, `sta`, `bahasa`, `alamat`, `nohp`, `tiberid`, `jarakid`, `goldar`, `sakit`, `kelainan`, `tirat`, `sekasal`, `alsek`, `tglnoijazah`, `nil41`, `nil42`, `nil51`, `nil52`, `nil61`, `lamabelajar`, `nisn`, `hobi`, `namaayah`, `tltgllayah`, `pddkayah`, `kerjaayah`, `isilainayah`, `hasilayah`, `alamatayah`, `nohpayah`, `statusayah`, `namaibu`, `tltgllibu`, `pddkibu`, `kerjaibu`, `isilainibu`, `hasilibu`, `alamatibu`, `nohpibu`, `namawali`, `tltgllwali`, `pddkwali`, `kerjawali`, `isilainwali`, `hasilwali`, `alamatwali`, `nohpwali`, `agamaid`, `kelasterima`, `tglterim`) VALUES
(653, '825', '8949', '9987043773', 'er6g22', 'Khiratul Azizi Sirly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp.Bendeng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(654, '824', '8948', '9977032580', 'er6g22', 'Gusti Diana Yusman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Syamratulangi Kp.Baru Pariaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(655, '823', '8947', '9993147435', 'er6g22', 'Fitri Permata Kurnia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rambai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(656, '822', '8946', '9984797199', 'er6g22', 'Fera Tri Andani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ampalu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(657, '821', '8945', '9983565863', 'er6g22', 'Felia Hasanah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cubadak Air Selatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(658, '820', '8944', '9989035015', 'er6g22', 'Elmeke Anadia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Sakato Jorong Simpang Empat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(659, '819', '8943', '9975643573', 'er6g22', 'Desfarindo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Punco Ruyung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(660, '818', '8942', '9983750618', 'er6g22', 'Anisa Warma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Talago Sariak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(661, '817', '8941', '9986970414', 'er6g22', 'Alfazah Dwi Azlyne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bukit Gonggang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(662, '816', '8940', '9986897469', 'er6g22', 'Afnika Putri Ayu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pincuran Sonsang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(663, '815', '8929', '9975337465', 'er6g22', 'Riyan Fauzan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dusun Iii', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(664, '814', '8930', '9986435446', 'er6g22', 'Riri Maisinta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sei. Lalang Padang Olo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(665, '813', '8928', '9985323356', 'er6g22', 'Rana Sarlita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Syamrulangi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(666, '812', '8927', '9985058365', 'er6g22', 'Nurjanah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Karan Aur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(667, '811', '8926', '9982344278', 'er6g22', 'Novia Indriani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paguh Duku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(668, '810', '8925', '9975151694', 'er6g22', 'Nova Amelia Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasar Balai Limau Purut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(669, '809', '8924', '9985290587', 'er6g22', 'Mutiara Savira Kurnia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dusun Sikapak Usang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(670, '808', '8923', '9975156752', 'er6g22', 'Mutia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. M.Yamin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(671, '807', '8922', '9979870073', 'er6g22', 'Losi Derma Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Iii Paladang Kth Utara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(672, '806', '8921', '9985053597', 'er6g22', 'Lola Diamanda Fajri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dusun Talgo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(673, '805', '8919', '9984797252', 'er6g22', 'Irvan Rio Naldo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sawah Liek', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(674, '804', '8918', '9980206907', 'er6g22', 'Intan Olivianitami', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ambung Kapur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(675, '803', '8917', '9975235976', 'er6g22', 'Hermai Apre Hocky Yulando', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp.Panas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(676, '802', '8916', '9985539014', 'er6g22', 'Helmi Wahyu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pakasai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(677, '801', '8915', '9994933687', 'er6g22', 'Fitri Adelia Trisna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasr Durian Ln. Panjang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(678, '800', '8914', '9985378635', 'er6g22', 'Febi Yolanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tanjung Mutus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(679, '799', '8913', '9995234025', 'er6g22', 'Fazilla Kasturi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bunga Tanjung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(680, '798', '8912', '9977276027', 'er6g22', 'Eki Mulya Putra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp.Baru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(681, '797', '8911', '9988345037', 'er6g22', 'Edo Fernando', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Kayu Gadang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(682, '796', '8910', '9974628505', 'er6g22', 'Dini Dwi Syafira', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Belawan/34.Komp.Hasanuddin Tni-Al', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(683, '795', '8909', '9976631996', 'er6g22', 'Desry Alwi Santy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Simpang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(684, '794', '8908', '9988556554', 'er6g22', 'Chintiya Ananda Arisandy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Talago Sarik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(685, '793', '8907', '9973987407', 'er6g22', 'Ayu Lestari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Naras 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(686, '792', '8906', '9804861465', 'er6g22', 'Apriyanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jati Mudik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(687, '791', '8905', '9985482620', 'er6g22', 'Annisa Azahra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rawang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(688, '790', '8904', '9803032883', 'er6g22', 'Afdhal Tanjung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Baru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(689, '789', '9519', '9985704717', 'er6g22', 'Yolanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Simpang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(690, '788', '9517', '9995590001', 'er6g22', 'Vina Alisa Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sijangek Sungai Durian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(691, '787', '9516', '9985600810', 'er6g22', 'Tessandra Saputri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bilanti Sikabu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(692, '786', '9515', '9996827276', 'er6g22', 'Tahirah Batrisyia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Rahmi Hatta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(693, '785', '9514', '9996270360', 'er6g22', 'Sukma Cantika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Simpang Mudik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(694, '784', '9513', '9993126591', 'er6g22', 'Suci Amaliah Dinda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Simpang Malai Sungai Geringging', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(695, '783', '9512', '9995437319', 'er6g22', 'Sri Wulan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(696, '782', '9511', '9996635261', 'er6g22', 'Sri Utari Riri Putri Sofiani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tiram', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(697, '781', '9510', '9999969694', 'er6g22', 'Siti Fauziah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lampanjang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(698, '780', '9509', '9996351478', 'er6g22', 'Septi Nasdira', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Manggopoh Dalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(699, '779', '9508', '9995294807', 'er6g22', 'Rosalinda Marisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Taluk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(700, '778', '9507', '9995713256', 'er6g22', 'Rivalda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Kandang Koto Gadis Sunur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(701, '777', '9506', '9996790994', 'er6g22', 'Riri Kamela', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Padang Gelapung Pasie Laweh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(702, '776', '9504', '9985058367', 'er6g22', 'Rani Astuti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasar Hilalang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(703, '775', '9503', '9982041209', 'er6g22', 'Rahayu Novita Amry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Paneh, Korong Lareh Nan Panjang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(704, '774', '9501', '9995213892', 'er6g22', 'Nur Asyiah Fatha Ali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Karan Aur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(705, '773', '9499', '9996471746', 'er6g22', 'Nana Gusti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Pasar Baru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(706, '772', '9498', '9986198410', 'er6g22', 'Mesa Hl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(707, '771', '9496', '9987755132', 'er6g22', 'May Hendry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Solok Pintu Gabang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(708, '770', '9495', '9995410468', 'er6g22', 'Mailin Paulina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasir Sigadondong', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(709, '769', '9494', '9975616726', 'er6g22', 'Jeni Aulia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jorong Pasa Tiku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(710, '768', '9493', '9975603555', 'er6g22', 'Iqbal Muhamad Yusuf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Limpato', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(711, '767', '9492', '9988524592', 'er6g22', 'Fitri Oktalisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marunggai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(712, '766', '9491', '9965775431', 'er6g22', 'Fikri Afsan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lubuk Alung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(713, '765', '9490', '9997788234', 'er6g22', 'Ferdinal Arghi Pratama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Ir. Jamaluddin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(714, '764', '9489', '9995494397', 'er6g22', 'Fellicia Delana Sofasya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dusun 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(715, '763', '9488', '9982563982', 'er6g22', 'Faqiha Nibros Salamah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Pondok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(716, '762', '9487', '9986234071', 'er6g22', 'Dara Nofrisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasar Padang Alai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(717, '761', '9486', '9995008799', 'er6g22', 'Cindy Fanesa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Prof Dr Hamka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(718, '760', '9485', '9973905760', 'er6g22', 'Beni Sanjaya M', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(719, '759', '9484', '9996054853', 'er6g22', 'Basrida Helmi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lareh Nan Panjang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(720, '758', '9483', '9976394995', 'er6g22', 'Adryan Saputra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lubuk Alung Pasar Usang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(721, '757', '9482', '9998609834', 'er6g22', 'Zikra Wahyuni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(722, '756', '9480', '9993724343', 'er6g22', 'Yustania', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. H. Samanhudi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(723, '755', '9479', '9986237899', 'er6g22', 'Yesi Rahmawati ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Laban', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(724, '754', '9478', '9974648488', 'er6g22', 'Wiwit Fitrianti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ambung Kapur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(725, '753', '9477', '9975962408', 'er6g22', 'Widdia Difitka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sampan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(726, '752', '9476', '9979442251', 'er6g22', 'Wahyuni Fadhilla', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(727, '751', '9475', '9992595819', 'er6g22', 'Vivi Permata Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. H. Rasul Telur Bato', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(728, '750', '9474', '9984797243', 'er6g22', 'Syafiani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Paneh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(729, '749', '9473', '9995399904', 'er6g22', 'Riska Yulia Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dusun Palabah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(730, '748', '9472', '9989897456', 'er6g22', 'Rezawati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(731, '747', '9471', '9986234203', 'er6g22', 'Randi Efendi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Tangah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(732, '746', '9470', '9996412891', 'er6g22', 'Rahayu Febrina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kapau Sungai Geringing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(733, '745', '9469', '9982679172', 'er6g22', 'Prima Dani Eka P Cania', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Padang Sago', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(734, '744', '9468', '9989409977', 'er6g22', 'Pendi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(735, '743', '9467', '9976630263', 'er6g22', 'Nurasmi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Padang Kandang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(736, '742', '9461', '9998511791', 'er6g22', 'Muhamad Ridwan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Koto Bangko', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(737, '741', '9466', '9986193353', 'er6g22', 'Moly Sonia Rahmi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Geringging', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(738, '740', '9465', '9997174595', 'er6g22', 'Melzi Aminar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(739, '739', '9464', '0003066080', 'er6g22', 'Melinia Salsabila', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tungka Kp Panyalai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(740, '738', '9463', '9995190248', 'er6g22', 'Melati Permata Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ampalu Tinggi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(741, '737', '9462', '9996456496', 'er6g22', 'Mega Fetricia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(742, '736', '9099', '9979755656', 'er6g22', 'M. Iqbal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(743, '735', '9460', '9986193351', 'er6g22', 'Kurnia Ramadani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Malai Tangah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(744, '734', '9459', '9976201738', 'er6g22', 'Juita Fitri Yani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(745, '733', '9458', '9986511048', 'er6g22', 'Irsad Fuadi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Palak Pisang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(746, '732', '9446', '9965279024', 'er6g22', 'Zul Afriyeni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Subarang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(747, '731', '9445', '9986139902', 'er6g22', 'Yeyet Nurislamiwati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tanjung Medan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(748, '730', '9444', '9999017770', 'er6g22', 'Widia Novianti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ambung Kapur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(749, '729', '9443', '9976631982', 'er6g22', 'Welly Handayani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Silangkuang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(750, '728', '9442', '9982650649', 'er6g22', 'Wahyuni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Marunggai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(751, '727', '9441', '9981845568', 'er6g22', 'Tutut Silvia Weri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasar Pauh Kambar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(752, '726', '9440', '9975443531', 'er6g22', 'Sisi Sri Kaltin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jorong Pasar Tiku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(753, '725', '9439', '9986897523', 'er6g22', 'Silvia Wahyuni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Silangkung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(754, '724', '9438', '9966808903', 'er6g22', 'Silvia Novri Yanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Syam Ratu Langi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(755, '723', '9437', '9984797310', 'er6g22', 'Risa Darmita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bisati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(756, '722', '9436', '9986897569', 'er6g22', 'Riri Suryani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Mandahiling', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(757, '721', '9435', '9995211778', 'er6g22', 'Riri Oktaviana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Siti Baheram', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(758, '720', '9434', '9996012963', 'er6g22', 'Rika Agus Suryani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Imam Bonjol No.30 Pariaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(759, '719', '9457', '9988267282', 'er6g22', 'Hotriani Febronia Sagala', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Kandang,Taratak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(760, '718', '9456', '9994033588', 'er6g22', 'Guila Dwi Sandra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kudu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(761, '717', '9455', '9981896691', 'er6g22', 'Elys Nadya Lilva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasir Sigadondong', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(762, '716', '9454', '9987429156', 'er6g22', 'Dela Pita Andaraini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Desa Taluk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(763, '715', '9453', '9998143016', 'er6g22', 'Dea Ananda Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasar Hilalang Taluk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(764, '714', '9450', '9994424555', 'er6g22', 'Ari Sanjaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(765, '713', '8831', '9979341518', 'er6g22', 'Anggi Aprilma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lb.Ipuh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(766, '712', '9449', '9985135978', 'er6g22', 'Anggela Mahendra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Taluk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(767, '711', '9433', '9971344973', 'er6g22', 'Resi Andriani Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Raya Lb. Alung Pariaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(768, '710', '9432', '9980963260', 'er6g22', 'Rahmi Larasati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sei Bais, Lareh Nan Panjang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(769, '709', '9431', '9997115800', 'er6g22', 'Rahmi Bakri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Koto Rajo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(770, '708', '9430', '9996472348', 'er6g22', 'Putri Indrayani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sakayan Paku, Asam Pulau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(771, '707', '9429', '9975356809', 'er6g22', 'Pera Intan Permata Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marabau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(772, '706', '9428', '9988389853', 'er6g22', 'Pela Safni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Baringin Batu Basa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(773, '705', '9427', '9997174777', 'er6g22', 'Nurhadini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Mandahiling', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(774, '704', '9426', '9995105338', 'er6g22', 'Nuralaina Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ambung Kapur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(775, '703', '9425', '9983545214', 'er6g22', 'Noveriza Ayu Monika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Barangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);
INSERT INTO `siswa` (`id`, `nopendaftaran`, `noinduk`, `nis`, `password`, `nama`, `napa`, `jeka`, `tltgll`, `akeid`, `saukaid`, `sautiid`, `sta`, `bahasa`, `alamat`, `nohp`, `tiberid`, `jarakid`, `goldar`, `sakit`, `kelainan`, `tirat`, `sekasal`, `alsek`, `tglnoijazah`, `nil41`, `nil42`, `nil51`, `nil52`, `nil61`, `lamabelajar`, `nisn`, `hobi`, `namaayah`, `tltgllayah`, `pddkayah`, `kerjaayah`, `isilainayah`, `hasilayah`, `alamatayah`, `nohpayah`, `statusayah`, `namaibu`, `tltgllibu`, `pddkibu`, `kerjaibu`, `isilainibu`, `hasilibu`, `alamatibu`, `nohpibu`, `namawali`, `tltgllwali`, `pddkwali`, `kerjawali`, `isilainwali`, `hasilwali`, `alamatwali`, `nohpwali`, `agamaid`, `kelasterima`, `tglterim`) VALUES
(776, '702', '9424', '9997805339', 'er6g22', 'Miftahul Annajaha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Tangah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(777, '701', '9423', '9981845546', 'er6g22', 'Mia Aulina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bayur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(778, '700', '9422', '9986008597', 'er6g22', 'Mei Yolinda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Gunung Basi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(779, '699', '9421', '9985648754', 'er6g22', 'Mei Kristina Yeremia Br Simanjorang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln Syam Ratulangi Barat 09 B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(780, '698', '9420', '9999453117', 'er6g22', 'Lucy Oktahermania', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Bendang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(781, '697', '9419', '9997174604', 'er6g22', 'Irfandi Handika Putra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Sikumbang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(782, '696', '9413', '9996201121', 'er6g22', 'Helmi Daini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lubuk Punggai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(783, '695', '9417', '0006224067', 'er6g22', 'Fitria Malta Defira', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Karan Aur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(784, '694', '9416', '9996453818', 'er6g22', 'Fitri Handayani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muaro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(785, '693', '9415', '9996456038', 'er6g22', 'Fiana Pitaloka Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paguh Dalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(786, '692', '9414', '9985058360', 'er6g22', 'Devita Oktaviani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Karan Aur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(787, '691', '9418', '9979006912', 'er6g22', 'Desi Yuliandani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pauh Kambar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(788, '690', '9412', '9976293865', 'er6g22', 'Budiman Syah Putra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tanjung Medan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(789, '689', '9411', '9986237681', 'er6g22', 'Andri Yovani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bukit Kudo - Kudo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(790, '688', '9410', '9986511054', 'er6g22', 'Alfadri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Palak Pisang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(791, '687', '9233', '9987623257', 'er6g22', 'Yolanda Aulia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tiku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(792, '686', '9232', '9985371636', 'er6g22', 'Wiwit Elsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lancang-Aur Malintang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(793, '685', '9231', '9994219232', 'er6g22', 'Temayori Arni Chasshidi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Apar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(794, '684', '9229', '9997483971', 'er6g22', 'Syaiful Mahrizal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ampalu Tinggi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(795, '683', '9228', '9996053893', 'er6g22', 'Rostan Celvinaldi Putra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pucung Anam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(796, '682', '9227', '9974123652', 'er6g22', 'Ronaldo Saputra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lubuk Beras', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(797, '681', '9226', '9987961441', 'er6g22', 'Rizky Angga Syaputra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kurai Taji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(798, '680', '9225', '9996455955', 'er6g22', 'Riska Yofita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Dewi Sartika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(799, '679', '9224', '9986245730', 'er6g22', 'Resi Saputri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Simpang Apar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(800, '678', '9223', '9995531924', 'er6g22', 'Rahmatika Putri Anwar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jalan Baru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(801, '677', '9222', '9993766024', 'er6g22', 'Muhammmad Ziqra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Belacan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(802, '676', '9217', '9996270484', 'er6g22', 'Muhammad Rafly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Bendang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(803, '675', '9221', '9991228080', 'er6g22', 'Muhamad Fauzan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Kambangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(804, '674', '9220', '9980404045', 'er6g22', 'Mhd Agil Aulya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ptp N 6 Ophir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(805, '673', '9219', '9994695450', 'er6g22', 'Mega Mustika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Marunggai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(806, '672', '9216', '9985852173', 'er6g22', 'Lidia Putri Mardiana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tungka Lubuk Aro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(807, '671', '9215', '9995294800', 'er6g22', 'Joegi Septiawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Griya Taluk Permai Blok A No. 10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(808, '670', '9214', '9986897824', 'er6g22', 'Ilham Medio Agusta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lubuk Puar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(809, '669', '9213', '9980812727', 'er6g22', 'Ikhsan Wahyudi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Sudirman Jawi-Jawi Ii', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(810, '668', '9212', '9992906828', 'er6g22', 'Hossa Exellina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasar Padang Alai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(811, '667', '9211', '9985814527', 'er6g22', 'Hibatul Rahmadhani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Kihajar Dewantoro No. 01 A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(812, '666', '9210', '9997175127', 'er6g22', 'Hasanuddin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasa Juha Kp. Bendang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(813, '665', '9209', '9986510583', 'er6g22', 'Futri Anisya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Silangkung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(814, '664', '9207', '0006705910', 'er6g22', 'Elsa Sabrina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Naras Ii', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(815, '663', '9206', '9996752841', 'er6g22', 'Dita Safira', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Balai Baru Toboh Sikumbang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(816, '662', '9205', '9995455261', 'er6g22', 'Diny Tri Yasmi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Dr. Wahidin Sudiro Husodo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(817, '661', '9204', '9993126596', 'er6g22', 'Debby Aussie Safira', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp.Kandang Koto Gadis Sunur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(818, '660', '9597', '9998460830', 'er6g22', 'Citra Fahreza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Syam Ratu Langgi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(819, '659', '9203', '9992012539', 'er6g22', 'Berliani Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(820, '658', '9202', '9996020929', 'er6g22', 'Arief Rachman Malik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tanah Tumbuah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(821, '657', '9201', '9995279739', 'er6g22', 'Ari Furrahman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ampalu Tinggi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(822, '656', '9199', '9995849025', 'er6g22', 'Aldi Rivaldi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Sarik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(823, '655', '9198', '9989208151', 'er6g22', 'Agustriono', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Syamratulangi No 1 C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(824, '654', '9596', '9986190315', 'er6g22', 'Yusaina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Rantai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(825, '653', '9595', '9995433998', 'er6g22', 'Yolanda Nabila', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Naras Ii', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(826, '652', '9594', '9986234020', 'er6g22', 'Yola Riska Anjelia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Laban', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(827, '651', '9593', '9976352577', 'er6g22', 'Yetti Herawati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paguh Dalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(828, '650', '9592', '9989281406', 'er6g22', 'Watna Dewita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paguh Duku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(829, '649', '9591', '9995190255', 'er6g22', 'Syastriani Guta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Air Santok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(830, '648', '9590', '9996459605', 'er6g22', 'Shintia Aprila', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Patamuan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(831, '647', '9589', '9998724646', 'er6g22', 'Sari Fitriani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Naras I', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(832, '646', '9588', '9992953824', 'er6g22', 'Repsi Junita Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Simpang Raya Talago Sariak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(833, '645', '9587', '9993254881', 'er6g22', 'Rahma Asma Ulhusna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lapau Kandang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(834, '644', '9586', '9989072755', 'er6g22', 'Rafni Aini Fitri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Wr Supratman No. 40A Ampalu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(835, '643', '9585', '9986415427', 'er6g22', 'Ofrita Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lampanjang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(836, '642', '9584', '9998783581', 'er6g22', 'Nur Afifah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Koto Marapak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(837, '641', '9583', '9989305372', 'er6g22', 'Novaria Santika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sialangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(838, '640', '9582', '9996412878', 'er6g22', 'Nina Santika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bukit Laban', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(839, '639', '9581', '9975217158', 'er6g22', 'Nila Evila Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Karan Aur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(840, '638', '9580', '9984637210', 'er6g22', 'Nia Sevratania', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Ladang. Balah Hilir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(841, '637', '9579', '9988189608', 'er6g22', 'Nia Gusniati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Rawang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(842, '636', '9578', '9955988480', 'er6g22', 'Mutiara Rezki Aulia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Bendang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(843, '635', '9577', '9982344287', 'er6g22', 'Mutia Mega Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rimbo Dulang-Dulang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(844, '634', '9576', '9976352582', 'er6g22', 'Marlizani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paguh Dalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(845, '633', '9575', '9995595995', 'er6g22', 'Mardalena', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Dalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(846, '632', '9574', '0007704743', 'er6g22', 'Lora Yuliantika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Koto Tinggi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(847, '631', '9573', '9994906961', 'er6g22', 'Isranti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Komplek Cacat Veteran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(848, '630', '9572', '9996675133', 'er6g22', 'Isnawati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Durian Daun', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(849, '629', '9571', '9966516961', 'er6g22', 'Hesti Guszulastri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunagi Laban', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(850, '628', '9570', '9998936863', 'er6g22', 'Fitra Fazira', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Cindua Mato,Cubadak Air', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(851, '627', '9569', '9988027969', 'er6g22', 'Findi Amimy Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kabun Sunur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(852, '626', '9567', '9985318675', 'er6g22', 'Feby Chesti Mayorisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Sarik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(853, '625', '9566', '9997278950', 'er6g22', 'Elga Amelia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bunga Tanjung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(854, '624', '9565', '9971344950', 'er6g22', 'Dewi Murniati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Laban', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(855, '623', '9564', '9976295469', 'er6g22', 'Desi Dian Wahyuni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teluk Nibung Sunur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(856, '622', '9563', '9984797281', 'er6g22', 'Cindy Permata Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasir Lawas Bisati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(857, '621', '9562', '9968622565', 'er6g22', 'Cici Pramita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pintir Kayu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(858, '620', '9561', '9994033244', 'er6g22', 'Aswal Rifaldi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Dadok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(859, '619', '9560', '9993711980', 'er6g22', 'Adi Darma Surya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Bgd Aziz Chan No. 107', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(860, '618', '9559', '9975363043', 'er6g22', 'Adha Sri Ayu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lubuk Ipuh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(861, '617', '9409', '9980443390', 'er6g22', 'Yusmita Ridhayanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Dama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(862, '616', '9408', '9996012957', 'er6g22', 'Yolla Miranda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Abdul Rahman Murad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(863, '615', '9407', '9985053744', 'er6g22', 'Widia Ardesti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Kompi Bakapal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(864, '614', '9406', '9995759010', 'er6g22', 'Vivi Julisti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Siti Mangopoh,Naras I', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(865, '613', '9405', '9980203310', 'er6g22', 'Tasya Agustiana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sei. Gimba Ganting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(866, '612', '9404', '9996051550', 'er6g22', 'Suci Indah Permata Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lubuk Aro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(867, '611', '9403', '9985855471', 'er6g22', 'Siska Dewi Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lareh Nan Panjang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(868, '610', '9402', '0005938187', 'er6g22', 'Sadra Jamilni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Guguak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(869, '609', '9401', '9985399450', 'er6g22', 'Rosi Maryulista', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tanjung Sabar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(870, '608', '9400', '9999759738', 'er6g22', 'Rima Yuliani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dusun Pasar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(871, '607', '9399', '9985058366', 'er6g22', 'Reni Novia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Moh Jamil Jambek', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(872, '606', '9398', '9995192731', 'er6g22', 'Putra Triyansyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bungo Tanjuang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(873, '605', '9397', '9967002250', 'er6g22', 'Pina Lierni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cubadak Air Selatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(874, '604', '9396', '9984572991', 'er6g22', 'Nurfuatdini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Geringging', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(875, '603', '9395', '9984309688', 'er6g22', 'Nova Siska Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Kampuang Tangah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(876, '602', '9394', '9987594728', 'er6g22', 'Nola Anggraini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Basung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(877, '601', '9393', '9965679022', 'er6g22', 'Natalia Multi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pangguang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(878, '600', '9392', '9983746478', 'er6g22', 'Mutia Rahman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pariaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(879, '599', '9391', '9984248647', 'er6g22', 'Muhammad Rais', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Durian Boyan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(880, '598', '9390', '9996470703', 'er6g22', 'Mita Daniati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Limpato', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(881, '597', '9389', '9994089824', 'er6g22', 'Meli Hariyati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Air Santok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(882, '596', '9388', '9999970851', 'er6g22', 'Mayang Putri Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. M . Jamil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(883, '595', '9387', '9997277262', 'er6g22', 'Marisya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Bendang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(884, '594', '9386', '9996752339', 'er6g22', 'M. Iqbal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Simpang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(885, '593', '9385', '9975909477', 'er6g22', 'Isfa Melia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mudik Balai Pulau Air', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(886, '592', '9384', '9985378644', 'er6g22', 'Indri Sefianti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tanjung Mutus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(887, '591', '9373', '9996056625', 'er6g22', 'Yuni Sartika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sialang Nagari Tandikek Utara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(888, '590', '9372', '9986415423', 'er6g22', 'Yefna Rahmalita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lampanjang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(889, '589', '9371', '9965299967', 'er6g22', 'Welly Putri Andika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Syamratulangi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(890, '588', '9370', '9999189544', 'er6g22', 'Wahyu Nurul Amaliah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Syeh Abd Arief', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(891, '587', '9369', '9996051210', 'er6g22', 'Vivi Amelia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Koto Mambang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(892, '586', '9368', '9996051193', 'er6g22', 'Susi Elvina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Koto Mambang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(893, '585', '9367', '9997668776', 'er6g22', 'Sri Wahyuni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Syekh Abdul Arif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(894, '584', '9366', '9985342294', 'er6g22', 'Sintia Antartika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pariaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(895, '583', '9365', '9996640316', 'er6g22', 'Rizki Auliadi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(896, '582', '9364', '9985236715', 'er6g22', 'Reza Wulandari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Palabah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(897, '581', '9363', '9984410387', 'er6g22', 'Ratna Dewi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pauh Kurai Taji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(898, '580', '9362', '9998464697', 'er6g22', 'Ramadhona Aulia Gusli', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bayur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);
INSERT INTO `siswa` (`id`, `nopendaftaran`, `noinduk`, `nis`, `password`, `nama`, `napa`, `jeka`, `tltgll`, `akeid`, `saukaid`, `sautiid`, `sta`, `bahasa`, `alamat`, `nohp`, `tiberid`, `jarakid`, `goldar`, `sakit`, `kelainan`, `tirat`, `sekasal`, `alsek`, `tglnoijazah`, `nil41`, `nil42`, `nil51`, `nil52`, `nil61`, `lamabelajar`, `nisn`, `hobi`, `namaayah`, `tltgllayah`, `pddkayah`, `kerjaayah`, `isilainayah`, `hasilayah`, `alamatayah`, `nohpayah`, `statusayah`, `namaibu`, `tltgllibu`, `pddkibu`, `kerjaibu`, `isilainibu`, `hasilibu`, `alamatibu`, `nohpibu`, `namawali`, `tltgllwali`, `pddkwali`, `kerjawali`, `isilainwali`, `hasilwali`, `alamatwali`, `nohpwali`, `agamaid`, `kelasterima`, `tglterim`) VALUES
(899, '579', '9361', '9996013118', 'er6g22', 'Prima Reza Wahyuni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl Syam Ratulangi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(900, '578', '9360', '9991623948', 'er6g22', 'Oza Aidha Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Yos Sudarso Km.21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(901, '577', '9359', '9999607790', 'er6g22', 'Nur Husniyarsih', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ambung Kapur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(902, '576', '9358', '9991766083', 'er6g22', 'Nisya Nurhasanah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Laban', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(903, '575', '9357', '9995216881', 'er6g22', 'Muhijra Arfialis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Sudirman No 33 C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(904, '574', '9382', '9999763283', 'er6g22', 'Harum Rahmayana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bukit Gonggang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(905, '573', '9381', '9994933595', 'er6g22', 'Fitri Wahyuni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pakasai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(906, '572', '9380', '9986236770', 'er6g22', 'Fanny Guswanto Yusri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gunung Basi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(907, '571', '9379', '9998455511', 'er6g22', 'Elzi Ramadani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Taluk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(908, '570', '9378', '9993182729', 'er6g22', 'Effendi Budiman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasar Ganting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(909, '569', '9377', '9995604559', 'er6g22', 'Ayu Anisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Kandang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(910, '568', '9376', '9997174868', 'er6g22', 'Atikah Filiana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lansano', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(911, '567', '9374', '9988546611', 'er6g22', 'Andri Imelia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pucung Anam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(912, '566', '9337', '9997809480', 'er6g22', 'Zahara Delfi Ayunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(913, '565', '9335', '9986176830', 'er6g22', 'Yoga Alhamda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Gelapung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(914, '564', '9334', '9996752861', 'er6g22', 'Wannia Rezdallahi Zz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lubuk Alir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(915, '563', '9333', '9985415373', 'er6g22', 'Titik Ramayani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Tangah Bukit Calik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(916, '562', '9332', '9995494380', 'er6g22', 'Suci Kurnia Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Balai Kurai Taji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(917, '561', '9331', '9986510605', 'er6g22', 'Sri Ummul Ilmi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Barangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(918, '560', '9330', '9982268787', 'er6g22', 'Siska Susanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paguh Duku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(919, '1103', '9354', '9981663558', '12345', 'Josi Mulyani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(920, '558', '9355', '9987062260', 'er6g22', 'Muhamad Ibrahim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh V Koto Kp. Dalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(921, '557', '9353', '9999490285', 'er6g22', 'Melati Julia Asmara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cubadak Air Selatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(922, '556', '9352', '9995273405', 'er6g22', 'Maharani Putri Hidayat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Bagindo Azizchan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(923, '555', '9348', '9997174854', 'er6g22', 'Indah Permata Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Badinah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(924, '554', '9347', '9985814375', 'er6g22', 'Ilfi Azma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Pahlawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(925, '553', '9346', '9995455257', 'er6g22', 'Fitria Hasnita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cubadak Air', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(926, '552', '9345', '9973431510', 'er6g22', 'Feby Ade Lia Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Limpato', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(927, '551', '9344', '9981166934', 'er6g22', 'Fakhrurrazi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paguh Duku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(928, '550', '9343', '9994703305', 'er6g22', 'Diana Aprilia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Durian Pulut - Pulut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(929, '549', '9342', '9986251729', 'er6g22', 'Devi Novita Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' Pasa Gelombang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(930, '548', '9341', '9994485251', 'er6g22', 'Citra Adetya Rahayu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Piliang Limau Purut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(931, '547', '9340', '0008397646', 'er6g22', 'Anisa Yulistira', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Siti Mangopoh Dusun Utara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(932, '546', '9338', '9986233982', 'er6g22', 'Ade Andriani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paguh Dalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(933, '545', '9329', '9999007235', 'er6g22', 'Silvia Febriani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Talago Sarik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(934, '544', '9328', '9993127155', 'er6g22', 'Rivaldi Fajri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Tangah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(935, '543', '9327', '9985413649', 'er6g22', 'Reni Yulia Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Naras Ii', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(936, '542', '9326', '9994754889', 'er6g22', 'Rani Gusti Ansyari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(937, '541', '9325', '9971989581', 'er6g22', 'Rahmat Hariyadi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Takago Sarik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(938, '540', '9324', '9999145045', 'er6g22', 'Popy Sukma Hidayati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Komplek Cacat Veteran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(939, '539', '9323', '9996752508', 'er6g22', 'Nur Azizah Rahmadani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Limpato', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(940, '538', '9322', '9995399899', 'er6g22', 'Nilna Ulfani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toboh Palabah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(941, '537', '9321', '9989055948', 'er6g22', 'Natalia Putri Ana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Bayur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(942, '536', '9320', '9995196265', 'er6g22', 'Mufidatul Assyfa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Padang Sago', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(943, '535', '9319', '9992549784', 'er6g22', 'Meri Hartati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tuanku Nan Renceh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(944, '534', '9318', '9996491211', 'er6g22', 'Mela Gustina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp Bukit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(945, '533', '9317', '9996013054', 'er6g22', 'M. Muchsin Rahmadani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. H Agus Salim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(946, '532', '9316', '9997174779', 'er6g22', 'Intan Arnia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Limau Hantu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(947, '531', '9315', '9994524038', 'er6g22', 'Indah Khosy Pratama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Ladang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(948, '530', '9314', '0004010633', 'er6g22', 'Indah Febria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Tanjung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(949, '529', '9313', '9998979588', 'er6g22', 'Iis Dahlia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasar Sungai Geringging', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(950, '528', '9312', '9987468858', 'er6g22', 'Fitri Yeni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Padang-Batu Basa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(951, '527', '9311', '9995494383', 'er6g22', 'Fikri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Kasai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(952, '526', '9310', '9995590647', 'er6g22', 'Fatma Anisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Durian Ambalau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(953, '525', '9309', '9994933593', 'er6g22', 'Ema Malini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Surau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(954, '524', '9308', '9999863613', 'er6g22', 'Dea Denisya Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Pahlawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(955, '523', '9306', '9994612946', 'er6g22', 'Cyntia Monalisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kmapung Ladang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(957, '521', '9305', '9993147416', 'er6g22', 'Allyka Putri Bungsu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl.Tuangku Imanbonjol', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(958, '520', '9304', '9982349108', 'er6g22', 'Afni Silvia Hadini', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Limau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(959, '519', '9558', '0009589993', 'er6g22', 'Yuli Marni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Naras 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(960, '518', '9557', '9975218899', 'er6g22', 'Yoga Afandi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Syech Abdul Arif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(961, '517', '9556', '9998247554', 'er6g22', 'Yeny Paturasina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kabun Tapakis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(962, '516', '9555', '9995294504', 'er6g22', 'Whindy Maharani Rosdi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Naras 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(963, '515', '9554', '9990754691', 'er6g22', 'Tiara Wahyuni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Taji-Taji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(964, '514', '9552', '9986802205', 'er6g22', 'Sania Novita Rezki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bisati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(965, '513', '9551', '9990023044', 'er6g22', 'Roza Hendra Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jorong Kubu Anau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(966, '512', '9553', '9988189076', 'er6g22', 'Riska Meliani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(967, '511', '9550', '9986897561', 'er6g22', 'Rika Nur Oktavia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Limau Hantu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(968, '510', '9549', '9994933561', 'er6g22', 'Reza Aprilia Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Palak Pisang-Sikabu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(969, '509', '9548', '9990364306', 'er6g22', 'Rega Azzukruf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sikapak Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(970, '508', '9547', '9985293665', 'er6g22', 'Rani Ramadhani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl Syekh Abdul Arif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(971, '507', '9545', '9985318450', 'er6g22', 'Peronika Diana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lubuk Ipuh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(972, '506', '9544', '9985114707', 'er6g22', 'Ovta Windri Agusta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Bagindo Aziz Chan No. 61', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(973, '505', '9543', '9985815142', 'er6g22', 'Ortega Saputra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasir Ampalu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(974, '504', '9540', '9984248648', 'er6g22', 'Noval Ilham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Balai Kamih Kampung Dadok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(975, '503', '9541', '9975231201', 'er6g22', 'Nopi Susanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Abdul Muis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(976, '502', '9539', '9985319096', 'er6g22', 'Nanda Novita Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. P. Tandean Kampung Baru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(977, '501', '9538', '9989611349', 'er6g22', 'Muhammad Syaf Putra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Bayur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(978, '500', '9537', '9989636783', 'er6g22', 'Muhammad Choirul Anwar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp Jawa 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(979, '499', '9536', '9983905458', 'er6g22', 'Mira Elma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. M Yamin No. 17 B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(980, '498', '9535', '9996528684', 'er6g22', 'Melati Ayustisia Ananta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Durian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(981, '497', '9534', '9997174477', 'er6g22', 'Mega Aulia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Kabun', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(982, '496', '9533', '9994942424', 'er6g22', 'Mardian Efendi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Koto Gadis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(983, '495', '9532', '9995410435', 'er6g22', 'Luvita Mulyani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pariaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(984, '494', '9531', '9992333879', 'er6g22', 'Lucy Cenora', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Duku Banyak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(985, '493', '9530', '9995611229', 'er6g22', 'Indah Putri Wahyuli', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Durian Dangka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(986, '492', '9529', '9995751321', 'er6g22', 'Imelda Amelia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kajai Sungai Rotan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(987, '491', '9528', '9985814637', 'er6g22', 'Grenaldo Ilham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dusun Tangah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(988, '490', '9527', '9996012951', 'er6g22', 'Elsa Pratiwi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Abdul Muis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(989, '489', '9525', '9988503017', 'er6g22', 'Dea Putri Ladifa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sikapak Mudik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(990, '488', '9524', '9972060979', 'er6g22', 'Benny Mustafa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Bayur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(991, '487', '9523', '9976630254', 'er6g22', 'Arif Hermawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Padang Kandang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(992, '486', '9522', '9995216908', 'er6g22', 'Ainil Fatmawarti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Dr. M. Jamil No. 36 A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(993, '485', '9521', '9965776129', 'er6g22', 'Adi Saputra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lubuk Alung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(994, '484', '9303', '9996444518', 'er6g22', 'Yola Etriana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Syekh Burhanudin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(995, '483', '9302', '0009899861', 'er6g22', 'Yesi Rahma Yanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jln. Tongkol', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(996, '482', '9301', '9997899294', 'er6g22', 'Uliana Rahmatika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Binasi Marunggi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(997, '481', '9300', '9975728163', 'er6g22', 'Titin Putri Rahimi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pasar Hilalang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(998, '480', '9298', '9991688203', 'er6g22', 'Siska Angraeani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Tugu Perjuangan 45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(999, '479', '9297', '9995044358', 'er6g22', 'Shindi Monica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Tanjung Jorong Balai Satu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1000, '478', '9296', '9996458139', 'er6g22', 'Sherly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Talau Atas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1001, '477', '9293', '9971344971', 'er6g22', 'Resti Agustina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Laban', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1002, '476', '9292', '9997174622', 'er6g22', 'Putri Helmi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Buluh Kasok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1003, '475', '9290', '9985350081', 'er6g22', 'Nurhakiki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sakayan Paku Asam Pulau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1004, '474', '9289', '9976607124', 'er6g22', 'Novia Elissa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Abdul Muis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1005, '473', '9288', '9995602438', 'er6g22', 'Nanda Pratama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lakuak Pasar Usang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1006, '472', '9287', '9996456234', 'er6g22', 'Mona Siska Ananda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kp. Tangah Ganting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1007, '471', '9286', '9986897753', 'er6g22', 'Mirati Risda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Guguk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1008, '470', '9285', '9996471859', 'er6g22', 'Mia Nurhayati Saputri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Korong Talogondan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1009, '469', '9284', '9997174844', 'er6g22', 'Leni Gusri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ambung Kapur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1010, '468', '9283', '9998853458', 'er6g22', 'Khotimah Rahayu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lapau Bayur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1011, '467', '9282', '9997279909', 'er6g22', 'Kartika Rolina Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Limpato', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1012, '466', '9281', '9996456035', 'er6g22', 'Ilham Kasuari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paguh Dalam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1013, '465', '9271', '9974238153', 'er6g22', 'Anggia Nurfadilah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ambung Kapur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1014, '464', '9267', '9985391941', 'er6g22', 'Yulia Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Durian Ambalau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1015, '463', '9266', '9989168211', 'er6g22', 'Widia Safitri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Batang Kabung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1016, '462', '9265', '9994047494', 'er6g22', 'Vadhila Rahma Husna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Naras 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1017, '461', '9264', '9986233939', 'er6g22', 'Susila Kardiani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Tangah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1018, '460', '9263', '9985296394', 'er6g22', 'Septio Edi Saputra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cubadak Air Selatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1019, '459', '9262', '9997174761', 'er6g22', 'Roby Gunawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cimpago', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1020, '458', '9261', '9993423398', 'er6g22', 'Ririn Tamara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kampung Ladang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1021, '457', '9260', '9995399897', 'er6g22', 'Ria Rika Putri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rambai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1022, '456', '9259', '9966404510', 'er6g22', 'Ria Herawati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sungai Paku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);
INSERT INTO `siswa` (`id`, `nopendaftaran`, `noinduk`, `nis`, `password`, `nama`, `napa`, `jeka`, `tltgll`, `akeid`, `saukaid`, `sautiid`, `sta`, `bahasa`, `alamat`, `nohp`, `tiberid`, `jarakid`, `goldar`, `sakit`, `kelainan`, `tirat`, `sekasal`, `alsek`, `tglnoijazah`, `nil41`, `nil42`, `nil51`, `nil52`, `nil61`, `lamabelajar`, `nisn`, `hobi`, `namaayah`, `tltgllayah`, `pddkayah`, `kerjaayah`, `isilainayah`, `hasilayah`, `alamatayah`, `nohpayah`, `statusayah`, `namaibu`, `tltgllibu`, `pddkibu`, `kerjaibu`, `isilainibu`, `hasilibu`, `alamatibu`, `nohpibu`, `namawali`, `tltgllwali`, `pddkwali`, `kerjawali`, `isilainwali`, `hasilwali`, `alamatwali`, `nohpwali`, `agamaid`, `kelasterima`, `tglterim`) VALUES
(1023, '455', '9258', '9996013117', 'er6g22', 'Reza Rizaldi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jl. Dr. M. Jamal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1024, '454', '9280', '9985135963', 'er6g22', 'Gusri Al Ikhsan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Taluk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1025, '453', '9279', '9995266671', 'er6g22', 'Futri Zianggraini Batavia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mandahiling', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1026, '452', '9278', '9989943456', 'er6g22', 'Firmayanti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Maransi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1027, '451', '9277', '9992307580', 'er6g22', 'Elfi Deri Yanni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Koto Marapak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1028, '450', '9276', '9999932791', 'er6g22', 'Denia Sartika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bawan, Lubuk Basung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1029, '449', '9275', '9996865300', 'er6g22', 'Debby Santika Rhamadani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Surau Duku Bisati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(1030, NULL, ' ', '12345678', ' ', 'Najwa Khairunnisa Dafwen', 'Najwa', 2, 'Padang - 05 September 2011', 1, 2, 0, 1, 'Indonesia', 'Jln. Semarang - Padang Panjang', '081363188008', 1, '3', 'O', '', '0', '150/50', 'SMP 2 Padang Panjang', 'Silaing bawah padang panjang', '02 - 00234', 90.00, 0.00, 90.00, 0.00, 90.00, '3 Tahun', '1233423212', 'Mengaji', 'Dafwen Toresa', 'Padang Panjang - 01 Januari 1978', 6, 2, '', 1.00, 'Padang', '081363188008', 0, 'Yuli fitria Kamal', 'Padang - 02 Juli 1979', 0, 2, '', 1, 'Padang', '081363188008', '', '', 0, '', '', '0', '', '', 1, 'II', '12-09-2016');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_new`
--

DROP TABLE IF EXISTS `siswa_new`;
CREATE TABLE `siswa_new` (
  `id` int(11) NOT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `napa` varchar(20) DEFAULT NULL,
  `jeka` int(11) DEFAULT NULL,
  `tltgll` varchar(100) DEFAULT NULL,
  `akeid` int(11) DEFAULT NULL,
  `saukaid` int(11) DEFAULT NULL,
  `sautiid` int(11) DEFAULT NULL,
  `sta` int(11) DEFAULT NULL,
  `bahasa` varchar(40) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT ' ',
  `nohp` varchar(20) DEFAULT NULL,
  `tiberid` int(11) DEFAULT NULL,
  `jarakid` varchar(2) DEFAULT NULL,
  `goldar` char(2) DEFAULT NULL,
  `sakit` varchar(50) DEFAULT NULL,
  `kelainan` varchar(100) DEFAULT NULL,
  `tirat` varchar(20) DEFAULT NULL,
  `sekasal` varchar(100) DEFAULT NULL,
  `alsek` varchar(20) DEFAULT NULL,
  `tglnoijazah` varchar(70) DEFAULT NULL,
  `nil41` double(15,2) DEFAULT NULL,
  `nil42` double(15,2) DEFAULT NULL,
  `nil51` double(15,2) DEFAULT NULL,
  `nil52` double(15,2) DEFAULT NULL,
  `nil61` double(15,2) DEFAULT NULL,
  `lamabelajar` varchar(20) DEFAULT NULL,
  `nisn` char(20) DEFAULT NULL,
  `hobi` varchar(50) DEFAULT NULL,
  `namaayah` varchar(60) DEFAULT NULL,
  `tltgllayah` varchar(100) DEFAULT NULL,
  `pddkayah` int(11) DEFAULT NULL,
  `kerjaayah` int(11) DEFAULT NULL,
  `isilainayah` varchar(100) DEFAULT NULL,
  `hasilayah` double(15,2) DEFAULT NULL,
  `alamatayah` varchar(150) DEFAULT NULL,
  `nohpayah` varchar(20) DEFAULT NULL,
  `statusayah` int(11) DEFAULT NULL,
  `namaibu` varchar(50) DEFAULT NULL,
  `tltgllibu` varchar(100) DEFAULT NULL,
  `pddkibu` int(11) DEFAULT NULL,
  `kerjaibu` int(11) DEFAULT '0',
  `isilainibu` varchar(100) DEFAULT NULL,
  `hasilibu` int(11) DEFAULT NULL,
  `alamatibu` varchar(150) DEFAULT NULL,
  `nohpibu` varchar(20) DEFAULT NULL,
  `namawali` varchar(50) DEFAULT NULL,
  `tltgllwali` varchar(100) DEFAULT NULL,
  `pddkwali` int(11) DEFAULT NULL,
  `kerjawali` varchar(20) DEFAULT NULL,
  `isilainwali` varchar(50) DEFAULT NULL,
  `hasilwali` varchar(20) DEFAULT NULL,
  `alamatwali` varchar(150) DEFAULT NULL,
  `nohpwali` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `siswa_new`
--

TRUNCATE TABLE `siswa_new`;
--
-- Dumping data for table `siswa_new`
--

INSERT INTO `siswa_new` (`id`, `nis`, `nama`, `napa`, `jeka`, `tltgll`, `akeid`, `saukaid`, `sautiid`, `sta`, `bahasa`, `alamat`, `nohp`, `tiberid`, `jarakid`, `goldar`, `sakit`, `kelainan`, `tirat`, `sekasal`, `alsek`, `tglnoijazah`, `nil41`, `nil42`, `nil51`, `nil52`, `nil61`, `lamabelajar`, `nisn`, `hobi`, `namaayah`, `tltgllayah`, `pddkayah`, `kerjaayah`, `isilainayah`, `hasilayah`, `alamatayah`, `nohpayah`, `statusayah`, `namaibu`, `tltgllibu`, `pddkibu`, `kerjaibu`, `isilainibu`, `hasilibu`, `alamatibu`, `nohpibu`, `namawali`, `tltgllwali`, `pddkwali`, `kerjawali`, `isilainwali`, `hasilwali`, `alamatwali`, `nohpwali`) VALUES
(13, 'niss', 'namaaa', 'panggilannnn', 2, 'tempat lahir', 1, 2, 3, 0, 'bahasa', 'alamat', 'nohp', 1, '1', 'b', 'sakit', '0', 'tinggi berat', 'asal sekolah', 'alamat sekolah', 'tgl ijazah', 0.00, 0.00, 0.00, 0.00, 0.00, 'lama', 'nisn', 'hobi', 'nama ayah', 'tempat lahir ayah', 1, 3, 'lainnya', 1.00, 'alamat ayah', 'no hp ayah', 0, 'nama ibu kandung', 'temp lahir ibu kandung', 0, 2, 'lainnya', 1, 'alamat ibu', 'n', 'nama wali', 'lahir wali', 2, '1', 'petani', '2', 'alamat wali', '213123');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `statusid` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `status`
--

TRUNCATE TABLE `status`;
--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusid`, `nama`) VALUES
(1, 'Bukan Yatim Piatu'),
(2, 'Yatim'),
(3, 'Piatu');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sumkelas`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `sumkelas`;
CREATE TABLE `sumkelas` (
`id` int(11)
,`idkelas` int(11)
,`jmlsiswa` bigint(21)
,`tahunid` int(11)
,`aktif` enum('Y','T')
);

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

DROP TABLE IF EXISTS `tahun`;
CREATE TABLE `tahun` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `namalain` varchar(40) DEFAULT ' ',
  `aktif` enum('Y','T') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tahun`
--

TRUNCATE TABLE `tahun`;
--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id`, `kode`, `nama`, `namalain`, `aktif`) VALUES
(1, '20161', 'Ganjil 2016/2017', '2015/2016 Ganjil', 'Y'),
(2, '20162', 'Genap 2016/2017', '2015/2016 Genap', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `thn`
--

DROP TABLE IF EXISTS `thn`;
CREATE TABLE `thn` (
  `id` int(11) NOT NULL,
  `kode` char(20) DEFAULT '',
  `nama` varchar(50) DEFAULT NULL,
  `namalain` varchar(40) DEFAULT NULL,
  `awal` int(11) DEFAULT NULL,
  `akhir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `thn`
--

TRUNCATE TABLE `thn`;
--
-- Dumping data for table `thn`
--

INSERT INTO `thn` (`id`, `kode`, `nama`, `namalain`, `awal`, `akhir`) VALUES
(1, '20141', 'Ganjil 2014', '2014/2015 Ganjil', NULL, NULL),
(2, '20142', 'Genap 2014', '2014/2015 Genap', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tiber`
--

DROP TABLE IF EXISTS `tiber`;
CREATE TABLE `tiber` (
  `tiberid` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tiber`
--

TRUNCATE TABLE `tiber`;
--
-- Dumping data for table `tiber`
--

INSERT INTO `tiber` (`tiberid`, `nama`) VALUES
(1, 'Bersama Orang Tua'),
(2, 'Wali');

-- --------------------------------------------------------

--
-- Table structure for table `t_nikaleks`
--

DROP TABLE IF EXISTS `t_nikaleks`;
CREATE TABLE `t_nikaleks` (
  `id` int(10) NOT NULL,
  `idkelas` int(11) DEFAULT '0',
  `idsiswa` int(11) NOT NULL DEFAULT '0',
  `tahun` varchar(9) DEFAULT '',
  `semester` int(5) DEFAULT NULL,
  `nama_eks` text NOT NULL,
  `tahunid` int(11) NOT NULL DEFAULT '0',
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `t_nikaleks`
--

TRUNCATE TABLE `t_nikaleks`;
--
-- Dumping data for table `t_nikaleks`
--

INSERT INTO `t_nikaleks` (`id`, `idkelas`, `idsiswa`, `tahun`, `semester`, `nama_eks`, `tahunid`, `ket`) VALUES
(4, 22, 958, '', NULL, 'sad', 1, 'asdasd'),
(5, 22, 958, '', NULL, 'asdas', 1, 'asdasd'),
(9, 23, 1030, '1', NULL, 'Pramuka', 1, 'yyyy');

-- --------------------------------------------------------

--
-- Table structure for table `t_nilaipkl`
--

DROP TABLE IF EXISTS `t_nilaipkl`;
CREATE TABLE `t_nilaipkl` (
  `id` int(10) NOT NULL,
  `idsiswa` int(11) NOT NULL DEFAULT '0',
  `idkelas` int(11) DEFAULT NULL,
  `tahun_akademik` int(11) DEFAULT '0',
  `semester` int(5) DEFAULT NULL,
  `mitra_dudi` varchar(150) NOT NULL DEFAULT '',
  `lokasi` varchar(100) NOT NULL DEFAULT '',
  `lama` varchar(50) NOT NULL,
  `n_angka` int(3) NOT NULL,
  `n_huruf` varchar(2) NOT NULL DEFAULT '',
  `keterangan` varchar(150) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `t_nilaipkl`
--

TRUNCATE TABLE `t_nilaipkl`;
--
-- Dumping data for table `t_nilaipkl`
--

INSERT INTO `t_nilaipkl` (`id`, `idsiswa`, `idkelas`, `tahun_akademik`, `semester`, `mitra_dudi`, `lokasi`, `lama`, `n_angka`, `n_huruf`, `keterangan`) VALUES
(8, 567, 13, 2, NULL, 'mitra dudi 2222', 'lokasi 2222', '4444', 55555, 'A', 'keterangan22222'),
(9, 958, 13, 2, NULL, 'mitra dudi 2', 'lokasi 2', '6', 70, 'C', 'keterangan 2'),
(10, 956, 22, 2, NULL, 'Proactive Brainmatics Indonesia', 'Padang', '3', 90, '', ''),
(11, 958, 22, 1, NULL, 'asad', 'asd', '12', 121, '12', 'sadasdas'),
(13, 1030, 23, 1, NULL, 'Proactive Brainmatics Indonesia', 'Pekanbaru', '3 Bulan', 80, 'A', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `t_nilaiprestasi`
--

DROP TABLE IF EXISTS `t_nilaiprestasi`;
CREATE TABLE `t_nilaiprestasi` (
  `id` int(10) NOT NULL,
  `idkelas` int(11) DEFAULT '0',
  `idsiswa` int(11) NOT NULL DEFAULT '0',
  `tahun` varchar(9) DEFAULT '',
  `semester` int(5) DEFAULT NULL,
  `nama_pres` text NOT NULL,
  `tahunid` int(11) NOT NULL DEFAULT '0',
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `t_nilaiprestasi`
--

TRUNCATE TABLE `t_nilaiprestasi`;
--
-- Dumping data for table `t_nilaiprestasi`
--

INSERT INTO `t_nilaiprestasi` (`id`, `idkelas`, `idsiswa`, `tahun`, `semester`, `nama_pres`, `tahunid`, `ket`) VALUES
(15, 22, 958, '', NULL, 'ssad', 1, 'asdasd'),
(17, 23, 1030, '1', NULL, 'Juara 1 Lomba Cermat & Cepat Pramuka tk Nasional', 1, 'yyyy');

-- --------------------------------------------------------

--
-- Table structure for table `t_sikap_semester`
--

DROP TABLE IF EXISTS `t_sikap_semester`;
CREATE TABLE `t_sikap_semester` (
  `id` int(10) NOT NULL,
  `idkelas` int(11) DEFAULT '0',
  `idsiswa` int(11) NOT NULL,
  `tahun` varchar(9) NOT NULL DEFAULT '',
  `spiritual_predikat` varchar(11) NOT NULL DEFAULT '',
  `spiritual_deskripsi` text NOT NULL,
  `sosial_predikat` varchar(11) NOT NULL DEFAULT '',
  `sosial_deskripsi` text NOT NULL,
  `tahunid` int(11) DEFAULT '0',
  `angkas` double(15,2) DEFAULT '0.00',
  `angkassos` double(15,2) DEFAULT '0.00',
  `cat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `t_sikap_semester`
--

TRUNCATE TABLE `t_sikap_semester`;
--
-- Dumping data for table `t_sikap_semester`
--

INSERT INTO `t_sikap_semester` (`id`, `idkelas`, `idsiswa`, `tahun`, `spiritual_predikat`, `spiritual_deskripsi`, `sosial_predikat`, `sosial_deskripsi`, `tahunid`, `angkas`, `angkassos`, `cat`) VALUES
(12, 13, 958, '', '', '22', '', '44', 2, 11.00, 33.00, '55'),
(13, 13, 567, '', '', 'Dosen dipilih berdasarkan kulifikasi yang dibutuhkan oleh program studi SI, sehingga penyelenggaran PBM di Prodi SI sesuai dengan matakuliah yang ada di SI dan dapat berkiprah dan diakui masyarakat dari sisi keahliannya.\r\n', '', 'Dosen dipilih berdasarkan kulifikasi yang dibutuhkan oleh program studi SI, sehingga penyelenggaran PBM di Prodi SI sesuai dengan matakuliah yang ada di SI dan dapat berkiprah dan diakui masyarakat dari sisi keahliannya.\r\n', 2, 2.00, 33.00, 'Catatan Wali Kelas Dosen dipilih berdasarkan kulifikasi yang dibutuhkan oleh program studi SI, sehingga penyelenggaran PBM di Prodi SI sesuai dengan matakuliah yang ada di SI dan dapat berkiprah dan diakui masyarakat dari sisi keahliannya.\r\n'),
(14, 22, 956, '', '', '', '', '', 2, 90.00, 90.00, 'BAgus'),
(15, 13, 585, '', '', 'Cukup', '', 'Cukup', 1, 70.00, 70.00, 'Kurang bersemangat belalar dikelas'),
(17, 13, 929, '', '', 'sadasd', '', 'asdsad', 1, 87.00, 80.00, 'asdsad'),
(19, 21, 932, '', '', 'asdas', '', 'asdasd', 1, 90.00, 80.00, 'asdsad'),
(29, 21, 9, '', '', '2', '', '4', 1, 1.00, 3.00, '5'),
(30, 21, 5, '', '', '222', '', '444', 1, 11.00, 33.00, '555'),
(31, 21, 8, '', '', '222', '', '4444', 1, 111.00, 333.00, '5555'),
(33, 22, 688, '', '', 'ok', '', 'no ok', 1, 70.00, 60.00, 'ok'),
(34, 22, 720, '', '', 'ok', '', 'ok', 1, 55.00, 79.00, 'ok'),
(35, 22, 958, '', '', 'sip', '', 'ok', 1, 66.00, 70.00, 'ok'),
(36, 22, 993, '', '', 'olk', '', 'pk', 1, 70.00, 80.00, 'ok'),
(37, 23, 1030, '', '', 'Bagus', '', 'Bagus', 1, 90.00, 90.00, 'Siswa bagus sikap dan agama'),
(38, 21, 567, '', '', 'asdasdsad ', '', 'sdfsfds', 1, 23.00, 232.00, 'sdfsdfds');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `group` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `group`) VALUES
(1, 'Cecep Yusuf', 'cheyuz', '45a3bfc9f0bc5f26b303d6bf0c30797b', 'admin'),
(2, 'Ayu Dwi S', 'ayue', 'f7e1b1a69ac6c1f4fa7e2fbfdd17079a', 'operator');

-- --------------------------------------------------------

--
-- Structure for view `sumkelas`
--
DROP TABLE IF EXISTS `sumkelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sourceco`@`localhost` SQL SECURITY DEFINER VIEW `sumkelas`  AS  select `kelassiswa`.`id` AS `id`,`kelassiswa`.`idkelas` AS `idkelas`,count(`kelassiswa`.`idsiswa`) AS `jmlsiswa`,`kelassiswa`.`tahunid` AS `tahunid`,`tahun`.`aktif` AS `aktif` from (`kelassiswa` left join `tahun` on((`kelassiswa`.`tahunid` = `tahun`.`id`))) where (`tahun`.`aktif` = 'Y') group by `kelassiswa`.`idkelas`,`kelassiswa`.`tahunid` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensiswa`
--
ALTER TABLE `absensiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acl_resources`
--
ALTER TABLE `acl_resources`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `acl_roles`
--
ALTER TABLE `acl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `asis`
--
ALTER TABLE `asis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_module`
--
ALTER TABLE `auth_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_users`
--
ALTER TABLE `auth_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`noBulan`),
  ADD UNIQUE KEY `NoBulan` (`noBulan`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`iddep`),
  ADD UNIQUE KEY `iddepar` (`iddep`,`iddev`),
  ADD KEY `iddev` (`iddev`);

--
-- Indexes for table `devisi`
--
ALTER TABLE `devisi`
  ADD PRIMARY KEY (`iddev`);

--
-- Indexes for table `fullpost`
--
ALTER TABLE `fullpost`
  ADD PRIMARY KEY (`id_full`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`hariid`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`hasilid`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_posting`);

--
-- Indexes for table `infosekolah`
--
ALTER TABLE `infosekolah`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idjbt`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mkid` (`mapelid`),
  ADD KEY `guruid` (`guruid`),
  ADD KEY `hariid` (`hariid`),
  ADD KEY `ruangid` (`ruangid`);

--
-- Indexes for table `jarak`
--
ALTER TABLE `jarak`
  ADD PRIMARY KEY (`jarakid`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kar`
--
ALTER TABLE `kar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `nik` (`nip`,`jeka`,`idnikah`,`idpddk`,`idagama`,`idjbt`,`id`),
  ADD KEY `no_2` (`no`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD UNIQUE KEY `kode_2` (`kode`);

--
-- Indexes for table `kelassiswa`
--
ALTER TABLE `kelassiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idkelas` (`idkelas`,`idsiswa`,`tahunid`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`kelid`),
  ADD UNIQUE KEY `id` (`kelid`);

--
-- Indexes for table `kerja`
--
ALTER TABLE `kerja`
  ADD PRIMARY KEY (`kerjaid`);

--
-- Indexes for table `kora`
--
ALTER TABLE `kora`
  ADD PRIMARY KEY (`idlem`),
  ADD UNIQUE KEY `idlem` (`idlem`);

--
-- Indexes for table `lemkarrinci`
--
ALTER TABLE `lemkarrinci`
  ADD PRIMARY KEY (`idlem`),
  ADD KEY `no` (`no`,`nik`,`noBulan`);

--
-- Indexes for table `lemkarrincig`
--
ALTER TABLE `lemkarrincig`
  ADD PRIMARY KEY (`idlem`),
  ADD KEY `no` (`no`,`nik`,`noBulan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materiajar`
--
ALTER TABLE `materiajar`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngajar`
--
ALTER TABLE `ngajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaikb`
--
ALTER TABLE `nilaikb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaisiswa`
--
ALTER TABLE `nilaisiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idkelas` (`idmapel`,`idsiswa`,`tahunid`);

--
-- Indexes for table `pddk`
--
ALTER TABLE `pddk`
  ADD PRIMARY KEY (`pddkid`);

--
-- Indexes for table `poce`
--
ALTER TABLE `poce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potr`
--
ALTER TABLE `potr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saker`
--
ALTER TABLE `saker`
  ADD PRIMARY KEY (`idsaker`),
  ADD UNIQUE KEY `idsk` (`idsaker`);

--
-- Indexes for table `silabus`
--
ALTER TABLE `silabus`
  ADD PRIMARY KEY (`id_silabus`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_new`
--
ALTER TABLE `siswa_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusid`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thn`
--
ALTER TABLE `thn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiber`
--
ALTER TABLE `tiber`
  ADD PRIMARY KEY (`tiberid`);

--
-- Indexes for table `t_nikaleks`
--
ALTER TABLE `t_nikaleks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_nilaipkl`
--
ALTER TABLE `t_nilaipkl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_nilaiprestasi`
--
ALTER TABLE `t_nilaiprestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sikap_semester`
--
ALTER TABLE `t_sikap_semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensiswa`
--
ALTER TABLE `absensiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `acl_resources`
--
ALTER TABLE `acl_resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `acl_roles`
--
ALTER TABLE `acl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `asis`
--
ALTER TABLE `asis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_module`
--
ALTER TABLE `auth_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `auth_users`
--
ALTER TABLE `auth_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `iddep` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id departemen';

--
-- AUTO_INCREMENT for table `devisi`
--
ALTER TABLE `devisi`
  MODIFY `iddev` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fullpost`
--
ALTER TABLE `fullpost`
  MODIFY `id_full` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `hasilid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id_posting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `infosekolah`
--
ALTER TABLE `infosekolah`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `idjbt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jarak`
--
ALTER TABLE `jarak`
  MODIFY `jarakid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kar`
--
ALTER TABLE `kar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kelassiswa`
--
ALTER TABLE `kelassiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `kelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kerja`
--
ALTER TABLE `kerja`
  MODIFY `kerjaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kora`
--
ALTER TABLE `kora`
  MODIFY `idlem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lemkarrinci`
--
ALTER TABLE `lemkarrinci`
  MODIFY `idlem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `lemkarrincig`
--
ALTER TABLE `lemkarrincig`
  MODIFY `idlem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `materiajar`
--
ALTER TABLE `materiajar`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ngajar`
--
ALTER TABLE `ngajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `nilaikb`
--
ALTER TABLE `nilaikb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=784;

--
-- AUTO_INCREMENT for table `nilaisiswa`
--
ALTER TABLE `nilaisiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pddk`
--
ALTER TABLE `pddk`
  MODIFY `pddkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `saker`
--
ALTER TABLE `saker`
  MODIFY `idsaker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `silabus`
--
ALTER TABLE `silabus`
  MODIFY `id_silabus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1031;

--
-- AUTO_INCREMENT for table `siswa_new`
--
ALTER TABLE `siswa_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thn`
--
ALTER TABLE `thn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiber`
--
ALTER TABLE `tiber`
  MODIFY `tiberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_nikaleks`
--
ALTER TABLE `t_nikaleks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_nilaipkl`
--
ALTER TABLE `t_nilaipkl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_nilaiprestasi`
--
ALTER TABLE `t_nilaiprestasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_sikap_semester`
--
ALTER TABLE `t_sikap_semester`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
