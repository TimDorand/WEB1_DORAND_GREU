@extends('layouts.app')

@section('content')

        <div class="container">
        Ta bap
        <h1>{{$bap->name}}</h1>
        <p> Auteur: {{ $bap->username }}</p>
        <p><b>Descriptif: </b>{{$bap->descriptif}}</p>
        <p><b>Context: </b>{{$bap->context}}</p>
    </div>

@endsection