@extends('layouts.app', ['pageTitle' => 'Ajouter un article'])

@section('content')

    @include('partials.posts.form', ['action' => 'create'])
    @include('partials.posts.errors')

@endsection