-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 07:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plasmabank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `first-name` varchar(50) NOT NULL,
  `last-name` varchar(50) NOT NULL,
  `phone-no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user-name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `first-name`, `last-name`, `phone-no`, `email`, `user-name`, `password`) VALUES
(1, 'imam', 'tuhin', '0183********', 'imam@gmail.com', 'imamtuhin', 'imamtuhin');

-- --------------------------------------------------------

--
-- Table structure for table `donorinfo`
--

CREATE TABLE `donorinfo` (
  `id` int(11) NOT NULL,
  `first-name` varchar(50) NOT NULL,
  `last-name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone-no` varchar(30) NOT NULL,
  `area` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donorinfo`
--

INSERT INTO `donorinfo` (`id`, `first-name`, `last-name`, `gender`, `email`, `phone-no`, `area`, `division`, `blood_group`, `ddate`) VALUES
(7, 'md', 'sayem', 'male', 'sayem@gmail.com', '0179********', 'dhanmondi', 'dhaka', 'O+', '2020-09-13'),
(8, 'md', 'akash', 'male', 'akash@gmail.com', '018***', 'comilla', 'chittagong', 'O+', '2020-09-13'),
(11, 'abc', 'def', 'male', 'abcdef@gmail.com', '123****', 'gazipur', 'dhaka', 'AB-', '2020-09-14'),
(12, 'imam', 'tuhin', 'male', 'imam@gmail.com', '01836***', 'uttara', 'dhaka', 'B+', '2020-09-15'),
(13, 'imam', 'hossain', 'male', 'imam@gmail.com', '01836***', 'uttara', 'dhaka', 'B+', '2020-09-16'),
(14, 'Mr', 'AB', 'male', 'ab@gmail.com', '1234567', 'uttara', 'dhaka', 'AB-', '2020-09-21'),
(15, 'mr', 'sayem', 'male', 'sayem@gmail.com', '1111111111111111', 'dhanmondi', 'dhaka', 'A-', '2020-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo`
--

CREATE TABLE `patientinfo` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `blood_group` varchar(30) NOT NULL,
  `area` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `infact_date` date NOT NULL,
  `recovery_date` date NOT NULL,
  `pdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientinfo`
--

INSERT INTO `patientinfo` (`id`, `first_name`, `last_name`, `phone_no`, `blood_group`, `area`, `division`, `infact_date`, `recovery_date`, `pdate`) VALUES
(25, 'saif', 'rahman', '123456', 'A-', 'gulshan', 'dhaka', '2020-09-03', '2020-09-21', '2020-09-21'),
(26, 'alvi', 'rahman', '0000000000', 'O-', 'rampura', 'dhaka', '2020-09-10', '0000-00-00', '2020-09-22'),
(27, 'akash', 'dey', '11111111', 'B+', 'uttara', 'dhaka', '2020-09-04', '0000-00-00', '2020-09-22'),
(28, 'mr', 'alif', '22222222222222', 'A-', 'badda', 'dhaka', '0000-00-00', '0000-00-00', '2020-09-23'),
(29, 'mr', 'khan', '4444444444444444', 'AB-', 'mirpur', 'dhaka', '0000-00-00', '0000-00-00', '2020-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `registerinfo`
--

CREATE TABLE `registerinfo` (
  `id` int(50) NOT NULL,
  `first-name` varchar(50) NOT NULL,
  `last-name` varchar(50) NOT NULL,
  `phone-no` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password_in` varchar(50) NOT NULL,
  `rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerinfo`
--

INSERT INTO `registerinfo` (`id`, `first-name`, `last-name`, `phone-no`, `user_name`, `password_in`, `rdate`) VALUES
(40, 'imam', 'tuhin', '01836***', 'imam', '1234', '2020-09-15'),
(46, 'Mr', 'tuhin', '01836***', 'tuhin', '12345', '2020-09-20'),
(47, 'Mr.', 'AB', '01836***', 'ab', '123', '2020-09-20'),
(48, 'akask', 'ahmed', '01111111000', 'akash', '11234', '2020-09-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donorinfo`
--
ALTER TABLE `donorinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerinfo`
--
ALTER TABLE `registerinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donorinfo`
--
ALTER TABLE `donorinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patientinfo`
--
ALTER TABLE `patientinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `registerinfo`
--
ALTER TABLE `registerinfo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
