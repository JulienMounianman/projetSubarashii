@extends('templates.default')

@section('title', 'Catégorie : '.$category->name)

@section('content')

    <p>{{ $category->description }}</p>

    <h2 >Articles</h2>

    @foreach($category->posts as $post)
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="{{route('PostShow',['id'=>$post->id])}}">{{$post->title}}</a>
                </h3>
            </div>
            <div class="panel-body">
                Article par {{ $post->user->pseudo }}
                <small>{{$post->created_at}}</small>
            </div>
        </div>


    @endforeach
@endsection

