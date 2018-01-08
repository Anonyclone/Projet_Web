@extends('layouts.app')
@section('title')
    Profil de {{ $association->pseudo }}
@stop

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                <p class="lead">Profil de {{ $association->pseudo }}</p>
            </div>

            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Avatar :</label>
                                <img class="avatar normal circle" src="/storage/img/avatars/users/{{ $association->avatar }}" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Sexe :</label>
                                <input type="text" name="sexe" class="form-control" value="{{ $association->sexe }}" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Nom :</label>
                                <input type="text" name="nom" class="form-control" value="{{ $association->surname }}" readonly />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Prénom :</label>
                                <input class="form-control" type="text" name="prenom" value="{{ $association->firstname }}" readonly />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Numéro de téléphone :</label>
                                <input class="form-control" type="tel" name="phone" pattern='^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$' value="{{ $association->phone }}" readonly/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Date de naissance :</label> <!--calcul bdd pour l'age -->
                                <input class="form-control" type="date" name="date" value="{{ $association->birth_date }}" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Découvrez-moi :</label>
                        <textarea class="form-control" readonly>{{ $association->description }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            @if($association->permis)
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
                            @if($association->vehicule)

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
                </form>
                <p class="lead underline">Annonces de {{ $association->pseudo }}</p>
                @forelse($posts as $location)
                    <p>Titre :  <b>{{ $location['title'] }}</b></p>
                    <p>Date de création :  <b>{{ $location['created_at'] }}</b></p>
                    <p>Date de modification :  <b>{{ $location['updated_at'] }}</b></p>
                    <a href="{{ URL::to('/utilisateur/rechercher/profil/'.$location['id']).'/'.$user_id.'/details/' }}" class="btn btn-outline-info">Voir en détails <i class="fa fa-address-card" aria-hidden="true"></i></a>
                @empty
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="alert-heading">Oups !?</h4>
                        <p>L'utilisateur <b>{{ $association->pseudo }}</b> n'a posté d'annonces.</p>
                        <hr>
                        <p class="mb-0">Le annonces postées par cet utilisateur apparaitront ici.</p>
                    </div>
                @endforelse
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
            </div>
        </div>
    </div>
@stop