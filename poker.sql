-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 04:18 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poker`
--

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE `cash` (
  `id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `blinds` varchar(255) NOT NULL,
  `buyin` int(255) NOT NULL,
  `cashout` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`id`, `date`, `blinds`, `buyin`, `cashout`) VALUES
(17, '22/05/2019', '25c/50c', 2222, 1000),
(18, '22/05/2019', '25c/50c', 250, 3333);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `playerName` varchar(255) NOT NULL,
  `descript` varchar(255) NOT NULL,
  `preflop` varchar(255) NOT NULL,
  `flop` varchar(255) NOT NULL,
  `turn` varchar(255) NOT NULL,
  `river` varchar(255) NOT NULL,
  `extra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `playerName`, `descript`, `preflop`, `flop`, `turn`, `river`, `extra`) VALUES
(6, 'blair', '', 'sitcky opening range', 'high cbet', 'high turnbet', 'balanced river bet', 'GTO reg'),
(8, 'Jack', '', 'asd', 'high cbet', 'high turnbet', 'balanced river bet', 'fd'),
(9, 'luke', '', 'asd', '22', 'ff', 'aa', 'fd'),
(12, 'luke2', 'crazy hand', 'raises wide', 'cbets high %', 'honest street', 'bluffs alot', 'balanced player');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `playerName` varchar(255) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `playerName`, `type`) VALUES
(30, 'Jack', 'tag'),
(32, 'blair', 'unknown'),
(33, 'luke', 'lag'),
(36, 'luke2', 'tag'),
(37, 'new lad', 'nit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cash`
--
ALTER TABLE `cash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `playerName` (`playerName`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `playerName` (`playerName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cash`
--
ALTER TABLE `cash`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `playerName` FOREIGN KEY (`playerName`) REFERENCES `player` (`playerName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
