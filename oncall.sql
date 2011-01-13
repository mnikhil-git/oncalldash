-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: oncall
-- ------------------------------------------------------
-- Server version	5.1.41-3ubuntu12.6

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
-- Table structure for table `oncall`
--

DROP TABLE IF EXISTS `oncall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oncall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `group` char(3) NOT NULL,
  `pri` tinyint(1) DEFAULT '0',
  `sec` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oncall`
--

LOCK TABLES `oncall` WRITE;
/*!40000 ALTER TABLE `oncall` DISABLE KEYS */;
INSERT INTO `oncall` VALUES (1,'Laz','sec',1,0),(2,'Baer','sec',0,1),(3,'Mike Innocentini','net',1,0),(4,'Marc OConnor','net',0,1),(5,'Ruben Areyzaga','sys',1,0),(6,'Brian Scanlon','img',1,0),(7,'Chris Davis','mon',1,0),(8,'Kerry Slaughter','mon',0,1),(9,'Darren West','sto',1,0),(10,'Joel Keating','sto',0,1),(11,'Matt Renfrow','sys',0,0),(12,'Dan Borkowski','sys',0,0),(13,'Doran Wisner','sys',0,0),(14,'Scott Parus','net',0,0),(15,'Jason Crowley','net',0,0),(16,'Mark Sarnecki','net',0,0),(17,'Eric Hopkins','sys',0,0),(18,'David Podjaski','sys',0,0),(19,'Michele Buhle','img',0,0),(20,'Tony Parrilli','img',0,0),(21,'Mark Salava','sys',0,0);
/*!40000 ALTER TABLE `oncall` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-10-13 23:49:02
