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
                    <div class="panel-heading">
                        Le formulaire de soumission
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom du projet</label>
                                <input type="text" class="form-control" placeholder="Ex: Site vitrine d'un restaurant">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom du commanditaire du projet</label>
                                <input type="text" class="form-control" placeholder="Votre nom">
                            </div>
                            <div class="form-group">
                                <label>Type de projet</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Site internet
                                    </label>
                                    <label>
                                        <input type="checkbox"> 3D
                                    </label>
                                    <label>
                                        <input type="checkbox"> Animation 2D
                                    </label>
                                    <label>
                                        <input type="checkbox"> Installation Multimédia
                                    </label>
                                    <label>
                                        <input type="checkbox"> Jeu Vidéo
                                    </label>
                                    <label>
                                        <input type="checkbox"> DVD
                                    </label>
                                    <label>
                                        <input type="checkbox"> Print
                                    </label>
                                    <label>
                                        <input type="checkbox"> CD-ROM
                                    </label>
                                    <label>
                                        <input type="checkbox"> Evenement
                                    </label>
                                    <label>
                                        <input type="checkbox"> Appel d'offre
                                    </label>
                                    <label>
                                        <input type="checkbox"> Business plan
                                    </label>
                                    <br/>
                                    <br/>
                                    <label>
                                        <input type="checkbox"> Autres
                                    </label>
                                    <input placeholder="Précisez">

                                </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Descriptif du projet</label>
                                <input type="text" class="form-control" placeholder="Détails du projets">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contexte de la demande</label>
                                <input type="text" class="form-control" placeholder="Précision sur l'environnement du projet">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Vos objetifs</label>
                                <input type="text" class="form-control" placeholder="Précision sur l'environnement du projet">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraintes particulières</label>
                                <input type="text" class="form-control" placeholder="Précision sur l'environnement du projet">
                            </div>


                            <button type="submit" class="btn btn-default">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection