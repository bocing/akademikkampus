-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 06:18 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpabrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `id_induk` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `ai` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `menu`
--

TRUNCATE TABLE `menu`;
--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `id_induk`, `nama`, `icon`, `url`, `ai`, `created_at`, `updated_at`) VALUES
(2, 0, 'Master', NULL, '#', NULL, NULL, NULL),
(3, 0, 'Transaksi', 'fa fa-sitemap', '', 'induk', '0000-00-00', '0000-00-00'),
(7, 0, 'Hutang-Piutang', 'fa fa-sitemap', '', 'induk', '0000-00-00', '0000-00-00'),
(8, 0, 'Laporan Pembelian', 'fa fa-sitemap', '', 'induk', '0000-00-00', '0000-00-00'),
(9, 0, 'Laporan Penjualan', 'fa fa-sitemap', '', 'induk', '0000-00-00', '0000-00-00'),
(15, 2, 'Devisi-Departemen', 'fa fa-sitemap', '#', 'induk', '2017-08-26', '2017-08-26'),
(16, 2, 'Kartu Nama', 'fa fa-sitemap', '#', 'induk', '2017-08-26', '2017-08-26'),
(17, 2, 'Master-Master', 'fa fa-sitemap', '#', 'induk', '2017-08-26', '2017-08-26'),
(18, 15, 'Devisi', '', 'dev', 'anak', '2017-08-26', '2017-08-26'),
(19, 15, 'Departemen', '', 'dep', 'anak', '2017-08-26', '2017-08-26'),
(20, 16, 'Pelanggan', '', 'pel', 'anak', '2017-08-26', '2017-08-26'),
(21, 16, 'Pemasok', '', 'pem', 'anak', '2017-08-26', '2017-08-26'),
(22, 16, 'Karyawan', '', 'kar', 'anak', '2017-08-26', '2017-08-26'),
(23, 17, 'Jenis', '', 'jenis', 'anak', '2017-08-26', '2017-08-26'),
(24, 17, 'Kategori', '', 'kate', 'anak', '2017-08-26', '2017-08-26'),
(25, 17, 'Satuan', '', 'sat', 'anak', '2017-08-26', '2017-08-26'),
(26, 17, 'Termin', '', 'ter', 'anak', '2017-08-26', '2017-08-26'),
(27, 17, 'Stok', '', 'stok', 'anak', '2017-08-26', '2017-08-26'),
(28, 3, 'Pembelian', '', 'beli', 'induk', '2017-08-26', '2017-08-26'),
(29, 3, 'Penjualan', '', 'jual', 'induk', '2017-08-26', '2017-08-26'),
(30, 7, 'Hutang Karyawan', '', 'hutkar', 'induk', '2017-08-26', '2017-08-26'),
(31, 17, 'Menu', '', 'menu', 'anak', '2017-08-26', '2017-08-26'),
(32, 17, 'Stok+foto', '-', 'stokfo', '-', '2017-08-26', '2017-08-26'),
(33, 28, 'Oder Pembelian', '-', 'orderb', 'anak', '2017-08-26', '2017-08-26'),
(34, 28, 'Penerimaan Barang', NULL, 'terimabarang', NULL, '2017-08-26', '2017-08-26'),
(35, 28, 'Invoice Pembelian', NULL, 'invoicebeli', NULL, '2017-08-26', '2017-08-26'),
(36, 29, 'Sales Order', NULL, 'so', NULL, '2017-08-26', '2017-08-26'),
(37, 29, 'Surat Jalan', NULL, 'sujal', NULL, '2017-08-26', '2017-08-26'),
(38, 29, 'Invoice Penjualan', NULL, 'invoicejual', NULL, '2017-08-26', '2017-08-26'),
(46, 9, 'dddd', NULL, '#', NULL, '2017-08-27', '2017-08-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
