<?php

namespace App\Http\ViewComposers;

use App\Comment;
use Illuminate\View\View;


class LastCommentsComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $animes = Comment::query();
        $animes->select();


            $animes->orderBy('updated_at', 'desc');

        $resultats = $animes->get();





            $view->with('commentaires', $resultats[0] );




    }


}
