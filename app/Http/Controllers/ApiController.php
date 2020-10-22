<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * @param Request $request
     * @return Store[]|\Illuminate\Database\Eloquent\Collection
     */
    public function fetchBbox(Request $request)
    {
        $validated = $request->validate([
                                            'north' => ['required', 'numeric'],
                                            'west'  => ['required', 'numeric'],
                                            'south' => ['required', 'numeric'],
                                            'east'  => ['required', 'numeric'],
                                        ]);
        return Store::where('lat', '<', $validated['north'])
                    ->where('lat', '>', $validated['south'])
                    ->where('lng', '<', $validated['east'])
                    ->where('lng', '>', $validated['west'])
                    ->get();
    }

    public function getTotalStock()
    {
        return number_format(Store::all()->sum('last_stock'), 0, ',', '.');
    }
}
