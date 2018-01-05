@extends('layouts.app')

@section('title')
    Rechercher un itinéraire
@stop

@section('content')
    <script src="{{ asset('js/map/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/map/jquery-ui-1.8.12.custom.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/map/functions.js')}}"></script>
    <div class="container">
        <div class="card card-default">
            <div class="card-header"><p class="lead">Rechercher un itinéraire</p></div>

            <div class="card-body">
                <div id="destinationForm">
                    <form action="" method="get" name="direction" id="direction">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Point de départ :</label>
                                    <input class="form-control" type="text" name="origin" id="origin">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Destination :</label>
                                    <input class="form-control" type="text" name="destination" id="destination">
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-outline-primary" value="Calculer l'itinéraire" type="button" onclick="javascript:calculate()">
                    </form>
                </div>
                <div id="panel"></div>
                <div id="map">
                    <p>Veuillez patienter pendant le chargement de la carte...</p>
                </div>
            </div>
        </div>
    </div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyRWXL1dRi12xcSttpkpXXkKp9Shs1EHw&callback=initMap"></script>
@stop