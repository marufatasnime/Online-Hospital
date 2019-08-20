-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 07:28 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital2`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminform`
--

CREATE TABLE `adminform` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminform`
--

INSERT INTO `adminform` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Details` varchar(255) DEFAULT NULL,
  `Hospital_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `Name`, `Department`, `Email`, `Details`, `Hospital_name`) VALUES
(10, 'rahimul rahman', 'surgery', 'rahimulrahman@gmail.com', 'rahimrahimrahimrahimrahimrahim', 'Apollo'),
(11, 'karim Alam', 'surgery', 'karimsquare@gmail.com', 'specailist in surgery', 'Square'),
(12, 'karim', 'surgery', 'karimuahman@gmail.com', 'rjnhbgvhjfnjkeld', 'Apollo');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `first_name`, `last_name`, `Date_of_Birth`, `Location`, `Email`, `Password`, `Gender`) VALUES
(0, 'Ab', 'Islam', '1994-12-24', 'Bashundhara', 'ab@gmail.com', '0198572', '0'),
(1, 'Cd', 'Islam', '1994-12-24', 'Bashundhara', 'cd@gmail.com', '0198572', '0');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id` int(110) NOT NULL,
  `bName` varchar(255) NOT NULL,
  `bage` int(255) NOT NULL,
  `bEmail` varchar(255) NOT NULL,
  `bphone` int(255) NOT NULL,
  `bamount` int(255) NOT NULL,
  `baddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `bName`, `bage`, `bEmail`, `bphone`, `bamount`, `baddress`) VALUES
(1, 'rahimul rahman', 32, 'rahimulrahman@gmail.com', 1985727496, 1000, 'pochinki'),
(2, 'rahimul rahman', 32, 'rahimulrahman@gmail.com', 1985727496, 1000, 'pochinki'),
(3, 'rahimul rahman', 32, 'rahimulrahman@gmail.com', 1985727496, 1000, 'pochinki'),
(4, 'rahimul rahman', 32, 'rahimulrahman@gmail.com', 1985727496, 1000, 'pochinki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminform`
--
ALTER TABLE `adminform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminform`
--
ALTER TABLE `adminform`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
