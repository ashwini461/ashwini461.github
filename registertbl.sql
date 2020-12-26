--
-- Database: `temperature`
--

-- --------------------------------------------------------

--
-- Table structure for table `registertbl`
--

CREATE TABLE IF NOT EXISTS `registertbl` (
`uid` int(30) NOT NULL,
`name` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`mobno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registertbl`
--
ALTER TABLE `registertbl`
ADD PRIMARY KEY (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;









