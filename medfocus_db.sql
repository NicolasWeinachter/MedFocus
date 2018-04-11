-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 11 avr. 2018 à 09:50
-- Version du serveur :  5.7.11-log
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
-- Base de données :  `medfocus_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `level_admin` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('i16uvefghshboodj95aofu21j171p4n2', '::1', 1523262754, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333236323735343b),
('mcqhlomnpu04ai6nh50so6bp0uda0f11', '::1', 1523263247, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333236333234373b),
('58mglv55f3tk5hvcl04j9a6a96rubpnf', '::1', 1523345556, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333334353534393b),
('6o36sptqvt6af0rql276u21ak50mrbfv', '::1', 1523365750, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333336353631363b),
('321l7sqmahua5p0rgaeddp8bq35jpisu', '::1', 1523366143, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333336363031383b),
('i9a0ipiqpqnguv2stp8vn4nv2knj2mk2', '::1', 1523366673, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333336363637333b),
('rqp78sv6418nocoimbn85s7btgjrllvo', '::1', 1523370572, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333337303537323b),
('4i2vdrpka1vvj7ll9o1hiikmt33vlaub', '::1', 1523429709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333432393730393b);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(255) NOT NULL,
  `email_pro` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pros`
--

DROP TABLE IF EXISTS `pros`;
CREATE TABLE IF NOT EXISTS `pros` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `job` varchar(45) NOT NULL,
  `speciality` varchar(45) NOT NULL,
  `experience` text NOT NULL,
  `num_RPPS` int(11) NOT NULL,
  `AGA` tinyint(1) NOT NULL,
  `payment` varchar(45) NOT NULL,
  `carte_vitale` tinyint(1) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city` varchar(45) NOT NULL,
  `practical_info` text NOT NULL,
  `num_tel` int(20) NOT NULL,
  `premium` tinyint(1) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rendez-vous`
--

DROP TABLE IF EXISTS `rendez-vous`;
CREATE TABLE IF NOT EXISTS `rendez-vous` (
  `id_rdv` int(11) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(255) NOT NULL,
  `email_pro` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `length` int(11) NOT NULL,
  `cause` varchar(255) NOT NULL,
  PRIMARY KEY (`id_rdv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `num_tel` int(20) NOT NULL,
  `num_secu` int(13) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
