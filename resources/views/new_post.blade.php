@extends('layouts.app')
@section('title')
    Poster une annonce de location
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <p class="lead">Poster une annonce de location</p>
            </div>
            <div class="card-body">
                <form id="form_location_post">
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
                            <option value="moto">Moto</option>
                            <option value="voiture">Voiture</option>
                            <option value="autre">Autre</option>
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
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                <a class="btn btn-secondary float-right" type="submit" href="#" onclick="document.getElementById('form_location_post').submit()">Poster <i class="fa fa-plus-square" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@stop