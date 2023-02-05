-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2023 at 02:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hydrationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hydration`
--

CREATE TABLE `hydration` (
  `id` int(11) NOT NULL,
  `size` int(3) NOT NULL,
  `amount` int(2) NOT NULL,
  `hydrated` varchar(50) NOT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hydration`
--

INSERT INTO `hydration` (`id`, `size`, `amount`, `hydrated`, `total`) VALUES
(1, 24, 4, 'Somewhat hydrated', 96),
(2, 16, 3, 'Somewhat dehydrated', 48),
(3, 16, 2, 'Very dehydrated', 32),
(4, 48, 1, 'Very dehydrated', 48),
(5, 24, 1, 'Very dehydrated', 24),
(6, 32, 6, 'Very Hydrated', 192),
(7, 8, 2, 'Somewhat dehydrated', 16),
(8, 24, 4, 'Very Hydrated', 96),
(9, 32, 2, 'Somewhat dehydrated', 64),
(10, 8, 7, 'Very Hydrated', 56),
(11, 20, 4, 'Somewhat Hydrated', 80),
(12, 32, 1, 'Very dehydrated', 32),
(13, 12, 4, 'Somewhat dehydrated', 48),
(14, 24, 5, 'Very Hydrated', 120),
(15, 30, 4, 'Very Hydrated', 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hydration`
--
ALTER TABLE `hydration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hydration`
--
ALTER TABLE `hydration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
