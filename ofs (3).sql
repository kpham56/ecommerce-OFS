-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2020 at 04:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofs`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) DEFAULT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'dairyandeggs'),
(2, 'meat'),
(0, 'produce'),
(3, 'snacks');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventoryID` varchar(255) NOT NULL,
  `productTypeID` varchar(255) NOT NULL,
  `productID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderDetail`
--

CREATE TABLE `orderDetail` (
  `orderID` varchar(255) NOT NULL,
  `productID` varchar(255) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderStatus`
--

CREATE TABLE `orderStatus` (
  `orderID` varchar(255) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `number_items` int(11) DEFAULT NULL,
  `orderStatus` varchar(255) NOT NULL,
  `orderDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cardNumber` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `secure` varchar(255) NOT NULL,
  `expiration` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productDetail`
--

CREATE TABLE `productDetail` (
  `productID` varchar(255) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `inventoryDate` date DEFAULT NULL,
  `URL_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productDetail`
--

INSERT INTO `productDetail` (`productID`, `categoryID`, `productName`, `price`, `quantity`, `inventoryDate`, `URL_image`) VALUES
('apples', 0, 'Honey Crisp Apples', 1.99, 50, '2020-10-29', 'dfasd'),
('avocados ', 0, 'Organic Hass Avocados ', 2.79, 50, '2020-10-29', 'dfasd'),
('lemons', 0, 'Organic Lemons', 3.99, 50, '2020-10-29', 'dfasd'),
('strawberries', 0, 'Organic Strawberries', 5.89, 50, '2020-10-29', 'dfasd');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cardnum` int(16) NOT NULL,
  `crv` int(3) NOT NULL,
  `cardexpiration` int(4) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`username`, `password`, `address`, `cardnum`, `crv`, `cardexpiration`, `cardname`, `zipcode`, `state`) VALUES
('a', 'a', 'a', 2147483647, 123, 1234, 'a', '12345', 'a'),
('b', 'b', 'b', 1, 1, 1, 'b', '1', 'b'),
('bob', 'pass1212', '', 0, 0, 0, '', '', ''),
('max', 'password', '', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userType` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `streetname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD UNIQUE KEY `categoryName` (`categoryName`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD UNIQUE KEY `inventoryID` (`inventoryID`),
  ADD UNIQUE KEY `productTypeID` (`productTypeID`),
  ADD UNIQUE KEY `productID` (`productID`);

--
-- Indexes for table `orderDetail`
--
ALTER TABLE `orderDetail`
  ADD UNIQUE KEY `orderID` (`orderID`),
  ADD UNIQUE KEY `productID` (`productID`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Indexes for table `orderStatus`
--
ALTER TABLE `orderStatus`
  ADD UNIQUE KEY `orderID` (`orderID`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD UNIQUE KEY `cardNumber` (`cardNumber`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `userID` (`userID`),
  ADD UNIQUE KEY `secure` (`secure`);

--
-- Indexes for table `productDetail`
--
ALTER TABLE `productDetail`
  ADD UNIQUE KEY `productID` (`productID`),
  ADD UNIQUE KEY `productName` (`productName`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `streetname` (`streetname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
