## Conception d'un Site Web Dynamique pour une Entreprise de Plomberie

## Présentation du Projet

Ce projet a été réalisé dans le cadre de mon Projet de Fin d'Études (PFE) pour l'obtention de ma Licence en Informatique Appliquée Option Génie Logiciel. L'objectif était de digitaliser les services d'une entreprise de plomberie en créant une plateforme interactive permettant la présentation des services, la gestion des demandes de devis et la prise de contact.

## Architecture Technique (Stack Full-Stack)

Pour répondre aux besoins de performance et de dynamisme, j'ai utilisé les technologies suivantes :

    Front-end (Interface Utilisateur) :

        HTML5 / CSS3 : Structuration sémantique et mise en page responsive (adaptée aux mobiles).

        JavaScript : Pour les animations et la validation des formulaires côté client.

    Back-end (Logique et Serveur) :

        PHP : Gestion des requêtes dynamiques, traitement des formulaires et communication avec le serveur.

    Base de Données :

        MySQL : Stockage des informations (services, messages clients, gestion des administrateurs).

## Fonctionnalités Clés

    Catalogue de Services : Présentation dynamique des prestations (réparation, installation, débouchage).

    Formulaire de Devis Intelligent : Système permettant aux clients de soumettre leurs besoins directement via le site.

    Espace Administration : Une interface sécurisée permettant au gestionnaire de consulter et de traiter les demandes reçues.

    Design Responsive : Le site est entièrement optimisé pour une navigation fluide sur smartphone, tablette et ordinateur.

## Compétences Validées

    Analyse des besoins et rédaction du cahier des charges.

    Conception de schémas de base de données (Modèle Conceptuel de Données - MCD).

    Mise en œuvre de la sécurité de base (protection contre les injections SQL, validation des entrées).

    Déploiement sur un serveur local gratuit (InfinityFree) 

## Installation Locale

Pour faire fonctionner ce projet sur votre machine (via XAMPP/WAMP) :

1. **Cloner le projet** dans votre dossier `htdocs`.
2. **Importer la base de données** :
   - Ouvrez `phpMyAdmin`.
   - Créez une base de données nommée `plomberie_db`.
   - Importez le fichier situé dans `/sql/database.sql`.
3. **Configurer la connexion** :
   - Modifiez le fichier `config.php` (ou `connexion.php`) avec mes identifiants locaux (host, user, password).
4. **Lancer le site** : Accédez à `localhost/votre-dossier` dans votre navigateur.
