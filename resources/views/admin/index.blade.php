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

                            <a href="{{route('bap.show', $bap->id)}}">
                                <div class="description" style="font-size:1.4em;">
                                {{$bap->id}}. {{$bap->name}}
                                </div>
                            </a>
                            <a href="{{$bap->username}}}}"><p>{{$bap->username}}</p></a>
                            <p>Type de projet {{$bap->type}}</p>

                            {{--Bouton pour valider le projet, appelle la fonction edit du BapController pour modifier la valeur dans la bdd--}}

                            <a href="{{ route('bap.edit', ['id' => $bap->id]) }}" class="btn btn-success btn-line btn-rect">
                                <i class="icon-pencil icon-white"></i> Valider
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