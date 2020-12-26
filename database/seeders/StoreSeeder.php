<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $json = json_decode(file_get_contents(realpath(dirname(__FILE__)) . '/dmstores.json'));
        foreach($json->stores as $store) {
            Store::updateOrCreate([
                                      'id' => $store->storeNumber
                                  ], [
                                      'name'        => $store->address->name,
                                      'street'      => $store->address->street,
                                      'postal_code' => $store->address->zip,
                                      'city'        => $store->address->city,
                                      'lat'         => $store->location->lat,
                                      'lng'         => $store->location->lon,
                                  ]);
        }
    }
}
