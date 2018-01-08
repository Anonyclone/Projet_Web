@extends('layouts.app')

@section('title')
    Mes locations
@stop

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                <p class="lead">Mes locations</p>
            </div>
            <div class="card-body">
                <p class="lead underline">Locations postées</p>
                @forelse($locations_owner as $location)
                    <p>Titre :  <b>{{ $location['title'] }}</b></p>
                    <p>Date de création :  <b>{{ $location['created_at'] }}</b></p>
                    <p>Date de modification :  <b>{{ $location['updated_at'] }}</b></p>
                    <a href="{{ URL::to('/utilisateur/profil/locations/'.$location['id']) }}" class="btn btn-outline-info">Voir en détails <i class="fa fa-address-card" aria-hidden="true"></i></a>
                    @empty
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="alert-heading">Oups !?</h4>
                        <p>Cher <b>{{ $user['pseudo'] }}</b>, vous semblez n'avoir pas encore posté d'annonces.</p>
                        <hr>
                        <p class="mb-0">Les annonces que vous posterez apparaitront ici.</p>
                    </div>
                @endforelse
                <p class="lead underline">Locations contractées</p>
                @forelse($locations_customer as $location)
                    {{ $location['title'] }}
                @empty
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="alert-heading">Oups !?</h4>
                        <p>Cher <b>{{ $user['pseudo'] }}</b>, vous semblez ne pas avoir contracté de locations.</p>
                        <hr>
                        <p class="mb-0">Les locations que vous contracterées apparaitront ici.</p>
                    </div>
                @endforelse
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
            </div>
        </div>
    </div>
@endsection