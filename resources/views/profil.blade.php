@extends('layouts.app')
@section('title')
    Profil
@stop

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                <p class="lead">Profil de {{ $user['firstname'] }} {{ $user['surname'] }}</p>
            </div>
            <div class="card-body">
                <form action="" method="post">

                    <p>Avatar : </p>
                    <img src="{{ asset('img/users/default.png') }}" height="180px" width="200px" />
                    <br/><input type="submit" value="Modifier" />
                    <p>Sexe :
                        <select  name="sexe">
                            <option value="homme" readonly>Homme</option>
                            <option value="femme" readonly>Femme</option>
                        </select>
                    </p>
                    <p>Nom :
                        <input type="text" name="nom" readonly/>
                    </p>
                    <p>Prénom :
                        <input type="text" name="prenom" readonly/>
                    </p>
                    <p>Date de naissance : <!--calcul bdd pour l'age -->
                        <input type="date" name="date" readonly/>
                    </p>
                    <br/>
                    <p>Numero de rue :
                        <input type="number" name="numRue" readonly/>
                    </p>
                    <p>Adresse :
                        <input type="text" name="adresse" readonly>
                    </p>
                    <p>Code postal :
                        <input type="text" name="cp" readonly>
                    </p>
                    <p>Ville :
                        <input type="text" name="ville" readonly>
                    </p>
                    <br/>
                    <p>Découvrez-moi :
                        <textarea readonly>Description</textarea>
                    </p>
                    <br/>
                    <p>Permis :
                        <input type="radio" name="oui" readonly />Oui
                        <input type="radio" name="non" readonly />Non<br/>
                    </p>
                    <p>Véhicule :
                        <input type="radio" name="oui" readonly />Oui
                        <input type="radio" name="non" readonly />Non<br/>
                    </p>
                    <br/><br/>
                    <a class="btn btn-outline-primary" href="{{ route('home') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</a>
                    <input type="submit" value="Edit"/>
                </form>
            </div>
        </div>
    </div>
@stop