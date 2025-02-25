# Appli_bug

Depot d'un petit projet avec un formulaire de connexion et un bug caché. Un autre groupe va devoir trouver le bug et le corriger.

## Description

Ce projet est une application web simple avec un système de connexion et d'inscription. Il utilise PHP pour la logique côté serveur et Tailwind CSS pour le style. L'application permet aux utilisateurs de s'inscrire, de se connecter et de se déconnecter. Un bug est caché dans le projet, et un autre groupe devra le trouver et le corriger.

## Structure des fichiers

- `index.php`: La page d'accueil de l'application. Affiche un message de bienvenue et indique si l'utilisateur est connecté.
- `login.php`: La page de connexion. Permet aux utilisateurs de se connecter en utilisant leur nom d'utilisateur et leur mot de passe.
- `register.php`: La page d'inscription. Permet aux nouveaux utilisateurs de créer un compte en fournissant un nom d'utilisateur et un mot de passe.
- `logout.php`: La page de déconnexion. Détruit la session de l'utilisateur et le redirige vers la page d'accueil.
- `confirm_logout.php`: Une page de confirmation de déconnexion. Demande à l'utilisateur de confirmer s'il souhaite se déconnecter.
- `header.php`: Le fichier d'en-tête inclus dans toutes les pages. Contient la navigation et affiche "Connexion" ou "Déconnexion" en fonction de l'état de connexion de l'utilisateur.
- `config.php`: Le fichier de configuration pour la connexion à la base de données. Contient les informations nécessaires pour se connecter à la base de données MySQL.

## Détails des fichiers

### `index.php`

- Démarre une session ou reprend une session existante.
- Inclut le fichier de configuration pour la connexion à la base de données.
- Affiche un message de bienvenue et indique si l'utilisateur est connecté.

### `login.php`

- Démarre une session ou reprend une session existante.
- Vérifie si l'utilisateur est déjà connecté et le redirige vers la page d'accueil si c'est le cas.
- Affiche un formulaire de connexion.
- Vérifie les informations de connexion fournies par l'utilisateur et initialise les variables de session si les informations sont correctes.

### `register.php`

- Démarre une session ou reprend une session existante.
- Affiche un formulaire d'inscription.
- Vérifie si les mots de passe fournis correspondent.
- Insère un nouvel utilisateur dans la base de données si le nom d'utilisateur n'est pas déjà pris.
- Initialise les variables de session pour l'utilisateur connecté.

### `logout.php`

- Démarre une session ou reprend une session existante.
- Détruit toutes les données de la session.
- Redirige l'utilisateur vers la page d'accueil.

### `confirm_logout.php`

- Démarre une session ou reprend une session existante.
- Affiche une page demandant à l'utilisateur de confirmer s'il souhaite se déconnecter.
- Fournit des liens pour confirmer ou annuler la déconnexion.

### `header.php`

- Contient l'en-tête de la page, incluant le titre du site et la navigation.
- Affiche "Connexion" ou "Déconnexion" en fonction de l'état de connexion de l'utilisateur.

### `config.php`

- Contient les informations de configuration pour la connexion à la base de données MySQL.
- Utilisé pour établir une connexion à la base de données dans les autres fichiers PHP.

## Installation

1. Clonez le dépôt sur votre machine locale.
2. Configurez votre serveur web (par exemple, WAMP, XAMPP) pour pointer vers le répertoire du projet.
3. Créez une base de données MySQL et importez le schéma de base de données fourni (si disponible).
4. Mettez à jour le fichier `config.php` avec les informations de connexion à votre base de données.
5. Accédez à l'application via votre navigateur web.

## Utilisation

- Accédez à la page d'accueil (`index.php`) pour voir le message de bienvenue.
- Utilisez la page de connexion (`login.php`) pour vous connecter avec un compte existant.
- Utilisez la page d'inscription (`register.php`) pour créer un nouveau compte.
- Utilisez la page de déconnexion (`logout.php`) pour vous déconnecter.
- Utilisez la page de confirmation de déconnexion (`confirm_logout.php`) pour confirmer la déconnexion.

## Contribution

Si vous trouvez le bug et la faille de sécurité caché dans le projet, veuillez le corriger et soumettre une pull request avec une description détaillée de la correction.