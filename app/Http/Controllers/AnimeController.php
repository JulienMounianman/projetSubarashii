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

    public function top()
    {
        $animes = Anime::all();

        return view('animes.top', ['animes' => $animes]);
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

}
