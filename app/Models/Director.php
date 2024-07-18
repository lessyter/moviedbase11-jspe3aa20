<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Director extends Model
{
    protected $primaryKey = 'dir_id';
    public $incrementing = false;
    public $timestamps = false;

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'director_movie', 'dir_id', 'mov_id');
    }
}
