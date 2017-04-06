-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 30 Mars 2017 à 10:48
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ppe4`
--

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

CREATE TABLE IF NOT EXISTS `diplome` (
  `iddip` int(11) NOT NULL AUTO_INCREMENT,
  `libdip` varchar(150) NOT NULL,
  `comdip` varchar(500) NOT NULL,
  `valide` tinyint(1) NOT NULL,
  PRIMARY KEY (`iddip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `idexp` int(11) NOT NULL AUTO_INCREMENT,
  `libexp` varchar(150) NOT NULL,
  `comexp` varchar(500) NOT NULL,
  `ddexp` date NOT NULL,
  `dfexp` date NOT NULL,
  `idtype` int(11) NOT NULL,
  `valide` tinyint(1) NOT NULL,
  PRIMARY KEY (`idexp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `interet`
--

CREATE TABLE IF NOT EXISTS `interet` (
  `idinteret` int(11) NOT NULL AUTO_INCREMENT,
  `libinteret` varchar(150) NOT NULL,
  PRIMARY KEY (`idinteret`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

CREATE TABLE IF NOT EXISTS `possede` (
  `iduser` int(11) NOT NULL,
  `idinteret` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_exp`
--

CREATE TABLE IF NOT EXISTS `type_exp` (
  `idtype` int(11) NOT NULL AUTO_INCREMENT,
  `libtype` varchar(150) NOT NULL,
  `valide` tinyint(1) NOT NULL,
  PRIMARY KEY (`idtype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `dna` date NOT NULL,
  `sexe` tinyint(1) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `rue` varchar(100) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `iddip` int(11) NOT NULL,
  `idexp` int(11) NOT NULL,
  `valide` tinyint(1) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
