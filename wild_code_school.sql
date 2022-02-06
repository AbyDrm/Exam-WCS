-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 06 fév. 2022 à 16:45
-- Version du serveur :  5.7.32
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wild_code_school`
--

-- --------------------------------------------------------

--
-- Structure de la table `argonautes`
--

CREATE TABLE `argonautes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_entree` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `argonautes`
--

INSERT INTO `argonautes` (`id`, `nom`, `date_entree`) VALUES
(1, 'Eleftheria', '2022-02-06'),
(3, 'Gennadios', '2022-02-06'),
(4, 'Lysimachos', '2022-02-06'),
(5, 'Admète', '2022-02-06'),
(6, 'Périclyménos', '2022-02-06'),
(7, 'Céphée', '2022-02-06'),
(8, 'Céphée', '2022-02-06'),
(9, 'Céphée', '2022-02-06'),
(10, 'Palaemonios', '2022-02-06'),
(11, 'Poeas', '2022-02-06'),
(12, 'Boutès', '2022-02-06'),
(13, 'Ancée', '2022-02-06');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `argonautes`
--
ALTER TABLE `argonautes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `argonautes`
--
ALTER TABLE `argonautes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
