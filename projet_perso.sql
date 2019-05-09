-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 09 mai 2019 à 21:19
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_perso`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacter`
--

CREATE TABLE `contacter` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacter`
--

INSERT INTO `contacter` (`ID`, `nom`, `prenom`, `telephone`, `objet`, `msg`) VALUES
(1, 'Amadji', 'kevin', '0606060606', 'réclamation', 'j\'ai acheter un produit qui ne fonctionne pas '),
(2, 'Amadji', 'kevin', '0767429452', 'reussite', 'cest bon'),
(3, 'Seck ', 'gogo', '0605020203', 'appréciation', 'il aime trop les chaussure nike'),
(4, 'Ndiaye', 'Omar', '0758055770', 'Remerciement', 'Merci de m\'avoir aider ce soir '),
(5, 'seck', 'rassoul', '020202020202', 'huytghjhyt', 'kjkhghj;hgfhgfd'),
(6, 'toto', 'gut', '12365441220', 'aucun', 'QSDFGHJKLZERTYUIOP'),
(7, 'attal ', 'david', '3443434343', 'aucun', 'super projet'),
(8, '', '', '', '', ''),
(9, 'Salim', 'Aymane', '0651855535', 'reussite', 'Je suis un artiste '),
(10, 'nait atmane', 'koceila', '0678960756', 'inscription', 'donne ton projet'),
(11, 'Amadji', 'kevin', '0767429452', 'ljdvmousfv', 'oizebmouvgmuod');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacter`
--
ALTER TABLE `contacter`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacter`
--
ALTER TABLE `contacter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
