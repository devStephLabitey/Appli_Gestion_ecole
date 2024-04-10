<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/connexion.css">
    <title>Document</title>
</head>
<body>
<?php 
    
    include("../php/config.php");
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $pass_word = mysqli_real_escape_string($con,$_POST['pass_word']);

        // Correction de la requête SQL
        $result = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND pass_word='$pass_word' ") or die("Select error");
        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
            $_SESSION['valid'] = $row['email'];
            $_SESSION['nom'] = $row['nom'];
            $_SESSION['prenom'] = $row['prenom'];
            $_SESSION['statut'] = $row['statut'];
            $_SESSION['adresse'] = $row['adresse'];
            $_SESSION['filiere'] = $row['filiere'];
            $_SESSION['userId'] = $row['userId'];
            
            // $info = (
            //     $_SESSION['email']
            //     $_SESSION['nom']
            //     $_SESSION['prenom']
            //     $_SESSION['statut']
            //     $_SESSION['adresse']
            //     $_SESSION['filiere']
            //     $_SESSION['userId']
            // );
        }else{
            echo "<div class='message'>
                        <p>Wrong email or password</p>
                    </div>";
                    echo "<a href='inscription.php'><button class='btn'>Go Back</button></a>";
        }
        if(isset($_SESSION['valid'])){
            header("Location: acceuil.php");
        }
    }

?>
    <div class="fullForm">
        
            <img src="../assets/image.png" alt="">
        
        <form action="" method="post"> <!-- Correction: ajout de method="post" -->
            <p class="insc">Connexion</p>

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Entrez Votre email" id="email" required>

          
            <label for="pass_word">Mot de passe</label>
            <input type="password" name="pass_word" id="pass_word" placeholder="Entrez Votre mot de passe" required>

            <button type="submit" name="submit">Envoyer</button> <!-- Correction: ajout de name="submit" -->

            <p>Vous n'avez pas encore de compte <a href="../pages/inscription.php">S'incrire</a></p>
        </form>
    </div>

    <script src="../script/connexion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
