-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 08:29 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quality` varchar(50) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `price`, `quality`, `userId`) VALUES
(6, 'banana', '70', 'c', 20),
(7, 'mingo', '40', 'b', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`) VALUES
(1, 'Shakil Khan', 'shakil@gmail.com', '12345677'),
(2, 'junid', 'junid@gmail.com', '123456'),
(3, 'ahmed', 'ahmed@gmail.com', '12345'),
(4, 'hamad', 'hamad@gmail.com', '12345678'),
(6, 'sohail', 'sohail@gmail.com', '12345678'),
(9, 'sadam khan', 'sadam@gmail.com', '$2y$10$.HTPFiRrogS8v22LXhBNqut6BMl9IUQauJAW10gIqKT20an2CRubm'),
(10, 'sadam khan', 'sadam55@gmail.com', '$2y$10$AFPMtSerRk4pvLYUXlNbgOH9qoPL4ox2dzXj5QnzBEjG43NHk9KSK'),
(11, 'kamran', 'kamran@gmail.com', '$2y$10$Nj/hxW9.gJhOPxHvziO4qO3x6T.5q18vyNa.sP39BGiyl0SqDJ9WC'),
(12, 'jamil', 'jamil@gmail.com', '$2y$10$1NHM8SZ1c5td7x1udMBm2OBOnqysFHlfkg4sNkuejXiTq9YcZibSe'),
(13, 'ihsan', 'ihsan@gmail.com', '$2y$10$zxek50RbYo51qs/lAUZK5.npH9.UbopmjgFF77wDB4oIcwbVKQ8XW'),
(14, 'asad khanq', 'asadkhan@gmail.com', '$2y$10$5GiwKYlpK9ERUWq1UJZUI.Olr0A7i8EeVEiCyyxK2OOwZLBMknLL2'),
(15, 'mohsin', 'mohsin@gmail.com', '$2y$10$5B6Lt/4Hv6vtHGRCWJkpmeJNpLRQwHCm1rvailh2uNLCNio43K0Gu'),
(16, 'wali khan', 'walikhan@gmail.com', '$2y$10$2Lo.uQSsA29SkLohSAwTW.h2OCJcg0tWOqnJ1nRTH4XDLyAIyoOa2'),
(17, 'samad', 'samad@gmail.com', '$2y$10$NmDaojhTZ9OKzNHIBwNhieAK5XKKkPi81VpSxU72tsc7eSnpHVjIC'),
(18, 'muhammad ali', 'muhammadali@gmail.com', '$2y$10$9mSP4ZKiLFeApRFMHQdMZOJLViw7OJxnPY7N9mfdhXndxJPF3KoyG'),
(19, 'sikandar', 'sikandar@gamil.com', '$2y$10$13RtwMpuIypTPdXTu.bs.u7NPwsnxyl7WsxCCrdt73f5CoaGU4f7.'),
(20, 'javed', 'javed@gmail.com', '$2y$10$.zSFE4iSARcp1S7iP.ZVJeb1ZCQ/I7713cRJSA/3ae7MCPrCUwa3a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
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
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
