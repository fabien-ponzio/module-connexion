-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 jan. 2021 à 15:41
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(5, 'admin', '', '', '$2y$10$TEnSv./A.RgwtY74aMk/Legs4JkPncjFD2mHRa5OKCmpS2uB9bXUC'),
(2, 'Janus', 'Tienou', 'Januel', '$2y$10$ahWHOfJTCXCJCrvsZANiw.opAeCrSVh6hpkJM/y6eDNmOW6D3gGJe'),
(3, 'fab', 'fab', 'fab', '$2y$10$iguTZ4aD9n0ZflZfGppzUebAnSLxP94W664M9AAN.7oYrio3lmt5e'),
(4, 'mama', 'mama', 'mama', '$2y$10$WwyfR386m2SZmbJag3N.xeiHCPWL6iHY28QcXzj9TWR9tSv3AT8Ru'),
(6, 'tutur', 'arthur', 'bonniel', '$2y$10$P161QgWEu3i9MTZkcK9qA.78wjXfbBVT0E4sb9WFxOHb2luS08na.'),
(7, 'lesang', 'lele', 'sangdessang', '$2y$10$pnk3Yg.9wGXksfogq6rVS.nfPduPZna6/faOpNoCPlTGLLlxWmCAO'),
(8, 'ArthurBonniel', 'Arthur', 'Bonniel', '$2y$10$8Vy2954mjPvXtj6PYWJrqOQqWHO8DyY8XHEBhqOzI3qbYYesy9Q7W');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
