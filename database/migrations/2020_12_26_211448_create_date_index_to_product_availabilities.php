<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDateIndexToProductAvailabilities extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('product_availabilities', function(Blueprint $table) {
            $table->index(['date', 'product_id', 'stock_level'], 'date_product_stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('product_availabilities', function(Blueprint $table) {
            $table->dropIndex('date_product_stock');
        });
    }
}
