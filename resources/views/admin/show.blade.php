@extends('layouts.app')

@section('content')
{{--Affichage de la bap en détail--}}

        <div class="container">
                <h1>{{$bap->name}}</h1>
                <p> Auteur: {{ $bap->username }}</p>
                <p> Type: {{ $bap->type }}</p>
                <p><b>Descriptif: </b>{{$bap->descriptif}}</p>
                <p><b>Contexte: </b>{{$bap->context}}</p>
                <p><b>Objectifs: </b>{{$bap->objectif}}</p>
                <p><b>Contrainte: </b>{{$bap->contrainte}}</p>
        </div>

@endsection