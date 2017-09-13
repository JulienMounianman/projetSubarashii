@extends('templates.default')



@section('content')

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




    <form action="{{route('PostComment', ['id'=>$post->id])}}" method="POST">
        {{csrf_field()}}

        <label for="content"></label>
        <textarea rows="4" cols="50" name="content" id="content" name="content" required autofocus></textarea>

        <button type="submit" class="btn btn-primary">
            Publier
        </button>
    </form>





    @foreach($post->comments as $comment)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> {{$comment->user->pseudo}}


                </h3>
            </div>
            <div class="panel-body">
                {{$comment->content}}<br><br>

                <small>Create : {{ $comment->updated_at->diffForHumans(now()) }}
                    <br> Update : {{$comment->created_at->diffForHumans(now())}}</small>
            </div>
        </div>


    @endforeach
@endsection
