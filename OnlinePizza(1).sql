-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2017 at 04:39 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `OnlinePizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `BillingAddress`
--

CREATE TABLE `BillingAddress` (
  `BillingAddressNo` varchar(50) NOT NULL,
  `AddressLine1` varchar(50) NOT NULL,
  `AddressLine2` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Zipcode` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BillingAddress`
--

INSERT INTO `BillingAddress` (`BillingAddressNo`, `AddressLine1`, `AddressLine2`, `City`, `State`, `Zipcode`, `email`) VALUES
('B001', 'Northeastern University', '', 'Boston', 'MA', 1234, 'onlinepizza@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `ClinetID` varchar(50) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `ShippingAdreessNo` varchar(50) NOT NULL,
  `BillingAdreessNo` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `phoneNum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Client`
--

INSERT INTO `Client` (`ClinetID`, `FName`, `LName`, `ShippingAdreessNo`, `BillingAdreessNo`, `Email`, `phoneNum`) VALUES
('C001', 'mo', 'dean', 'S001', 'B001', 'modern', 1234567890),
('G001', 'Guset', 'Guset', 'S001', 'B001', 'Guset', 0);

-- --------------------------------------------------------

--
-- Table structure for table `MobileInfo`
--

CREATE TABLE `MobileInfo` (
  `MobileID` varchar(50) NOT NULL,
  `OrderNo` varchar(50) NOT NULL,
  `ClientID` varchar(50) NOT NULL,
  `ShippingNo` varchar(50) NOT NULL,
  `Geolocation` varchar(50) NOT NULL,
  `DriverPhoneNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `PaymentNo` varchar(50) NOT NULL,
  `ClientID` varchar(50) NOT NULL,
  `Amount` float NOT NULL,
  `CreditNo` int(13) NOT NULL,
  `PaymentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `ProductNo` varchar(50) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`ProductNo`, `ProductName`, `Price`) VALUES
('P001', 'Supreme', 5.99),
('P002', 'Pepperoni', 5.99),
('P003', 'Customize', 5.99),
('P004', 'Baffalo wing', 3.99),
('P005', 'Bread', 2),
('P006', 'French Fries', 3),
('P007', 'Pepci', 1.5),
('P008', 'Coke', 1.5),
('P009', 'SpriteCoke', 1.5),
('P010', 'Small Set', 9.99),
('P011', 'Party Set', 12.99),
('P012', 'Family Set', 14.99);

-- --------------------------------------------------------

--
-- Table structure for table `runningNo`
--

CREATE TABLE `runningNo` (
  `Name` varchar(10) NOT NULL,
  `MAX` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `runningNo`
--

INSERT INTO `runningNo` (`Name`, `MAX`) VALUES
('P', 12),
('R', 2),
('U', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ShippingAdress`
--

CREATE TABLE `ShippingAdress` (
  `ShippingAdreessNo` varchar(50) NOT NULL,
  `AddressLine1` varchar(50) NOT NULL,
  `AddressLine2` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(10) NOT NULL,
  `Zipcode` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ShippingAdress`
--

INSERT INTO `ShippingAdress` (`ShippingAdreessNo`, `AddressLine1`, `AddressLine2`, `City`, `State`, `Zipcode`, `email`) VALUES
('S001', 'dfasf', 'afasdf', 'Boston', 'MA', 1234, 'modern');

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `USERID` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`USERID`, `Username`, `Password`) VALUES
('U001', 'user1', '1234'),
('U002', 'user2', '1234'),
('U003', 'user3', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BillingAddress`
--
ALTER TABLE `BillingAddress`
  ADD PRIMARY KEY (`BillingAddressNo`);

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`ClinetID`),
  ADD KEY `BillingAdreessNo` (`BillingAdreessNo`),
  ADD KEY `ShippingAdreessNo` (`ShippingAdreessNo`);

--
-- Indexes for table `MobileInfo`
--
ALTER TABLE `MobileInfo`
  ADD PRIMARY KEY (`MobileID`),
  ADD KEY `ClientID` (`ClientID`),
  ADD KEY `ShippingNo` (`ShippingNo`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`PaymentNo`),
  ADD KEY `ClientID` (`ClientID`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`ProductNo`);

--
-- Indexes for table `runningNo`
--
ALTER TABLE `runningNo`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `ShippingAdress`
--
ALTER TABLE `ShippingAdress`
  ADD PRIMARY KEY (`ShippingAdreessNo`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`USERID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Client`
--
ALTER TABLE `Client`
  ADD CONSTRAINT `Client_ibfk_1` FOREIGN KEY (`BillingAdreessNo`) REFERENCES `BillingAddress` (`BillingAddressNo`),
  ADD CONSTRAINT `Client_ibfk_2` FOREIGN KEY (`ShippingAdreessNo`) REFERENCES `ShippingAdress` (`ShippingAdreessNo`);

--
-- Constraints for table `MobileInfo`
--
ALTER TABLE `MobileInfo`
  ADD CONSTRAINT `MobileInfo_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `Client` (`ClinetID`),
  ADD CONSTRAINT `MobileInfo_ibfk_2` FOREIGN KEY (`ShippingNo`) REFERENCES `ShippingAdress` (`ShippingAdreessNo`);

--
-- Constraints for table `Payment`
--
ALTER TABLE `Payment`
  ADD CONSTRAINT `Payment_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `Client` (`ClinetID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
