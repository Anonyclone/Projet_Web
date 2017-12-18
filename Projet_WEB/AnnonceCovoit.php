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
        <h1>Mise en ligne d'annonce de covoiturage</h1>
        <form>
            <div class="form-group-fluid">
              <label for="PrixPlace">Prix par place : </label>
              <input type="number" class="form-control" name="prixPlace">
            </div>
            <div class="form-group-fluid">
              <label for="LieuDepart">Lieu de départ : </label>
              <input type="text" class="form-control" name="depart" placeholder="Entrez le lieu de départ">
            </div>
            <div class="form-group-fluid">
               <label for="LieuArrivee">Lieu de d'arrivée : </label>
               <input type="text" class="form-control" name="arrivee" placeholder="Entrez le lieu d'arrivée">
            </div>
            <div class="form-group-fluid">         
                <label for="DateCovoit">Date du covoiturage : </label>
                <input type="date" class="form-control" name="dateCov">
            </div>
            <div class="form-group-fluid">
               <label for="HeureCovoit">Heure du covoiturage : </label>
               <input type="time" class="form-control" name="heureCov">
            </div>
            <div class="form-group-fluid">
              <label for="nbPlace">Nombre de place : </label>
              <input type="number" class="form-control" name="place">
              <small id="placeHelp" class="form-text text-muted">Entrez le nombre de place(s) dans votre véhicule.</small>
            </div>
            <div class="form-group-fluid">
              <label for="nbBaggage">Nombre de place pour baggage(s) : </label>
              <input type="number" class="form-control" name="baggage">
              <small id="baggageHelp" class="form-text text-muted">Entrez le nombre de baggage(s) qui peuvent rentrer dans votre véhicule.</small>
            </div>
            <div class="form-group-fluid">
              <label for="Duree">Durée : (calculée automatiquement avec)</label>
              <input type="time" class="form-control" name="duree">
            </div>
            <div class="form-group-fluid">
              <label for="TypeVehicule">Type de véhicule : </label>
                <select type="text" class="form-control" name="vehicule"><br/>
                    <option value="citadine">Citadine</option>
                    <option value="suv">SUV</option>
                    <option value="break">Break</option>
                    <option value="bus">Bus</option>
                </select>
            </div>
            <div class="form-group-fluid">
                <label for="Fumeur">Acceptez-vous les fumeurs ?</label>
                <label><input type="radio" name="fumeur" value="oui"/>Oui</label>
                <label><input type="radio" name="fumeur" value="non"/>Non</label>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </body>
</html>