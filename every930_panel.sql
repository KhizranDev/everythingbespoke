/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.33 : Database - every930_panel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`every930_panel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `every930_panel`;

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `country_id` int(11) DEFAULT '0',
  `state_id` int(11) DEFAULT '0',
  `contact_number` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_image` varchar(100) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `last_login` datetime DEFAULT NULL,
  `login_type` tinyint(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`full_name`,`country_id`,`state_id`,`contact_number`,`address`,`email`,`password`,`profile_image`,`active`,`last_login`,`login_type`,`created_by`,`created_on`,`modified_by`,`modified_on`) values (1,'Administrator',0,0,NULL,NULL,'admin@everythingbespoke.pk','MXRoNHpBS2R0TjQweEh6MjZiMmREQT09',NULL,1,'2021-11-01 21:48:39',1,NULL,NULL,NULL,NULL),(2,'Noman Khan',1,2,'+1 031 023 3827','test address','noman.khan330@gmail.com','MDhXbEcrVXNpbi83MlovdWp5SjlxQT09','',1,'2021-07-25 02:33:18',2,NULL,'2020-02-29 07:29:20',1,'2021-07-15 04:53:40');

/*Table structure for table `tbl_users_type` */

DROP TABLE IF EXISTS `tbl_users_type`;

CREATE TABLE `tbl_users_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `isactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users_type` */

insert  into `tbl_users_type`(`id`,`fullname`,`isactive`) values (1,'Administrator',1),(2,'Customers',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
