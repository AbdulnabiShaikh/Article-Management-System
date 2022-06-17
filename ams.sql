-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ams
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adminsignup`
--

DROP TABLE IF EXISTS `adminsignup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminsignup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `number` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminsignup`
--

LOCK TABLES `adminsignup` WRITE;
/*!40000 ALTER TABLE `adminsignup` DISABLE KEYS */;
INSERT INTO `adminsignup` VALUES (1,'nabi',123456,'nabi@email.com','564','564');
/*!40000 ALTER TABLE `adminsignup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_records`
--

DROP TABLE IF EXISTS `contact_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_records` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `number` int(14) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_records`
--

LOCK TABLES `contact_records` WRITE;
/*!40000 ALTER TABLE `contact_records` DISABLE KEYS */;
INSERT INTO `contact_records` VALUES (4,'Abdulnabi Shaikh',112345688,'A@email.com','Just trying');
/*!40000 ALTER TABLE `contact_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sign_in_records`
--

DROP TABLE IF EXISTS `sign_in_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sign_in_records` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sign_in_records`
--

LOCK TABLES `sign_in_records` WRITE;
/*!40000 ALTER TABLE `sign_in_records` DISABLE KEYS */;
INSERT INTO `sign_in_records` VALUES (9,'',''),(11,'',''),(12,'',''),(13,'',''),(14,'',''),(15,'',''),(16,'',''),(17,'',''),(18,'',''),(19,'',''),(20,'',''),(21,'',''),(22,'',''),(23,'',''),(24,'',''),(25,'',''),(26,'',''),(27,'',''),(28,'',''),(29,'',''),(30,'',''),(31,'',''),(32,'',''),(33,'',''),(34,'',''),(35,'',''),(36,'',''),(37,'',''),(38,'',''),(39,'',''),(40,'',''),(41,'',''),(42,'',''),(43,'',''),(44,'',''),(45,'',''),(46,'',''),(47,'',''),(48,'',''),(49,'',''),(50,'',''),(51,'',''),(52,'',''),(53,'',''),(54,'',''),(55,'',''),(56,'',''),(57,'',''),(58,'',''),(59,'',''),(60,'',''),(61,'',''),(62,'sk@email.com','4586'),(63,'a@email.com','12345'),(64,'a@email.com','12345'),(65,'',''),(66,'',''),(67,'',''),(68,'',''),(69,'',''),(70,'',''),(71,'',''),(72,'',''),(73,'',''),(74,'',''),(75,'',''),(76,'',''),(77,'',''),(78,'',''),(79,'',''),(80,'',''),(81,'',''),(82,'',''),(83,'',''),(84,'',''),(85,'',''),(86,'',''),(87,'',''),(88,'',''),(89,'',''),(90,'',''),(91,'',''),(92,'',''),(93,'',''),(94,'',''),(95,'',''),(96,'',''),(97,'',''),(98,'',''),(99,'',''),(100,'',''),(101,'',''),(102,'',''),(103,'',''),(104,'',''),(105,'',''),(106,'',''),(107,'',''),(108,'',''),(109,'',''),(110,'',''),(111,'',''),(112,'',''),(113,'',''),(114,'',''),(115,'',''),(116,'',''),(117,'',''),(118,'',''),(119,'',''),(120,'',''),(121,'',''),(122,'',''),(123,'','');
/*!40000 ALTER TABLE `sign_in_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `number` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirm_password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signup`
--

LOCK TABLES `signup` WRITE;
/*!40000 ALTER TABLE `signup` DISABLE KEYS */;
INSERT INTO `signup` VALUES (1,'Abdulnabi',123456789,'nabi@email.com','786','786'),(2,'ismail',16313,'ismail@email.com','987','987'),(3,'shaikh',123456,'a@email.com','5622616cf9','5622616cf9'),(4,'something',123456789,'ab@ab','a87ff679a2','a87ff679a2');
/*!40000 ALTER TABLE `signup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `textuploads`
--

DROP TABLE IF EXISTS `textuploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `textuploads` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `article` varchar(500) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `textuploads`
--

LOCK TABLES `textuploads` WRITE;
/*!40000 ALTER TABLE `textuploads` DISABLE KEYS */;
INSERT INTO `textuploads` VALUES (1,'The Impact of Social Media: Is it Irreplaceable?','In little more than a decade, the impact of social media has gone from being an entertaining extra to a fully integrated part of nearly every aspect of daily life for many.\r\n\r\nRecently in the realm of commerce, Facebook faced skepticism in its testimony to the Senate Banking Committee on Libra, its proposed cryptocurrency and alternative financial system. In politics, heartthrob Justin Bieber tweeted the President of the United States, imploring him to “let those kids out of cages.” In law enfor','socialmedia'),(2,'The U.S.-Japan Partnership Is Healthy, but Has a Long To-Do List','n January, U.S. President Joe Biden held a virtual summit with Japanese Prime Minister Fumio Kishida in which both leaders largely agreed to maintain the direction bilateral relations have taken in the 15 months since Biden took office. But if the meeting signaled both sides’ desire for continuity, there are still numerous unanswered questions regarding the future of the alliance.\r\n\r\nWith Biden’s inauguration as U.S. president, the U.S.-Japan relationship—and U.S. policy on Asia more broadly—app','politics'),(3,'New Education Policy','The National Policy on Education was framed in 1986 and modified in 1992. Since then several changes have taken place that calls for a revision of the Policy. \r\n\r\nThe NEP 2020 is is the first education policy of the 21st century and replaces the thirty-four year old National Policy on Education (NPE), 1986. Built on the foundational pillars of Access, Equity, Quality, Affordability and Accountability, this policy is aligned to the 2030 Agenda for Sustainable Development and aims to transform Ind','education'),(4,'India Russia relations','ndia’s relations with Russia have made little progress since they got stalled following the end of the Cold War. Today their bilateral ties—officially labelled “special and privileged strategic partnership”—focus heavily on defence cooperation, while the economic partnership remains listless even as the respective relations of the two with other states have grown rapidly. This paper analyses the ebbs and flows of India-Russia relations in the first five years of the BJP-led government. It seeks ','politics'),(5,'vacations','A recent survey by travel booking platform goibibo suggests that 60 per cent respondents who are willing to travel during the winter holiday season are planning to spend the year end vacationing in the hills or by the beach. Amongst those surveyed, more than 70 per cent are hoping to relax and celebrate this winter holiday season with their family, spouse or partner while the rest are looking to end the year traveling with friends and long-not-met colleagues.','entertainment');
/*!40000 ALTER TABLE `textuploads` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-18  1:09:37
