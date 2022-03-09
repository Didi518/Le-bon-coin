-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 09 mars 2022 à 16:34
-- Version du serveur :  8.0.28-0ubuntu0.20.04.3
-- Version de PHP : 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `le_bon_coin`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date_de_parution` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `quantity`, `price`, `description`, `img`) VALUES
(1, 'Iphone', 32, 200, 'Dernier Iphone !', 'assets/img/iphone.jpg'),
(2, 'Samsung', 12, 180, 'Top Vente !', 'assets/img/samsung.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
