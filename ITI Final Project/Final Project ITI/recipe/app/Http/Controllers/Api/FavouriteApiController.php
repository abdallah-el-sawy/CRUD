<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FavoriteRequest;
use App\Http\Resources\FavouriteResource;
use App\Models\Favourite;
use Illuminate\Http\Request;

class FavouriteApiController extends Controller
{
    public function store(FavoriteRequest $request)
    {
        //store the user favourite recipes
        $favourite = Favourite::create($request->all());

        //the data
        return response()->json([
            'msg' => 'Recipe added to favourites successfully',
            'data' => $favourite
        ]);
    }

        public function show(string $device_id)
    {
            //we added this to show favourites relates to one device with his device id
            //get()-> show all results of this device id 

            // searching for the recipe in favourites to show it
            $favourites = Favourite::where('device_id', $device_id)->get();

            //show section
            return response()->json([
            'msg' => 'Success',
            'Data' => FavouriteResource::collection($favourites)

        ]);
    }


    public function destroy(Request $request)
    {
        // searching for the recipe in favourites to delete
        $favourite = Favourite::where('device_id', $request->device_id)
        ->where('recipe_id', $request->recipe_id)
        ->first();

        //check if the recipe the user gave us is in the favourites
        if (!$favourite) {
            return response()->json([
                'msg' => 'Favourite not found.'
            ]);
        }

        //delete section and the return message
        $favourite->delete();
        return response()->json([
        'msg' => 'Recipe removed from favourites successfully.'
    ]);

    }
}
