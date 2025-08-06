<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable=['name', 'ingredients', 'steps'];

    public function favourites()
{
    return $this->hasMany(Favourite::class);
     //hasMany->اكتر من حاجه 
}

}
