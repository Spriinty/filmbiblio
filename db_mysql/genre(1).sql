-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 06 Janvier 2020 à 16:41
-- Version du serveur :  10.3.21-MariaDB-1:10.3.21+maria~bionic-log
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testcine`
--

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `genre` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id`, `genre`) VALUES
(1, 'Action'),
(2, 'Animation'),
(3, 'Aventure'),
(4, 'Biographique'),
(5, 'Catastrophe'),
(6, 'Comédie'),
(7, 'Comédie Dramatique'),
(8, 'Comédie Musicale'),
(9, 'Comédie Policière'),
(10, 'Comédie Romantique'),
(11, 'Court Métrage'),
(12, 'Dessin Animé'),
(13, 'Documentaire'),
(14, 'Drame'),
(15, 'Drame Psychologique'),
(16, 'Epouvante'),
(17, 'Fantastique'),
(18, 'Film Musical'),
(19, 'Guerre'),
(20, 'Historique'),
(21, 'Horreur'),
(22, 'Policier'),
(23, 'Politique'),
(24, 'Romance'),
(25, 'Science Fiction'),
(26, 'Sérial'),
(27, 'Spectacle'),
(28, 'Téléfilm'),
(29, 'Thriller'),
(30, 'Western'),
(31, 'Théâtre'),
(32, 'Sport');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
