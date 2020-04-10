-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 07:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicine_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `aID` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`aID`, `uname`, `name`, `email`, `phone`, `gender`, `dob`, `password`) VALUES
(18, 'admin', 'Admin', 'admin@gmail.com', '01748278112', 'male', '5/May/1995', 'admin'),
(20, 'sultan', 'Sultan', 'sultan@yahoo.com', '01748278112', 'male', '1/January/1993', 'sultan');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cartID` int(10) NOT NULL,
  `vendorName` varchar(255) NOT NULL,
  `price` double(10,5) NOT NULL,
  `logicalType` varchar(255) NOT NULL,
  `generType` varchar(255) NOT NULL,
  `availabilty` int(255) NOT NULL,
  `cID` int(10) NOT NULL,
  `mID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cartID`, `vendorName`, `price`, `logicalType`, `generType`, `availabilty`, `cID`, `mID`) VALUES
(1, 'XYZ', 4500.00000, 'Solid', 'Peracetamol', 10, 20, 2),
(2, 'XYZ', 4500.00000, 'Solid', 'Peracetamol', 10, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cID` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cID`, `uname`, `name`, `email`, `phone`, `gender`, `dob`, `password`) VALUES
(20, 'sahim', 'Sahim', 'sahim@gmail.com', '01624909095', 'male', '10/October/1996', 'sahim'),
(23, 'sakir', 'Sakir', 'sakir@yahoo.com', '01748278114', 'male', '3/June/1993', 'sakir');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `mID` int(10) NOT NULL,
  `vendorName` varchar(255) NOT NULL,
  `price` double(10,5) NOT NULL,
  `logicalType` varchar(255) NOT NULL,
  `generType` varchar(255) NOT NULL,
  `availabilty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`mID`, `vendorName`, `price`, `logicalType`, `generType`, `availabilty`) VALUES
(2, 'XYZ', 4500.00000, 'Solid', 'Peracetamol', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orderaccept`
--

CREATE TABLE `orderaccept` (
  `oaID` int(10) NOT NULL,
  `vendorName` varchar(255) NOT NULL,
  `price` double(10,5) NOT NULL,
  `logicalType` varchar(255) NOT NULL,
  `generType` varchar(255) NOT NULL,
  `availabilty` int(255) NOT NULL,
  `cID` int(10) NOT NULL,
  `mID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderaccept`
--

INSERT INTO `orderaccept` (`oaID`, `vendorName`, `price`, `logicalType`, `generType`, `availabilty`, `cID`, `mID`) VALUES
(2, 'XYZ', 4500.00000, 'Solid', 'Peracetamol', 10, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_pendings`
--

CREATE TABLE `order_pendings` (
  `opID` int(10) NOT NULL,
  `vendorName` varchar(255) NOT NULL,
  `price` double(10,5) NOT NULL,
  `logicalType` varchar(255) NOT NULL,
  `generType` varchar(255) NOT NULL,
  `availabilty` int(255) NOT NULL,
  `cID` int(10) NOT NULL,
  `mID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_pendings`
--

INSERT INTO `order_pendings` (`opID`, `vendorName`, `price`, `logicalType`, `generType`, `availabilty`, `cID`, `mID`) VALUES
(3, 'XYZ', 4500.00000, 'Solid', 'Peracetamol', 10, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_requests`
--

CREATE TABLE `order_requests` (
  `orID` int(10) NOT NULL,
  `vendorName` varchar(255) NOT NULL,
  `price` double(10,5) NOT NULL,
  `logicalType` varchar(255) NOT NULL,
  `generType` varchar(255) NOT NULL,
  `availabilty` int(255) NOT NULL,
  `cID` int(10) NOT NULL,
  `mID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_requests`
--

INSERT INTO `order_requests` (`orID`, `vendorName`, `price`, `logicalType`, `generType`, `availabilty`, `cID`, `mID`) VALUES
(2, 'XYZ', 4500.00000, 'Solid', 'Peracetamol', 10, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uID` int(10) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `utype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uID`, `uname`, `password`, `utype`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'sahim', 'sahim', 'customer'),
(3, 'sahim', 'sahim', 'customer'),
(4, 'sahim', 'sahim', 'customer'),
(5, 'sakir', 'sakir', 'customer'),
(6, 'sultan', 'sultan', 'admin'),
(7, 'sultan', 'sultan', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`aID`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `cID` (`cID`),
  ADD KEY `mID` (`mID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `orderaccept`
--
ALTER TABLE `orderaccept`
  ADD PRIMARY KEY (`oaID`),
  ADD KEY `cID` (`cID`),
  ADD KEY `mID` (`mID`);

--
-- Indexes for table `order_pendings`
--
ALTER TABLE `order_pendings`
  ADD PRIMARY KEY (`opID`),
  ADD KEY `cID` (`cID`),
  ADD KEY `mID` (`mID`);

--
-- Indexes for table `order_requests`
--
ALTER TABLE `order_requests`
  ADD PRIMARY KEY (`orID`),
  ADD KEY `cID` (`cID`,`mID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `aID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cartID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `mID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderaccept`
--
ALTER TABLE `orderaccept`
  MODIFY `oaID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_pendings`
--
ALTER TABLE `order_pendings`
  MODIFY `opID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_requests`
--
ALTER TABLE `order_requests`
  MODIFY `orID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `mk1` FOREIGN KEY (`mID`) REFERENCES `medicines` (`mID`);

--
-- Constraints for table `order_requests`
--
ALTER TABLE `order_requests`
  ADD CONSTRAINT `ck2` FOREIGN KEY (`cID`) REFERENCES `customers` (`cID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
