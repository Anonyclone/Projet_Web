<<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire pour trouver en ligne une annonce de location</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    </head>
	<body>
		<h1>Trouver une annonce de location </h1>
		<form>
			<div class="form-group-fluid">
				<label for="Location">Lieu de location : </label>
				<input type="text" class="form-control" name="lieu" />
			</div>
			<div class="form-group-fluid">
				<label for="Location">Type de location : </label>
				<select type="text" name="location">
		            <option value="velo">Vélo</option>
		            <option value="voiture">Voiture</option>
		            <option value="trotinette">Trotinette</option>
		            <option value="dragon">Dragon</option>
	       		</select>
				<input type="text" class="form-control" name="location" />
			</div>
			<div class="form-group-fluid">
				<label for="Date">Date : </label>
				<input type="date" class="form-control" name="date" />
			</div>
			<div class="form-group-fluid">
				<label for="DureeDispo">Durée de disponibilité : </label><!--Requête sql pour recup le bon champ -->
				<select type="text" name="dureeDispo">
		        	<option value="heure">Heure(s)</option>
		            <option value="jour">Jour(s)</option>
		            <option value="semaine">Semaine(s)</option>
		            <option value="mois">Mois</option>
		            <option value="an">An(s)</option>
      			</select>
      			<input type="number" class="form-control" name="duree">
			<button type="submit" class="btn btn-primary" value="ChercherLocation"/>Chercher un trajet</button> <button type="submit" class="btn btn-primary" value="Retour">Retour</button>
		</form>
	</body>
</html>