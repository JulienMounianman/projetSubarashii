@extends('templates.admin')

@section('title', 'Ajout D\'un anime')

@section('content')
    {!! Form::open(['route'=>'AdminAnimeStore']) !!}

    {!! Form::label('title') !!}
    {!! Form::text('title') !!}
    <br>
    {!! Form::label('status') !!}
    {!! Form::text('status') !!}
    <br>
    {!! Form::label('pictures') !!}
    {!! Form::text('pictures') !!}
    <br>
    {!! Form::label('vod') !!}
    {!! Form::text('vod') !!}
    <br>
    {!! Form::label('summary') !!}
    {!! Form::textarea('summary') !!}
    <br>
    {!! Form::label('note') !!}
    {!! Form::text('note') !!}
    <br>
    {!! Form::label('season') !!}
    {!! Form::text('season') !!}
    <br>
    {!! Form::label('episode') !!}
    {!! Form::text('episode') !!}
    <br>
    {!! Form::label('licenced') !!}
    {!! Form::text('licenced') !!}
    <br>
    {!! Form::label('Genres de l\'animés') !!}
    {!! Form::select('anime.genres[]', $genres, null, ['multiple'=>true,'class' => 'form-control']) !!}
    <br>
    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}


@endsection