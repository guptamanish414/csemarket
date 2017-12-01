-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2016 at 10:42 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csemarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `contact`, `email`, `password`) VALUES
(1, 'Manish Kumar Gupta', '9883925313', 'manish414', '414');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `ccontact` varchar(50) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `cname`, `ccontact`, `cemail`, `cpassword`) VALUES
(1, 'Manish Kumar Gupta', '9883925313', 'gupta.manish414@gmail.com', '414'),
(2, 'Sandeep', '8643282819', 'sandy90', '90');

-- --------------------------------------------------------

--
-- Table structure for table `porder`
--

CREATE TABLE IF NOT EXISTS `porder` (
  `oid` int(6) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pprice` double NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `porder`
--

INSERT INTO `porder` (`oid`, `pid`, `cid`, `pprice`) VALUES
(4, 25, 2, 1000),
(7, 33, 2, 400),
(8, 33, 2, 400),
(9, 33, 2, 400);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `pprice` float NOT NULL,
  `pmodel` varchar(50) NOT NULL,
  `pdesc` varchar(50) NOT NULL,
  `pcat` varchar(50) NOT NULL,
  `pmfg` varchar(50) NOT NULL,
  `pstock` varchar(50) NOT NULL,
  `pimg1` varchar(50) NOT NULL,
  `pimg2` varchar(50) NOT NULL,
  `pqty` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pprice`, `pmodel`, `pdesc`, `pcat`, `pmfg`, `pstock`, `pimg1`, `pimg2`, `pqty`) VALUES
(31, 'Pendrive 32gb', 700, 'pdm2', 'pendrive 32 gb', 'Pen Drives', 'Sony', 'yes', 'corvette_mallett_concept_car-HD.jpg', '', 5),
(32, 'Speaker ', 30000, 'SM2', 'seaker desc2', 'PC Spekers', 'Zebronics', 'yes', 'BC7866_0.JPG', '', 2),
(33, 'Memory Card', 400, 'MC1', '16 GB Memory Card', 'Memory Cards', 'HP', 'yes', 'MC1.jpg', '', 1),
(34, 'Printer', 20000, 'PM1', 'Inkjet Printer', 'Printers', 'HP', 'yes', 'PR1.jpg', '', 3),
(35, 'Router', 9000, 'RM1', 'Router Connect ', 'Routers', 'Seagate', 'yes', 'RO1.jpg', '', 4),
(36, 'Joystick', 1500, 'JM1', 'Joystick Play', 'Joysticks', 'Samsung', 'yes', 'J1.jpg', '', 5),
(37, 'Monitor', 1200, 'MO1', 'Monitor LED', 'Monitors', 'LG', 'yes', 'MO1.jpg', '', 12),
(39, 'Speaker ', 2500, 'SM3', 'zebronics speaker', 'PC Spekers', 'Zebronics', 'yes', 'zebronics.jpg', '', 10),
(40, 'Hard Drive D1', 6000, 'HD1', 'seagate hard disk ', 'Hard Drives', 'Seagate', 'yes', 'HD1.jpg', '', 0),
(41, 'Laptop LLP2', 55000, 'LPM1', 'Laoptap Award lapi', 'Laptops', 'HP', 'yes', 'hp1.jpg', 'hp.jpg', 0),
(42, 'Laptop DDLL92', 25000, 'LPM2', 'Laoptap Dell lapi', 'Laptops', 'Dell', 'yes', 'dell.jpg', 'dell2.jpg', 0),
(43, 'Laptop SM1L7', 20000, 'LPM3', 'Samsung Lapi', 'Laptops', 'Samsung', 'no', 'samsung.jpg', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
