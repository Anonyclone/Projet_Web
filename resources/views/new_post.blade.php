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
                        <a class="nav-link" data-toggle="pill" href="#test">Covoiturage</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="location" class="tab-pane">

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
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop