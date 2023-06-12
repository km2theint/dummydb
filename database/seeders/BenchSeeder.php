<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TWithBench;
class BenchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TWithBench::factory()->count(50)->create();
    }
}
