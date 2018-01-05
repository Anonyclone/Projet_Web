@extends('layouts.app')
@section('title')
    Rechercher une location
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <p class="lead">Rechercher une annonce de location</p>
            </div>
            <div class="card-body">
                <!--
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#location">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#covoiturage">Covoiturage</a>
                    </li>
                </ul> -->

                <form id="form_location_search">
                    <p class="lead underline">Caractéristiques</p>
                    <div class="form-group">
                        <label for="Location">Lieu de location : </label>
                        <input type="text" class="form-control" name="lieu" />
                    </div>
                    <div class="form-group">
                        <label for="Location">Type de location : </label>
                        <select type="text" name="location" class="custom-select">
                            <option value="velo">Vélo</option>
                            <option value="moto">Moto</option>
                            <option value="voiture">Voiture</option>
                            <option value="autre">Autre</option>
                        </select>
                        <input type="text" class="form-control" name="location" />
                    </div>
                    <div class="form-group">
                        <label for="Date">Date : </label>
                        <input type="date" class="form-control" name="date" />
                    </div>
                    <div class="form-group">
                        <label for="DureeDispo">Durée de disponibilité : </label><!--Requête sql pour recup le bon champ -->
                        <select type="text" name="dureeDispo" class="cust">
                            <option value="heure">Heure(s)</option>
                            <option value="jour">Jour(s)</option>
                            <option value="semaine">Semaine(s)</option>
                            <option value="mois">Mois</option>
                            <option value="an">An(s)</option>
                        </select>
                        <input type="number" class="form-control" name="duree">
                    </div>
                </form>
                <!--
                <div class="tab-pane" id="covoiturage">
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
                -->
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                <a class="btn btn-secondary float-right" type="submit" href="#" onclick="document.getElementById('form_location_search').submit()">Rechercher <i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@stop