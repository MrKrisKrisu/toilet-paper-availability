<?php

namespace App\Http\Controllers;

use App\Models\DailyStock;
use App\Models\Store;
use Carbon\Carbon;

class StoreController extends Controller {
    public function renderStore($id) {

        $store = Store::findOrFail($id);

        return view('store', [
            'store' => $store
        ]);
    }
}
