@extends('layouts.app')

@section('content')

    <h2>{{$comment->id}}</h2>
    <p>{{$comment->comment}}</p>

@endsection