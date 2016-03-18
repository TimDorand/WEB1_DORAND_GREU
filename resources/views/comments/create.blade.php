@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Ajouter un commentaire</div>
    <div class="panel-body">
        {!! Form::open(array(
                'route' => 'comments.store',
                'method' => 'POST'
                ))
        !!}

        <div class="form-group">
            {!! Form::label('comment', 'Commentaire') !!}
            {!! Form::text('comment', '',
                ['class' => 'form-control',
                'placeholder' => 'Mon commentaire'])
            !!}
            {!! Form::hidden('post_id', $post->id) !!}
        </div>

        {!! Form::submit('Publier le commentaire', ['class' => 'btn btn-warning pull-right']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection