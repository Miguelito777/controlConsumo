-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 02:39 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u754523124_prue1`
--

-- --------------------------------------------------------

--
-- Table structure for table `trackflesa`
--

CREATE TABLE IF NOT EXISTS `trackflesa` (
  `unidad` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Track1',
  `bit` bit(1) NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nota` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trackflesa`
--

INSERT INTO `trackflesa` (`unidad`, `bit`, `hora`, `nota`) VALUES
('Track1', b'1', '2016-11-25 01:00:00', '7'),
('Track1', b'1', '2016-11-25 02:10:00', '7'),
('Track1', b'1', '2016-11-25 03:00:00', '7'),
('Track1', b'1', '2016-11-25 04:20:00', '7'),
('Track1', b'1', '2016-11-25 05:00:00', '7'),
('Track1', b'1', '2016-11-25 06:05:00', '7'),
('Track1', b'1', '2016-11-26 08:00:00', '7'),
('Track1', b'1', '2016-11-26 08:00:00', '7'),
('Track1', b'1', '2016-11-26 08:00:00', '7');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
