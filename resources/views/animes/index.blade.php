@extends('templates.default')

@section('title', 'Liste des Animes')

@section('content')


    <form action="{{ route('AnimeIndex')  }}" method="get">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="title" placeholder="Search for...">
            <span class="input-group-btn">
        <input type="submit" class="btn btn-default" value="Go !">
      </span>
        </div>

    </form>
    <br>



    <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>1]) }}">Action</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>2]) }}">Combat</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>3]) }}">Cyber & Mecha </a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>4]) }}">Ecchi</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>5]) }}">Epique & Héroique</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>6]) }}">Fantastique & Mythe</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>7]) }}">Harem</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>8]) }}">Musical</a>
        </div>

        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>9]) }}">Romance</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>10]) }}">Amour & Amitié</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>11]) }}">Comédie</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>12]) }}">Fantasy</a>
        </div>

        <div class="col-md-3  col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>13]) }}">Educatif</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>14]) }}">Espace & Sci-Fiction</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>15]) }}">Historique</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>16]) }}">School Life</a>
        </div>

        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>17]) }}">Sport</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>18]) }}">Aventure</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>19]) }}">Contes & Récits</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>20]) }}">Drame</a>
        </div>

        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>21]) }}">Enigme & Policier</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>22]) }}">Familial & Jeunesse</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>23]) }}">Gastronomie</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>24]) }}">Horreur</a>
        </div>

        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>25]) }}">Magical Girl</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>26]) }}">Psychologie</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>27]) }}">Surnaturel</a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 text-center">
            <a class="btn btn-default btn-xs" href="{{ route('AnimeIndex', ['genre'=>28]) }}">Tranche de vie</a>
        </div>
    </div>
    <br>
    <br>
    <br>



    <br>
    @foreach($animes as $anime)

        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="{{route('AnimeShow', ['id'=>$anime->id])}}">{{$anime->title}}</a>
                </h3>
            </div>
            <div class="panel-body">
                Genres :
                @foreach($anime->genres as $genre)
                    <button type="button" class="btn btn-info btn-xs">{{ $genre->name }}</button>
            @endforeach

            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                        data-target="#modal-{{$anime->id}}">
                    En savoir plus
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modal-{{$anime->id}}" tabindex="-1" role="dialog"

                     aria-labelledby="myModalLabel"
                     data-backdrop="false" >

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">

                                    {{$anime->title}}
                                </h4>
                            </div>
                            <div class="modal-body">
                                {{$anime->pictures}} <br>

                                @if ($anime->licenced === 1)
                                    <p>Licencié par {{$anime->vod }}</p>
                                @endif

                                Saison : {{$anime->season}} / Episode : {{$anime->episode}} <br>
                                Statut : {{$anime->status}}

                                Synopsis : <br>
                                {{$anime->summary}}

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    @endforeach

@endsection


