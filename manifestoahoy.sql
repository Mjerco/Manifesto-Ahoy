-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 22 dec 2021 om 08:47
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Tabelstructuur voor tabel `agenda`
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
-- Gegevens worden geëxporteerd voor tabel `agenda`
--

INSERT INTO `agenda` (`id`, `event_id`, `zaal_id`, `date`) VALUES
(1, 1, 1, '2021-12-01');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bookingen`
--

DROP TABLE IF EXISTS `bookingen`;
CREATE TABLE IF NOT EXISTS `bookingen` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(30) NOT NULL,
  `achternaam` varchar(30) NOT NULL,
  `email_adres` varchar(320) NOT NULL,
  `aantal_kaarten` int(2) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(6, 'locatie');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `event`
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
-- Gegevens worden geëxporteerd voor tabel `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `date`, `type_id`, `img`, `description`) VALUES
(1, 'Winter Fair', ' 01 December', 1, 'winter-fair.jpg', 'De Winter-Fair is een gezellig dagje uit voor jong en oud. Met veel diversiteit aan exposanten die de nieuwste trends presenteren en verkopen. Dagelijks zullen er ook leuke activiteiten worden georganiseerd onder het genot van allerlei lekkernijen, modeshows, een bingo en optredens van diverse artiesten. Ook voor de allerjongsten zijn er veel leuke activiteiten, zo staat er een draaimolen en komt Sinterklaas op bezoek met zijn pieten. Tot op de Winter-Fair van 1 tot en met 5 december 2021.'),
(2, 'Winter Fair', '02 December', 1, 'winter-fair.jpg', 'De Winter-Fair is een gezellig dagje uit voor jong en oud. Met veel diversiteit aan exposanten die de nieuwste trends presenteren en verkopen. Dagelijks zullen er ook leuke activiteiten worden georganiseerd onder het genot van allerlei lekkernijen, modeshows, een bingo en optredens van diverse artiesten. Ook voor de allerjongsten zijn er veel leuke activiteiten, zo staat er een draaimolen en komt Sinterklaas op bezoek met zijn pieten. Tot op de Winter-Fair van 1 tot en met 5 december 2021.'),
(3, 'Winter Fair', '03 December', 1, 'winter-fair.jpg', 'De Winter-Fair is een gezellig dagje uit voor jong en oud. Met veel diversiteit aan exposanten die de nieuwste trends presenteren en verkopen. Dagelijks zullen er ook leuke activiteiten worden georganiseerd onder het genot van allerlei lekkernijen, modeshows, een bingo en optredens van diverse artiesten. Ook voor de allerjongsten zijn er veel leuke activiteiten, zo staat er een draaimolen en komt Sinterklaas op bezoek met zijn pieten. Tot op de Winter-Fair van 1 tot en met 5 december 2021.'),
(4, 'Winter Fair', '04 December', 1, 'winter-fair.jpg', 'De Winter-Fair is een gezellig dagje uit voor jong en oud. Met veel diversiteit aan exposanten die de nieuwste trends presenteren en verkopen. Dagelijks zullen er ook leuke activiteiten worden georganiseerd onder het genot van allerlei lekkernijen, modeshows, een bingo en optredens van diverse artiesten. Ook voor de allerjongsten zijn er veel leuke activiteiten, zo staat er een draaimolen en komt Sinterklaas op bezoek met zijn pieten. Tot op de Winter-Fair van 1 tot en met 5 december 2021.'),
(5, 'Winter Fair', '05 December', 1, 'winter-fair.jpg', 'De Winter-Fair is een gezellig dagje uit voor jong en oud. Met veel diversiteit aan exposanten die de nieuwste trends presenteren en verkopen. Dagelijks zullen er ook leuke activiteiten worden georganiseerd onder het genot van allerlei lekkernijen, modeshows, een bingo en optredens van diverse artiesten. Ook voor de allerjongsten zijn er veel leuke activiteiten, zo staat er een draaimolen en komt Sinterklaas op bezoek met zijn pieten. Tot op de Winter-Fair van 1 tot en met 5 december 2021.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_naam` text NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `type`
--

INSERT INTO `type` (`type_id`, `type_naam`) VALUES
(1, 'Winter Fair');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `zaal`
--

DROP TABLE IF EXISTS `zaal`;
CREATE TABLE IF NOT EXISTS `zaal` (
  `zaal_id` int(11) NOT NULL AUTO_INCREMENT,
  `zaal_capaciteit` varchar(5) NOT NULL,
  `zaal_naam` text NOT NULL,
  PRIMARY KEY (`zaal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `zaal`
--

INSERT INTO `zaal` (`zaal_id`, `zaal_capaciteit`, `zaal_naam`) VALUES
(1, '1000', 'Hal 2');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  ADD CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`zaal_id`) REFERENCES `zaal` (`zaal_id`);

--
-- Beperkingen voor tabel `bookingen`
--
ALTER TABLE `bookingen`
  ADD CONSTRAINT `bookingen_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);

--
-- Beperkingen voor tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`);

--
-- Beperkingen voor tabel `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
