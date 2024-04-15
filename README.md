# Application de gestion d'école
C'est une application de gestion d'école

# Initialissation du projet 
Pour initialiser le projet, Il faut
- Créer la Base de donnée ecole_php avec la table:
 CREATE TABLE users(
  userId INT PRIMARY KEY AUTO-INCREMENT,
  nom VARCHAR(250) NOT NULL,
  prenom VARCHAR(250) NOT NULL,
  email VARCHAR(250) NOT NULL,
  statut VARCHAR(250) NOT NULL,
  adresse VARCHAR(250) NOT NULL,
  pass_word VARCHAR(250) NOT NULL,
  filiere VARCHAR(250) NOT NULL
);
-Créer un host sous PHPMyADMIN
et lancer en accédant à pages/inscription.php
# Etapes 
- S'inscrire
- Se connecter
- Et la page de connexion
