@extends('layouts.app', ['pageTitle' => 'Liste de articles'])

@section('content')
    @if(Session::has('erreur'))
        <h1> {{Session::get('erreur')}} </h1>
    @endif

    {{--Display des derniers posts--}}
<div class="container">
    @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
        <p>{{$post->content}}</p>
        <a href="{{route('posts.show', $post->id)}}">
            <button class="btn btn-default">Voir l'article</button>
        </a>



        @if(Auth::check() && Auth::user()->id == $post->user_id)
            <a href="{{route('posts.edit', $post->id)}}">
                <button class="btn btn-warning">Editer l'article</button>
            </a>
            <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger">Supprimer l'article</button>
            </form>
        @endif


    @endforeach
</div>
@endsection