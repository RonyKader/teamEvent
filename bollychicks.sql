-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2016 at 03:38 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `mobile`, `email`, `postcode`, `date_of_birth`, `password`, `status`, `created_date`, `created_by`, `updated_by`) VALUES
(1, 'Md', 'TarikulIslam', 2147483647, 'rony.ksr06@gmail.com', 'e123', '0000-00-00 00:00:00', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 1, '2016-08-09 13:45:22', 0, 0),
(2, 'Rony', 'Kader', 2147483647, 'ksr06@gmail.com', 'e123', '0000-00-00 00:00:00', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 1, '2016-08-09 14:32:38', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
