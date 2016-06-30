CREATE DATABASE  IF NOT EXISTS `lostNfoundDB` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lostNfoundDB`;
-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: lostNfoundDB
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
-- Table structure for table `Address`
--

DROP TABLE IF EXISTS `Address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Address` (
  `idAddress` int(11) NOT NULL AUTO_INCREMENT,
  `streetName` varchar(45) DEFAULT NULL,
  `houseNumber` varchar(45) DEFAULT NULL,
  `postalCode` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Address`
--

LOCK TABLES `Address` WRITE;
/*!40000 ALTER TABLE `Address` DISABLE KEYS */;
INSERT INTO `Address` VALUES (3,'tervuursevest 117','04','3001','Leuven','2313456897','ermu96@gmail.com'),(4,'tervuursevest 117','03','3001','Leuven','23134568986','mhretberhe@gmail.com'),(5,'tervuursevest 116','01','3001','Leuven','23134589897','mhretaabberhe.ayenew@student.kuleuven.be'),(6,'Andreas vesalius','0',NULL,'Leuven',NULL,NULL),(7,'Andreas vesalius','0',NULL,'Leuven',NULL,NULL),(8,'Andreas vesalius','0',NULL,'Leuven',NULL,NULL),(9,'rodozeoza','0',NULL,'leuven',NULL,NULL),(10,'Andreas vesalius\'','0',NULL,'Leuven',NULL,NULL);
/*!40000 ALTER TABLE `Address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Credential`
--

DROP TABLE IF EXISTS `Credential`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Credential` (
  `idCredential` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCredential`),
  KEY `fk_Credential_User_idx` (`userId`),
  CONSTRAINT `fk_Credential_User` FOREIGN KEY (`userId`) REFERENCES `User` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Credential`
--

LOCK TABLES `Credential` WRITE;
/*!40000 ALTER TABLE `Credential` DISABLE KEYS */;
INSERT INTO `Credential` VALUES (2,'Mhretaab','Mhretaab',2),(3,'Yonas','Yonas',3),(4,'Tesfaye','Tesfaye',4);
/*!40000 ALTER TABLE `Credential` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Item`
--

DROP TABLE IF EXISTS `Item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Item` (
  `idItem` int(11) NOT NULL AUTO_INCREMENT,
  `itemSubCategory` int(11) DEFAULT NULL,
  `itemName` varchar(45) DEFAULT NULL,
  `itemModel` varchar(45) DEFAULT NULL,
  `itemSerialNumber` varchar(45) DEFAULT NULL,
  `ItemColor` varchar(45) DEFAULT NULL,
  `itemPic` varchar(200) DEFAULT NULL,
  `itemDescription` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idItem`),
  KEY `fk_Item_subcategory_idx` (`itemSubCategory`),
  CONSTRAINT `fk_Item_subcategory` FOREIGN KEY (`itemSubCategory`) REFERENCES `subcategory` (`idSubCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Item`
--

LOCK TABLES `Item` WRITE;
/*!40000 ALTER TABLE `Item` DISABLE KEYS */;
INSERT INTO `Item` VALUES (2,43,'Samsung galaxy','s5','','black','Samsung_galaxy41855887955dcb4a74ce08.jpg',' '),(3,43,'Samsung galaxy','s6','','white','Samsung_galaxy197585674755dcb5f59c460.jpg',' It has scratch at its back'),(4,159,'Purse','','','Pink','Purse87890462255dcbc0f013ae.jpg',' '),(5,39,'cd','jklmjaozeru','133456','red','cd101430985455dcd61214585',' '),(6,43,'iphone','6','','white','iphone167413461355dd639ddc34c.jpg',' has scratch on the back');
/*!40000 ALTER TABLE `Item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Report`
--

DROP TABLE IF EXISTS `Report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Report` (
  `idReport` int(11) NOT NULL AUTO_INCREMENT,
  `reportType` varchar(10) DEFAULT NULL,
  `reportDate` date DEFAULT NULL,
  `itemId` int(11) DEFAULT NULL,
  `foundOrLostAddress` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `reportStatus` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idReport`),
  KEY `fk_Report_Item_idx` (`itemId`),
  KEY `fk_Report_User_idx` (`userId`),
  KEY `fk_Report_Address_idx` (`foundOrLostAddress`),
  CONSTRAINT `fk_Report_Address` FOREIGN KEY (`foundOrLostAddress`) REFERENCES `Address` (`idAddress`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Report_Item` FOREIGN KEY (`itemId`) REFERENCES `Item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Report_User` FOREIGN KEY (`userId`) REFERENCES `User` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Report`
--

LOCK TABLES `Report` WRITE;
/*!40000 ALTER TABLE `Report` DISABLE KEYS */;
INSERT INTO `Report` VALUES (2,'lost','2015-08-25',2,6,2,'open'),(3,'lost','2015-08-25',3,7,4,'open'),(4,'found','2015-08-25',4,8,3,'open'),(5,'found','2015-08-25',5,9,3,'open'),(6,'found','2015-08-26',6,10,3,'open');
/*!40000 ALTER TABLE `Report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `gender` varchar(2) DEFAULT NULL,
  `userPic` varchar(200) DEFAULT NULL,
  `addressId` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  KEY `fk_User_Address_idx` (`addressId`),
  CONSTRAINT `fk_User_Address` FOREIGN KEY (`addressId`) REFERENCES `Address` (`idAddress`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (2,'Mhretaab','Berhe','1986-09-18','M','Mhretaab113797910755dcb0b6803bd.jpg',3),(3,'Yonas','Tesfay','1987-12-03','M','Yonas200077267555dcb1b917ce2.jpg',4),(4,'Tesfaye','Benti','1983-06-14','M','Tesfaye184485498855dcb31762708.jpg',5);
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Animals'),(2,'Bags, Baggage, Luggage'),(3,'Clothing'),(4,'Collectors Items'),(5,'Electronics'),(6,'Household/Tools'),(7,'Jewelry'),(8,'Literature'),(9,'Media'),(10,'Medical'),(11,'Musical Equipment'),(12,'Personal Accessories'),(13,'Sporting Goods'),(14,'Tickets'),(15,'Toys'),(16,'Transportation'),(17,'Visual Art Related');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategory` (
  `idSubCategory` int(11) NOT NULL,
  `subCategoryName` varchar(45) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSubCategory`),
  KEY `fk_subcategory_category_idx` (`categoryId`),
  CONSTRAINT `fk_subcategory_category` FOREIGN KEY (`categoryId`) REFERENCES `category` (`idcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategory`
--

LOCK TABLES `subcategory` WRITE;
/*!40000 ALTER TABLE `subcategory` DISABLE KEYS */;
INSERT INTO `subcategory` VALUES (1,'Rabbits',1),(2,'Horses, Farm Animals',1),(3,'Hamsters, Guinea Pigs, etc',1),(4,'Ferrets',1),(5,'Birds',1),(6,'Reptiles',1),(7,'Cats',1),(8,'Dogs',1),(9,'Backpack, Knapsack',2),(10,'Canvas, Duffel, Sports Bags',2),(11,'Garment Bags',2),(12,'DOP Kit, Makeup Bag',2),(13,'Briefcase',2),(14,'Suitcase',2),(15,'Sweaters, Sweatshirts',3),(16,'Assorted Clothes, Laundry Bagss',3),(17,'Swimwear',3),(18,'Belts, Suspenders',3),(19,'Hats',3),(20,'Pants',3),(21,'Gloves, Mittens, Scarfs',3),(22,'Socks',3),(23,'Blazers, Coats, Jackets, Overcoats',3),(24,'Cumberbuns, Ties, Vests',3),(25,'Sandals, Shoes',3),(26,'Dresses, Gowns, Skirts',3),(27,'Shirts, Blouses',3),(28,'Rocks / Fossils / Minerals',4),(29,'Trading Cards',4),(30,'Historic Memorabilia',4),(31,'Military',4),(32,'Holiday / Seasonal',4),(33,'Coins',4),(34,'Stamps',4),(35,'Autograph',4),(36,'Animation Images',4),(37,'Comics',4),(38,'Knives And Swords',4),(39,'CD, DVD, MD, MP3 Players, Cassette Players',5),(40,'Electronic Organizers - Palm Pilot, Blackberr',5),(41,'Electronic - Miscellaneous Other',5),(42,'Beepers, Pagers',5),(43,'Cellular, Mobile Phones, Phones, WalkieTalkie',5),(44,'GPS, Radar Detectors',5),(45,'Video Game Systems - for games, see media',5),(46,'Radios, Televisions, VCRs',5),(47,'Computers',5),(48,'Cameras - Still, Digital, Video',5),(49,'Bedding, Sheets, Quilts, Drapes',6),(50,'Appliances',6),(51,'Hardware, Tools',6),(52,'General Crafts',6),(53,'Garden Related',6),(54,'Furniture',6),(55,'Carriages, Highchairs, Other',6),(56,'Household Products',6),(57,'Kitchen Items',6),(58,'Bracelets',7),(59,'Rings - Awards, Sports',7),(60,'Pens',7),(61,'Brooches, Medals, Pins',7),(62,'Earrings',7),(63,'Rings - Decorative, Generic',7),(64,'Chains, Necklaces',7),(65,'Watches',7),(66,'Rings - Engagement, Wedding',7),(67,'Jewelry - Miscellaneous',7),(68,'Rings - School Rings',7),(69,'Bible',8),(70,'School Books, Notebooks',8),(71,'Letters',8),(72,'Diaries, Memos',8),(73,'Books/Magazines/Correspondence',8),(74,'Yearbooks',8),(75,'Magazines',8),(76,'Media - Video: DVDs,Tapes',9),(77,'Computer Disks, Memory Sticks/Cards, Etc',9),(78,'Video Games',9),(79,'Media - Music: Cassettes,CDs,Records',9),(80,'Film - 35mm, Digital, Negatives',9),(81,'Medical Devices, Accessories',10),(82,'Hearing Aids',10),(83,'Dental Related',10),(84,'Canes, Crutches, Walkers',10),(85,'Amps, Mixers, Electronics',11),(86,'Percussion',11),(87,'Musical',11),(88,'Bass Guitars',11),(89,'Guitars',11),(90,'Recording Equipment',11),(91,'Brass',11),(92,'Woodwinds',11),(93,'Sheet Music',11),(94,'Keyboards',11),(95,'Strings',11),(96,'Daytimers, Organizers - not electronic',12),(97,'Keys',12),(98,'IDs, Credit Cards, Licenses, Passports',12),(99,'Certificates, Degrees, Diplomas, Titles',12),(100,'Glasses, Sunglasses, Cases and Binoculars',12),(101,'Lighters, Pipes, Smoking Related',12),(102,'Wallet',12),(103,'Personal Accessories - Other',12),(104,'Handbags, Purses',12),(105,'Umbrellas',12),(106,'Guns, Trap and Skeet',13),(107,'Fishing Related',13),(108,'Watersports Related - surfboards, etc.',13),(109,'Basketball Related',13),(110,'Bicycles',13),(111,'Ski Snowboard Equipment',13),(112,'Baseball Related',13),(113,'Tennis Related',13),(114,'Hockey, Field Hockey Related',13),(115,'Football Related',13),(116,'Soccer Related',13),(117,'Bowling Related',13),(118,'Golf Related',13),(119,'Sports - Miscellaneous Other',13),(120,'Archery Related',13),(121,'Bus',14),(122,'Wrestling',14),(123,'Cricket',14),(124,'Airline',14),(125,'Musical',14),(126,'Soccer',14),(127,'Ferry / Ship',14),(128,'Auto Racing',14),(129,'Theater',14),(130,'Football',14),(131,'Cinema / Movie',14),(132,'Theme Park',14),(133,'Hockey',14),(134,'Train',14),(135,'Basketball',14),(136,'Polo',14),(137,'Concert',14),(138,'Baseball',14),(139,'Golf',14),(140,'Other',14),(141,'Vehicles',15),(142,'Dolls / Stuffed Animals',15),(143,'Toys - Miscellaneous',15),(144,'Beach / Water Toys',15),(145,'Radio Controlled',15),(146,'Board Games',15),(147,'Action Figures',15),(148,'Rockets / Kites',15),(149,'Airplane Related',16),(150,'Trailers',16),(151,'Motorcycles, Scooters, Snowmobiles',16),(152,'Boating Related',16),(153,'Automobile',16),(154,'Architectural, Engineering, Design Print',17),(155,'Paintings',17),(156,'Sculptures / Statues',17),(157,'Photographs, Photo Albums',17),(158,'Drawings, Antique Prints',17),(159,'Purse',2);
/*!40000 ALTER TABLE `subcategory` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-26  9:43:08
