<?php

namespace App\Http\Controllers;

use App\Anime;
use \Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index(Request $request, $genre = null)
    {
        $animes = Anime::query();
        $animes->select();
        if ($request->has('title')) {
            $animes->where('title', 'like', '%' . $request->get('title') . '%');
        }
        if ($genre !== null) {
            $animes->whereHas('genres', function ($query) use ($genre) {
                $query->where('genres.id', '=', $genre);
            });
        }

        $resultats = $animes->get();

        return view('animes.index', ['animes' => $resultats, 'genre' => $genre]);
    }

    public function top($trie = 'note')
    {

        $animes = Anime::query();
        $animes->select();

        if ($trie === 'note+') {
            $animes->orderBy('note', 'desc');
        }
        if ($trie === 'season+') {
            $animes->orderBy('season', 'desc');
        }
        if ($trie === 'episode+') {
            $animes->orderBy('episode', 'desc');
        }
        if ($trie === 'title+') {
            $animes->orderBy('title', 'asc');
        }
        if ($trie === 'note-') {
            $animes->orderBy('note', 'asc');
        }
        if ($trie === 'season-') {
            $animes->orderBy('season', 'asc');
        }
        if ($trie === 'episode-') {
            $animes->orderBy('episode', 'asc');
        }
        if ($trie === 'title-') {
            $animes->orderBy('title', 'desc');
        }








        $resultats = $animes->get();
        return view('animes.top', ['animes' => $resultats , 'trie' => $trie]);
    }

    public function show($id)
    {

        $anime = Anime::findOrFail($id);

        return view('animes.show', ['anime' => $anime]);

    }



//    public function search($titre)
//    {
//
//        $anime = Anime::findOrFail($titre);
//
//        return view('animes.search', ['anime' => $anime]);
//
//    }

    public function random (){

        $anime = Anime::inRandomOrder()->get();



        return view('elements.random', ['anime' => $anime]);
    }

}
