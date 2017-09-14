@extends('templates.default')

@section('title', 'Actualité')

@section('content')
    <div class="columns is-multiline">
        @if(count($posts) === 0)
            <div class="message is-info">
                <div class="message-body">
                    Il n'y a pas encore d'articles. Revenez plus tard..;
                </div>
            </div>
        @endif

        @foreach($posts as $post)
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <a href="{{route('PostShow', ['id'=>$post->id])}}">{{$post->title}}</a></h3>
                    </div>
                    <div class="panel-body">
                        <small>Create : {{ $post->updated_at->diffForHumans(now()) }}
                            <br>
                            Update : {{$post->created_at->diffForHumans(now())}}

                        </small>
                        <br>
                        <a href="{{route('UserShow' , ['id' => $post->user->id]) }}"> {{$post->user->pseudo}}</a>
                    </div>
                </div>



        @endforeach
            <nav aria-label="...">
                <ul class="pager">
                    <li class="previous"><a href=""><span aria-hidden="true">&larr;</span> Précédent</a></li>
                    <li class="next"><a href="#">Suivant <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
            </nav>
    </div>



@endsection

