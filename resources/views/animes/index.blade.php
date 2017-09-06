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
                <h3 class="panel-title"><a href="{{route('AnimeShow', ['id'=>$anime->id])}}">{{$anime->title}}</a></h3>
            </div>
            <div class="panel-body">
                Genres :
                @foreach($anime->genres as $genre)
                    <button type="button" class="btn btn-info btn-xs">{{ $genre->name }}</button>
                @endforeach
            </div>
        </div>
    @endforeach





@endsection