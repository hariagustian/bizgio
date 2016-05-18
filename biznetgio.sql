-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 04:47 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `biznetgio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `user_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `subject` varchar(500) COLLATE utf8_bin NOT NULL,
  `subject_text` mediumtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Truncate table before insert `contact`
--

TRUNCATE TABLE `contact`;
--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`user_name`, `email`, `subject`, `subject_text`) VALUES
('hari agustian', 'hari.agustian@rocketmail.com', 'cool', 'cool text here ..'),
('hari ', 'hari.agustians@gmail.com', 'cooler broh', 'yes that is cooller'),
('wow', 'wow@gmail.com', 'admin1', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `id_facebook` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `id_google` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `provinsi_id` int(10) NOT NULL,
  `kota_id` int(10) NOT NULL,
  `kecam_id` int(10) NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` char(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `full_name`, `email`, `phone`, `password`, `salt`, `id_facebook`, `id_google`, `provinsi_id`, `kota_id`, `kecam_id`, `address`, `zipcode`) VALUES
(13, 'hari agustian', 'hari.agustian@rocketmail.com', '0099039021', '26fdfb4cac60be407046d0e64f3c34862cad01cade3da3b358cdc996ab91067b', '1791947e4687e1d2', '', '', 0, 0, 0, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
