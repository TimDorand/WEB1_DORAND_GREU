@extends('layouts.app')

@section('content')
    @if(Auth::check() && Auth::user()->id == $bap->user_id)

        <div class="container">
            <h1>{{$bap->name}}</h1>
            <p> Auteur: {{ $bap->username }}</p>
            <p> Type: {{ $bap->type }}</p>
            <p><b>Descriptif: </b>{{$bap->descriptif}}</p>
            <p><b>Contexte: </b>{{$bap->context}}</p>
            <p><b>Objectifs: </b>{{$bap->objectif}}</p>
            <p><b>Contrainte: </b>{{$bap->contrainte}}</p>
            @if($bap->validate == 1 )
            <p style="color:green"><b>Projet Validé </b></p>
            @else
                <p style="color:red"><b>Projet non Validé </b></p>
            @endif

        </div>
    @else
       @include('partials.posts.401')

    @endif
@endsection