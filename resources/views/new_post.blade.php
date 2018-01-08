@extends('layouts.app')
@section('title')
    Poster une annonce de location
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <p class="lead">Poster une annonce de location</p>
            </div>
            <div class="card-body">
                {!! Form::open(['url' => '/nouvelle/annonce/post', 'id' => 'form_location_post']) !!}
                    <p class="lead underline">Caractéristiques</p>
                    <div class="form-group">
                        <label for="title">Titre :</label>
                        <input type="text" name="title" class="form-control" value="">
                        {!! $errors->first('title', '
                        <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                            <strong>Erreur :</strong> :message
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>') !!}
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="price">Tarif à l'heure :</label>
                                <input type="number" class="form-control" name="price" min="0">
                                {!! $errors->first('price', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="object">Type de location :</label><br>
                                <select class="custom-select" type="text" name="object">
                                    <option value="velo">Vélo</option>
                                    <option value="moto">Moto</option>
                                    <option value="voiture">Voiture</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea type="text" class="form-control" name="description"></textarea>
                        {!! $errors->first('description', '
                        <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                            <strong>Erreur :</strong> :message
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>') !!}
                    </div>
                    <p class="lead underline">Disponibilité</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="city_name">Ville :</label>
                                <input type="text" class="form-control" name="city_name" placeholder="Saisir la ville">
                                {!! $errors->first('city_name', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="city_number">Code postal :</label>
                                <input type="number" class="form-control" name="city_number" pattern='`^[0-9]{2,}$`' min="0">
                                {!! $errors->first('city_number', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="street_number">Numéro de voie :</label>
                                <input type="number" class="form-control" min="0" name="street_number">
                                {!! $errors->first('street_number', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="street_name">Rue :</label>
                                <input type="text" class="form-control" name="street_name" placeholder="Saisir la rue">
                                {!! $errors->first('street_name', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="date_begin">À partir du</label>
                                <input type="date" class="form-control" name="date_begin">
                                {!! $errors->first('date_begin', '
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
                                <label for="date_end">jusqu'à</label>
                                <input type="date" class="form-control" name="date_end">
                                {!! $errors->first('date_end', '
                                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                                    <strong>Erreur :</strong> :message
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>') !!}
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                <a class="btn btn-secondary float-right" type="submit" href="#" onclick="document.getElementById('form_location_post').submit()">Poster <i class="fa fa-plus-square" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@stop