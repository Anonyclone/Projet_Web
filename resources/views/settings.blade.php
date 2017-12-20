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
                    {!! Form::open(['url' => '/utilisateur/confidentialite', 'id' => 'user_settings_form_edit']) !!}
                    <div class="form-group">
                        <label class="control-label">Pseudo :</label>
                        <input class="form-control" name="pseudo" type="text" value=" {{ $user['pseudo'] }}">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email :</label>
                        <input class="form-control" name="email" type="email" value="{{ $user['email'] }}">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ancien mot de passe :</label>
                        <input class="form-control" name="old_password" type="password">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nouveau mot de passe :</label>
                        <input class="form-control" name="password" type="password">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Confirmer le nouveau mot de passe :</label>
                        <input class="form-control" name="password_confirmation" type="password">
                    </div>
                    <a class="btn btn-outline-primary" href="{{ route('settings_get') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                    <a class="btn btn-outline-warning" type="submit" href="" onclick="document.getElementById('user_settings_form_edit').submit()">Valider <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    {!! Form::close() !!}
                </div>
            @else
                <div class="card-header">
                    <p class="lead">Paramètres de confidentialité</p>
                </div>
                <div class="card-body">
                    {!! Form::open(['url' => '/utilisateur/confidentialite', 'id' => 'user_settings_form_edit']) !!}
                    <div class="form-group">
                        <label class="control-label">Pseudo :</label>
                        <input class="form-control" name="pseudo" type="text" value=" {{ $user['pseudo'] }}" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email :</label>
                        <input class="form-control" name="email" type="email" value="{{ $user['email'] }}" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Mot de passe :</label>
                        <input class="form-control" name="password" type="password" value="{{ $user['password'] }}" readonly>
                    </div>
                    <a class="btn btn-outline-primary" href="{{ route('home') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                    <a class="btn btn-outline-info" type="submit" href="{{ route('settings_edit') }}">Editer <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    {!! Form::close() !!}
                </div>
            @endif
        </div>
    </div>
@stop