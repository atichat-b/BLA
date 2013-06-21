-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2013 at 07:34 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bla`
--

-- --------------------------------------------------------

--
-- Table structure for table `bla_customer`
--

CREATE TABLE IF NOT EXISTS `bla_customer` (
  `Customer_ID` int(5) NOT NULL AUTO_INCREMENT,
  `F_Name` varchar(100) NOT NULL,
  `L_Name` varchar(100) NOT NULL,
  `N_Name` varchar(50) NOT NULL,
  `BirthDay` date NOT NULL,
  `Old` int(2) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Postcode` int(5) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Tel` int(10) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Income_money` float NOT NULL,
  `Income_other` float NOT NULL,
  `Income_total` float NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='ข้อมูลลูกค้า' AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bla_customer`
--

INSERT INTO `bla_customer` (`Customer_ID`, `F_Name`, `L_Name`, `N_Name`, `BirthDay`, `Old`, `Sex`, `Status`, `Address`, `Country`, `Postcode`, `Email`, `Tel`, `Mobile`, `Income_money`, `Income_other`, `Income_total`) VALUES
(1, 'dsad', 'dsada', 'dsad', '2013-06-19', 18, 'male', 'singel', 'dsad', 'DZ', 84110, 'dd', 0, 0, 0, 0, 0),
(2, 'dsad', 'dsada', 'dsad', '2013-06-19', 18, 'male', 'singel', 'dsad', 'DZ', 84110, 'dd', 0, 0, 0, 0, 0),
(3, 'dsad', 'dsada', 'dsad', '0000-00-00', 18, 'male', 'singel', 'dsad', 'DZ', 84110, 'dd', 0, 0, 0, 0, 0),
(4, 'fdfd', 'dfdf', 'fdf', '2013-06-19', 0, '0', 'singel', 'fff', '', 0, 'f', 0, 0, 0, 0, 0),
(5, 'fdfd', 'dfdf', 'fdf', '2013-06-04', 0, 'male', 'singel', 'fff', 'AS', 0, 'f', 0, 0, 0, 0, 0),
(6, 'อติชาติ', 'แซ่แต้', 'แบงค์', '1989-11-04', 24, '0', 'singel', '159', 'กรุงเทพมหานคร', 10900, 'bank_84@hotmail.com', 868853864, 868853864, 26700, 5000, 31700),
(7, 'อติชาติ', 'แซ่แต้', 'แบงค์', '1989-11-04', 24, 'male', 'singel', '159', 'กรุงเทพมหานคร', 10900, 'bank_84@hotmail.com', 868853864, 868853864, 26700, 5000, 31700),
(8, 'อติชาติ', 'แซ่แต้', 'แบงค์', '1989-11-04', 24, 'male', 'singel', '159', 'กรุงเทพมหานคร', 10900, 'bank_84@hotmail.com', 868853864, 868853864, 26700, 5000, 31700);

-- --------------------------------------------------------

--
-- Table structure for table `bla_insurance`
--

CREATE TABLE IF NOT EXISTS `bla_insurance` (
  `InsuranceID` int(11) NOT NULL,
  `NameInsurance` text COLLATE utf8_bin NOT NULL,
  `CatagoryInsurance` int(11) NOT NULL,
  `YearPaid` int(11) NOT NULL,
  `YearForContract` int(11) NOT NULL,
  `YearForDividend` int(11) NOT NULL,
  `AmountDividend` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  PRIMARY KEY (`InsuranceID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='ข้อมูลแบบประกัน';

-- --------------------------------------------------------

--
-- Table structure for table `bla_rate`
--

CREATE TABLE IF NOT EXISTS `bla_rate` (
  `InsuranceID` int(10) NOT NULL,
  `CatagoryInsurance` text COLLATE utf8_bin NOT NULL,
  `Type` text COLLATE utf8_bin NOT NULL,
  `Sex` text COLLATE utf8_bin NOT NULL,
  `Age` int(3) NOT NULL,
  `Rate` float NOT NULL,
  PRIMARY KEY (`InsuranceID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `bla_report`
--

CREATE TABLE IF NOT EXISTS `bla_report` (
  `ReportID` int(10) NOT NULL,
  `CustomerID` varchar(10) COLLATE utf8_bin NOT NULL,
  `NameCustomer` text COLLATE utf8_bin NOT NULL,
  `InsuranceID` int(10) NOT NULL,
  `NameInsurance` text COLLATE utf8_bin NOT NULL,
  `Amount` int(10) NOT NULL,
  `AmountTotal` int(10) NOT NULL,
  `Capital` int(10) NOT NULL,
  `Year` int(10) NOT NULL,
  `DividendTotal` int(10) NOT NULL,
  `Payment` int(10) NOT NULL,
  `CompensationTotal` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `NameUser` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ReportID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `bla_users`
--

CREATE TABLE IF NOT EXISTS `bla_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='ข้อมูลตัวแทน' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bla_users`
--

INSERT INTO `bla_users` (`id`, `f_name`, `l_name`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
