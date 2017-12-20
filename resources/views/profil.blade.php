@extends('layouts.app')
@section('title')
    Éditer le profil
@stop

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                @if($edit)
                    <p class="lead">Modification du profil utilisateur {{ $user['pseudo'] }}</p>
                @else
                    <p class="lead">Profil utilisateur {{ $user['pseudo'] }}</p>
                @endif
            </div>
            <div class="card-body">
                @if($edit)
                    {!! Form::open(['url' => '/utilisateur/profil/post', 'id' => 'profil_form_edit']) !!}
                    <div class="form-group">
                        <label class="control-label">Avatar :</label>
                        <img src="{{ asset('img/users/default.png') }}" height="180px" width="200px" />
                        <a href="" class="btn btn-outline-secondary">Changer</a>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Sexe :</label>

                        <select name="sexe" class="custom-select">
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nom :</label>
                        <input type="text" name="nom" class="form-control" value="{{ $user['surname'] }}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Prénom :</label>
                        <input class="form-control" type="text" name="prenom" value="{{ $user['firstname'] }}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Numéro de téléphone :</label>
                        <input class="form-control" type="tel" name="phone" pattern='^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$' value="{{ $user['phone'] }}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date de naissance :</label> <!--calcul bdd pour l'age -->
                        <input class="form-control" type="date" name="date" value="{{ $user['birth_date'] }}"/>
                    </div>
                    <!--
                    <div class="form-group">
                        <label class="control-label">Numero de rue :</label>
                        <input class="form-control" type="number" name="numRue" />
                    <p>Adresse :
                        <input type="text" name="adresse" >
                    </p>
                    <p>Code postal :
                        <input type="text" name="cp" >
                    </p>
                    <p>Ville :
                        <input type="text" name="ville" >
                    </p>
                    </div>
                    -->
                    <div class="form-group">
                        <label class="control-label">Découvrez-moi :</label>
                        <textarea class="form-control" >Description</textarea>
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

                    <a class="btn btn-outline-primary" href="{{ route('profil_get') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                    <a class="btn btn-outline-warning" type="submit" href="#" onclick="document.getElementById('profil_form_edit').submit()">Valider <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    {!! Form::close() !!}
                @else
                    <form>
                        <div class="form-group">
                            <label class="control-label">Avatar :</label>
                            <img src="{{ $user['avatar'] }}" height="180px" width="200px" />
                            <a href="#" class="btn btn-outline-secondary disabled">Changer</a>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Sexe :</label>
                            <select name="sexe" class="custom-select disabled" disabled>
                                <option value="homme" >Homme</option>
                                <option value="femme" >Femme</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nom :</label>
                            <input type="text" name="nom" class="form-control" value="{{ $user['surname'] }}" readonly />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Prénom :</label>
                            <input class="form-control" type="text" name="prenom" value="{{ $user['firstname'] }}" readonly />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Numéro de téléphone :</label>
                            <input class="form-control" type="tel" name="phone" pattern='^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$' value="{{ $user['phone'] }}" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Date de naissance :</label> <!--calcul bdd pour l'age -->
                            <input class="form-control" type="date" name="date" value="{{ $user['birth_date'] }}" readonly/>
                        </div>
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
                        <a class="btn btn-outline-info" type="submit" href="{{ route('profil_edit') }}">Éditer <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    </form>
                @endif
            </div>
        </div>
@stop