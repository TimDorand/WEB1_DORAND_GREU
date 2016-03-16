@extends('layouts.app')

@section('content')
   {{-- @if(Session::has('erreur'))
        <h1> {{Session::get('erreur')}} </h1>
    @endif--}}

    @foreach($comments as $comment)
        <h3>{{$comment->id}}</h3>
        <p>{{$comment->comment}}</p>
        <a href="{{route('comments.show', $comment->id)}}">
            <button>Voir le truc</button>
        </a>



       {{-- @if(Auth::check() && Auth::user()->id == $post->user_id)
            <a href="{{route('posts.edit', $post->id)}}">
                <button>Editer l'article</button>
            </a>
            <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button>Supprimer l'article</button>
            </form>
        @endif--}}


    @endforeach

@endsection