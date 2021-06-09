<!-- ==================== NAVBAR ==================== -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
  <!-- Gauche -->
    <div class="nav-item">
       <a class="navbar-brand" href="index.php"><img src="Images/LeMondeduJeu.png" class="img-responsive" alt="Logo" width="115" title="Accueil"></a>
    </div>
  <!-- Milieu -->



    <div>
      <form class="form-inline nav-item" action="index.php?Views=Controllers&Type=Recherche" method="POST">
        <input class="form-control" type="search" name="q" placeholder="Rechercher" aria-label="Recherche" style="width:35em">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
  <!-- Droite -->
    <!-- Icone connexion modal -->
    <div class="nav-item">
      <ul class="navbar-nav">
        <div class="marg">
        </div>
        <?php if (isset($_SESSION['Login'])) { ?>
          <form class="form-signin" action="index.php?Views=Controllers&Type=Deconnexion" method="POST">
            <button class="btn btn-signin" type="submit"><i class="fas fa-sign-out-alt fa-2x over"></i></i></button>
          </form>
          <form class="form-signin" action="index.php?Views=Controllers&Type=Connexion" method="POST">
            <button class="btn btn-signin" type="submit"><i class="fas fa-user-circle fa-2x over"></i></button>
          </form>
        <?php } else { ?>

        <button type="button justify-content-right" class="btn" data-toggle="modal" data-target="#Modal">
          <i class="fas fa-user-circle fa-2x over"></i>
        </button> <?php } ?>
      </ul>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <br>
              <div style="text-align: center;">
                  <p class="fas fa-user-circle fa-3x center"></p>
              </div>
            <br><br>
            <form class="form-signin" action="index.php?Views=Controllers&Type=Connexion" method="POST">
              <input type="login" name="Login" class="form-control form-group" placeholder="Identifiant" required autofocus>
              <input type="password" name="Password" class="form-control form-group" placeholder="Mot de passe" required>
              <br>
              <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Se connecter</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
