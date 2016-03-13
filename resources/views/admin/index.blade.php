@extends('layouts.app')

@section('content')

    @if(Session::has('erreur'))
        <h1>{{Session::get('erreur')}}</h1>
    @endif

    {{-- Accès à l'administration si connecté en tant qu'admin--}}
    @if(Auth::check() && Auth::user()->admin == 1)

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Page Administration</div>

                    <div class="panel-body">
                      Vous trouverez ci-dessous les dernières soumissions de Bourse au projets.
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container">
        <h1>Vous n'êtes pas admin, vous n'avez pas accès à cette partie du site</h1>
        <?php  header( "refresh:2;url='../public'" );
        ?>
    </div>
    @endif

@endsection