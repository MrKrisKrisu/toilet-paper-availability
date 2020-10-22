<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name')
                  ->nullable()
                  ->default(null);
            $table->string('street')
                  ->nullable()
                  ->default(null);
            $table->string('postal_code')
                  ->nullable()
                  ->default(null);
            $table->string('city')
                  ->nullable()
                  ->default(null);
            $table->decimal('lat', 8, 5)
                  ->nullable()
                  ->default(null);
            $table->decimal('lng', 8, 5)
                  ->nullable()
                  ->default(null);
            $table->timestamp('last_checked')
                  ->nullable()
                  ->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
