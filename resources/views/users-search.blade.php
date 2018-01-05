@extends('layouts.app')

@section('title')
    Rechercher des utilisateurs
@stop


@section('content')
    <ul class="container">
        <div class="card card-default">
            <div class="card-header">
                <p class="lead">Rechercher des utilisateurs</p>
            </div>
            <div class="card-body">
                {!! Form::open(['url' => '/utilisateur/rechercher/post', 'class' => 'form-inline', 'id' => 'users-search-form']) !!}
                <div class="input-group mr-2">
                    <input class="form-control" value="" name="search_query"/>
                </div>
                <a class="btn btn-outline-primary" href="#" onclick="document.getElementById('users-search-form').submit()">Chercher <i class="fa fa-search"></i></a>
                {!! $errors->first('search_query', '
                <div class="alert alert-danger alert-dismissible padding-alert fade show" role="alert">
                    <strong>Erreur :</strong> :message
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>') !!}
                {!! Form::close() !!}
                @forelse($users as $user)
                    <article class="user-find">
                        <p class="lead underline">Utilisateur : <b>{{ $user['pseudo'] }}</b></p>
                        <img src="/storage/img/avatars/users/{{ $user['avatar'] }}" class="avatar normal circle" />
                        <a href="{{ URL::to('/utilisateur/rechercher/profil/'.$user['id']) }}" class="btn btn-outline-info">Voir le profil <i class="fa fa-address-card" aria-hidden="true"></i></a>
                    </article>
                @empty
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="alert-heading">Trouver d'autres utilisateurs !</h4>
                        <p>Découvrez la communauté de tartempion par vous même en cherchant d'autres utilisateurs.</p>
                        <hr>
                        <p class="mb-0">Servez-vous de cette barre de recherches pour saisir un pseudo.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
