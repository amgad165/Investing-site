-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2020 at 12:00 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `ID` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`ID`, `username`, `password`) VALUES
(0, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `company_managment`
--

CREATE TABLE `company_managment` (
  `ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `state_of_residence` varchar(250) NOT NULL,
  `account_equity` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `trading_platform` varchar(250) NOT NULL,
  `company_manage_trading_details` varchar(250) NOT NULL,
  `company_manage_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_managment`
--

INSERT INTO `company_managment` (`ID`, `name`, `state_of_residence`, `account_equity`, `phone_number`, `trading_platform`, `company_manage_trading_details`, `company_manage_password`) VALUES
(1, 's', 's', 's', 's', '', '', ''),
(2, 's', 's', 's', 's', '', '', ''),
(3, 'a', 'a', 'a', 'a', 'Mt5', '', ''),
(4, 'asasd', 'asdasd', 'asd', 'asd', 'Mt5', 'asdad', 'asdad');

-- --------------------------------------------------------

--
-- Table structure for table `copy_company`
--

CREATE TABLE `copy_company` (
  `ID` int(250) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `state_of_residence` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `account_equity` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `trading_platform` varchar(250) NOT NULL,
  `copy_company_trading_details` varchar(250) NOT NULL,
  `copy_company_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copy_company`
--

INSERT INTO `copy_company` (`ID`, `full_name`, `state_of_residence`, `company_name`, `account_equity`, `phone_number`, `trading_platform`, `copy_company_trading_details`, `copy_company_password`) VALUES
(1, '', '', 'Amgad', '12', '12', '', '', ''),
(2, '', '', 'Amgad', '12', '12', '', '', ''),
(3, '', '', 'Amgad', '12', '12', '', '', ''),
(4, 'Amgad mohamed', '', 'sd', '123', '123', '', '', ''),
(5, 'b', '', 'b', 'b', 'b', '', '', ''),
(6, 'b', '', 'b', 'b', 'b', '', '', ''),
(7, 'szxzxz', '', 's', 'a', 'a', 'Mt4', '', ''),
(8, 'samy', '', 'sam', 'as', 'as', 'Mt4', 'aaa', 'sssss'),
(9, 'samy', '', 'sam', 'as', 'as', 'Mt4', 'aaa', 'sssss'),
(10, 'samy', '', 'sam', 'as', 'as', 'Mt4', 'aaa', 'sssss'),
(11, 'samy', '', 'sam', 'as', 'as', 'Mt4', 'aaa', 'sssss');

-- --------------------------------------------------------

--
-- Table structure for table `copy_individual`
--

CREATE TABLE `copy_individual` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `state_of_residence` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `account_equity` varchar(250) NOT NULL,
  `trading_platform` varchar(250) NOT NULL,
  `copy_indiv_trading_details` varchar(250) NOT NULL,
  `copy_indiv_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copy_individual`
--

INSERT INTO `copy_individual` (`ID`, `full_name`, `state_of_residence`, `phone_number`, `account_equity`, `trading_platform`, `copy_indiv_trading_details`, `copy_indiv_password`) VALUES
(4, 'Amgad', '', '01123599818', '5000', 'Mt4', '0', '0'),
(5, 'x', '', 'x', 'x', 'Mt5', '0', '0'),
(6, 'amgad', '', '2525', '25', 'Mt4', 'asdasddas', 'asddasasd'),
(7, 'amgad', '', '2525', '25', 'Mt4', 'asdasddas', 'asddasasd');

-- --------------------------------------------------------

--
-- Table structure for table `individual_managment`
--

CREATE TABLE `individual_managment` (
  `ID` int(11) NOT NULL,
  `individual_name` varchar(250) NOT NULL,
  `state_of_residence` varchar(250) NOT NULL,
  `account_equity` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `trading_platform` varchar(250) NOT NULL,
  `indiv_manage_details` varchar(250) NOT NULL,
  `indiv_manage_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individual_managment`
--

INSERT INTO `individual_managment` (`ID`, `individual_name`, `state_of_residence`, `account_equity`, `phone_number`, `trading_platform`, `indiv_manage_details`, `indiv_manage_password`) VALUES
(1, 'a', 'a', 'a', 'a', 'Mt4', '', ''),
(2, 'xxxxxxx', 'xxxxxxx', 'xxx', 'xxxxxxx', 'Mt4', 'xx', 'xx');

-- --------------------------------------------------------

--
-- Table structure for table `learin_forex`
--

CREATE TABLE `learin_forex` (
  `ID` int(11) NOT NULL,
  `class` varchar(250) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `trade_level` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learin_forex`
--

INSERT INTO `learin_forex` (`ID`, `class`, `full_name`, `state`, `trade_level`, `gender`, `phone_number`) VALUES
(2, 'Bootcamp', 'amgad', 's', 'Intermediate', 's', 's'),
(3, 'Bootcamp', 'amgad', 's', 'Intermediate', 's', 's'),
(4, 'Bootcamp', 'amgad', 's', 'Intermediate', 's', 's'),
(5, 'Regular', 're', 'ere', '', 'are', 'are'),
(6, 'Regular', 're', 're', 'Expert', 're', 're'),
(7, 'Regular2', 'we', 'we', '', 'we', 'we'),
(8, 'Regular2', 'x', 'x', '', 'x', 'x'),
(9, 'Regular2', 'x', 'x', '', 'x', 'x'),
(10, 'Regular2', 're', 're', 'Beginner', 're', 're'),
(11, 'Regular2', 'we', 'we', 'Intermediate', 'we', 'we'),
(12, 'Weekend', 'wek', 'se', '', 'se', 'se'),
(13, 'Weekend', 'wek', 'se', '', 'se', 'se'),
(14, 'Weekend', 'week', 'se', 'Beginner', 'se', 'se'),
(15, 'Webinar', 'v', 'v', 'Beginner', 'v', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `fb_link` varchar(250) NOT NULL,
  `whatsapp` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `insta` varchar(250) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `company_managment`
--
ALTER TABLE `company_managment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `copy_company`
--
ALTER TABLE `copy_company`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `copy_individual`
--
ALTER TABLE `copy_individual`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `individual_managment`
--
ALTER TABLE `individual_managment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `learin_forex`
--
ALTER TABLE `learin_forex`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_managment`
--
ALTER TABLE `company_managment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `copy_company`
--
ALTER TABLE `copy_company`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `copy_individual`
--
ALTER TABLE `copy_individual`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `individual_managment`
--
ALTER TABLE `individual_managment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `learin_forex`
--
ALTER TABLE `learin_forex`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
