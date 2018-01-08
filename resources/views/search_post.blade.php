@extends('layouts.app')
@section('title')
    Rechercher une location
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <p class="lead">Rechercher une annonce de location</p>
            </div>
            <div class="card-body">
                {!! Form::open(['url' => '/chercher/annonce/post', 'id' => 'form_location_search']) !!}
                <p class="lead underline">Caractéristiques</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Location">Lieu de location : (optionnel)</label>
                            <input type="text" class="form-control" name="lieu" />
                            {!! $errors->first('lieu', '
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
                            <label for="Location">Type de location : </label><br>
                            <select type="text" name="object" class="custom-select">
                                <option value="velo">Vélo</option>
                                <option value="moto">Moto</option>
                                <option value="voiture">Voiture</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                @forelse($locations as $location)
                    <p>Titre :  <b>{{ $location['title'] }}</b></p>
                    <p>Date de création :  <b>{{ $location['created_at'] }}</b></p>
                    <p>Date de modification :  <b>{{ $location['updated_at'] }}</b></p>
                    <a href="{{ URL::to('/chercher/annonce/'.$location['id'].'/'.$location['user_post_id'].'/details/') }}" class="btn btn-outline-info">Voir en détails <i class="fa fa-address-card" aria-hidden="true"></i></a>                    </article>
                @empty
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="alert-heading">Trouver des annonces !</h4>
                        <p>Découvrez les annonces postées par la communauté.</p>
                        <hr>
                        <p class="mb-0">Servez-vous de cette page pour trouver une annonce.</p>
                    </div>
                @endforelse
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                <a class="btn btn-secondary float-right" type="submit" href="#" onclick="document.getElementById('form_location_search').submit()">Rechercher <i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@stop