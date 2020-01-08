-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 07 Janvier 2020 à 10:25
-- Version du serveur :  10.3.21-MariaDB-1:10.3.21+maria~bionic-log
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_ciné`
--

-- --------------------------------------------------------

--
-- Structure de la table `table_films_has_theme_genre`
--

CREATE TABLE `table_films_has_theme_genre` (
  `table_films_idfilm` int(2) NOT NULL,
  `theme_genre_id_genre` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_films_has_theme_genre`
--

INSERT INTO `table_films_has_theme_genre` (`table_films_idfilm`, `theme_genre_id_genre`) VALUES
(1, 1),
(1, 17),
(2, 6),
(2, 24),
(2, 29),
(3, 16),
(3, 21),
(3, 29),
(3, 30),
(4, 31),
(5, 6),
(5, 14),
(6, 7),
(7, 14),
(7, 32),
(8, 14),
(8, 32),
(9, 1),
(9, 14),
(9, 29),
(10, 14),
(10, 18),
(11, 31),
(12, 29);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `table_films_has_theme_genre`
--
ALTER TABLE `table_films_has_theme_genre`
  ADD PRIMARY KEY (`table_films_idfilm`,`theme_genre_id_genre`),
  ADD KEY `fk_table_films_has_theme_genre_theme_genre1_idx` (`theme_genre_id_genre`),
  ADD KEY `fk_table_films_has_theme_genre_table_films_idx` (`table_films_idfilm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
