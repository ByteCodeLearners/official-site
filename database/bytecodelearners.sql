-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2020 at 03:41 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bytecodelearners`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_details_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_details_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

DROP TABLE IF EXISTS `member_details`;
CREATE TABLE IF NOT EXISTS `member_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` longtext COLLATE utf8_bin NOT NULL,
  `middle_name` longtext COLLATE utf8_bin NOT NULL,
  `last_name` longtext COLLATE utf8_bin NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQ_MOBILE_NUMBER` (`mobile_number`),
  UNIQUE KEY `UQ_EMAIL` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `member_details`
--

INSERT INTO `member_details` (`id`, `first_name`, `middle_name`, `last_name`, `mobile_number`, `email`) VALUES
(1, 'foo', 'foofoo', 'foobar', -1, 'example@test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
