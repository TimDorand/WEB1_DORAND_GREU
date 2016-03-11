@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">IIM - Bourse au projet</div>

                    <div class="panel-body">
                        Bienvenue sur la plateforme de soumission de BAP pour l'IIM
                        <br/>
                        Veuillez vous inscrire pour poursuivre.
                    </div>
                </div>
                <div class="panel panel-default">
                    <a href="bap/create">
                        <div class="panel-heading">
                            Le formulaire de soumission
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection