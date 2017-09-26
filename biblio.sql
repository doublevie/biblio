-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 26 Septembre 2017 à 17:35
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `NOM_CAT` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`ID`, `NOM_CAT`) VALUES
(7, 'Ù‚Ø³Ù… Ø±Ù‚Ù… 1'),
(8, 'Ù‚Ø³Ù… Ø±Ù‚Ù… 4');

-- --------------------------------------------------------

--
-- Structure de la table `lecteurs`
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
-- Contenu de la table `lecteurs`
--

INSERT INTO `lecteurs` (`ID`, `PSEUDO`, `NOM`, `PRENOM`, `DATE_NAISSANCE`, `ADRESSE`, `ANNE`, `PASSE`, `TYPE`, `VALIDE`) VALUES
(3, 'doublevie', 'ÙØ§Ø±Ø³ ', 'Ø¹Ø¨Ø§Ø¯Ùˆ', '22/07/1985', 'Ø³Ø·ÙŠÙ', '19265', 'd29906dd241d0d09a64eef8eaed9520f', '', '0');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `lecteurs`
--
ALTER TABLE `lecteurs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `lecteurs`
--
ALTER TABLE `lecteurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
