<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $products = [28171, 127048, 137425, 452740, 452744, 452753, 485695, 485698, 504606, 524535, 525943, 535981, 593761, 594080, 595420, 610544, 708997, 709006, 799358, 842480, 846857, 853483, 863567, 879536];

        foreach($products as $product) {
            Product::updateOrCreate([
                                        'id' => $product
                                    ]);
        }

    }
}
