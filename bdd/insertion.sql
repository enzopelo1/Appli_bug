
CREATE DATABASE mini_site;
USE mini_site;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);


/*

**Bug introduit :** 
- Aucune vérification des identifiants (n'importe quel utilisateur peut se connecter)

**Faille de sécurité :**
- Stockage des identifiants sans chiffrement

*/ 