-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2015 at 09:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `woody_old`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `woody_table`
--

INSERT INTO `woody_table` (`id`, `film_name`, `release_date`, `genre`, `summary`, `wrote`, `acted`, `directed`, `runtime`, `female_lead`, `male_lead`, `quote`, `image_location`) VALUES
(1, 'Annie Hall', '1977', 'Romantic Comedy Drama', 'Neurotic New York comedian Alvy Singer falls in love with the ditsy Annie Hall.', b'1', b'1', b'1', 93, 'Diane Keaton', 'Woody Allen', 'This guy goes to a psychiatrist and says, "Doc, my brother''s crazy; he thinks he''s a chicken." And the doctor says, "Well, why don''t you turn him in?" The guy says, "I would, but I need the eggs." Well, I guess that''s pretty much now how I feel about relationships; they''re totally irrational, and crazy, and absurd, and I guess we keep goin'' through it because most of us need the eggs.', 'img/annie-hall.jpg'),
(2, 'Midnight in Paris', '2011', 'Romantic Comedy Fantasy', 'While on a trip to Paris with his fiancée''s family, a nostalgic screenwriter finds himself mysteriously going back to the 1920s every day at midnight.', b'1', b'0', b'1', 94, 'Marion Cotillard', 'Owen Wilson', 'Yes, but you''re a surrealist! I''m a normal guy! ', 'img/midnight.jpg'),
(3, 'Manhattan', '1979', 'Romantic Comedy Drama', 'The life of a divorced television writer dating a teenage girl is further complicated when he falls in love with his best friend''s mistress', b'1', b'1', b'1', 96, 'Diane Keaton', 'Woody Allen', 'Party Guest: I finally had an orgasm, and my doctor said it was the wrong kind. <br />Isaac Davis: You had the wrong kind? I''ve never had the wrong kind, ever. My worst one was right on the money.', 'img/manhattan.jpg'),
(4, 'Stardust Memories', '1980', 'Comedy Drama', 'While attending a retrospect of his work, a filmmaker recalls his life and his loves: the inspirations for his films.', b'1', b'1', b'1', 88, 'Charlotte Rampling', 'Woody Allen', 'You can''t control life. It doesn''t wind up perfectly. Only-only art you can control. Art and masturbation. Two areas in which I am an absolute expert.', 'img/stardust.jpg'),
(5, 'Husbands and Wives', '1992', 'Comedy Drama Romance', 'When their best friends announce that they''re separating, a professor and his wife discover the faults in their own marriage.', b'1', b'1', b'1', 108, 'Mia Farrow', 'Woody Allen', 'You use sex to express every emotion except love.', 'img/husbands-wives.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
