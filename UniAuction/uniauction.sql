-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 04:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniauction`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ItemName` varchar(100) NOT NULL,
  `AccountNo` int(11) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT 'ac.uk',
  `location` text NOT NULL,
  `rating` double NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT 'ac.uk',
  `password` varchar(10) NOT NULL,
  `university` text NOT NULL,
  `Bankdetails` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL DEFAULT 'ac.uk',
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `AccountNo` int(11) NOT NULL,
  `buyingitems` int(11) NOT NULL,
  `buyerratings` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cardtransaction`
--

CREATE TABLE `cardtransaction` (
  `CardHolderName` text NOT NULL,
  `Cardnumber` int(16) NOT NULL,
  `Expirymonth` int(2) NOT NULL,
  `ExpiryYear` int(4) NOT NULL,
  `CCV` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notificationmanager`
--

CREATE TABLE `notificationmanager` (
  `buyer` varchar(100) NOT NULL,
  `seller` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `dropoffdate` date NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paypaltransaction`
--

CREATE TABLE `paypaltransaction` (
  `paypalusername` varchar(100) NOT NULL,
  `paypalpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productitems`
--

CREATE TABLE `productitems` (
  `ItemName` varchar(100) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `Category` text NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Colour` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Dimensions` int(11) NOT NULL,
  `Description` int(11) NOT NULL,
  `Condition` tinyint(1) NOT NULL,
  `Safety` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `AccountNoB` int(11) NOT NULL,
  `AccountNoS` int(11) NOT NULL,
  `ItemName` int(11) NOT NULL,
  `DateOrdered` date NOT NULL,
  `DateDelivered` date NOT NULL,
  `TimeOrdered` datetime NOT NULL,
  `TimeDelivered` datetime NOT NULL,
  `Price` double NOT NULL,
  `TransactionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `AccountNo` int(11) NOT NULL,
  `sellingitems` int(11) NOT NULL,
  `sellerrating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `ItemName` varchar(100) NOT NULL,
  `ItemID` int(11) DEFAULT NULL,
  `Price` double NOT NULL,
  `Quantity` int(11) NOT NULL,
  `InitialCost` double NOT NULL,
  `PaymentMethod` tinyint(1) NOT NULL,
  `ItemsLocation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `storagebox`
--

CREATE TABLE `storagebox` (
  `availability` tinyint(1) NOT NULL,
  `StorageboxID` int(11) NOT NULL,
  `location` text NOT NULL,
  `collectionDate` date NOT NULL,
  `DepositDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `storagefacitlity`
--

CREATE TABLE `storagefacitlity` (
  `availability` int(11) NOT NULL,
  `totalboxes` int(11) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactionhistory`
--

CREATE TABLE `transactionhistory` (
  `deliverystatus` tinyint(1) NOT NULL,
  `ItemName` varchar(100) NOT NULL,
  `DateDelivered` date NOT NULL,
  `DateOrdered` date NOT NULL,
  `TImeDelivered` datetime NOT NULL,
  `TimeOrdered` datetime NOT NULL,
  `Price` double NOT NULL,
  `TransactionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountNo`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`AccountNo`),
  ADD KEY `AccountNo` (`AccountNo`);

--
-- Indexes for table `productitems`
--
ALTER TABLE `productitems`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD KEY `AccountNoB` (`AccountNoB`,`AccountNoS`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`AccountNo`),
  ADD KEY `AccountNo` (`AccountNo`);

--
-- Indexes for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  ADD PRIMARY KEY (`TransactionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productitems`
--
ALTER TABLE `productitems`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
