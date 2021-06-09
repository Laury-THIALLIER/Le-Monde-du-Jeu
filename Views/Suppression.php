  <body class="scroll">
  <?php include("Include/NavbarCatalogue.php"); ?>
  <br><br><br><br>
  <center><a href="index.php?Views=Controllers&Type=Connexion" style="font-size: 25px">Menu</a></center>
  <br>
    <form action="index.php?Views=Controllers&Type=Suppression" method="POST">
    <?php
    echo '<table class="table table-sm table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col-3"><i class="far fa-trash-alt"></i></th>
                <th scope="col-3">#</th>
                <th scope="col-3">Nom</th>
                <th scope="col-3"></th>
              </tr>
            </thead>
            <tbody>';
    foreach ($lesLignes as $Jeux)
    {
      ?>
      <tr>
        <td><input type="checkbox" name="Supprimer[]" value="<?php echo $Jeux['IDJeu'] ?>"></td>
        <td> <?php echo $Jeux['IDJeu'] ?> </td>
        <td> <?php echo $Jeux['Nom'] ?> </td>
        <td><a href="index.php?Views=Controllers&Type=Suppression&id=' <?php echo $Jeux['IDJeu'] ?> '" style="color: red;"><i class="fas fa-times fa-lg" style="color: red;"></i></a></td>
      </tr>
      <?php
    }
    echo '</tbody></table>';
    ?>
    <center><input type="submit" value="SUPPRIMER LA SÉLECTION"></center><br>
    </form>
  </body>
</html>
