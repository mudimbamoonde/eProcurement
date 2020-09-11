-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2020 at 01:32 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revenue`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounttran`
--

DROP TABLE IF EXISTS `accounttran`;
CREATE TABLE IF NOT EXISTS `accounttran` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Paye` varchar(100) NOT NULL,
  `cheqnum` varchar(100) NOT NULL,
  `Details` text,
  `Amount` varchar(100) DEFAULT NULL,
  `AccountCode` varchar(100) DEFAULT NULL,
  `status` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounttran`
--

INSERT INTO `accounttran` (`id`, `Date`, `Paye`, `cheqnum`, `Details`, `Amount`, `AccountCode`, `status`) VALUES
(1, '2020-09-11', 'Zesc', '0301', 'Units', '20131', '2912', 'Audited');

-- --------------------------------------------------------

--
-- Table structure for table `auditedtran`
--

DROP TABLE IF EXISTS `auditedtran`;
CREATE TABLE IF NOT EXISTS `auditedtran` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `AccountCode` varchar(100) DEFAULT NULL,
  `FinacialRegulation` varchar(100) DEFAULT NULL,
  `GovernmentCircular` varchar(100) DEFAULT NULL,
  `ProcRegulation` varchar(100) DEFAULT NULL,
  `StoresRegulations` varchar(100) DEFAULT NULL,
  `OtherRegulation` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auditedtran`
--

INSERT INTO `auditedtran` (`id`, `AccountCode`, `FinacialRegulation`, `GovernmentCircular`, `ProcRegulation`, `StoresRegulations`, `OtherRegulation`, `status`) VALUES
(1, '2912', 'MGT Public funds 20001', 'Not Applicable', 'Tender Process 40003', 'Disposal 50002', 'Null', 'Audited');

-- --------------------------------------------------------

--
-- Table structure for table `auditors`
--

DROP TABLE IF EXISTS `auditors`;
CREATE TABLE IF NOT EXISTS `auditors` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `accountLevel` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auditors`
--

INSERT INTO `auditors` (`ID`, `firstName`, `surname`, `email`, `mobile`, `username`, `password`, `accountLevel`, `status`) VALUES
(1, 'Mudimba', 'Moonde', 'mudimba@gmail.com', '260965840222', 'moonde', '827ccb0eea8a706c4c34a16891f84e7b', 'master', '1');

-- --------------------------------------------------------

--
-- Table structure for table `auditor_staff`
--

DROP TABLE IF EXISTS `auditor_staff`;
CREATE TABLE IF NOT EXISTS `auditor_staff` (
  `StaffID` int(10) NOT NULL AUTO_INCREMENT,
  `access_level` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `aditorID` int(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`StaffID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
