<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $post = Post::query();
        $post->select();

        $post->orderBy('updated_at', 'desc')->paginate(5);

        $resultats = $post->get();


        return view('posts.index', ['posts' => $resultats]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id The Id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', ['post' => $post]);

    }

    public function comment(Request $request ,  $id)
    {
        $this->validate($request, [
            'content' => 'required|string',
        ]);
        $data = $request->all();

        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $id;


        $comment = Comment::create($data);



        return redirect()->route('PostShow', ['id' => $id]);

    }





}
