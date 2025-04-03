-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2025 at 11:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `myuser`
--

CREATE TABLE `myuser` (
  `id` int(200) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myuser`
--

INSERT INTO `myuser` (`id`, `username`, `password`, `role`) VALUES
(1, 'rajani@gmail.com', '$2y$10$a000.TZ3eqYomHhzco0t6uyzCbrqOhXrctui07Z19XSawL/k4NNsm', 'admin'),
(3, 'naincy@gmail.com', '$2y$10$xA2cX6W58fPzKOI/rRAao.h3e4el5C2VKnEAESKrcjZJlhzvrDbXu', 'customer'),
(10, 'manisha@gmail.com', '$2y$10$UjMkXdt93pfBBKeVB8KOlexo5K7k.ujCWB3Ew.qVZAyGA2FrSbaiW', 'customer'),
(11, 'divesh@gmail.com', '$2y$10$8EKVeyhwDkqZo3KHg8m8w.2biTTc3FnQkar9XZf/oSvnPXzzyxcji', 'admin'),
(13, 'deepika@gmail.com', '$2y$10$cIzkQGcnvdGF6Z8Ey1CxRetM/x2wNlAVQuF39HICr2lG.g0TKh0Xy', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myuser`
--
ALTER TABLE `myuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myuser`
--
ALTER TABLE `myuser`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
