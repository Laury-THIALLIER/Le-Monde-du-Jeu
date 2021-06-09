  <body class="scroll">
  <?php include("Include/NavbarCatalogue.php"); ?>
  <br><br><br><br>
  <center><a href="index.php?Views=Controllers&Type=Connexion" style="font-size: 25px">Menu</a></center>
  <br>
    <form class="form-signin" action="index.php?Views=Controllers&Type=Ajout" method="POST">
      <input type="text" name="Nom" class="form-control form-group" placeholder="Nom" required autofocus>
      <input type="number" name="PrixMoy" class="form-control form-group" placeholder="Prix moyen" required>
      <input type="number" name="NbrJoueurMin" class="form-control form-group" placeholder="Nombre minimum de joueur" required>
      <input type="number" name="NbrJoueurMax" class="form-control form-group" placeholder="Nombre maximum de joueur" required>
      <input type="number" name="Duree" class="form-control form-group" placeholder="Durée" required>
      <input type="number" name="AgeMin" class="form-control form-group" placeholder="Âge minimum" required>
      <input type="url" name="Image" class="form-control form-group" placeholder="Lien de l'image" required>
      <input type="text" name="Video" class="form-control form-group" placeholder="Lien de la vidéo" required>
      <input type="number" name="Note" class="form-control form-group" placeholder="Note" required>
      <input type="number" name="IDT" class="form-control form-group" placeholder="Type" required>
      <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ajouter</button>
    </form>
  <br>

      <?php
        if (isset($_POST['Nom'])) {
          echo '<center><p style="font-size: 25px">Le jeu a bien été ajouté !</p></center>';
        }
      ?>

  </body>
</html>
