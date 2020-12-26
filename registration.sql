-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 11:03 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ptemperature`
--

-- ----------------------------------------------------------
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`uid` int(30) NOT NULL,
`name` varchar(30) NOT NULL,
`email` varchar(30) NOT NULL,
`mobile` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uid`, `name`, `email`, `mobile`) VALUES
(2, 'Ekta Chavan1', 'ektachavan2017@gmail.com', '7769846421'),
(3, 'Tejal Salve', 'teja2017@gmail.com', '7769876520'),
(4, 'pooja wakchure', 'pooja2018@gmail.com', '7769876520'),
(5, 'preeti', 'preeti2019@gmail.com', '7969876526'),
(6, 'anita jadhav', 'anita2020@gmail.com', '9096250292'),
(7, 'pooja shahane', 'pooja2021@gmail.com', '9096250292'),
(8, 'Ashwini sonawane', 'ashwinisonawane121@gmail.com', '9158513297'),
(9, 'Ashu', 'ashu@gmail.com', '8698894460');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `uid` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;












