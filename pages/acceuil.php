<?php
  session_start();


  include("../php/config.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/acceuil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <title>AcceuilAdmin</title>
</head>
<body>
<!-- <div id="welcomeOver" >
  <div class="overlay">
    <p class="up">Welcome</p>
    <p>Username</p>
    <button id="butt">Merci</button>
  </div>
</div> -->
  <div class="dashboard">
 <div class="logo">
  <img src="../assets/logo.png" alt="">
  <p class="logoTxt">INSTITUT NEWTOWN</p>
 </div>
    <a href="#Home" ><i class="fa fa-home"></i><p>Home</p></a>
    <a href="#Profil" ><i class="fa fa-user"></i><p>Profil</p></a>
    <a href="#TimeTable"><i class="fa fa-table"></i><p>Emploi du temps</p></a>
    <a href="#Commentaires" id="#Plaintes ou commentaire"><i class="fa fa-comment"></i><p>Commentaires</p></a>

<a href="../php/deconnexion.php" class="logout"> <button ><i class="fa fa-flex"></i>Se déconnecter</button></a>
  </div>

  <section id="Home">
   <div class="sectionName">Home</div>
   <div class="HomeMenu">
      <div class="HomeFirstPart">
       <div class="bloc">
        <img src="../assets/ecole.png" alt="" class="blocImg">
        <p class="blocText">Ecole d'excellence</p>
        <p class="blocText2">Plus de 1000 bourses</p>
       </div>
       <div class="bloc">
        <img src="../assets/sac-decole.png" alt="" class="blocImg">
        <p class="blocText">Ecole d'excellence</p>
        <p class="blocText2">Plus de 1000 bourses</p>
       </div>
       <div class="bloc">
        <img src="../assets/salle-de-classe.png" alt="" class="blocImg">
        <p class="blocText">Ecole d'excellence</p>
        <p class="blocText2">Plus de 1000 bourses</p>
       </div>
      </div>
      <div class="HomeSecondPart">
        <div class="inter">Formations Favorites</div>
        <div class="gbloc">
          <div class="bloc2">
            <div class="TextBloc">
              <p class="blocText">Informatique :</p>
              <p class="blocText2">⭐⭐⭐⭐⭐</p>
            </div>
            <img src="../assets/programmation.png" alt="" class="blocImg">
          </div>
          <div class="bloc2">
            <div class="TextBloc">
              <p class="blocText">Journalisme :</p>
              <p class="blocText2">⭐⭐⭐⭐</p>
            </div>
            <img src="../assets/journaliste.png" alt="" class="blocImg">
          </div>
          <div class="bloc2">
            <div class="TextBloc">
              <p class="blocText">G R H :</p>
              <p class="blocText2">⭐⭐⭐</p>
            </div>
            <img src="../assets/recrutement.png" alt="" class="blocImg">
          </div>
        </div>
      </div>
   </div>
  </section>


  <section id="Profil">
    <div class="sectionName">Profil</div>
    <div class="Profilcontent">
      <?php
      
        $userId = $_SESSION['userId'];
      //   $nom = $_SESSION['nom'];
      //   $email = $_SESSION['email'];
      //  $prenom =  $_SESSION['prenom'] ;
      //  $statut  =  $_SESSION['statut'];
      //  $adresse = $_SESSION['adresse'] ;
      //   $filiere = $_SESSION['filiere'] ;
      
         $query = mysqli_query($con, "SELECT * FROM users WHERE userId='$userId'");

        while($result = mysqli_fetch_assoc($query)){
          $res_nom = $result['nom'];
          $res_prenom = $result['prenom'];
          $res_email = $result['email'];
          $res_statut = $result['statut'];
          $res_adresse = $result['adresse'];
          $res_filiere = $result['filiere'];
          $res_userId = $result['userId'];
        };

        echo "<a href='changeProfil.php?userId=$userId'><button class='fa fa-pencil' style:></button>
        </a>";
      ?>

     <div class="ProfilBloc">
       <img src="../assets/utilisateur.png" alt="">

       <div class="infottbloc">
        <div class="bb1">
          <div class="infott">
            <p>Nom </p>
            <p class="userinfo">
              <?php
              echo($res_nom);
              
              ?>
            </p>
          </div>
  
          <div class="infott">
            <p>Prénom(s) </p>
            <p class="userinfo">
            <?php
              echo($res_prenom)
              ?>
            </p>
          </div>
        </div>

       <div class="bb2">
        <div class="infott">
          <p>Email </p>
          <p class="userinfo">
            <?php
              echo($res_email)
            ?>
          </p>
        </div>

       </div>
        <div class="bb3">
          <div class="infott">
            <p>Adresse </p>
            <p class="userinfo">
            <?php
              echo($res_adresse)
              ?>
            </p>
          </div>
  
          <div class="infott">
            <p>Filière </p>
            <p class="userinfo">
            <?php
              echo($res_filiere)
              ?>
            </p>
          </div>
        </div>
       </div>
       
      </div>
    </div>
  </section>


  <section id="TimeTable" style="color: white;">
  <div class="sectionName">Emploi du temps</div>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil explicabo, nam officia totam asperiores, provident dolor beatae error unde dolorem eveniet consequatur vel fuga sequi dolore, corrupti vero repellat dignissimos? Iste minus quod ipsum corrupti voluptatem, voluptates accusamus provident non quibusdam perferendis dolor, ea laudantium veritatis modi ut praesentium explicabo aperiam harum? Beatae laborum laudantium accusantium illum aut cumque id officiis debitis itaque officia voluptate pariatur harum, facilis at, ipsa possimus, exercitationem quae vero consequuntur enim molestias incidunt doloribus. Est rerum veritatis minima assumenda veniam, perspiciatis inventore totam ipsam doloremque quas nemo voluptatum quam dolorum officia sint, culpa numquam necessitatibus quisquam voluptatibus quasi enim iusto nostrum, alias a. Molestiae, exercitationem blanditiis, natus dolores molestias optio a expedita commodi, necessitatibus officia facere! Similique in labore odio magnam eum perspiciatis molestiae totam sint, quaerat a. Praesentium veritatis voluptas reiciendis laboriosam provident, neque quam pariatur sed quaerat quibusdam sunt, labore libero iure consequatur nisi impedit totam magni assumenda cupiditate beatae modi tenetur corrupti dignissimos. Placeat, quasi culpa atque porro dolores corrupti exercitationem magni asperiores ea velit aliquam harum quaerat, ab sit, dignissimos libero consequuntur esse rem. Culpa velit nihil quis? Quaerat nulla alias tempora necessitatibus earum optio hic enim recusandae minus, sint, obcaecati veniam a in ab? Accusantium, nulla! Ea debitis aut qui quod dolores vel id, aperiam nam, iure assumenda cupiditate repellat nostrum possimus ipsum voluptates voluptatibus eveniet fugit ad recusandae quasi a saepe enim laborum ducimus. Laborum numquam tempore odit fuga, excepturi magnam ullam enim libero aliquid repudiandae doloremque odio labore velit quo, veniam corrupti hic molestias ad dolore! Sapiente iure cum pariatur quis, eius quia tenetur numquam possimus odio voluptatibus! Voluptatibus recusandae vero inventore. Cum rerum architecto tenetur eveniet minima tempora excepturi deleniti inventore distinctio illo doloribus facere delectus, voluptas nisi assumenda qui neque labore quis nostrum. Dolor repellat praesentium aspernatur minima vel, rerum minus inventore consequuntur incidunt vitae libero? Quia sed architecto suscipit, odio saepe quasi harum, perferendis sit esse cumque ad placeat quisquam adipisci quae totam fugit quam? Fugit nesciunt aspernatur quibusdam dolore eos provident reiciendis sit minima fuga cum laudantium nostrum doloribus consequuntur illo tenetur voluptatem excepturi, quia repudiandae voluptate error. Quae minima illum consectetur perferendis eligendi, quia inventore est nobis fuga provident nisi veniam nihil ipsa magni ab dolorem molestias architecto, eum eaque vel, quam quasi? Neque perferendis ipsa earum incidunt dolorum. Cupiditate ducimus iste veniam voluptas repudiandae nesciunt inventore pariatur ab ipsum dolorem consequuntur, laudantium magni neque officia earum necessitatibus quo animi nostrum nisi eos dolores debitis aliquam unde molestiae. Temporibus numquam fuga, exercitationem dolorem sapiente veniam eaque error ducimus doloremque quas voluptates quisquam itaque quasi distinctio quaerat, tempore a culpa maxime obcaecati facilis tenetur ad architecto? Fugit ratione, quos ipsam aspernatur perspiciatis at consequuntur, impedit libero cupiditate, non dignissimos voluptatum animi! Laboriosam animi alias nesciunt voluptates consequuntur. Placeat nisi dicta eligendi blanditiis quidem sunt in tempora consequatur dolorem autem. Itaque ad alias debitis eaque libero. Perspiciatis ad harum reprehenderit, eligendi fuga id alias cupiditate nam possimus dolorum culpa maxime a aspernatur, dolorem voluptatibus amet!
  </section>


  <section id="Commentaires">
  <?php
    
            include("../php/config.php");
            if(isset($_POST['submit'])){
                $commentaire = $_POST['commentaire'];

                
                    mysqli_query($con, " INSERT INTO commentaires (commentaire) VALUES ('$commentaire')") or die("Envoie échoué");
                    echo "<div class='message'>
                        <p>Merci Pour vos plaintes et suggestions</p>
                    </div>";
                   
                
            }
        ?>
    <div class="sectionName">Commentaires et plaintes</div>
   <form action="">
    <textarea name="commentaire" id="commentaire" cols="30" rows="10" placeholder="Faites vos plaintes et commentaires ici..." required></textarea>
    <button class="fa fa-send" type="submit">Envoyer</button>
   </form>
  </section>



  <script src="../script/comment.js"></script>

  <script >
   
  </script>
</body>
</html>