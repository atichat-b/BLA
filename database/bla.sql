-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2013 at 08:45 PM
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
(3, 'dsad', 'dsada', 'dsad', '0000-00-00', 18, 'female', 'singel', 'dsad', '', 84110, 'dd', 0, 0, 0, 0, 0),
(4, 'fdfd', 'dfdf', 'fdf', '2013-06-19', 0, '0', 'singel', 'fff', '', 0, 'f', 0, 0, 0, 0, 0),
(5, 'fdfd', 'dfdf', 'fdf', '2013-06-04', 0, 'male', 'singel', 'fff', 'AS', 0, 'f', 0, 0, 0, 0, 0),
(6, 'อติชาติ', 'แซ่แต้', 'แบงค์', '1989-11-04', 24, 'male', 'singel', '159', '', 10900, 'bank_84@hotmail.com', 868853864, 868853864, 26700, 5000, 31700),
(7, 'อติชาติ', 'แซ่แต้', 'แบงค์', '1989-11-04', 24, 'male', 'singel', '159', 'กรุงเทพมหานคร', 10900, 'bank_84@hotmail.com', 868853864, 868853864, 26700, 5000, 31700);

-- --------------------------------------------------------

--
-- Table structure for table `bla_insurance`
--

CREATE TABLE IF NOT EXISTS `bla_insurance` (
  `InsuranceID` int(11) NOT NULL,
  `NameInsurance` varchar(255) CHARACTER SET utf8 NOT NULL,
  `CatagoryInsurance` varchar(255) CHARACTER SET utf8 NOT NULL,
  `YearPaid` varchar(255) CHARACTER SET utf8 NOT NULL,
  `YearForContract` int(11) NOT NULL,
  `YearForDividend` int(11) NOT NULL,
  `AmountDividend` int(11) NOT NULL,
  PRIMARY KEY (`InsuranceID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='ข้อมูลแบบประกัน';

--
-- Dumping data for table `bla_insurance`
--

INSERT INTO `bla_insurance` (`InsuranceID`, `NameInsurance`, `CatagoryInsurance`, `YearPaid`, `YearForContract`, `YearForDividend`, `AmountDividend`) VALUES
(10000, 'ดั่งใจ 25/20', 'ออมทรัพย์', '5, 10, 15, 20', 25, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bla_rate`
--

CREATE TABLE IF NOT EXISTS `bla_rate` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `CatagoryInsurance` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Age` int(3) NOT NULL,
  `Rate` float NOT NULL,
  `InsuranceID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `bla_rate`
--

INSERT INTO `bla_rate` (`ID`, `CatagoryInsurance`, `Type`, `Sex`, `Age`, `Rate`, `InsuranceID`) VALUES
(1, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 0, 3800, 10000),
(2, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 1, 3800, 10000),
(3, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 2, 3800, 10000),
(4, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 3, 3800, 10000),
(5, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 4, 3800, 10000),
(6, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 5, 3800, 10000),
(7, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 6, 3800, 10000),
(8, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 7, 3800, 10000),
(9, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 8, 3800, 10000),
(10, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 9, 3800, 10000),
(11, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 10, 3800, 10000),
(12, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 11, 3800, 10000),
(13, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 12, 3800, 10000),
(14, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 13, 3900, 10000),
(15, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 14, 3900, 10000),
(16, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 15, 3900, 10000),
(17, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 16, 3900, 10000),
(18, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 17, 3900, 10000),
(19, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 18, 3900, 10000),
(20, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 19, 3900, 10000),
(21, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 20, 3900, 10000),
(22, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 21, 3900, 10000),
(23, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 22, 3900, 10000),
(24, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 23, 3900, 10000),
(25, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 24, 3900, 10000),
(26, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 25, 3900, 10000),
(27, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 26, 3900, 10000),
(28, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 27, 3900, 10000),
(29, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 28, 3900, 10000),
(30, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 29, 3900, 10000),
(31, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 30, 3900, 10000),
(32, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 31, 3900, 10000),
(33, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 32, 3900, 10000),
(34, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 33, 3900, 10000),
(35, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 34, 3900, 10000),
(36, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 35, 3900, 10000),
(37, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 36, 4000, 10000),
(38, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 37, 4000, 10000),
(39, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 38, 4000, 10000),
(40, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 39, 4000, 10000),
(41, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 40, 4000, 10000),
(42, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 41, 4000, 10000),
(43, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 42, 4000, 10000),
(44, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 43, 4000, 10000),
(45, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 44, 4000, 10000),
(46, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 45, 4000, 10000),
(47, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 46, 4400, 10000),
(48, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 47, 4400, 10000),
(49, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 48, 4500, 10000),
(50, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 49, 4600, 10000),
(51, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 50, 4600, 10000),
(52, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 51, 4700, 10000),
(53, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 52, 4800, 10000),
(54, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 53, 4900, 10000),
(55, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 54, 4900, 10000),
(56, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 55, 4900, 10000),
(57, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 56, 5300, 10000),
(58, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 57, 5400, 10000),
(59, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 58, 5600, 10000),
(60, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 59, 5700, 10000),
(61, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 60, 5900, 10000),
(62, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 61, 6100, 10000),
(63, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 62, 6300, 10000),
(64, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 63, 6500, 10000),
(65, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 64, 6800, 10000),
(66, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'female', 65, 7000, 10000),
(67, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 0, 3900, 10000),
(68, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 1, 3900, 10000),
(69, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 2, 3900, 10000),
(70, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 3, 3900, 10000),
(71, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 4, 3900, 10000),
(72, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 5, 3900, 10000),
(73, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 6, 3900, 10000),
(74, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 7, 3900, 10000),
(75, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 8, 4000, 10000),
(76, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 9, 4000, 10000),
(77, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 10, 4000, 10000),
(78, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 11, 4000, 10000),
(79, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 12, 4100, 10000),
(80, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 13, 4100, 10000),
(81, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 14, 4100, 10000),
(82, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 15, 4100, 10000),
(83, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 16, 4200, 10000),
(84, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 17, 4200, 10000),
(85, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 18, 4200, 10000),
(86, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 19, 4200, 10000),
(87, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 20, 4200, 10000),
(88, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 21, 4200, 10000),
(89, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 22, 4200, 10000),
(90, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 23, 4200, 10000),
(91, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 24, 4200, 10000),
(92, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 25, 4200, 10000),
(93, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 26, 4200, 10000),
(94, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 27, 4200, 10000),
(95, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 28, 4200, 10000),
(96, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 29, 4200, 10000),
(97, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 30, 4200, 10000),
(98, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 31, 4200, 10000),
(99, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 32, 4200, 10000),
(100, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 33, 4200, 10000),
(101, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 34, 4200, 10000),
(102, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 35, 4200, 10000),
(103, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 36, 4200, 10000),
(104, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 37, 4200, 10000),
(105, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 38, 4200, 10000),
(106, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 39, 4200, 10000),
(107, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 40, 4400, 10000),
(108, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 41, 4400, 10000),
(109, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 42, 4400, 10000),
(110, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 43, 4400, 10000),
(111, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 44, 4400, 10000),
(112, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 45, 4400, 10000),
(113, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 46, 4900, 10000),
(114, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 47, 5000, 10000),
(115, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 48, 5000, 10000),
(116, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 49, 5000, 10000),
(117, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 50, 5000, 10000),
(118, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 51, 5000, 10000),
(119, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 52, 5000, 10000),
(120, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 53, 5000, 10000),
(121, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 54, 5000, 10000),
(122, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 55, 5000, 10000),
(123, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 56, 5100, 10000),
(124, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 57, 5200, 10000),
(125, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 58, 5300, 10000),
(126, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 59, 5800, 10000),
(127, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 60, 6000, 10000),
(128, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 61, 6200, 10000),
(129, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 62, 6400, 10000),
(130, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 63, 6600, 10000),
(131, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 64, 6900, 10000),
(132, 'ออมทรัพย์', 'ดั่งใจ 25/20', 'male', 65, 7100, 10000);

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
