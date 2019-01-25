-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2017 at 01:27 PM
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
CREATE DATABASE `kunal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kunal`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `add` varchar(90) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `add`) VALUES
('asdd', '', ''),
('gsjak', '', ''),
('raj', '', ''),
('raj', 'aksjkja', 'ok'),
('kkg', '@.com', 'jkvldlvfd'),
('ram', 'syam@.com', 'hfsks;l'),
('hdrflksaf', '@ .com  ffifififi', 'jsdksdklal');

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
('Ranchi', 'lalpur', 200000, 750000, 3, 2, 2000, '49.jpg'),
('', '', 0, 0, 0, 0, 0, ''),
('patna', 'gaya', 300000, 750000, 4, 2, 3000, '17457715_291755931244623_751002113526449'),
('', '', 0, 0, 0, 0, 0, ''),
('ranchi', 'kadru', 0, 0, 0, 0, 0, ''),
('yrhreuwi', 'kjfsdka', 0, 0, 0, 0, 0, ''),
('yrhreuwi', 'kjfsdka', 0, 0, 0, 0, 0, ''),
('dkfjfdk', 'djvkfdj', 0, 0, 0, 0, 0, ''),
('Delhi', 'lalpur', 200000, 0, 4, 2, 3000, '28.jpg'),
('Delhi', 'lalpur', 200000, 0, 4, 2, 3000, '28.jpg'),
('patna', 'gaya', 200000, 700000, 4, 2, 2000, 'FB_IMG_14908898282433968.jpg'),
('patna', 'gaya', 200000, 700000, 4, 2, 2000, 'FB_IMG_14908898282433968.jpg'),
('patna', 'gaya', 200000, 700000, 4, 2, 2000, 'FB_IMG_14908898282433968.jpg'),
('dsfk', 'dkmk', 200000, 700000, 4, 3, 3000, '17498530_291216357965247_508572982573920'),
('gdgd', 'ddfdg', 200000, 700000, 2, 1, 2000, 'page2_img3.jpg'),
('gflkl', 'jfgkdl', 200000, 700000, 4, 2, 3000, 'img2.jpg'),
('gflkl', 'jfgkdl', 200000, 700000, 4, 2, 3000, 'img2.jpg'),
('gflkl', 'jfgkdl', 200000, 700000, 4, 2, 3000, 'img2.jpg'),
('dfghj', 'sdfghjk', 200000, 750000, 3, 2, 3000, 'page5_img2.jpg'),
('dfghj', 'sdfghjk', 200000, 750000, 3, 2, 3000, 'img2.jpg'),
('dfghj', 'sdfghjk', 200000, 750000, 3, 2, 3000, 'img2.jpg'),
('fsdghf', 'fsdghf', 200000, 700000, 3, 1, 3000, 'page5_img2.jpg'),
('fsdghf', 'fsdghf', 200000, 700000, 3, 1, 3000, 'page5_img2.jpg'),
('fsdghf', 'fsdghf', 200000, 700000, 3, 1, 3000, 'page5_img2.jpg'),
('sdfghjk', 'wertyu', 300000, 800000, 3, 3, 3000, 'page4_img1.jpg'),
('west benga', 'kolkata', 200000, 750000, 4, 3, 3000, '16.jpg'),
('west benga', 'kolkata', 200000, 750000, 4, 3, 3000, '16.jpg'),
('west benga', 'kolkata', 200000, 750000, 4, 3, 3000, '16.jpg'),
('patna', 'gya', 300000, 700000, 3, 2, 2000, '39.jpg'),
('dhanbad', 'jhariya', 200000, 700000, 2, 2, 3000, 'FB_IMG_14901597653483887.jpg'),
('tata', 'jamshedpur', 300000, 700000, 3, 1, 3000, 'FB_IMG_14901597044345793.jpg'),
('Delhi', 'sarojninagar', 300000, 700000, 3, 2, 3000, 'FB_IMG_14910402020036835.jpg'),
('Ranchi', 'Kashipur', 200000, 750000, 3, 2, 2000, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE IF NOT EXISTS `user1` (
  `name` varchar(10) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`name`, `mobile`, `email`, `address`) VALUES
('kunal', 9534149880, 'kunal.g15@gmail.com', 'lalpur'),
('kunal', 0, '', ''),
('kunal', 0, '', ''),
('kunal', 0, '', ''),
('', 0, '', ''),
('kunal', 0, '', ''),
('kunal', 0, '', ''),
('kunal', 0, '', ''),
('', 0, '', ''),
('', 0, '', ''),
('hhghg', 9534149880, '', ''),
('pradeep ku', 8409174710, 'pradeepkumar20495@gmail.com', 'kadru anand vihar '),
('fdsf', 0, '', ''),
('fdsf', 9876543210, 'fds', 'fd'),
('gfsdhgfd', 9876543210, 'vfdgdf', ''),
('Ravi', 767678676, 'moneyrrfs', 'fsdfsd'),
('fsdf', 78687, 'fdsf', ''),
('', 0, '', ''),
('fsaf', 8668, 'sdffds', ''),
('fsaf', 8668, 'sdffds', ''),
('fdsf', 788, '', ''),
('sdg', 8975642563, 'fdsfsd@fds.com', ''),
('dsds', 1234567891, 'jfj@.com', ''),
('raj', 8804932321, 'rajkumarstevdevid@gmail.com', 'anand vihar kadru'),
('pradsdds', 1234567890, 'pradeepkumar20495@gmail.com', 'ksdfm'),
('pk', 1234567890, '@.com', 'pk'),
('av', 1234567890, '@.com', 'jskdj'),
('raj23', 1234667890, '@..com', 'ksdjfkds'),
('jfsdfsd', 1234567890, '@.com', ''),
('jfsdfsd', 1234567890, '@.com', ''),
('jfsdfsd', 1234567890, '@.com', ''),
('rakesh', 9431590188, '@gmail.com', ''),
('p', 1234567890, '@.com', ''),
('rakesh', 4567891230, '@.com', ''),
('rakesh', 4567891230, '@.com', ''),
('rakesh', 4567891230, '@.com', ''),
('rakesh', 4567891230, '@.com', ''),
('rakesh', 4567891230, '@.com', ''),
('rakesh ran', 1234567890, '@.com', ''),
('idfj', 5656493264, 'jbsdjh@.com', ''),
('prpfeew', 7840917471, '@.com hskhfdjs', 'heloo '),
('eyy', 1234567890, 'jhhsdkfjdsk@gmail.com', ''),
('pushpa', 7870595891, 'singhpushpa071@gmail.com', 'piska more'),
('yuio;', 9534149880, '@.com', ''),
('k', 7894561234, '@.com', ''),
('dfghjkl', 1203645987, '@.com', ''),
('dfghjkl;', 1234567890, '@.com', ''),
('puspa', 9534149880, '@1.com', ''),
('fghjkl', 1234567895, '@.com', '');
