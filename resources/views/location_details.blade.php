@extends('layouts.app')

@section('title')
    Location {{ $association->title }}
@stop

@section('content')
    <div class="container">
        @if($edit)
            <div class="card card-default">
                <div class="card-header">
                    <p class="lead">Modification de la location {{ $association->title }}</p>
                </div>
                <div class="card-body">
                    {!! Form::open(['url' => '/utilisateur/profil/locations/'.$association->id.'/post', 'id' => 'form_update_location']) !!}
                    <p class="lead underline">Caractéristiques</p>
                    <div class="form-group">
                        <label for="title">Titre :</label>
                        <input type="text" name="title" class="form-control" value="{{ $association->title }}">
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
                                <input type="number" class="form-control" min="0" name="price" value="{{ $association->price }}">
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
                                    <option value="velo" @if($association->object == "velo") selected @endif>Vélo</option>
                                    <option value="moto" @if($association->object == "moto") selected @endif>Moto</option>
                                    <option value="voiture" @if($association->object == "voiture") selected @endif>Voiture</option>
                                    <option value="autre" @if($association->object == "velo") selected @endif>Autre</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea type="text" class="form-control" name="description">{{ $association->description }}</textarea>
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
                                <input type="text" class="form-control" name="city_name" value="{{ $association->address->city_name }}">
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
                                <input type="number" class="form-control" name="city_number" pattern='`^[0-9]{2,}$`' min="0" value="{{ $association->address->city_number }}">
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
                                <input type="number" class="form-control" min="0" name="street_number" value="{{ $association->address->street_number }}">
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
                                <input type="text" class="form-control" name="street_name" value="{{ $association->address->street_name }}">
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
                                <input type="date" class="form-control" name="date_begin" value="{{ $association->date_begin }}">
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
                                <input type="date" class="form-control" name="date_end" value="{{ $association->date_end }}">
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
                    <div class="float float-right">
                        <button class="btn btn-warning" type="submit" data-toggle="modal" data-target="#confirmationDialog">Supprimer <i class="fa fa-times-circle" aria-hidden="true"></i></button>
                        <a class="btn btn-success" type="submit" href="#" onclick="document.getElementById('form_update_location').submit()">Valider <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="confirmationDialog" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="lead" id="modalTitle">Êtes-vous sûr ?</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Attention, voulez-vous vraiment supprimer l'annonce nommée <b>"{{ $association->title }}"</b> ?</p>
                            <p>La suppression est un processus définitif, vous ne pourrez plus revenir en arrière!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</button>
                            {!! Form::open(['url' => '/utilisateur/profil/locations/'.$association->id.'/delete']) !!}
                                <button type="submit" class="btn btn-danger">Supprimer définitivement <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>


        @else
            <div class="card card-default">
                <div class="card-header">
                    <p class="lead">Location {{ $association->title }}</p>
                </div>
                <div class="card-body">
                    <form>
                        <p class="lead underline">Caractéristiques</p>
                        <div class="form-group">
                            <label for="title">Titre :</label>
                            <input type="text" name="title" class="form-control disabled" value="{{ $association->title }}" readonly>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="price">Tarif à l'heure :</label>
                                    <input type="number" class="form-control disabled" min="0" name="price" value="{{ $association->price }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="object">Type de location :</label><br>
                                    <select class="custom-select disabled" type="text" name="object" disabled>
                                        <option value="velo" @if($association->object == "velo") selected @endif>Vélo</option>
                                        <option value="moto" @if($association->object == "moto") selected @endif>Moto</option>
                                        <option value="voiture" @if($association->object == "voiture") selected @endif>Voiture</option>
                                        <option value="autre" @if($association->object == "velo") selected @endif>Autre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description :</label>
                            <textarea type="text" class="form-control disabled" name="description" readonly>{{ $association->description }}</textarea>
                        </div>
                        <p class="lead underline">Disponibilité</p>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="city_name">Ville :</label>
                                    <input type="text" class="form-control disabled" name="city_name" value="{{ $association->address->city_name }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="city_number">Code postal :</label>
                                    <input type="number" class="form-control disabled" name="city_number" pattern='`^[0-9]{2,}$`' min="0" value="{{ $association->address->city_number }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="street_number">Numéro de voie :</label>
                                    <input type="number" class="form-control disabled" min="0" name="street_number" value="{{ $association->address->street_number }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="street_name">Rue :</label>
                                    <input type="text" class="form-control disabled" name="street_name" value="{{ $association->address->street_name }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date_begin">À partir du</label>
                                    <input type="date" class="form-control disabled" name="date_begin" value="{{ $association->date_begin }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date_end">jusqu'à</label>
                                    <input type="date" class="form-control disabled" name="date_end" value="{{ $association->date_end }}" readonly>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                <a class="btn btn-secondary float-right" type="submit" href="{{ URL::to('/utilisateur/profil/locations/'.$association->id.'/edit') }}">Éditer <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
            </div>
    </div>
    @endif
    </div>
@endsection
