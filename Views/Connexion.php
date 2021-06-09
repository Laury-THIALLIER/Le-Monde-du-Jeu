  <body>

    <?php

      if (isset($_SESSION['Login']))
    {
      include("Include/NavbarJeu.php");
      echo '<br><p style="text-align: center; font-size: 35px;">Bienvenue ' . htmlspecialchars($_SESSION['Login']) . ' !</p>'; ?>
    <br><br><br>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-3 effet">
            <center>
              <a href="index.php?Views=Controllers&Type=Ajout" style="text-decoration: none;"><img src="Images/Ajouter.png" style="width: 50%;"><p style="font-size: 30px;">Ajouter</p></a>
            </center>
          </div>
          <div class="col-lg-3 effet">
            <center>
              <a href="index.php?Views=Controllers&Type=ListeDB" style="text-decoration: none;"><img src="Images/Modifier.png" style="width: 50%;"><p style="font-size: 30px;">Modifier</p></a>
            </center>
          </div>
          <div class="col-lg-3 effet">
            <center>
              <a href="index.php?Views=Controllers&Type=Suppression" style="text-decoration: none;"><img src="Images/Supprimer.png" style="width: 50%;"><p style="font-size: 30px;">Supprimer</p></a>
            </center>
          </div>
        </div>
      </div>
    </div>

    <?php } else {
      include("Accueil.php");
      echo '<br><br><br><div class="container" style="text-align: center;">
      <p style="text-align: center; font-size: 40px; color: #3e3e3e;">Informations incorrectes</p><img src="Images/Connexion.jpg">
    </div>'; }?>

  </body>
</html>
