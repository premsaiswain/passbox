-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 07:03 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `linkidin` varchar(255) NOT NULL,
  `paytm` varchar(255) NOT NULL,
  `games` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `facebook`, `instagram`, `twitter`, `email`, `linkidin`, `paytm`, `games`) VALUES
(1, 'Code', '$2y$10$a6Gqr1Qvb8uF9uKreaKWoeK0aEu0sznZraYCuHc3kz8gfML/LxIbK', '', '', '', '', '', '', ''),
(2, 'prem', '$2y$10$O8ChmkAgALq1Mejd89Ke0OXcnwK1O67l3uOo1qzaslGBzJTibVqmW', 'wer', 'wer', 'wer', 'wr', 'we', 'wer', 'wer'),
(3, '', '$2y$10$ZNamYcfgJm7tBugSvjtR8enPiNiKeaVqjGADpYy86hrE6Et5HDZMi', '', '', '', '', '', '', ''),
(4, 'susanta swain', '$2y$10$DALXTySGc9EBwX5XNs6YsuGQjO6seOs7FwRRXSp95ZvA2CIOChLwK', 'prem', 'rahul', 'ranjita', 'susanta', 'situn', 'rani', 'pratyush'),
(5, 'qwe', '$2y$10$eXBangk7Ver7F1NhFKoqGerWYwlHZd5dLevD2rirN9g4vB80npzCW', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe'),
(6, 'rahul swain', '$2y$10$Ylrei4UtwpbJ9gtb.zaZk.GmvoMn7Aov1tCZDKEtanID2i/3gSgsW', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
