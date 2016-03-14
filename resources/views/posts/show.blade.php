@extends('layouts.app', ['pageTitle' => 'Article n°'])

@section('content')
    <h2>{{$post->name}} <br> Auteur: {{ $post->username }} </h2>
    <p>{{$post->content}}</p>

@endsection