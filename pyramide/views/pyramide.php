<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Pyramide</title>
	<link rel="stylesheet" href="/asset/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				</br>
				<form method="GET" action="/" class="form-inline">
					<div class="form-group">
						<!-- un input age(chiffre) -->
						<label for="taille">Taille de la pyramide : </label>
						<input class="form-control" type="number" name="taille" id="taille" placeholder="TAILLE" min="3" value="<?php echo $taille?? 3 ?>"/>
						<!-- un bouton envoyer -->
						<input type="submit" value="envoyer" class="btn btn-default"/>
					</div>
				</form>
			</div>
		</div>
	</br>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<svg width="500" height="500"><?php 
	    			draw_pyramide($taille,$table);
					?>
				</svg>
				<p>
				</p>
			</div>
		</div>
	</div>
</body>