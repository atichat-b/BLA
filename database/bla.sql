-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2013 at 04:54 PM
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
  `NameCustomer` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `SurnameCustomer` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `NickName` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `BirthDay` date NOT NULL,
  `Sex` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Status` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Address` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Country` int(20) NOT NULL,
  `Code` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `CallHome` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Telephone` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Other` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Expense` int(10) NOT NULL,
  `Installments` int(10) NOT NULL,
  `SaveMoney` int(10) NOT NULL,
  `ExpenseOther` int(10) NOT NULL,
  `Revenue` int(10) NOT NULL,
  `RevenueOther` int(10) NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='ข้อมูลลูกค้า' AUTO_INCREMENT=1 ;

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
  `id` int(10) NOT NULL,
  `f_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='ข้อมูลตัวแทน';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
