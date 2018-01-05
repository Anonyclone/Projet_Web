@extends('layouts.app')

@section('title')
    Inscription
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-default">
                    <div class="card-header"><p class="lead">Inscription</p></div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <p class="lead underline">Informations personnelles</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                        <label for="surname" class="control-label">Nom</label>
                                        <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>
                                        {!! $errors->first('surname', '
                                        <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                            <strong>Erreur :</strong> :message
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>') !!}
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <label for="firstname" class="control-label">Prénom</label>
                                        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                        {!! $errors->first('firstname', '
                                        <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                            <strong>Erreur :</strong> :message
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('sexe') ? ' has-error' : '' }}">
                                <label class="control-label">Sexe :</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="sexe" value="homme" checked>
                                        Homme
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="sexe" value="femme">
                                        Femme
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                                <label for="birth_date" class="control-label">Date de naissance</label>
                                <input id="birth_date" type="date" class="form-control" name="birth_date" value="{{ old('birth_date') }}" required>
                                {!! $errors->first('birth_date', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                                </div>
                                <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="control-label">Numéro de téléphone</label>
                                <input id="phone" type="tel" class="form-control" name="phone" pattern='^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$' value="{{ old('phone') }}">
                                {!! $errors->first('phone', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                                </div>
                            </div>
                            <p class="lead underline">Vos identifiants</p>
                            <div class="form-group{{ $errors->has('pseudo') ? ' has-error' : '' }}">
                                <label for="pseudo" class="control-label">Pseudo</label>
                                <input id="pseudo" type="text" class="form-control" name="pseudo" value="{{ old('pseudo') }}" required>
                                {!! $errors->first('pseudo', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">Adresse mail</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                {!! $errors->first('email', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Mot de passe</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                {!! $errors->first('password', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="control-label">Confirmer le mot de passe</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                {!! $errors->first('password_confirmation', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>

                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                        S'inscrire
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
