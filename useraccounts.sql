-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 01:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useraccounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gardes`
--

CREATE TABLE `tbl_gardes` (
  `id` int(11) NOT NULL,
  `Subjects` varchar(100) NOT NULL,
  `1st Quarter` varchar(100) NOT NULL,
  `2nd Quarter` varchar(100) NOT NULL,
  `3rd Quarter` varchar(100) NOT NULL,
  `4th Quarter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gardes`
--

INSERT INTO `tbl_gardes` (`id`, `Subjects`, `1st Quarter`, `2nd Quarter`, `3rd Quarter`, `4th Quarter`) VALUES
(1, 'English', '1.8', '1.7', '1.2', '1.4'),
(2, 'Mathematics', '1.2', '1.2', '1.8', '1.6'),
(3, 'Science', '1.5', '1.7', '1.7', '1.4'),
(4, 'Philosophy', '1.4', '1.7', '1.3', '1.2'),
(5, 'Oral Communication', '1.8', '1.4', '1.2', '1.4');

-- --------------------------------------------------------

--
-- Table structure for table `usercred`
--

CREATE TABLE `usercred` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `emailID` varchar(100) NOT NULL,
  `studentsLRN` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercred`
--

INSERT INTO `usercred` (`id`, `firstname`, `surname`, `lastname`, `username`, `emailID`, `studentsLRN`, `password`) VALUES
(7, 'Oalden', 'oalden_123', 'Morales', 'oalden_123', 'oalden@gmail.com', '1022020612345678', '12345678dsdsds'),
(11, 'Jose Mari', 'JMLC_123', 'Chan', 'JMLC_123', 'josem@gmail.com', '12121154545', '7777777777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gardes`
--
ALTER TABLE `tbl_gardes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercred`
--
ALTER TABLE `usercred`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gardes`
--
ALTER TABLE `tbl_gardes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usercred`
--
ALTER TABLE `usercred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
