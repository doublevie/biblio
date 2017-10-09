-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2017 at 02:31 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblio`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `NOM_CAT` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `NOM_CAT`) VALUES
(7, 'Ù‚Ø³Ù… Ø±Ù‚Ù… 1'),
(8, 'Ù‚Ø³Ù… Ø±Ù‚Ù… 4');

-- --------------------------------------------------------

--
-- Table structure for table `lecteurs`
--

CREATE TABLE `lecteurs` (
  `ID` int(11) NOT NULL,
  `PSEUDO` varchar(255) COLLATE utf8_bin NOT NULL,
  `NOM` varchar(255) COLLATE utf8_bin NOT NULL,
  `PRENOM` varchar(255) COLLATE utf8_bin NOT NULL,
  `DATE_NAISSANCE` varchar(255) COLLATE utf8_bin NOT NULL,
  `ADRESSE` varchar(255) COLLATE utf8_bin NOT NULL,
  `ANNE` varchar(255) COLLATE utf8_bin NOT NULL,
  `PASSE` varchar(255) COLLATE utf8_bin NOT NULL,
  `TYPE` varchar(255) COLLATE utf8_bin NOT NULL,
  `VALIDE` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lecteurs`
--

INSERT INTO `lecteurs` (`ID`, `PSEUDO`, `NOM`, `PRENOM`, `DATE_NAISSANCE`, `ADRESSE`, `ANNE`, `PASSE`, `TYPE`, `VALIDE`) VALUES
(7, 'doublevie', 'ÙØ§Ø±Ø³', 'Ø¹Ø¨Ø§Ø¯Ùˆ', '1985-07-25', 'Ø³Ø·ÙŠÙ', '2017', 'd29906dd241d0d09a64eef8eaed9520f', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ouverages`
--

CREATE TABLE `ouverages` (
  `ID` int(11) NOT NULL,
  `TITRE` varchar(255) COLLATE utf8_bin NOT NULL,
  `CAT` varchar(255) COLLATE utf8_bin NOT NULL,
  `TYPE` varchar(255) COLLATE utf8_bin NOT NULL,
  `AUTEUR` varchar(255) COLLATE utf8_bin NOT NULL,
  `DATE_SORTIE` datetime NOT NULL,
  `QT` varchar(11) COLLATE utf8_bin NOT NULL,
  `QT_DISPONIBLE` varchar(11) COLLATE utf8_bin NOT NULL,
  `PAGES` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ouverages`
--

INSERT INTO `ouverages` (`ID`, `TITRE`, `CAT`, `TYPE`, `AUTEUR`, `DATE_SORTIE`, `QT`, `QT_DISPONIBLE`, `PAGES`) VALUES
(7, 'Ø¹Ù†ÙˆØ§Ù† Ø±Ù‚Ù… 1', '8', '', 'ÙØ§Ø±Ø³ Ø¹Ø¨Ø§Ø¯Ùˆ', '2017-10-07 02:23:20', '1', '30', '10');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ID` int(11) NOT NULL,
  `LECTID` int(11) NOT NULL,
  `OUVID` int(11) NOT NULL,
  `DATE_RES` datetime NOT NULL,
  `DATE_DELAI` datetime NOT NULL,
  `DATE_RECUP` varchar(11) NOT NULL,
  `TOK` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ID`, `LECTID`, `OUVID`, `DATE_RES`, `DATE_DELAI`, `DATE_RECUP`, `TOK`) VALUES
(3, 7, 7, '2017-10-09 01:09:50', '2017-10-24 00:00:00', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lecteurs`
--
ALTER TABLE `lecteurs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ouverages`
--
ALTER TABLE `ouverages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lecteurs`
--
ALTER TABLE `lecteurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ouverages`
--
ALTER TABLE `ouverages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
