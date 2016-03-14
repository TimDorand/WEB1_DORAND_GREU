@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">IIM - Bourse au projet</div>

                </div>
                <h1>Postez votre demande de Bourse au Projet</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Le formulaire de soumission
                    </div>
                    <div class="panel-body">

                        {{-- Utilisation du Form::
                             TODO: 1. Faire la même chose pour les autres inputs 2.Validation dans BapController function store avec Requests\ValidateBapRequest


                                --}}
                        {!! Form::open(['route' => 'bap.store', 'method' => 'POST']) !!}

                            <div class="form-group">
                                {!! Form::text('name', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Ex: Site vitrine d\'un restaurant'
                                ]) !!}
                            </div>

                            {{--<div class="form-group">
                                <label for="">Nom du projet</label>
<<<<<<< HEAD
                                <input name="name" type="text" class="form-control" placeholder="Ex: Site vitrine d'un restaurant">
                            </div>--}}
=======
                                {!! Form::text('name', null, [
                                         'class' => 'form-control',
                                         'placeholder' => 'Ex: Site vitrine d\'un restaurant'
                                     ]) !!}
                            </div>
>>>>>>> 8bf4bd44c1ea24320aa249961db710525420d893
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom du commanditaire du projet</label>

                                {!! Form::text('username', null, [
                                          'class' => 'form-control',
                                          'placeholder' => 'Votre nom'
                                      ]) !!}
                            </div>

                            <div class="form-group">
                                <label>Type de projet</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="type" value="site_internet" type="checkbox"> Site internet
                                    </label>
                                    <label>
                                        <input name="type" type="checkbox" value="3d"> 3D
                                    </label>
                                    <label>
                                        <input name="type" type="checkbox" value="2d"> Animation 2D
                                    </label>
                                    <label>
                                        <input name="type" type="checkbox" value="mutlimedia"> Installation Multimédia
                                    </label>
                                    <label>
                                        <input name="type" type="checkbox" value="jeu_video"> Jeu Vidéo
                                    </label>
                                    <label>
                                        <input name="type" type="checkbox" value="dvd"> DVD
                                    </label>
                                    <label>
                                        <input name="type" type="checkbox" value="print"> Print
                                    </label>
                                    <label>
                                        <input name="type" type="checkbox" value="cd-rom"> CD-ROM
                                    </label>
                                    <label>
                                        <input name="type" type="checkbox" value="evenement"> Evenement
                                    </label>
                                    <label>
                                        <input name="type" type="checkbox" value="appel_doffre"> Appel d'offre
                                    </label>
                                    <label>
                                        <input name="type" type="checkbox" value="business_plan"> Business plan
                                    </label>
                                    <br/>
                                    <br/>
                                    <label>
                                        <input name="type" type="checkbox"> Autres
                                    </label>
                                    <input name="typeother" placeholder="Précisez">

                                </div>
                            <div class="form-group">
                                <label for="">Descriptif du projet</label>
                                <input name="descriptif" type="text" class="form-control" placeholder="Détails du projets">
                            </div>
                            <div class="form-group">
                                <label for="">Contexte de la demande</label>
                                <input name="context" type="text" class="form-control" placeholder="Précision sur l'environnement du projet">
                            </div>
                            <div class="form-group">
                                <label for="">Vos objetifs</label>
                                <input name="objectif" type="text" class="form-control" placeholder="Précision sur l'environnement du projet">
                            </div>
                            <div class="form-group">
                                <label for="">Contraintes particulières</label>
                                <input type="text" class="form-control" placeholder="Précision sur l'environnement du projet">
                            </div>


                            <button type="submit" class="btn btn-default">Envoyer</button>
                        {{--</form>--}}
                            {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection