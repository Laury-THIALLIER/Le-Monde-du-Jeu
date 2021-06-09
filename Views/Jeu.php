  <body>
    <?php include("Include/NavbarJeu.php");
        echo '<div class="container-fluid centre-vertical">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col align-self-center">
                      <center>
                        <img class="img" src="' . $leJeu['Image'] . '" max-height="auto" width="85%">
                      </center>
                    </div>

                    <div class="col">
                      <center>
                        <h1 class="queries-nom"><b>' . $leJeu['Nom'] . '</b></h1>
                        <div>
                        <div class="queries-star">';
                        switch ($leJeu['ID_Note']) {
                          case 1:
                            echo
                            '<span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>';
                          break;
                          case 2:
                            echo
                            '<span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>';
                          break;
                          case 3:
                            echo
                            '<span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>';
                          break;
                          case 4:
                            echo
                            '<span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>';
                          break;
                          case 5:
                            echo
                            '<span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>';
                          break; }
                      echo '</div>
                      </div>
                      </center>
                      <hr style="height: 2px; color: grey; background-color: grey; width: 100%; border: none;">
                      <center>
                        <h2 style="text-align:center" class="prix queries-prix"><b>Prix moyen : <span>' . $leJeu['PrixMoy'] . '€</span></b></h2>
                      </center>
                      <br>
                      <div class="container-fluid">
                        <font size="+1">
                          <div class="row justify-content-around queries-detail">

                              <div class="row align-items-center">
                                <i class="fas fa-user"></i>&nbsp;
                                <div style="border: 2px solid black; border-radius: 5px;">
                                  &ensp;' . $leJeu['NbrJoueurMin'] . ' à ' . $leJeu['NbrJoueurMax'] . ' joueurs&ensp;
                                </div>
                              </div>

                              <div class="row align-items-center">
                                <i class="fas fa-clock"></i>&nbsp;
                                <div style="border: 2px solid black; border-radius: 5px;">
                                  &ensp;Environ ' . $leJeu['Duree'] . ' minutes&ensp;
                                </div>
                              </div>

                              <div class="row align-items-center">
                                <i class="fas fa-address-card"></i>&nbsp;
                                <div style="border: 2px solid black; border-radius: 5px;">
                                  &ensp;A partir de ' . $leJeu['AgeMin'] . ' ans&ensp;
                                </div>
                              </div>
                            </div>
                        </font>
                      </div>
                      <hr style="height: 2px; color: grey; background-color: grey; width: 100%; border: none;">

                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="' . $leJeu['Video'] . '" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>';
    ?>
  </body>
</html>
