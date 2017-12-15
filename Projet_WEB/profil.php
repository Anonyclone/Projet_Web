<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Profile</title>
<body>
	<header><h1>Profile</h1></header>

<form action="" method="post">

	<p>Avatar : </p>
	<img src="cat.png" height="180px" width="200px" />
	<br/><input type="submit" value="Modifier" />
	<p>Sexe : 
		<select  name="sexe">
    		<option value="homme" readonly>Homme</option>
    		<option value="femme" readonly>Femme</option>
    	</select>
	</p>
	<p>Nom :
		<input type="text" name="nom" readonly/>
	</p>
	<p>Prénom :
		<input type="text" name="prenom" readonly/>
	</p>	
	<p>Date de naissance : <!--calcul bdd pour l'age -->
		<input type="date" name="date" readonly/>
	</p>
	<br/>
	<p>Numero de rue :
		<input type="number" name="numRue" readonly/>
	</p>
	<p>Adresse : 
		<input type="text" name="adresse" readonly>
	</p>
	<p>Code postal :
		<input type="text" name="cp" readonly>
	</p>
	<p>Ville : 
		<input type="text" name="ville" readonly>
	</p>
	<br/>
	<p>Découvrez-moi : 
		<textarea readonly>Description</textarea> 
	</p>
	<br/>
	<p>Permis :
		<input type="radio" name="oui" readonly />Oui
		<input type="radio" name="non" readonly />Non<br/>
	</p>
	<p>Véhicule : 
		<input type="radio" name="oui" readonly />Oui
		<input type="radio" name="non" readonly />Non<br/>
	</p>
	<br/><br/>
		<input type="submit" value="Edit"/> <input type="submit" value="Retour">
</form>
</body>
</html>