-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 02:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group2capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `prod_id` int(100) NOT NULL,
  `prod_name` varchar(100) DEFAULT NULL,
  `prod_dname` varchar(100) DEFAULT NULL,
  `prod_description` varchar(500) DEFAULT NULL,
  `prod_sprice` double(12,2) DEFAULT 0.00,
  `pcat_id` int(100) NOT NULL,
  `punt_id` int(100) NOT NULL,
  `prod_deleted` smallint(1) DEFAULT 0,
  `prod_active` smallint(1) DEFAULT 1,
  `prod_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`prod_id`, `prod_name`, `prod_dname`, `prod_description`, `prod_sprice`, `pcat_id`, `punt_id`, `prod_deleted`, `prod_active`, `prod_img`) VALUES
(0, 'Activity Shirt ', 'Activity Shirt ', 'Activity Shirt ', 250.00, 1, 1, 0, 1, 'Activity_Shirt.png'),
(1, 'SPCC Senior High School Uniform', 'Uniform (Male)', 'Grade 11 to Grade 12 School Uniform', 250.00, 1, 1, 0, 1, 'sp.jpg'),
(2, 'Uniform (Female)', 'Uniform (Female)', 'Uniform (Female)', 250.00, 1, 1, 0, 1, 'Female_Shirt.png'),
(3, 'P.E. Shirt', 'P.E. Shirt', 'P.E. Shirt', 350.00, 1, 1, 0, 1, 'Pe_Shirt.png'),
(4, 'P.E. Pants', 'P.E. Pants', 'P.E. Pants', 350.00, 1, 1, 0, 1, 'Pe_pants.png'),
(5, 'I.D. Lace', 'I.D. Lace', 'I.D. Lace', 100.00, 5, 1, 0, 1, 'ID_lace.png'),
(6, 'Flashdrive', 'Flashdrive', 'Flashdrive', 300.00, 5, 1, 0, 1, 'Flashdrive.jpg'),
(7, 'Blue ballpen', 'Blue Ballpen', 'Pen', 15.00, 2, 1, 0, 1, 'blue_pen.jpg'),
(8, 'Red ballpen', 'Red Ballpen', 'Pen', 15.00, 2, 1, 0, 1, 'red_pen.jpg'),
(9, 'Black ballpen', 'Black Ballpen', 'Pen', 15.00, 2, 1, 0, 1, 'blck_pen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_category`
--

CREATE TABLE `tbl_product_category` (
  `pcat_id` int(100) NOT NULL,
  `pcat_name` varchar(100) DEFAULT NULL,
  `pcat_deleted` smallint(1) DEFAULT 0,
  `pcat_active` smallint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`pcat_id`, `pcat_name`, `pcat_deleted`, `pcat_active`) VALUES
(1, 'Uniform', 0, 1),
(2, 'Pen', 0, 1),
(3, 'Paper', 0, 1),
(4, 'Art Materials', 0, 1),
(5, 'Accesories', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_supplier`
--

CREATE TABLE `tbl_product_supplier` (
  `psupp_id` int(100) NOT NULL,
  `psupp_name` varchar(100) DEFAULT NULL,
  `psupp_address` varchar(100) DEFAULT NULL,
  `psupp_contactnumber` varchar(100) DEFAULT NULL,
  `psupp_email` varchar(100) DEFAULT NULL,
  `psupp_contactperson` varchar(100) DEFAULT NULL,
  `psupp_contactdetails` varchar(100) DEFAULT NULL,
  `psupp_deleted` smallint(1) DEFAULT 0,
  `psupp_active` smallint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_unit`
--

CREATE TABLE `tbl_product_unit` (
  `punt_id` int(100) NOT NULL,
  `punt_name` varchar(100) DEFAULT NULL,
  `punt_code` varchar(5) DEFAULT NULL,
  `punt_deleted` smallint(1) DEFAULT 0,
  `punt_active` smallint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_unit`
--

INSERT INTO `tbl_product_unit` (`punt_id`, `punt_name`, `punt_code`, `punt_deleted`, `punt_active`) VALUES
(1, 'Piece', 'pcs', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_supp_relation`
--

CREATE TABLE `tbl_prod_supp_relation` (
  `psrel_id` int(100) NOT NULL,
  `prod_id` int(100) NOT NULL,
  `psupp_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ptrans_detail`
--

CREATE TABLE `tbl_ptrans_detail` (
  `tdet_id` int(100) NOT NULL,
  `trans_id` int(100) NOT NULL,
  `prod_id` int(100) NOT NULL,
  `tdet_qty` double(12,2) DEFAULT 0.00,
  `tdet_price` double(12,2) DEFAULT 0.00,
  `tdet_amount` double(12,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `trans_id` int(100) NOT NULL,
  `trans_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `trans_client` int(100) DEFAULT NULL,
  `trans_amount` double(32,4) DEFAULT 0.0000,
  `trans_tendered` double(32,4) DEFAULT 0.0000,
  `trans_change` double(32,4) DEFAULT 0.0000,
  `trans_discount` double(32,4) DEFAULT 0.0000,
  `ttype_id` int(100) NOT NULL,
  `trans_customer` smallint(1) DEFAULT 1,
  `trans_deleted` smallint(1) DEFAULT 0,
  `trans_cancelled` smallint(1) DEFAULT 1,
  `uaccnt_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction_type`
--

CREATE TABLE `tbl_transaction_type` (
  `ttype_id` int(100) NOT NULL,
  `ttype_name` varchar(100) DEFAULT NULL,
  `ttype_deleted` smallint(1) DEFAULT 0,
  `ttype_active` smallint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_access`
--

CREATE TABLE `tbl_user_access` (
  `uacc_id` int(100) NOT NULL,
  `uacc_name` varchar(100) DEFAULT NULL,
  `uacc_deleted` smallint(1) DEFAULT 0,
  `uacc_active` smallint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_access`
--

INSERT INTO `tbl_user_access` (`uacc_id`, `uacc_name`, `uacc_deleted`, `uacc_active`) VALUES
(1, 'Admin', 0, 1),
(2, 'Visitor', 0, 1),
(3, '', 0, 1),
(4, 'Student', 0, 1),
(5, 'Teacher', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_account`
--

CREATE TABLE `tbl_user_account` (
  `uaccnt_id` int(100) NOT NULL,
  `uprof_id` int(100) NOT NULL,
  `uaccnt_email` varchar(100) DEFAULT NULL,
  `uaccnt_pass` varchar(100) DEFAULT NULL,
  `uaccnt_verified` smallint(1) DEFAULT 0,
  `uacc_id` int(100) NOT NULL DEFAULT 1,
  `uacc_deleted` smallint(1) DEFAULT 0,
  `uacc_active` smallint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_account`
--

INSERT INTO `tbl_user_account` (`uaccnt_id`, `uprof_id`, `uaccnt_email`, `uaccnt_pass`, `uaccnt_verified`, `uacc_id`, `uacc_deleted`, `uacc_active`) VALUES
(2, 4, 'juan123@gmail.com', '12345678', 0, 1, 0, 1),
(3, 5, 'prado123@gmail.com', '12345678', 0, 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_profile`
--

CREATE TABLE `tbl_user_profile` (
  `uprof_id` int(100) NOT NULL,
  `uprof_fname` varchar(100) DEFAULT NULL,
  `uprof_mname` varchar(100) DEFAULT NULL,
  `uprof_lname` varchar(100) DEFAULT NULL,
  `uprof_gender` varchar(32) DEFAULT NULL,
  `uprof_idnum` varchar(100) DEFAULT NULL,
  `uprof_iddept` varchar(100) DEFAULT NULL,
  `uprof_deleted` smallint(1) DEFAULT 0,
  `uprof_active` smallint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_profile`
--

INSERT INTO `tbl_user_profile` (`uprof_id`, `uprof_fname`, `uprof_mname`, `uprof_lname`, `uprof_gender`, `uprof_idnum`, `uprof_iddept`, `uprof_deleted`, `uprof_active`) VALUES
(4, 'Juan', '', 'Dela Cruz', 'Male', NULL, NULL, 0, 1),
(5, 'Mervin', 'Dakila', 'Prado', 'Male', NULL, NULL, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `fk_productcategory` (`pcat_id`),
  ADD KEY `fk_productunit` (`punt_id`);

--
-- Indexes for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD PRIMARY KEY (`pcat_id`);

--
-- Indexes for table `tbl_product_supplier`
--
ALTER TABLE `tbl_product_supplier`
  ADD PRIMARY KEY (`psupp_id`);

--
-- Indexes for table `tbl_product_unit`
--
ALTER TABLE `tbl_product_unit`
  ADD PRIMARY KEY (`punt_id`);

--
-- Indexes for table `tbl_prod_supp_relation`
--
ALTER TABLE `tbl_prod_supp_relation`
  ADD PRIMARY KEY (`psrel_id`),
  ADD KEY `fk_productrelation` (`prod_id`),
  ADD KEY `fk_supplierrelation` (`psupp_id`);

--
-- Indexes for table `tbl_ptrans_detail`
--
ALTER TABLE `tbl_ptrans_detail`
  ADD PRIMARY KEY (`tdet_id`),
  ADD KEY `fk_transproduct` (`prod_id`),
  ADD KEY `fk_transdetail` (`trans_id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `fk_usertransaction` (`uaccnt_id`);

--
-- Indexes for table `tbl_transaction_type`
--
ALTER TABLE `tbl_transaction_type`
  ADD PRIMARY KEY (`ttype_id`);

--
-- Indexes for table `tbl_user_access`
--
ALTER TABLE `tbl_user_access`
  ADD PRIMARY KEY (`uacc_id`);

--
-- Indexes for table `tbl_user_account`
--
ALTER TABLE `tbl_user_account`
  ADD PRIMARY KEY (`uaccnt_id`),
  ADD KEY `fk_useraccountprofile` (`uprof_id`),
  ADD KEY `fk_useraccountaccess` (`uacc_id`);

--
-- Indexes for table `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  ADD PRIMARY KEY (`uprof_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `prod_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  MODIFY `pcat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_product_supplier`
--
ALTER TABLE `tbl_product_supplier`
  MODIFY `psupp_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product_unit`
--
ALTER TABLE `tbl_product_unit`
  MODIFY `punt_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_prod_supp_relation`
--
ALTER TABLE `tbl_prod_supp_relation`
  MODIFY `psrel_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ptrans_detail`
--
ALTER TABLE `tbl_ptrans_detail`
  MODIFY `tdet_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `trans_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaction_type`
--
ALTER TABLE `tbl_transaction_type`
  MODIFY `ttype_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_access`
--
ALTER TABLE `tbl_user_access`
  MODIFY `uacc_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user_account`
--
ALTER TABLE `tbl_user_account`
  MODIFY `uaccnt_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  MODIFY `uprof_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `fk_productcategory` FOREIGN KEY (`pcat_id`) REFERENCES `tbl_product_category` (`pcat_id`),
  ADD CONSTRAINT `fk_productunit` FOREIGN KEY (`punt_id`) REFERENCES `tbl_product_unit` (`punt_id`);

--
-- Constraints for table `tbl_prod_supp_relation`
--
ALTER TABLE `tbl_prod_supp_relation`
  ADD CONSTRAINT `fk_productrelation` FOREIGN KEY (`prod_id`) REFERENCES `tbl_product` (`prod_id`),
  ADD CONSTRAINT `fk_supplierrelation` FOREIGN KEY (`psupp_id`) REFERENCES `tbl_product_supplier` (`psupp_id`);

--
-- Constraints for table `tbl_ptrans_detail`
--
ALTER TABLE `tbl_ptrans_detail`
  ADD CONSTRAINT `fk_transdetails` FOREIGN KEY (`trans_id`) REFERENCES `tbl_transaction` (`trans_id`),
  ADD CONSTRAINT `fk_transproduct` FOREIGN KEY (`prod_id`) REFERENCES `tbl_product` (`prod_id`);

--
-- Constraints for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD CONSTRAINT `fk_usertransaction` FOREIGN KEY (`uaccnt_id`) REFERENCES `tbl_user_account` (`uaccnt_id`);

--
-- Constraints for table `tbl_user_account`
--
ALTER TABLE `tbl_user_account`
  ADD CONSTRAINT `fk_useraccountaccess` FOREIGN KEY (`uacc_id`) REFERENCES `tbl_user_access` (`uacc_id`),
  ADD CONSTRAINT `fk_useraccountprofile` FOREIGN KEY (`uprof_id`) REFERENCES `tbl_user_profile` (`uprof_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
