<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FavouriteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'recipe_id' => $this->recipe_id,
            'device_id' => $this->device_id,
            'recipe' => new RecipeResource($this->recipe), // علشان الوصفه متطبعش زي ما في الجدول بعمل دي علشان اعديها علي الريسورس علشان اديها شكل جيسون ال انا عايزه
            'date' => $this->created_at

        ];
    }
}
