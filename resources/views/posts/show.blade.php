@extends('layouts.app', ['pageTitle' => 'Article n°'])

@section('content')
    {{--<h2>{{$post->name}} <br> Auteur: {{ $post->username }} </h2>--}}
    <div class="container">
        <h1>{{$post->title}}</h1>
        <h2>{{$post->user->name}}</h2>
        <p>{{$post->content}}</p>


        <h4 class="panel panel-heading">commentaires</h4>

{{-- Affichages de commentaires affilié au post--}}
        <div class=" panel-body">
        @foreach($comments as $commentaire)

            {{--{{ $commentaire->user->name }}--}}
            {{ $commentaire->comment }}
        @endforeach
        </div>
<br/>
<br/>
        {!! Form::open(array(
                'route' => 'comments.store',
                'method' => 'POST'
                ))
        !!}
        <div class="form-group col-md-10">
            {!! Form::text('comment', null,
                ['class' => 'form-control',
                'placeholder' => 'Ajouter un commentaire'])
            !!}
            {!! Form::hidden('post_id', $post->id) !!}
        </div>
        <div class="col-md-2">
            {!! Form::submit('Publier le commentaire', ['class' => 'btn btn-warning pull-right']) !!}

        </div>

        {!! Form::close() !!}
</div>


    {{--@include('comments.index', array($post->id))--}}
    {{--@include('comments.create', array($post->id))--}}

@endsection