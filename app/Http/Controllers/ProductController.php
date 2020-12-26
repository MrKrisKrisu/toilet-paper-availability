<?php

namespace App\Http\Controllers;

use App\Exceptions\DataParseException;
use App\Models\Product;
use App\Models\ProductAvailability;
use App\Models\Store;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {
    public static function fetchAll() {
        $stores = Store::orderBy('last_checked', 'ASC')->limit(200)->get();
        DB::table('stores')->whereIn('id', $stores->pluck('id'))->update([
                                                                             'last_checked' => Carbon::now()
                                                                         ]);
        $storeString = implode(',', $stores->pluck('id')->toArray());

        $products      = Product::all()->pluck('id')->toArray();
        $productString = implode(',', $products);

        $url = strtr('https://products.dm.de/store-availability/DE/availability?dans=:products&storeNumbers=:stores', [
            ':products' => $productString,
            ':stores'   => $storeString
        ]);

        $client = new Client();

        try {
            $res = $client->get($url);

            self::parseData(json_decode($res->getBody()));
        } catch(GuzzleException $exception) {
            report($exception);
        }
    }

    /**
     * @param $data
     * @throws DataParseException
     */
    private static function parseData($data) {
        if(!isset($data->storeAvailabilities))
            throw new DataParseException();

        $currentTimeWithoutSeconds = Carbon::now()->setSeconds(0);
        $storeStocks               = [];

        foreach($data->storeAvailabilities as $productId => $storeAvailability) {
            $product = Product::updateOrCreate(['id' => $productId]);
            echo "Produkt $productId \r\n";
            foreach($storeAvailability as $availability) {
                $store = Store::updateOrCreate(['id' => $availability->store->storeNumber]);

                ProductAvailability::create([
                                                'store_id'    => $store->id,
                                                'product_id'  => $product->id,
                                                'stock_level' => $availability->stockLevel,
                                                'date'        => $currentTimeWithoutSeconds->toDateString(),
                                                'time'        => $currentTimeWithoutSeconds->toTimeString(),
                                                'created_at'  => $currentTimeWithoutSeconds,
                                                'updated_at'  => $currentTimeWithoutSeconds
                                            ]);

                if(isset($storeStocks[$store->id]))
                    $storeStocks[$store->id] += $availability->stockLevel;
                else
                    $storeStocks[$store->id] = $availability->stockLevel;
            }
        }

        foreach($storeStocks as $storeId => $stock) {
            Store::where('id', $storeId)->update([
                                                     'last_stock' => $stock
                                                 ]);
        }
    }
}
