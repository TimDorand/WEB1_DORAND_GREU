@extends('layouts.app')

@section('content')

    <h2>{{$comments->id}}</h2>
    <p>{{$comments->comment}}</p>

@endsection