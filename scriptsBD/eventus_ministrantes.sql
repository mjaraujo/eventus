-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: eventus
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.2

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
-- Table structure for table `ministrantes`
--

DROP TABLE IF EXISTS `ministrantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ministrantes` (
  `MinID` int(11) NOT NULL AUTO_INCREMENT,
  `MinNome` varchar(75) NOT NULL,
  `MinInstituicao` varchar(75) NOT NULL,
  `MinCelular` varchar(11) DEFAULT NULL,
  `MinEmail` varchar(100) NOT NULL,
  `MinCusto` decimal(12,2) DEFAULT NULL,
  PRIMARY KEY (`MinID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ministrantes`
--

LOCK TABLES `ministrantes` WRITE;
/*!40000 ALTER TABLE `ministrantes` DISABLE KEYS */;
INSERT INTO `ministrantes` VALUES (1,'João de Souza','UTFPR','4388194012','jsouza@utfpr.edu.br',400.00),(2,'Carmem Almeida','UFPB','8298124512','cmsalmeida@ufpb.edu.br',1400.22),(3,'Rita Pereira','UFRS','519443312','rmaleida@ufrs.edu.br',700.22),(4,'Almir Andrade','UNIOESTE','4587432312','aandrade@unioeste.edu.br',800.22),(5,'Josélia Ribas','UTFPR','4499887766','josribas@utfpr.edu.br',389.00);
/*!40000 ALTER TABLE `ministrantes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-27 10:04:32
