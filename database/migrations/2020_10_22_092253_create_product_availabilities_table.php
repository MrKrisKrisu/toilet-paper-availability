<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_availabilities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('store_id')
                  ->unsigned()
                  ->index();
            $table->bigInteger('product_id')
                  ->unsigned()
                  ->index();
            $table->integer('stock_level')
                  ->unsigned();
            $table->timestamps();

            $table->unique(['store_id', 'product_id', 'created_at']);

            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->foreign('store_id')
                  ->references('id')
                  ->on('stores')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_availabilities');
    }
}
