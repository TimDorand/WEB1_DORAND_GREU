@extends('layouts.app')

@section('content')
    <div class="container">
    {!! Form::model($bap, ['route' => ['bap.update', $bap->id], 'method' => 'PUT', 'class'=>'form-group']) !!}

    {{--<div class="form-group">
        <label>Utilisateur</label>
        {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
    </div>--}}

    <div class="form-group">
        <label>Nom du projet</label>
        {!! Form::text('name', null, [
            'class' => 'form-control',
            'placeholder' => 'Nom du projet'
        ]) !!}
    </div>

    <div class="form-group">
        <label>Type du projet</label>
        {!! Form::select('animal', array(
    'Cats' => array('leopard' => 'Leopard'),
    'Dogs' => array('spaniel' => 'Spaniel'),
));!!}
    </div>

    <div class="form-group">
        <label>Descriptif du projet</label>
        {!! Form::text('descriptif', null, [
            'class' => 'form-control',
            'placeholder' => 'Descriptif'
        ]) !!}
    </div>

    <div class="form-group">
        <label>Context du projet</label>
        {!! Form::text('context', null, [
            'class' => 'form-control',
            'placeholder' => 'Context'
        ]) !!}
    </div>

    <div class="form-group">
        <label>Projet validé</label>
        @if($bap->validate == 0)
       {!! Form::checkbox('validate', '1') !!}
        @else($bap->validate == 1)
       {!! Form::checkbox('validate', 'smallInteger', true) !!}
        @endif

    </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}

    {!! Form::close() !!}
    </div>

@endsection