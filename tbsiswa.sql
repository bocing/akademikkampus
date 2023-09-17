# SQL Manager 2007 for MySQL 4.4.1.2
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : dbarapor


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;

SET FOREIGN_KEY_CHECKS=0;

USE `dbarapor`;

#
# Structure for the `siswa` table : 
#

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `id` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `nopendaftaran` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `noinduk` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT ' ',
  `nis` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT ' ',
  `nama` VARCHAR(50) COLLATE latin1_swedish_ci DEFAULT NULL,
  `napa` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `jeka` INTEGER(11) DEFAULT NULL,
  `tltgll` VARCHAR(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `tgll` DATE DEFAULT NULL,
  `akeid` INTEGER(11) DEFAULT NULL,
  `saukaid` INTEGER(11) DEFAULT NULL,
  `sautiid` INTEGER(11) DEFAULT NULL,
  `sta` INTEGER(11) DEFAULT NULL,
  `bahasa` VARCHAR(40) COLLATE latin1_swedish_ci DEFAULT NULL,
  `alamat` VARCHAR(250) COLLATE latin1_swedish_ci DEFAULT ' ',
  `nohp` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `tiberid` INTEGER(11) DEFAULT NULL,
  `jarakid` VARCHAR(2) COLLATE latin1_swedish_ci DEFAULT NULL,
  `goldar` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `sakit` VARCHAR(50) COLLATE latin1_swedish_ci DEFAULT NULL,
  `kelainan` VARCHAR(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `tirat` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `sekasal` VARCHAR(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `alsek` VARCHAR(250) COLLATE latin1_swedish_ci DEFAULT NULL,
  `tglnoijazah` VARCHAR(70) COLLATE latin1_swedish_ci DEFAULT NULL,
  `nil41` DOUBLE(15,2) DEFAULT '0.00',
  `nil42` DOUBLE(15,2) DEFAULT '0.00',
  `nil51` DOUBLE(15,2) DEFAULT '0.00',
  `nil52` DOUBLE(15,2) DEFAULT '0.00',
  `nil61` DOUBLE(15,2) DEFAULT '0.00',
  `lamabelajar` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `nisn` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `hobi` VARCHAR(50) COLLATE latin1_swedish_ci DEFAULT NULL,
  `namaayah` VARCHAR(60) COLLATE latin1_swedish_ci DEFAULT NULL,
  `tltgllayah` VARCHAR(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `pddkayah` INTEGER(11) DEFAULT NULL,
  `kerjaayah` INTEGER(11) DEFAULT NULL,
  `isilainayah` VARCHAR(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `hasilayah` DOUBLE(15,2) DEFAULT NULL,
  `alamatayah` VARCHAR(250) COLLATE latin1_swedish_ci DEFAULT NULL,
  `nohpayah` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `statusayah` INTEGER(11) DEFAULT NULL,
  `namaibu` VARCHAR(50) COLLATE latin1_swedish_ci DEFAULT NULL,
  `tltgllibu` VARCHAR(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `pddkibu` INTEGER(11) DEFAULT NULL,
  `kerjaibu` INTEGER(11) DEFAULT '0',
  `isilainibu` VARCHAR(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `hasilibu` INTEGER(11) DEFAULT NULL,
  `alamatibu` VARCHAR(250) COLLATE latin1_swedish_ci DEFAULT NULL,
  `nohpibu` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `namawali` VARCHAR(50) COLLATE latin1_swedish_ci DEFAULT NULL,
  `tltgllwali` VARCHAR(100) COLLATE latin1_swedish_ci DEFAULT NULL,
  `pddkwali` INTEGER(11) DEFAULT NULL,
  `kerjawali` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `isilainwali` VARCHAR(50) COLLATE latin1_swedish_ci DEFAULT NULL,
  `hasilwali` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `alamatwali` VARCHAR(250) COLLATE latin1_swedish_ci DEFAULT NULL,
  `nohpwali` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `agamaid` INTEGER(2) NOT NULL DEFAULT '0',
  `kelasterima` VARCHAR(10) COLLATE latin1_swedish_ci DEFAULT NULL,
  `tglterim` VARCHAR(12) COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
)ENGINE=InnoDB
AUTO_INCREMENT=1031 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci';



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;