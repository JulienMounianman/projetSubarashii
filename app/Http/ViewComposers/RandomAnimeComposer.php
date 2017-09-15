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
        $anime = Anime::inRandomOrder()->get()->first();

        $view->with('randomAnime', $anime);
    }
}
