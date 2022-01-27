-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2022 at 01:23 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manifestoahoy`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `zaal_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`),
  KEY `zaal_id` (`zaal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `event_id`, `zaal_id`, `date`) VALUES
(1, 1, 1, '2021-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'locatie'),
(3, 'route'),
(4, 'optredens');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` text NOT NULL,
  `date` text NOT NULL,
  `type_id` int(11) NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `date`, `type_id`, `img`, `description`) VALUES
(1, 'Winter Fair', ' 01 December', 1, 'winter-fair.jpg', 'De Winter-Fair is een gezellig dagje uit voor jong en oud. Met veel diversiteit aan exposanten die de nieuwste trends presenteren en verkopen. Dagelijks zullen er ook leuke activiteiten worden georganiseerd onder het genot van allerlei lekkernijen, modeshows, een bingo en optredens van diverse artiesten. Ook voor de allerjongsten zijn er veel leuke activiteiten, zo staat er een draaimolen en komt Sinterklaas op bezoek met zijn pieten. Tot op de Winter-Fair van 1 tot en met 5 december 2021.'),
(2, 'Winter Fair', '02 December', 1, 'winter-fair.jpg', 'De Winter-Fair is een gezellig dagje uit voor jong en oud. Met veel diversiteit aan exposanten die de nieuwste trends presenteren en verkopen. Dagelijks zullen er ook leuke activiteiten worden georganiseerd onder het genot van allerlei lekkernijen, modeshows, een bingo en optredens van diverse artiesten. Ook voor de allerjongsten zijn er veel leuke activiteiten, zo staat er een draaimolen en komt Sinterklaas op bezoek met zijn pieten. Tot op de Winter-Fair van 1 tot en met 5 december 2021.'),
(3, 'Winter Fair', '03 December', 1, 'winter-fair.jpg', 'De Winter-Fair is een gezellig dagje uit voor jong en oud. Met veel diversiteit aan exposanten die de nieuwste trends presenteren en verkopen. Dagelijks zullen er ook leuke activiteiten worden georganiseerd onder het genot van allerlei lekkernijen, modeshows, een bingo en optredens van diverse artiesten. Ook voor de allerjongsten zijn er veel leuke activiteiten, zo staat er een draaimolen en komt Sinterklaas op bezoek met zijn pieten. Tot op de Winter-Fair van 1 tot en met 5 december 2021.'),
(4, 'Winter Fair', '04 December', 1, 'winter-fair.jpg', 'De Winter-Fair is een gezellig dagje uit voor jong en oud. Met veel diversiteit aan exposanten die de nieuwste trends presenteren en verkopen. Dagelijks zullen er ook leuke activiteiten worden georganiseerd onder het genot van allerlei lekkernijen, modeshows, een bingo en optredens van diverse artiesten. Ook voor de allerjongsten zijn er veel leuke activiteiten, zo staat er een draaimolen en komt Sinterklaas op bezoek met zijn pieten. Tot op de Winter-Fair van 1 tot en met 5 december 2021.'),
(5, 'Winter Fair', '05 December', 1, 'winter-fair.jpg', 'De Winter-Fair is een gezellig dagje uit voor jong en oud. Met veel diversiteit aan exposanten die de nieuwste trends presenteren en verkopen. Dagelijks zullen er ook leuke activiteiten worden georganiseerd onder het genot van allerlei lekkernijen, modeshows, een bingo en optredens van diverse artiesten. Ook voor de allerjongsten zijn er veel leuke activiteiten, zo staat er een draaimolen en komt Sinterklaas op bezoek met zijn pieten. Tot op de Winter-Fair van 1 tot en met 5 december 2021.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `introduction` text NOT NULL,
  `article` text NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `creation_date`, `introduction`, `article`, `category_id`) VALUES
(1, 'nieuwe locatie', 'verhuizing.jpg', '2021-12-21 09:43:52', 'extra locatie', 'we hebben een extra locatie gekregen om vorstelingen en optredes te geven', 1),
(2, 'nieuwe regeling', 'nieuwe_regeling.jpg', '2021-12-21 09:46:02', 'nieuwe dients regeling', 'de bussen en treinen rijden nu ander en hebben nu andere aankomst tijden', 3),
(3, 'tiesto', 'Tiesto_optreden_niet_door.jpg', '2021-12-23 10:47:44', 'optreden tiesto', 'optrede tiesto gaat niet door dat hij positiev op corona is gecheckt', 1),
(7, 'presentatie Nick', '', '2021-12-23 10:40:11', 'Nick van Oostrom gaat een presentatie geven over zijn usecase', 'De presentatie wordt  gegeven in het bij zijn van Odijk en de Ruijter', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_naam` text NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_naam`) VALUES
(1, 'Winter Fair');

-- --------------------------------------------------------

--
-- Table structure for table `zaal`
--

DROP TABLE IF EXISTS `zaal`;
CREATE TABLE IF NOT EXISTS `zaal` (
  `zaal_id` int(11) NOT NULL AUTO_INCREMENT,
  `zaal_capaciteit` varchar(5) NOT NULL,
  `zaal_naam` text NOT NULL,
  PRIMARY KEY (`zaal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zaal`
--

INSERT INTO `zaal` (`zaal_id`, `zaal_capaciteit`, `zaal_naam`) VALUES
(1, '1000', 'Hal 2');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  ADD CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`zaal_id`) REFERENCES `zaal` (`zaal_id`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

DELIMITER $$
--
-- Events
--
DROP EVENT `delete older than 2 week data from news`$$
CREATE DEFINER=`root`@`localhost` EVENT `delete older than 2 week data from news` ON SCHEDULE EVERY 1 DAY STARTS '2021-12-21 00:00:01' ON COMPLETION PRESERVE ENABLE DO DELETE FROM news WHERE creation_date < DATE_SUB(NOW() , INTERVAL 2 WEEK)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
