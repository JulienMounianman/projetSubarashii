<?php

namespace App\Http\Controllers\Admin;

use App\Anime;
use App\Genre;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        return view('admin.animes.index', ['animes' => $resultats, 'genre' => $genre]);
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
        return view('admin.animes.top', ['animes' => $resultats, 'trie' => $trie]);
    }

    public function show($id)
    {

        $anime = Anime::findOrFail($id);

        return view('admin.animes.show', ['anime' => $anime]);

    }


    public function create()
    {
        $genres = Genre::all()->pluck('name', 'id');

        return view('admin.animes.create',
            [
                'genres' => $genres,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'status' => 'required|string',
            'summary' => 'required|string',
            'vod' => 'required|string',
            'note' => 'required|integer',
            'season' => 'required|integer',
            'episode' => 'required|integer',
            'licenced' => 'required|boolean',
            'release_date' => 'required|date',
            'end_date' => 'required|date',
        ]);




        $data = $request->all();
        $data['pictures']= $request->pictures->store('uploads', 'public');


        if (isset($data['anime_genres'])) {
            $genres = $data['anime_genres'];
        } else {
            $genres = [];
        }

        $data['user_id'] = auth()->user()->id;

        $anime = Anime::create($data);

        // Redirection et message
        if ($anime->exists) {
            if (count($genres) > 0) {
                $anime->genres()->attach($genres);
            }
            Session::flash('message', 'Nouvel anime créé');
            return redirect()->route('AdminAnimeIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminAnimeCreate');
        }
    }


    public function edit($id)
    {
        $genres = Genre::all()->pluck('name', 'id');
        $anime = Anime::findOrFail($id);


        return view('admin.animes.edit', ['anime' => $anime ,'genres' => $genres]);
    }

    public function update(Request $request, $id)
    {
        // validation des données
        $this->validate($request, [
            'title' => 'required|string',
            'status' => 'required|string',
            'summary' => 'required|string',
            
            'vod' => 'required|string',
            'note' => 'required|integer',
            'season' => 'required|integer',
            'episode' => 'required|integer',
            'licenced' => 'required|boolean',
            'release_date' => 'required|date',
            'end_date' => 'required|date',

        ]);

        $data = $request->all();

        $data['pictures']= $request->pictures->store('uploads', 'public');

        if (isset($data['anime_genres'])) {
            $genres = $data['anime_genres'];
        } else {
            $genres = [];
        }


        $anime = Anime::findOrFail($id);


        if ($anime->exists) {
                if (count($genres) > 0) {
                    $anime->genres()->attach($genres);
                }

            if ($anime->update($data)) {
                Session::flash('message', 'Anime mise à jour');
                return redirect()->route('AdminAnimeIndex');
        }} else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminAnimeEdit', ['id' => $id]);
        }
    }

    public function destroy($id)
    {
        $anime = Anime::findOrFail($id);
        $genres = $anime->genres;
        foreach($genres as $genre)
        {
            $anime->genres()->detach($genre);
        }
        $anime->delete();

        Session::flash('message', 'Animé supprimé');

        return redirect()->route('AdminAnimeIndex');
    }
}
