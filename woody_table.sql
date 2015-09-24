-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2015 at 12:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `woody`
--

-- --------------------------------------------------------

--
-- Table structure for table `woody_table`
--

CREATE TABLE IF NOT EXISTS `woody_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_name` varchar(80) NOT NULL,
  `release_date` varchar(15) NOT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `summary` text,
  `wrote` bit(1) DEFAULT NULL,
  `acted` bit(1) DEFAULT NULL,
  `directed` bit(1) DEFAULT NULL,
  `runtime` int(11) DEFAULT NULL,
  `female_lead` varchar(30) DEFAULT NULL,
  `quote` text,
  `image_location` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
