
--
-- Database: `temperature`
--

-- --------------------------------------------------------

--
-- Table structure for table `sensordata`
--

CREATE TABLE IF NOT EXISTS `sensordata` (
  `deviceId` int(255) NOT NULL,
  `sensorVal` int(255) NOT NULL,
  `cdate` varchar(255) NOT NULL,
  `ctime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensordata`
--

INSERT INTO `sensordata` (`deviceId`, `sensorVal`, `cdate`, `ctime`) VALUES
(1, 35, '06-02-20', '04:29:51 PM'),
(2, 23, '06-02-20', '04:30:02 PM'),
(0, 65, '10-02-20', '03:51:57 PM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;













