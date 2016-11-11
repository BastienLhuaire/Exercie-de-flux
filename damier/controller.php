<?php
	function home_action()
	{
		//taille = 4 par default 
		$taille = (isset($_GET['taille']))? $_GET['taille']: 4;
		set_damier($taille);
		$table=get_damier($taille);

	    include 'views/damier.php' ;
	}