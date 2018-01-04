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
                    {!! Form::open(['url' => '/utilisateur/profil/post', 'id' => 'profil_form_edit', 'files' => true]) !!}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Avatar :</label>
                                <img class="avatar normal circle" src="/storage/img/avatars/users/{{ $user['avatar'] }}" height="180px" width="200px" />
                                <!--
                                <a href="" class="btn btn-outline-secondary">Changer</a>
                                -->
                                <label for="avatar-upload" class="btn btn-outline-secondary">
                                    <i class="fa fa-cloud-upload"></i> Modifier
                                </label>
                                <input id="avatar-upload" name="avatar" type="file"/>
                                {!! $errors->first('avatar', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('sexe') ? ' has-error' : '' }}">
                                <label class="control-label">Sexe :</label>
                                @if($user['sexe'] === "homme")
                                    <select name="sexe" class="custom-select">
                                        <option value="homme" selected>Homme</option>
                                        <option value="femme">Femme</option>
                                    </select>
                                @else
                                    <select name="sexe" class="custom-select">
                                        <option value="homme">Homme</option>
                                        <option value="femme" selected>Femme</option>
                                    </select>
                                @endif
                                {!! $errors->first('sexe', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('surname') ? ' has-error' : '' }}">
                                <label class="control-label">Nom :</label>
                                <input type="text" name="surname" class="form-control" value="{{ $user['surname'] }}"/>
                                {!! $errors->first('surname', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                <label class="control-label">Prénom :</label>
                                <input class="form-control" type="text" name="firstname" value="{{ $user['firstname'] }}"/>
                                {!! $errors->first('firstname', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label class="control-label">Numéro de téléphone :</label>
                                <input class="form-control" type="tel" name="phone" pattern='^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$' value="{{ $user['phone'] }}"/>
                                {!! $errors->first('phone', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('birth_date') ? ' has-error' : '' }}">
                                <label class="control-label">Date de naissance :</label> <!--calcul bdd pour l'age -->
                                <input class="form-control" type="date" name="birth_date" value="{{ $user['birth_date'] }}"/>
                                {!! $errors->first('birth_date', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                        <label class="control-label">Découvrez-moi :</label>
                        <textarea class="form-control" name="description" >{{ $user['description'] }}</textarea>
                        {!! $errors->first('description', '
                        <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                            <strong>Erreur :</strong> :message
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>') !!}
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            @if($user['permis'])
                                <label class="control-label">Permis :</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="permis" id="exampleRadios1" value="1" checked>
                                        oui
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="permis" id="exampleRadios2" value="0">
                                        non
                                    </label>
                                </div>
                            @else
                                <label class="control-label">Permis :</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="permis" id="exampleRadios1" value="1">
                                        oui
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="permis" id="exampleRadios2" value="0" checked>
                                        non
                                    </label>
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            @if($user['vehicule'])
                                <label class="control-label">Véhicule :</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="vehicule" id="exampleRadios3" value="1" checked>
                                        oui
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="vehicule" id="exampleRadios3" value="0">
                                        non
                                    </label>
                                </div>
                            @else
                                <label class="control-label">Véhicule :</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="vehicule" id="exampleRadios3" value="1">
                                        oui
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="vehicule" id="exampleRadios3" value="0" checked>
                                        non
                                    </label>
                                </div>
                            @endif
                        </div>
                    </div>

                    <a class="btn btn-outline-primary" href="{{ route('profil_get') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                    <a class="btn btn-outline-warning" type="submit" href="#" onclick="document.getElementById('profil_form_edit').submit()">Valider <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    {!! Form::close() !!}
                @else
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
                                    @if($user['sexe'] === "homme")
                                        <select name="sexe" class="custom-select disabled" disabled>
                                            <option value="homme" selected>Homme</option>
                                            <option value="femme">Femme</option>
                                        </select>
                                    @else
                                        <select name="sexe" class="custom-select disabled" disabled>
                                            <option value="homme">Homme</option>
                                            <option value="femme" selected>Femme</option>
                                        </select>
                                    @endif
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
                        <a class="btn btn-outline-primary" href="{{ route('home') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                        <a class="btn btn-outline-info" type="submit" href="{{ route('profil_edit') }}">Éditer <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    </form>
                @endif
            </div>
        </div>
@stop