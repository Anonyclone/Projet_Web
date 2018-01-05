@extends('layouts.app')
@section('title')
    Profil de {{ $user['pseudo'] }}
@stop

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                <p class="lead">Profil de {{ $user['pseudo'] }}</p>
            </div>

            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Avatar :</label>
                                <img class="avatar normal circle" src="/storage/img/avatars/users/{{ $user['avatar'] }}" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Sexe :</label>
                                <input type="text" name="sexe" class="form-control" value="{{ $user['sexe'] }}" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Nom :</label>
                                <input type="text" name="nom" class="form-control" value="{{ $user['surname'] }}" readonly />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Prénom :</label>
                                <input class="form-control" type="text" name="prenom" value="{{ $user['firstname'] }}" readonly />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Numéro de téléphone :</label>
                                <input class="form-control" type="tel" name="phone" pattern='^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$' value="{{ $user['phone'] }}" readonly/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Date de naissance :</label> <!--calcul bdd pour l'age -->
                                <input class="form-control" type="date" name="date" value="{{ $user['birth_date'] }}" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Découvrez-moi :</label>
                        <textarea class="form-control" readonly>{{ $user['description'] }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            @if($user['permis'])
                                <label class="control-label">Permis :</label>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="permis" id="exampleRadios1" value="1" disabled checked>
                                        oui
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="permis" id="exampleRadios2" value="0" disabled>
                                        non
                                    </label>
                                </div>
                            @else
                                <label class="control-label">Permis :</label>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="permis" id="exampleRadios1" value="1" disabled>
                                        oui
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="permis" id="exampleRadios2" value="0" disabled checked>
                                        non
                                    </label>
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            @if($user['vehicule'])

                                <label class="control-label">Véhicule :</label>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="vehicule" id="exampleRadios3" value="1" disabled checked>
                                        oui
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="vehicule" id="exampleRadios3" value="0" disabled>
                                        non
                                    </label>
                                </div>
                            @else
                                <label class="control-label">Véhicule :</label>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="vehicule" id="exampleRadios3" value="1" disabled>
                                        oui
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="vehicule" id="exampleRadios3" value="0" disabled checked>
                                        non
                                    </label>
                                </div>
                            @endif
                        </div>
                    </div>
                    <a class="btn btn-outline-primary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                </form>
            </div>
        </div>
    </div>
@stop