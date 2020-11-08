-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2020 at 05:25 AM
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
('babyteethers', 3, 'Organic Baby Teethers', 3.39, 50, '2020-10-29', 'dfasd'),
('bananas', 0, 'Organic Bananas', 4.49, 50, '2020-10-29', 'dfasd'),
('beefsteak', 2, 'Boneless Beef Ribeye Steak', 14.99, 50, '2020-10-29', 'dfasd'),
('broccoli', 0, 'Organic Broccoli', 2.99, 50, '2020-10-29', 'dfasd'),
('cacaosnacks', 3, 'Organic Snacks Cacao', 9.99, 50, '2020-10-29', 'dfasd'),
('celery', 0, 'Organic Celery Bunch', 2.69, 50, '2020-10-29', 'dfasd'),
('chickenbreast', 2, 'Organic Chicken Breast', 5.49, 50, '2020-10-29', 'dfasd'),
('chickentenders ', 2, 'Organic Chicken Tenders', 6.59, 50, '2020-10-29', 'dfasd'),
('chickenwings', 2, 'Organic Chicken Wings', 6.49, 50, '2020-10-29', 'dfasd'),
('coconutsnacks', 3, 'Organic Coconut Snacks ', 3.99, 50, '2020-10-29', 'dfasd'),
('crackers', 3, 'Late July Crackers', 3.79, 50, '2020-10-29', 'dfasd'),
('creamcheese', 1, 'Organic Valley Cream Cheese', 2.99, 50, '2020-10-29', 'dfasd'),
('creamies', 3, 'Organic Creamies', 3.59, 50, '2020-10-29', 'dfasd'),
('cripsychews', 3, 'Organic Crispy Chews ', 3.99, 50, '2020-10-29', 'dfasd'),
('eggs', 1, 'Conestoga Eggs', 5.99, 50, '2020-10-29', 'dfasd'),
('fruitsnacks', 3, 'Organic Fruit Snacks', 6.99, 50, '2020-10-29', 'dfasd'),
('lemons', 0, 'Organic Lemons', 3.99, 50, '2020-10-29', 'dfasd'),
('mangoes', 0, 'Organic Mangoes', 3.99, 50, '2020-10-29', 'dfasd'),
('pjackcheese', 1, 'Pepper Jack Cheese', 4.99, 50, '2020-10-29', 'dfasd'),
('popcorn', 3, 'Organic Sea Salt Popcorn ', 3.69, 50, '2020-10-29', 'dfasd'),
('strawberries', 0, 'Organic Strawberries', 5.89, 50, '2020-10-29', 'dfasd'),
('stringcheese', 1, 'Mozzarella String Cheese', 2.93, 50, '2020-10-29', 'dfasd'),
('veggiepops', 3, 'Organic Veggie Pops', 5.54, 50, '2020-10-29', 'dfasd'),
('waffles', 3, 'Organic Waffles', 3.99, 50, '2020-10-29', 'dfasd');

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
