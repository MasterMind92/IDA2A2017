-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 24 Juin 2017 à 12:17
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--
CREATE DATABASE IF NOT EXISTS `projet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projet`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `idadmin` int(11) NOT NULL,
  `nomadmin` varchar(50) DEFAULT NULL,
  `prenadmin` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdpad` varchar(50) DEFAULT NULL,
  `idprofil` int(11) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`idadmin`, `nomadmin`, `prenadmin`, `login`, `mdpad`, `idprofil`, `dateajout`, `datemodif`) VALUES
(1, 'MADARA', 'BELI', 'admin', 'root', 1, '2017-06-17 14:31:45', '2017-06-17 14:31:45'),
(2, 'admin', 'admin', 'admin', 'admin', 1, '2017-06-23 12:17:39', '2017-06-23 12:17:39'),
(3, 'admin', 'admin', '', '', 1, '2017-06-23 13:41:28', '2017-06-23 13:41:28');

-- --------------------------------------------------------

--
-- Structure de la table `autoecole`
--

CREATE TABLE `autoecole` (
  `idAuto` int(11) NOT NULL,
  `idSp` int(11) DEFAULT NULL,
  `libeAuto` varchar(225) DEFAULT NULL,
  `contAuto` varchar(225) DEFAULT NULL,
  `situgeo` varchar(225) DEFAULT NULL,
  `adrs` varchar(225) DEFAULT NULL,
  `emailAuto` varchar(225) DEFAULT NULL,
  `idadmin` int(11) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `autoecole`
--

INSERT INTO `autoecole` (`idAuto`, `idSp`, `libeAuto`, `contAuto`, `situgeo`, `adrs`, `emailAuto`, `idadmin`, `dateajout`, `datemodif`) VALUES
(1, 8, 'MADARA', NULL, 'koumassi', 'beli6600@yahoo.fr', 'madara@hotmail.com', 1, '2017-06-17 14:54:26', '2017-06-17 14:54:26'),
(2, 8, 'MADARA', '05-05-05-03', 'koumassi', 'beli6600@yahoo.fr', 'madara@hotmail.com', 1, '2017-06-17 14:58:25', '2017-06-17 14:58:25'),
(3, 10, '', '', '', '', 'beli@ujr.com', 1, '2017-06-22 12:41:11', '2017-06-22 12:41:11'),
(4, 11, 'dsfds', '021574', 'koumassi', 'beli6600@yahoo.fr', 'beli@ujr.com', 1, '2017-06-22 12:52:40', '2017-06-22 12:52:40'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-06-22 16:51:10', '2017-06-22 16:51:10'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-06-22 16:51:19', '2017-06-22 16:51:19'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-06-22 16:51:20', '2017-06-22 16:51:20'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-06-22 16:51:21', '2017-06-22 16:51:21'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-06-22 16:51:24', '2017-06-22 16:51:24'),
(10, NULL, 'MADARA', NULL, NULL, NULL, NULL, 1, '2017-06-22 16:57:10', '2017-06-22 16:57:10'),
(11, NULL, 'MADARA', NULL, NULL, NULL, NULL, 1, '2017-06-22 16:57:12', '2017-06-22 16:57:12'),
(12, 4, 'jnj', '', '', 'bjjj', 'bbhbiuj@lok.bl', 1, '2017-06-23 10:05:59', '2017-06-23 10:05:59');

-- --------------------------------------------------------

--
-- Structure de la table `centreexamen`
--

CREATE TABLE `centreexamen` (
  `idCent` int(11) NOT NULL,
  `idVisit` int(11) DEFAULT NULL,
  `nomCent` varchar(225) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `demandeur`
--

CREATE TABLE `demandeur` (
  `idDe` int(11) NOT NULL,
  `nomDe` varchar(255) DEFAULT NULL,
  `preDe` varchar(255) DEFAULT NULL,
  `datNai` varchar(255) DEFAULT NULL,
  `numpieceDe` varchar(255) DEFAULT NULL,
  `domiDe` varchar(255) DEFAULT NULL,
  `profDe` varchar(255) DEFAULT NULL,
  `contDe` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `demandeur`
--

INSERT INTO `demandeur` (`idDe`, `nomDe`, `preDe`, `datNai`, `numpieceDe`, `domiDe`, `profDe`, `contDe`, `email`, `dateajout`, `datemodif`) VALUES
(4, 'cojkiz', 'bcc', '12/21/21450', '', '', 'bzubz', '0250548', 'nnbhhvunce@gail.com', '2017-06-07 05:56:31', '2017-06-07 05:56:31'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-07 05:57:54', '2017-06-07 05:57:54'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-07 13:28:54', '2017-06-07 13:28:54'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-07 13:29:03', '2017-06-07 13:29:03'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-07 13:53:41', '2017-06-07 13:53:41'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-07 13:59:30', '2017-06-07 13:59:30'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-17 10:05:49', '2017-06-17 10:05:49'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-17 11:59:03', '2017-06-17 11:59:03'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-17 11:59:04', '2017-06-17 11:59:04'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-22 14:42:42', '2017-06-22 14:42:42'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-22 14:42:49', '2017-06-22 14:42:49');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `idDepart` int(11) NOT NULL,
  `libedp` varchar(225) DEFAULT NULL,
  `idReg` int(11) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `departement`
--

INSERT INTO `departement` (`idDepart`, `libedp`, `idReg`, `dateajout`, `datemodif`) VALUES
(1, 'Rubino', 1, NULL, NULL),
(2, 'Sikensi', 1, NULL, NULL),
(3, 'Agboville', 1, NULL, NULL),
(4, 'Azaguié', 1, NULL, NULL),
(5, 'Taabo', 1, NULL, NULL),
(6, 'Koro', 2, NULL, NULL),
(7, 'Ouaninou', 2, NULL, NULL),
(8, 'Touba', 2, NULL, NULL),
(9, 'Boundiali', 3, NULL, NULL),
(10, 'Kouto', 3, NULL, NULL),
(11, 'M?bengué', 3, NULL, NULL),
(12, 'Tengrela', 3, NULL, NULL),
(13, 'Didievi', 4, NULL, NULL),
(14, 'Djekanou', 4, NULL, NULL),
(15, 'Tiebissou', 4, NULL, NULL),
(16, 'Toumodi', 4, NULL, NULL),
(17, 'Dianra', 5, NULL, NULL),
(18, 'Mankono', 5, NULL, NULL),
(19, 'Kounahiri', 5, NULL, NULL),
(20, 'Bouna', 6, NULL, NULL),
(21, 'Doropo', 6, NULL, NULL),
(22, ' Nassian', 6, NULL, NULL),
(23, 'Tehini', 6, NULL, NULL),
(24, 'Blolequin', 7, NULL, NULL),
(25, 'Guiglo', 7, NULL, NULL),
(26, 'Toulepleu', 7, NULL, NULL),
(27, 'ABIDJAN', 8, NULL, NULL),
(28, 'Attiegouakro', 9, NULL, NULL),
(29, 'Yamoussoukro', 9, NULL, NULL),
(30, 'Kaniasso', 10, NULL, NULL),
(31, 'Minignan', 10, NULL, NULL),
(32, 'Beoumi', 11, NULL, NULL),
(33, 'Botro', 11, NULL, NULL),
(34, 'Bouake', 11, NULL, NULL),
(35, 'Sakassou', 11, NULL, NULL),
(36, 'Sassandra', 12, NULL, NULL),
(37, 'Fresco', 12, NULL, NULL),
(38, 'Gagnoa', 13, NULL, NULL),
(39, 'Oume', 13, NULL, NULL),
(40, 'Bondoukou', 14, NULL, NULL),
(41, 'Koun-Fao', 14, NULL, NULL),
(42, 'Sandegue', 14, NULL, NULL),
(43, 'Tanda', 14, NULL, NULL),
(44, 'Transua', 14, NULL, NULL),
(45, 'Dabou', 15, NULL, NULL),
(46, 'Grand-Lahou', 15, NULL, NULL),
(47, 'Jacqueville', 15, NULL, NULL),
(48, 'Bangolo', 16, NULL, NULL),
(49, 'Duekoue', 16, NULL, NULL),
(50, 'Facobly', 16, NULL, NULL),
(51, 'Kouibly', 16, NULL, NULL),
(52, 'Dabakala', 17, NULL, NULL),
(53, 'Katiola', 17, NULL, NULL),
(54, 'Niakaramandougou', 17, NULL, NULL),
(55, 'Daloa', 18, NULL, NULL),
(56, 'Issia', 18, NULL, NULL),
(57, 'Vavoua', 18, NULL, NULL),
(58, 'Zoukougbeu', 18, NULL, NULL),
(59, 'Daoukro', 19, NULL, NULL),
(60, ' M?bahiakro', 19, NULL, NULL),
(61, 'Prikro', 19, NULL, NULL),
(62, 'Abengourou', 20, NULL, NULL),
(63, 'Agnibilekro', 20, NULL, NULL),
(64, 'Bettie', 20, NULL, NULL),
(65, 'Gbeleban', 21, NULL, NULL),
(66, 'Madinani', 21, NULL, NULL),
(67, 'Odienné', 21, NULL, NULL),
(68, 'Samatiguila', 21, NULL, NULL),
(69, 'Seguelon', 21, NULL, NULL),
(70, 'Divo', 22, NULL, NULL),
(71, 'Guitry', 22, NULL, NULL),
(72, 'Lakota', 22, NULL, NULL),
(73, 'Bouafle', 23, NULL, NULL),
(74, 'Sinfra', 23, NULL, NULL),
(75, 'Zuenoula', 23, NULL, NULL),
(76, 'Adzope', 24, NULL, NULL),
(77, 'Akoupe', 24, NULL, NULL),
(78, 'Alepe', 24, NULL, NULL),
(79, 'Yakasse', 24, NULL, NULL),
(80, 'Attobrou', 24, NULL, NULL),
(81, 'Arrah', 25, NULL, NULL),
(82, 'Bongouanou', 25, NULL, NULL),
(83, 'M?batto', 25, NULL, NULL),
(84, 'Buyo ', 26, NULL, NULL),
(85, ' Gueyo', 26, NULL, NULL),
(86, 'Meagui', 26, NULL, NULL),
(87, 'Soubré', 26, NULL, NULL),
(88, 'Bocanda', 27, NULL, NULL),
(89, 'Dombokro', 27, NULL, NULL),
(90, ',Kouassi-Kouassikro', 27, NULL, NULL),
(91, 'Dikodougou', 28, NULL, NULL),
(92, 'Korhogo', 28, NULL, NULL),
(93, 'Sinematiali', 28, NULL, NULL),
(94, 'San- Pedro', 29, NULL, NULL),
(95, 'Tabou', 29, NULL, NULL),
(96, 'Aboisso', 30, NULL, NULL),
(97, 'Adiake', 30, NULL, NULL),
(98, 'Grand-Bassam', 30, NULL, NULL),
(99, 'Tiapoum', 30, NULL, NULL),
(100, 'Ferkessedougou', 31, NULL, NULL),
(101, 'Kong', 31, NULL, NULL),
(102, 'Ouangolodougou', 31, NULL, NULL),
(103, 'Biankouma', 32, NULL, NULL),
(104, 'Danane', 32, NULL, NULL),
(105, 'Man', 32, NULL, NULL),
(106, 'Sipilou', 32, NULL, NULL),
(107, 'Zouan-Hounien', 32, NULL, NULL),
(108, 'Kani', 33, NULL, NULL),
(109, 'Séguela', 33, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `effectuer`
--

CREATE TABLE `effectuer` (
  `idEffect` int(11) NOT NULL,
  `idEv` int(11) DEFAULT NULL,
  `idDe` int(11) DEFAULT NULL,
  `dateEvalu` varchar(255) DEFAULT NULL,
  `etatEf` varchar(225) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE `evaluation` (
  `idEv` int(11) NOT NULL,
  `libEleva` varchar(225) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

CREATE TABLE `faire` (
  `idFai` int(11) NOT NULL,
  `idFor` int(11) DEFAULT NULL,
  `idPers` int(11) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `idFor` int(11) NOT NULL,
  `libFor` varchar(225) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`idFor`, `libFor`, `dateajout`, `datemodif`) VALUES
(1, 'Permis A', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(2, 'Permis B', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(3, 'Permis C', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(4, 'Permis D', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(5, 'Permis E', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(6, 'Permis F', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(7, 'Permis AB', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(8, 'Permis ABC', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(9, 'Permis ABCD', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(10, 'Permis ABCDE', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(11, 'Permis BC', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(12, 'Permis BCD', '2017-06-23 14:25:30', '2017-06-23 14:25:30'),
(13, 'Permis BCDE', '2017-06-23 14:25:30', '2017-06-23 14:25:30');

-- --------------------------------------------------------

--
-- Structure de la table `materielformation`
--

CREATE TABLE `materielformation` (
  `idMatfor` int(11) NOT NULL,
  `idFor` int(11) DEFAULT NULL,
  `noMat` varchar(225) DEFAULT NULL,
  `idtype` int(11) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `materielformation`
--

INSERT INTO `materielformation` (`idMatfor`, `idFor`, `noMat`, `idtype`, `dateajout`, `datemodif`) VALUES
(1, 1, 'Moto', 1, '2017-06-23 16:01:04', '2017-06-23 16:01:04'),
(2, 2, 'voiture personnelle', 2, '2017-06-23 16:10:09', '2017-06-23 16:10:09'),
(3, 3, 'transport commun', 3, '2017-06-23 16:11:40', '2017-06-23 16:11:40'),
(4, 4, 'camionette', 4, '2017-06-23 16:12:21', '2017-06-23 16:12:21'),
(5, 5, 'gros camion', 5, '2017-06-23 16:13:06', '2017-06-23 16:13:06'),
(6, 6, 'handicapé', 6, '2017-06-23 16:13:54', '2017-06-23 16:13:54'),
(7, 7, 'voiture personnelle et moto', 7, '2017-06-23 16:15:00', '2017-06-23 16:15:00'),
(8, 8, 'voiture personnelle, moto et camionnette', 8, '2017-06-23 16:15:52', '2017-06-23 16:15:52'),
(9, 9, 'voiture personnelle, moto et tous camions', 9, '2017-06-23 16:17:46', '2017-06-23 16:17:46'),
(10, 10, 'tous les vehicules', 10, '2017-06-23 16:19:27', '2017-06-23 16:19:27'),
(11, 11, 'voiture personnelle et camionette', 11, '2017-06-23 16:21:24', '2017-06-23 16:21:24'),
(12, 12, 'voiture personnelle et tous camions', 12, '2017-06-23 16:22:51', '2017-06-23 16:22:51'),
(13, 13, 'tous engins sauf moto', 13, '2017-06-23 16:24:30', '2017-06-23 16:24:30');

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

CREATE TABLE `participe` (
  `idParti` int(11) NOT NULL,
  `idDe` int(11) DEFAULT NULL,
  `idFor` int(11) DEFAULT NULL,
  `dateDebut` varchar(255) DEFAULT NULL,
  `dateFin` varchar(255) DEFAULT NULL,
  `statuForm` varchar(225) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `passer`
--

CREATE TABLE `passer` (
  `idPas` int(11) NOT NULL,
  `idVisit` int(11) DEFAULT NULL,
  `idDe` int(11) DEFAULT NULL,
  `datPse` varchar(255) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `idPers` int(11) NOT NULL,
  `idAuto` int(11) DEFAULT NULL,
  `nomPers` varchar(225) DEFAULT NULL,
  `prePers` varchar(225) DEFAULT NULL,
  `datnaissPers` varchar(255) DEFAULT NULL,
  `domiPers` varchar(225) DEFAULT NULL,
  `profPers` varchar(225) DEFAULT NULL,
  `contPers` varchar(225) DEFAULT NULL,
  `emailPers` varchar(225) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdpad` varchar(50) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personnel`
--

INSERT INTO `personnel` (`idPers`, `idAuto`, `nomPers`, `prePers`, `datnaissPers`, `domiPers`, `profPers`, `contPers`, `emailPers`, `login`, `mdpad`, `dateajout`, `datemodif`) VALUES
(1, 1, 'ABI', 'ABI', '12-52-2015', 'KOUMASSI', 'ETUDIANTE', '05050805', 'beli6600@yah.fr', 'login', 'admin', '2017-06-23 10:58:04', '2017-06-23 10:58:04'),
(2, 1, 'ABI', 'ABI', '12-52-2015', 'KOUMASSI', 'ETUDIANTE', '05050805', 'beli6600@yah.fr', 'login', 'admin', '2017-06-23 10:58:06', '2017-06-23 10:58:06'),
(3, 1, 'ABI', 'ABI', '12-52-2015', 'KOUMASSI', 'ETUDIANTE', '05050805', 'beli6600@yah.fr', 'login', 'admin', '2017-06-23 10:58:07', '2017-06-23 10:58:07'),
(4, 1, 'ABI', 'ABI', '12-52-2015', 'KOUMASSI', 'ETUDIANTE', '05050805', 'beli6600@yah.fr', 'login', 'admin', '2017-06-23 10:58:07', '2017-06-23 10:58:07'),
(5, 1, 'ABI', 'ABI', '12-52-2015', 'KOUMASSI', 'ETUDIANTE', '05050805', 'beli6600@yah.fr', 'login', 'admin', '2017-06-23 10:58:07', '2017-06-23 10:58:07'),
(6, 1, 'ABI', 'ABI', '12-52-2015', 'KOUMASSI', 'ETUDIANTE', '05050805', 'beli6600@yah.fr', 'login', 'admin', '2017-06-23 10:58:08', '2017-06-23 10:58:08');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `idprofil` int(11) NOT NULL,
  `libprofil` varchar(225) DEFAULT NULL,
  `nivouser` varchar(225) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`idprofil`, `libprofil`, `nivouser`, `dateajout`, `datemodif`) VALUES
(1, 'super_Admin', '0', '2017-06-23 12:32:26', '2017-06-23 12:32:26'),
(2, 'Admin', '1', '2017-06-23 12:32:26', '2017-06-23 12:32:26'),
(3, 'Auto-ecole', '2', '2017-06-23 12:32:26', '2017-06-23 12:32:26'),
(4, 'USER', '3', '2017-06-23 12:32:26', '2017-06-23 12:32:26');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `idReg` int(11) NOT NULL,
  `nomreg` varchar(255) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`idReg`, `nomreg`, `dateajout`, `datemodif`) VALUES
(1, 'AGNEBY-TIASSA', NULL, NULL),
(2, 'BAFING', NULL, NULL),
(3, 'BAGOUE', NULL, NULL),
(4, 'BELIER', NULL, NULL),
(5, 'BERE', NULL, NULL),
(6, 'BOUNKANI', NULL, NULL),
(7, 'CAVALLY', NULL, NULL),
(8, 'DITRICT AUTONOME D?ABIDJAN', NULL, NULL),
(9, 'DISTRICT AUTONOME DE YAMOUSSOUKRO', NULL, NULL),
(10, 'FOLON', NULL, NULL),
(11, 'GBEKE', NULL, NULL),
(12, 'GBOKLE', NULL, NULL),
(13, 'GOH', NULL, NULL),
(14, 'GONTOUGO', NULL, NULL),
(15, 'GRANDS PONTS', NULL, NULL),
(16, 'GUEMON', NULL, NULL),
(17, 'HAMBOL', NULL, NULL),
(18, 'HAUT SASSANDRA', NULL, NULL),
(19, 'IFFOU', NULL, NULL),
(20, 'INDENIE-GJUABLIN', NULL, NULL),
(21, 'KABADOUGOU', NULL, NULL),
(22, 'LOH-DJIBOUA', NULL, NULL),
(23, 'MARAHOUE', NULL, NULL),
(24, 'ME', NULL, NULL),
(25, 'MORONOU', NULL, NULL),
(26, 'NAWA', NULL, NULL),
(27, 'N/\'ZI', NULL, NULL),
(28, 'PORO', NULL, NULL),
(29, 'SAN PEDRO', NULL, NULL),
(30, 'SUD COMOE', NULL, NULL),
(31, 'TCHOLOGO', NULL, NULL),
(32, 'TONKPI', NULL, NULL),
(33, 'WORODOUGOU', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sousprefecture`
--

CREATE TABLE `sousprefecture` (
  `idSp` int(11) NOT NULL,
  `idDepart` int(11) DEFAULT NULL,
  `libSP` varchar(225) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sousprefecture`
--

INSERT INTO `sousprefecture` (`idSp`, `idDepart`, `libSP`, `dateajout`, `datemodif`) VALUES
(1, 27, 'Abobo', NULL, NULL),
(2, 27, 'Adjame', NULL, NULL),
(3, 27, 'Attecoube', NULL, NULL),
(4, 27, 'Cocody', NULL, NULL),
(5, 27, 'Koumassi', NULL, NULL),
(6, 27, 'Marcory', NULL, NULL),
(7, 27, 'Plateau', NULL, NULL),
(8, 27, 'Port-Bouet', NULL, NULL),
(9, 27, 'Treichville', NULL, NULL),
(10, 27, 'Yopougon', NULL, NULL),
(11, 27, 'Anyama', NULL, NULL),
(12, 27, 'Brofodoume', NULL, NULL),
(13, 27, 'Bingerville', NULL, NULL),
(14, 27, 'Songon', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `typemat`
--

CREATE TABLE `typemat` (
  `idtype` int(11) NOT NULL,
  `libtype` varchar(255) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typemat`
--

INSERT INTO `typemat` (`idtype`, `libtype`, `dateajout`, `datemodif`) VALUES
(1, 'Materiel Permis A', '2017-06-23 15:49:30', '2017-06-23 15:49:30'),
(2, 'Materiel Permis B', '2017-06-23 15:49:44', '2017-06-23 15:49:44'),
(3, 'Materiel Permis C', '2017-06-23 15:49:55', '2017-06-23 15:49:55'),
(4, 'Materiel Permis D', '2017-06-23 15:50:11', '2017-06-23 15:50:11'),
(5, 'Materiel Permis E', '2017-06-23 15:50:22', '2017-06-23 15:50:22'),
(6, 'Materiel Permis F', '2017-06-23 15:50:33', '2017-06-23 15:50:33');

-- --------------------------------------------------------

--
-- Structure de la table `visitemedicale`
--

CREATE TABLE `visitemedicale` (
  `idVisit` int(11) NOT NULL,
  `grpsan` varchar(225) DEFAULT NULL,
  `vus` varchar(225) DEFAULT NULL,
  `datevisit` varchar(255) DEFAULT NULL,
  `dateajout` datetime DEFAULT NULL,
  `datemodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`idadmin`),
  ADD KEY `fkidprofil` (`idprofil`);

--
-- Index pour la table `autoecole`
--
ALTER TABLE `autoecole`
  ADD PRIMARY KEY (`idAuto`),
  ADD KEY `fksp` (`idSp`),
  ADD KEY `fkidadmin` (`idadmin`);

--
-- Index pour la table `centreexamen`
--
ALTER TABLE `centreexamen`
  ADD PRIMARY KEY (`idCent`),
  ADD KEY `fkidvis` (`idVisit`);

--
-- Index pour la table `demandeur`
--
ALTER TABLE `demandeur`
  ADD PRIMARY KEY (`idDe`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`idDepart`),
  ADD KEY `fkgr` (`idReg`);

--
-- Index pour la table `effectuer`
--
ALTER TABLE `effectuer`
  ADD PRIMARY KEY (`idEffect`),
  ADD KEY `fkdev` (`idEv`),
  ADD KEY `fkdde` (`idDe`);

--
-- Index pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`idEv`);

--
-- Index pour la table `faire`
--
ALTER TABLE `faire`
  ADD PRIMARY KEY (`idFai`),
  ADD KEY `fkfor` (`idFor`),
  ADD KEY `fkPers` (`idPers`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`idFor`);

--
-- Index pour la table `materielformation`
--
ALTER TABLE `materielformation`
  ADD PRIMARY KEY (`idMatfor`),
  ADD KEY `fkfr` (`idFor`);

--
-- Index pour la table `participe`
--
ALTER TABLE `participe`
  ADD PRIMARY KEY (`idParti`),
  ADD KEY `fkidd` (`idDe`),
  ADD KEY `fkidfo` (`idFor`);

--
-- Index pour la table `passer`
--
ALTER TABLE `passer`
  ADD PRIMARY KEY (`idPas`),
  ADD KEY `fkvi` (`idVisit`),
  ADD KEY `fkde` (`idDe`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`idPers`),
  ADD KEY `fkaut` (`idAuto`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idprofil`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`idReg`);

--
-- Index pour la table `sousprefecture`
--
ALTER TABLE `sousprefecture`
  ADD PRIMARY KEY (`idSp`),
  ADD KEY `fkpd` (`idDepart`);

--
-- Index pour la table `typemat`
--
ALTER TABLE `typemat`
  ADD PRIMARY KEY (`idtype`);

--
-- Index pour la table `visitemedicale`
--
ALTER TABLE `visitemedicale`
  ADD PRIMARY KEY (`idVisit`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `autoecole`
--
ALTER TABLE `autoecole`
  MODIFY `idAuto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `centreexamen`
--
ALTER TABLE `centreexamen`
  MODIFY `idCent` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `idDe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `idDepart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT pour la table `effectuer`
--
ALTER TABLE `effectuer`
  MODIFY `idEffect` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `idEv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `faire`
--
ALTER TABLE `faire`
  MODIFY `idFai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `idFor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `materielformation`
--
ALTER TABLE `materielformation`
  MODIFY `idMatfor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `participe`
--
ALTER TABLE `participe`
  MODIFY `idParti` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `passer`
--
ALTER TABLE `passer`
  MODIFY `idPas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `idPers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `idprofil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `idReg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `sousprefecture`
--
ALTER TABLE `sousprefecture`
  MODIFY `idSp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `typemat`
--
ALTER TABLE `typemat`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `visitemedicale`
--
ALTER TABLE `visitemedicale`
  MODIFY `idVisit` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `fkidprofil` FOREIGN KEY (`idprofil`) REFERENCES `profil` (`idprofil`);

--
-- Contraintes pour la table `autoecole`
--
ALTER TABLE `autoecole`
  ADD CONSTRAINT `fkidadmin` FOREIGN KEY (`idadmin`) REFERENCES `administrateur` (`idadmin`),
  ADD CONSTRAINT `fksp` FOREIGN KEY (`idSp`) REFERENCES `sousprefecture` (`idSp`);

--
-- Contraintes pour la table `centreexamen`
--
ALTER TABLE `centreexamen`
  ADD CONSTRAINT `fkidvis` FOREIGN KEY (`idVisit`) REFERENCES `visitemedicale` (`idVisit`);

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `fkgr` FOREIGN KEY (`idReg`) REFERENCES `region` (`idReg`);

--
-- Contraintes pour la table `effectuer`
--
ALTER TABLE `effectuer`
  ADD CONSTRAINT `fkdde` FOREIGN KEY (`idDe`) REFERENCES `demandeur` (`idDe`),
  ADD CONSTRAINT `fkdev` FOREIGN KEY (`idEv`) REFERENCES `evaluation` (`idEv`);

--
-- Contraintes pour la table `faire`
--
ALTER TABLE `faire`
  ADD CONSTRAINT `fkPers` FOREIGN KEY (`idPers`) REFERENCES `personnel` (`idPers`),
  ADD CONSTRAINT `fkfor` FOREIGN KEY (`idFor`) REFERENCES `formation` (`idFor`);

--
-- Contraintes pour la table `materielformation`
--
ALTER TABLE `materielformation`
  ADD CONSTRAINT `fkfr` FOREIGN KEY (`idFor`) REFERENCES `formation` (`idFor`);

--
-- Contraintes pour la table `participe`
--
ALTER TABLE `participe`
  ADD CONSTRAINT `fkidd` FOREIGN KEY (`idDe`) REFERENCES `demandeur` (`idDe`),
  ADD CONSTRAINT `fkidfo` FOREIGN KEY (`idFor`) REFERENCES `formation` (`idFor`);

--
-- Contraintes pour la table `passer`
--
ALTER TABLE `passer`
  ADD CONSTRAINT `fkde` FOREIGN KEY (`idDe`) REFERENCES `demandeur` (`idDe`),
  ADD CONSTRAINT `fkvi` FOREIGN KEY (`idVisit`) REFERENCES `visitemedicale` (`idVisit`);

--
-- Contraintes pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `fkaut` FOREIGN KEY (`idAuto`) REFERENCES `autoecole` (`idAuto`);

--
-- Contraintes pour la table `sousprefecture`
--
ALTER TABLE `sousprefecture`
  ADD CONSTRAINT `fkpd` FOREIGN KEY (`idDepart`) REFERENCES `departement` (`idDepart`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
