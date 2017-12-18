@extends('layouts.app')
@section('title')
    Rechercher une annonce
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <p class="lead">Rechercher une annonce</p>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#location">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#test">Covoiturage</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="location" class="tab-pane">
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
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="test">
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
                            <button type="submit" class="btn btn-primary" value="ChercherTrajet"/>Chercher un trajet</button> <button type="submit" class="btn btn-primary" value="Retour">Retour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop