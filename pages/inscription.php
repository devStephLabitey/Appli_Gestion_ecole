<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/inscription.css">
    <title>Document</title>
</head>
<body>
<?php
            include("../php/config.php");
            if(isset($_POST['submit'])){
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $adresse = $_POST['adresse'];
                $pass_word = $_POST['pass_word'];
                $filiere = $_POST['filiere'];

                $verify_query = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");
    
                if(mysqli_num_rows($verify_query) != 0){
                    echo "<div class='message'>
                        <p>This email is used, Try another One please!</p>
                    </div>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
                } else {
                    mysqli_query($con, " INSERT INTO users (nom, prenom, email, adresse, pass_word, filiere) VALUES ('$nom','$prenom','$email','$adresse','$pass_word','$filiere' )") or die("Envoie échoué");
                    echo "<div class='message'>
                        <p>Inscription Réussit</p>
                    </div>";
                    echo "<a href='connexion.php'><button class='btn'>Se connecter maintenant</button></a>";
                }
            }
        ?>


    <div class="fullForm">
       
        <img src="../assets/image.png" alt="">
        
        <form action="" method="post"> <!-- Correction: method="post" -->
            <p class="insc">Inscription</p>
            <label for="Nom">Nom</label>
            <input type="text" name="nom" placeholder="Entrez Votre Nom" id="nom" required autocomplete="off" data-initial-value>

            <label for="Nom">Prénom(s)</label>
            <input type="text" name="prenom" placeholder="Entrez Votre Prénom(s)" id="prenom" required autocomplete="off">

            <label for="Nom">Email</label>
            <input type="email" name="email" placeholder="Entrez Votre email" id="email" required autocomplete="off">

            <label for="statut">Statut</label>
            <select name="statut" id="statut"  required autocomplete="off" >
                <option disabled >Veuillez Choisir votre statut</option>
                <option value="Etudiant">Etudiant</option>
                <option value="Professeur">Professeur</option>
            </select>

            <label for="">Adresse</label>
            <input type="text" name="adresse" id="adresse" required placeholder="Entrez Votre adresse" autocomplete="off">

            <label for="pass_word">Mot de passe</label>
            <input type="password" name="pass_word" id="pass_word" placeholder="Entrez Votre mot de passe" required autocomplete="off">

            <label for="filiere">Filière</label>
            <select name="filiere" id="filiere" required autocomplete="off">
                <option value="">Veuillez Choisir votre statut</option>
                <option value="Informatique">Informatique</option>
                <option value="GRH">GRH</option>
                <option value="Comptabilité">Comptabilité</option>
                <option value="GMP">GMP</option>
                <option value="Infocom">Infocom</option>
                <option value="GEII">GEII</option>
            </select>

            <button type="submit" name="submit">Envoyer</button>

            <p>Avez-vous déjà un compte <a href="../pages/connexion.php">Se connecter</a></p>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
