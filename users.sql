-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2017 at 10:21 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `from1` varchar(20) NOT NULL,
  `to1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `from1`, `to1`) VALUES
(3, 'tanmay22', 'abc123'),
(4, 'abc123', 'faheem'),
(5, 'abc123', 'tanmay22'),
(6, 'abc123', 'tanmay22'),
(7, 'abc123', 'faheem');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `type` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`type`, `username`, `first`, `last`, `email`, `mobile`, `password`) VALUES
('user', 'amey555', 'Amey', 'Jha', 'amey@gmail.com', '9790048621', '#tanmayjha'),
('user', 'Roger', 'mnsadkg', 'djkfgn', 'dfjgnk', 'sdgfjkn', 'sdjgkn'),
('user', 'tanmay22', 'Tanmay', 'Jha', 'tanmay.jha1@gmail.co', '9790048621', '#tanmayjha'),
('user', 'faheem', 'Faheem ', 'Ali', 'abc', '82374982365', 'abc'),
('user', 'abc123', 'Rishabh', 'jha', 'abc@gmail.com', '9699723043', '#tanmayjha');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no` varchar(20) NOT NULL,
  `from1` varchar(20) NOT NULL,
  `to1` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `operator` varchar(20) NOT NULL,
  `option1` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `cust` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`ID`, `name`, `mobile`, `email`, `no`, `from1`, `to1`, `date`, `time`, `operator`, `option1`, `type`, `cust`) VALUES
(1, 'Tanmay', '323223534', 'asbdkjs4', '2', 'VIT Hostel', 'Bangalore Airport', '0000-00-00', '2:00pm', 'Ola', 'Carrier', 'AC', 'faheem'),
(2, 'Tanmay', '9790048621', 'tanmay.jha1@gmail.co', '9790048621', 'VIT Hostel', 'Bangalore Airport', '0000-00-00', '2:00pm', 'Ola', 'Carrier', 'AC', 'tanmay22'),
(3, 'Rishabh', '09790048621', 'tanmay.jha1@gmail.co', '3', 'VIT Hostel', 'Bangalore Airport', '2017-12-31', '12:59', 'Uber', 'Carrier', 'AC', 'abc123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
