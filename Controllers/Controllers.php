<?php

	require(dirname(__FILE__)."/../Functions/Functions.php");

	$Pdo = PdoDB::getPdoDB();

	if (isset($_REQUEST["Type"]))
	{
		$Type = $_REQUEST["Type"];
		switch ($Type)
		{
      case "Jeux d'ambiance" :
				$lesLignes = $Pdo->getJeuxAmbiance();
				include (dirname(__FILE__)."/../Views/Catalogue.php");
				break;

			case "Jeux de strategie" :
				$lesLignes = $Pdo->getJeuxStrategie();
				include (dirname(__FILE__)."/../Views/Catalogue.php");
				break;

			case "Jeux pour enfants" :
				$lesLignes = $Pdo->getJeuxEnfants();
				include (dirname(__FILE__)."/../Views/Catalogue.php");
				break;

      case "Jeux cooperatifs" :
				$lesLignes = $Pdo->getJeuxCooperatifs();
				include (dirname(__FILE__)."/../Views/Catalogue.php");
				break;

      case "Jeux de carte" :
				$lesLignes = $Pdo->getJeuxCarte();
				include (dirname(__FILE__)."/../Views/Catalogue.php");
				break;

      case "Voir tout" :
				$lesLignes = $Pdo->getVoirTout();
				include (dirname(__FILE__)."/../Views/Catalogue.php");
				break;

			case "Jeu" :
				$id = $_REQUEST['id'];
				$leJeu = $Pdo->getJeu($id);
				include (dirname(__FILE__)."/../Views/Jeu.php");
				break;

			case "Connexion" :
				if (!isset($_SESSION['Login'])) {
					$login = $_POST['Login'];
					$mdp = $_POST['Password'];
					$laConnexion = $Pdo->getConnexion($login, $mdp);
				}
				include (dirname(__FILE__)."/../Views/Connexion.php");
				break;

			case "Deconnexion" :
				$Pdo->getDeconnection();
				include 'Views/Accueil.php';
				break;

			case "Ajout" :
				if(isset($_REQUEST['Nom'])) {
					$Nom = $_REQUEST['Nom'];
					$PrixMoy = $_REQUEST['PrixMoy'];
					$NbrJoueurMin = $_REQUEST['NbrJoueurMin'];
					$NbrJoueurMax = $_REQUEST['NbrJoueurMax'];
					$Duree = $_REQUEST['Duree'];
					$AgeMin = $_REQUEST['AgeMin'];
					$Image = $_REQUEST['Image'];
					$Video = $_REQUEST['Video'];
					$Note = $_REQUEST['Note'];
					$IDT = $_REQUEST['IDT'];
					$Pdo->getAjout($Nom, $PrixMoy, $NbrJoueurMin, $NbrJoueurMax, $Duree, $AgeMin, $Image, $Video, $Note, $IDT);
				}
				include (dirname(__FILE__)."/../Views/Ajout.php");
				break;

			case "ListeDB" :
				$lesLignes = $Pdo->getVoirTout();
				include (dirname(__FILE__)."/../Views/ListeBD.php");
				break;

			case "Modification" :
				if(isset($_REQUEST['Nom'])) {
					$ID = $_REQUEST['ID'];
					$Nom = $_REQUEST['Nom'];
					$PrixMoy = $_REQUEST['PrixMoy'];
					$NbrJoueurMin = $_REQUEST['NbrJoueurMin'];
					$NbrJoueurMax = $_REQUEST['NbrJoueurMax'];
					$Duree = $_REQUEST['Duree'];
					$AgeMin = $_REQUEST['AgeMin'];
					$Image = $_REQUEST['Image'];
					$Video = $_REQUEST['Video'];
					$Note = $_REQUEST['Note'];
					$IDT = $_REQUEST['IDT'];
					$Pdo->getModification($ID, $Nom, $PrixMoy, $NbrJoueurMin, $NbrJoueurMax, $Duree, $AgeMin, $Image, $Video, $Note, $IDT);
				}
				$Pdo->getModification();
				$lesLignes = $Pdo->getVoirTout();
				include (dirname(__FILE__)."/../Views/Modification.php");
				break;

			case "Suppression" :
				if(isset($_REQUEST['id'])) {
					$id = $_REQUEST['id'];
					$Pdo->getSuppression($id);
				}
				if (isset($_REQUEST['Supprimer'])) {
					$CheckSuppr = $_REQUEST['Supprimer'];
					$Pdo->getSupprMultiple($CheckSuppr);
				}
				$lesLignes = $Pdo->getVoirTout();
				include (dirname(__FILE__)."/../Views/Suppression.php");
				break;

			case "Recherche":
				if (isset($_POST['q'])) {
					$Recherche = $_POST['q'];
					$laRecherche = $Pdo->getRecherche($Recherche);
				}
				else
					$laRecherche = $Pdo->getVoirTout();
				include (dirname(__FILE__)."/../Views/Recherche.php");
				break;

			default:
				include "Views/404.php";
				break;
		}
	}

?>
