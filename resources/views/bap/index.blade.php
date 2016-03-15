@extends('layouts.app')

@section('content')
    @if(Session::has('erreur'))
        <h1>{{Session::get('erreur')}}</h1>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">IIM - Bourse au projet</div>

                    @foreach($baps as $bap)

                @if(Auth::check() && Auth::user()->id == $bap->user_id)

                    <div class="thumbnail col-md-3" style="margin-right:20px; min-height:200px">

                        <a href="{{route('bap.show', $bap->id)}}">
                            <div class="description" style="font-size:1.4em;">
                                {{$bap->id}}. {{$bap->name}}
                            </div>
                        </a>
                        <a href="{{$bap->username}}}}"><p>{{$bap->username}}</p></a>
                        <p>Type de projet {{$bap->type}}</p>

                        {{--Bouton pour valider le projet, appelle la fonction edit du BapController pour modifier la valeur dans la bdd--}}

                        <a href="{{ route('bap.edit', $bap->id)}}" class="btn btn-success btn-line btn-rect">
                            <i class="fa fa-pencil"></i> Editer
                        </a>

                        <br/>
                        <br/>

                        {{--Affiche si le projet est validé ou pas--}}
                        <div class="text-center"
                             @if($bap->validate == 1)
                             style="position:absolute; bottom:0; color:green;"><i class="fa fa-check"></i> Projet validé
                            @else
                                style="position: absolute; bottom: 0; color:red;"><i class="fa fa-close"></i> Projet non validé
                            @endif
                        </div>
                    </div>
                        @else
                        @endif

                        @endforeach
        </div>
    </div>
@endsection