@extends('layouts.app')

@section('title')
    Espace personnel
@stop

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Espace personnel</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="alert alert-secondary" role="alert">
                    <h4 class="alert-heading">Bienvenue!</h4>
                    <p>Bonjour <b>{{ $user['firstname'] }}</b> et bienvenue sur votre espace personnel</p>
                    <hr>
                    <p class="mb-0">Vous pouvez maintenant publier ou chercher des annonces.</p>
                </div>
            </div>
            <h1>Calcul d'itinéraire Google Maps Api V3</h1>
            <div id="destinationForm">
                <form action="" method="get" name="direction" id="direction">
                    <label>Point de départ :</label>
                    <input type="text" name="origin" id="origin">
                    <label>Destination :</label>
                    <input type="text" name="destination" id="destination">
                    <input type="button" value="Calculer l'itinéraire" onclick="javascript:calculate()">
                </form>
            </div>
            <div id="card"></div>
            <div id="map">
                <p>Veuillez patienter pendant le chargement de la carte...</p>
            </div>
        </div>
    </div>
@endsection
