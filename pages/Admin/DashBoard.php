

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/acceuil.css">
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
    <a href="#TimeTable"><i class="fa fa-table"></i><p>Créer Emploi du temps</p></a>
    <a href="#Commentaires" id="#Plaintes ou commentaire"><i class="fa fa-comment"></i><p>Voir Commentaires</p></a>

<a href="../php/deconnexion.php" class="logout"> <button ><i class="fa fa-flex"></i>Se déconnecter</button></a>
  </div>

  <section id="Home">
   <div class="sectionName">Home</div>
   <div class="HomeMenu">
      <div class="HomeFirstPart">
       <div class="bloc">
        <img src="../../assets/ecole.png" alt="" class="blocImg">
        <p class="blocText">Ecole d'excellence</p>
        <p class="blocText2">Plus de 1000 bourses</p>
       </div>
       <div class="bloc">
        <img src="../../assets/sac-decole.png" alt="" class="blocImg">
        <p class="blocText">Ecole d'excellence</p>
        <p class="blocText2">Plus de 1000 bourses</p>
       </div>
       <div class="bloc">
        <img src="../../assets/salle-de-classe.png" alt="" class="blocImg">
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
            <img src="../../assets/programmation.png" alt="" class="blocImg">
          </div>
          <div class="bloc2">
            <div class="TextBloc">
              <p class="blocText">Journalisme :</p>
              <p class="blocText2">⭐⭐⭐⭐</p>
            </div>
            <img src="../../assets/journaliste.png" alt="" class="blocImg">
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
     

     <div class="ProfilBloc">
       <img src="../../assets/utilisateur.png" alt="">

       <div class="infottbloc">
        <div class="bb1">
          <div class="infott">
            <p>Nom </p>
            <p class="userinfo">
             
            </p>
          </div>
  
          <div class="infott">
            <p>Prénom(s) </p>
            <p class="userinfo">
            
            </p>
          </div>
        </div>

       <div class="bb2">
        <div class="infott">
          <p>Email </p>
          <p class="userinfo">
            
          </p>
        </div>

       </div>
        <div class="bb3">
          <div class="infott">
            <p>Adresse </p>
            <p class="userinfo">
            
            </p>
          </div>
  
        
        </div>
       </div>
       
      </div>
    </div>
  </section>


  <section id="TimeTable">
    <div class="sectionName">Creez emploi du temps</div>
    <form action="" method="POST">
      
       <div class="space" style="margin: 2vh;">
        <label for="">Date</label>
        <input type="date" name="dates" placeholder="Date" id="dates" required>
       </div>
       <div class="space" style="margin: 2vh;">
        <label for="">Heure</label>
        <select name="type" id="typeCours" required>
          <option value="">Choisir l'heure du cours</option>
          <option value="07H00-08H50">07H00-08H50</option>
          <option value="09H00-10H50">09H00-10H50</option>
          <option value="11H30-13H20">11H30-13H20</option>
          
      </select>
       </div>
       <div class="space" style="margin: 2vh;">
        <label for="">Nom du cours</label>
        <input type="text" name="cours" placeholder="Cours" id="nomCours" required>
       </div>

       <div class="space" style="margin: 2vh;">
        <label for="">Type</label>
          <select name="type" id="typeCours" required>
              <option value="">Choisir une type de cours</option>
              <option value="Cours">Cours</option>
              <option value="TP">TP</option>
              <option value="TD">TD</option>
              <option value="EXAMEN">EXAMEN</option>
          </select>
       </div>
       <div class="space" style="margin: 2vh;">
        <label for="">Prof.</label>
        <input type="text" name="nomProf" placeholder="Prof." id="nomProf" required>
       </div>
       <div class="space" style="margin: 2vh;">
        <label for="">Salle</label>
        <input type="text" name="nomSalle" placeholder="Salle" id="nomSalle" required>
       </div>


       <button>Créer</button>
    </form>

 </section>

  <section id="Commentaires">

    <div class="sectionName">Commentaires et plaintes</div>
   <form action="">
    <p> <div class="envoyeur" style="background: aliceblue; padding: 1vh;">Stéphanio Labitey</div>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla laboriosam dolorum deleniti est laborum quo cupiditate, voluptatem corrupti beatae eaque. Iste ratione odio culpa hic voluptate aut ipsam odit aperiam?</p>
    
    <p> <div class="envoyeur" style="background: aliceblue; padding: 1vh;">Alope</div>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla laboriosam dolorum deleniti est laborum quo cupiditate, voluptatem corrupti beatae eaque. Iste ratione odio culpa hic voluptate aut ipsam odit aperiam?</p>
   </form>
  </section>



  <script src="../script/comment.js"></script>

  <script >
   
  </script>
</body>
</html>