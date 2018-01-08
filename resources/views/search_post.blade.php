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
                    {!! Form::open(['url' => '/chercher/annonce/post', 'id' => 'form_location_search']) !!}
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
                    </div>
                    <!--
                    <div class="form-group">
                        <label for="DureeDispo">Durée de disponibilité : </label>
                        <select type="text" name="dureeDispo" class="cust">
                            <option value="heure">Heure(s)</option>
                            <option value="jour">Jour(s)</option>
                            <option value="semaine">Semaine(s)</option>
                            <option value="mois">Mois</option>
                            <option value="an">An(s)</option>
                        </select>
                        <input type="number" class="form-control" name="duree">
                    </div> -->
                {!! Form::close() !!}
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                <a class="btn btn-secondary float-right" type="submit" href="#" onclick="document.getElementById('form_location_search').submit()">Rechercher <i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@stop