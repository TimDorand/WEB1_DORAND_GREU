@extends('layouts.app', ['pageTitle' => 'Article n°'])

@section('content')
    {{--<h2>{{$post->name}} <br> Auteur: {{ $post->username }} </h2>--}}
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>

    {{--@foreach($comments as $comment)
        <p><strong>{{ $comment->user->name }}</strong> <br>
            {{ $comment->comment }}</p>
        @if(Auth::check()
        && (Auth::user()->id == $comment->user_id
        || Auth::user()->admin)
        )
            <a class="btn btn-xs btn-success" href="{{ route('comments.edit', $comment->id) }}">Éditer</a>

            {!! Form::model($comment, array(
            'route' => array('comments.destroy', $comment->id),
            'method' => 'DELETE')) !!}
            {!! Form::submit('Supprimer', ['class' => 'btn btn-xs btn-danger pull-right']) !!}
            {!! Form::close() !!}
        @endif
        <hr>
    @endforeach--}}

    {{--@foreach($comments as $comment)
        <a href="{{route('comments.show', $comment->id)}}">
            <button>Voir l'article</button>
        </a>



        @if(Auth::check() && Auth::user()->id == $comment->user_id)
            <a href="{{route('comments.edit', $comment->id)}}">
                <button>Editer l'article</button>
            </a>
            <form action="{{route('comments.destroy', $comment->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button>Supprimer l'article</button>
            </form>
        @endif


    @endforeach--}}


    @include('comments.show', array($post->id))
    @include('comments.create', array($post->id))

@endsection