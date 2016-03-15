@extends('layouts.app')

@section('content')
    @if(Auth::check() && Auth::user()->id == $user->id)

        <div class="container">
        Ta bap
        <h1>{{$user->name}}</h1>
        <p> Auteur: {{ $user->username }}</p>
        <p><b>Descriptif: </b>{{$user->descriptif}}</p>
        <p><b>Context: </b>{{$user->context}}</p>
    </div>
    @elseif(Auth::check() && Auth::user()->admin == 1)
        <div class="container">
            Ta bap
            <h1>{{$user->name}}</h1>
            <p> Auteur: {{ $user->username }}</p>
            <p><b>Descriptif: </b>{{$user->descriptif}}</p>
            <p><b>Context: </b>{{$user->context}}</p>
        </div>

    @else
        @include('partials.posts.401')

    @endif


@endsection