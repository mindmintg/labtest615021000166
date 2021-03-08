-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 09:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major3`
--

-- --------------------------------------------------------

--
-- Table structure for table `major_day`
--

CREATE TABLE `major_day` (
  `major_id` varchar(20) NOT NULL,
  `major_name` varchar(50) NOT NULL,
  `major_day` date NOT NULL,
  `major_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `major_day`
--

INSERT INTO `major_day` (`major_id`, `major_name`, `major_day`, `major_time`) VALUES
('1238', 'kiko', '2021-03-19', '18:40:00'),
('9876', 'hahaha32', '2021-03-04', '13:16:17'),
('9999', 'mini', '2021-03-25', '19:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `major_movie`
--

CREATE TABLE `major_movie` (
  `major_member` varchar(20) NOT NULL,
  `major_pin` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `major_movie`
--

INSERT INTO `major_movie` (`major_member`, `major_pin`) VALUES
('mint', '1234'),
('kiko', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `major_day`
--
ALTER TABLE `major_day`
  ADD PRIMARY KEY (`major_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
