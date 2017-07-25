-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Juin 2017 à 21:29
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siefreiprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `assocuserevent`
--

CREATE TABLE `assocuserevent` (
  `IdAssoc` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idEvent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `assocuserevent`
--

INSERT INTO `assocuserevent` (`IdAssoc`, `idUser`, `idEvent`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `idEvent` int(11) NOT NULL,
  `NomEvent` varchar(32) NOT NULL,
  `Description` text NOT NULL,
  `Date` date NOT NULL,
  `Heure` varchar(10) NOT NULL,
  `Duree` varchar(32) NOT NULL,
  `urlPhoto` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`idEvent`, `NomEvent`, `Description`, `Date`, `Heure`, `Duree`, `urlPhoto`) VALUES
(1, 'Event1', 'Description1', '2017-01-01', '17h00', '3h', 'NoURL'),
(2, 'Event2', 'Description2', '2018-01-01', '17h00', '4h', 'NoURL'),
(3, 'Event3', 'Description3', '2017-01-10', '17h00', '5h', 'NoURL');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `IdUser` int(11) NOT NULL,
  `Nom` varchar(32) NOT NULL,
  `Prenom` varchar(32) NOT NULL,
  `AdresseMail` varchar(32) NOT NULL,
  `NumLicense` varchar(32) NOT NULL,
  `password` varbinary(32) NOT NULL,
  `salt` varbinary(32) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`IdUser`, `Nom`, `Prenom`, `AdresseMail`, `NumLicense`, `password`, `salt`, `isAdmin`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '1', 0x99245444534a69523835583541, 0x992498eecb6487c6664ee29ed4cb7bc7aabe9954e4b488922189ed0f04e85c7d, 1),
(2, 'nom1', 'prenom1', 'mail1', '123', 0x6ff7754662316450317a414859, 0x6ff71f5052a58821749e804451996eb3a6f6dd51e5b8b52b8adcd034d75b8891, 0),
(3, 'nom2', 'prenom2', 'mail2', '456', 0xe1023147793254482f486c6655, 0xe102f7ae0fd15773059dabe1a4a90d95745a4e0bc4ac0d23f1a697ff01f8b005, 0),
(4, 'nom3', 'prenom3', 'mail3', '789', 0x84e667356f7478723859384945, 0x84e60514bccdceab52dadf5e18059914bd309e80e13f78b2a8822514675d5e80, 0),
(5, 'nom4', 'prenom4', 'mail4', '101', 0x98d2654b543932523236726c51, 0x98d2c3b81c4fb509d428fd5d8bd0c01458aff8f1ce9b6a17b76da8b8b87ce534, 0),
(6, 'nom5', 'prenom5', 'mail5', '112', 0x527d546f6c4d74332e7a783545, 0x527d81e0b98dd67b00cac41c1555800ad91dbb099317a7632e19e2f2c4f670f2, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `assocuserevent`
--
ALTER TABLE `assocuserevent`
  ADD PRIMARY KEY (`IdAssoc`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idEvent`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `assocuserevent`
--
ALTER TABLE `assocuserevent`
  MODIFY `IdAssoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `album` (
`idAlbum` int(11) NOT NULL AUTO_INCREMENT,
`titre` varchar(32) NOT NULL,
PRIMARY KEY (`idAlbum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
