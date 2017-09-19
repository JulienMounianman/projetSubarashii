@extends('templates.admin')

@section('title', 'Edition ...')

@section('content')
    {!! Form::model($user, ['route'=>['AdminUserUpdate', $user->id]]) !!}

{!! Form::label('pseudo') !!}
{!! Form::text('pseudo') !!}
<br>
{!! Form::label('role') !!}
{!! Form::text('role') !!}
<br>
{!! Form::label('birthdate') !!}
{!! Form::date('birthdate') !!}
{{--<br>
    {!! Form::label('avatar') !!}
    {!! Form::file('avatar') !!}
<br>--}}
<br>
{!! Form::label('first_name') !!}
{!! Form::text('first_name') !!}
<br>
{!! Form::label('last_name') !!}
{!! Form::text('last_name') !!}

<br>
{!! Form::submit('Enregistrer') !!}
{!! Form::close() !!}
@endsection