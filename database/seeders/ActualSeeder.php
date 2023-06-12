<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TActual;
class ActualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TActual::factory()->count(50)->create();
    }
}
