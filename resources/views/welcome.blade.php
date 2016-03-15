@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="jumbotron">
                    <h1> Bienvenue
                        @if(Auth::check())
                            <b style="font-weight:300">{{Auth::user()->name}}</b> sur la plateforme de soumission de BAP !</h1>
                    @else
                        sur la plateforme de soumission de BAP !</h1>
                        <p>Veuillez vous inscrire pour continuer</p>

                        <a href="register"><button class="btn btn-primary">Inscription</button></a>
                        <a href="login"><button class="btn btn-default">Connexion</button></a>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection