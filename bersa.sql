-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 10:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bersa`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothee`
--

CREATE TABLE `clothee` (
  `ID` int(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `CTYP` varchar(255) NOT NULL,
  `FABR` varchar(255) NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothee`
--

INSERT INTO `clothee` (`ID`, `EMAIL`, `CTYP`, `FABR`, `TIME`) VALUES
(1, 'wasihun.beyene@gmail.com', 'kids', 'cotton,fur', '2021-10-20 18:56:36'),
(2, 'tomasbeyene21@gmail.com', 'young', 'fur,elastic', '2021-10-20 18:59:39'),
(3, 'sarabeyene21@gmail.com', 'baby', 'cotton,fur,jeans,kaki', '2021-10-20 19:00:35'),
(4, 'beyene@gmail.com', 'kids', 'hdbdhv', '2021-10-20 19:12:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothee`
--
ALTER TABLE `clothee`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothee`
--
ALTER TABLE `clothee`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
