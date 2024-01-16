-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 06 déc. 2023 à 08:21
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jlq_site`
--
CREATE DATABASE IF NOT EXISTS `jlq_site` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jlq_site`;

-- --------------------------------------------------------

--
-- Structure de la table `description`
--

DROP TABLE IF EXISTS `description`;
CREATE TABLE IF NOT EXISTS `description` (
  `idDescription` int(11) NOT NULL AUTO_INCREMENT,
  `Système d'exploitation` varchar(38) NOT NULL,
  `Couleur` varchar(38) NOT NULL,
  `Taille` varchar(38) NOT NULL,
  `Stockage` varchar(38) NOT NULL,
  `A propos` text NOT NULL,
  PRIMARY KEY (`idDescription`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

DROP TABLE IF EXISTS `marques`;
CREATE TABLE IF NOT EXISTS `marques` (
  `idTelephone` int(11) NOT NULL AUTO_INCREMENT,
  `Iphone` varchar(38) NOT NULL,
  `Xiaomi` varchar(38) NOT NULL,
  `Samsung` varchar(38) NOT NULL,
  `Huawei` varchar(38) NOT NULL,
  PRIMARY KEY (`idTelephone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `idNote` int(11) NOT NULL AUTO_INCREMENT,
  `Note` int(11) NOT NULL,
  `Avis` text NOT NULL,
  PRIMARY KEY (`idNote`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
