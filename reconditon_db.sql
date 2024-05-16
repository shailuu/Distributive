-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 04:33 PM
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
-- Database: `reconditon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `queriesNo` int(255) NOT NULL,
  `name` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`queriesNo`, `name`, `email`, `number`) VALUES
(4, 'Sanil Waiba', 'a@a', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `validation`
--

CREATE TABLE `validation` (
  `SN` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `validation`
--

INSERT INTO `validation` (`SN`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'b@gmail.com', '12345'),
(3, 'a@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleinfo`
--

CREATE TABLE `vehicleinfo` (
  `vehicleSN` int(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `bikename` varchar(255) NOT NULL,
  `model` date NOT NULL,
  `price` int(255) NOT NULL,
  `bike_number` varchar(255) NOT NULL,
  `owner_no` int(255) NOT NULL,
  `images` text NOT NULL,
  `descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicleinfo`
--

INSERT INTO `vehicleinfo` (`vehicleSN`, `company`, `bikename`, `model`, `price`, `bike_number`, `owner_no`, `images`, `descriptions`) VALUES
(2, 'Honda', 'Splender', '2009-02-18', 50000, 'Ba 45 Pa 2000', 5, 'img/splender.jpg', 'Comfortable bike'),
(4, 'Honda ', 'CRF', '2018-02-04', 499999, ' Ba 82pa 8171', 2, 'img/402316486_7108404382557719_4456148416484256492_n.jpg', 'In a good condition'),
(5, 'Honda', 'Dio', '2022-01-04', 120000, 'Ba pradesh 02 0236pa 6606', 1, 'img/390915804_24857240403875381_6994888695563917382_n.jpg', 'Need Servicing'),
(6, 'KTM', 'Duke 250', '2022-05-04', 480000, 'Ba pradesh 02 027pa 8276', 1, 'img/404653228_865287608633510_2646572476015109740_n.jpg', 'Youngstars choice'),
(7, 'Bajaj', 'Pulsar 220', '2022-08-04', 220000, 'Ba 78 pa 7026', 3, 'img/404710937_6965173673528450_2618317718012333810_n.jpg', 'Most popular bike of bajaj'),
(8, 'Yamaha', 'FZ v2', '2017-01-04', 82000, 'Ba 70 pa 8877', 3, 'img/399574633_1805142106593783_1700936630374486728_n.jpg', 'Most Comfortabke Bike');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`queriesNo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `validation`
--
ALTER TABLE `validation`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `vehicleinfo`
--
ALTER TABLE `vehicleinfo`
  ADD PRIMARY KEY (`vehicleSN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `queriesNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `validation`
--
ALTER TABLE `validation`
  MODIFY `SN` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicleinfo`
--
ALTER TABLE `vehicleinfo`
  MODIFY `vehicleSN` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
