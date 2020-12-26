<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DailyStock extends Model {
    use HasFactory;

    protected $fillable = ['date', 'stock_level'];
    protected $dates    = ['date'];

    public static function getOrFetch(Carbon $date): ?DailyStock {
        $dailyStock = DailyStock::where('date', $date->toDateString())->first();
        if($dailyStock != null)
            return $dailyStock;

        if($date->isAfter(Carbon::today()) || $date->isToday())
            return null;

        //fetch dailystock and cache it to database
        $stockLevel = (int)ProductAvailability::where('date', $date->toDateString())
                                              ->groupBy(['date', 'store_id', 'product_id'])
                                              ->select(['date', 'store_id', 'product_id', DB::raw('AVG(stock_level) AS stock_level')])
                                              ->get()
                                              ->sum('stock_level');

        return DailyStock::updateOrCreate([
                                              'date' => $date->toDateString()
                                          ], [
                                              'stock_level' => $stockLevel
                                          ]);
    }
}
