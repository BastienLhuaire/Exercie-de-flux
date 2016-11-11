<?php
	function home_action()
	{
		$taille=(isset($_GET['taille']))? $_GET['taille']: 3;
		if ($taille%2==0) {
			$taille--;
		}
		set_pyramide($taille);		
		$table=get_pyramide($taille);

	    include 'views/pyramide.php' ;
	}