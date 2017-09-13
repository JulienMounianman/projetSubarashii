@extends('templates.default')

@section('title', 'Mon Profil')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading"><img src="{{asset('img/' . auth()->user()->avatar)}}" alt="img" class=""></div>
        <div class="panel-body">

            Nom :<strong>{{auth()->user()->first_name}}</strong>

            @if (auth()->user()->first_name === null )
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                <label for="first_name"></label>
                <input id="first_name" type="text" name="first_name" >
                </form>

            @endif
                <br>

            Prenom : {{auth()->user()->last_name}}  <br>

            Pseudo : {{auth()->user()->pseudo}} <br>

            Role : {{auth()->user()->role}}
            <br>
            E-mail : {{auth()->user()->email}}
            <br>
            Birthdate : {{auth()->user()->birthdate}}
            <br>
            Portfolio : https//{{auth()->user()->portfolio_url}}
            <br>
            Website : http://{{auth()->user()->website_url}}
        </div>
    </div>







@endsection
