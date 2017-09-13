<?php

namespace App\Http\ViewComposers;

use App\Anime;
use Illuminate\View\View;


class RandomAnimeComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $animes = Anime::query();
        $animes->select();


        $animes->where('title','=','Profit-focused nextgeneration approach');


        $resultats = $animes->get();



        $view->with('randomAnime', $resultats);
    }
}