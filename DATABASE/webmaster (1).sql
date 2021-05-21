-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 mai 2021 à 15:20
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webmaster`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessoires`
--

CREATE TABLE `accessoires` (
  `id` int(20) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `matiere` varchar(20) NOT NULL,
  `prix` int(20) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `accessoires`
--

INSERT INTO `accessoires` (`id`, `categories`, `matiere`, `prix`, `image`) VALUES
(17, 'Animaux', 'harnais chien', 100, '17.jpg'),
(18, 'Plantes', 'greffage plante', 200, '2.jpg'),
(19, 'select', 'panier chat', 200, '13.PNG'),
(20, 'Plantes', 'Boll', 25, 'bol bacca.jpg'),
(21, 'Plantes', 'Boll', 8, 'bol normal.jpg'),
(22, 'Animaux', 'panier Chat', 450, 'acc3.jpg'),
(23, 'Animaux', 'collier chien', 10, 'collier chien.jpg'),
(24, 'Animaux', 'panier chien', 80, 'harnais chien.jpg'),
(25, 'select', 'harnais chat', 10, 'pngegg (1).png');

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `id_animaux` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `typee` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id_animaux`, `sex`, `typee`, `age`, `prix`, `categorie`, `couleur`, `image`) VALUES
(15, 'Male', 'berger allmend', 2, 400, 'chien', 'noir', '5a3af9016c4440.53127872151381427344354582.png'),
(16, 'Male', 'labrador', 2, 500, 'chien', 'noir', 'Daco_2334678.png'),
(17, 'Male', 'Accenteur mouchet', 1, 230, 'oiseau', 'rouge', 'kisspng-parrots-of-new-guinea-bird-budgerigar-5b58a38ebbf626.9261868615325356947699.png'),
(18, 'female', 'Accenteur mouchet', 1, 250, 'oiseau', 'chien', 'kisspng-bird-domestic-canary-passerine-finches-portable-ne-oiseaux-page-125-5bfef7cc784582.8607497715434362364926.png'),
(19, 'female', 'siamois', 2, 150, 'chat', 'noir', 'kisspng-siamese-cat-thai-cat-balinese-cat-oriental-shortha-siamese-5b205374776904.4996787115288451724891.png'),
(20, 'Male', 'huskey', 2, 950, 'chien', 'noir', 'Daco_4320244.png'),
(21, 'Male', 'chiwawa', 1, 600, 'chien', 'chien', 'Daco_5087508.png'),
(22, 'female', 'labrador', 3, 400, 'chien', 'noir', 'kisspng-labrador-retriever-weimaraner-puppy-black-labrador-dog-transparent-5a751cd4b9b0f5.2280314815176245327606.png'),
(23, 'Male', 'goldenretriever', 2, 2000, 'chien', 'marron', 'an1.jpg'),
(24, 'Male', 'Humster', 1, 30, 'Sourie', 'blanc', 'an3.jpg'),
(25, 'female', 'lapin', 1, 35, 'lapin', 'marron', 'Daco_124483.png'),
(26, 'Male', 'pit', 2, 180, 'chien', 'marron', 'pit.png');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `idCommande` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `paiment` varchar(30) NOT NULL,
  `montant` int(11) NOT NULL,
  `DemAnnulation` varchar(10) NOT NULL DEFAULT 'NON'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`idCommande`, `idClient`, `paiment`, `montant`, `DemAnnulation`) VALUES
(169, 33, 'Cash', 1210, 'NON'),
(173, 33, 'Carte Bancaire', 1717, 'NON');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `datef` date NOT NULL,
  `categorie` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `type`, `description`, `lieu`, `date`, `datef`, `categorie`, `image`) VALUES
(108, 'Grand Espaces', 'la fete de l\'arbre', 'bizerte rue de sante', '2021-05-14', '2021-05-29', 'lies aux plantes', 'ben-rosett-nYugmV-SY6s-unsplash-scaled-2560x1280.png'),
(110, 'Salon professionnel', 'Saint Valentin Des animaux', 'bizerte rue de sante', '2021-05-21', '2021-05-29', 'lies aux animaux', 'veepee-fb-6017da9d94470.png'),
(111, 'Salon professionnel', 'celebration intra ', 'bizerte resort', '2021-05-14', '2021-05-14', 'administrative   ', 'evenement.png'),
(119, 'Grand Espaces', 'lute contre rage', 'Ghazela , Cité wafa', '2021-05-20', '2021-05-30', 'lies aux animaux', 'France_300x300soc-01.png');

-- --------------------------------------------------------

--
-- Structure de la table `lignecommandes`
--

CREATE TABLE `lignecommandes` (
  `idLigne` int(11) NOT NULL,
  `Produit` varchar(100) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `idCommande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lignecommandes`
--

INSERT INTO `lignecommandes` (`idLigne`, `Produit`, `idProduit`, `idCommande`) VALUES
(393, 'Harnais Chien * 2 ', 6, 169),
(394, 'Croquette * 4 ', 2, 169),
(395, 'Chien Labrador * 2 ', 3, 169),
(405, 'Chat * 4 ', 1, 173),
(406, 'Niche Chat * 2 ', 4, 173),
(407, 'Croquette * 10 ', 2, 173),
(408, 'Bol en bois * 3 ', 5, 173);

-- --------------------------------------------------------

--
-- Structure de la table `livraisons`
--

CREATE TABLE `livraisons` (
  `id_livraison` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `idCommande` int(11) NOT NULL,
  `DemAnnulation` varchar(20) NOT NULL DEFAULT 'NON'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livraisons`
--

INSERT INTO `livraisons` (`id_livraison`, `nom`, `tel`, `adresse`, `email`, `idCommande`, `DemAnnulation`) VALUES
(17, 'Skander', 55203244, 'Bizerte', 'mohamedskander.zouao', 169, 'NON'),
(18, 'Skander', 55203244, 'Bizerte', 'mohamedskander.zouao', 169, 'NON');

-- --------------------------------------------------------

--
-- Structure de la table `nourriture`
--

CREATE TABLE `nourriture` (
  `id` int(11) NOT NULL,
  `nom` varchar(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `quantity` int(150) NOT NULL,
  `categorie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `nourriture`
--

INSERT INTO `nourriture` (`id`, `nom`, `prix`, `image`, `quantity`, `categorie`) VALUES
(30, 'Chat', 25, 'n8.png', 50, 'chat'),
(31, 'Oiseau', 15, 'n10.png', 50, 'oiseau'),
(32, 'Chien', 50, 'n5.png', 40, 'chien'),
(33, 'Chien', 30, 'n4.png', 40, 'chien'),
(34, 'Croquette', 39, 'n2.jpg', 100, 'chien'),
(35, 'Chien', 10, 'n3.jpg', 3, 'chien');

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

CREATE TABLE `participe` (
  `id_participe` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `participe`
--

INSERT INTO `participe` (`id_participe`, `id`, `id_client`) VALUES
(74, 119, 32);

-- --------------------------------------------------------

--
-- Structure de la table `plante`
--

CREATE TABLE `plante` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `longeur` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plante`
--

INSERT INTO `plante` (`id`, `nom`, `longeur`, `prix`, `type`, `image`) VALUES
(6, 'plante paquerette', 1, 50, 'graminés', 'plante paquerette.jpg'),
(7, 'plante ail des ours', 2, 60, 'Forgéres', 'plante ail-des-ours.jpg'),
(8, 'plante verte', 1, 100, 'Herbes', '00.PNG'),
(9, 'plante verte', 1, 80, 'garras', '22.PNG'),
(10, 'plante verte', 5, 500, 'Coreopsis', 'yucca.jpg'),
(11, 'plante viollettes', 1, 40, 'graminés', 'plante violettes.jpg'),
(12, 'plante vivace fleur', 1, 20, 'Herbes', 'plante vivace a fleur.jpg'),
(13, 'plante vivace fleur', 1, 10, 'garras', 'rose.jpg'),
(14, 'plante paquerette', 2, 400, 'Coreopsis', '33.PNG'),
(15, 'plante verte', 1, 300, 'Herbes', '2.PNG'),
(16, 'plante verte', 3, 499, 'garras', '66.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `promoanimaux`
--

CREATE TABLE `promoanimaux` (
  `id_promoanimaux` int(11) NOT NULL,
  `id_animaux` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `typee` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `image` varchar(150) NOT NULL,
  `dated` date NOT NULL,
  `datef` date NOT NULL,
  `prix_promotions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promoanimaux`
--

INSERT INTO `promoanimaux` (`id_promoanimaux`, `id_animaux`, `sex`, `typee`, `age`, `prix`, `categorie`, `couleur`, `image`, `dated`, `datef`, `prix_promotions`) VALUES
(49, 22, 'female', 'labrador', 3, 400, 'chien', 'noir', 'kisspng-labrador-retriever-weimaraner-puppy-black-labrador-dog-transparent-5a751cd4b9b0f5.2280314815176245327606.png', '2021-05-20', '2021-05-30', 40),
(50, 20, 'Male', 'huskey', 2, 950, 'chien', 'noir', 'Daco_4320244.png', '2021-05-20', '2021-05-31', 20),
(51, 15, 'Male', 'berger allmend', 2, 400, 'chien', 'noir', '5a3af9016c4440.53127872151381427344354582.png', '2021-05-21', '2021-05-30', 15),
(52, 21, 'Male', 'chiwawa', 1, 600, 'chien', 'chien', 'Daco_5087508.png', '2021-05-19', '2021-07-11', 30),
(53, 26, 'Male', 'pit', 2, 180, 'chien', 'marron', 'pit.png', '2021-05-22', '2021-06-06', 70),
(54, 24, 'Male', 'Humster', 1, 30, 'Sourie', 'blanc', 'an3.jpg', '2021-05-21', '2021-06-06', 50);

-- --------------------------------------------------------

--
-- Structure de la table `promoplante`
--

CREATE TABLE `promoplante` (
  `id_promo` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `longeur` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `dated` date NOT NULL,
  `datef` date NOT NULL,
  `prix_promoplante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promoplante`
--

INSERT INTO `promoplante` (`id_promo`, `id`, `nom`, `longeur`, `prix`, `type`, `image`, `dated`, `datef`, `prix_promoplante`) VALUES
(24, 16, 'plante verte', 3, 499, 'garras', '66.PNG', '2021-05-21', '2021-06-06', 45),
(25, 6, 'plante paquerette', 1, 50, 'graminés', 'plante paquerette.jpg', '2021-05-14', '2021-06-06', 8),
(26, 10, 'plante verte', 5, 500, 'Coreopsis', 'yucca.jpg', '2021-05-14', '2021-06-06', 20),
(28, 13, 'plante vivace fleur', 1, 10, 'garras', 'rose.jpg', '2021-05-21', '2021-06-06', 10),
(29, 12, 'plante vivace fleur', 1, 20, 'Herbes', 'plante vivace a fleur.jpg', '2021-05-20', '2021-06-06', 10),
(30, 11, 'plante viollettes', 1, 40, 'graminés', 'plante violettes.jpg', '2021-05-20', '2021-06-06', 15);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id_reclamation` int(11) NOT NULL,
  `date_reclamation` date NOT NULL,
  `objet_reclamation` text CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id_reclamation`, `date_reclamation`, `objet_reclamation`, `description`, `id_client`) VALUES
(33, '2021-05-22', 'reclamation liéé au animaux', 'reclamation chien huskey ', 32);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `Nom` text CHARACTER SET latin1 NOT NULL,
  `Prenom` text CHARACTER SET latin1 NOT NULL,
  `Date_de_naissance` date NOT NULL,
  `Email` text CHARACTER SET latin1 NOT NULL,
  `Adresse` text CHARACTER SET latin1 NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Login` text CHARACTER SET latin1 NOT NULL,
  `Password` text CHARACTER SET latin1 NOT NULL,
  `Role` text CHARACTER SET latin1 NOT NULL,
  `Active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `Nom`, `Prenom`, `Date_de_naissance`, `Email`, `Adresse`, `Telephone`, `Login`, `Password`, `Role`, `Active`) VALUES
(6, 'KARMAN', 'KARMAN', '2022-12-12', 'mbarhoumi1920@gmail.commm', '', 92065042, 'admin', 'admin', 'Admin', 1),
(32, 'Doghman', 'Moetaz', '2000-09-24', 'moetaz.doghman@esprit.tn', 'rue de sante bizerte', 52464649, 'moetaz', 'moetaz', 'Client', 1),
(33, 'Skander', 'Zoauaoui', '2001-02-19', 'mohamedskander.zouaoui@esprit.tn', 'Bizerte', 55203244, 'skander', 'skander', 'Client', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accessoires`
--
ALTER TABLE `accessoires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id_animaux`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `fk_idClient` (`idClient`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lignecommandes`
--
ALTER TABLE `lignecommandes`
  ADD PRIMARY KEY (`idLigne`);

--
-- Index pour la table `livraisons`
--
ALTER TABLE `livraisons`
  ADD PRIMARY KEY (`id_livraison`);

--
-- Index pour la table `nourriture`
--
ALTER TABLE `nourriture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `participe`
--
ALTER TABLE `participe`
  ADD PRIMARY KEY (`id_participe`),
  ADD KEY `id` (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `plante`
--
ALTER TABLE `plante`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `promoanimaux`
--
ALTER TABLE `promoanimaux`
  ADD PRIMARY KEY (`id_promoanimaux`);

--
-- Index pour la table `promoplante`
--
ALTER TABLE `promoplante`
  ADD PRIMARY KEY (`id_promo`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_reclamation`),
  ADD KEY `ID` (`id_client`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accessoires`
--
ALTER TABLE `accessoires`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id_animaux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT pour la table `lignecommandes`
--
ALTER TABLE `lignecommandes`
  MODIFY `idLigne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

--
-- AUTO_INCREMENT pour la table `livraisons`
--
ALTER TABLE `livraisons`
  MODIFY `id_livraison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `nourriture`
--
ALTER TABLE `nourriture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `participe`
--
ALTER TABLE `participe`
  MODIFY `id_participe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `plante`
--
ALTER TABLE `plante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `promoanimaux`
--
ALTER TABLE `promoanimaux`
  MODIFY `id_promoanimaux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `promoplante`
--
ALTER TABLE `promoplante`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id_reclamation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `participe`
--
ALTER TABLE `participe`
  ADD CONSTRAINT `participe_ibfk_1` FOREIGN KEY (`id`) REFERENCES `evenement` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
