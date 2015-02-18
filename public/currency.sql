-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2015 at 05:42 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `currency`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency_data`
--

CREATE TABLE IF NOT EXISTS `currency_data` (
  `User_Id` int(11) NOT NULL,
  `Currency_From` varchar(50) NOT NULL,
  `Currency_To` varchar(50) NOT NULL,
  `Amount_Sell` double(12,4) NOT NULL,
  `Amount_Buy` double(12,4) NOT NULL,
  `Rate` double(12,4) NOT NULL,
  `Time_Placed` timestamp NOT NULL,
  `Originating_Country` varchar(50) NOT NULL,
  `Created_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
