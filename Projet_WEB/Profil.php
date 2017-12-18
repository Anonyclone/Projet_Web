<!DOCTYPE html>
<html>
    <head>
        <title>Profil</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    </head>
	<body>
        <h1>Création de votre profil</h1>
		<form>
			<div class="form-group">
				<label for="Avatar">Avatar : </label>
				<img src="cat.png" height="180px" width="200px" />
				<input type="submit" class="btn btn-primary" value="Modifier" />
			</div>
			<div class="form-group">
				<label for="Sexe">Sexe : </label>
					<select type="text" class="form-control" name="sexe"><br/>
		    			<option value="homme" readonly>Homme</option>
		    			<option value="femme" readonly>Femme</option>
		    		</select>
		    </div>
		    <div class="form-group">
				<label for="Nom">Nom : </label>
				<input type="text" class="form-control" name="nom" readonly/>
			</div>
			<div class="form-group">
				<label for="Prenom">Prénom : </label>
				<input type="text" class="form-control" name="prenom" readonly/>
			</div>	
			<div class="form-group">
				<label for="DateNais">Date de naissance : </label><!--calcul bdd pour l'age -->
				<input type="date" class="form-control" name="dateNais" readonly/>
			</div>
			<div class="form-group">
				<label for="NumRue">Numero de rue :</label>
				<input type="number" class="form-control" name="numRue" readonly/>
			</div>
			<div class="form-group">
				<label for="Adresse">Adresse : </label>
				<input type="text" class="form-control" name="adresse" readonly>
			</div>
			<div class="form-group">
				<label for="CP">Code postal : </label>
				<input type="text" class="form-control" name="cp" readonly>
			</div>
			<div class="form-group">
				<label for="Ville">Ville : </label>
				<input type="text" class="form-control" name="ville" readonly>
			</div>
			<div class="form-group">
				<label for="Description">Découvrez-moi : </label>
				<textarea readonly>Description</textarea>
			</div>
			<div class="form-group">
				<label for="Permis">Permis : </label>
				<label><input type="radio" name="permis" value="oui" readonly />Oui</label>
				<label><input type="radio" name="permis" value="non" readonly />Non</label>
			</div>
			<div class="form-group">
				<label for="VehiculeRadio">Véhicule : </label>
				<label><input type="radio" name="vehiculeRadio" value="oui" readonly />Oui</label>
				<label><input type="radio" name="vehiculeRadio" value="non" readonly />Non</label>
			</div>
			<button type="submit" class="btn btn-primary" value="Edit"/>Editer</form> <button type="submit" class="btn btn-primary" value="Retour">Retour</button>
		</form>
	</body>
</html>