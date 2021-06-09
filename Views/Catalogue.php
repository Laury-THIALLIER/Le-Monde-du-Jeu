  <body class="scroll">
  <?php include("Include/NavbarCatalogue.php"); ?>
  <br><br><br><br><br>

  <!-- ==================== CATALOGUE ==================== -->
    <div class="container-fluid">
      <section class="row justify-content-center">

          <?php
            foreach ($lesLignes as $unJeu)
            {
              echo '<div class="col-lg-auto">
                      <a href="index.php?Views=Controllers&Type=Jeu&id='. $unJeu['IDJeu'] . '" style="text-decoration: none;">
                        <div class="card" style="width: 18rem;">
                          <img src="' . $unJeu['Image'] . '" class="card-img-top" alt="' . $unJeu['Nom'] . '" height="300px">
                          <div class="card-body">
                            <p class="card-text" style="text-align:center"><b><font size="+2">' . $unJeu['Nom'] . '</font></b></p>
                          </div>
                        </div>
                      </a>
                    </div>';
            }
          ?>

      </section>
    </div>
  </body>
</html>
