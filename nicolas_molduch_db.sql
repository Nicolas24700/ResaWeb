-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 30 nov. 2024 à 13:53
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nicolas.molduch_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `sae_avis`
--

DROP TABLE IF EXISTS `sae_avis`;
CREATE TABLE IF NOT EXISTS `sae_avis` (
  `ID_Avis` int NOT NULL AUTO_INCREMENT,
  `ID_Utilisateur` int DEFAULT NULL,
  `ID_Chambre` int DEFAULT NULL,
  `Commentaire` text NOT NULL,
  `Etoile` int NOT NULL,
  `Nom_Avis` varchar(15) NOT NULL,
  `prenom_Avis` varchar(15) NOT NULL,
  PRIMARY KEY (`ID_Avis`),
  KEY `SAE_fk_UU` (`ID_Utilisateur`),
  KEY `SAE_FK_CC` (`ID_Chambre`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `sae_avis`
--

INSERT INTO `sae_avis` (`ID_Avis`, `ID_Utilisateur`, `ID_Chambre`, `Commentaire`, `Etoile`, `Nom_Avis`, `prenom_Avis`) VALUES
(8, NULL, NULL, 'Week-end parfait ! Chambre propre, personnel sympa, petit déj top ! Recommandé !', 5, 'Dupont', 'Marie'),
(10, NULL, NULL, 'Séjour parfait ! Chambre impeccable, vue géniale, service au top.', 5, 'Leblanc', 'Pierre'),
(18, NULL, NULL, 'Parfait pour voyage pro ! Chambre nickel, wifi rapide, service impeccable. Recommandé !', 4, 'Martin', 'Sophie'),
(19, NULL, NULL, 'Mon séjour à l\'hôtel a été absolument incroyable ! Le service était impeccable', 5, 'Dubois', 'Sophie'),
(20, NULL, NULL, 'Mon expérience dans cet hôtel étoilé était mitigée. Bien que la chambre était confortable .', 3, 'Lefèvre', 'Thomas'),
(21, NULL, NULL, 'Mon séjour à l\'hôtel a dépassé toutes mes attentes.', 5, 'Lambert', 'Maxime');

-- --------------------------------------------------------

--
-- Structure de la table `sae_chambres`
--

DROP TABLE IF EXISTS `sae_chambres`;
CREATE TABLE IF NOT EXISTS `sae_chambres` (
  `ID_Chambres` int NOT NULL AUTO_INCREMENT,
  `Type_Chambres` varchar(50) NOT NULL,
  `Disponibilite` tinyint(1) NOT NULL,
  `PrixParNuit` decimal(10,2) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `path_img` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`ID_Chambres`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `sae_chambres`
--

INSERT INTO `sae_chambres` (`ID_Chambres`, `Type_Chambres`, `Disponibilite`, `PrixParNuit`, `Description`, `path_img`) VALUES
(1, 'Chambre de luxe', 1, 189.00, '2 adultes | 1 enfant de moins de 7 ans', 'Img/chambre-luxe.webp'),
(2, 'Chambre de luxe', 1, 189.00, '2 adultes | 1 enfant de moins de 7 ans', 'Img/chambre-luxe.webp'),
(3, 'Chambre de luxe', 1, 189.00, '2 adultes | 1 enfant de moins de 7 ans', 'Img/chambre-luxe.webp'),
(4, 'Chambre de luxe', 1, 189.00, '2 adultes | 1 enfant de moins de 7 ans', 'Img/chambre-luxe.webp'),
(5, 'Chambre de Luxe Vue sur la Mer', 1, 209.00, '2 adultes | 1 enfant de moins de 7 ans', 'Img/chambre-vue-mer.webp'),
(6, 'Chambre de Luxe Vue sur la Mer', 1, 209.00, '2 adultes | 1 enfant de moins de 7 ans', 'Img/chambre-vue-mer.webp'),
(7, 'Chambre de Luxe Vue sur la Mer', 1, 209.00, '2 adultes | 1 enfant de moins de 7 ans', 'Img/chambre-vue-mer.webp'),
(8, 'Chambre de Luxe Vue sur la Mer', 1, 209.00, '2 adultes | 1 enfant de moins de 7 ans', 'Img/chambre-vue-mer.webp'),
(9, 'La suite familiale GOLDEN RESORT', 1, 399.00, '4 adultes | 2 enfants de moins de 7 ans', 'Img/Suite-Golden-Resort.webp'),
(10, 'La suite familiale GOLDEN RESORT', 1, 399.00, '4 adultes | 2 enfants de moins de 7 ans', 'Img/Suite-Golden-Resort.webp');

-- --------------------------------------------------------

--
-- Structure de la table `sae_planning`
--

DROP TABLE IF EXISTS `sae_planning`;
CREATE TABLE IF NOT EXISTS `sae_planning` (
  `ID_PlanningChambre` int NOT NULL AUTO_INCREMENT,
  `ID_Chambre` int NOT NULL,
  `DateDebutDisponibilite` date NOT NULL,
  `DateFinDisponibilite` date NOT NULL,
  PRIMARY KEY (`ID_PlanningChambre`),
  KEY `SAE_fk_CCP` (`ID_Chambre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `sae_reservation`
--

DROP TABLE IF EXISTS `sae_reservation`;
CREATE TABLE IF NOT EXISTS `sae_reservation` (
  `ID_Reservation` int NOT NULL AUTO_INCREMENT,
  `ID_Utilisateur` int DEFAULT NULL,
  `ID_Chambre` varchar(255) NOT NULL,
  `Date_Debut` date NOT NULL,
  `Date_Fin` date NOT NULL,
  `Prix_Total` decimal(10,2) NOT NULL,
  `Prenom_Invite` varchar(50) NOT NULL,
  `Nom_Invite` varchar(50) NOT NULL,
  `DateNaissance_Invite` date NOT NULL,
  `Email_Invite` varchar(255) NOT NULL,
  `NumeroTel_Invite` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_Reservation`),
  KEY `SAE_fk_UUR` (`ID_Utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `sae_reservation`
--

INSERT INTO `sae_reservation` (`ID_Reservation`, `ID_Utilisateur`, `ID_Chambre`, `Date_Debut`, `Date_Fin`, `Prix_Total`, `Prenom_Invite`, `Nom_Invite`, `DateNaissance_Invite`, `Email_Invite`, `NumeroTel_Invite`) VALUES
(47, NULL, 'LasuiteGOLDENRESORT', '2024-12-02', '2024-12-07', 1995.00, 'Jean', 'Test', '2003-02-20', 'veritableadresseemail@gmail.com', '0612345678');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `sae_avis`
--
ALTER TABLE `sae_avis`
  ADD CONSTRAINT `SAE_FK_CC` FOREIGN KEY (`ID_Chambre`) REFERENCES `sae_chambres` (`ID_Chambres`);

--
-- Contraintes pour la table `sae_planning`
--
ALTER TABLE `sae_planning`
  ADD CONSTRAINT `SAE_fk_CCP` FOREIGN KEY (`ID_Chambre`) REFERENCES `sae_chambres` (`ID_Chambres`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
