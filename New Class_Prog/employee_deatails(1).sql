-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 01:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_deatails`
--

CREATE TABLE `employee_deatails` (
  `Emp. No.` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Mobile_No.` int(11) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `Datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_deatails`
--

INSERT INTO `employee_deatails` (`Emp. No.`, `Name`, `email`, `Mobile_No.`, `City`, `Message`, `Datetime`) VALUES
(1, 'Shankar Sir', 'Shakar@gmail.com', 9850, 'Hyd', 'Hello Friends', '2020-02-11 11:42:34'),
(5, 'Jagdhish Sir', 'Jagadhish@gmail.com', 9650, 'Banglor', 'Hi Friends How are You', '2020-02-11 11:42:34'),
(6, 'upanand', 'upanand@gmail.com', 9191, 'Nagpur', 'Cooming Soon', '2020-02-11 11:50:28'),
(7, 'vanashree', 'vanashree@gmail.com', 9966, 'Varangal', 'Good Morning', '2020-02-11 11:50:28'),
(8, 'Nazeer', 'Nazeer@gmail', 1234, 'Bombay', 'Why r you write', '2020-02-12 17:25:26'),
(9, 'SriLatha Ma\'am', 'SriLatha Ma\'am@gmail.com', 112233, 'Hyd', 'hello Guys', '2020-02-12 17:34:57'),
(10, 'SriRiSha Ma\'am', 'SriRiSha Ma\'am', 456456, 'Secundrabad', 'Happy Birthday to all', '2020-02-12 17:37:33'),
(11, 'Anjali Ma\'am', 'Anjali Ma\'am@gmail.com', 998877, 'Hyderabad', 'Welcome to New Year', '2020-02-12 17:40:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_deatails`
--
ALTER TABLE `employee_deatails`
  ADD PRIMARY KEY (`Emp. No.`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_deatails`
--
ALTER TABLE `employee_deatails`
  MODIFY `Emp. No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
