--
-- Database: `ptemperature`
--

-- --------------------------------------------------------

--
-- Table structure for table `thresholdtbl1`
--

CREATE TABLE IF NOT EXISTS `thresholdtbl1` (
`tid` int(50) NOT NULL,
`srno` int(50) NOT NULL,
`devid` varchar(255) NOT NULL,
`mp` varchar(255) NOT NULL,
`unit` varchar(255) NOT NULL,
`location` varchar(255) NOT NULL,
`maxthreshold` int(50) NOT NULL,
`flag` int(10) NOT NULL,
`curval` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thresholdtbl1`
--

INSERT INTO `thresholdtbl1` (`tid`, `srno`, `devid`, `mp`, `unit`, `location`, `maxthreshold`, `flag`, `curval`) VALUES
(2, 102, 'd2', 'Pressure', 'Bar', 'Bihar', 55, 1, 56),
(3, 103, 'd3', 'Temperature', 'Fahrenheit', 'Canada', 55, 0, 48),
(4, 104, 'd4', 'Velocity', 'mph', 'D', 55, 1, 67),
(5, 105, 'd5', 'pressure', 'Pascal', 'E', 55, 0, 30),
(6, 106, 'd6', 'Pressure', 'Bar', 'G', 55, 0, 0),
(7, 107, 'd7', 'Temperature', 'celsius', 'H', 55, 0, 0),
(9, 109, 'd9', 'flux', 'gauss', 'aurangabad', 55, 0, 0),
(10, 110, 'd10', 'temperature', 'celsius', 'nashik', 55, 0, 0),
(11, 111, 'd11', 'temperature', 'celsius', 'z', 55, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thresholdtbl1`
--
ALTER TABLE `thresholdtbl1`
ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thresholdtbl1`
--
ALTER TABLE `thresholdtbl1`
MODIFY `tid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


