-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2014 at 08:16 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_s1`
--

CREATE TABLE IF NOT EXISTS `content_s1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `order` int(1) NOT NULL,
  `visibility` int(1) NOT NULL,
  `children` text NOT NULL,
  `parent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `content_s1`
--

INSERT INTO `content_s1` (`id`, `heading`, `content`, `order`, `visibility`, `children`, `parent`) VALUES
(1, 'root', '', 1, 1, '2,3,4', 0),
(2, 'project', 'the main projects', 1, 1, '5,6', 1),
(3, 'extra activities', 'the extra curicullar activities', 1, 1, '7', 0),
(4, 'position hold', 'the major position hold', 1, 1, '', 1),
(5, 'festember games', 'made a suedo 3d game for festember without any game engine', 1, 1, '', 2),
(6, 'digital fortress', 'a hacking based event', 1, 1, '', 2),
(7, 'basketball', 'i love playing games when i get free time.', 1, 1, '', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
