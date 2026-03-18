-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 29 août 2023 à 16:01
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hvnet_plomberie`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`id`, `email`) VALUES
(1, 'g.kienou@mundiapolis.ma');

-- --------------------------------------------------------

--
-- Structure de la table `about_page`
--

CREATE TABLE `about_page` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `about_page`
--

INSERT INTO `about_page` (`id`, `img1`, `img2`, `presentation`) VALUES
(1, 'a propos de nous2.webp', 'urgence plombier.webp', '<p>HVNET PLOMBERIE est une societe de plomberie qui intervient dans toutes les villes du Maroc et sur tous les arrondissements de Casablanca et sa banlieue afin de vous apporter des services de qualites a petit prix. Notre équipe est composée de professionnels expérimentés et compétents qui sont dévoués à la satisfaction de nos clients. Nous réalisons sur Casablanca, majoritairement, toute la plomberie générale qui recouvre aussi bien les travaux d\'installation, de dépannage plomberie et de rénovation en plomberie et bien plus encore..<br>HVNET PLOMBERIE repond a la charte de qualite des artisans et aux tarifs d\'un artisan plombier sur Casablanca.</p><p>Nous croyons en la transparence et l\'honnêteté dans tout ce que nous faisons. Nous nous engageons à fournir des estimations claires et précises avant de commencer tout travail, et nous nous engageons à maintenir des prix compétitifs tout en offrant des services de qualité supérieure.</p><p>Notre entreprise est entièrement agréée et assurée, et nous respectons toutes les normes et réglementations de l\'industrie. Nous investissons régulièrement dans la formation et le perfectionnement de notre personnel pour nous assurer que nous sommes à jour avec les dernières tendances et les technologies de pointe dans l\'industrie de la plomberie.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `about_services`
--

CREATE TABLE `about_services` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `about_services`
--

INSERT INTO `about_services` (`id`, `title`, `type`) VALUES
(12, 'Changement chaudiere', 'maison'),
(13, 'Installation chauffe - eau', 'maison'),
(14, 'Nettoyage des tuyaux', 'maison'),
(15, 'Installation d\'un lave-vaisselle', 'cuisine'),
(16, 'Installation d\'un lavabo', 'toilette'),
(17, 'Réparation des fuites', 'maison'),
(18, 'Pose robinetterie', 'cuisine'),
(19, 'Pose lave-mains', 'toilette'),
(20, 'Conduite d\'evacuation', 'maison'),
(21, 'Installation d\'évier ', 'cuisine'),
(22, 'Installation de la douche', 'toilette'),
(23, 'Mise en place d\'un filtre à eau', 'cuisine'),
(24, 'Installation d\'un siphon de sol', 'toilette'),
(25, 'Changement de tuyaux', 'cuisine'),
(27, 'Installation pomme de douche', 'toilette');

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `presentation` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `presentation`, `img`, `contenu`, `date`) VALUES
(11, 'Explorez les clés d\'une rénovation de salle de bain réussie !', 'Renouveler le look de votre salle de bain vous fait un peu peur ? C’est naturel. Alors si vous manquez d’idées déco pour votre salle de bain, pas de panique ! En quelques astuces simples nous allons vous suggérer nos meilleures idées pour rafraîchir cette pièce sans opter pour de lourds travaux de rénovation.\r\n                                                                                                           ', 'une-salle-de-bain-ecologique-zoom-sur-le-corian.jpg', '<p>test before video</p><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=i56M2UKi3v4&amp;t=1096s\"></oembed></figure><p>&nbsp;</p><p>test after video</p>', '2023-08-01'),
(13, 'Comment déboucher l’évier avec du vinaigre blanc ?', 'Aujourd’hui, nous sommes nombreux à profiter des vertus nettoyantes et désinfectantes du vinaigre blanc. Mais saviez vous que ce dernier peut aussi être très bénéfique pour le lavabo de votre salle de bain ? On vous explique pourquoi !                                     ', 'HowToUnclogYourKitchenSinkIn3Steps_Hero.jpg', '<p>test of contenu</p>', '2023-08-01'),
(15, '5 Astuces Écologiques pour Éviter les Problèmes de Plomberie !', 'Certaines astuces écologiques peuvent vous aider à prévenir les problèmes de plomberie et à adopter une approche plus respectueuse de l\'environnement. Dans cet article, nous vous présentons 5 conseils pratiques qui vous aideront à éviter les tracas liés à la plomberie.', 'b0096329f825fe2329b4a5bf7b1eb7e8_plomberie-materiel-w-633.jpg', '<p>.</p>', '2023-08-21');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `nom`, `email`, `message`) VALUES
(3, 'KIENOU', 'kcarmene07@gmail.com', 'tres interessant'),
(4, 'ImmoMaroc', 'mohamedwinbest@gmail.com', 'soooooooooo pretttyyy');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` int(15) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `typelocal` varchar(50) NOT NULL,
  `typeservice` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `autre` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `telephone`, `adresse`, `ville`, `email`, `typelocal`, `typeservice`, `sujet`, `autre`, `message`) VALUES
(3, 'kienou', 'Carmene', 610555624, 'maarif', '1', 'kcarmene@gmail.com', '1', '1', '2', 'rien', 'bonjour'),
(7, 'therminuce', 'Gwladys', 763456789, 'A299GH33 ', '1', 'admin@gmail.com', '1', '2', '2', 'fffffffff', 'vvvvvv');

-- --------------------------------------------------------

--
-- Structure de la table `debouchage_canalisation`
--

CREATE TABLE `debouchage_canalisation` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `debouchage_canalisation`
--

INSERT INTO `debouchage_canalisation` (`id`, `img1`, `img2`, `presentation`) VALUES
(1, 'debouchage-canalisation-casablanca.webp', 'plombier-debouchage-canalisation.webp', '<p>Les <i><strong>canalisations</strong></i> bouchées peuvent causer des problèmes majeurs dans une maison ou un bâtiment à Casablanca. Non seulement cela peut entraîner des odeurs désagréables, mais cela peut également causer des dégâts d\'eau, des débordements et des dommages à la propriété. C\'est pourquoi le débouchage de canalisation est une tâche importante qui doit être effectuée rapidement.</p><p>La première étape pour le débouchage de canalisation à Casablanca est d\'identifier le problème. Si vous remarquez que l\'eau s\'écoule lentement ou pas du tout, cela peut indiquer un bouchon dans la canalisation. Si vous sentez des odeurs désagréables, cela peut également être un signe de canalisations bouchées. Il est important de localiser l\'endroit où se trouve le bouchon, car cela déterminera la méthode de débouchage à utiliser.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `debouchage_wc`
--

CREATE TABLE `debouchage_wc` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `debouchage_wc`
--

INSERT INTO `debouchage_wc` (`id`, `img1`, `img2`, `presentation`) VALUES
(1, 'debouchage-wc-casablanca.webp', 'debouchage-wc.webp', '<p><i><strong>Le débouchage des WC</strong></i> à Casablanca est une intervention courante qui consiste à éliminer les obstructions dans les tuyaux d\'évacuation des toilettes. Cette opération est généralement effectuée par des professionnels qualifiés qui peuvent garantir un travail de qualité et une solution efficace.</p><p>La première étape dans le débouchage des WC à Casablanca est l\'identification du problème. Les professionnels peuvent inspecter les toilettes pour déterminer la nature de l\'obstruction, qui peut être causée par des objets étrangers, des dépôts de calcaire, des racines de plantes ou des problèmes de plomberie plus complexes. Une fois le problème identifié, les professionnels peuvent recommander une solution adaptée.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `depannage_plomberie`
--

CREATE TABLE `depannage_plomberie` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `depannage_plomberie`
--

INSERT INTO `depannage_plomberie` (`id`, `img1`, `img2`, `presentation`) VALUES
(1, 'depannage-plomberie-casablanca.webp', 'depannage-plomberie.webp', '<p>Le <i><strong>dépannage de plomberie </strong></i>est une nécessité fréquente chez les résidents de Casablanca, que ce soit pour des fuites d\'eau, des canalisations bouchées ou des problèmes de robinetterie. Les problèmes de plomberie peuvent survenir à tout moment et causer des dommages importants à votre maison si vous ne les traitez pas rapidement.</p><p>La première étape pour le dépannage de plomberie à Casablanca est d\'identifier le problème. Si vous avez une fuite d\'eau, localisez la source de la fuite et fermez l\'arrivée d\'eau. Si vous avez une canalisation bouchée, essayez d\'identifier l\'endroit où se trouve le bouchon. Si vous avez un problème de robinetterie, identifiez le type de robinet et le problème spécifique.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `home_page`
--

INSERT INTO `home_page` (`id`, `img`, `presentation`) VALUES
(1, 'home-banner-plombier.jpg', '<p>est une société de plomberie &nbsp;à Casablanca Maroc spécialisée dans les services de plomberie résidentielle et commerciale. Que vous ayez besoin de réparations, d\'installations ou de conseils professionnels, notre équipe qualifiée est là pour vous aider..</p><p>Le devis est disponible afin de répondre à vos besoins, nous avons établi un devis détaillé pour les les travaux nécessaires.</p><p>Notre présence nationale vous garantit une intervention rapide pour vos besoins en matière de plomberie, où que vous soyez.</p><p>L\'innovation est au cœur de notre métier de plomberie et nous proposons des solutions respectueuses de l\'environnement pour répondre à tous vos besoins.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `home_partenaire`
--

CREATE TABLE `home_partenaire` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `home_partenaire`
--

INSERT INTO `home_partenaire` (`id`, `img`) VALUES
(18, 'cnss.png'),
(19, 'telechargement-maroc.png'),
(20, 'ram.png'),
(21, 'phama.png');

-- --------------------------------------------------------

--
-- Structure de la table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `home_slider`
--

INSERT INTO `home_slider` (`id`, `img`) VALUES
(23, 'slider2.webp'),
(24, 'dépannage-plomberie-lyon.jpg'),
(25, 'slide-1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `Tel` int(20) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `presentation` text NOT NULL,
  `temps_travail` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `localisation` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`id`, `Tel`, `adresse`, `presentation`, `temps_travail`, `email`, `localisation`, `facebook`, `twitter`, `linkedin`) VALUES
(2, 610555624, 'Casablanca', '<p><strong>HVNET PLOMBERIE </strong>, Société de plomberie à Casablanca Maroc expérimentée et compétitive au service des particuliers, des professionnels et des collectivités, spécialisée dans la plomberie, à Casablanca et partout au Maroc.</p>', '24h/24 et 7jr/7', 'hvnet.plomberie.maroc@gmail.com', '', 'https://developers.google.com/maps?hl=fr', 'https://developers.google.com/maps?hl=fr', 'https://developers.google.com/maps?hl=fr');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `name`, `email`, `password`) VALUES
(1, 'taha', 'techchoual7@gmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a'),
(2, 'carmene', 'kienougwladys06@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Structure de la table `installation_plomberie`
--

CREATE TABLE `installation_plomberie` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `installation_plomberie`
--

INSERT INTO `installation_plomberie` (`id`, `img1`, `img2`, `presentation`) VALUES
(1, 'installation-plomberie-casablanca.webp', 'installation-plomberie.webp', '<p><i><strong>L\'installation de plomberie</strong></i> est une étape cruciale dans la construction d\'une maison ou la rénovation d\'un bâtiment à Casablanca. Une installation de plomberie efficace et bien conçue est essentielle pour garantir un approvisionnement en eau propre et une évacuation des eaux usées efficace.</p><p>Les plombiers professionnels à Casablanca offrent une gamme complète de services d\'installation de plomberie, y compris l\'installation de conduites d\'eau, de canalisations, de chauffe-eau, de robinets, de lavabos, de toilettes, de baignoires et de douches. Ils peuvent également installer des systèmes de drainage et d\'égouts, ainsi que des systèmes de traitement de l\'eau.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `remplacement_chauffe_eau_electrique`
--

CREATE TABLE `remplacement_chauffe_eau_electrique` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `remplacement_chauffe_eau_electrique`
--

INSERT INTO `remplacement_chauffe_eau_electrique` (`id`, `img1`, `img2`, `presentation`) VALUES
(1, 'Remplacement-chauffe-eau-electrique-casablanca.webp', 'Remplacement-chauffe-eau-electrique.webp', '<p><i><strong>Le remplacement d\'un chauffe-eau électrique</strong></i> à Casablanca est une intervention courante qui consiste à remplacer un chauffe-eau électrique défectueux ou obsolète par un nouveau modèle plus efficace. Cette opération est généralement effectuée par des professionnels qualifiés qui peuvent garantir un travail de qualité et une installation sûre.</p><p>La première étape dans le remplacement d\'un chauffe-eau électrique à Casablanca est la sélection d\'un nouveau modèle adapté à vos besoins. Il existe de nombreux types de chauffe-eau électriques disponibles sur le marché, notamment les chauffe-eaux à accumulation, les chauffe-eaux instantanés, les chauffe-eau solaires et les chauffe-eaux thermodynamiques. Les professionnels peuvent vous aider à choisir le modèle qui convient le mieux à vos besoins et à votre budget.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `remplacement_robinet`
--

CREATE TABLE `remplacement_robinet` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `remplacement_robinet`
--

INSERT INTO `remplacement_robinet` (`id`, `img1`, `img2`, `presentation`) VALUES
(1, 'Remplacement-robinet-casablanca.webp', 'remplacement robinet.webp', '<p>Les <i><strong>robinets </strong></i>sont des éléments essentiels dans toutes les maisons et bâtiments de Casablanca, car ils permettent de contrôler l\'arrivée d\'eau. Cependant, avec le temps, les robinets peuvent devenir défectueux ou cassés, ce qui peut entraîner des fuites d\'eau et des pertes de pression. Si votre robinet est endommagé, il est important de le remplacer rapidement pour éviter tout dommage supplémentaire.</p><p>Avant de remplacer un robinet à Casablanca, la première étape consiste à éteindre l\'arrivée d\'eau. Cela permet d\'éviter les fuites et les dégâts d\'eau. Cherchez la vanne d\'arrêt qui se trouve près du robinet à remplacer, fermez là et ouvrez le robinet pour libérer toute l\'eau restante.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `reparation_eau`
--

CREATE TABLE `reparation_eau` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reparation_eau`
--

INSERT INTO `reparation_eau` (`id`, `img1`, `img2`, `presentation`) VALUES
(1, 'reparation-fuite-eau-casablanca.webp', 'reparation-fuite-eau.webp', '<p><i><strong>La réparation de fuite d\'eau </strong></i>à Casablanca est une intervention qui vise à corriger les pertes d\'eau qui se produisent dans les canalisations d\'une maison ou d\'un bâtiment. Cette opération est généralement effectuée par des professionnels qualifiés qui sont en mesure de détecter la source de la fuite et d\'effectuer les réparations nécessaires.</p><p>La première étape dans la réparation d\'une fuite d\'eau à Casablanca est la détection de la fuite. Les fuites d\'eau peuvent se produire dans différentes parties de la plomberie d\'un bâtiment, y compris les tuyaux d\'eau, les robinets, les joints de plomberie et les raccords. Pour détecter la fuite, Nos professionnels utilisent des équipements spécialisés tels que des détecteurs de fuite acoustiques, des caméras d\'inspection de tuyaux, des tests de pression et des colorants de fuite. Ces outils permettent aux professionnels de localiser précisément la source de la fuite.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `presentation` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `title`, `presentation`, `img`, `contenu`) VALUES
(2, 'REPARATION FUITE D\'EAU', 'Nous intervenons dans la réparation de fuites d\'eau pour les bâtiments à Casablanca.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ', 'reparation-fuite-deau.png', '<p>cccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjsssssssssssssssssssssssssssssssss</p>'),
(4, 'DEBOUCHAGE WC', 'Nous proposons nos services pour le débouchage de WC bâtiments de Casablanca.                                                                                                                                         ', 'debouchage-wc-toilette-2.jpg', '<p>SVILHNSI%VJ%SPZHP%</p>'),
(5, 'DEPANNAGE PLOMBERIE', 'Nous effectuons des dépannages en plomberie pour les bâtiments à Casablanca.                                                                                                                                       ', 'depannage-plomberie.png', '<p>SCVLJSD§IJ</p>'),
(6, 'DEBOUCHAGE CANALISATION', 'Nous sommes spécialisés dans le débouchage de canalisations pour les bâtiments à Casablanca.                                                                                               ', 'déboucher-évier-naturel-740x493.png', '<p>JKSDB</p>'),
(7, 'REMPLACEMENT ROBINET', 'Nous effectuons des remplacements de robinets pour les bâtiments à Casablanca.                                                                                       ', 'etapes-changement-robinet-de-lavabo.png', '<p>JSVL</p>'),
(8, 'URGENCE PLOMBERIE', 'Nous sommes disponibles pour les urgences en plomberie pour les bâtiments à Casablanca.                                                                                                                                                                                                                                                                                                                                      ', 'urgence-plomberie.png', '<p><br>La réparation de fuite d\'eau à Casablanca est une intervention qui vise à corriger les pertes d\'eau qui se produisent dans les canalisations d\'une maison ou d\'un bâtiment. Cette opération est généralement effectuée par des professionnels qualifiés qui sont en mesure de détecter la source de la fuite et d\'effectuer les réparations nécessaires.</p><p>La première étape dans la réparation d\'une fuite d\'eau à Casablanca est la détection de la fuite. Les fuites d\'eau peuvent se produire dans différentes parties de la plomberie d\'un bâtiment, y compris les tuyaux d\'eau, les robinets, les joints de plomberie et les raccords. Pour détecter la fuite, Nos professionnels utilisent des équipements spécialisés tels que des détecteurs de fuite acoustiques, des caméras d\'inspection de tuyaux, des tests de pression et des colorants de fuite. Ces outils permettent aux professionnels de localiser précisément la source de la fuite.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `urgence_plombier`
--

CREATE TABLE `urgence_plombier` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `urgence_plombier`
--

INSERT INTO `urgence_plombier` (`id`, `img1`, `img2`, `presentation`) VALUES
(1, 'plombier-accueil.webp', 'plombier-urgence.webp', '<p><i><strong>Les urgences en plomberie</strong></i> peuvent survenir à tout moment et causer des dégâts d\'eau considérables. A Casablanca, il est important de savoir comment trouver rapidement un plombier de confiance pour gérer les situations d\'urgence.</p><p>De nombreux plombiers à Casablanca proposent des services de plomberie d\'urgence. Ils peuvent être joignables à tout moment, de jour comme de nuit, pour des urgences en plomberie. Ces professionnels offrent des services tels que la réparation de fuites d\'eau, la réparation de canalisations, la réparation de robinets, le débouchage de canalisations et le remplacement de chauffe-eau.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'taha', 'techchoual7@gmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a'),
(2, 'carmene', 'kienougwladys06@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, 'admin', 'admin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `about_services`
--
ALTER TABLE `about_services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `debouchage_canalisation`
--
ALTER TABLE `debouchage_canalisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `debouchage_wc`
--
ALTER TABLE `debouchage_wc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depannage_plomberie`
--
ALTER TABLE `depannage_plomberie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `home_partenaire`
--
ALTER TABLE `home_partenaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `installation_plomberie`
--
ALTER TABLE `installation_plomberie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `remplacement_chauffe_eau_electrique`
--
ALTER TABLE `remplacement_chauffe_eau_electrique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `remplacement_robinet`
--
ALTER TABLE `remplacement_robinet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reparation_eau`
--
ALTER TABLE `reparation_eau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `urgence_plombier`
--
ALTER TABLE `urgence_plombier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `about_services`
--
ALTER TABLE `about_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `debouchage_canalisation`
--
ALTER TABLE `debouchage_canalisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `debouchage_wc`
--
ALTER TABLE `debouchage_wc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `depannage_plomberie`
--
ALTER TABLE `depannage_plomberie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `home_partenaire`
--
ALTER TABLE `home_partenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `installation_plomberie`
--
ALTER TABLE `installation_plomberie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `remplacement_chauffe_eau_electrique`
--
ALTER TABLE `remplacement_chauffe_eau_electrique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `remplacement_robinet`
--
ALTER TABLE `remplacement_robinet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reparation_eau`
--
ALTER TABLE `reparation_eau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `urgence_plombier`
--
ALTER TABLE `urgence_plombier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
