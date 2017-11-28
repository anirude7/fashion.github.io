-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2017 at 08:25 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_master`
--

DROP TABLE IF EXISTS `customer_master`;
CREATE TABLE IF NOT EXISTS `customer_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_master`
--

INSERT INTO `customer_master` (`id`, `username`, `password`, `lastname`, `firstname`, `email`) VALUES
(10, 'ANIRUDe', '0118af338e587b46c64cc79782f494ea03b673872490c260590bd2b1c2976c533c3d771cc1caf30456dc70a21dc4662177f45e7e3ade0b4e078436344e7ad1ae', 'Patil', 'Aniruddha', 'ad_aniruddha@live.com'),
(12, 'jayneel08', 'da1ddcae64e75005a77ddd982498156cef1eb8c05e5997990d5d5be344f25605507daa747256641e01912a3cf5668dfadcd5eb26aed4b59a32fd30dea849cde9', 'Patel', 'Jayneel', 'jayneel@gmail.com'),
(14, 'anuragsingh', 'a33fc82a55f353520aab0c5a1bb80f54a71da3ea02231c34c005243bde24dbe6513a677b45563912ab2331c1a5f7584d6391245cf54eb67e41908988cfcc7b70', 'Singh', 'Anurag', 'anuragsingh@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
