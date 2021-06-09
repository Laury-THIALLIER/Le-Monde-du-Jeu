<?php

	session_start();

	include("Include/Head.php");

	if (isset($_REQUEST['Views']))
	{
		$Page=$_REQUEST['Views'];
		include (dirname(__FILE__)."/Controllers/".$Page.".php");
	}
    else
    {
		include 'Views/Accueil.php';
    }

?>
