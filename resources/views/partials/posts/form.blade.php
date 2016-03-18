@if (Auth::check() && Auth::user()->admin == 1)

    @if($action == 'edit')
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    @else
        {!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!}
    @endif
{{--<div class="form-group">--}}
    {{--{!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}


<div class="container">
    <div class="form-group">
        {!! Form::label('Titre') !!}
        {!! Form::text('title', null, [
            'class' => 'form-control',
            'placeholder' => 'Nom de l\'article'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Contenu') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder'=>'Contenu']) !!}
    </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
    {!! Form::close() !!}
</div>
    @else

    @include('partials.posts.401')

@endif