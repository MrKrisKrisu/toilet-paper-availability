<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateDateColumnsToProductAvailabilities extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('product_availabilities', function(Blueprint $table) {
            $table->time('time')
                  ->nullable()
                  ->after('stock_level');
            $table->date('date')
                  ->nullable()
                  ->after('stock_level');
        });

        DB::table('product_availabilities')->update([
                                                        'date' => DB::raw('DATE(created_at)'),
                                                        'time' => DB::raw('TIME(created_at)')
                                                    ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('product_availabilities', function(Blueprint $table) {
            $table->dropColumn('time');
            $table->dropColumn('date');
        });
    }
}
