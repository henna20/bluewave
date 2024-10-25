-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 02:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bwms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EID` int(11) NOT NULL,
  `ENAME` varchar(150) NOT NULL,
  `EDATE` date NOT NULL,
  `ETIME` time NOT NULL,
  `ECOACH` varchar(150) NOT NULL,
  `EADDRESS1` varchar(150) NOT NULL,
  `EADDRESS2` varchar(150) NOT NULL,
  `ECITY` varchar(150) NOT NULL,
  `ESTATE` varchar(150) NOT NULL,
  `ECOUNTRY` varchar(150) NOT NULL,
  `EPIN` varchar(150) NOT NULL,
  `EC1` varchar(150) NOT NULL,
  `EC2` varchar(150) NOT NULL,
  `EC3` varchar(150) NOT NULL,
  `EC4` varchar(150) NOT NULL,
  `EC5` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EID`, `ENAME`, `EDATE`, `ETIME`, `ECOACH`, `EADDRESS1`, `EADDRESS2`, `ECITY`, `ESTATE`, `ECOUNTRY`, `EPIN`, `EC1`, `EC2`, `EC3`, `EC4`, `EC5`) VALUES
(3, 'yorkshire Swimming Associate Open Masters Competition 2022', '2022-06-04', '09:30:00', 'Martin Thomas', '21B, Light Tower', 'Highgate', 'London', 'England', 'United Kingdom', 'N54 S6X', '50m Free Style', '200m Free Style', '100m Breaststroke', '200m Breaststroke', '400m Medley');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `PID` int(11) NOT NULL,
  `PNAME` varchar(150) NOT NULL,
  `PFIRSTNAME` varchar(150) NOT NULL,
  `PLASTNAME` varchar(150) NOT NULL,
  `PSTUDENTNAME` varchar(150) NOT NULL,
  `PPARENT` char(1) NOT NULL,
  `PPHONE` int(11) NOT NULL,
  `PEMAIL` varchar(150) NOT NULL,
  `PPASS` varchar(150) NOT NULL,
  `PCPASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`PID`, `PNAME`, `PFIRSTNAME`, `PLASTNAME`, `PSTUDENTNAME`, `PPARENT`, `PPHONE`, `PEMAIL`, `PPASS`, `PCPASS`) VALUES
(2, 'thomas', 'thomas', 'anto', 'james', 'f', 456789432, 'thomas@gmail.com', '4567', '4567');

-- --------------------------------------------------------

--
-- Table structure for table `race`
--

CREATE TABLE `race` (
  `RID` int(11) NOT NULL,
  `RCATEGORY` varchar(150) NOT NULL,
  `RSWIMMER` varchar(150) NOT NULL,
  `RTIME` time NOT NULL,
  `RDATE` date NOT NULL,
  `RBESTLAPTIME` time NOT NULL,
  `RSQUAD` int(11) NOT NULL,
  `RCOACH` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`RID`, `RCATEGORY`, `RSWIMMER`, `RTIME`, `RDATE`, `RBESTLAPTIME`, `RSQUAD`, `RCOACH`) VALUES
(7, '200m Breaststroke', 'tia', '02:23:13', '2022-05-02', '01:13:34', 1, 'alex'),
(8, '200m Free Style', 'aryan', '03:14:23', '2022-05-02', '02:14:45', 4, 'toni'),
(9, '200m Free Style', 'Riya', '01:20:15', '1996-05-06', '01:20:16', 1, 'alex');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `RGID` int(11) NOT NULL,
  `RGEVENTNAME` varchar(150) NOT NULL,
  `RGFIRSTNAME` varchar(150) NOT NULL,
  `RGSECONDNAME` varchar(150) NOT NULL,
  `RGCOACH` varchar(150) NOT NULL,
  `RGDATE` date NOT NULL,
  `RGTIME` time NOT NULL,
  `RGADDRESS1` varchar(150) NOT NULL,
  `RGADDRESS2` varchar(150) NOT NULL,
  `RGCITY` varchar(150) NOT NULL,
  `RGSTATE` varchar(150) NOT NULL,
  `RGCOUNTRY` varchar(150) NOT NULL,
  `RGPIN` varchar(150) NOT NULL,
  `RGCATEGORY` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`RGID`, `RGEVENTNAME`, `RGFIRSTNAME`, `RGSECONDNAME`, `RGCOACH`, `RGDATE`, `RGTIME`, `RGADDRESS1`, `RGADDRESS2`, `RGCITY`, `RGSTATE`, `RGCOUNTRY`, `RGPIN`, `RGCATEGORY`) VALUES
(1, 'yorkshire Swimming Associate Open Masters Competition 2022', 'James', 'Thomas', 'Martin Thomas', '2022-06-04', '09:30:00', '21B, Light Tower', 'Highgate', 'London', 'England', 'United Kingdom', 'N54 S6X', '200m Free Style'),
(4, 'yorkshire Swimming Associate Open Masters Competition 2022', 'riya', 'mohanan', 'Martin Thomas', '2022-06-04', '09:30:00', '21B, Light Tower', 'Highgate', 'London', 'England', 'United Kingdom', 'N54 S6X', '400m Medley'),
(5, 'yorkshire Swimming Associate Open Masters Competition 2022', 'riya', 'mohanan', 'Martin Thomas', '2022-06-04', '09:30:00', '21B, Light Tower', 'Highgate', 'London', 'England', 'United Kingdom', 'N54 S6X', '400m Medley'),
(6, 'yorkshire Swimming Associate Open Masters Competition 2022', 'riya', 'mohanan', 'Martin Thomas', '2022-06-04', '09:30:00', '21B, Light Tower', 'Highgate', 'London', 'England', 'United Kingdom', 'N54 S6X', '200m Free Style'),
(7, 'yorkshire Swimming Associate Open Masters Competition 2022', 'james', 'thomas', 'Martin Thomas', '2022-06-04', '09:30:00', '21B, Light Tower', 'Highgate', 'London', 'England', 'United Kingdom', 'N54 S6X', '200m Breaststroke'),
(11, 'yorkshire Swimming Associate Open Masters Competition 2022', 'james', 'thomas', 'Martin Thomas', '2022-06-04', '09:30:00', '21B, Light Tower', 'Highgate', 'London', 'England', 'United Kingdom', 'N54 S6X', '200m Free Style'),
(12, 'yorkshire Swimming Associate Open Masters Competition 2022', 'james ', 'thomas', 'Martin Thomas', '2022-06-04', '09:30:00', '21B, Light Tower', 'Highgate', 'London', 'England', 'United Kingdom', 'N54 S6X', '100m Breaststroke'),
(13, 'yorkshire Swimming Associate Open Masters Competition 2022', 'james ', 'thomas', 'Martin Thomas', '2022-06-04', '09:30:00', '21B, Light Tower', 'Highgate', 'London', 'England', 'United Kingdom', 'N54 S6X', '100m Breaststroke'),
(14, 'yorkshire Swimming Associate Open Masters Competition 2022', 'james', 'thomas', 'Martin Thomas', '2022-06-04', '09:30:00', '21B, Light Tower', 'Highgate', 'London', 'England', 'United Kingdom', 'N54 S6X', '50m Free Style'),
(15, 'yorkshire Swimming Associate Open Masters Competition 2022', 'james', 'thomas', 'Martin Thomas', '2022-06-04', '09:30:00', '21B, Light Tower', 'Highgate', 'London', 'England', 'United Kingdom', 'N54 S6X', '200m Free Style');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `WID` int(11) NOT NULL,
  `WDAY` varchar(50) NOT NULL,
  `WDATE` date NOT NULL,
  `WSESSION` int(11) NOT NULL,
  `WSQUAD` int(11) NOT NULL,
  `WCOACH` varchar(150) NOT NULL,
  `WTIME` time NOT NULL,
  `WPOOL` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`WID`, `WDAY`, `WDATE`, `WSESSION`, `WSQUAD`, `WCOACH`, `WTIME`, `WPOOL`) VALUES
(1, 'Sunday', '2022-05-22', 1, 1, 'Alex George', '10:30:00', 'Teaching Pool'),
(4, 'Sunday', '2022-05-22', 2, 2, 'Martin Thomas', '02:30:00', 'Teaching Pool'),
(6, 'Saturday', '2022-05-28', 1, 3, 'Shine Tomy', '10:00:00', 'Large Pool'),
(7, 'Saturday', '2022-05-28', 2, 4, 'Toni Roy', '02:30:00', 'Large Pool');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `TID` int(11) NOT NULL,
  `TNAME` varchar(150) NOT NULL,
  `TPASS` varchar(150) NOT NULL,
  `TFIRSTNAME` varchar(150) NOT NULL,
  `TLASTNAME` varchar(150) NOT NULL,
  `TSQUAD` int(11) NOT NULL,
  `TEMAIL` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`TID`, `TNAME`, `TPASS`, `TFIRSTNAME`, `TLASTNAME`, `TSQUAD`, `TEMAIL`) VALUES
(2, 'Alex', 'alex', 'Alex', 'george', 1, 'alex@gmail.com'),
(3, 'martin', 'martin', 'martin', 'thomas', 2, 'thomas@gmail.com'),
(4, 'shine', 'shine', 'shine', 'tomy', 4, 'shine@gmail.com'),
(5, 'toni', 'toni', 'toni', 'roy', 4, 'toni@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SID` int(11) NOT NULL,
  `SNAME` varchar(150) NOT NULL,
  `SFIRSTNAME` varchar(150) NOT NULL,
  `SLASTNAME` varchar(150) NOT NULL,
  `SGENDER` char(1) NOT NULL,
  `SDATEOFBIRTH` date NOT NULL,
  `SPHONE` int(11) NOT NULL,
  `SEMAIL` varchar(150) NOT NULL,
  `SPASS` varchar(150) NOT NULL,
  `SCPASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SID`, `SNAME`, `SFIRSTNAME`, `SLASTNAME`, `SGENDER`, `SDATEOFBIRTH`, `SPHONE`, `SEMAIL`, `SPASS`, `SCPASS`) VALUES
(2, 'james', 'james', 'thomas', 'm', '1996-05-20', 2147483647, 'james@gmail.com', '7890', '7890'),
(3, 'henna', 'henna', 'mohanan', 'f', '2022-05-03', 472342143, 'hennamohanan@gmail.com', '4567', '4567'),
(6, 'riya', 'riya', 'roy', 'f', '2022-05-04', 2147483647, 'riya@gmail.com', '3456', '4567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`RGID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`WID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `race`
--
ALTER TABLE `race`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `RGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `WID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
