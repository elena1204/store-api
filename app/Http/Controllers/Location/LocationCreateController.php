<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\LocationRepositoryInterface;
use Illuminate\Http\Request;
use App\Location;

class LocationCreateController extends Controller
{
    public function create(Request $request, LocationRepositoryInterface $locationRepository)
    {
        try{

            $location = new Location($request->all());

            $locationRepository->store($location);

            return response()->json([
                'error' => false,
                'message' => 'New location has been added with id #' . $location->id,
                'item' => $location
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ]);
        }

    }
}

