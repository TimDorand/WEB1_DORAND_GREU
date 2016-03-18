@extends('layouts.app', ['pageTitle' => 'Ajouter un article'])

@section('content')

    {{-- Ajout de post par le partial form--}}
    @include('partials.posts.form', ['action' => 'create'])

    {{--Display des erreurs--}}
    @include('partials.posts.errors')

@endsection