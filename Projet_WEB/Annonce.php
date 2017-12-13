<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire pour mettre en ligne une annonce</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Mise en ligne d'annonce</h1>
        <form action="cible.php" method="post">
        <p>
            <B>Remplissez le formulaire suivant afin de mettre en ligne votre annonce de trajet</B><br/>


            <blockquote>Lieu de départ : <blockquote><input type="text" name="depart"><br/></blockquote></blockquote>
            <blockquote>Lieu de d'arrivée : <blockquote><input type="text" name="arrivee"><br/></blockquote></blockquote>
            <blockquote>Date du covoiturage : <blockquote><input type="date" name="dateCov"><br/></blockquote></blockquote>
            <blockquote>Heure du covoiturage : <blockquote><input type="time" name="heureCov"><br/></blockquote></blockquote>
            <blockquote>Nombre de place : <blockquote><input type="number" name="place"><br/></blockquote></blockquote> 
            <blockquote>Nombre de place pour baggage(s) : <blockquote><input type="number" name="baggage"><br/></blockquote></blockquote> 
            <blockquote>Durée : (calculée automatiquement avec)<blockquote><input type="time" name="duree"><br/></blockquote></blockquote>
            <blockquote>Type de véhicule :  
              <select type="text" name="vehicule"><br/>
                  <option value="citadine">Citadine</option>
                  <option value="suv">SUV</option>
                  <option value="break">Break</option>
                  <option value="bus">Bus</option>
              </select></blockquote></blockquote>
            <blockquote><p>Acceptez-vous les fumeurs ?</p>
            <blockquote><p><label><input type="radio" name="fumeur" value="oui"/>Oui</label>
            <label><input type="radio" name="fumeur" value="non"/>Non</label></p></blockquote></blockquote>
            <blockquote><input type="submit" value="Valider"></blockquote>
        </p>
    </body>
</html>