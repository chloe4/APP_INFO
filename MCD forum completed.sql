-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 01 Juin 2015 à 10:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_forum`
--
-- Création :  Ven 29 Mai 2015 à 10:17
--

DROP TABLE IF EXISTS `categorie_forum`;
CREATE TABLE IF NOT EXISTS `categorie_forum` (
  `idcategorie_forum` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(30) NOT NULL,
  `cat_ordre` int(11) NOT NULL,
  `forum_forum_forum_id` int(11) NOT NULL,
  PRIMARY KEY (`idcategorie_forum`),
  UNIQUE KEY `cat_ordre_UNIQUE` (`cat_ordre`),
  UNIQUE KEY `idcategorie_forum_UNIQUE` (`idcategorie_forum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_categorie`
--
-- Création :  Ven 29 Mai 2015 à 10:17
--

DROP TABLE IF EXISTS `forum_categorie`;
CREATE TABLE IF NOT EXISTS `forum_categorie` (
  `cat_id` int(11) NOT NULL,
  `cat_nom` varchar(30) NOT NULL,
  `cat_ordre` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_ordre_UNIQUE` (`cat_ordre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `forum_forum`
--
-- Création :  Ven 29 Mai 2015 à 10:17
--

DROP TABLE IF EXISTS `forum_forum`;
CREATE TABLE IF NOT EXISTS `forum_forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_cat_id` mediumint(9) NOT NULL,
  `forum_name` varchar(30) NOT NULL,
  `forum_desc` text NOT NULL,
  `forum_ordre` mediumint(9) NOT NULL,
  `forum_last_post_id` int(11) NOT NULL,
  `forum_topic` mediumint(9) NOT NULL,
  `forum_post` mediumint(9) NOT NULL,
  `auth_view` tinyint(4) NOT NULL,
  `auth_post` tinyint(4) NOT NULL,
  `auth_annonce` tinyint(4) NOT NULL,
  `auth_modo` tinyint(4) NOT NULL,
  `forum_post_post_id` int(11) NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_post`
--
-- Création :  Ven 29 Mai 2015 à 10:17
--

DROP TABLE IF EXISTS `forum_post`;
CREATE TABLE IF NOT EXISTS `forum_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_createur` int(11) NOT NULL,
  `post_time` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_topic`
--
-- Création :  Ven 29 Mai 2015 à 10:17
--

DROP TABLE IF EXISTS `forum_topic`;
CREATE TABLE IF NOT EXISTS `forum_topic` (
  `topic_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `topic_titre` char(1) NOT NULL,
  `topic_createur` varchar(45) NOT NULL,
  `topic_vu` mediumint(9) NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_genre` varchar(45) NOT NULL,
  `topic_first_post` int(11) NOT NULL,
  `topic_last_post` int(11) NOT NULL,
  `topic_post` mediumint(9) NOT NULL,
  `forum_post_post_id` int(11) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `forum_utilisateurs`
--
-- Création :  Ven 29 Mai 2015 à 10:17
--

DROP TABLE IF EXISTS `forum_utilisateurs`;
CREATE TABLE IF NOT EXISTS `forum_utilisateurs` (
  `forum_u` int(11) NOT NULL,
  `u_pseudo` varchar(30) NOT NULL,
  `u_mdp` varchar(32) NOT NULL,
  `u_siteweb` varchar(100) NOT NULL,
  `u_avatar` varchar(100) NOT NULL,
  `u_signature` varchar(200) NOT NULL,
  `u_localisation` varchar(100) NOT NULL,
  `u_inscrit` int(11) NOT NULL,
  `u_derniere_visite` int(11) NOT NULL,
  `u_rang` varchar(45) NOT NULL,
  `u_post` int(11) NOT NULL,
  `forum_topic_topic_id1` int(11) NOT NULL,
  `categorie_forum_idcategorie_forum` int(11) NOT NULL,
  PRIMARY KEY (`forum_u`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
