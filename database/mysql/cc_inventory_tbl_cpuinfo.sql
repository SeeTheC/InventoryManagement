-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: cc_inventory
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_cpuinfo`
--

DROP TABLE IF EXISTS `tbl_cpuinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cpuinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) DEFAULT NULL,
  `processor` varchar(100) DEFAULT NULL,
  `processor_speed` varchar(45) DEFAULT NULL,
  `motherboard` varchar(100) DEFAULT NULL,
  `ram_size` int(11) DEFAULT NULL,
  `hdd_size` int(11) DEFAULT NULL,
  `current_os` varchar(100) DEFAULT NULL,
  `os_version` varchar(45) DEFAULT NULL,
  `gnat_id` varchar(100) DEFAULT NULL,
  `gnat_date` timestamp NULL DEFAULT NULL,
  `warrenty` varchar(45) DEFAULT NULL,
  `purchase_date` timestamp NULL DEFAULT NULL,
  `ops_ref_no` varchar(45) DEFAULT NULL,
  `vendor` varchar(45) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `by_user_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tbl_cpuinfo_mid_idx` (`mid`),
  CONSTRAINT `fk_tbl_cpuinfo_mid` FOREIGN KEY (`mid`) REFERENCES `tbl_machineinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cpuinfo`
--

LOCK TABLES `tbl_cpuinfo` WRITE;
/*!40000 ALTER TABLE `tbl_cpuinfo` DISABLE KEYS */;
INSERT INTO `tbl_cpuinfo` VALUES (3,12,'','','',NULL,NULL,'',NULL,NULL,NULL,'',NULL,'',NULL,'2016-12-16 21:50:28','2016-12-16 16:20:28','2016-12-16 16:20:28','1');
/*!40000 ALTER TABLE `tbl_cpuinfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-17  3:51:52
