@extends('layouts.app')

@section('title')
    Location {{ $association[0]->title }}
@stop

@section('content')
    <div class="container">
        @if($edit)
            <div class="card card-default">
                <div class="card-header">
                    <p class="lead">Modification de la location {{ $association[0]->title }}</p>
                </div>
                <div class="card-body">
                    {!! Form::open(['url' => '/utilisateur/profil/locations/'.$association[0]->id.'/post', 'id' => 'form_update_location']) !!}
                    <p class="lead underline">Caractéristiques</p>
                    <p>Auteur : <b>{{ $association[0]->userOwner->pseudo }}</b></p>
                    <div class="form-group">
                        <label for="title">Titre :</label>
                        <input type="text" name="title" class="form-control" value="{{ $association[0]->title }}">
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
                                <input type="number" class="form-control" min="0" name="price" value="{{ $association[0]->price }}">
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
                                    <option value="velo" @if($association[0]->object == "velo") selected @endif>Vélo</option>
                                    <option value="moto" @if($association[0]->object == "moto") selected @endif>Moto</option>
                                    <option value="voiture" @if($association[0]->object == "voiture") selected @endif>Voiture</option>
                                    <option value="autre" @if($association[0]->object == "velo") selected @endif>Autre</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea type="text" class="form-control" name="description">{{ $association[0]->description }}</textarea>
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
                                <input type="text" class="form-control" name="city_name" value="{{ $association[0]->address->city_name }}">
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
                                <input type="number" class="form-control" name="city_number" pattern='`^[0-9]{2,}$`' min="0" value="{{ $association[0]->address->city_number }}">
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
                                <input type="number" class="form-control" min="0" name="street_number" value="{{ $association[0]->address->street_number }}">
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
                                <input type="text" class="form-control" name="street_name" value="{{ $association[0]->address->street_name }}">
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
                                <input type="date" class="form-control" name="date_begin" value="{{ $association[0]->date_begin }}">
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
                                <input type="date" class="form-control" name="date_end" value="{{ $association[0]->date_end }}">
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
                    <a class="btn btn-danger float-right" type="submit" href="#" onclick="document.getElementById('form_update_location').submit()">Valider <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                </div>
            </div>
        @else
            <div class="card card-default">
                <div class="card-header">
                    <p class="lead">Location {{ $association[0]->title }}</p>
                </div>
                <div class="card-body">
                    <form>
                        <p class="lead underline">Caractéristiques</p>
                        <p>Auteur : <b>{{ $association[0]->userOwner->pseudo }}</b></p>
                        <div class="form-group">
                            <label for="title">Titre :</label>
                            <input type="text" name="title" class="form-control disabled" value="{{ $association[0]->title }}" readonly>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="price">Tarif à l'heure :</label>
                                    <input type="number" class="form-control disabled" min="0" name="price" value="{{ $association[0]->price }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="object">Type de location :</label><br>
                                    <select class="custom-select disabled" type="text" name="object" disabled>
                                        <option value="velo" @if($association[0]->object == "velo") selected @endif>Vélo</option>
                                        <option value="moto" @if($association[0]->object == "moto") selected @endif>Moto</option>
                                        <option value="voiture" @if($association[0]->object == "voiture") selected @endif>Voiture</option>
                                        <option value="autre" @if($association[0]->object == "velo") selected @endif>Autre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description :</label>
                            <textarea type="text" class="form-control disabled" name="description" readonly>{{ $association[0]->description }}</textarea>
                        </div>
                        <p class="lead underline">Disponibilité</p>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="city_name">Ville :</label>
                                    <input type="text" class="form-control disabled" name="city_name" value="{{ $association[0]->address->city_name }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="city_number">Code postal :</label>
                                    <input type="number" class="form-control disabled" name="city_number" pattern='`^[0-9]{2,}$`' min="0" value="{{ $association[0]->address->city_number }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="street_number">Numéro de voie :</label>
                                    <input type="number" class="form-control disabled" min="0" name="street_number" value="{{ $association[0]->address->street_number }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="street_name">Rue :</label>
                                    <input type="text" class="form-control disabled" name="street_name" value="{{ $association[0]->address->street_name }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date_begin">À partir du</label>
                                    <input type="date" class="form-control disabled" name="date_begin" value="{{ $association[0]->date_begin }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date_end">jusqu'à</label>
                                    <input type="date" class="form-control disabled" name="date_end" value="{{ $association[0]->date_end }}" readonly>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                <a class="btn btn-secondary float-right" type="submit" href="{{ URL::to('/utilisateur/profil/locations/'.$association[0]->id.'/edit') }}">Éditer <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
            </div>
    </div>
    @endif
    </div>
@endsection
