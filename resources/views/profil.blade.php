@extends('layouts.app')
@section('title')
    Profil
@stop

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                <p class="lead">Profil de {{ $user['firstname'] }} {{ $user['surname'] }}</p>
            </div>
            <div class="card-body">
                {!! Form::open(['url' => 'profile_update', 'id' => 'profil_form'])!!}
                <div class="form-group">
                    <label class="control-label">Avatar :</label>
                    <img src="{{ asset('img/users/default.png') }}" height="180px" width="200px" />
                    <a href="" class="btn btn-outline-secondary">Changer</a>
                </div>
                <div class="form-group">
                    <label class="control-label">Sexe :</label>

                    <select name="sexe" class="custom-select">
                        <option value="homme" readonly>Homme</option>
                        <option value="femme" readonly>Femme</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Nom :</label>
                    <input type="text" name="nom" class="form-control" readonly/>
                </div>
                <div class="form-group">
                    <label class="control-label">Prénom :</label>
                    <input class="form-control" type="text" name="prenom" readonly/>
                </div>
                <div class="form-group">
                    <label class="control-label">Date de naissance :</label> <!--calcul bdd pour l'age -->
                    <input class="form-control" type="date" name="date" readonly/>
                </div>
                <!--
                <div class="form-group">
                    <label class="control-label">Numero de rue :</label>
                    <input class="form-control" type="number" name="numRue" readonly/>
                <p>Adresse :
                    <input type="text" name="adresse" readonly>
                </p>
                <p>Code postal :
                    <input type="text" name="cp" readonly>
                </p>
                <p>Ville :
                    <input type="text" name="ville" readonly>
                </p>
                </div>
                -->
                <div class="form-group">
                    <label class="control-label">Découvrez-moi :</label>
                    <textarea class="form-control" readonly>Description</textarea>
                </div>
                <label class="control-label">Permis :</label>
                <div class="form-check disabled">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="permis" id="exampleRadios1" value="option1" disabled>
                        oui
                    </label>
                </div>
                <div class="form-check disabled">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="permis" id="exampleRadios2" value="option2" disabled="">
                        non
                    </label>
                </div>
                <label class="control-label">Véhicule :</label>
                <div class="form-check disabled">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="vehicule" id="exampleRadios3" value="option3" disabled>
                        oui
                    </label>
                </div>
                <div class="form-check disabled">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="vehicule" id="exampleRadios3" value="option3" disabled>
                        non
                    </label>
                </div>

            <a class="btn btn-outline-primary" href="{{ route('home') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                <a class="btn btn-outline-info" type="submit" href="">Éditer <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
            {!! Form::close() !!}
        </div>
    </div>
@stop