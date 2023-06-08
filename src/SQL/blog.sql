-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 juin 2023 à 13:39
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `id_utilisateur` int NOT NULL,
  `id_categorie` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `article`, `id_utilisateur`, `id_categorie`, `date`, `image`, `prix`) VALUES
(1, 'Iphone14', 'Écran Super Retina XDR 6,1 pouces\r\nAutonomie d’une journée entière et jusqu’à 20 heures de lecture vidéo\r\nDesign conçu pour durer avec Ceramic Shield et résistance à l’eau\r\nPuce A15 Bionic avec GPU 5 cœurs, pour des performances fulgurantes. Connectivité 5G ultra-rapide\r\nSystème photo avancé pour des photos brillantes, quel que soit l’éclairage\r\nMode Action, pour des vidéos stables et fluides lorsque vous êtes en mouvement\r\nMode Cinématique désormais en 4K Dolby Vision jusqu’à 30 i/s\r\nSOS d’urgence par satellite et Détection des accidents, des fonctionnalités de sécurité essentielles\r\niOS 16, qui offre encore plus d’options de personnalisation et multiplie les moyens de communiquer et de partager', 8, 1, '2023-05-23 09:52:22', 'iphone14.jpeg', '919'),
(2, 'Iphone11', 'Dans le cadre de nos efforts pour atteindre nos objectifs environnementaux, iPhone 11 n\'inclut plus d\'EarPods. Veuillez utiliser vos EarPods existants ou acheter cet accessoire séparément.\r\nContenu du coffret: iPhone, Câble Lightning vers USB\r\nÉcran LCD Liquid Retina HD 6,1 pouces\r\nRésistant à la poussière et à l’eau (jusqu’à 2 mètres pendant 30 minutes maximum, IP68)\r\nDouble appareil photo avec ultra grand-angle et grand-angle 12 Mpx ; mode Nuit, mode Portrait et vidéo 4K jusqu’à 60 i/s\r\nCaméra avant TrueDepth 12 Mpx avec mode Portrait, vidéo 4K et ralenti\r\nFace ID pour l’authentification sécurisée et Apple Pay\r\nPuce A13 Bionic avec Neural Engine de troisième génération\r\nRecharge sans fil et capacité de recharge rapide\r\niOS et son lot de nouveautés, telles que les widgets repensés sur l’écran d’accueil, la toute nouvelle Bibliothèque d’apps et les extraits d’app', 8, 1, '2023-05-23 09:52:22', 'Iphone-11.jpeg', '518'),
(3, 'Samsung Galaxy S21 FE', 'Le Galaxy S21 FE 5G est le dernier membre de la série Galaxy S21. Cette Fan Edition bénéficie d’un puissant processeur et d’un appareil photo d’exception, pour des photos aussi lumineuses de jour comme de nuit.\r\nLes bords du Galaxy S21 FE 5G sont si fins que vous allez totalement oublier leur existence. Mais une fois allumé le spectacle est encore plus beau : avec son immense écran Dynamic AMOLED 2X, les couleurs et la luminosité sont éclatantes, même en plein soleil.\r\nBesoin d\'isoler un sujet qui se trouve loin ? Vous pouvez zoomer jusqu\'à x30 grâce au Space Zoom. La fonction Zoom Lock vous permet d\'éviter les tremblements.\r\nUtilisez votre smartphone en multitâche ou pour défier vos adversaires sur votre jeu favori grâce au processeur super-puissant et sa puce rapide et intelligente.\r\nSa batterie de 4500 mAh permet de durer toute la journée pour vous suivre partout et votre téléphone peut être rechargé sans fil.', 8, 1, '2023-05-23 09:52:23', 'samsung-galaxy.jpeg', '600'),
(4, 'Samsung Galaxy S10', 'Ce produit d\'occasion a été inspecté, testé et nettoyé de manière professionnelle par des fournisseurs qualifiés par Amazon. - Ce produit est en \"Excellent état\". Il ne présente aucun signe de dommage cosmétique visible à 30 centimètres de distance. - La batterie de ce produit a une capacité supérieure à 80 % de celle d\'un produit neuf. - Les accessoires peuvent ne pas être d\'origine, mais seront compatibles et entièrement fonctionnels. Le produit peut être livré dans une boîte générique. - Le produit est livré avec un outil de retrait de la carte SIM, un chargeur et un câble de chargement. Les écouteurs et la carte SIM ne sont pas inclus. - Ce produit peut être remplacé ou remboursé dans un délai d\'un an après réception s\'il ne fonctionne pas comme prévu. - L’étanchéité des téléphones reconditionnés n’est pas garantie', 8, 1, '2023-05-23 09:52:22', 'sansung-s10.jpg', '309'),
(5, 'Jumper Ordinateur Portable 14’’ (RAM 12Go, 256Go SSD, Intel UHD Graphics, Windows 11 Home, USB 3.0) PC Portable avec Membrane Clavier AZERTY (français)', '12Go DDR4 256Go SSD Beaucoup de RAM à large bande passante pour exécuter en douceur vos jeux ainsi que plusieurs programmes. Mémoire flash SSD de 256 Go offre des capacités de stockage améliorées, une gestion des données rationalisée, des temps de démarrage rapides et une prise en charge de la lecture vidéo haute définition.\r\nWindows 11 Home Obtenez une nouvelle perspective avec Windows 11 : d\'un menu Démarrer rajeuni à de nouvelles façons de vous connecter à vos personnes, actualités, jeux et contenus préférés, Windows 11 est l\'endroit idéal pour penser, exprimer et créer de manière naturelle chemin\r\nHaute performance Fréquence de rafale 2,40 GHz ; Fréquence de base du processeur 1,10 GHz. Profitez d\'un ordinateur avec un processeur Intel Celeron. Découvrez les performances d\'Intel avec des fonctionnalités de divertissement et une connectivité rapide. Le processeur Intel Celeron offre des performances dans un nouvel ordinateur adapté à votre style de vie et à votre budget.\r\nUltra fin et portable - Cet ordinateur portable mesure seulement 7cm d\'épaisseur et ne pèse que 1,25 KG, il est facile d\'emporter cet ordinateur portable n\'importe où, il dispose également d\'une batterie haute capacité de 35,52 Wh pouvant durer jusqu\'à 8 heures d\'autonomie .\r\nÉcran FHD 14 La résolution 1920 x 1080 offre une couleur et une clarté impressionnantes. La résolution offre une couleur et une clarté impressionnantes.', 8, 2, '2023-05-23 09:52:22', 'jumper-pc.jpg', '700'),
(6, 'Lenovo IdeaPad 1 15IGL7 - Ordinateur Portable 15.6’’ FHD (Intel Pentium Silver N5030, RAM 8Go, 256Go SSD, Intel UHD Graphics 605, Windows 11 Home en Mode S)', 'Obtenez davantage de votre écran: Léger et facile à transporter, le portable IdeaPad 3 Gen 7 dispose d’un large rapport de visualisation pour que vous puissiez montrer l\'exceptionnel écran Full HD de 39,62 cm 15,6 à plusieurs personnes sous presque tous les angles.\r\nCœurs performants: L’IdeaPad 3i Gen 7 peut gérer plusieurs programmes exigeants grâce aux processeurs Intel Pentium Silver N5030. Avec la vitesse et l’intelligence inégalées du circuit graphique Intel, profitez d’une expérience rapide, simple et fluide.\r\nConfidentialité renforcée: Pour préserver votre vie privée, un cache de confidentialité est intégré à la webcam de l’ordinateur portable IdeaPad 3i Gen 7 15 Intel.\r\nFonctionnalités intelligentes: Le filtrage du bruit ambiant réduit les distractions associées à votre environnement, et le port USB-C multifonction pour une intégration à d’autres appareils.\r\nParfait pour le streaming vidéo: L’IdeaPad 3 Gen 7 est parfait pour le streaming vidéo grâce à son large rapport de visualisation, offrant des écrans Full HD d\'une qualité optimale même si vous le regardez sur le côté. Les cadres ultrafins offrent le confort d\'un écran beaucoup plus grand, comme si vous aviez acheté un portable plus grand.', 8, 2, '2023-05-23 09:52:22', 'Lenovo-IdeaPad.jpg', '400'),
(7, 'TV Sony Bravia', 'Une image riche en couleurs et contrastesLe processeur X1donne toute sa puissance à ce TV avec ses algorithmes de réduction du bruit et d\'amélioration des détails.Les couleurs affichées sont naturelles et très détaillées avec le TRILUMINOS PRO.\r\nUn son de haute qualité Le son est clair et de haute qualité pour une expérience immersive avec les X-Balanced Speaker et le son cinéma 360° Dolby Atmos\r\nConçu pour une expérience encore plus immersive Avec son écran sans bords vos yeux ne se concentreront que sur l\'image.\r\nIdéal pour les sensations fortes. Les scènes de sport et d\'action sont fluides et précises avec la technologie Motionflow. Le mode d\'image automatique vous permet d\'avoir la meilleure qualité d\'image quel que soit le contenu joué à l\'écran.\r\nVos divertissements préférés avec l\'aide de Google. Le micro de la télécommande permet de contrôler le TV à la voix ! Cette télécommande intelligente permet aussi d\'accéder aux services de vidéos à la demande les plus populaires.', 8, 3, '2023-05-23 09:52:22', 'Tv-Sony-Bravia.jpeg', '700'),
(8, 'Smart Tech TV LED 4K', 'TV LED avec diagonale d\'écran 80 cm (32 pouces), noir, dimensions sans pieds en cm (LxPxH) 73,3x8,06x43,5 , dimensions avec pieds en cm (LxPxH) 73,3x18,02x48,02. Poids avec pieds 3,7 kg et 3,6 Kg sans pieds.\r\nRéception : Triple tuners DVB-T/T2 HEVC, DVB-C et DVB-S/S2 MPEG4, HDMI (x2 dont 1 ARC), lecture fichiers mutlimédia par port USB, entrée écouteurs audio, entrée SPDIF (optique pour connecter une barre de son), entrée PC audio, entrée câble antenne terreste, entrée câble satellite (fiche F), port CI+\r\nRésolution : HD TV 1366x768 pixels. Son design épuré vous surprendra. Contraste exceptionnel et images réalistes. Image Quality Ratio 200. Couleurs rayonnantes et large spectre. Netteté et fluidité du mouvement de l’image.\r\nAutres services : Contrôle parental, mode hotel intégré, Guide électronique des programmes, Gestion des favoris pour organiser vos chaînes selon votre choix\r\nInclus une télécommande avec piles fournies (AAA). Garantie 24 mois. Compatible VESA 100x100 pour support mural non fourni. Expédition, SAV et support localisé en France', 8, 3, '2023-05-23 09:52:23', 'Smart-Tech-Tv.jpg', '200'),
(9, 'Sony ZV-1', 'CONCU POUR LE VLOGGING : écran LCD orientable, voyant d\'enregistrement pour les vidéos face caméra et poignée trépied pour une prise en main adaptée\r\nENREGISTREMENT DU SON HAUTE QUALITE : micro directionnel 3-capsules intégré et pare-vent founi avec l\'appareil\r\nDES VIDEOS AU RENDU PROFESSIONNEL : réglage spécifique pour la présentation de produits pour des vidéos de démonstrations produits parfaites, bouton de changement du bokeh pour facilement flouter ou non l\'arrière plan\r\nTECHNOLOGIE SONY D\'AUTOFOCUS en temps réel sur l\'œil, même en mode vidéo 4K reglages effet peau douce : des tonalités de peau naturelles et optimisation de l\'exposition du visage', 8, 4, '2023-05-23 09:52:23', 'Sony-ZV-1.jpeg', '800');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Smartphones, Téléphonie'),
(2, 'Ordinateurs portables'),
(3, 'TV, Télévision'),
(4, 'PHOTO, CAMERA');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(1024) NOT NULL,
  `id_article` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_article`, `id_utilisateur`, `date`) VALUES
(11, 'cocuou les amigo\r\n', 8, 5, '2023-05-20 16:47:17'),
(12, 'coucpu\r\n', 8, 8, '2023-05-20 16:47:39'),
(13, '<script language=\'js\'>alert(\'coucou\')</script>', 8, 8, '2023-05-20 16:48:13'),
(14, 'select * from article;', 8, 8, '2023-05-20 16:49:14'),
(15, 'select * from articles;', 8, 8, '2023-05-20 16:49:59'),
(16, 'php_info()', 8, 8, '2023-05-20 16:50:23'),
(17, 'zezezez\r\n', 9, 11, '2023-05-22 11:46:02'),
(18, 'coucou\r\n', 3, 11, '2023-05-27 15:16:08'),
(19, 'cocuoiu\r\n', 8, 8, '2023-06-07 12:47:17');

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1338 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`id`, `nom`) VALUES
(1, 'utilisateur'),
(42, 'moderateur'),
(1337, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_droits` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `email`, `id_droits`) VALUES
(8, 'admin', '$2y$10$12xMQ8UCNj.z2fFVY4Ge9.kzezq7CnXD6EIkHd3M4ZMv1Rz3jDgRy', 'mehdi.douib@laplateforme.io', 1337),
(9, 'moderateur', '$2y$10$NtoVXh5hTqFylyFWMiTKD.0k2L7DfMq8xWjxK0jblaGeLnklXgE3O', 'mehdi.douib@laplateforme.io', 42),
(5, 'gabriel', '$2y$10$2p5XV58nfeDKNhIvuR70c.6la7YY2GClkm82/Tz5SBw/NvknFKeNC', 'mehdi.douib@laplateforme.io', 1),
(10, 'jp', '$2y$10$0VaaEziYRIGo1loijkZInurXbsMopGYG.MaBEUwrQjRz9nC/Gp6ze', 'jp@gm.co', 1),
(11, 'a', '$2y$10$gjbbf6I.2dBXoSMPWk2WD.XK5MjaU0HmyEVI/1XLZcS32XOUrgYU.', 'a@a.co', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `sup_article` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `sup_art` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
