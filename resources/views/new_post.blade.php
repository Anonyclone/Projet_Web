@extends('layouts.app')
@section('title')
    Poster une annonce
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <p class="lead">Poster une annonce</p>
            </div>
            <div class="card-body">

                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#location">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#covoiturage">Covoiturage</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="location" class="tab-pane">
                        <form>
                            <p class="lead underline">Caractéristiques</p>
                            <div class="form-group">
                                <label for="title">Titre :</label>
                                <input type="text" name="title" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="price">Tarif à l'heure :</label>
                                <input type="number" class="form-control" name="price">
                            </div>
                            <div class="form-group">
                                <label for="TypeLocation">Type de location :</label>
                                <select class="form-control" type="text" name="location">
                                    <option value="velo">Vélo</option>
                                    <option value="voiture">Voiture</option>
                                    <option value="trotinette">Trotinette</option>
                                    <option value="dragon">Dragon</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description :</label>
                                <textarea type="text" class="form-control" name="description"></textarea>
                            </div>
                            <p class="lead underline">Disponibilité</p>
                            <div class="form-group">
                                <label for="LieuDispo">Le lieu :</label>
                                <input type="text" class="form-control" name="lieuDispo" placeholder="Entrez le lieu de rendez-vous">
                            </div>
                            <div class="form-group">
                                <label for="date_begin">À partir du</label>
                                <input type="date" class="form-control" name="date_begin">
                            </div>
                            <div class="form-group">
                                <label for="date_end">jusqu'à</label>
                                <input type="date" class="form-control" name="date_end">
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Valider</button>
                        </form>
                    </div>
                    <div id="covoiturage" class="tab-pane">
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
                            <button type="submit" class="btn btn-outline-primary">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop