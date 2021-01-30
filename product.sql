-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 09:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydbpdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `count` int(11) NOT NULL,
  `ReleaseDate` date NOT NULL,
  `Code` int(11) NOT NULL,
  `vargisi` int(11) NOT NULL,
  `AddedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `ProductName`, `count`, `ReleaseDate`, `Code`, `vargisi`, `AddedAt`) VALUES
(1, 'asdsads', 48, '2020-11-02', 77320, 11, '2020-11-28 08:20:06'),
(2, 'პური', 39, '2020-11-03', 71778, 21, '2020-11-28 08:22:46'),
(3, 'ლეღვი', 58, '2020-11-12', 49050, 31, '2020-11-28 08:26:29'),
(4, 'მაიონეზი', 64, '2020-11-24', 51788, 28, '2020-11-28 08:27:10'),
(5, 'კეჩუპუ', 1, '2020-11-19', 53304, 29, '2020-11-28 08:28:50'),
(6, 'sss', 53, '2020-11-11', 50893, 31, '2020-11-28 08:45:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
