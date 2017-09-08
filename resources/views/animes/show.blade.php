@extends('templates.default')



@section('content')


    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">{{$anime->title}}</h3>
        </div>
        <div class="panel-body">

            Synopsis : <br>
            {{$anime->summary}} <br> <br>


            Genres :
            @foreach($anime->genres as $genre)
                <i class="fa fa-tag"></i> {{ $genre->name }}
            @endforeach
            

        </div>
    </div>

@endsection
