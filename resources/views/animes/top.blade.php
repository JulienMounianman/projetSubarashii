@extends('templates.default')

@section('title', 'Classement des Animes')

@section('content')
    <table class="table table-hover table-striped">
        <thead>
        <tr>


            <td>
                Title
                <a href="{{route('AnimeTop',  ['title' => 'title+'])}}"><br>+ </a>
                /
                <a href="{{route('AnimeTop',  ['title' => 'title-'])}}"> - </a>
            </td>
            <td>
                Note
                <a href="{{route('AnimeTop',  ['note' => 'note+'])}}"><br> + </a>
                /
                <a href="{{route('AnimeTop',  ['note' => 'note-'])}}"> - </a>
            </td>
            <td>
                Saison
                <a href="{{route('AnimeTop',  ['season' => 'season+'])}}"><br> + </a>
                /
                <a href="{{route('AnimeTop',  ['season' => 'season-'])}}"> - </a>
            </td>
            <td>
                Episode
                <a href="{{route('AnimeTop',  ['episode' => 'episode+'])}}"><br> + </a>
                /
                <a href="{{route('AnimeTop',  ['episode' => 'episode-'])}}"> - </a>
            </td>
        </tr>
        </thead>
        <tbody>
        @foreach($animes as $anime)
            <tr>

                <td><a href="{{route('AnimeShow', ['id'=>$anime->id])}}">{{$anime->title}}</a></td>
                <td>{{$anime->note}}</td>
                <td> {{$anime->season}}</td>
                <td>{{$anime->episode}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
