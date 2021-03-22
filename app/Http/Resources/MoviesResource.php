<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MoviesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [        
            'id' => $this->id,
            'name' => $this->name,
            'genre' => $this->genre,
            'overview' => $this->overview,
            'date' => $this->date
        ];
    }
}
