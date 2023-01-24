-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 24 jan. 2023 à 09:44
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
-- Base de données : `planetdev`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `Email`, `Password`) VALUES
(1, 'Fati DARIM', 'fati@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `articl`
--

DROP TABLE IF EXISTS `articl`;
CREATE TABLE IF NOT EXISTS `articl` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Publication_date` date NOT NULL,
  `Image` text NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articl`
--

INSERT INTO `articl` (`id`, `Title`, `Publication_date`, `Image`, `admin_name`, `category_name`, `Description`) VALUES
(1, 'Big DATA & IA ', '2023-01-03', 'PHOTOME.jfif', 'Fatimezzahra DARIM', 'IA', 'azertyuiop^mlkjhgfdxsxdfghjklkjbvcxcvbn,;,nbvcxwxcvhbnj,kjhgcxcvbn,'),
(2, 'cloud', '2012-07-25', 'logo.png', 'hauwei', 'cloud', 'very easy to success'),
(3, 'Soluta perspiciatis', '2023-01-23', 'logo.png', '1', 'Naomi Norton', 'Omnis hic qui volupt'),
(4, 'Harum dolores esse ', '2023-01-23', 'logo.png', '1', '', 'Aspernatur animi se'),
(5, 'Pariatur Fuga Poss', '2023-01-23', '370c6b5e-2a24-4a6a-95ba-e6ee54529487.jfif', '1', '', 'Qui id et pariatur ');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'IA & Big Data'),
(2, 'Cloud'),
(3, 'Storage');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
