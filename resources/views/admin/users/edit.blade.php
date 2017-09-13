@extends('templates.admin')

@section('title', 'Edition ...')

@section('content')
    {!! Form::model($user, ['route'=>['AdminUserUpdate', $user->id]]) !!}

    {!! Form::label('email') !!}
    {!! Form::text('email') !!}



    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection