  <body class="scroll" style="background-color: #fcfcfc;">
  <?php include("Include/NavbarCatalogue.php"); ?>
  <br><br><br><br><br>

      <?php
        if ($laRecherche!=null) {
          echo '<div class="container-fluid">
                  <section class="row justify-content-center">';
              foreach ($laRecherche as $Rechercher)
              {
                echo '<div class="col-lg-auto">
                        <a href="index.php?Views=Controllers&Type=Jeu&id='. $Rechercher['IDJeu'] . '" style="text-decoration: none;">
                          <div class="card" style="width: 18rem;">
                            <img src="' . $Rechercher['Image'] . '" class="card-img-top" alt="' . $Rechercher['Nom'] . '" height="300px">
                            <div class="card-body">
                              <p class="card-text" style="text-align:center"><b><font size="+2">' . $Rechercher['Nom'] . '</font></b></p>
                            </div>
                          </div>
                        </a>
                      </div>';
              }
            echo '</section>
                </div>';
        }
        else {
          echo '<br><br><center><img src="Images/Recherche.png" style="width: 30%;"></center>"';
        }
        ?>

  </body>
</html>
