@extends('layouts.app')

@section('content')
    @if(Session::has('erreur'))
        <h1>{{Session::get('erreur')}}</h1>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-user"></i> Votre profil </div>

                        @if(Auth::check() && Auth::user()->id == $user->id)

                            <div class="panel-body">

                                <p><b>Nom </b>{{$user->name}}</p>
                                <p><b>Email </b>{{$user->email}}</p>
                                {{--<p><b>Mot de passe </b>{{$user->password}}</p>--}}
                                <p><b>Création le </b>{{$user->created_at}}</p>
                                <p><b>Mis à jour le </b>{{$user->updated_at}}</p>
                                <p><b>Rôle </b>
                                    @if($user->admin == 1)
                                        Administrateur
                                    @else($user->admin == 0)
                                        Utilisateur
                                    @endif
                                </p>

                                {{--Bouton pour valider le projet, appelle la fonction edit du BapController pour modifier la valeur dans la bdd--}}

                                <a href="{{ route('user.edit', $user->id)}}" class="btn btn-success btn-line btn-rect">
                                    <i class="fa fa-pencil"></i> Editer
                                </a>

                            </div>
                </div>
                @endif


            </div>
        </div>
@endsection