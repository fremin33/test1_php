-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 24 Novembre 2017 à 14:17
-- Version du serveur: 5.5.57-MariaDB-1ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
--

-- --------------------------------------------------------

--
-- Structure de la table `php_lieux`
--

CREATE TABLE IF NOT EXISTS `php_lieux` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `nb_places` int(11) NOT NULL,
  `image` varchar(100),
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `php_lieux`
--

INSERT INTO `php_lieux` (`numero`, `adresse`, `nom`, `nb_places`, `image`) VALUES
(2, '111 Boulevard Emile Delmas, 17000 La Rochelle', 'Café du commerce', 40, 'images/cafeCommerce.jpg'),
(5, 'Espace Encan Quai Louis Prunier, 17000 La Rochelle', 'Audorium', 600, 'images/audorium.jpg'),
(15, '8 quai Louis Durand 17000 La Rochelle', 'Croches en Stock', 45, 'images/crochesEnStock.jpg'),
(16, '41 Rue de la Scierie, 17000 La Rochelle', 'L''Aiôn', 40, 'images/aion.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `php_spectacles`
--

CREATE TABLE IF NOT EXISTS `php_spectacles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `lieu` int(11) NOT NULL,
  `jour_heure` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lieu` (`lieu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `php_spectacles`
--

INSERT INTO `php_spectacles` (`id`, `titre`, `lieu`, `jour_heure`) VALUES
(1, 'Slava Snow Show', 5, '2016-02-08 10:00:00'),
(2, 'Winny l''ourson et sa brouette magique', 2, '2016-02-26 14:00:00'),
(3, 'Les fourberies de Scapulos', 2, '2016-01-17 08:29:00'),
(4, 'Le mouton défrisé', 16, '2016-06-24 14:00:00'),
(5, 'Mort sur le grill', 5, '2016-05-27 09:00:00'),
(6, 'J''eux pas, j''ai piscine !', 2, '2016-03-17 20:00:00'),
(7, 'Jamais sans ma Falda', 15, '2016-03-24 20:00:00'),
(8, 'Stop la crise !', 15, '2016-02-14 19:00:00'),
(9, 'Toujours beaux', 15, '2016-04-14 15:00:00'),
(10, 'Sans les mains', 16, '2016-01-30 15:00:00');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `php_spectacles`
--
ALTER TABLE `php_spectacles`
  ADD CONSTRAINT `php_spectacles_ibfk_1` FOREIGN KEY (`lieu`) REFERENCES `php_lieux` (`numero`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
