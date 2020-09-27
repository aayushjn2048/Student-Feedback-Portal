-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 06:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database5`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q0` int(11) NOT NULL,
  `avg` float NOT NULL,
  `remarks` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `department`, `course`, `semester`, `subject`, `faculty`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q0`, `avg`, `remarks`) VALUES
(1, 'Electronics Department', 'MTech', 3, 'Computer Architecture', 'Prof Gagan', 5, 4, 5, 3, 3, 3, 4, 4, 1, 1, 3.3, 'Maza aa gaya'),
(2, 'Computer Department', 'BTech', 4, 'DataBase Management System', 'Prof Shweta Jain', 5, 4, 3, 4, 3, 4, 4, 5, 5, 5, 4.2, 'Aabra ka Dabraa'),
(3, 'Computer Department', 'BTech', 4, 'DataBase Management System', 'Prof Shweta Jain', 5, 2, 3, 4, 5, 4, 3, 5, 1, 5, 3.7, 'Aabra ka Dabraa hehehe'),
(4, 'Computer Department', 'BTech', 4, 'DataBase Management System', 'Prof JTC', 5, 4, 4, 1, 3, 4, 5, 5, 3, 5, 3.9, 'bhaiko'),
(5, 'Computer Department', 'BTech', 4, 'DataBase Management System', 'Prof Gagan', 2, 3, 1, 3, 5, 2, 5, 3, 1, 1, 2.6, 'Bhag yahan se'),
(6, 'Computer Department', 'BTech', 4, 'DataBase Management System', 'Prof Gagan', 5, 3, 5, 3, 5, 2, 5, 3, 1, 1, 3.3, 'Bhag yahan se'),
(7, 'Computer Department', 'BTech', 4, 'DataBase Management System', 'Prof Gagan', 5, 3, 2, 3, 3, 2, 5, 3, 5, 5, 3.6, 'Bhag yahan se'),
(8, 'Computer Department', 'BTech', 4, 'DataBase Management System', 'Prof Gagan', 5, 3, 2, 3, 4, 4, 5, 3, 1, 5, 3.5, 'Bhag yahan se'),
(9, 'Computer Department', 'BTech', 4, 'DataBase Management System', 'Prof Yatendra Sahu', 5, 5, 4, 3, 3, 3, 4, 5, 5, 5, 4.2, 'HAHAHAHA'),
(10, 'Computer Department', 'BTech', 4, 'DataBase Management System', 'Prof Yatendra Sahu', 5, 1, 2, 2, 3, 3, 1, 2, 4, 5, 2.8, 'skdbvhdwkhsvb'),
(11, 'Computer Department', 'BTech', 4, 'DataBase Management System', 'Prof JTC', 5, 3, 4, 3, 3, 3, 2, 4, 4, 3, 3.4, 'skjdbv\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
