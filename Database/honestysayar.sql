-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 02:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honestysayar`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `id` int(30) NOT NULL,
  `salutation` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`id`, `salutation`, `firstname`, `middlename`, `lastname`, `dob`, `phoneno`, `emailid`, `branch`, `department`) VALUES
(1, 'MR', 'JAYRAJ', 'SHAILESHBHAI', 'SARVAIYA', '2000-12-02', '9727228041', 'jayraj@gamil.com', 'MORBI', 'CEO'),
(4, 'MR', 'PARTH', 'KLPESHBHAI', 'SHIROYA', '2000-04-03', '7667676766', 'parth@gmail.com', 'RAJKOT', 'admin'),
(5, 'MR', 'JAYRAJ', 'SHAILESHBHAI', 'SARVAIYA', '2000-12-02', '9727280413', 'jayu@gmail.com', 'morbi', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(30) NOT NULL,
  `salutation` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `designstion` varchar(30) NOT NULL,
  `dateofjoin` date NOT NULL,
  `bankname` varchar(30) NOT NULL,
  `accno` int(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `basicsalary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `salutation`, `firstname`, `middlename`, `lastname`, `dob`, `phoneno`, `emailid`, `designstion`, `dateofjoin`, `bankname`, `accno`, `branch`, `department`, `basicsalary`) VALUES
(3, 'MR', 'JAYRAJ', 'SHAILESHBHAI', 'SARVAIYA', '2000-12-02', '9727280413', 'jayraj@gamil.com', 'CEO', '2021-05-09', 'BOB', 2147483647, 'RAJKOT', 'ADMIN', 5000000),
(4, 'Miss.', 'SHIVANGI', 'DINESHBHAI', 'SANVHALA', '2001-09-03', '7867676754', 'shivu@gmail.com', 'DESIGNER', '2020-05-10', 'SBI', 2147483647, 'MORBI', 'DESIGN & DEVLOPER', 24000),
(5, 'MR', 'KISHAN', 'HASMUKHBHAI', 'AGHERA', '1998-08-09', '787654325', 'kishan@gmail.com', 'MANAGER', '2021-09-10', 'SBI', 57667766, 'RAJKOT', 'IT', 20000),
(7, 'Miss.', 'DEVANGI', 'SAROJBHAI', 'GOHEL', '1997-08-09', '6765656543', 'devu@gmail.com', 'DEVLOPER', '2019-05-10', 'BOB', 2147483647, 'AHEMDABAD', 'IT', 22000),
(8, 'MR', 'JAYDEEP', 'PARESHBHAI', 'SARVAIYA', '2002-12-09', '8787878787', 'jaydeep@gmail.com', 'accountant', '2020-03-10', 'RBI', 2147483647, 'PORBANDAR', 'ACCOUNTANT', 28000);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(1, 'jayraj', 'jayraj@gmail.com', 9727280413, 'N/A ', '2021-05-09 04:16:16', NULL, NULL, NULL),
(2, 'JAYRAJ', 'jayraj@gmail.com', 87767676656, 'hhfhj66576 ', '2021-05-09 04:33:42', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
