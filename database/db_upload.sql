/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.4.11-MariaDB : Database - db_upload
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_upload` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_upload`;

/*Table structure for table `tb_dosen` */

DROP TABLE IF EXISTS `tb_dosen`;

CREATE TABLE `tb_dosen` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_dosen` */

insert  into `tb_dosen`(`idx`,`nama_dosen`) values (1,'Udin'),(2,'Ijuih');

/*Table structure for table `tb_mtk` */

DROP TABLE IF EXISTS `tb_mtk`;

CREATE TABLE `tb_mtk` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mtk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_mtk` */

insert  into `tb_mtk`(`idx`,`nama_mtk`) values (1,'Matematika'),(2,'Bahasa Inggris');

/*Table structure for table `tb_video` */

DROP TABLE IF EXISTS `tb_video`;

CREATE TABLE `tb_video` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `dosenid` int(11) DEFAULT NULL,
  `mtkid` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `namafile` text DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_video` */

insert  into `tb_video`(`idx`,`dosenid`,`mtkid`,`keterangan`,`namafile`) values (1,1,1,'Video Tutorial Perkalian','FILE_23042020_VID-20191121-WA0007.mp4');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
