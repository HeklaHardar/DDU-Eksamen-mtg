-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 09:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtgstats`
--

-- --------------------------------------------------------

--
-- Table structure for table `brugere`
--

CREATE TABLE `brugere` (
  `brugerid` int(11) NOT NULL,
  `brugernavn` varchar(50) NOT NULL,
  `kodeord` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brugere`
--

INSERT INTO `brugere` (`brugerid`, `brugernavn`, `kodeord`) VALUES
(1, 'Hekla', '$2y$10$OfaO9FT5u0scQpbp.yQ4e.qJhixlqvEAuWkTWGunF5VnUC0144ENm'),
(2, 'Hekla2', '$2y$10$OZa.mWhCWPAFoBZ9Sxhl4eOwenbDfDuoN7sJR1WvFliirhF.epTGi'),
(3, 'Hekla22', '$2y$10$YcmVwqImzjHWhCeYgowxFOFUk4doWwsILtAU4WGXc1E1Xvy/10O.K'),
(4, 'Hekla1212', '$2y$10$QMgt.2aJlZ3LMK6/uEN4V.OL1jXcnxwqdHg9t77VIXQjmtfV9MczC');

-- --------------------------------------------------------

--
-- Table structure for table `decks`
--

CREATE TABLE `decks` (
  `deckid` int(12) NOT NULL,
  `brugerid` int(11) NOT NULL,
  `decknavn` varchar(50) NOT NULL,
  `Format` varchar(50) NOT NULL,
  `Mainboard` text NOT NULL,
  `Sideboard` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decks`
--

INSERT INTO `decks` (`deckid`, `brugerid`, `decknavn`, `Format`, `Mainboard`, `Sideboard`) VALUES
(2, 1, 'Selesnya Boggles', 'Standard', '4 Alseid of Life\'s Bounty\r\n3 Archon of Sun\'s Grace\r\n1 Destiny Spinner\r\n3 Paradise Druid\r\n4 Setessan Champion\r\n2 Transcendent Envoy\r\n3 All That Glitters\r\n1 Angelic Gift\r\n2 Banishing Light\r\n4 Karametra\'s Blessing\r\n3 Season of Growth\r\n3 Sentinel\'s Eyes\r\n3 Setessan Training\r\n1 Warbriar Blessing\r\n6 Forest\r\n9 Plains\r\n4 Temple Garden\r\n4 Temple of Plenty\r\n', '2 Banishing Light\r\n2 Destiny Spinner\r\n2 Heliod\'s Intervention\r\n2 Hushbringer\r\n4 Shifting Ceratops\r\n3 Thrashing Brontodon\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `formater`
--

CREATE TABLE `formater` (
  `format` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formater`
--

INSERT INTO `formater` (`format`) VALUES
('Commander'),
('Legacy'),
('Limited'),
('Modern'),
('Pauper'),
('Pioneer'),
('Standard'),
('Vintage');

-- --------------------------------------------------------

--
-- Table structure for table `runder`
--

CREATE TABLE `runder` (
  `rundeid` int(12) NOT NULL,
  `turneringsid` int(12) NOT NULL,
  `brugerid` int(12) NOT NULL,
  `egnepoint` int(12) NOT NULL,
  `modstanderpoint` int(12) NOT NULL,
  `overtid` tinyint(1) NOT NULL,
  `modstanderdeck` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `turneringer`
--

CREATE TABLE `turneringer` (
  `turneringsid` int(12) NOT NULL,
  `brugerid` int(11) NOT NULL,
  `Turneringsnavn` varchar(1000) NOT NULL,
  `Format` varchar(50) NOT NULL,
  `Antal runder` int(12) NOT NULL,
  `Deck` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brugere`
--
ALTER TABLE `brugere`
  ADD PRIMARY KEY (`brugerid`);

--
-- Indexes for table `decks`
--
ALTER TABLE `decks`
  ADD PRIMARY KEY (`deckid`),
  ADD KEY `Format` (`Format`),
  ADD KEY `brugerid` (`brugerid`);

--
-- Indexes for table `formater`
--
ALTER TABLE `formater`
  ADD PRIMARY KEY (`format`);

--
-- Indexes for table `runder`
--
ALTER TABLE `runder`
  ADD PRIMARY KEY (`rundeid`);

--
-- Indexes for table `turneringer`
--
ALTER TABLE `turneringer`
  ADD PRIMARY KEY (`turneringsid`),
  ADD KEY `brugerid` (`brugerid`),
  ADD KEY `Format` (`Format`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brugere`
--
ALTER TABLE `brugere`
  MODIFY `brugerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `decks`
--
ALTER TABLE `decks`
  MODIFY `deckid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `runder`
--
ALTER TABLE `runder`
  MODIFY `rundeid` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `turneringer`
--
ALTER TABLE `turneringer`
  MODIFY `turneringsid` int(12) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `decks`
--
ALTER TABLE `decks`
  ADD CONSTRAINT `decks_ibfk_1` FOREIGN KEY (`Format`) REFERENCES `formater` (`format`),
  ADD CONSTRAINT `decks_ibfk_2` FOREIGN KEY (`brugerid`) REFERENCES `brugere` (`brugerid`);

--
-- Constraints for table `turneringer`
--
ALTER TABLE `turneringer`
  ADD CONSTRAINT `turneringer_ibfk_1` FOREIGN KEY (`brugerid`) REFERENCES `brugere` (`brugerid`),
  ADD CONSTRAINT `turneringer_ibfk_2` FOREIGN KEY (`Format`) REFERENCES `formater` (`format`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
