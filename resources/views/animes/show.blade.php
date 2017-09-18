@extends('templates.default')



@section('content')


    <div class="panel panel-primary">
        <div class="panel-heading">

            <h1 class="titre-anime panel-title text-center">{{$anime->title}}</h1>
            <img src="{{asset('img/'.$anime->pictures)}}" alt="image-anime" class="image-anime">

        </div>
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
