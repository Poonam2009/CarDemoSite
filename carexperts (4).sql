-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2016 at 12:20 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carexperts`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpart`
--

CREATE TABLE IF NOT EXISTS `addpart` (
  `part_id` int(11) NOT NULL AUTO_INCREMENT,
  `part_name` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`part_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `addpart`
--

INSERT INTO `addpart` (`part_id`, `part_name`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 'Engine Oil', '2016-03-11 07:21:06', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-43-15-7C'),
(2, 'Oil Filter22', '2016-03-11 07:46:05', 'admin', '2016-03-11 08:00:16', 'admin', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `add_interval`
--

CREATE TABLE IF NOT EXISTS `add_interval` (
  `interval_id` int(11) NOT NULL AUTO_INCREMENT,
  `interval_name` varchar(255) NOT NULL,
  `more_info` varchar(555) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`interval_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `add_interval`
--

INSERT INTO `add_interval` (`interval_id`, `interval_name`, `more_info`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, '10,000 KMS OR 4 MONTH', '<p>Engine Repair Gair Repair;</p><p>Engine Repair Gair Repair;</p><p>&nbsp;</p><p>&nbsp;</p>', '2016-03-21 12:04:59', 'admin', '2016-03-21 04:14:29', 'admin', '::1', '8C-DC-D4-40-74-44'),
(2, '20,000 KMS OR 8 MONTHS', 'Engine Repair Clutch Repair Brake Repair Gair Repair ghjgf jhfdsgnjd', '2016-03-21 12:28:07', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(3, '30,000 KMS OR 12 MONTHS', '<p>default textarea value</p><p>default textarea value</p>', '2016-03-21 08:07:30', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `add_location`
--

CREATE TABLE IF NOT EXISTS `add_location` (
  `loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `add_location`
--

INSERT INTO `add_location` (`loc_id`, `location_name`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 'gurgaon', '2016-03-17 07:19:16', 'admin', '2016-03-17 07:40:00', 'admin', '::1', '8C-DC-D4-40-74-44'),
(2, 'Delhi / NCR', '2016-03-17 07:26:28', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `add_service`
--

CREATE TABLE IF NOT EXISTS `add_service` (
  `aservice_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(30) NOT NULL,
  `make` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `varient` varchar(30) NOT NULL,
  `service_catg` varchar(100) NOT NULL,
  `service_pcatg` varchar(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `no_of_labour` varchar(30) NOT NULL,
  `labour_hour` varchar(30) NOT NULL,
  `labour_fxdprice` decimal(12,2) NOT NULL,
  `service_desc` text NOT NULL,
  `do_in_service` text NOT NULL,
  `when_necessary` text NOT NULL,
  `notes` text NOT NULL,
  `gen_parts` text NOT NULL,
  `alt_parts` text NOT NULL,
  `relopt_services` text NOT NULL,
  `check_point` text NOT NULL,
  `related_blog` text NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`aservice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `add_service`
--

INSERT INTO `add_service` (`aservice_id`, `year`, `make`, `model`, `varient`, `service_catg`, `service_pcatg`, `service_name`, `no_of_labour`, `labour_hour`, `labour_fxdprice`, `service_desc`, `do_in_service`, `when_necessary`, `notes`, `gen_parts`, `alt_parts`, `relopt_services`, `check_point`, `related_blog`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, '1', '1', '1', '1', '1', 'ywuteyruw', 'stage2', 'workshop dependent', '4', '600.00', '<p>General Service Schedule</p><p>Auto technicians say the key to keeping vehicles running well-today and down the road-is routine maintenance. Yet many drivers tend to stall when it comes to keeping up with some everyday auto-basics. A<a target="_blank" href="http://www.carcare.org/2015/03/april-is-national-car-care-monthspring-for-vehicle-maintenance/">&nbsp;recent survey</a>&nbsp;by the Car Care Council found:</p><ul><li><strong>25%</strong>&nbsp;of cars had low or dirty engine oil.</li><li><strong>13%</strong>&nbsp;had low or contaminated brake fluid.</li><li><strong>18%</strong>&nbsp;had dirty air filters.</li><li><strong>17%</strong>&nbsp;had inadequate cooling protection or low coolant levels.</li><li><strong>16%&nbsp;</strong>needed new windshield wiper and&nbsp;<strong>27%</strong>&nbsp;had low or contaminated washer fluid.</li><li><strong>18%</strong>&nbsp;needed new belts</li></ul><p>Overall,&nbsp;<strong>89%</strong>&nbsp;of vehicles were in need of at least one service or repair.</p>', '<p>General Service Schedule</p><p>Auto technicians say the key to keeping vehicles running well-today and down the road-is routine maintenance. Yet many drivers tend to stall when it comes to keeping up with some everyday auto-basics. A<a target="_blank" href="http://www.carcare.org/2015/03/april-is-national-car-care-monthspring-for-vehicle-maintenance/">&nbsp;recent survey</a>&nbsp;by the Car Care Council found:</p><ul><li><strong>25%</strong>&nbsp;of cars had low or dirty engine oil.</li><li><strong>13%</strong>&nbsp;had low or contaminated brake fluid.</li><li><strong>18%</strong>&nbsp;had dirty air filters.</li><li><strong>17%</strong>&nbsp;had inadequate cooling protection or low coolant levels.</li><li><strong>16%&nbsp;</strong>needed new windshield wiper and&nbsp;<strong>27%</strong>&nbsp;had low or contaminated washer fluid.</li><li><strong>18%</strong>&nbsp;needed new belts</li></ul><p>Overall,&nbsp;<strong>89%</strong>&nbsp;of vehicles were in need of at least one service or repair.</p>', '<p>General Service Schedule</p><p>Auto technicians say the key to keeping vehicles running well-today and down the road-is routine maintenance. Yet many drivers tend to stall when it comes to keeping up with some everyday auto-basics. A<a target="_blank" href="http://www.carcare.org/2015/03/april-is-national-car-care-monthspring-for-vehicle-maintenance/">&nbsp;recent survey</a>&nbsp;by the Car Care Council found:</p><ul><li><strong>25%</strong>&nbsp;of cars had low or dirty engine oil.</li><li><strong>13%</strong>&nbsp;had low or contaminated brake fluid.</li><li><strong>18%</strong>&nbsp;had dirty air filters.</li><li><strong>17%</strong>&nbsp;had inadequate cooling protection or low coolant levels.</li><li><strong>16%&nbsp;</strong>needed new windshield wiper and&nbsp;<strong>27%</strong>&nbsp;had low or contaminated washer fluid.</li><li><strong>18%</strong>&nbsp;needed new belts</li></ul><p>Overall,&nbsp;<strong>89%</strong>&nbsp;of vehicles were in need of at least one service or repair.</p>', '<p>General Service Schedule</p><p>Auto technicians say the key to keeping vehicles running well-today and down the road-is routine maintenance. Yet many drivers tend to stall when it comes to keeping up with some everyday auto-basics. A<a target="_blank" href="http://www.carcare.org/2015/03/april-is-national-car-care-monthspring-for-vehicle-maintenance/">&nbsp;recent survey</a>&nbsp;by the Car Care Council found:</p><ul><li><strong>25%</strong>&nbsp;of cars had low or dirty engine oil.</li><li><strong>13%</strong>&nbsp;had low or contaminated brake fluid.</li><li><strong>18%</strong>&nbsp;had dirty air filters.</li><li><strong>17%</strong>&nbsp;had inadequate cooling protection or low coolant levels.</li><li><strong>16%&nbsp;</strong>needed new windshield wiper and&nbsp;<strong>27%</strong>&nbsp;had low or contaminated washer fluid.</li><li><strong>18%</strong>&nbsp;needed new belts</li></ul><p>Overall,&nbsp;<strong>89%</strong>&nbsp;of vehicles were in need of at least one service or repair.</p>', 'dfgd', 'dfg', 'fdg', 'fdg', 'fd', '2016-03-19 08:07:42', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `add_year`
--

CREATE TABLE IF NOT EXISTS `add_year` (
  `year_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`year_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `add_year`
--

INSERT INTO `add_year` (`year_id`, `year`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, '2016', '2016-03-18 12:11:33', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(2, '2015', '2016-03-18 12:29:28', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `business_type`
--

CREATE TABLE IF NOT EXISTS `business_type` (
  `business_id` int(11) NOT NULL AUTO_INCREMENT,
  `business_name` varchar(250) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`business_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `business_type`
--

INSERT INTO `business_type` (`business_id`, `business_name`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(6, 'Dealer', '2016-03-14 08:30:55', 'admin', '2016-03-15 10:27:31', 'admin', '::1', '8C-DC-D4-43-15-7C'),
(7, 'Independent', '2016-03-14 08:33:59', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-43-15-7C'),
(8, 'Franchise', '2016-03-14 08:34:20', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-43-15-7C'),
(9, 'indiv2', '2016-03-15 02:55:51', 'admin', '2016-03-15 02:55:58', 'admin', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `customer_register`
--

CREATE TABLE IF NOT EXISTS `customer_register` (
  `cust_register_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_pwd` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0=inactive,1=active',
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`cust_register_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer_register`
--

INSERT INTO `customer_register` (`cust_register_id`, `username`, `email`, `password`, `confirm_pwd`, `status`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 'customer1', 'test@gmail.com', '123456', '123456', '1', '2016-03-12 08:15:47', '', '2016-03-15 02:08:40', 'admin', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `facility_type`
--

CREATE TABLE IF NOT EXISTS `facility_type` (
  `facility_id` int(11) NOT NULL AUTO_INCREMENT,
  `facility_name` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`facility_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `facility_type`
--

INSERT INTO `facility_type` (`facility_id`, `facility_name`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 'Customer Lounge', '2016-03-15 12:05:48', 'admin', '2016-03-15 12:36:26', 'admin', '::1', '8C-DC-D4-43-15-7C'),
(2, 'Pick & Drop', '2016-03-15 12:36:38', 'admin', '2016-03-15 12:36:48', 'admin', '::1', '8C-DC-D4-43-15-7C'),
(3, 'Service Warranty', '2016-03-15 12:37:02', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-43-15-7C'),
(4, 'Tea & Coffee', '2016-03-15 12:37:20', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-43-15-7C'),
(5, 'samosa and pani puri', '2016-03-15 02:56:18', 'admin', '2016-03-15 02:56:32', 'admin', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE IF NOT EXISTS `make` (
  `make_id` int(11) NOT NULL AUTO_INCREMENT,
  `make_name` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`make_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`make_id`, `make_name`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 'AUDI', '2016-03-05 01:05:07', '', '2016-03-05 01:59:38', '', '::1', '8C-DC-D4-40-74-44'),
(2, 'Bajaj', '2016-03-05 01:05:07', '', '2016-03-05 02:05:11', '', '::1', '8C-DC-D4-40-74-44'),
(3, 'Honda', '2016-03-05 01:05:07', '', '2016-03-05 02:04:07', '', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `make_model_mapp`
--

CREATE TABLE IF NOT EXISTS `make_model_mapp` (
  `make_model_mapp_id` int(11) NOT NULL AUTO_INCREMENT,
  `make_id` varchar(100) NOT NULL,
  `model_id` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`make_model_mapp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `make_model_mapp`
--

INSERT INTO `make_model_mapp` (`make_model_mapp_id`, `make_id`, `model_id`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, '1', '1', '2016-03-05 05:20:49', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(2, '2', '3', '2016-03-07 03:31:41', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `model_name`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 'tyt', '2016-03-05 03:18:38', '', '2016-03-05 03:32:06', '', '::1', '8C-DC-D4-40-74-44'),
(2, 'bvncbnc', '2016-03-05 03:31:54', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(3, 'test', '2016-03-07 01:14:16', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(4, 'pulsar', '2016-03-07 01:19:24', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(100) NOT NULL,
  `prod_make` varchar(100) NOT NULL,
  `prod_model` varchar(100) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_description` text NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `prod_image` text NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `cat_id`, `prod_make`, `prod_model`, `prod_name`, `prod_description`, `prod_price`, `prod_image`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, '1', '1', '2', 'Brake Discs', 'ghnhjdjfygjkyukmv fgmjftgjkgtc fjtyjt fjmghmcf', '12345.00', '2PcwotSj.png', '2016-03-08 04:41:07', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-43-15-7C'),
(2, '1', '1', '3', 'brake disk', 'dfgdfg fdgfd', '600.00', 'task sheet.jpg', '2016-03-09 10:53:29', 'admin', '2016-03-09 11:05:16', 'admin', '::1', '8C-DC-D4-40-74-44'),
(3, '1', '1', '2', 'wwwwwwwww', 'ffbf', '60.00', 'Gyanshree__logo_jpg1.png', '2016-03-09 03:51:33', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(4, '1', '2', '3', 'ttttttt', 'ghg', '70.00', 'Gyanshree__logo_jpg2.png', '2016-03-09 04:05:46', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(5, '2', '3', '4', 'ret', 'cx', '600.00', 'download3.jpg', '2016-03-09 04:12:20', 'admin', '2016-03-09 04:28:11', 'admin', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`cat_id`, `cat_name`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 'Brakes & Suspension', '2016-03-07 06:48:30', 'admin', '2016-03-08 11:01:45', 'admin', '::1', '8C-DC-D4-40-74-44'),
(2, 'Auto Body Parts & Mirrors', '2016-03-08 10:31:06', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(3, 'parts', '2016-03-17 05:36:12', 'admin', '2016-03-17 05:41:08', 'admin', '::1', '8C-DC-D4-40-74-44'),
(4, 'ghf hfhg & jgjhg', '2016-03-17 05:48:56', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `service_catg`
--

CREATE TABLE IF NOT EXISTS `service_catg` (
  `scatg_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_catg` varchar(100) NOT NULL,
  `service_pcatg` varchar(100) NOT NULL,
  `make` varchar(255) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`scatg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `service_catg`
--

INSERT INTO `service_catg` (`scatg_id`, `service_catg`, `service_pcatg`, `make`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 'Repair', '2', '1|2', '2016-03-19 04:49:46', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(2, 'serviceing', '1', NULL, '2016-03-19 04:51:16', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `service_name`
--

CREATE TABLE IF NOT EXISTS `service_name` (
  `sname_id` int(11) NOT NULL AUTO_INCREMENT,
  `stype_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `part_name` varchar(100) NOT NULL,
  `part_type` varchar(50) NOT NULL,
  `labour_cost` decimal(10,2) NOT NULL,
  `is_active` enum('0','1') NOT NULL COMMENT '0-Inactive,1-Active',
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`sname_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `service_name`
--

INSERT INTO `service_name` (`sname_id`, `stype_id`, `service_name`, `part_name`, `part_type`, `labour_cost`, `is_active`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 1, 'Engine Oil', '2', '', '650.00', '0', '2016-03-08 02:49:18', 'admin', '2016-03-08 04:15:02', 'admin', '::1', '8C-DC-D4-40-74-44'),
(2, 1, 'Oil Filter', '1', '', '1200.00', '0', '2016-03-08 03:21:02', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(3, 2, 'fddgd', '3', '', '700.00', '0', '2016-03-08 03:22:42', 'admin', '2016-03-08 04:12:56', 'admin', '::1', '8C-DC-D4-40-74-44'),
(4, 1, 'dd', '2', '', '600.00', '0', '2016-03-11 08:24:17', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(5, 3, 'fddf', '1', '', '600.00', '0', '2016-03-16 03:55:43', 'admin', '2016-03-16 03:56:01', 'admin', '::1', '8C-DC-D4-40-74-44'),
(6, 1, 'test', '1', '', '600.00', '0', '2016-03-17 03:08:02', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(7, 2, 'tetre', '1', 'GENUINE', '-870.00', '0', '2016-03-17 03:09:14', 'admin', '2016-03-17 04:09:23', 'admin', '::1', '8C-DC-D4-40-74-44'),
(8, 1, 'ertet', '2', 'ALTERNATE', '-89.00', '0', '2016-03-17 03:22:06', 'admin', '2016-03-17 04:07:00', 'admin', '::1', '8C-DC-D4-40-74-44'),
(9, 2, 'erte', '2', 'GENUINE', '-90.00', '0', '2016-03-17 03:31:31', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(10, 1, '65', '1', 'GENUINE', '3.45', '0', '2016-03-17 03:40:34', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE IF NOT EXISTS `service_type` (
  `stype_id` int(11) NOT NULL AUTO_INCREMENT,
  `stype_name` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`stype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`stype_id`, `stype_name`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 'Oil Change Service', '2016-03-07 04:22:14', 'admin', '2016-03-07 04:38:20', 'admin', '::1', '8C-DC-D4-40-74-44'),
(2, 'Oil Change Service2', '2016-03-07 06:04:05', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(3, 'Electrical Repair', '2016-03-08 05:30:19', 'admin', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `user_img` varchar(500) NOT NULL,
  `active_status` enum('0','1') NOT NULL COMMENT '0=Inactive,1=Active',
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_group`, `ref_id`, `user_name`, `user_email`, `user_password`, `display_name`, `contact_no`, `user_img`, `active_status`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 0, 0, 'admin', 'admin@carexperts.com', '123456', '', '', '', '0', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `varient`
--

CREATE TABLE IF NOT EXISTS `varient` (
  `varient_id` int(11) NOT NULL AUTO_INCREMENT,
  `varient_name` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`varient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `varient`
--

INSERT INTO `varient` (`varient_id`, `varient_name`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 'Ford', '2016-03-18 03:01:37', 'admin', '2016-03-18 03:38:37', 'admin', '::1', '8C-DC-D4-40-74-44'),
(2, 'Xclusive', '2016-03-18 03:32:15', 'admin', '2016-03-18 03:38:51', 'admin', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_details`
--

CREATE TABLE IF NOT EXISTS `workshop_details` (
  `wshop_id` int(11) NOT NULL AUTO_INCREMENT,
  `wshop_name` varchar(100) NOT NULL,
  `wshop_location` varchar(100) NOT NULL,
  `wshop_category` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login_username` varchar(50) NOT NULL,
  `login_password` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0=inactive,1=active',
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`wshop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `workshop_details`
--

INSERT INTO `workshop_details` (`wshop_id`, `wshop_name`, `wshop_location`, `wshop_category`, `phone_no`, `email`, `login_username`, `login_password`, `status`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, 'workshop1', 'south delhi', 'Basic', '1234567890', '', 'wsh1', '456789', '0', '2016-03-09 05:37:40', 'admin', '2016-03-09 06:23:59', 'admin', '::1', '8C-DC-D4-40-74-44');

-- --------------------------------------------------------

--
-- Table structure for table `wshop_register`
--

CREATE TABLE IF NOT EXISTS `wshop_register` (
  `wshop_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_type` varchar(100) NOT NULL,
  `mob_machnic` varchar(100) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `tin` varchar(100) NOT NULL,
  `service_tax` varchar(100) NOT NULL,
  `wshop_address` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `phn_no` varchar(20) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `makes` varchar(500) DEFAULT NULL,
  `models` varchar(500) DEFAULT NULL,
  `services` varchar(100) DEFAULT NULL,
  `facility` varchar(100) DEFAULT NULL,
  `mon` varchar(100) NOT NULL,
  `tues` varchar(100) NOT NULL,
  `wed` varchar(100) NOT NULL,
  `thrus` varchar(100) NOT NULL,
  `fri` varchar(100) NOT NULL,
  `sat` varchar(100) NOT NULL,
  `sun` varchar(100) NOT NULL,
  `std_labour_rate` varchar(100) NOT NULL,
  `service_fee` varchar(100) NOT NULL,
  `dis_geniune_parts` varchar(100) NOT NULL,
  `dis_alternate_parts` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0=inactive,1=active',
  `created_on` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  PRIMARY KEY (`wshop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `wshop_register`
--

INSERT INTO `wshop_register` (`wshop_id`, `b_type`, `mob_machnic`, `b_name`, `tin`, `service_tax`, `wshop_address`, `owner_name`, `phn_no`, `mobile_no`, `website`, `email`, `makes`, `models`, `services`, `facility`, `mon`, `tues`, `wed`, `thrus`, `fri`, `sat`, `sun`, `std_labour_rate`, `service_fee`, `dis_geniune_parts`, `dis_alternate_parts`, `status`, `created_on`, `created_by`, `modified_on`, `modified_by`, `ip_address`, `mac_address`) VALUES
(1, '6', 'yes', 'business name', '6', '60', 'delhi', 'car owner', '1234567890', '7836834808', 'www.google.com', 'test@gmail.com', '1|2', NULL, '1|2|3', '1|2|3|5', 'on|10:30|10:30', 'on||', '||', '||', '||', '||', '||', '54', '45', '543', '544', '1', '2016-03-16 11:30:59', '', '2016-03-16 08:26:13', 'admin', '::1', '8C-DC-D4-40-74-44'),
(2, '6', 'yes', 'dgfd', 'df', 'df', 'fdgdf', 'df', '', '', '', '', '1|2', NULL, '1|2|3', '1|2|3|5', 'on|10:30|10:30', '||', '||', '||', '||', '||', '||', '54', '45', '45', '45', '0', '2016-03-16 11:56:50', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(3, '6', 'No', 'dgd', 'df', 'fd', 'fd', 'df', '4534', '3453', '34', '34', '1|2', NULL, '1|3', '1|3|5', 'on|10:30|18:07', '||', '||', '||', '||', '||', '||', '5465', '543', '45', '45', '0', '2016-03-16 12:08:06', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(4, '8', 'No', 'fdd', '433', 'fd', 'dsdsfs', 'car owner', '1234567890', '7836834808', 'www.google.com', 'test@gmail.com', '1|2', NULL, '1|3', '1|3|5', 'on|10:30|16:05', '||', '||', '||', '||', '||', '||', '54', '54', '54', '54', '0', '2016-03-16 12:14:02', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(5, '8', 'yes', 'dfgdfr', 'fd', 'fdg', 'fd', 'df', 'fd', 'fd', 'fd', 'test@gmail.com', '1|2', NULL, '1|3', '1|3|5', 'on|04:07|18:07', '||', '||', '||', '||', '||', '||', '54', '54', '45', '54', '0', '2016-03-16 12:25:51', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(6, '6', 'No', 'dfg', 'fd', 'df', 'fd', 'fd', 'df', '65', 'fd', 'df', '1|2', NULL, '1|3', '1|3', 'on|01:03|16:05', '||', '||', '||', '||', '||', '||', '54', '54', '54', '54', '0', '2016-03-16 12:30:40', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(7, '7', 'yes', 'fg', 'gf', 'fg', 'gf', 'gf', 'gf', 'gf', 'gf', 'gf', '1', NULL, '1|3', '1|3|5', 'on|10:30|18:05', '||', '||', '||', '||', '||', '||', '65', '65', '65', '65', '0', '2016-03-16 12:38:29', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(8, '6', 'No', 'df', 'fd', '', 'df', '', 'df', 'df', 'fd', 'test@gmail.com', '1|2', NULL, '1|2', '1', '||', '||', '||', '||', '||', '||', '||', '', '', '', '', '0', '2016-03-16 01:19:49', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(9, '7', 'No', 'gffd', 'df', 'df', 'df', '', '', '', '', '', '', NULL, '1', '1', 'on|04:05|17:06', '||', '||', '||', '||', '||', '||', '54', '', '54', '', '0', '2016-03-16 01:30:57', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(10, '6', 'No', 'sdfs', '', '', 'sdfs', 'sd', 'ds', 'ds', 'ds', '', '', NULL, '1|3', '1|3|5', '||', '||', '||', '||', '||', '||', '||', '543', '', '', '', '0', '2016-03-16 01:33:56', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(11, '6', 'No', 'dfgd', 'df', 'df', 'fd', 'fdgd', 'df', 'df', 'df', 'df', '1|2', NULL, '1|3', '1|3', 'on|04:05|18:04', '||', '||', '||', '||', '||', '||', '45', '3', '34', '', '0', '2016-03-16 01:49:53', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(12, '6', 'No', 'fgfggf', 'gf', '', '', '', '', '', '', '', NULL, NULL, NULL, '1', '||', '||', '||', '||', '||', '||', '||', '546', '', '', '', '0', '2016-03-16 02:35:38', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44'),
(13, '6', 'No', 'dffd', 'fd', 'fd', 'fd', 'fdgd', '544', '132432432', 'fdgd', 'fghh@gmail.com', '1|2|3', '1|4', '1|3', '1|3', 'on|03:04|17:04', '||', '||', '||', '||', '||', '||', '4', '43', '43', '34', '0', '2016-03-16 08:08:39', '', '0000-00-00 00:00:00', '', '::1', '8C-DC-D4-40-74-44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
