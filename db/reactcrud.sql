-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 03:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reactcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbltodo`
--

CREATE TABLE `tbltodo` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `creationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltodo`
--

INSERT INTO `tbltodo` (`id`, `name`, `creationDate`) VALUES
(1, 'My Task1 good', '2019-03-14 15:49:12'),
(12, 'Good todo task', '2019-03-14 19:09:22'),
(13, 'On press good', '2019-03-15 13:26:08'),
(14, 'Good', '2019-03-15 13:33:35'),
(16, 'Priyanka', '2019-03-15 13:37:38'),
(17, 'Task', '2019-03-15 13:42:25'),
(18, 'Ganesh', '2019-03-15 13:44:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbltodo`
--
ALTER TABLE `tbltodo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbltodo`
--
ALTER TABLE `tbltodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
