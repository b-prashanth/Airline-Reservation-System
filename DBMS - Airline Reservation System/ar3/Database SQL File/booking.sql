-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 08:48 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ar1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `dispaddon` ()  NO SQL
select * from add_on$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `displayquery` ()  NO SQL
SELECT * FROM query$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `add_on`
--

CREATE TABLE `add_on` (
  `tokenno` int(11) NOT NULL,
  `tseat` varchar(20) NOT NULL,
  `baggage` varchar(20) NOT NULL,
  `tcheck` varchar(20) NOT NULL,
  `ins` varchar(20) NOT NULL,
  `ref` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `tokenno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `tokenno` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `token` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fromsrc` varchar(20) NOT NULL,
  `todest` varchar(20) NOT NULL,
  `flyon` date NOT NULL,
  `returnon` date DEFAULT NULL,
  `adult` int(11) NOT NULL DEFAULT '0',
  `children` int(11) DEFAULT '0',
  `phno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `booking_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `flight_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `details`
--
DELIMITER $$
CREATE TRIGGER `inserttrigger` AFTER INSERT ON `details` FOR EACH ROW insert into trigx values(NEW.token,'Inserted',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
-- (See below for the actual view)
--
CREATE TABLE `login` (
`username` varchar(20)
,`password` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `flight_type` varchar(20) NOT NULL,
  `fromsrc` varchar(20) NOT NULL,
  `todest` varchar(20) NOT NULL,
  `flyon` varchar(20) NOT NULL,
  `returnon` varchar(20) NOT NULL,
  `tclass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`flight_type`, `fromsrc`, `todest`, `flyon`, `returnon`, `tclass`) VALUES
('Round Trip', 'Bangalore', 'Delhi', '2019-10-20', '2019-10-21', 'Business class'),
('Round Trip', 'hyd', 'chennai', '2019-11-16', '2019-11-23', 'Economy class');

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE `refund` (
  `tokenno` int(11) NOT NULL,
  `refund_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `trigx`
--

CREATE TABLE `trigx` (
  `tokenno` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`) VALUES
(1, 'bp', 'parthab.333@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'harsha', 'harsha@gmail.com', '5aa3405a3f865c10f420a4a7b55cbff3');

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login`  AS  select `users`.`username` AS `username`,`users`.`password` AS `password` from `users` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_on`
--
ALTER TABLE `add_on`
  ADD KEY `do` (`tokenno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD KEY `for` (`tokenno`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`tokenno`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`token`);

--
-- Indexes for table `refund`
--
ALTER TABLE `refund`
  ADD KEY `tokenno` (`tokenno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_on`
--
ALTER TABLE `add_on`
  ADD CONSTRAINT `do` FOREIGN KEY (`tokenno`) REFERENCES `details` (`token`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `for` FOREIGN KEY (`tokenno`) REFERENCES `details` (`token`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `refund`
--
ALTER TABLE `refund`
  ADD CONSTRAINT `refund_ibfk_1` FOREIGN KEY (`tokenno`) REFERENCES `cost` (`tokenno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
