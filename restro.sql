-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 03:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`) VALUES
(1, 'admin', 'mayank');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fdqlty` varchar(20) NOT NULL,
  `srvc` varchar(20) NOT NULL,
  `cln` varchar(20) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `fdqlty`, `srvc`, `cln`, `comment`) VALUES
(1, '', '', '', '', ''),
(2, 'minku2711@gmail.com', 'good', 'average', 'good', 'nm,./'),
(3, 'minku2711@gmail.com', 'poor', 'average', 'poor', 'please use fans of better qlty 7777\r\n'),
(4, 'minku2711@gmail.com', 'poor', 'average', 'poor', 'please use fans of better qlty 7777\r\n'),
(5, 'minku2711@gmail.com', 'poor', 'average', 'poor', 'please use fans of better qlty 7777\r\n'),
(6, 'minku2711@gmail.com', 'poor', 'average', 'poor', 'please use fans of better qlty 7777\r\n'),
(7, 'minku2711@gmail.com', 'poor', 'average', 'poor', 'please use fans of better qlty 7777\r\n'),
(8, 'minku2711@gmail.com', 'poor', 'average', 'poor', 'please use fans of better qlty 7777\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tablecode` varchar(8) NOT NULL,
  `pswd` varchar(8) NOT NULL,
  `dish` varchar(90) NOT NULL,
  `no` int(2) NOT NULL,
  `totalcost` int(10) NOT NULL,
  `cpncd` int(10) NOT NULL,
  `chck` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tablecode`, `pswd`, `dish`, `no`, `totalcost`, `cpncd`, `chck`) VALUES
(272, 'sjogbj o', 'JOR JION', 'abc', 1, 10, 909, 'Y'),
(273, 'sjogbj o', 'JOR JION', 'abc', 2, 20, 909, 'Y'),
(276, 'sjogbj o', 'JOR JION', 'abc', 4, 40, 909, 'Y'),
(278, 'sjogbj o', 'JOR JION', 'abc', 2, 20, 909, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
