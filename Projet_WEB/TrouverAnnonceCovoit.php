<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire pour mettre en ligne une annonce de covoiturage</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    </head>
	<body>
		<h1>Trouver une annonce </h1>
		<form>
			<div class="form-group-fluid">
				<label for="VDep">Ville de départ : </label>
				<input type="text" class="form-control" name="vDep" />
			</div>
			<div class="form-group-fluid">
				<label for="VArr">Ville de d'arrivée : </label>
				<input type="text" class="form-control" name="vArr" />
			</div>
			<div class="form-group-fluid">
				<label for="Date">Date : </label>
				<input type="date" class="form-control" name="date" />
			</div>
			<button type="submit" value="ChercherTrajet"/>Chercher un trajet</button> <button type="submit" value="Retour">Retour</button>
		</form>
	</body>
</html>
