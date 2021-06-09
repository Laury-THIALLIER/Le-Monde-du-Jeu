<body class="scroll">
<?php include("Include/NavbarCatalogue.php"); ?>
<br><br><br><br>
<center><a href="index.php?Views=Controllers&Type=Connexion" style="font-size: 25px">Menu</a></center>
<br>
  <?php
  echo '<table class="table table-sm table-hover">
          <thead class="thead-dark">
            <tr>
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
      <td> <?php echo $Jeux['IDJeu'] ?> </td>
      <td> <?php echo $Jeux['Nom'] ?> </td>
      <td><a href="index.php?Views=Controllers&Type=Modification&id=' <?php echo $Jeux['IDJeu'] ?> '" style="color: red;"><i class="fas fa-edit"></i></a></td>
    </tr>
    <?php
  }
  echo '</tbody></table>';
  ?>
</body>
</html>
