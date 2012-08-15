-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 15 aug 2012 om 23:22
-- Serverversie: 5.5.24
-- PHP-Versie: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Zumron`
--
CREATE DATABASE `Zumron` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Zumron`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Settings`
--

CREATE TABLE IF NOT EXISTS `Settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `visible_name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `value2` text NOT NULL,
  `value3` text NOT NULL,
  `value4` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Gegevens worden uitgevoerd voor tabel `Settings`
--

INSERT INTO `Settings` (`id`, `type`, `visible_name`, `value`, `value2`, `value3`, `value4`) VALUES
(1, 'menu', 'Sabnzbd', 'off', 'http://localhost', '', ''),
(2, 'menu', 'SickBeard', 'off', 'http://localhost:80812', '', ''),
(3, 'menu', 'Couch Potato', 'off', 'http://localhost:8082', '', ''),
(4, 'menu', 'SpotWeb', 'off', 'http://localhost/spotweb', '', ''),
(5, 'menu', 'HeadPhones', 'off', 'http://localhost:8181', '', ''),
(6, 'menu', 'Lazy Librarian', 'off', 'http://localhost', '', ''),
(9, 'submenu', 'IMDB', 'off', 'http://imdb.com', '', ''),
(10, 'submenu', 'MovieMeter', 'off', 'http://www.MovieMeter.nl', '', ''),
(11, 'submenu', 'Newzbin', 'off', 'http://www.newzbin2.es', '', ''),
(12, 'submenu', 'Nzbmatrix', 'off', 'http://www.nzbmatrix.com', '', ''),
(13, 'submenu', 'Nzbindex', 'off', 'http://www.nzbindex.nl', '', ''),
(14, 'submenu', 'Tvrage', 'off', 'http://www.tvrage.com', '', ''),
(15, 'sabnzbdsetting', 'Sabnzbd', 'off', 'localhost', '8080', 'Fill in the API');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
