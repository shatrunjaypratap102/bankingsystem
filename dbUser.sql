-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2021 at 06:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SPARKSdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbUser`
--

CREATE TABLE `dbUser` (
  `Sno` int(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbUser`
--

INSERT INTO `dbUser` (`Sno`, `Name`, `Email`, `Balance`) VALUES
(1, 'Ritik jain', 'ritik@gmail.com', 6000),
(2, 'Dristi Pathak', 'dristi@gmail.com', 68090),
(3, 'Dinesh Taneja', 'DineshTa@gmail.com', 41500),
(4, 'riya jain', 'riya@gmail.com', 23100),
(5, 'satyam sharma', 'satyamsharma@gmail.com', 9200),
(6, 'shoaib qureshi', 'shoaibquershi@gmail.com', 78000),
(7, 'hardik pandya', 'pandyahardik@gmail.com', 50000),
(8, 'shreya sinha', 'shreya12sinha@gmail.com', 45000),
(9, 'Priyam pant', 'Priyam89pant@gmail.com', 20000),
(10, 'Shweta Tiwari', 'Shweta87tiwari@gmail.com', 12500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbUser`
--
ALTER TABLE `dbUser`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbUser`
--
ALTER TABLE `dbUser`
  MODIFY `Sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
