<?php

namespace App\Http\Controllers;

use App\Http\Resources\MoviesResource;
use App\Models\Favorites;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function favorites()
    {
        $favorites = Favorites::orderBy('date', 'asc')->paginate(50);
        return MoviesResource::collection($favorites);
    }

    public function addFavorites()
    {
        if (!Favorites::find($this->request->id))
            Favorites::create($this->request->all());
    }

    public function removeFavorites() {
        if (Favorites::find($this->request->id))
            Favorites::find($this->request->id)->delete();
    }

}
