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
                    <p>Bonjour <b>{{ $user['pseudo'] }}</b> et bienvenue sur votre espace personnel</p>
                    <hr>
                    <p class="mb-0">Vous pouvez maintenant publier ou chercher des annonces.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
