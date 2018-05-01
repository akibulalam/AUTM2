-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 06:03 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autm`
--

-- --------------------------------------------------------

--
-- Table structure for table `circular`
--

CREATE TABLE `circular` (
  `heading` varchar(100) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clark`
--

CREATE TABLE `clark` (
  `branch` varchar(30) DEFAULT NULL,
  `personalno` int(10) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co`
--

CREATE TABLE `co` (
  `personalno` int(10) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ser` int(6) NOT NULL,
  `Commentor` int(10) NOT NULL,
  `Comment` varchar(200) NOT NULL,
  `CO_seen` char(5) NOT NULL DEFAULT 'no',
  `2ic_seen` char(5) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companyclark`
--

CREATE TABLE `companyclark` (
  `personalno` int(10) DEFAULT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companycommander`
--

CREATE TABLE `companycommander` (
  `personalno` int(10) DEFAULT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `headclark`
--

CREATE TABLE `headclark` (
  `personalno` int(10) DEFAULT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `individualsoldier`
--

CREATE TABLE `individualsoldier` (
  `personalno` int(10) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `personal_no` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'soldier',
  `role` varchar(10) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`personal_no`, `password`, `user_type`, `role`) VALUES
(7600, '221977416', 'CO', 'admin'),
(201514001, '201514001', 'HCLK', 'Head clerk'),
(201514002, '201514002', 'HCLK', 'Coy clerk'),
(201514003, '201514003', 'TCLK', 'Trg Clerk'),
(201514004, '201514004', 'JCO', 'Coy JCO'),
(201514005, '201514005', 'CCLK', 'Coy Clerk'),
(201514006, '201514006', 'PVT', 'User'),
(201514007, '201514007', 'PVT', 'User'),
(201514008, '201514008', 'OO', 'Officer'),
(201514009, '201514009', 'JCO', 'Coy JCO'),
(201514010, '201514010', '2IC', 'Staff'),
(201514011, '201514011', 'PVT', 'User'),
(201514035, '201514035', 'PVT', 'User'),
(201514123, '201514123', 'SO', 'Staff'),
(201514137, '201514137', 'CC', 'Coy Comd');

-- --------------------------------------------------------

--
-- Table structure for table `otherofficer`
--

CREATE TABLE `otherofficer` (
  `personalno` int(10) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otheruser`
--

CREATE TABLE `otheruser` (
  `personalno` int(10) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `personalno` int(10) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `personalno` int(10) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(20) DEFAULT NULL,
  `trade` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `joiningdate` date NOT NULL,
  `ServiceAge` int(10) DEFAULT NULL,
  `coursedone` varchar(200) DEFAULT NULL,
  `eligiblecourse` varchar(200) DEFAULT NULL,
  `company` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`personalno`, `FirstName`, `LastName`, `rank`, `trade`, `birthdate`, `age`, `height`, `weight`, `joiningdate`, `ServiceAge`, `coursedone`, `eligiblecourse`, `company`) VALUES
(1234, 'karim', 'rahim', NULL, 65458654, '2018-04-10', 0, NULL, NULL, '2018-04-01', 0, NULL, NULL, 'a'),
(7419, NULL, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(7533, NULL, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(7539, NULL, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(7600, NULL, NULL, NULL, 0, '0000-00-00', 0, NULL, NULL, '0000-00-00', 0, NULL, NULL, ''),
(7648, NULL, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(7895, NULL, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(7945, NULL, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(7946, NULL, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(7989, NULL, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(7990, NULL, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(8964, NULL, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(9999, NULL, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(555555, NULL, NULL, NULL, 0, '1985-04-24', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(5854656, NULL, NULL, NULL, 0, '2018-04-18', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(56545646, NULL, NULL, NULL, 0, '1985-04-19', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(123456789, NULL, NULL, NULL, 0, '2006-04-20', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, ''),
(201514013, 'zakir', 'rahaman', 'sgt', 0, '1972-02-16', 46, 168, 70, '1996-01-24', 22, 'gmt,tt,btt,arms cdo,bmr,att,sgtc', 'woc', 'Q'),
(201514014, 'farhan', 'khan', 'sgt', 0, '1973-11-06', 44, 174, 74, '1998-01-24', 20, 'gmt,tt,btt,arms cdo,bmr,att,sgtc', 'woc', 'R'),
(201514015, 'khaledur', 'rahaman', 'cpl', 0, '1982-12-26', 35, 170, 71, '2004-01-24', 14, 'gmt,tt,btt,arms cdo,bmr,att', 'sgtc', 'HQ'),
(201514016, 'arman', 'rahaman', 'cpl', 0, '1982-02-16', 36, 168, 74, '2004-01-24', 14, 'gmt,tt,btt,arms cdo,bmr,att', 'sgtc', 'P'),
(201514017, 'ismum', 'rahaman', 'cpl', 0, '1983-11-06', 34, 174, 70, '2004-01-24', 14, 'gmt,tt,btt,arms cdo,bmr,att', 'sgtc', 'Q'),
(201514018, 'asif', 'rahaman', 'lcpl', 0, '1986-04-16', 32, 171, 71, '2005-01-14', 13, 'gmt,tt,btt,arms cdo,bmr', 'att', 'R'),
(201514019, 'abdul', 'mazed', 'lcpl', 0, '1987-05-06', 30, 169, 72, '2006-04-24', 11, 'gmt,tt,btt,arms cdo,bmr', 'att', 'HQ'),
(201514020, 'sheikh', 'rasel', 'snk', 0, '1993-05-23', 24, 167, 70, '2012-04-26', 5, 'gmt,tt,bmr', 'btt', 'P'),
(201514021, 'hanif', 'uddin', 'snk', 0, '1994-04-23', 24, 164, 66, '2016-04-26', 1, 'none', 'none', 'Q'),
(987654321, NULL, NULL, NULL, 0, '2026-04-18', NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `staffofficer`
--

CREATE TABLE `staffofficer` (
  `personalno` int(10) DEFAULT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trainingclark`
--

CREATE TABLE `trainingclark` (
  `personalno` int(10) DEFAULT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `two_ic`
--

CREATE TABLE `two_ic` (
  `personalno` int(10) DEFAULT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `rank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clark`
--
ALTER TABLE `clark`
  ADD KEY `personalno` (`personalno`);

--
-- Indexes for table `companyclark`
--
ALTER TABLE `companyclark`
  ADD KEY `personalno` (`personalno`);

--
-- Indexes for table `companycommander`
--
ALTER TABLE `companycommander`
  ADD KEY `personalno` (`personalno`);

--
-- Indexes for table `headclark`
--
ALTER TABLE `headclark`
  ADD KEY `personalno` (`personalno`);

--
-- Indexes for table `individualsoldier`
--
ALTER TABLE `individualsoldier`
  ADD PRIMARY KEY (`personalno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`personal_no`),
  ADD UNIQUE KEY `personal_no` (`personal_no`);

--
-- Indexes for table `otherofficer`
--
ALTER TABLE `otherofficer`
  ADD KEY `personalno` (`personalno`);

--
-- Indexes for table `otheruser`
--
ALTER TABLE `otheruser`
  ADD KEY `personalno` (`personalno`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`personalno`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`personalno`);

--
-- Indexes for table `staffofficer`
--
ALTER TABLE `staffofficer`
  ADD KEY `personalno` (`personalno`);

--
-- Indexes for table `trainingclark`
--
ALTER TABLE `trainingclark`
  ADD KEY `personalno` (`personalno`);

--
-- Indexes for table `two_ic`
--
ALTER TABLE `two_ic`
  ADD KEY `personalno` (`personalno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clark`
--
ALTER TABLE `clark`
  ADD CONSTRAINT `clark_ibfk_1` FOREIGN KEY (`personalno`) REFERENCES `person` (`personalno`);

--
-- Constraints for table `companyclark`
--
ALTER TABLE `companyclark`
  ADD CONSTRAINT `companyclark_ibfk_1` FOREIGN KEY (`personalno`) REFERENCES `profile` (`personalno`);

--
-- Constraints for table `companycommander`
--
ALTER TABLE `companycommander`
  ADD CONSTRAINT `companycommander_ibfk_1` FOREIGN KEY (`personalno`) REFERENCES `person` (`personalno`);

--
-- Constraints for table `headclark`
--
ALTER TABLE `headclark`
  ADD CONSTRAINT `headclark_ibfk_1` FOREIGN KEY (`personalno`) REFERENCES `profile` (`personalno`);

--
-- Constraints for table `otherofficer`
--
ALTER TABLE `otherofficer`
  ADD CONSTRAINT `otherofficer_ibfk_1` FOREIGN KEY (`personalno`) REFERENCES `person` (`personalno`),
  ADD CONSTRAINT `otherofficer_ibfk_2` FOREIGN KEY (`personalno`) REFERENCES `person` (`personalno`);

--
-- Constraints for table `otheruser`
--
ALTER TABLE `otheruser`
  ADD CONSTRAINT `otheruser_ibfk_1` FOREIGN KEY (`personalno`) REFERENCES `person` (`personalno`);

--
-- Constraints for table `staffofficer`
--
ALTER TABLE `staffofficer`
  ADD CONSTRAINT `staffofficer_ibfk_1` FOREIGN KEY (`personalno`) REFERENCES `person` (`personalno`);

--
-- Constraints for table `trainingclark`
--
ALTER TABLE `trainingclark`
  ADD CONSTRAINT `trainingclark_ibfk_1` FOREIGN KEY (`personalno`) REFERENCES `profile` (`personalno`);

--
-- Constraints for table `two_ic`
--
ALTER TABLE `two_ic`
  ADD CONSTRAINT `two_ic_ibfk_1` FOREIGN KEY (`personalno`) REFERENCES `person` (`personalno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
