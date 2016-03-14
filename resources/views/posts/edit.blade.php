@extends('layouts.app')

@section('content')

test
    {!! Form::model($bap, ['route' => ['bap.update', $bap->id], 'method' => 'PUT']) !!}



    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}

    {!! Form::close() !!}


@endsection