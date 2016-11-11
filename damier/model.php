<?php

function set_damier($taille){ 
	$fichier = fopen('../data.txt', 'w+'); // ouvre un pointeur de fichier sur la première ligne
	//remplie le data.txt en fonction de la taille donnée
	for ($i=0; $i < $taille; $i++) { 
		for ($j=0; $j < $taille; $j++) { 
			if($j%2==1){
			    $char = ($i%2==1)? "#": "*"; 
			}else{
			    $char = ($i%2==1)? "*": "#"; 
			}
			fputs($fichier, $char);
		}	
		fputs($fichier, "\n");
	}
	fclose($fichier); // ferme le fichier
}
function get_damier($taille){
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
function draw_damier($taille,$table){
//taille proportionelle
	$dimension=(1/$taille)*500;
	for ($i=0; $i < Count($table); $i++) { 
		for ($j=0; $j < Count($table[$i]); $j++) { 
			//choix de la couleur
			if ($table[$i][$j]=="*") {
				$color="#FF96E3";
			}elseif($table[$i][$j]=="#"){
				$color="#29FFFF";
			}
			//dessin d'un carré
			echo "<rect x=".($j*$dimension)." y=".($i*$dimension)." width='$dimension' height='$dimension' fill='$color'/>";
		}
	}
}