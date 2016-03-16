{{--
{!! Form::open(['route' => 'comments.store', 'method' => 'POST']) !!}

--}}
{{--<div class="form-group">
    {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
</div>--}}{{--




<h2>{{$post->name}} <br> Auteur: {{ $post->user_id }} </h2>
<h1>Commentaires</h1>

<div class="form-group">
    {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
{!! Form::close() !!}
--}}

<div class="panel panel-default">
    <div class="panel-heading">Ajouter un commentaire</div>
    <div class="panel-body">
        {!!
            Form::open(array(
                'route' => 'comments.store',
                'method' => 'POST'
                ))
        !!}

        <div class="form-group">
            {!! Form::label('comment', 'Commentaire') !!}
            {!! Form::textarea('comment', '',
                ['class' => 'form-control',
                'placeholder' => 'Mon commentaire'])
            !!}
            {!! Form::hidden('post_id', $post->id) !!}
        </div>

        {!! Form::submit('Publier le commentaire', ['class' => 'btn btn-warning pull-right']) !!}
        {!! Form::close() !!}
    </div>
</div>

