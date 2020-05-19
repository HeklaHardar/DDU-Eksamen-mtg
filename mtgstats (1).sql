-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 04:29 PM
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
(1, 'Hekla', '$2y$10$OfaO9FT5u0scQpbp.yQ4e.qJhixlqvEAuWkTWGunF5VnUC0144ENm');

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
(2, 1, 'Selesnya Boggles', 'Standard', '4 Alseid of Lifes Bountycccccccc\r\n3 Archon of Suns Gracetgggggggg\r\n1 Destiny Spinner\r\n3 Paradise Druiduiyi\r\n4 Setessan Champion\r\n2 Transcendent Envoy\r\n3 All That Glitters\r\n1 Angelic Gift\r\n2 Banishing Light\r\n4 Karametras Blessing\r\n3 Season of Growthssssssssssssss\r\n3 Sentinels Eyes\r\n3 Setessan Training\r\n1 Warbriar Blessing\r\n6 Forestbbbbbb\r\n9 Plains\r\n4 Temple Gardenso\r\n4 Temple of Plenty\r\nyep', '8 Banishing Light\r\n2 Destiny Spinner\r\n2 Heliods Intervention\r\n2 Hushbringer\r\n4 Shifting Ceratops\r\n3 Thrashing Brontodonc'),
(3, 1, 'Lands', 'Standard', '4 Island\r\n4 Swamp\r\n4 Mountain \r\n4 Forest\r\n4 Plains', '4 Island\r\n4 Swamp\r\n4 Mountain \r\n4 Forest\r\n4 Plains'),
(4, 1, 'ccccccccccccccccccccccc', 'Commander', 'Mainboard\r\nccccccc\r\ncccccccccc\r\nccccccc\r\ncccccccc\r\nPadak', 'Sideboardcccc\r\nccccccccc\r\ncccccccc\r\nccccccccc\r\ncc'),
(5, 1, 'Nyt deck', 'Commander', '1 kort\r\n2 gode kort\r\n4 lande', 'ingenting'),
(6, 1, 'trtyhrt¨¨¨¨', 'Commander', 'Mainboard', 'Sideboard'),
(7, 1, '&gt;////&gt;', 'Commander', 'Mainboard', 'Sideboard');

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
  `Format` varchar(50) NOT NULL,
  `Deck` int(12) NOT NULL,
  `wins` int(12) NOT NULL,
  `losses` int(12) NOT NULL,
  `overtid` int(1) NOT NULL,
  `modstanderdeck` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `runder`
--

INSERT INTO `runder` (`rundeid`, `turneringsid`, `brugerid`, `Format`, `Deck`, `wins`, `losses`, `overtid`, `modstanderdeck`) VALUES
(1, 1, 1, 'Standard', 2, 1, 2, 1, 'decket'),
(2, 1, 1, 'Standard', 2, 2, 0, 0, 'decket'),
(3, 1, 1, 'Standard', 2, 1, 0, 1, 'decket');

-- --------------------------------------------------------

--
-- Table structure for table `turneringer`
--

CREATE TABLE `turneringer` (
  `turneringsid` int(12) NOT NULL,
  `brugerid` int(11) NOT NULL,
  `Turneringsnavn` varchar(1000) NOT NULL,
  `Dato` date NOT NULL,
  `Sted` varchar(50) NOT NULL,
  `Format` varchar(50) NOT NULL,
  `Deck` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turneringer`
--

INSERT INTO `turneringer` (`turneringsid`, `brugerid`, `Turneringsnavn`, `Dato`, `Sted`, `Format`, `Deck`) VALUES
(1, 1, 'navnavn', '2020-05-13', 'her', 'Standard', 2),
(3, 1, 'navn', '2020-05-12', 'sted', 'Modern', 2),
(4, 1, 'navn', '2020-05-12', 'sted', 'Modern', 2),
(5, 1, 'Turneringee', '2020-05-01', 'Lyngby', 'Vintage', 2),
(6, 1, 'Turneringee', '2020-05-22', 'Lyngby', 'Commander', 2);

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
  ADD PRIMARY KEY (`rundeid`),
  ADD KEY `turneringsid` (`turneringsid`),
  ADD KEY `runder_ibfk_2` (`brugerid`),
  ADD KEY `Deck` (`Deck`),
  ADD KEY `Format` (`Format`);

--
-- Indexes for table `turneringer`
--
ALTER TABLE `turneringer`
  ADD PRIMARY KEY (`turneringsid`),
  ADD KEY `brugerid` (`brugerid`),
  ADD KEY `Format` (`Format`),
  ADD KEY `Deck` (`Deck`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brugere`
--
ALTER TABLE `brugere`
  MODIFY `brugerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `decks`
--
ALTER TABLE `decks`
  MODIFY `deckid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `runder`
--
ALTER TABLE `runder`
  MODIFY `rundeid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `turneringer`
--
ALTER TABLE `turneringer`
  MODIFY `turneringsid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- Constraints for table `runder`
--
ALTER TABLE `runder`
  ADD CONSTRAINT `runder_ibfk_1` FOREIGN KEY (`turneringsid`) REFERENCES `turneringer` (`turneringsid`),
  ADD CONSTRAINT `runder_ibfk_2` FOREIGN KEY (`brugerid`) REFERENCES `brugere` (`brugerid`),
  ADD CONSTRAINT `runder_ibfk_3` FOREIGN KEY (`Deck`) REFERENCES `decks` (`deckid`),
  ADD CONSTRAINT `runder_ibfk_4` FOREIGN KEY (`Format`) REFERENCES `formater` (`format`);

--
-- Constraints for table `turneringer`
--
ALTER TABLE `turneringer`
  ADD CONSTRAINT `turneringer_ibfk_1` FOREIGN KEY (`brugerid`) REFERENCES `brugere` (`brugerid`),
  ADD CONSTRAINT `turneringer_ibfk_2` FOREIGN KEY (`Format`) REFERENCES `formater` (`format`),
  ADD CONSTRAINT `turneringer_ibfk_3` FOREIGN KEY (`Deck`) REFERENCES `decks` (`deckid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
