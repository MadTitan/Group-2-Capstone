-- MySQL dump 10.13  Distrib 5.5.60, for Win64 (AMD64)
--
-- Host: localhost    Database: group2capstone
-- ------------------------------------------------------
-- Server version	5.5.60

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
-- Table structure for table `tbl_prod_supp_relation`
--

DROP TABLE IF EXISTS `tbl_prod_supp_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_prod_supp_relation` (
  `psrel_id` int(100) NOT NULL AUTO_INCREMENT,
  `prod_id` int(100) NOT NULL,
  `psupp_id` int(100) NOT NULL,
  PRIMARY KEY (`psrel_id`),
  KEY `fk_productrelation` (`prod_id`),
  KEY `fk_supplierrelation` (`psupp_id`),
  CONSTRAINT `fk_productrelation` FOREIGN KEY (`prod_id`) REFERENCES `tbl_product` (`prod_id`),
  CONSTRAINT `fk_supplierrelation` FOREIGN KEY (`psupp_id`) REFERENCES `tbl_product_supplier` (`psupp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_prod_supp_relation`
--

LOCK TABLES `tbl_prod_supp_relation` WRITE;
/*!40000 ALTER TABLE `tbl_prod_supp_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_prod_supp_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product` (
  `prod_id` int(100) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) DEFAULT NULL,
  `prod_dname` varchar(100) DEFAULT NULL,
  `prod_description` varchar(500) DEFAULT NULL,
  `prod_sprice` double(12,2) DEFAULT '0.00',
  `pcat_id` int(100) NOT NULL,
  `punt_id` int(100) NOT NULL,
  `prod_deleted` smallint(1) DEFAULT '0',
  `prod_active` smallint(1) DEFAULT '1',
  `prod_img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`prod_id`),
  KEY `fk_productcategory` (`pcat_id`),
  KEY `fk_productunit` (`punt_id`),
  CONSTRAINT `fk_productcategory` FOREIGN KEY (`pcat_id`) REFERENCES `tbl_product_category` (`pcat_id`),
  CONSTRAINT `fk_productunit` FOREIGN KEY (`punt_id`) REFERENCES `tbl_product_unit` (`punt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (1,'SPCC Senior High School Uniform','SHS Uniform','Grade 11 to Grade 12 School Uniform',250.00,1,1,0,1,'uniform.jpg'),(2,'Black ballpen','Black Ballpen','Pen',15.00,2,1,0,1,'blck_pen.jpg'),(3,'Blue ballpen','Blue Ballpen','Pen',15.00,2,1,0,1,'blue_pen.jpg'),(4,'Red ballpen','Red Ballpen','Pen',15.00,2,1,0,1,'red_pen.jpg');
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product_category`
--

DROP TABLE IF EXISTS `tbl_product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product_category` (
  `pcat_id` int(100) NOT NULL AUTO_INCREMENT,
  `pcat_name` varchar(100) DEFAULT NULL,
  `pcat_deleted` smallint(1) DEFAULT '0',
  `pcat_active` smallint(1) DEFAULT '1',
  PRIMARY KEY (`pcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product_category`
--

LOCK TABLES `tbl_product_category` WRITE;
/*!40000 ALTER TABLE `tbl_product_category` DISABLE KEYS */;
INSERT INTO `tbl_product_category` VALUES (1,'Uniform',0,1),(2,'Pen',0,1),(3,'Paper',0,1),(4,'Art Materials',0,1);
/*!40000 ALTER TABLE `tbl_product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product_supplier`
--

DROP TABLE IF EXISTS `tbl_product_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product_supplier` (
  `psupp_id` int(100) NOT NULL AUTO_INCREMENT,
  `psupp_name` varchar(100) DEFAULT NULL,
  `psupp_address` varchar(100) DEFAULT NULL,
  `psupp_contactnumber` varchar(100) DEFAULT NULL,
  `psupp_email` varchar(100) DEFAULT NULL,
  `psupp_contactperson` varchar(100) DEFAULT NULL,
  `psupp_contactdetails` varchar(100) DEFAULT NULL,
  `psupp_deleted` smallint(1) DEFAULT '0',
  `psupp_active` smallint(1) DEFAULT '1',
  PRIMARY KEY (`psupp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product_supplier`
--

LOCK TABLES `tbl_product_supplier` WRITE;
/*!40000 ALTER TABLE `tbl_product_supplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_product_supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product_unit`
--

DROP TABLE IF EXISTS `tbl_product_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product_unit` (
  `punt_id` int(100) NOT NULL AUTO_INCREMENT,
  `punt_name` varchar(100) DEFAULT NULL,
  `punt_code` varchar(5) DEFAULT NULL,
  `punt_deleted` smallint(1) DEFAULT '0',
  `punt_active` smallint(1) DEFAULT '1',
  PRIMARY KEY (`punt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product_unit`
--

LOCK TABLES `tbl_product_unit` WRITE;
/*!40000 ALTER TABLE `tbl_product_unit` DISABLE KEYS */;
INSERT INTO `tbl_product_unit` VALUES (1,'Piece','pcs',0,1);
/*!40000 ALTER TABLE `tbl_product_unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ptrans_detail`
--

DROP TABLE IF EXISTS `tbl_ptrans_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ptrans_detail` (
  `tdet_id` int(100) NOT NULL AUTO_INCREMENT,
  `trans_id` int(100) NOT NULL,
  `prod_id` int(100) NOT NULL,
  `tdet_qty` double(12,2) DEFAULT '0.00',
  `tdet_price` double(12,2) DEFAULT '0.00',
  `tdet_amount` double(12,2) DEFAULT '0.00',
  PRIMARY KEY (`tdet_id`),
  KEY `fk_transproduct` (`prod_id`),
  KEY `fk_transdetail` (`trans_id`),
  CONSTRAINT `fk_transdetails` FOREIGN KEY (`trans_id`) REFERENCES `tbl_transaction` (`trans_id`),
  CONSTRAINT `fk_transproduct` FOREIGN KEY (`prod_id`) REFERENCES `tbl_product` (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ptrans_detail`
--

LOCK TABLES `tbl_ptrans_detail` WRITE;
/*!40000 ALTER TABLE `tbl_ptrans_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_ptrans_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_transaction`
--

DROP TABLE IF EXISTS `tbl_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_transaction` (
  `trans_id` int(100) NOT NULL AUTO_INCREMENT,
  `trans_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trans_client` int(100) DEFAULT NULL,
  `trans_amount` double(32,4) DEFAULT '0.0000',
  `trans_tendered` double(32,4) DEFAULT '0.0000',
  `trans_change` double(32,4) DEFAULT '0.0000',
  `trans_discount` double(32,4) DEFAULT '0.0000',
  `ttype_id` int(100) NOT NULL,
  `trans_customer` smallint(1) DEFAULT '1',
  `trans_deleted` smallint(1) DEFAULT '0',
  `trans_cancelled` smallint(1) DEFAULT '1',
  `uaccnt_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`trans_id`),
  KEY `fk_usertransaction` (`uaccnt_id`),
  CONSTRAINT `fk_usertransaction` FOREIGN KEY (`uaccnt_id`) REFERENCES `tbl_user_account` (`uaccnt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_transaction`
--

LOCK TABLES `tbl_transaction` WRITE;
/*!40000 ALTER TABLE `tbl_transaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_transaction_type`
--

DROP TABLE IF EXISTS `tbl_transaction_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_transaction_type` (
  `ttype_id` int(100) NOT NULL AUTO_INCREMENT,
  `ttype_name` varchar(100) DEFAULT NULL,
  `ttype_deleted` smallint(1) DEFAULT '0',
  `ttype_active` smallint(1) DEFAULT '1',
  PRIMARY KEY (`ttype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_transaction_type`
--

LOCK TABLES `tbl_transaction_type` WRITE;
/*!40000 ALTER TABLE `tbl_transaction_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_transaction_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_access`
--

DROP TABLE IF EXISTS `tbl_user_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_access` (
  `uacc_id` int(100) NOT NULL AUTO_INCREMENT,
  `uacc_name` varchar(100) DEFAULT NULL,
  `uacc_deleted` smallint(1) DEFAULT '0',
  `uacc_active` smallint(1) DEFAULT '1',
  PRIMARY KEY (`uacc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_access`
--

LOCK TABLES `tbl_user_access` WRITE;
/*!40000 ALTER TABLE `tbl_user_access` DISABLE KEYS */;
INSERT INTO `tbl_user_access` VALUES (1,'Admin',0,1),(2,'Visitor',0,1),(3,'',0,1),(4,'Student',0,1),(5,'Teacher',0,1);
/*!40000 ALTER TABLE `tbl_user_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_account`
--

DROP TABLE IF EXISTS `tbl_user_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_account` (
  `uaccnt_id` int(100) NOT NULL AUTO_INCREMENT,
  `uprof_id` int(100) NOT NULL,
  `uaccnt_email` varchar(100) DEFAULT NULL,
  `uaccnt_pass` varchar(100) DEFAULT NULL,
  `uaccnt_verified` smallint(1) DEFAULT '0',
  `uacc_id` int(100) NOT NULL DEFAULT '1',
  `uacc_deleted` smallint(1) DEFAULT '0',
  `uacc_active` smallint(1) DEFAULT '1',
  PRIMARY KEY (`uaccnt_id`),
  KEY `fk_useraccountprofile` (`uprof_id`),
  KEY `fk_useraccountaccess` (`uacc_id`),
  CONSTRAINT `fk_useraccountaccess` FOREIGN KEY (`uacc_id`) REFERENCES `tbl_user_access` (`uacc_id`),
  CONSTRAINT `fk_useraccountprofile` FOREIGN KEY (`uprof_id`) REFERENCES `tbl_user_profile` (`uprof_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_account`
--

LOCK TABLES `tbl_user_account` WRITE;
/*!40000 ALTER TABLE `tbl_user_account` DISABLE KEYS */;
INSERT INTO `tbl_user_account` VALUES (2,4,'juan123@gmail.com','12345678',0,1,0,1),(3,5,'prado123@gmail.com','12345678',0,2,0,1);
/*!40000 ALTER TABLE `tbl_user_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_profile`
--

DROP TABLE IF EXISTS `tbl_user_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_profile` (
  `uprof_id` int(100) NOT NULL AUTO_INCREMENT,
  `uprof_fname` varchar(100) DEFAULT NULL,
  `uprof_mname` varchar(100) DEFAULT NULL,
  `uprof_lname` varchar(100) DEFAULT NULL,
  `uprof_gender` varchar(32) DEFAULT NULL,
  `uprof_idnum` varchar(100) DEFAULT NULL,
  `uprof_iddept` varchar(100) DEFAULT NULL,
  `uprof_deleted` smallint(1) DEFAULT '0',
  `uprof_active` smallint(1) DEFAULT '1',
  PRIMARY KEY (`uprof_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_profile`
--

LOCK TABLES `tbl_user_profile` WRITE;
/*!40000 ALTER TABLE `tbl_user_profile` DISABLE KEYS */;
INSERT INTO `tbl_user_profile` VALUES (4,'Juan','','Dela Cruz','Male',NULL,NULL,0,1),(5,'Mervin','Dakila','Prado','Male',NULL,NULL,0,1);
/*!40000 ALTER TABLE `tbl_user_profile` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-19  1:52:30
