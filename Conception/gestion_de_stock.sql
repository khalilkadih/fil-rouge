-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 juin 2022 à 00:43
-- Version du serveur : 8.0.29
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_de_stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int NOT NULL,
  `name_categorie` varchar(250) NOT NULL,
  `description_categorie` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `name_categorie`, `description_categorie`) VALUES
(1, 'Accessoire', 'everything about Pc accessoires'),
(2, 'Laptop', 'everything about Laptop'),
(5, 'telephone', 'everything  about telephone portable'),
(6, 'apple', 'everything  about Apple');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int NOT NULL,
  `name_client` varchar(250) NOT NULL,
  `telephone_client` varchar(250) NOT NULL,
  `adress_client` varchar(250) NOT NULL,
  `observation_client` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `name_client`, `telephone_client`, `adress_client`, `observation_client`) VALUES
(1, 'khalil', '0666666333', 'taroudant', 'good client'),
(2, 'omar', '0666666333', 'taroudant', 'good client'),
(3, 'agra', '0666666333', 'taroudant', 'good client');

-- --------------------------------------------------------

--
-- Structure de la table `commande_client`
--

CREATE TABLE `commande_client` (
  `id_commande_client` int NOT NULL,
  `id_client` int NOT NULL,
  `id_product` int NOT NULL,
  `quantite_commande_client` float NOT NULL,
  `prix_total_commande_client` float NOT NULL,
  `date_commande_client` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commande_client`
--

INSERT INTO `commande_client` (`id_commande_client`, `id_client`, `id_product`, `quantite_commande_client`, `prix_total_commande_client`, `date_commande_client`) VALUES
(1, 1, 45, 11, 12, '2022-06-17'),
(2, 1, 47, 12, 122, '2022-06-17'),
(3, 2, 48, 12, 122, '2022-06-25'),
(4, 2, 46, 12, 12, '2022-06-17'),
(5, 3, 47, 11, 12, '2022-06-11');

-- --------------------------------------------------------

--
-- Structure de la table `commande_fournisseur`
--

CREATE TABLE `commande_fournisseur` (
  `id_commande_fournisseur` int NOT NULL,
  `id_fournisseur` int NOT NULL,
  `date_commande_fournissuer` varchar(250) NOT NULL,
  `quantite_commande_fournisseur` float NOT NULL,
  `prix_total_commande_fournisseur` float NOT NULL,
  `id_product` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commande_fournisseur`
--

INSERT INTO `commande_fournisseur` (`id_commande_fournisseur`, `id_fournisseur`, `date_commande_fournissuer`, `quantite_commande_fournisseur`, `prix_total_commande_fournisseur`, `id_product`) VALUES
(2, 2, '2022-06-11', 100, 220, 47),
(111, 1, '2022-06-18', 100, 220, 48),
(98901112, 1, '2022-06-24', 100, 220, 46);

-- --------------------------------------------------------

--
-- Structure de la table `configuration`
--

CREATE TABLE `configuration` (
  `nom_etreprise` varchar(250) NOT NULL,
  `logo_entreprise` int NOT NULL,
  `configuration_tva` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id_fournisseur` int NOT NULL,
  `name_fournisseur` varchar(250) NOT NULL,
  `telephone_fournisseur` varchar(250) NOT NULL,
  `adress_fournisseur` varchar(250) NOT NULL,
  `observation_fournisseur` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id_fournisseur`, `name_fournisseur`, `telephone_fournisseur`, `adress_fournisseur`, `observation_fournisseur`) VALUES
(1, 'khalil', '§0666666664', 'agadir', 'good supplier'),
(2, 'abderrahim', '§0666666664', 'Aourir', 'good supplier'),
(3, 'Omar', '0666666664', 'taroudant', 'good supplier');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id_product` int NOT NULL,
  `name_product` varchar(250) NOT NULL,
  `qte_aviable` varchar(250) NOT NULL,
  `prix_achat` varchar(250) NOT NULL,
  `prix_vente` varchar(250) NOT NULL,
  `id_categorie` int DEFAULT NULL,
  `id_unite` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `qte_aviable`, `prix_achat`, `prix_vente`, `id_categorie`, `id_unite`) VALUES
(45, 'LENOVO I7', '200', '220', '300', 2, NULL),
(46, 'MAC PRO', '200', '220', '300', 6, NULL),
(47, 'LENOVO I7 2022', '200', '220', '300', 2, NULL),
(48, 'Samsung', '1000', '2000', '2200', 5, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id_stock` int NOT NULL,
  `nom_stock` varchar(250) NOT NULL,
  `id_categorie` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`id_stock`, `nom_stock`, `id_categorie`) VALUES
(1, 'place of accesoire telephone', 1),
(2, 'place of laptop', 2);

-- --------------------------------------------------------

--
-- Structure de la table `unite`
--

CREATE TABLE `unite` (
  `id_unite` int NOT NULL,
  `type_unite` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `unite`
--

INSERT INTO `unite` (`id_unite`, `type_unite`) VALUES
(1, 'L'),
(2, 'kg'),
(3, 'Piece');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `name_user` varchar(250) NOT NULL,
  `role_user` varchar(250) NOT NULL,
  `password_user` varchar(250) NOT NULL,
  `email_user` varchar(250) DEFAULT NULL,
  `poste` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `role_user`, `password_user`, `email_user`, `poste`) VALUES
(11, 'omar kazoum', 'admin', 'omar', 'omarKazoum@gmail.com', 'Directeur des Ressource Humaine'),
(13, 'Abdelhamid ait ayoub ', 'admin', 'abdelhamid', 'abdelhamid@gmail.com', 'technicien informatique'),
(16, 'El kadih khalil', 'admin', 'Pa$$w0rd!', 'khalil94elkadih@gmail.com', 'directeur generale'),
(17, 'Agra Abderrahim', 'admin', 'agra', 'agra@gmail.Com', 'directeur departement publicite'),
(20, 'saad', 'admin', 'saad', 'saad@gmail.com', 'technicien informatique'),
(111, 'khalil', 'admin', 'khalil', 'khalil@gmail.com', 'develper'),
(113, 'omar', 'admin', 'omar', 'omar@gmail.com', 'developer');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande_client`
--
ALTER TABLE `commande_client`
  ADD PRIMARY KEY (`id_commande_client`),
  ADD KEY `fk_commande_client` (`id_client`),
  ADD KEY `fk_commande_product_client` (`id_product`);

--
-- Index pour la table `commande_fournisseur`
--
ALTER TABLE `commande_fournisseur`
  ADD PRIMARY KEY (`id_commande_fournisseur`),
  ADD KEY `fk_commande_product` (`id_product`),
  ADD KEY `fk_commande_fournisseur` (`id_fournisseur`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id_fournisseur`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_product_categorie` (`id_categorie`),
  ADD KEY `FK_product_uniteFOREIGN` (`id_unite`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `fk_stock_categorie` (`id_categorie`);

--
-- Index pour la table `unite`
--
ALTER TABLE `unite`
  ADD PRIMARY KEY (`id_unite`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `commande_client`
--
ALTER TABLE `commande_client`
  MODIFY `id_commande_client` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222222230;

--
-- AUTO_INCREMENT pour la table `commande_fournisseur`
--
ALTER TABLE `commande_fournisseur`
  MODIFY `id_commande_fournisseur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98901113;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id_fournisseur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `unite`
--
ALTER TABLE `unite`
  MODIFY `id_unite` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande_client`
--
ALTER TABLE `commande_client`
  ADD CONSTRAINT `fk_commande_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_commande_product_client` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande_fournisseur`
--
ALTER TABLE `commande_fournisseur`
  ADD CONSTRAINT `fk_commande_fournisseur` FOREIGN KEY (`id_fournisseur`) REFERENCES `fournisseur` (`id_fournisseur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_commande_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_product_uniteFOREIGN` FOREIGN KEY (`id_unite`) REFERENCES `unite` (`id_unite`);

--
-- Contraintes pour la table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `fk_stock_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
