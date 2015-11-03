-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2015 at 09:57 AM
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
  `male_lead` varchar(50) DEFAULT NULL,
  `quote` text,
  `image_location` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `woody_table`
--

INSERT INTO `woody_table` (`id`, `film_name`, `release_date`, `genre`, `summary`, `wrote`, `acted`, `directed`, `runtime`, `female_lead`, `male_lead`, `quote`, `image_location`) VALUES
(1, 'What''s New Pussycat?', '1965', 'comedy', NULL, b'1', b'1', b'0', 108, NULL, NULL, NULL, 'pussycat.jpg'),
(2, 'What''s Up, Tiger Lily?', '1966', 'adventure comedy crime', NULL, b'1', b'1', b'1', 80, NULL, NULL, NULL, 'tiger.jpg'),
(3, 'Casino Royale', '1967', 'comedy', NULL, b'0', b'1', b'0', 131, NULL, NULL, NULL, 'casino.jpg'),
(4, 'Don''t Drink the Water', '1969', 'comedy', NULL, b'1', b'0', b'0', 100, NULL, NULL, NULL, 'drinkwater.jpg'),
(5, 'Take the Money and Run', '1969', 'comedy crime', NULL, b'1', b'1', b'1', 85, NULL, NULL, NULL, 'takemoney.jpg'),
(6, 'Bananas', '1971', 'comedy', NULL, b'1', b'1', b'1', 82, NULL, NULL, NULL, 'banana.jpg'),
(7, 'Play It Again, Sam', '1972', 'comedy romance', NULL, b'1', b'1', b'0', 85, NULL, NULL, NULL, 'playitsam.jpg'),
(8, 'Everything You Always Wanted to Know About Sex* (*But Were Afraid to Ask)', '1972', 'comedy', NULL, b'1', b'1', b'1', 88, NULL, NULL, NULL, 'everythingyouwanted.jpg'),
(9, 'Sleeper', '1973', 'comedy scifi', NULL, b'1', b'1', b'1', 88, NULL, NULL, NULL, 'sleeper.jpg'),
(10, 'Love and Death', '1975', 'comedy war', NULL, b'1', b'1', b'1', 85, NULL, NULL, NULL, 'lovedeath.jpg'),
(11, 'The Front', '1976', 'comedy drama', NULL, b'0', b'1', b'0', 95, NULL, NULL, NULL, 'front.jpg'),
(12, 'Annie Hall', '1977', 'comedy romance', NULL, b'1', b'1', b'1', 93, NULL, NULL, NULL, 'anniehall.jpg'),
(13, 'Interiors', '1978', 'drama', NULL, b'1', b'0', b'1', 99, NULL, NULL, NULL, 'interiors.jpg'),
(14, 'Manhattan', '1979', 'comedy drama romance', NULL, b'1', b'1', b'1', 96, NULL, NULL, NULL, 'manhattan.jpg'),
(15, 'Stardust Memories', '1980', 'comedy drama', NULL, b'1', b'1', b'1', 88, NULL, NULL, NULL, 'stardust.jpg'),
(16, 'A Midsummer Night''s Sex Comedy', '1982', 'comedy', NULL, b'1', b'1', b'1', 88, NULL, NULL, NULL, 'midsummernight.jpg'),
(17, 'Zelig', '1983', 'comedy', NULL, b'1', b'1', b'1', 79, NULL, NULL, NULL, 'zelig.jpg'),
(18, 'Broadway Danny Rose', '1984', 'comedy', NULL, b'1', b'1', b'1', 84, NULL, NULL, NULL, 'broadwaydanny.jpg'),
(19, 'The Purple Rose of Cairo', '1985', 'comedy fantasy romance', NULL, b'1', b'0', b'1', 82, NULL, NULL, NULL, 'purplerose.jpg'),
(20, 'Hannah and Her Sisters', '1986', 'comedy drama', NULL, b'1', b'1', b'1', 106, NULL, NULL, NULL, 'hannahsisters.jpg'),
(21, 'Radio Days', '1987', 'comedy', NULL, b'1', b'1', b'1', 85, NULL, NULL, NULL, 'radiodays.jpg'),
(22, 'September', '1987', 'drama', NULL, b'1', b'0', b'1', 82, NULL, NULL, NULL, 'september.jpg'),
(23, 'Another Woman', '1988', 'drama', NULL, b'1', b'0', b'1', 84, NULL, NULL, NULL, 'anotherwoman.jpg'),
(24, 'New York Stories', '1989', 'comedy drama romance', NULL, b'1', b'1', b'1', 124, NULL, NULL, NULL, 'nystories.jpg'),
(25, 'Crimes and Misdemeanors', '1989', 'comedy drama', NULL, b'1', b'1', b'1', 104, NULL, NULL, NULL, 'crimesmisdemeanors.jpg'),
(26, 'Alice', '1990', 'comedy fantasy romance', NULL, b'1', b'0', b'1', 102, NULL, NULL, NULL, 'alice.jpg'),
(27, 'Scenes from a Mall', '1991', 'comedy', NULL, b'0', b'1', b'0', 89, NULL, NULL, NULL, 'scenesfrommall.jpg'),
(28, 'Shadows and Fog', '1991', 'comedy', NULL, b'1', b'1', b'1', 85, NULL, NULL, NULL, 'shadowsfog.jpg'),
(29, 'Husbands and Wives', '1992', 'comedy drama romance', NULL, b'1', b'1', b'1', 108, NULL, NULL, NULL, 'husbandswives.jpg'),
(30, 'Manhattan Murder Mystery', '1993', 'comedy mystery', NULL, b'1', b'1', b'1', 104, NULL, NULL, NULL, 'murdermystery.jpg'),
(31, 'Bullets over Broadway', '1994', 'comedy crime', NULL, b'1', b'0', b'1', 98, NULL, NULL, NULL, 'bulletsbroadway.jpg'),
(32, 'Don''t Drink The Water', '1994', 'comedy', NULL, b'1', b'1', b'1', 100, NULL, NULL, NULL, 'drinkwater.jpg'),
(33, 'Mighty Aphrodite', '1995', 'comedy fantasy romance', NULL, b'1', b'1', b'1', 95, NULL, NULL, NULL, 'aphrodite.jpg'),
(34, 'Everyone Says I Love You', '1996', 'comedy musical romance', NULL, b'1', b'1', b'1', 101, NULL, NULL, NULL, 'everyonesays.jpg'),
(35, 'Deconstructing Harry', '1997', 'comedy', NULL, b'1', b'1', b'1', 96, NULL, NULL, NULL, 'harry.jpg'),
(36, 'Celebrity', '1998', 'comedy drama', NULL, b'1', b'0', b'1', 113, NULL, NULL, NULL, 'celebrity.jpg'),
(37, 'Sweet and Lowdown', '1999', 'comedy drama music', NULL, b'1', b'1', b'1', 95, NULL, NULL, NULL, 'sweetlowdown.jpg'),
(38, 'Small Time Crooks', '2000', 'comedy crime', NULL, b'1', b'1', b'1', 95, NULL, NULL, NULL, 'smalltime.jpg'),
(39, 'Picking Up the Pieces', '2000', 'comedy fantasy', NULL, b'0', b'1', b'0', 95, NULL, NULL, NULL, 'pickingpieces.jpg'),
(40, 'The Curse of the Jade Scorpion', '2001', 'comedy crime mystery', NULL, b'1', b'1', b'1', 103, NULL, NULL, NULL, 'jadescorpion.jpg'),
(41, 'Hollywood Ending', '2002', 'comedy romance', NULL, b'1', b'1', b'1', 114, NULL, NULL, NULL, 'hollywoodending.jpg'),
(42, 'Anything Else', '2003', 'comedy romance', NULL, b'1', b'1', b'1', 108, NULL, NULL, NULL, 'anythingelse.jpg'),
(43, 'Melinda and Melinda', '2004', 'comedy drama romance', NULL, b'1', b'0', b'1', 99, NULL, NULL, NULL, 'melinda.jpg'),
(44, 'Match Point', '2005', 'drama romance thriller', NULL, b'1', b'0', b'1', 124, NULL, NULL, NULL, 'matchpoint.jpg'),
(45, 'Scoop', '2006', 'comedy mystery', NULL, b'1', b'1', b'1', 96, NULL, NULL, NULL, 'scoop.jpg'),
(46, 'Cassandra''s Dream', '2007', 'crime drama romance', NULL, b'1', b'0', b'1', 110, NULL, NULL, NULL, 'cassandra.jpg'),
(47, 'Vicky Cristina Barcelona', '2008', 'drama romance', NULL, b'1', b'0', b'1', 97, NULL, NULL, NULL, 'vicky.jpg'),
(48, 'Whatever Works', '2009', 'comedy romance', NULL, b'1', b'0', b'1', 92, NULL, NULL, NULL, 'whateverworks.jpg'),
(49, 'You Will Meet a Tall Dark Stranger', '2010', 'comedy drama romance', NULL, b'1', b'0', b'1', 100, NULL, NULL, NULL, 'talldarkstranger.jpg'),
(50, 'Midnight in Paris', '2011', 'comedy fantasy romance', NULL, b'1', b'0', b'1', 94, NULL, NULL, NULL, 'midnightparis.jpg'),
(51, 'To Rome with Love', '2012', 'comedy romance', NULL, b'1', b'1', b'1', 112, NULL, NULL, NULL, 'romewithlove.jpg'),
(52, 'Blue Jasmine', '2013', 'drama romance', NULL, b'1', b'0', b'1', 99, NULL, NULL, NULL, 'jasmine.jpg'),
(53, 'Fading Gigolo', '2014', 'comedy', NULL, b'0', b'1', b'0', 90, NULL, NULL, NULL, 'gigolo.jpg'),
(54, 'Magic in the Moonlight', '2014', 'comedy romance', NULL, b'1', b'0', b'1', 97, NULL, NULL, NULL, 'magicmoonlight.jpg'),
(55, 'Irrational Man', '2015', 'drama mystery', NULL, b'1', b'0', b'1', 95, NULL, NULL, NULL, 'irrational.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
