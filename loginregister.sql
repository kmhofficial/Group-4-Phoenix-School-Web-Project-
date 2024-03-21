-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 04:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'aa', 'aa', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(100) NOT NULL,
  `Account` varchar(5) NOT NULL,
  `Avatar` varchar(30) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CardNumber` varchar(100) NOT NULL,
  `CardDate` varchar(100) NOT NULL,
  `CardCode` int(100) NOT NULL,
  `CardOwnerFirstname` varchar(100) NOT NULL,
  `CardOwnerLastname` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `BillingAddress1` varchar(100) NOT NULL,
  `BillingAddress2` varchar(100) NOT NULL,
  `ZipCode` int(100) NOT NULL,
  `Phnumber` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Account`, `Avatar`, `firstName`, `lastName`, `Email`, `Password`, `CardNumber`, `CardDate`, `CardCode`, `CardOwnerFirstname`, `CardOwnerLastname`, `City`, `BillingAddress1`, `BillingAddress2`, `ZipCode`, `Phnumber`) VALUES
(1, 'Admin', 'download.gif', 'Kaung Myat ', 'Htet', 'admin@project', 'admin', '', '', 0, '', '', '', '', '', 0, 0),
(2, '', 'avatar.jpg', 'User ', '1', 'user', 'user', '', '', 0, '', '', '', '', '', 0, 0),
(5, '', 'download.gif', 'Kaung Myat ', 'Htet', 'kaungmyathtet@gmail.com', 'Kmh1422000', '3571083014594351', '02/2022', 0, 'Kaung Myat', 'Htet', 'Yangon', 'as', 'as', 12, 21);

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Product` varchar(255) NOT NULL,
  `Price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`ID`, `Name`, `Email`, `Address`, `Product`, `Price`) VALUES
(4, 'User 1', 'user', '', '            Dota 2          ,            Counter-Strike: Global Offensive          ', '36.00 $'),
(5, 'User 1', 'user', '', '            ROG Strix G17          ,            AOC C27G2Z Curved          ,            VOID RGB ELITE          ', '1730.00 $'),
(6, 'Kaung Myat Htet', 'kaungmyathtet@gmail.com', 'as', '            Dota 2          ', '20.00 $');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
