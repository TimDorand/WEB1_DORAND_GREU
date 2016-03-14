@extends('layouts.app', ['pageTitle' => 'Edit de larticle n°'])

@section('content')


    @include('partials.posts.form', ['action' => 'edit'])
    @include('partials.posts.errors')

@endsection