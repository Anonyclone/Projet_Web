@extends('layouts.app')

@section('title')
    Espace personnel
@stop

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                <p class="lead">Espace personnel</p>
            </div>

            <div class="card-body">
                <div class="alert alert-secondary" role="alert">
                    <h4 class="alert-heading">Message du web service !</h4>
                    <p>{{ $message }}</p>
                    <hr>
                    <p class="mb-0">Qu'en pensez-vous ?</p>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="#" onclick="window.history.back();"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
            </div>
        </div>
    </div>
@endsection
