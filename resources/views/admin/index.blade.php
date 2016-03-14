@extends('layouts.app')

@section('content')

    @if(Session::has('erreur'))
        <h1>{{Session::get('erreur')}}</h1>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Page Administration</div>

                    <div class="panel-body">
                      Vous trouverez ci-dessous les dernières soumissions de Bourse au projets.
                    </div>
                </div>

                    {{-- Boucle pour afficher tous les --}}
                    @foreach($baps as $bap)
                    <div class="thumbnail col-md-3" style="margin-right:20px; min-height:200px">

                        <div class="description" style="font-size:1.4em;">
                            {{$bap->id}}. {{$bap->name}}
                        </div>
                        <p>{{$bap->username}}</p>
                        <p>Type de projet {{$bap->type}}</p>
                        {{--<b>Descriptif</b>
                        <p>{{$bap->descriptif}}</p>
                        <b>Contexte</b>
                        <p>{{$bap->context}}</p>
                        <b>Objectif</b>
                        <p>{{$bap->objectif}}</p>
                        <b>Contrainte</b>
                        <p>{{$bap->contrainte}}</p>--}}

                        <a href="profile/{{$bap->username}}">
                            <button class="btn btn-default">Voir le client</button>
                        </a>
                        <a href="{{route('bap.show', $bap->id)}}">
                            <button class="btn btn-default">Voir le projet</button>
                        </a>



                        @if(Auth::check() && Auth::user()->id == $bap->user_id)
                            <a href="{{route('bap.edit', $bap->id)}}">
                                <button class="btn btn-warning">Editer l'article</button>
                            </a>

                            <form action="{{route('bap.destroy', $bap->id)}}" method="POST" style="display: inline;;">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">Supprimer l'article</button>
                            </form>
                        @endif
                    </div>
                        @endforeach
                </div>
            </div>
        </div>

@endsection