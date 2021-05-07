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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tbl_user_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_access` (
  `uacc_id` int(100) NOT NULL AUTO_INCREMENT,
  `uacc_name` varchar(100) DEFAULT NULL,
  `uacc_deleted` smallint(1) DEFAULT '0',
  `uacc_active` smallint(1) DEFAULT '1',
  PRIMARY KEY (`uacc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  CONSTRAINT `fk_useraccountprofile` FOREIGN KEY (`uprof_id`) REFERENCES `tbl_user_profile` (`uprof_id`),
  CONSTRAINT `fk_useraccountaccess` FOREIGN KEY (`uacc_id`) REFERENCES `tbl_user_access` (`uacc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tbl_product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product_category` (
  `pcat_id` int(100) NOT NULL AUTO_INCREMENT,
  `pcat_name` varchar(100) DEFAULT NULL,
  `pcat_deleted` smallint(1) DEFAULT '0',
  `pcat_active` smallint(1) DEFAULT '1',
  PRIMARY KEY (`pcat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product` (
  `prod_id` int(100) NOT NULL AUTO_INCREMENT,
  `prod_name`varchar(100) DEFAULT NULL,
  `prod_dname` varchar(100) DEFAULT NULL,
  `prod_description` varchar(500) DEFAULT NULL,
  `prod_sprice` double(12,2) DEFAULT '0.00',
  `pcat_id` int(100) NOT NULL,
  `punt_id` int(100) NOT NULL,
  `prod_deleted` smallint(1) DEFAULT '0',
  `prod_active` smallint(1) DEFAULT '1',
  PRIMARY KEY (`prod_id`),
  KEY `fk_productcategory` (`pcat_id`),
  KEY `fk_productunit` (`punt_id`),
  CONSTRAINT `fk_productcategory` FOREIGN KEY (`pcat_id`) REFERENCES `tbl_product_category` (`pcat_id`),
  CONSTRAINT `fk_productunit` FOREIGN KEY (`punt_id`) REFERENCES `tbl_product_unit` (`punt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


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


DROP TABLE IF EXISTS `tbl_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_transaction` (
  `trans_id` int(100) NOT NULL AUTO_INCREMENT,
  `trans_timestamp` timestamp DEFAULT  CURRENT_TIMESTAMP,
  `uprof_id` int(100) NOT NULL,
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
  KEY `fk_profiletransaction` (`uprof_id`),
  KEY `fk_usertransaction` (`uaccnt_id`),
  CONSTRAINT `fk_profiletransaction` FOREIGN KEY (`uprof_id`) REFERENCES `tbl_user_profile` (`uprof_id`),
  CONSTRAINT `fk_usertransaction` FOREIGN KEY (`uaccnt_id`) REFERENCES `tbl_user_account` (`uaccnt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `tbl_transaction_detail`;
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
  CONSTRAINT `fk_transproduct` FOREIGN KEY (`prod_id`) REFERENCES `tbl_product` (`prod_id`),
  CONSTRAINT `fk_transdetails` FOREIGN KEY (`trans_id`) REFERENCES `tbl_transaction` (`trans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


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




