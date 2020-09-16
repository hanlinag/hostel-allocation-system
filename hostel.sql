-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 16, 2020 at 04:40 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `username`, `password`) VALUES
(1, 'a', 'a'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `studno` varchar(45) NOT NULL,
  `roomid` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`studno`, `roomid`) VALUES
('1111', '1'),
('1112', '1');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `studno` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`studno`, `amount`, `date`) VALUES
('1111', '5000', '14 / 08 / 2017 , 04:25:28'),
('1114', '5000', '14 / 08 / 2017 , 04:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `giftcard`
--

CREATE TABLE `giftcard` (
  `gid` int(45) NOT NULL,
  `pinno` varchar(45) DEFAULT NULL,
  `amount` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giftcard`
--

INSERT INTO `giftcard` (`gid`, `pinno`, `amount`) VALUES
(6, 'FFKR784KDL3IDL3F3K7', '10000'),
(7, 'X72GZ9LMJZ9H3MN5', '5000'),
(8, 'X72GZ9LMJZ9H3MN5', '5000'),
(9, 'X72GZ9LMJZ9H3MN5', '5000'),
(10, 'X72GZ9LMJZ9H3MN5', '5000'),
(11, 'X72GZ9LMJZ9H3MN5', '5000'),
(12, 'X72GZ9LMJZ9H3MN5', '5000'),
(13, 'X72GZ9LMJZ9H3MN5', '5000'),
(14, 'X72GZ9LMJZ9H3MN5', '5000'),
(15, 'X72GZ9LMJZ9H3MN5', '5000'),
(16, 'X72GZ9LMJZ9H3MN5', '5000'),
(17, 'X72GZ9LMJZ9H3MN5', '5000'),
(18, 'X72GZ9LMJZ9H3MN5', '5000'),
(19, 'X72GZ9LMJZ9H3MN5', '5000'),
(20, 'X72GZ9LMJZ9H3MN5', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `rollcall`
--

CREATE TABLE `rollcall` (
  `studno` varchar(45) DEFAULT NULL,
  `COUNT` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rollcall`
--

INSERT INTO `rollcall` (`studno`, `COUNT`) VALUES
('1111', '0');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomid` int(45) NOT NULL,
  `roomno` varchar(45) DEFAULT NULL,
  `noofstud` int(11) DEFAULT NULL,
  `avilable` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomid`, `roomno`, `noofstud`, `avilable`) VALUES
(1, '111', 4, '2'),
(2, '1111', 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studno` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `fathername` varchar(45) DEFAULT NULL,
  `courseyr` varchar(45) DEFAULT NULL,
  `academicyr` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phno` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `balance` varchar(45) DEFAULT NULL,
  `stay` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `proposted` varchar(10) DEFAULT NULL,
  `allocate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studno`, `name`, `fathername`, `courseyr`, `academicyr`, `address`, `phno`, `email`, `balance`, `stay`, `password`, `proposted`, `allocate`) VALUES
('1111', 'Sai ', 'U Hla', 'Second Year', '2017-2018', 'Mandalay', '09865365', 'sai@gmail.com', '0', '1', 'admin', '1', '1'),
('1112', 'Sai Hla Pay ', 'U Sai', 'First Year', '2017-2018', 'Yangon', '', '', '', '0', '', '0', '1'),
('1114', 'Sai ', 'U Mya', 'Second Year', '2017-2018', 'Yangon', '07645345', 'sai@gmail.com', '0', '0', 'admin', '1', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`studno`,`roomid`);

--
-- Indexes for table `giftcard`
--
ALTER TABLE `giftcard`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studno`,`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `giftcard`
--
ALTER TABLE `giftcard`
  MODIFY `gid` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomid` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
