@extends('templates.default')



@section('content')
    Tags :
    @foreach($post->tags as $tag)
        <i class="fa fa-tag"></i> {{ $tag->tag }}
    @endforeach


    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">{{$post->title}}</h3>
        </div>
        <div class="panel-body">
            <strong> {{$post->user->pseudo}} <br> <br> </strong>

            {{$post->content}} <br> <br>



            <small>Create : {{ $post->updated_at->diffForHumans(now()) }}
                <br> Update : {{$post->created_at->diffForHumans(now())}}</small>
        </div>
    </div>

@endsection