-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 01:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charlesmigwi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_email`, `user_password`) VALUES
(1, 'charliemigwi@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `awash`
--

CREATE TABLE `awash` (
  `id` int(10) NOT NULL,
  `depature` varchar(255) NOT NULL,
  `arrival` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awash`
--

INSERT INTO `awash` (`id`, `depature`, `arrival`, `ticket`) VALUES
(1, '2:40Pm', '4:50PM', '900 Birr');

-- --------------------------------------------------------

--
-- Table structure for table `mieso`
--

CREATE TABLE `mieso` (
  `id` int(10) NOT NULL,
  `depature` varchar(255) NOT NULL,
  `arrival` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mieso`
--

INSERT INTO `mieso` (`id`, `depature`, `arrival`, `ticket`) VALUES
(1, '12:05PM', '2:15PM', '700 Birr');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `id` int(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `luggage` varchar(255) NOT NULL,
  `route` text NOT NULL,
  `date` date NOT NULL,
  `cancelled` tinyint(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `luggage`, `route`, `date`, `cancelled`) VALUES
(17, 'Rose', 'Mwende', 'Rose@gmail.com', '0701789543', '3 suitcases', 'Adama to Debre Zebit', '2017-02-18', 0),
(18, 'Edu', 'Edwin', 'Edwin@gmail.com', '0701974133', 'None', 'Adama to Debre Zebit', '2017-02-22', 1),
(19, 'Emily', 'makena', 'Emily@yahoo.com', '0701987633', 'None', 'Adama to Debre Zebit', '2017-02-17', 0),
(20, 'Eric', 'kimanthi', 'Eric@gmail.com', '0733662222', '3 Bags', 'Adama to Debre Zebit', '2017-02-17', 0),
(21, 'Earnest', 'Murimi', 'Murimi@gmail.com', '0711897745', 'None', 'Hosaena to Port of Doraleh', '2017-02-22', 1),
(22, 'Antony', 'Wambua', 'wambua@gmail.com', '0701978456', 'None', 'Hosaena to Port of Doraleh', '2017-02-17', 1),
(23, 'MMM', 'mmmm', 'mmmm', '0701875222', 'none', 'Hosaena to Port of Doraleh', '2017-02-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sebata`
--

CREATE TABLE `sebata` (
  `id` int(10) NOT NULL,
  `depature` varchar(255) NOT NULL,
  `arrival` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sebata`
--

INSERT INTO `sebata` (`id`, `depature`, `arrival`, `ticket`) VALUES
(1, '8:00Am', '11:45PM', '850 Birr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `awash`
--
ALTER TABLE `awash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mieso`
--
ALTER TABLE `mieso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sebata`
--
ALTER TABLE `sebata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awash`
--
ALTER TABLE `awash`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mieso`
--
ALTER TABLE `mieso`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sebata`
--
ALTER TABLE `sebata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
