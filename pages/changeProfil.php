<?php
            session_start();
            include("../php/config.php");
            
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/changeProfil.css">
    <title>Document</title>
</head>
<body>
    <div class="fullForm">
        <?php
            if(isset($_POST['submit'])){
                $_nom = $_POST['nom'];
                $_prenom = $_POST['prenom'];
                $_email = $_POST['email'];
                $_adresse = $_POST['adresse'];
                $_filiere = $_POST['filiere'];


                $userId = $_SESSION['userId'];

                $edit_query = mysqli_query($con, "UPDATE users SET nom='$nom', prenom='$prenom', email='$email', adresse='$adresse', filiere='$filiere' WHERE userId='$userId'" )or die("error occured");
                
                if($edit_query){
                   echo "<div class='message'>
                        <p>Mise à jour réussit!!</p>
                    </div>";
                    echo "<a href='acceuil.php'><button class='btn'>Aller à l'acceuil</button></a>";
                }else{
                    $userId = $_SESSION['userId'];
                    $query = mysqli_query($con, "SELECT * FROM users WHere userId ='$userId'");


                    while($result = mysqli_fetch_assoc($query)){
                        $res_nom = $result['nom'];
                        $res_prenom = $result['prenom']; 
                        $res_email = $result['email']; 
                        $res_adresse = $result['adresse']; 
                        $res_filiere = $result['filiere']; 
                      
                        
                    }
                }
            }
        ?>
        <form action="" method="">
            <p class="insc">changer de profil</p>
            <label for="Nom">Nom</label>
            <input type="text" name="nom" placeholder="Entrez Votre Nom" id="nom"  required autocomplete="off">

            <label for="Nom">Prénom(s)</label>
            <input type="text" name="prenom" placeholder="Entrez Votre Prénom(s)" id="prenom"  required autocomplete="off">

            <label for="Nom">Email</label>
            <input type="email" name="email" placeholder="Entrez Votre email" id="email"  required autocomplete="off">

            <label for="">Adresse</label>
            <input type="text" name="adresse" id="adresse" required placeholder="Entrez Votre adresse" autocomplete="off">

            <label for="filiere">Filière</label>
            <select name="filiere" id="filiere" value=" <?php echo $res_filiere?>" required autocomplete="off">
                <option value="">Veuillez Choisir votre statut</option>
                <option value="Informatique">Informatique</option>
                <option value="GRH">GRH</option>
                <option value="Comptabilité">Comptabilité</option>
                <option value="GMP">GMP</option>
                <option value="Infocom">Infocom</option>
                <option value="GEII">GEII</option>
            </select>

            <button type="submit" name="submit">Mettre à jour</button>

          
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../script/inscription.js"></script>
</body>
</html>