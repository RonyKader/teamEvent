-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2016 at 03:19 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bollychicks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `username` varchar(22) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `password`, `status`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(1, 'Testing', 'test', 'test@gmail.com', '123456', 2, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking_store`
--

CREATE TABLE IF NOT EXISTS `booking_store` (
  `id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `booking_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_store`
--

INSERT INTO `booking_store` (`id`, `fname`, `lname`, `mobile`, `booking_date`, `created_date`, `updated_date`, `created_by`, `updated_by`, `status`) VALUES
(1, 'Md.', 'Tarikul', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 1),
(2, 'Rony', 'Kader', '1234567895', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 1),
(3, 'Hello', 'Bangladesh', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 1),
(4, 'Md.', 'Rony', '8523698745', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `postcode` varchar(32) NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `mobile`, `email`, `postcode`, `date_of_birth`, `password`, `status`, `created_date`, `created_by`, `updated_by`) VALUES
(1, 'Md.', 'Tarikul Islam', 214783644, 'rony.ksr06@gmail.com', 'e123', '0000-00-00 00:00:00', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 1, '2016-08-09 13:45:22', 0, 0),
(3, 'Rony', 'Kader', 2147483647, 'kader@gmail.com', '12345adkf', '0000-00-00 00:00:00', 'e10adc3949ba59abbe56e057f20f883e', 1, '2016-08-11 13:44:59', 0, 0),
(4, 'test', 'user', 2147483647, 'test@gmail.com', 'u1235', '0000-00-00 00:00:00', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 1, '2016-08-11 13:58:36', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_store`
--
ALTER TABLE `booking_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking_store`
--
ALTER TABLE `booking_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
