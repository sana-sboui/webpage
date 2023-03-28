-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 sep. 2022 à 11:16
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formulaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `cycle`
--

CREATE TABLE `cycle` (
  `ID` int(11) NOT NULL,
  `Entreprise` varchar(40) NOT NULL,
  `NSalle` varchar(3) NOT NULL,
  `NAction` int(255) NOT NULL,
  `Themedeformation` varchar(40) NOT NULL,
  `Modedeformation` varchar(30) NOT NULL,
  `Lieudederoulement` varchar(40) NOT NULL,
  `Gouvernorat` varchar(20) NOT NULL,
  `Periodedu` date NOT NULL,
  `Periodeau` date NOT NULL,
  `Horairede` time(6) NOT NULL,
  `Horairea` time(6) NOT NULL,
  `Pausede` time(6) NOT NULL,
  `Pausea` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cycle`
--

INSERT INTO `cycle` (`ID`, `Entreprise`, `NSalle`, `NAction`, `Themedeformation`, `Modedeformation`, `Lieudederoulement`, `Gouvernorat`, `Periodedu`, `Periodeau`, `Horairede`, `Horairea`, `Pausede`, `Pausea`) VALUES
(5, 'sana', '234', 123456, 'dgfhbjkl,', 'hhhhhhh', 'xcfvgbhn', 'aaaaaaa', '0000-00-00', '0000-00-00', '11:00:00.000000', '17:00:00.000000', '12:00:00.000000', '00:00:14.000000'),
(6, 'aaaaaaa', '222', 111111, 'dgfhbjkl,', 'xdcfvgbh', 'xcfvgbhn', 'dfgbh', '0000-00-00', '0000-00-00', '11:00:00.000000', '17:00:00.000000', '12:00:00.000000', '13:00:00.000000'),
(8, 'aaaaaaa', '222', 111111, 'dgfhbjkl,', 'xdcfvgbh', 'xcfvgbhn', 'dfgbh', '0000-00-00', '0000-00-00', '11:00:00.000000', '17:00:00.000000', '12:00:00.000000', '13:00:00.000000'),
(56, 'tek-up', '222', 111111, 'aaaaa', 'bbbbbbbb', 'ccccccc', 'aaaaaaa', '2022-08-03', '2022-08-28', '11:00:00.000000', '00:00:14.000000', '12:00:00.000000', '17:00:00.000000');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

CREATE TABLE `formateur` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prénom` varchar(20) NOT NULL,
  `Spécialité` varchar(40) NOT NULL,
  `Directeur` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`ID`, `Nom`, `Prénom`, `Spécialité`, `Directeur`) VALUES
(1, 'sboui', 'sana', 'data  science', ' Mohamed ali Saadaou'),
(3, 'hajji', 'yosr', 'eleve', 'saoussen jomli'),
(4, 'oueslati', 'samia', 'dr', 'dr.slim');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prénom` varchar(20) NOT NULL,
  `NCIN` int(30) NOT NULL,
  `Directionservice` varchar(50) NOT NULL,
  `Entreprise` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`ID`, `Nom`, `Prénom`, `NCIN`, `Directionservice`, `Entreprise`) VALUES
(14518137, 'sboui', 'sana', 14518133, 'formation', 'cni'),
(14518138, 'oueslati', 'samia', 1234588, 'clinique', 'clinique amal'),
(14518150, 'sboui', 'samiaoueslati', 14518133, 'a', 'aaaaaaa'),
(14518143, 'sboui', 'malek', 1548733, 'khalid jerbi', 'tek-up'),
(14518145, 'sboui', 'samiaoueslati', 1548733, 'khalid jerbi', 'tek-up'),
(14518157, 'sboui', 'sana', 14518133, 'tek-up admin', 'tek-up'),
(14518159, 'oueslati', 'samia', 14518133, 'aaaaaaa', 'tek-up'),
(14518153, 'sboui', 'samia', 888, 'khalid jerbi', 'tek-upkjqns'),
(14518154, 'sboui', 'samia', 1548733, 'a', 'tek-upkjqns'),
(14518155, 'sboui', 'samia', 14518133, 'formation', 'cni'),
(14518156, 'sboui', 'samia', 14518133, 'meeeeeeee', 'alsoo meeeeeeeeee');

-- --------------------------------------------------------

--
-- Structure de la table `signup`
--

CREATE TABLE `signup` (
  `ID` bigint(11) NOT NULL,
  `ndu` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `signup`
--

INSERT INTO `signup` (`ID`, `ndu`, `mdp`) VALUES
(56, 'samiaoueslati', '26/01/1967'),
(57, 'faycal', 'base'),
(58, 'sana', 'sboui'),
(59, 'malek', '26/08/2002'),
(60, 'samiaoueslati', '11111');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cycle`
--
ALTER TABLE `cycle`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cycle`
--
ALTER TABLE `cycle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `formateur`
--
ALTER TABLE `formateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14518160;

--
-- AUTO_INCREMENT pour la table `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
