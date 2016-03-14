@extends('layouts.app', ['pageTitle' => 'Article n°'])

@section('content')
    <div class="container">
        <h1>{{$bap->name}}</h1>
        <p> Auteur: {{ $bap->username }}</p>
        <p><b>Descriptif: </b>{{$bap->descriptif}}</p>
        <p><b>Context: </b>{{$bap->context}}</p>
        <p>{{$bap->descriptif}}</p>
        <p>{{$bap->descriptif}}</p>
    </div>
@endsection