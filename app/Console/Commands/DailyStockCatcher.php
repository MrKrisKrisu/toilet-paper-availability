<?php

namespace App\Console\Commands;

use App\Models\DailyStock;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DailyStockCatcher extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tpa:dailystock';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int {
        DailyStock::getOrFetch(Carbon::yesterday());
        return 0;
    }
}
