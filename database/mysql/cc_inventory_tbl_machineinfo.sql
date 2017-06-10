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
-- Table structure for table `tbl_machineinfo`
--

DROP TABLE IF EXISTS `tbl_machineinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_machineinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mac` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `machine_type_id` int(11) DEFAULT NULL,
  `by_user_id` varchar(100) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `counter_no` int(11) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tbl_machineinfo_section_idx` (`section_id`),
  CONSTRAINT `fk_tbl_machineinfo_section` FOREIGN KEY (`section_id`) REFERENCES `tbl_sections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_machineinfo`
--

LOCK TABLES `tbl_machineinfo` WRITE;
/*!40000 ALTER TABLE `tbl_machineinfo` DISABLE KEYS */;
INSERT INTO `tbl_machineinfo` VALUES (11,'','127.0.0.1',2,'1',1,1,'2016-12-16 18:53:39','2016-12-16 13:23:39','2016-12-16 13:23:39'),(12,'','127.0.0.2',1,'1',2,1,'2016-12-16 21:37:50','2016-12-16 16:07:50','2016-12-16 13:24:16'),(13,'','127.0.0.1',2,'1',1,2,'2016-12-16 18:54:53','2016-12-16 13:24:53','2016-12-16 13:24:53'),(14,'','',3,'1',1,2,'2016-12-16 22:02:15','2016-12-16 16:32:15','2016-12-16 16:32:15');
/*!40000 ALTER TABLE `tbl_machineinfo` ENABLE KEYS */;
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