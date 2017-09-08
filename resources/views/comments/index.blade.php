@extends('templates.default')

@section('title', 'commentaires')

@section('content')
    <table class="table table-hover  table-bordered">
        <thead>
        <tr>

            <td>id</td>
            <td>pseudo</td>
            <td>contenu</td>
            <td>date de création</td>
            <td>date de modification</td>


        </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)
            <tr>

                <td>{{$comment->id}}</td>
                <td>{{$comment->user->pseudo}}</td>
                <td>{{$comment->content}}</td>
                <td>{{$comment->created_at}}</td>
                <td>{{$comment->updated_at}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection