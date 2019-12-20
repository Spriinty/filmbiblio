-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 20 Décembre 2019 à 10:52
-- Version du serveur :  10.3.21-MariaDB-1:10.3.21+maria~bionic-log
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mydb`
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
(1, 2),
(1, 18),
(2, 7),
(2, 25),
(2, 30),
(3, 17),
(3, 22),
(3, 30),
(4, 33),
(5, 7),
(5, 15),
(6, 8),
(7, 15),
(7, 33),
(8, 15),
(8, 33),
(9, 2),
(9, 15),
(9, 30),
(10, 15),
(10, 19),
(11, 32),
(12, 30);

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

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `table_films_has_theme_genre`
--
ALTER TABLE `table_films_has_theme_genre`
  ADD CONSTRAINT `fk_table_films_has_theme_genre_table_films` FOREIGN KEY (`table_films_idfilm`) REFERENCES `table_films` (`idfilm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table_films_has_theme_genre_theme_genre1` FOREIGN KEY (`theme_genre_id_genre`) REFERENCES `theme_genre` (`id_genre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
