-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 30 avr. 2021 à 10:52
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autocompletion`
--

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `restaurant_id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `restaurant_type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `restaurant_description` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`restaurant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_nom`, `restaurant_type`, `restaurant_description`) VALUES
(1, 'Le Peron', 'Gastronomique', 'Accroché à la Corniche, le restaurant Peron surplombe la mer en offrant une vue à couper le souffle. Le panorama comme une invitation au voyage embrasse les îles du Frioul, le château d’If, l’Estaque et l’entrée du Vieux-Port... Sur notre terrasse ensoleillée ou à l’intérieur dans une ambiance élégante et décontractée. Peron fait vivre la magie d’une table à fleur de mer.'),
(2, 'Le Rhul', 'Gastronomique', 'Le Rhul, hôtel restaurant spécialiste de la bouillabaisse dans le 7e arrondissement de Marseille depuis 1948, vous accueille toute l’année dans un cadre exceptionnel. Perché sur son rocher de la Corniche, vous pourrez profiter de chambres tout confort et climatisées, dont certaines avec vue mer. Tout au long de votre séjour d’affaires ou touristique, découvrez nos prestations 3 étoiles . Rendez- vous dans votre hôtel à Marseille pour tous vos voyages professionnels, en solitaire ou en amoureux !'),
(3, 'Le Petit Nice', 'Gastronomique', 'Le Petit Nice – un restaurant Trois étoiles MICHELIN : une cuisine unique. Vaut le voyage ! dans le Guide MICHELIN France 2021.'),
(4, 'La Mercerie', 'Bistro', 'Ancienne mercerie accueillant un restaurant de quartier festif Ã  la cuisine du marché et aux vins choisis.'),
(5, 'Le Lauracée', 'Gastronomique', 'Cuisine du marché fine et inventive dans le cadre accueillant de ce restaurant avec banquettes et coussins.'),
(6, 'La Table du Fort', 'Gastronomique', 'Fins plats provençaux du marché dans une salle contemporaine et confortable avec lustres design et banquettes.'),
(7, 'Le Petit Cabanon', 'Bistro', 'Dans ce néo-bistrot au cadre minimaliste, le chef Anthony Germani, originaire de Marseille, met tout en œuvre pour régaler ses convives. Produits locaux de rigueur '),
(8, 'Dayo', 'Familiale', 'Restaurant clair et sobre, orné de tableaux classiques, qui propose une cuisine fine aux saveurs du Sud.'),
(9, 'Au Prado', 'Bistro', 'La vie est belle sur le prado'),
(10, 'Au Ronino', 'Familiale', 'Manger des frites'),
(11, 'yummy mama', 'Bistro', 'YATA !!!!!!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
