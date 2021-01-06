/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - datadiri_ci
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`datadiri_ci` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `datadiri_ci`;

/*Table structure for table `riwayat_hidup` */

DROP TABLE IF EXISTS `riwayat_hidup`;

CREATE TABLE `riwayat_hidup` (
  `nim` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `umur` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `riwayat_hidup` */

insert  into `riwayat_hidup`(`nim`,`nama`,`jk`,`umur`) values 
(2,'awa','P','10'),
(3,'www','L','11'),
(4,'cede','P','22');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
