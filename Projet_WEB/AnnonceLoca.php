<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire pour mettre en ligne une annonce location</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Mise en ligne d'annonce de location</h1>
        <form>
            <div class="form-group">
              <label for="PrixPar">Prix par : </label>
              <select type="text" name="PrixPar"><br/>
                    <option value="heure">Heure</option>
                    <option value="jour">Jour</option>
                    <option value="semaine">Semaine</option>
                    <option value="mois">Mois</option>
                    <option value="an">An</option>
                </select>
              <input type="number" class="form-control" name="prixPar">
            </div>
            <div class="form-group">
              <label for="TypeLocation">Type de location : </label>
                <select class="form-control" type="text" name="location">
                    <option value="velo">Vélo</option>
                    <option value="voiture">Voiture</option>
                    <option value="trotinette">Trotinette</option>
                    <option value="dragon">Dragon</option>
                </select>
            </div>
            <div class="form-group">
              <label for="LieuDispo">Lieu de disponibilité : </label>
              <input type="text" class="form-control" name="lieuDispo" placeholder="Entrez le lieu de rendez-vous">
            </div>
            <div class="form-group">      
                <label for="DateDispo">Disponible à partir de (jour) : </label>
                <input type="date" class="form-control"name="dateDispo">
            </div>
            <div class="form-group">
                <label for="HeureDispo">Disponible à partir de (heure) : </label>
                <input type="time" class="form-control" name="heureDispo">
            </div>
            <div class="form-group">
                <label for="DureeDispo">Durée de disponibilité : </label>
                <label for="DispoEn"> </label>
                    <select type="text" name="dispoEn"><br/>
                    <option value="heure">Heure</option>
                    <option value="jour">Jour</option>
                    <option value="semaine">Semaine</option>
                    <option value="mois">Mois</option>
                    <option value="an">An</option>
                </select>
                <input type="number" class="form-control" name="dureeDispo">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </body>
</html>