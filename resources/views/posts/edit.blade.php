@extends('layouts.app', ['pageTitle' => 'Edit de larticle n°'])

@section('content')

{{--Edition des posts par le partial action edit--}}
    @include('partials.posts.form', ['action' => 'edit'])
    @include('partials.posts.errors')

@endsection