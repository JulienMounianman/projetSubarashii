@extends('templates.default')

@section('title', 'Mon Profil')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading"><img src="{{asset('img/' . auth()->user()->avatar)}}" alt="img" ></div>
        <div class="panel-body">

            Nom :<strong>{{auth()->user()->first_name}}</strong> <br>

            Prenom : {{auth()->user()->last_name}}  <br>

            Pseudo : {{auth()->user()->pseudo}} <br>

            Role : {{auth()->user()->role}}
            <br>
            E-mail : {{auth()->user()->email}}
            <br>
            Birthdate : {{auth()->user()->birthdate}}
            <br>
        </div>
    </div>



    {!! Form::model($user, ['route'=>['UserUpdate', $user->id]]) !!}

    {!! Form::label('pseudo') !!}
    {!! Form::text('pseudo') !!}


    <br>
    {!! Form::label('birthdate') !!}
    {!! Form::date('birthdate') !!}
<br>
        {!! Form::label('password') !!}
        {!! Form::password('password') !!}

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
