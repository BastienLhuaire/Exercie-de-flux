<?php

function set_pyramide($taille){ 
	$fichier = fopen('../data.txt', 'w+'); // ouvre un pointeur de fichier sur la première ligne
	//remplie le data.txt en fonction de la taille donnée
	$hauteur=(int)$taille/2;
	$result="";
	$ligne="";
	for ($i=0; $i < $hauteur; $i++) { 
		for ($j=0; $j < $taille; $j++) { 
			if($j<$i || $j+1>$taille-$i){
			    $char = "#"; 
			}else{
			    $char = "*"; 
			}
			$ligne.=$char;
		}	
		$ligne.="\n";
		//permet d'ajouter chaque ligne au début du résultat
		$result=$ligne.$result;
		$ligne="";
	}
	fputs($fichier, $result);
	fclose($fichier); // ferme le fichier
}
function get_pyramide($taille){
	$handle = fopen('../data.txt', 'r');
	$table=[];
	//remplie la table grace au data.txt
	for ($i=0; $i < $taille; $i++) { 
		$line = fgets($handle);
		$table[]=[];
		for ($j=0; $j < strlen($line)-1; $j++) { 
			$table[$i][]=$line[$j];
		}
	}
	return $table;
}
function draw_pyramide($taille,$table){
//taille proportionelle
	$dimension=(1/$taille)*500;
	for ($i=0; $i < Count($table); $i++) { 
		for ($j=0; $j < Count($table[$i]); $j++) { 
			//choix de la couleur
			$r=$i;
			$g=$i*2;
			$b=$i*5;
			if ($table[$i][$j]=="*") {
				//dessin d'un carré
				echo "<rect x=".($j*$dimension)." y=".($i*$dimension)." width='$dimension' height='$dimension' fill='rgb($r,$g,$b)'/>";
			}
		}
	}
}