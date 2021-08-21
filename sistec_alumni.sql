-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 02:43 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistec_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(10) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `date_validity` datetime DEFAULT NULL,
  `otp` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registeralumni`
--

CREATE TABLE `registeralumni` (
  `email` varchar(50) NOT NULL,
  `enrollment` varchar(15) NOT NULL,
  `name` char(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `batch` varchar(7) NOT NULL,
  `password` varchar(200) NOT NULL,
  `otp` int(6) DEFAULT NULL,
  `Bio` varchar(300) NOT NULL,
  `pic` text DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeralumni`
--

INSERT INTO `registeralumni` (`email`, `enrollment`, `name`, `department`, `phone`, `batch`, `password`, `otp`, `Bio`, `pic`, `active`) VALUES
('chouhananjali02@gmail.com', '0537CS181005', 'Anjali chouhan', 'Cse', 9993289238, '2018-20', '8cb2237d0679ca88db6464eac60da96345513964', 745532, '', NULL, 1),
('chouhanankit844@gmail.com', '', 'Ankit Chouhan', 'Cse', 919993289238, '2018-20', '8cb2237d0679ca88db6464eac60da96345513964', 197646, '', 'images/pic-1.png', 1),
('divyanag53@gmail.com', '0537CS18004', 'Divya Nagwanshi', 'Cse', 9655221542, '2017-20', 'd87232ce6ea6637ac592ceb20bf264417772fb99', 232555, '', NULL, 1),
('rishikesh1511@gmail.com', '0537CS181007', 'Rishikesh Verma', 'Cse', 5154545551, '2018-20', '8cb2237d0679ca88db6464eac60da96345513964', 312517, '', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeralumni`
--
ALTER TABLE `registeralumni`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
