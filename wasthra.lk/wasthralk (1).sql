-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 04:40 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wasthralk`
--

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `codeNo` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`codeNo`, `photo`, `description`, `price`) VALUES
('002K', 's-l500.jpg', 'kids short tshirt with blue color / trending item best offer /quality product', '1000LKR');

-- --------------------------------------------------------

--
-- Table structure for table `mens`
--

CREATE TABLE `mens` (
  `codeNo` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mens`
--

INSERT INTO `mens` (`codeNo`, `photo`, `description`, `price`) VALUES
('006m', 's-l1600.jpg', 'tshirt', '500lkr'),
('007m', 's-l1600.jpg', 'tshirt', '400');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `pname` varchar(50) NOT NULL,
  `code` varchar(5) NOT NULL,
  `size` varchar(255) NOT NULL,
  `tphone` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `card` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`pname`, `code`, `size`, `tphone`, `address`, `amount`, `card`) VALUES
('Petronas Yamaha Motogp Team Polo Shirt NEW Officia', '004m', 'L', 715825064, '447/1 galle road pamburana matara', 500, 2589);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `telephone`, `password`, `usertype`) VALUES
(1, 'jsdfghjk', '0715825064', 'dfghjk', 'sdfghjk', 0),
(6, 'maduka', 'maduka@gmail.com', '582564', '123', 1),
(7, 'deshan', 'deshan@gmail.com', '456232', '456', 0),
(8, 'cc', 'savsv', 'savdsv', 'savvvvvvvvvvv', 0),
(9, 'uoc', 'uoc', '123', 'uoc', 0),
(10, 'mad', 'mad@gmail', '456', '123', 0),
(11, 'heshan', 'heshan@123', '123', '123', 0),
(12, 'upadi', 'upadi@gmail.com', '0715825064', 'upadi@123', 0),
(13, 'isuru', 'isuru@gmail.com', '0712598654', 'isuru@123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `womens`
--

CREATE TABLE `womens` (
  `codeNo` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `womens`
--

INSERT INTO `womens` (`codeNo`, `photo`, `description`, `price`) VALUES
('001K', 's-l500.jpg', 'kids short tshirt with blue color / trending item best offer /quality product', '1000LKR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`codeNo`);

--
-- Indexes for table `mens`
--
ALTER TABLE `mens`
  ADD PRIMARY KEY (`codeNo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `womens`
--
ALTER TABLE `womens`
  ADD PRIMARY KEY (`codeNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
