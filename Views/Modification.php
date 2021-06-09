<body>
  <?php include("Include/NavbarCatalogue.php"); ?>
  <br><br><br><br>
  <center><a href="index.php?Views=Controllers&Type=Connexion" style="font-size: 25px">Menu</a></center>
  <br>
  	<br><form action="index.php?page=Controllers&Type=Modification" method=POST>

    <br>
      <form class="form-signin" action="index.php?Views=Controllers&Type=Ajout" method="POST">
        <input type="text" name="Nom" class="form-control form-group" placeholder="Nom" value=" <?php echo $Nom ?> " required autofocus>
        <input type="number" name="PrixMoy" class="form-control form-group" placeholder="Prix moyen" value=" <?php echo $PrixMoy ?> " required>
        <input type="number" name="NbrJoueurMin" class="form-control form-group" placeholder="Nombre minimum de joueur" value=" <?php echo $NbrJoueurMin ?> " required>
        <input type="number" name="NbrJoueurMax" class="form-control form-group" placeholder="Nombre maximum de joueur" value=" <?php echo $NbrJoueurMax ?> " required>
        <input type="number" name="Duree" class="form-control form-group" placeholder="Durée" value=" <?php echo $Duree ?> " required>
        <input type="number" name="AgeMin" class="form-control form-group" placeholder="Âge minimum" value=" <?php echo $AgeMin ?> " required>
        <input type="url" name="Image" class="form-control form-group" placeholder="Lien de l'image" value=" <?php echo $Image ?> " required>
        <input type="text" name="Video" class="form-control form-group" placeholder="Lien de la vidéo" value=" <?php echo $Video ?> " required>
        <input type="number" name="Note" class="form-control form-group" placeholder="Note" value=" <?php echo $Note ?> " required>
        <input type="number" name="IDT" class="form-control form-group" placeholder="Type" value=" <?php echo $IDT ?> " required>
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Modifier</button>
      </form>
    <br>

    <!-- <select name="listeTypeAct" size="1" >;
      <?php
      /*if ($lesLignesTypeAct)
  	  {
    		foreach($lesLignesTypeAct as $uneTypeAct)
    		{
    			?>
    			<option value = "<?php echo $uneTypeAct["id"]?> " ><?php echo $uneTypeAct["lib"]  ?>  </option>
                <?php

    		}
  	  }  $type = $uneActivite['idtype'];*/ ?>
  	</select> -->
  	<br>
  	<p><input type="submit" value = "Modifier"> <input type="reset" value="Annuler"></p>
  	</form>

  </div>
