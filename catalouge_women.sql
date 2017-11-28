-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2017 at 08:02 PM
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
-- Database: `pizza_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalouge_women`
--

DROP TABLE IF EXISTS `catalouge_women`;
CREATE TABLE IF NOT EXISTS `catalouge_women` (
  `name` varchar(50) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `photo_path` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalouge_women`
--

INSERT INTO `catalouge_women` (`name`, `id`, `price`, `photo_path`) VALUES
('Women Slim Fit Jeans (Blue)', 1, '49.99', '/project/images/women/denim1.jpg'),
('Distressed Slim Fit (Blue)', 2, '59.99', '/project/images/women/denim2.jpg'),
('Women Slim Fit Jeans (Black)', 3, '49.99', '/project/images/women/denim3.jpg'),
('Blue Bottoms', 4, '79.99', '/project/images/women/denim4.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
