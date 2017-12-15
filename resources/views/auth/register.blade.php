@extends('layouts.app')

@section('title')
    Inscription
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-default">
                    <div class="card-header">Inscription</div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <p class="lead underline">Informations personnelles</p>
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
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="control-label">Numéro de téléphone</label>
                                <input id="phone" type="tel" class="form-control" name="phone" required>
                                {!! $errors->first('phone', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('street_number') ? ' has-error' : '' }}">
                                <label for="street_number" class="control-label">Voie</label>
                                <input id="street_number" type="number" class="form-control" name="street_number" required>
                                {!! $errors->first('street_number', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('street_name') ? ' has-error' : '' }}">
                                <label for="street_name" class="control-label">Rue</label>
                                <input id="street_name" type="text" class="form-control" name="street_name" required>
                                {!! $errors->first('street_name', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('city_name') ? ' has-error' : '' }}">
                                <label for="city_name" class="control-label">Ville</label>
                                <input id="city_name" type="text" class="form-control" name="city_name" required>
                                {!! $errors->first('city_name', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('city_number') ? ' has-error' : '' }}">
                                <label for="city_number" class="control-label">Ville</label>
                                <input id="city_number" type="number" class="form-control" name="city_number" required>
                                {!! $errors->first('city_number', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                            <p class="lead underline">Vos identifiants</p>
                            <div class="form-group{{ $errors->has('pseudo') ? ' has-error' : '' }}">
                                <label for="pseudo" class="control-label">Adresse mail</label>
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
