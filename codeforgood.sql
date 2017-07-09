-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2017 at 04:39 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeforgood`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankform`
--

CREATE TABLE `bankform` (
  `name` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankform`
--

INSERT INTO `bankform` (`name`, `account`, `type`, `proof`, `gender`, `phone`) VALUES
('Shashi', '1411005094', 'SBA', 'pancard passport', 'male', '1266123123'),
('anusha', '1411009865', 'SBA', 'pancard', 'female', '1012345678'),
('rishav', '141109876', 'CBA', 'passport', 'male', '1067483207'),
('rohan', '123456789', 'CBA', 'pancard', 'male', '128765432');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalform`
--

CREATE TABLE `hospitalform` (
  `patientid` varchar(255) NOT NULL,
  `patientname` varchar(255) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalform`
--

INSERT INTO `hospitalform` (`patientid`, `patientname`, `doctorname`, `disease`, `room`, `age`, `gender`) VALUES
('1', 'rohan', 'amar', 'migrane', '201', '20', 'male'),
('2', 'kavita', '203', 'dyslexia', '206', '23', 'female'),
('3', 'niranjan', 'shabheebha', 'typhoid', '207', '25', 'male'),
('4', 'rohan', 'brian', 'dengue', '304', '45', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `schoolform`
--

CREATE TABLE `schoolform` (
  `FID` int(255) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Section` varchar(30) NOT NULL,
  `Bloodgroup` varchar(30) NOT NULL,
  `Father` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolform`
--

INSERT INTO `schoolform` (`FID`, `School`, `Name`, `Class`, `Section`, `Bloodgroup`, `Father`, `City`) VALUES
(1, 'Delhi Public School', 'SHASHI', '12', 'C', 'O+ve', 'Om Prakash Singh', 'Bangalore'),
(2, 'Delhi Public School', 'Rishav', '12', 'B', 'AB', 'Aditya ', 'Mysore'),
(3, 'Central School', 'Shabhebha', '11', 'C', 'B', 'Amit raj', 'Mangalore'),
(4, 'Central School', 'Singham', '11', 'A', 'A', 'Surya Singham', 'Chennai'),
(5, 'Himalayan Public School', 'Rohan', '10', 'C', 'AB', 'Samastha', 'Bangalore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankform`
--
ALTER TABLE `bankform`
  ADD PRIMARY KEY (`account`);

--
-- Indexes for table `hospitalform`
--
ALTER TABLE `hospitalform`
  ADD PRIMARY KEY (`patientid`);

--
-- Indexes for table `schoolform`
--
ALTER TABLE `schoolform`
  ADD PRIMARY KEY (`FID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
