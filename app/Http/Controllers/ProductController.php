<?php

namespace App\Http\Controllers;

use App\Exceptions\DataParseException;
use App\Models\Product;
use App\Models\ProductAvailability;
use App\Models\Store;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function fetchAll()
    {
        $stores = Store::all()->pluck('id')->toArray();
        $storeString = implode(',', $stores);

        $products = Product::all()->pluck('id')->toArray();
        $productString = implode(',', $products);

        $url = strtr('https://products.dm.de/store-availability/DE/availability?dans=:products&storeNumbers=:stores', [
            ':products' => $productString,
            ':stores'   => $storeString
        ]);

        $client = new Client();
        try {
            $res = $client->get($url);

            self::parseData(json_decode($res->getBody()));
        } catch (GuzzleException $exception) {
            report($exception);
        }
    }

    /**
     * @param $data
     * @throws DataParseException
     */
    private static function parseData($data)
    {
        if (!isset($data->storeAvailabilities))
            throw new DataParseException();

        $currentTimeWithoutSeconds = Carbon::now()->setSeconds(0);

        foreach ($data->storeAvailabilities as $productId => $storeAvailability) {
            $product = Product::updateOrCreate(['id' => $productId]);
            foreach ($storeAvailability as $availability) {
                $store = Store::updateOrCreate(['id' => $availability->store->storeNumber]);

                ProductAvailability::create([
                                                'store_id'    => $store->id,
                                                'product_id'  => $product->id,
                                                'stock_level' => $availability->stockLevel,
                                                'created_at'  => $currentTimeWithoutSeconds,
                                                'updated_at'  => $currentTimeWithoutSeconds
                                            ]);
            }
        }
    }
}