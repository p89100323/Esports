-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2016 at 12:43 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sjksports`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `bil` int(11) NOT NULL,
  `notice` varchar(50) NOT NULL,
  `noticedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`bil`, `notice`, `noticedate`) VALUES
(1, 'Tang Long Event', '2016-03-09'),
(2, 'asdasd', '2016-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bil` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `nomatric` varchar(20) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `eqmodel` varchar(20) NOT NULL,
  `statusmohon` varchar(20) NOT NULL,
  `eqstatus` varchar(15) NOT NULL,
  `bdate` date NOT NULL,
  `tarikh_tamat` varchar(20) NOT NULL,
  `bsport` int(11) NOT NULL,
  `grt` varchar(20) NOT NULL,
  `bcourt` int(11) NOT NULL,
  `btime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bil`, `name`, `nomatric`, `nohp`, `eqmodel`, `statusmohon`, `eqstatus`, `bdate`, `tarikh_tamat`, `bsport`, `grt`, `bcourt`, `btime`) VALUES
(6, 'ali', '', '', 'Panasonic Camera FZ2', 'Approved', 'Return', '2016-03-11', '1449635466', 1, 'Dr Hj. Mohd. Zainuri', 1, 1),
(7, 'jiun', '', '', 'Panasonic Camera FZ2', 'Approved', 'Return', '2016-03-11', '1449660064', 1, 'Dr Hj. Mohd. Zainuri', 2, 2),
(8, 'jiun', '', '', 'Nikon Camera CoolPix', 'Approved', 'Not Taken', '2016-03-12', '1449712618', 3, 'Dr Hj. Mohd. Zainuri', 12, 3),
(9, 'abu', '', '', 'PANASONIC LCD Projec', 'Approved', 'Return', '2016-03-11', '1449714428', 2, 'Dr Hj. Mohd. Zainuri', 10, 4),
(10, 'jiun', '', '0177708891', '', '', '', '2016-03-25', '', 2, '', 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `bookingtime`
--

CREATE TABLE `bookingtime` (
  `bil` int(11) NOT NULL,
  `abtime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingtime`
--

INSERT INTO `bookingtime` (`bil`, `abtime`) VALUES
(1, '8am-10am'),
(2, '10am-12pm'),
(3, '2pm-4pm'),
(4, '4pm-6pm'),
(5, '6pm-8pm'),
(6, '8pm-10pm');

-- --------------------------------------------------------

--
-- Table structure for table `courts`
--

CREATE TABLE `courts` (
  `bil` int(11) NOT NULL,
  `court` varchar(60) NOT NULL,
  `courtid` int(2) NOT NULL,
  `sportid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courts`
--

INSERT INTO `courts` (`bil`, `court`, `courtid`, `sportid`) VALUES
(1, 'Court_A', 1, 1),
(2, 'Court_B', 2, 1),
(3, 'Court_C', 3, 1),
(4, 'Court_D', 4, 1),
(5, 'Court_E', 5, 1),
(6, 'Court_F', 6, 1),
(7, 'Court_G', 7, 1),
(8, 'Court_H', 8, 1),
(9, 'Court_A', 9, 2),
(11, 'court_B', 10, 2),
(12, 'court_A', 11, 3),
(13, 'court_B', 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `bil` int(11) NOT NULL,
  `sport` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`bil`, `sport`) VALUES
(1, 'Badminton'),
(2, 'Basketball'),
(3, 'Football');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `bil` int(11) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `noic` int(8) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `categori` varchar(15) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`bil`, `name`, `noic`, `nohp`, `email`, `username`, `password`, `categori`) VALUES
(1, 'jye', 0, '0', '', 'jye', '12345', 'admin'),
(2, 'afiqah', 0, '132228626', 'afiqah.mt@gmail.com', 'afiqah', '12345', 'customer'),
(3, 'jiun', 0, '0177708891', 'peejiunjye@yahoo.com', 'jiun', '12345', 'customer'),
(11, 'abu', 0, '2147483647', 'abu@yahoo.com', 'abu', '09876', 'customer'),
(12, 'ali', 0, '12312312', 'ali@gmail', 'ali', '12345', 'customer'),
(14, 'abu', 0, '12345455', 'abu@email.com', 'abu', '45678', 'customer'),
(15, 'alex', 2147483647, '019123123123', 'alex@gmail.com', 'alex', 'alex123', 'customer'),
(16, 'Wong shi jie', 2147483647, '01982837464', 'shijie@yahoo.com', 'shijie', 'shijie123', ''),
(18, 'Wong shi jie', 2147483647, '01982837464', 'shijie@yahoo.com', 'shijie', 'shijie123', ''),
(19, 'as', 2147483647, '123123123123', 'sdasdasd', 'asdasdas', 'adasdasd', ''),
(20, 'asdasd', 2147483647, '123123123', 'asdasdasd', 'qweqwe', 'qweqwe', ''),
(21, 'asdasd', 2147483647, '123123123', 'asdasdasd', 'qweqwe', 'qweqwe', ''),
(22, 'sdassdfasf', 2147483647, '123413241324', '132412341324', 'sadfadsf', '332`add', ''),
(23, 'sdassdfasf', 2147483647, '123413241324', '132412341324', 'sadfadsf', '1231asds', ''),
(24, 'sdassdfasf', 2147483647, '123413241324', '132412341324', 'sadfadsf', '1231asds', ''),
(25, 'sdassdfasf', 2147483647, '123413241324', '132412341324', 'sadfadsf', '123123', ''),
(26, 'sdassdfasf', 2147483647, '123413241324', '132412341324', 'sadfadsf', 'asd', ''),
(27, 'sdassdfasf', 2147483647, '123413241324', '132412341324', 'sadfadsf', 'asd', ''),
(28, 'sdassdfasf', 2147483647, '123413241324', '132412341324', 'sadfadsf', 'asd', ''),
(29, 'sdassdfasf', 2147483647, '123413241324', '132412341324', 'sadfadsf', 'asd', ''),
(30, 'sdassdfasf', 2147483647, '123413241324', '132412341324', 'sadfadsf', 'asd', ''),
(31, 'qwe', 2147483647, '132413241221', 'asd123@asd.asd', 'qwertyuio', 'Qq123456', ''),
(32, 'qwe', 2147483647, '132413241221', 'asd123@asd.asd', 'qwertyuio', 'Qq123123', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`bil`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bil`),
  ADD KEY `btime` (`btime`),
  ADD KEY `bcourt` (`bcourt`),
  ADD KEY `bcourt_2` (`bcourt`),
  ADD KEY `btime_2` (`btime`);

--
-- Indexes for table `bookingtime`
--
ALTER TABLE `bookingtime`
  ADD PRIMARY KEY (`bil`);

--
-- Indexes for table `courts`
--
ALTER TABLE `courts`
  ADD PRIMARY KEY (`bil`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`bil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`bil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `bil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `bookingtime`
--
ALTER TABLE `bookingtime`
  MODIFY `bil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `courts`
--
ALTER TABLE `courts`
  MODIFY `bil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `bil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `bil` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
