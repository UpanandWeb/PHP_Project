-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 04:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `9am`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(1, 'ram', 'rambabburi@gmail.com', '9767676767', 'asd', '2020-02-15 10:31:01'),
(2, 'ravi', 'nit@mail.com', '9767676767', 'dfg', '2020-02-15 10:32:50'),
(3, 'new', 'siva@mail.com', '9767676767', 'asd', '2020-02-15 10:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `eid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `salary` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`eid`, `name`, `salary`, `designation`, `city`, `mobile`, `date`) VALUES
(4, 'Welcome', 15000, 'Developer', 'Mumbai', '9767676767', '2019-12-28 02:32:51'),
(5, 'Nit', 25000, 'Designer', 'Hyderabad', '9767676767', '2019-12-28 02:33:01'),
(7, 'test', 12000, 'Designer', 'Hyderabad', '9767676767', '2019-12-30 02:45:01'),
(8, 'Nit', 50000, 'Designer', 'Hyderabad', '9767676767', '2019-12-30 02:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `message`, `city`) VALUES
(1, 'Ram', 'ram@mail.com', 2432423423, 'Hi', 'Hyderabad'),
(2, 'NIT', 'nit@mail.com', 34534534, 'Hello', 'banglore'),
(3, 'hello', 'hello@mail.com', 34534534, 'Hello', 'banglore'),
(4, 'test', 'test@m ail.com', 3453453, 'Hello', 'banglore'),
(5, 'Ram1', 'ram@mail.com', 345345, 'Hello', 'banglore'),
(6, 'Ram1', 'ram@mail.com', 345345, 'Hello', 'banglore'),
(7, 'Ram2', 'ram2@mail.com', 234234, 'Hello', 'banglore'),
(8, 'Ram2', 'ram2@mail.com', 234234, 'Hello', 'banglore'),
(9, 'Ram', '', 0, 'Hello', 'banglore');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(50) NOT NULL,
  `terms` int(11) NOT NULL,
  `doj` datetime NOT NULL DEFAULT current_timestamp(),
  `ip` varchar(30) NOT NULL,
  `uniid` varchar(32) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'inactive',
  `profile_pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `mobile`, `gender`, `dob`, `address`, `city`, `state`, `terms`, `doj`, `ip`, `uniid`, `status`, `profile_pic`) VALUES
(1, 'Ramu', 'rambabburi@gmail.com', '$2y$10$9vDHXE2j7hmXlZxFJTqZFOYTh5Xrni4x2hSQaJ9..pQchAczV2eMS', '9767676767', 'Male', '1999-05-04', 'Maithrivanam', 'Hyderabad', 'Telangana', 1, '2020-02-18 09:56:10', '::1', 'eaeeb898b7753f1f1e7c687263d7a1d7', 'inactive', ''),
(2, 'test', 'test@mail.com', '$2y$10$EY4oDq2SaepC94.yXhWiO.ij7L3lwKTtpeIJ1J8e3u9iwlIROJyYS', '9767676767', 'Female', '0000-00-00', 'Sr nagar', 'Hyderabad', 'Telangana', 1, '2020-02-19 09:34:02', '::1', 'afb3bec2c545ad812330b08bcef5dabc', 'inactive', ''),
(3, 'nit1', 'nit@mail.com', '$2y$10$9T2WOwMgmGwo1oo0z9QgKe3/3bd2m01FIgaNNaiMaOksQLQf2gcoO', '9767676767', 'Male', '1987-07-25', 'test', 'test', 'Andhrapradesh', 1, '2020-02-19 09:38:42', '::1', '17797b694362b1d5e4888cdb3726eb2f', 'active', ''),
(5, 'hello', 'hello@mail.com', '$2y$10$Fr.0ELSdKmjypfjjCTumj.NYsIx6vUzYeZDonlzw/LhL6JZtd2P7S', '9767676767', 'Female', '0000-00-00', 'adddasdas', 'asdas', 'Maharastra', 1, '2020-02-19 09:47:10', '::1', '4a281b4c4a8127ec84111eaf68fa8558', 'inactive', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `dateofjoin` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `mobile`, `dateofjoin`) VALUES
(1, 'ram', 'ranm@mail.com', '34534534', 35345345, '2020-02-14 09:43:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
