-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2017 at 03:57 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `TimeSince`
--

-- --------------------------------------------------------

--
-- Table structure for table `since`
--

CREATE TABLE IF NOT EXISTS `since` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Description` varchar(40) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `since`
--

INSERT INTO `since` (`ID`, `Date`, `Description`, `Image`) VALUES
(1, '2007-06-29', 'IPhone Introduced', ''),
(2, '2007-11-04', 'US elects 1st Black President', ''),
(3, '2009-05-18', 'End of Sri Lankan Civil War', ''),
(4, '2010-01-26', 'Mahinda Rajapaksa Re-elected as Presiden', ''),
(5, '2011-12-18', 'End of Iraq war', ''),
(6, '2011-10-05', 'Death of Steve Jobs', ''),
(7, '2013-03-13', 'Pope Francis became Pope', ''),
(8, '2013-05-20', 'Edward Snowden releases classified docum', ''),
(9, '2015-01-09', 'Maithripala Sirisena becomes President', ''),
(10, '2015-09-29', 'Liquid water found in Mars', ''),
(11, '2016-06-23', 'UK votes for Brexit', ''),
(12, '2016-11-08', 'Donald Trump Elected as President', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
