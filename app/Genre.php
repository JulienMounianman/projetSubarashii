<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany('App\Anime');
    }


}
