<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TForecast;

class ForecastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TForecast::factory()->count(100)->create();
    }
}
