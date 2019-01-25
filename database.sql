-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2017 at 11:55 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kunal`
--

-- --------------------------------------------------------

--
-- Table structure for table `p_info`
--

CREATE TABLE IF NOT EXISTS `p_info` (
  `city` varchar(10) NOT NULL,
  `area` varchar(20) NOT NULL,
  `l_price` int(11) NOT NULL,
  `u_price` int(11) NOT NULL,
  `no_of_bedroom` int(11) NOT NULL,
  `no_of_bathroom` int(11) NOT NULL,
  `radius` int(11) NOT NULL,
  `img` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_info`
--

INSERT INTO `p_info` (`city`, `area`, `l_price`, `u_price`, `no_of_bedroom`, `no_of_bathroom`, `radius`, `img`) VALUES
('Ranchi', 'lalpur', 200000, 700000, 4, 2, 3000, 'page1_img4.jpg'),
('Ranchi', 'Circular road', 200000, 700000, 4, 3, 3000, 'img5.jpg'),
('', '', 0, 0, 0, 0, 0, ''),
('', '', 0, 0, 0, 0, 0, ''),
('Delhi', 'Karol Bagh', 300000, 700000, 6, 4, 4000, '2.jpg'),
('Delhi', 'Jawaharnagar', 450000, 800000, 6, 3, 4500, '3.jpg'),
('Delhi', 'New Delhi', 550000, 750000, 7, 4, 5000, '4.jpg'),
('Delhi', 'New Delhi', 550000, 750000, 7, 4, 5000, '4.jpg'),
('Delhi', 'Nangoli', 200000, 700000, 3, 1, 2000, '5.jpg'),
('Delhi', 'Daria Ganj', 600000, 700000, 9, 4, 5500, '6.jpg'),
('Kolkata', 'Durga Nagar', 550000, 750000, 4, 2, 4000, '8.jpg'),
('', '', 650000, 750000, 6, 3, 5000, '9.jpg'),
('Kolkata', 'Kashipur', 650000, 750000, 6, 3, 5000, '9.jpg'),
('Ranchi', 'lalpur', 200000, 750000, 3, 2, 2000, '49.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE IF NOT EXISTS `user1` (
  `name` varchar(10) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`name`, `mobile`, `email`, `address`) VALUES
('kunal', '9534149880', 'kunal.g15@gmail.com', 'lalpur'),
('kunal', '', '', ''),
('kunal', '', '', ''),
('kunal', '', '', ''),
('', '', '', ''),
('kunal', '', '', ''),
('kunal', '', '', ''),
('kunal', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('hhghg', '9534149880', '', '');
