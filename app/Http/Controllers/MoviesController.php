<?php

namespace App\Http\Controllers;

use App\Http\Resources\MoviesResource;
use App\Models\Movie;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
        
    public function movies()
    {
        $movies = Movies::orderBy('date', 'asc')->paginate(50);
        return MoviesResource::collection($movies);
    }

    public function movie()
    {
        $movie = Movie::get();
        while ($movie->isEmpty())
            $movie = Movie::get();
        Movie::truncate();
        return MoviesResource::collection($movie);
    }

    public function postMovie()
    {
        if (!Movie::find($this->request->id))
            Movie::create($this->request->all());
    }

}
