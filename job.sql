-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 06:54 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`) VALUES
('654321'),
('654321'),
('654321');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `uid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`uid`, `email`, `password`) VALUES
(1, 'gungun@gmail.com', '654321'),
(2, 'test@test.com', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Fname` text NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Mob` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `Skill` varchar(255) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `jnam` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Education` varchar(255) NOT NULL,
  `Resume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Fname`, `Location`, `Mob`, `Email`, `pass`, `Experience`, `Skill`, `Profile`, `jnam`, `Company`, `Education`, `Resume`) VALUES
('ajay sir ', 'gonda ', 2147483647, 'ajaysir@gmail.com', '72dd2d5a50c74271a48ec8d1673c0991', 'phd', '.net,java,php', 'assisitant', 'software enginner', 'hcl', 'bcom', ''),
('anil kumar srivastava', 'gonda', 1234566889, 'as@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '2', 'ca', 'we', '', 'ed', 'mmbs', ''),
('k', 'k', 1234567890, 'kmj@gmail.com', '4c56ff4ce4aaf9573aa5dff913df997a', 'w', 'we', 'wer', 'we', 'wer', 'pg', ''),
('Rohit kumar srivastava', 'gonda', 1234567890, 'r@gmail.com', '202cb962ac59075b964b07152d234b70', 'sdf', 'asdf', 'asdf', '', 'asdfg', 'mmbs', ''),
('rohit srivastava', 'gonda', 2147483647, 'test1@test.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'fresher', 'c ,c++', 'tcs', 'teacher', 'tcs', 'bds', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` int(50) NOT NULL,
  `req` varchar(255) NOT NULL,
  `jname` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `jproname` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jid`, `cname`, `location`, `salary`, `req`, `jname`, `exp`, `jproname`, `contact`, `email`, `status`) VALUES
(1, 'wipro', 'Delhi', 12000, 'BCA', 'maintainece', 'fr', 'Rohit', '1234567890', 'r@gmail.com', ''),
(2, 'wipro', 'Delhi', 12000, 'BCA', 'maintainece', 'fr', 'Rohit', '1234567890', 'r@gmail.com', ''),
(3, 'TCS', 'Lucknow', 22000, 'Network course', 'Network handler', 'fr', 'vidha Srivastava', '00098765432222', 'a@gmail.com', ''),
(4, 'Hcl ', 'Gaziabad', 15000, 'designing degree', 'Assiant', 'y1', 'Rohit kumar', '0987654321', 'r@gmail.com', ''),
(5, 'tcs', 'lucknow', 22000, 'diploma', 'computer operator', 'fr', 'tcs company', '9721458181', 'tcslko@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `udt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `password`, `udt`) VALUES
(1, 'rohit@test.com', '123456', '2019-11-21 09:19:12'),
(12, 'him@gmail.com', '123456', '2020-01-02 03:49:56'),
(14, 'rohit@gmail.com', 'rohit123', '2020-02-07 04:20:05'),
(20, 'rohit@test1.com', '123456', '2020-06-04 14:00:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
