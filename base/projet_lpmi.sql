-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 07 fév. 2018 à 23:08
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_lpmi`
--

-- --------------------------------------------------------

--
-- Structure de la table `enseignement`
--

DROP TABLE IF EXISTS `enseignement`;
CREATE TABLE IF NOT EXISTS `enseignement` (
  `id` int(6) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `alias` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignement`
--

INSERT INTO `enseignement` (`id`, `titre`, `alias`) VALUES
(1, 'Langage pour le web LPSIL', 'LPSIL'),
(2, 'Synthèse d\'image L3 info', 'L3SI'),
(3, 'Technologie du web L3 info', 'L3TW'),
(4, 'Computer graphics M1CV', 'M1CG'),
(5, 'Web M2 Multimedia', 'M2MW'),
(6, 'Web M2 BDIA', 'M2BDIAW');

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

DROP TABLE IF EXISTS `fichier`;
CREATE TABLE IF NOT EXISTS `fichier` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `nom_ex` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fichier`
--

INSERT INTO `fichier` (`id`, `nom`, `nom_ex`) VALUES
(1, 'Fichier', 'testmouvation.txt');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL,
  `intitule` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id`, `intitule`) VALUES
(0, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

DROP TABLE IF EXISTS `recherche`;
CREATE TABLE IF NOT EXISTS `recherche` (
  `id` int(6) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `alias` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recherche`
--

INSERT INTO `recherche` (`id`, `titre`, `alias`) VALUES
(1, 'Surfaces de subdivision', 'ss'),
(2, 'Subdivision inverse', 'si'),
(3, 'Déformations de formes libre', 'dfl'),
(4, 'Intersections', 'inter'),
(5, 'Précision des maillages', 'pm'),
(6, 'Subdivision adaptative', 'sa'),
(7, 'Quasi-Interpolant', 'qi');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mdp` varchar(25) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `profil` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Utilisateur` (`profil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `mail`, `mdp`, `nom`, `prenom`, `profil`) VALUES
(0, 'f.l@gmail.com', 'lalanne', 'Lalanne', 'Francis', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
