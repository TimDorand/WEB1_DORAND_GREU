@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <h1>Contactez-nous</h1>
                <div class="panel panel-default">

                    <div class="panel-body">
                        @if(Auth::check())
                        <div class="form-group">
                            Nom :
                            <div class="form-control">
                               {{Auth::user()->name}}
                            </div>
                            Adresse :
                            <div class="form-control">
                                {{Auth::user()->email}}
                            </div>
                            <br>

                                {!! Form::text('title', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Sujet du mail'
                                ]) !!}
                            <br>
                            <div class="form-group">
                                {!! Form::textarea('content', null, ['class' => 'form-control','placeholder' => 'Contenu' ]) !!}
                            </div>
                            {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
                            {!! Form::close() !!}
                            </div>
                        </div>
                        @else
                            Vous n'etes pas autorisés
                        @endif


                        @if($errors)
                            <br>
                            <div class="alert-warning">
                                @foreach($errors->all() as $error)
                                    <p>{{$error}}</p>
                                @endforeach
                            </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection