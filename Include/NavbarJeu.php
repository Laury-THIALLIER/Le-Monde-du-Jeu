<!-- ==================== NAVBAR ==================== -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
    <a class="navbar-brand" href="index.php"><img src="Images/LeMondeduJeu.png" class="img-responsive logo" alt="Logo" title="Accueil"></a>
      <center>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?Views=Controllers&Type=Jeux d'ambiance">Jeux d'ambiance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?Views=Controllers&Type=Jeux de strategie">Jeux de stratégie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?Views=Controllers&Type=Jeux pour enfants">Jeux pour enfants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?Views=Controllers&Type=Jeux cooperatifs">Jeux coopératifs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?Views=Controllers&Type=Jeux de carte">Jeux de carte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?Views=Controllers&Type=Voir tout">Voir tout</a>
          </li>
        </ul>
      </center>
    <form class="form-inline nav-item" action="index.php?Views=Controllers&Type=Recherche" method="POST">
      <input class="form-control" type="search" name="q" placeholder="Rechercher" aria-label="Search" style="width:250px">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </nav>
