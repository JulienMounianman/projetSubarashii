@extends('templates.admin')

@section('title', 'Liste des animes')

@section('content')


    <form action="{{ route('AdminAnimeIndex')  }}" method="get">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="title" placeholder="Search for...">
            <span class="input-group-btn">
        <input type="submit" class="btn btn-default" value="Go !">
      </span>
        </div>

    </form>
    <br>




    <label class="checkbox-inline">
        <a href="{{ route('AnimeIndex', ['genre'=>1]) }}">Romance</a>
    </label>
    <label class="checkbox-inline">
        <a href="{{ route('AnimeIndex', ['genre'=>2]) }}">Action</a>
    </label>
    <label class="checkbox-inline">
        <a href="{{ route('AnimeIndex', ['genre'=>3]) }}">Aventure</a>
    </label>
    <label class="checkbox-inline">
        <a href="{{ route('AnimeIndex', ['genre'=>4]) }}">Ecchi</a>
    </label>
    <label class="checkbox-inline">
        <a href="{{ route('AnimeIndex', ['genre'=>5]) }}">Magica girl</a>
    </label>
    <label class="checkbox-inline">
        <a href="{{ route('AnimeIndex', ['genre'=>6]) }}">Harem</a>
    </label>
    <label class="checkbox-inline">
        <a href="{{ route('AnimeIndex', ['genre'=>7]) }}">School Life</a>
    </label>
    <br>
    <br>
    <br>



    <br>
    @foreach($animes as $anime)

        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="{{route('AnimeShow', ['id'=>$anime->id])}}">{{$anime->title}}


                    </a>
                </h3>
            </div>
            <div class="panel-body">




                Genres :
                @foreach($anime->genres as $genre)
                    <button type="button" class="btn btn-info btn-xs">{{ $genre->name }}</button>
                @endforeach
                <a href="{{route('AdminAnimeEdit', ['id'=>$anime->id])}}"><button type="button" class="btn btn-default btn-xs">Editer</button></a>
                <a href="{{route('AdminAnimeDestroy', ['id'=>$anime->id])}}"><button type="button" class="btn btn-default btn-xs">Supprimer</button></a>
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#myModal">
                    En savoir plus
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">

                                                {{$anime->title}}
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            {{$anime->pictures}} <br>

                                            @if ($anime->licenced === 1)
                                                <p>Licencié par {{$anime->vod }}</p>
                                            @endif

                                            Saison : {{$anime->season}}  / Episode : {{$anime->episode}} <br>
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