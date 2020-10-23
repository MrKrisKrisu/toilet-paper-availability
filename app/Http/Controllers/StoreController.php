<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function renderStore($id)
    {
        $store = Store::findOrFail($id);

        return view('store', [
            'store' => $store
        ]);
    }
}
