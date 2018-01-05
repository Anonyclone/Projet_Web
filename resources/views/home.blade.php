@extends('layouts.app')

@section('title')
    Espace personnel
@stop

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                <p class="lead">Espace personnel</p>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="alert alert-secondary" role="alert">
                    <h4 class="alert-heading">Bienvenue!</h4>
                    <p>Bonjour <b>{{ $user['pseudo'] }}</b> et bienvenue sur votre espace personnel</p>
                    <hr>
                    <p class="mb-0">Vous pouvez maintenant publier ou chercher des annonces.</p>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
            </div>
        </div>
    </div>
@endsection
