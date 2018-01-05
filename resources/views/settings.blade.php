@extends('layouts.app')
@section('title')
    @if($edit)
        Modification des paramètres de confidentialité
    @else
        Paramètres de confidentialité
    @endif
@stop

@section('content')
    <div class="container">
        <div class="card card-default">
            @if($edit)
                <div class="card-header">
                    <p class="lead">Paramètres de confidentialité</p>
                </div>
                <div class="card-body">
                    {!! Form::open(['url' => '/utilisateur/confidentialite/post', 'id' => 'user_settings_form_edit']) !!}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Pseudo :</label>
                                <input class="form-control" name="pseudo" type="text" value=" {{ $user['pseudo'] }}">
                                {!! $errors->first('pseudo', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Email :</label>
                                <input class="form-control" name="email" type="email" value="{{ $user['email'] }}">
                                {!! $errors->first('email', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ancien mot de passe :</label>
                        <input class="form-control" name="current_password" type="password">
                        {!! $errors->first('current_password', '
                        <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                            <strong>Erreur :</strong> :message
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>') !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nouveau mot de passe :</label>
                        <input class="form-control" name="password" type="password">
                        {!! $errors->first('password', '
                        <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                            <strong>Erreur :</strong> :message
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>') !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label">Confirmer le nouveau mot de passe :</label>
                        <input class="form-control" name="password_confirmation" type="password">
                        {!! $errors->first('password_confirmation', '
                        <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                            <strong>Erreur :</strong> :message
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>') !!}
                    </div>
                    <a class="btn btn-outline-primary" href="{{ route('settings_get') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                    <a class="btn btn-outline-warning" type="submit" href="#" onclick="document.getElementById('user_settings_form_edit').submit()">Valider <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    {!! Form::close() !!}
                </div>
            @else
                <div class="card-header">
                    <p class="lead">Paramètres de confidentialité</p>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Pseudo :</label>
                                    <input class="form-control" name="pseudo" type="text" value=" {{ $user['pseudo'] }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Email :</label>
                                    <input class="form-control" name="email" type="email" value="{{ $user['email'] }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mot de passe :</label>
                            <input class="form-control" name="password" type="password" value="coucou" readonly>
                        </div>
                        <a class="btn btn-outline-primary" href="{{ route('home') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                        <a class="btn btn-outline-info" type="submit" href="{{ route('settings_edit') }}">Editer <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    </form>
                </div>
            @endif
        </div>
    </div>
@stop