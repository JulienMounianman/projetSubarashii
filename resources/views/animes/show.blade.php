@extends('templates.default')
@section('style')
    .panel-head-anime-show {
    background-image: url('{{asset('img/'.$anime->pictures)}}');
    background-repeat: no-repeat;
    background-size: cover;
    }
@endsection


@section('content')



    <div class="panel panel-primary">
        <div class="panel-heading panel-head-anime-show">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <h1 class="titre-anime panel-title text-center"> {{$anime->title}}</h1>

        <div class="panel-body">

            Synopsis : <br>
            {{$anime->summary}} <br> <br>
            vod : <br>
            {{$anime->vod}} <br> <br>
            note : <br>
            {{$anime->note}} <br> <br>
            season : <br>
            {{$anime->season}} <br> <br>
            episode : <br>
            {{$anime->episode}} <br> <br>


            Genres :
            @foreach($anime->genres as $genre)
                <i class="fa fa-tag"></i> {{ $genre->name }}
            @endforeach


        </div>
    </div>

@endsection
