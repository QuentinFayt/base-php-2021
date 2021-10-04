-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 oct. 2021 à 16:17
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `crud01`
--

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `userlogin`, `userpwd`, `usermail`) VALUES
(1, 'Admin', 'admin', 'admin@admin.admin'),
(2, 'Quentin', 'Goub2jveu', 'quentin.fayt.p@gmail.com');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idarticle`, `articletitle`, `articletext`, `articledate`, `user_iduser`) VALUES
(1, 'Le mot test est polysémique en français et issu de deux étymologies latines distinctes : testis (témoin) et testa (récipient rond)', 'Un test est une méthode de travail dans de nombreux domaines, tant en sciences exactes qu’en sciences humaines.\r\nEn informatique, le test est une procédure de vérification lors de la programmation d’un logiciel, lors de la validation par le client ayant ordonné cette programmation, et permettant la validation de ce qui a été produit.\r\nTest (jeu vidéo), pratique consistant à évaluer les fonctionnalités d\'un jeu vidéo.\r\nEn statistiques, un test d’hypothèse est une démarche consistant à vérifier si une hypothèse statistique est ou n’est pas plausible dans le cadre d\'une distribution supposée, et en fonction d’un jeu de données (échantillon) et pour un niveau de probabilité choisi (on vérifie quelle est la probabilité que la distribution produise l\'échantillon, et si cette probabilité est inférieure à la limite choisie, l\'hypothèse est rejetée. On peut également évaluer la puissance du test qui est un indicateur de la probabilité que l\'hypothèse soit vraie.\r\nEn psychologie, la pratique se fonde régulièrement sur des tests, qui sont des examens psychologiques standardisés.\r\nTest (évaluation) pour l\'évaluation formelle de compétences.\r\nCette étymologie a également donné témoin (testimonium) et ses dérivés (témoignage, témoigner…).', '2021-10-04 16:11:05', 2),
(2, 'La guitare est un instrument à cordes pincées. Les cordes sont disposées parallèlement à la table d\'harmonie et au manche, généralement coupé de frettes.', 'La guitare est la version européenne la plus courante de la catégorie organologique des luths en forme de boîte1, cordophones avec caisse et manche distincts et plan des cordes parallèle à la table. Elle se différencie des instruments similaires (balalaïka, bouzouki, charango, luth, mandoline, oud, théorbe, ukulele) principalement par son fond à peu près plat, sa forme en huit, et secondairement par le nombre de cordes et leur accord le plus habituel. Des variantes de guitare sont appelées, régionalement, par des noms particuliers : viola, violão, cavaco et cavaquinho (Brésil) ; tiple et requinto (Amérique latine)…', '2021-10-04 16:14:34', 1);
