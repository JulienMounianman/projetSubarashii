@extends('templates.admin')

@section('title', 'Edition d\'un Anime')

@section('content')
    {!! Form::model($anime, ['route'=>['AdminAnimeUpdate', $anime->id]]) !!}

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
    {!! Form::label('release_date') !!}
    {!! Form::date('release_date') !!}
    <br>
    {!! Form::label('end_date') !!}
    {!! Form::date('end_date') !!}
    <br>



    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection