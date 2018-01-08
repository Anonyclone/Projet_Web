@extends('layouts.app')

@section('title')
    Location {{ $association->title }}
@stop

@section('content')
    <div class="container">
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
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                <a class="btn btn-secondary float-right" type="submit" href="{{ URL::to('/utilisateur/profil/locations/'.$association->id.'/edit') }}">Éditer <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@endsection
