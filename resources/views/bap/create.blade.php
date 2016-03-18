@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">IIM - Bourse au projet</div>

                </div>

                {{--Formulaire bap create--}}
                <h1>Postez votre demande de Bourse au Projet</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Le formulaire de soumission
                    </div>
                    <div class="panel-body">
                    {{--Début formaulaire--}}

                        {!! Form::open(['route' => 'bap.store', 'method' => 'POST']) !!}

                            <div class="form-group">
                                {!! Form::text('name', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Ex: Site vitrine d\'un restaurant'
                                ]) !!}
                            </div>

<<<<<<< HEAD

                    {{--  <div class="form-group">
                         <label for="exampleInputEmail1">Nom du commanditaire du projet</label>
>>>>>>> origin

                        {!! Form::text('username', null, [
                                   'class' => 'form-control',
                                   'placeholder' => 'Votre nom'
                               ]) !!}
                            </div>
                        --}}


                            <div class="form-group">
                                <label>Type de projet</label>

=======
                            <div class="form-group">
                                <label>Type de projet</label>
                                {{--Select des différents type de projets--}}
>>>>>>> 502def5ff8df5f886f3443cb0359d52c9e69ca4f
                                    {!! Form::select('type', array(
                                    'site_internet' => 'Site Internet',
                                    '3d' =>'3D',
                                    '2d' =>'2D',
                                    'multimedia' =>'Installation Multimédia',
                                    'jeu_video' =>'Jeu Vidéo',
                                    'dvd' =>'DVD',
                                    'print' =>'Print',
                                    'cd-rom' =>'CD-ROM',
                                    'evenement' =>'Evenement',
                                    'appel_doffre' =>'Appel d\'offre',
                                    'business_plan' =>'Business Plan'
                                    ),[
                                    'class' => 'form-control', 'style'=>'display:inline;'])
                                    !!}

                                    <br/>
                                    <br/>

<<<<<<< HEAD

                                   {{-- <label>
                                        <input name="type" type="checkbox"> Autres
                                    </label>--}}

=======
>>>>>>> 502def5ff8df5f886f3443cb0359d52c9e69ca4f
                                    {!! Form::text('typeother', null, [
                                          'class' => ' ',
                                          'placeholder' => 'Autres'
                                      ]) !!}

<<<<<<< HEAD

                                </div>

=======
                                </div>
>>>>>>> 502def5ff8df5f886f3443cb0359d52c9e69ca4f

                                <label for="">Descriptif du projet</label>
                                {!! Form::text('descriptif', null, [
                                          'class' => 'form-control',
                                          'placeholder' => 'Détails du projet'
                                      ]) !!}

                                <label for="">Contexte de la demande</label>
                                {!! Form::text('context', null, [
                                          'class' => 'form-control',
                                          'placeholder' => 'Précision sur l\'environnement du projet'
                                      ]) !!}

                                <label for="">Vos objetifs</label>
                                {!! Form::text('objectif', null, [
                                          'class' => 'form-control',
                                          'placeholder' => 'Objectifs du projet'
                                      ]) !!}

                                <label for="">Contraintes particulières</label>
                                {!! Form::text('contrainte', null, [
                                          'class' => 'form-control',
                                          'placeholder' => 'Les contraintes du projet'
                                      ]) !!}

                                <span style="display:none;">
                                    {!! Form::number('validate','0') !!}}
                                </span>
                              <br/>

<<<<<<< HEAD

                                {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}



                            {!! Form::close() !!}

=======
>>>>>>> 502def5ff8df5f886f3443cb0359d52c9e69ca4f
                                {!! Form::submit('Envoyer', ['class' => ' form-control']) !!}

                            {!! Form::close() !!}
                            {{--fin du formulaire--}}

                        @if($errors)
                            <br>
                            <div class="alert-warning">
                                @foreach($errors->all() as $error)
                                    <p>{{$error}}</p>
                                @endforeach
                            </div>
<<<<<<< HEAD

=======
>>>>>>> 502def5ff8df5f886f3443cb0359d52c9e69ca4f

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection