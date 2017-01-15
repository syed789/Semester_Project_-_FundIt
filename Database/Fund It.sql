CREATE DATABASE  IF NOT EXISTS `fundit` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fundit`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: fundit
-- ------------------------------------------------------
-- Server version	5.6.35-log

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
-- Table structure for table `bank_account`
--

DROP TABLE IF EXISTS `bank_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bank_account` (
  `acount_number` varchar(255) NOT NULL,
  `account_title` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `branch_code` varchar(255) NOT NULL,
  `camp_id` int(11) NOT NULL,
  PRIMARY KEY (`acount_number`,`camp_id`),
  UNIQUE KEY `acount_number_UNIQUE` (`acount_number`),
  KEY `camp_id_account_idx` (`camp_id`),
  CONSTRAINT `camp_id_account` FOREIGN KEY (`camp_id`) REFERENCES `campaign` (`camp_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_account`
--

LOCK TABLES `bank_account` WRITE;
/*!40000 ALTER TABLE `bank_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `bank_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaign`
--

DROP TABLE IF EXISTS `campaign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaign` (
  `camp_id` int(11) NOT NULL AUTO_INCREMENT,
  `camp_name` varchar(255) NOT NULL,
  `camp_description` varchar(255) NOT NULL,
  `camp_story` varchar(255) NOT NULL,
  `camp_amount` varchar(255) NOT NULL,
  `camp_amount_raised` varchar(255) NOT NULL,
  `campaign_end_date` datetime NOT NULL,
  `camp_img1` varchar(255) NOT NULL,
  `camp_img2` varchar(255) NOT NULL,
  `camp_img3` varchar(255) NOT NULL,
  `camp_img4` varchar(255) NOT NULL,
  `camp_img5` varchar(255) NOT NULL,
  `camp_video` varchar(255) NOT NULL,
  `camp_attachment` varchar(255) NOT NULL,
  `camp_public` enum('0','1') NOT NULL,
  `org_id` varchar(255) NOT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `insta_link` varchar(255) DEFAULT NULL,
  `twiter_link` varchar(255) DEFAULT NULL,
  `google_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`camp_id`),
  UNIQUE KEY `camp_id_UNIQUE` (`camp_id`),
  KEY `org_id_camp_idx` (`org_id`),
  CONSTRAINT `org_id_camp` FOREIGN KEY (`org_id`) REFERENCES `organization` (`org_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign`
--

LOCK TABLES `campaign` WRITE;
/*!40000 ALTER TABLE `campaign` DISABLE KEYS */;
/*!40000 ALTER TABLE `campaign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donor` (
  `don_id` varchar(255) NOT NULL,
  `don_full_name` varchar(255) NOT NULL,
  `don_phone` varchar(255) NOT NULL,
  `don_country` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`don_id`),
  UNIQUE KEY `don_id_UNIQUE` (`don_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  CONSTRAINT `user_id_donor` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donor`
--

LOCK TABLES `donor` WRITE;
/*!40000 ALTER TABLE `donor` DISABLE KEYS */;
/*!40000 ALTER TABLE `donor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organization`
--

DROP TABLE IF EXISTS `organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organization` (
  `org_id` varchar(255) NOT NULL,
  `camp_name` varchar(255) NOT NULL,
  `org_phone` varchar(255) NOT NULL,
  `org_address` varchar(255) NOT NULL,
  `org_country` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`org_id`),
  UNIQUE KEY `camp_id_UNIQUE` (`org_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  CONSTRAINT `user_id_org` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization`
--

LOCK TABLES `organization` WRITE;
/*!40000 ALTER TABLE `organization` DISABLE KEYS */;
/*!40000 ALTER TABLE `organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_amount` decimal(15,3) NOT NULL,
  `pay_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pay_method` enum('0','1','2','3') NOT NULL,
  `camp_id` int(11) NOT NULL,
  `don_id` varchar(255) NOT NULL,
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `pay_id_UNIQUE` (`pay_id`),
  KEY `cmp_id_pay_idx` (`camp_id`),
  KEY `don_id_pay_idx` (`don_id`),
  CONSTRAINT `cmp_id_pay` FOREIGN KEY (`camp_id`) REFERENCES `campaign` (`camp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `don_id_pay` FOREIGN KEY (`don_id`) REFERENCES `donor` (`don_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_campaign_story`
--

DROP TABLE IF EXISTS `post_campaign_story`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_campaign_story` (
  `camp_id` int(11) NOT NULL,
  `campaign_story` text NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `video1` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`camp_id`),
  CONSTRAINT `camp_id_post_campaign_story` FOREIGN KEY (`camp_id`) REFERENCES `campaign` (`camp_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_campaign_story`
--

LOCK TABLES `post_campaign_story` WRITE;
/*!40000 ALTER TABLE `post_campaign_story` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_campaign_story` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('0','1','2') NOT NULL,
  `email` varchar(255) NOT NULL,
  `pasword` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `idusers_UNIQUE` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'fundit'
--

--
-- Dumping routines for database 'fundit'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-15  3:17:45
