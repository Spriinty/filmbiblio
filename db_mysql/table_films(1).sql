-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 06 Janvier 2020 à 16:42
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
-- Structure de la table `table_films`
--

CREATE TABLE `table_films` (
  `idfilm` int(11) NOT NULL,
  `titre` varchar(24) DEFAULT NULL,
  `description` varchar(421) DEFAULT NULL,
  `anneesortie` int(4) DEFAULT NULL,
  `realisateur` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `table_films`
--

INSERT INTO `table_films` (`idfilm`, `titre`, `description`, `anneesortie`, `realisateur`) VALUES
(1, 'Suicide Squad', 'C\'est tellement jouissif d\'être un salopard ! Face à une menace aussi énigmatique qu\'invincible, l\'agent secret Amanda Waller réunit une armada de crapules de la pire espèce. Armés jusqu\'aux dents par le gouvernement, ces Super-Méchants s\'embarquent alors pour une mission-suicide. Jusqu\'au moment où ils comprennent qu\'ils ont été sacrifiés. Vont-ils accepter leur sort ou se rebeller', 2016, 'David Ayer'),
(2, 'Diversion', 'La relation entre un arnaqueur professionnel et une apprentie criminelle vient perturber les affaires de chacun, quand ils se recroisent quelques années après leur première rencontre', 2015, 'Glenn Ficarra'),
(3, 'Instinct de survie', 'Nancy surfe en solitaire sur une plage isolée lorsqu’elle est attaquée par un grand requin blanc. Elle se réfugie sur un rocher, hors de portée du squale. Elle a moins de 200 mètres à parcourir à la nage pour être sauvée, mais regagner la terre ferme sera le plus mortel des combats', 2016, 'Jaume Collet-Serra'),
(4, 'Shaolin Soccer', 'Fung, un ancien joueur professionnel fait la connaissance d\'un moine adepte d\'arts martiaux, Sing. Il découvre que l\'art de Shaolin peut être une arme fatale pour jouer au football. Les deux hommes décident alors de monter une équipe professionnelle avec d\'autres moines Shaolin', 2001, 'Stephen Chow'),
(5, 'Bievenue chez les Ch\'tis', 'Un directeur de la Poste en Provence est, à son détriment, muté à Bergues, petite ville du Nord. Sa famille refusant de l\'accompagner, Philippe ira seul. A sa grande surprise, il découvre un endroit charmant, une équipe chaleureuse et des gens accueillants. Il se lie d\'amitié avec Antoine, le facteur et le carillonneur du village, à la mère possessive et aux amours contrariées', 2008, 'Dany Boon'),
(6, 'Chicken Run', 'DescriptionP arquées et surveillées nuit et jour, les poules d\'une ferme tenue par un couple cupide multiplient les tentatives d\'évasion avec un coq de cirque qu\'elles ont recueilli. Il faut faire vite car la propriétaire, Mme Tweedy, veut que ses poules servent à la fabrication de tourtes à la volaille.', 2000, 'Peter Lord'),
(7, 'Le Mans 66', 'Dans les années 60, les constructeurs Ford et Ferrari se livraient une guerre sans merci. À cette époque, Henry Ford II reprenait l\'entreprise familiale de son grand-père avec pour objectif d\'imposer les voitures américaines sur le marché européen. Il a été assisté par Lee Iacocca. La rivalité entre les deux constructeurs connue sont apogée lors de la Course du Mans de 1966.', 2019, 'James Mangold'),
(8, 'Rush', 'Au début des années 1970, sur les circuits de Formule 3, James Hunt pilote une Lotus nerveuse et vit comme si chaque jour était le dernier. Un jour, sur le circuit de Cristal Palace, il se frotte à l\'Autrichien Niki Lauda. Hunt et Lauda dominent nettement leurs concurrents et les deux pilotes se lancent dans un âpre duel duquel James Hunt sort vainqueur. Bientôt, l\'ambitieux Niki Lauda intègre une écurie de Formule 1.', 2013, 'Ron Howard'),
(9, 'Drive', 'Un jeune homme solitaire, The Driver, conduit le jour à Hollywood pour le cinéma en tant que cascadeur et la nuit pour des truands. Ultra professionnel et peu bavard, il a son propre code de conduite. Jamais il n\'a pris part aux crimes de ses employeurs autrement qu\'en conduisant - et au volant, il est le meilleur !', 2011, 'Nicolas Winding Refn'),
(10, 'Whiplash', 'Andrew, 19 ans, rêve de devenir l’un des meilleurs batteurs de jazz de sa génération. Mais la concurrence est rude au conservatoire de Manhattan où il s’entraîne avec acharnement. Il a pour objectif d’intégrer le fleuron des orchestres dirigé par Terence Fletcher, professeur féroce et intraitable. Lorsque celui-ci le repère enfin, Andrew se lance, sous sa direction, dans la quête de l’excellence...', 2014, 'Damien Chazelle'),
(11, 'Get Out', 'Couple mixte, Chris et sa petite amie Rose  filent le parfait amour. Le moment est donc venu de rencontrer la belle famille, Missy et Dean lors d’un week-end sur leur domaine dans le nord de l’État. Chris commence par penser que l’atmosphère tendue est liée à leur différence de couleur de peau, mais très vite une série d’incidents de plus en plus inquiétants lui permet de découvrir l’inimaginable.', 2017, 'Jordan Peele'),
(12, 'Parasite', 'Toute la famille de Ki-taek est au chômage, et s’intéresse fortement au train de vie de la richissime famille Park. Un jour, leur fils réussit à se faire recommander pour donner des cours particuliers d’anglais chez les Park. C’est le début d’un engrenage incontrôlable, dont personne ne sortira véritablement indemne...', 2019, 'Joon-ho Bong');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `table_films`
--
ALTER TABLE `table_films`
  ADD PRIMARY KEY (`idfilm`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `table_films`
--
ALTER TABLE `table_films`
  MODIFY `idfilm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
