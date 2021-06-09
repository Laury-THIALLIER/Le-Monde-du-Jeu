<?php

	class PdoDB
	{
		private static $serveur='mysql:host=localhost';
		private static $bdd='dbname=lemondedujeu';
		private static $user='root';
		private static $mdp='';
		private static $monPdo;
		private static $monPdoDB=null;

  // --------- Pas toucher ---------

		private function __construct()
		{
	    PdoDB::$monPdo = new PDO(PdoDB::$serveur.';'.PdoDB::$bdd, PdoDB::$user, PdoDB::$mdp);
			PdoDB::$monPdo->query("SET CHARACTER SET utf8");
		}
		public function _destruct()
		{
			PdoDB::$monPdo = null;
		}

		public  static function getPdoDB()
		{
			if(PdoDB::$monPdoDB==null)
			{
				PdoDB::$monPdoDB= new PdoDB();
			}
			return PdoDB::$monPdoDB;
		}

  // --------- Début des trucs à toucher ---------
  // --------- Catalogue ---------

    public function getJeuxAmbiance()
    {
      $req = "SELECT IDJeu, Image, Nom FROM jeu WHERE ID_Type = 1";
      //echo $req;
      $res = PdoDB::$monPdo->query($req);
      $lesLignes = $res->fetchAll();
      return $lesLignes;
    }

    public function getJeuxStrategie()
    {
      $req = "SELECT IDJeu, Image, Nom FROM jeu WHERE ID_Type = 2";
      //echo $req;
      $res = PdoDB::$monPdo->query($req);
      $lesLignes = $res->fetchAll();
      return $lesLignes;
    }

    public function getJeuxEnfants()
    {
      $req = "SELECT IDJeu, Image, Nom FROM jeu WHERE ID_Type = 3";
      //echo $req;
      $res = PdoDB::$monPdo->query($req);
      $lesLignes = $res->fetchAll();
      return $lesLignes;
    }

    public function getJeuxCooperatifs()
    {
      $req = "SELECT IDJeu, Image, Nom FROM jeu WHERE ID_Type = 4";
      //echo $req;
      $res = PdoDB::$monPdo->query($req);
      $lesLignes = $res->fetchAll();
      return $lesLignes;
    }

    public function getJeuxCarte()
    {
      $req = "SELECT IDJeu, Image, Nom FROM jeu WHERE ID_Type = 5";
      //echo $req;
      $res = PdoDB::$monPdo->query($req);
      $lesLignes = $res->fetchAll();
      return $lesLignes;
    }

		public function getVoirTout()
		{
			$req = "SELECT IDJeu, Image, Nom FROM jeu";
			//echo $req;
			$res = PdoDB::$monPdo->query($req);
			$lesLignes = $res->fetchAll();
			return $lesLignes;
    }

    // --------- Jeu ---------

    public function getJeu($id)
    {
      $req = "SELECT * FROM jeu WHERE IDJeu = " . $id;
      $res = PdoDB::$monPdo->query($req);
      //echo $req;
      $leJeu = $res->fetch();
      return $leJeu;
    }

		// --------- Connexion ---------

		public function getConnexion($login, $mdp)
		{
			$req = "SELECT * FROM admin";
			$res = PdoDB::$monPdo->query($req);
			$laConnexion = false;
			foreach ($res as $uneConnexion) {
		    if ($login == $uneConnexion['Login'] && $mdp == $uneConnexion['Mdp']) {
					$_SESSION['Login'] = $login;
					$_SESSION['Mdp'] = $mdp;
					$laConnexion = true;
					return $laConnexion;
				}
			}
			return $laConnexion;
		}

		public function getDeconnection()
		{
			session_destroy();
		}

		// --------- Recherche ---------

		public function getRecherche($Recherche)
		{
			$req = "SELECT IDJeu, Image, Nom FROM jeu WHERE Nom LIKE '%" . $Recherche . "%'";
      $res = PdoDB::$monPdo->query($req);
      //echo $req;
      $laRecherche = $res->fetchAll();
			$Nombre = COUNT($laRecherche);
			if ($Nombre!=0)
				return $laRecherche;
			else
				return null;
		}

		// --------- Menu Admin ---------

		public function getAjout($Nom, $PrixMoy, $NbrJoueurMin, $NbrJoueurMax, $Duree, $AgeMin, $Image, $Video, $Note, $IDT)
		{
			$req = "INSERT INTO jeu(Nom, PrixMoy, NbrJoueurMin, NbrJoueurMax, Duree, AgeMin, Image, Video, ID_Note, ID_Type)
			VALUES('$Nom', $PrixMoy, $NbrJoueurMin, $NbrJoueurMax, $Duree, $AgeMin, '$Image', '$Video', $Note, $IDT)";
			PdoDB::$monPdo->exec($req);
			//echo $req;
		}

		public function getModification($ID, $Nom, $PrixMoy, $NbrJoueurMin, $NbrJoueurMax, $Duree, $AgeMin, $Image, $Video, $Note, $IDT)
		{
			$req = "UPDATE jeu SET Nom = $Nom, Prixmoy = $PrixMoy, NbrJoueurMin = $NbrJoueurMin, NbrJoueurMax = $NbrJoueurMax, Duree = $Duree, AgeMin = $AgeMin, Image = $Image, Video = $Video, ID_Note = $Note, ID_Type = $IDT WHERE IDJeu = $ID";
			PdoDB::$monPdo->exec($req);
		}

		public function getSuppression($id)
		{
			$req = "DELETE FROM jeu WHERE IDJeu = $id";
			PdoDB::$monPdo->exec($req);
			//echo $req;
		}

		public function getSupprMultiple($Suppr)
		{
			if (COUNT($Suppr) != 0)
			{
				for ($i=0; $i < COUNT($Suppr); $i++)
				{
					$req = "DELETE FROM jeu WHERE IDJeu = $Suppr[$i]";
					//echo $req;
					PdoDB::$monPdo->exec($req);
				}
			}
		}
	}

?>
