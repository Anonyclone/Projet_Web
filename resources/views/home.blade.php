@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Espace personnel</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté !
                </div>
            </div>
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
    <div id="panel"></div>
    <div id="map">
        <p>Veuillez patienter pendant le chargement de la carte...</p>
    </div>
</div>
@endsection
