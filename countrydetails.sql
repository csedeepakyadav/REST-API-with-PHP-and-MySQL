-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2019 at 10:43 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `countrydetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `countryName` varchar(30) NOT NULL,
  `countryCapital` varchar(30) NOT NULL,
  `countryCode` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `countryName`, `countryCapital`, `countryCode`) VALUES
(1, 'Australia', 'Canberra', 'AUS'),
(2, 'Canada', 'Ottawa', 'CA'),
(3, 'China', 'Beijing', 'CN'),
(4, 'France', 'Paris', 'FR'),
(5, 'Germany', 'Berlin', 'DE'),
(6, 'India', 'New Delhi', 'IN'),
(7, 'Israel', 'Jerusalem', 'IL'),
(8, 'Italy', 'Rome', 'IT'),
(9, 'Japan', 'Tokyo', 'JP'),
(10, 'New Zealand', 'Wellington', 'NZ'),
(11, 'Russia', 'Moscow', 'RU'),
(12, 'United Kingdom', 'London', 'UK'),
(13, 'United States ', 'Washington, D.C.', 'US');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
