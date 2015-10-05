-- MySQL dump 10.15  Distrib 10.0.21-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: woody
-- ------------------------------------------------------
-- Server version	10.0.21-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `woody_table`
--

DROP TABLE IF EXISTS `woody_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `woody_table` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `woody_table`
--

LOCK TABLES `woody_table` WRITE;
/*!40000 ALTER TABLE `woody_table` DISABLE KEYS */;
INSERT INTO `woody_table` VALUES (1,'Annie Hall','1977','Romantic Comedy Drama','Neurotic New York comedian Alvy Singer falls in love with the ditsy Annie Hall.','','','',93,'Diane Keaton','Woody Allen','This guy goes to a psychiatrist and says, \"Doc, my brother\'s crazy; he thinks he\'s a chicken.\" And the doctor says, \"Well, why don\'t you turn him in?\" The guy says, \"I would, but I need the eggs.\" Well, I guess that\'s pretty much now how I feel about relationships; they\'re totally irrational, and crazy, and absurd, and I guess we keep goin\' through it because most of us need the eggs.','img/annie-hall.jpg'),(2,'Midnight in Paris','2011','Romantic Comedy Fantasy','While on a trip to Paris with his fiancée\'s family, a nostalgic screenwriter finds himself mysteriously going back to the 1920s every day at midnight.','','\0','',94,'Marion Cotillard','Owen Wilson','Yes, but you\'re a surrealist! I\'m a normal guy! ','img/midnight.jpg'),(3,'Manhattan','1979','Romantic Comedy Drama','The life of a divorced television writer dating a teenage girl is further complicated when he falls in love with his best friend\'s mistress','','','',96,'Diane Keaton','Woody Allen','Party Guest: I finally had an orgasm, and my doctor said it was the wrong kind. <br />Isaac Davis: You had the wrong kind? I\'ve never had the wrong kind, ever. My worst one was right on the money.','img/manhattan.jpg'),(4,'Stardust Memories','1980','Comedy Drama','While attending a retrospect of his work, a filmmaker recalls his life and his loves: the inspirations for his films.','','','',88,'Charlotte Rampling','Woody Allen','You can\'t control life. It doesn\'t wind up perfectly. Only-only art you can control. Art and masturbation. Two areas in which I am an absolute expert.','img/stardust.jpg'),(5,'Husbands and Wives','1992','Comedy Drama Romance','When their best friends announce that they\'re separating, a professor and his wife discover the faults in their own marriage.','','','',108,'Mia Farrow','Woody Allen','You use sex to express every emotion except love.','img/husbands-wives.jpg');
/*!40000 ALTER TABLE `woody_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-04 19:22:08
