-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3606
-- Generation Time: Dec 04, 2019 at 08:51 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `addressdetails`
--

CREATE TABLE `addressdetails` (
  `addressid` int(11) NOT NULL,
  `houseno` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `mothername` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addressdetails`
--

INSERT INTO `addressdetails` (`addressid`, `houseno`, `city`, `state`, `country`, `pincode`, `mobile`, `email`, `fathername`, `mothername`) VALUES
(1, '10, 14TH BLOCK, 8TH CROSS', 'SHAKTHI NAGAR, MYSURU', 'KARNATAKA', 'India', '570029', '+91 8050623698', 'pramodn98@gmail.com', 'NAGASUNDARA', 'JYOTHI M');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'Sachin', 'sachins@gmail.com', '$2y$10$Txx55GhqCj9inOP4c.1Jh.oGe4U5Pcx0EIyzVjiOcuh3Ey97.F0La');

-- --------------------------------------------------------

--
-- Table structure for table `applicantdetails`
--

CREATE TABLE `applicantdetails` (
  `applicantid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicantdetails`
--

INSERT INTO `applicantdetails` (`applicantid`, `name`, `dob`, `gender`, `email`, `nationality`, `country`, `state`, `city`, `mobile`) VALUES
(1, 'PRAMOD N', '1998-06-02', 'Male', 'pramodn98@gmail.com', 'Indian', 'India', 'KARNATAKA', 'MYSURU', '+91 8050623698');

-- --------------------------------------------------------

--
-- Table structure for table `passportdetails`
--

CREATE TABLE `passportdetails` (
  `passportid` int(11) NOT NULL,
  `passporttype` varchar(25) NOT NULL,
  `passportno` varchar(25) NOT NULL,
  `placeofissue` varchar(25) NOT NULL,
  `dateofissue` date NOT NULL,
  `dateofexpiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `passportdetails`
--

INSERT INTO `passportdetails` (`passportid`, `passporttype`, `passportno`, `placeofissue`, `dateofissue`, `dateofexpiry`) VALUES
(1, 'Ordinary Passport', '22311jhns214523', 'MYSURU', '2018-01-19', '2028-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `evisa_status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `evisa_status`) VALUES
(1, 'Pramod', 'pramodn98@gmail.com', '$2y$10$xnjHQoUH0vUiLsu/JrIpMeHBboieY6CebEOnjZXtdBKBZ.3xZnO9e', '+91 8050623698', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visadetails`
--

CREATE TABLE `visadetails` (
  `visaid` int(11) NOT NULL,
  `visatype` varchar(25) NOT NULL,
  `countryvisit` varchar(25) NOT NULL,
  `airportarrival` varchar(25) NOT NULL,
  `arrivaldate` date NOT NULL,
  `visaduration` int(5) NOT NULL,
  `airportdeparture` varchar(25) NOT NULL,
  `departuredate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visadetails`
--

INSERT INTO `visadetails` (`visaid`, `visatype`, `countryvisit`, `airportarrival`, `arrivaldate`, `visaduration`, `airportdeparture`, `departuredate`) VALUES
(1, 'e-Tourist Visa', 'United Kingdom', 'HEATHROW AIRPORT', '2019-12-30', 30, 'HEATHROW AIRPORT', '2020-01-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addressdetails`
--
ALTER TABLE `addressdetails`
  ADD PRIMARY KEY (`addressid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `applicantdetails`
--
ALTER TABLE `applicantdetails`
  ADD PRIMARY KEY (`applicantid`);

--
-- Indexes for table `passportdetails`
--
ALTER TABLE `passportdetails`
  ADD PRIMARY KEY (`passportid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `visadetails`
--
ALTER TABLE `visadetails`
  ADD PRIMARY KEY (`visaid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addressdetails`
--
ALTER TABLE `addressdetails`
  MODIFY `addressid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicantdetails`
--
ALTER TABLE `applicantdetails`
  MODIFY `applicantid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passportdetails`
--
ALTER TABLE `passportdetails`
  MODIFY `passportid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visadetails`
--
ALTER TABLE `visadetails`
  MODIFY `visaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
