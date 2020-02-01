-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 06:00 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(225) NOT NULL COMMENT 'primary key',
  `student_name` varchar(255) NOT NULL COMMENT 'employee name',
  `student_year` varchar(200) NOT NULL COMMENT 'employee salary',
  `student_narrative` varchar(1000) NOT NULL,
  `student_narrative2` varchar(500) NOT NULL,
  `student_narrative3` varchar(500) NOT NULL,
  `student_narrative4` varchar(500) NOT NULL,
  `student_narrative5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `student_name`, `student_year`, `student_narrative`, `student_narrative2`, `student_narrative3`, `student_narrative4`, `student_narrative5`) VALUES
(1, 'Randel', '182', 'pogi ako ', 'pogi talga ko ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_mobile` varchar(20) NOT NULL,
  `student_year` varchar(255) NOT NULL,
  `student_birth` date NOT NULL,
  `student_birthPlace` varchar(50) NOT NULL,
  `student_address` varchar(50) NOT NULL,
  `student_fatherName` varchar(20) NOT NULL,
  `student_fatherMobile` int(20) NOT NULL,
  `student_motherName` varchar(20) NOT NULL,
  `student_motherMobile` int(20) NOT NULL,
  `student_parentRelation` varchar(30) NOT NULL,
  `student_guardianName` varchar(20) NOT NULL,
  `student_guardianMobile` int(15) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`id`, `student_name`, `student_mobile`, `student_year`, `student_birth`, `student_birthPlace`, `student_address`, `student_fatherName`, `student_fatherMobile`, `student_motherName`, `student_motherMobile`, `student_parentRelation`, `student_guardianName`, `student_guardianMobile`, `image`) VALUES
(1, 'randel', '09338545538', 'asd', '0032-02-23', 'asdasd', 'asd', 'asd', 0, 'asd', 0, 'asd', 'asd', 0, '23459.jpg'),
(2, 'randel', '0123123', 'asdasd', '2020-01-23', 'dwasasd', 'asdasd', 'asdasd', 2, 'asdadsd', 2, 'asdasd', 'asdasda', 0, '10454.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
