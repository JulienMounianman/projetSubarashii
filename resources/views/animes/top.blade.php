@extends('templates.default')

@section('title', 'Classement des Animes')

@section('content')
    <table class="table table-hover table-striped">
        <thead>
        <tr>


            <td>
                Title
                <a href="{{route('AnimeTop',  ['title' => 'title+'])}}"> + </a>
                <a href="{{route('AnimeTop',  ['title' => 'title-'])}}"> - </a>
            </td>
            <td>
                Status
            </td>
            <td>
                Note
                <a href="{{route('AnimeTop',  ['note' => 'note+'])}}"> + </a>
                <a href="{{route('AnimeTop',  ['note' => 'note-'])}}"> - </a>
            </td>
            <td>
                Saison
                <a href="{{route('AnimeTop',  ['season' => 'season+'])}}"> + </a>
                <a href="{{route('AnimeTop',  ['season' => 'season-'])}}"> - </a>
            </td>
            <td>
                Episode
                <a href="{{route('AnimeTop',  ['episode' => 'episode+'])}}"> + </a>
                <a href="{{route('AnimeTop',  ['episode' => 'episode-'])}}"> - </a>
            </td>
            <td>
                Date de sortie</td>
            <td>
                Licencié</td>
        </tr>
        </thead>
        <tbody>
        @foreach($animes as $anime)
            <tr>

                <td><a href="{{route('AnimeShow', ['id'=>$anime->id])}}">{{$anime->title}}</a></td>
                <td>{{$anime->status}}</td>
                <td>{{$anime->note}}</td>
                <td> {{$anime->season}}</td>
                <td>{{$anime->episode}}</td>
                <td>{{$anime->release_date}}</td>
                <td>
                    @if($anime->licenced === 1)
                        Licencié par : {{$anime->vod}}
                         @else
                        <p>Non liencié</p>
                    @endif
                </td>



            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
