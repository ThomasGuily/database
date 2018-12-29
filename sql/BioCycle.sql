-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 13 Décembre 2018 à 16:47
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `BioCycle`
--

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `Id_Client` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Identifiant` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Commande`
--

CREATE TABLE `Commande` (
  `ID_commande` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `ID_client` int(11) NOT NULL,
  `commentaire` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Commentaire`
--

CREATE TABLE `Commentaire` (
  `ID_commentaire` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Id_Client` int(11) NOT NULL ,
  `Note` int(11) NOT NULL,
  `Texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Detail_Commande`
--

CREATE TABLE `Detail_Commande` (
  `ID_detail` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `ID_produit` int(11) NOT NULL,
  `ID_commande` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--


-- --------------------------------------------------------

--
-- Structure de la table `Marchand`
--

CREATE TABLE `Marchand` (
  `ID_marchand` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Specialite` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `gsm` varchar(255) NOT NULL,
  `Enseigne` varchar(255) NOT NULL,
  `Image_Marchand` int (11) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Produit`
--

CREATE TABLE `Produit` (
  `ID_produit` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `ID_marchand` int(11) NOT NULL,
  `ID_typeproduit` int(11) NOT NULL,
  `Prix` float(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Nom_produit` varchar(255) NOT NULL,
  `Image_Produit` int (11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Type_Produit`
--

CREATE TABLE `Type_Produit` (
  `ID_typeproduit` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Conseils` varchar(255) NOT NULL,
  `Peremption` varchar(255) NOT NULL,
  `Allergenes` varchar(255) NOT NULL,
  `Nom_typeproduit` varchar(255) NOT NULL,
  `Image_Type` int (11) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE Commande
ADD CONSTRAINT rela1 FOREIGN KEY  (ID_client)  REFERENCES Client  (ID_client);

ALTER TABLE Commentaire
ADD CONSTRAINT rela2 FOREIGN KEY  (ID_client)  REFERENCES Client  (ID_client);

ALTER TABLE Detail_Commande
ADD CONSTRAINT rela3 FOREIGN KEY  (ID_commande)  REFERENCES Commande  (ID_commande); 

ALTER TABLE Detail_Commande
ADD CONSTRAINT rela4 FOREIGN KEY  (ID_produit)  REFERENCES Produit  (ID_produit);

ALTER TABLE Produit
ADD CONSTRAINT rela5 FOREIGN KEY  (ID_marchand)  REFERENCES Marchand  (ID_marchand); 

ALTER TABLE Produit
ADD CONSTRAINT rela6 FOREIGN KEY  (ID_typeproduit)  REFERENCES Type_Produit  (ID_typeproduit);





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
