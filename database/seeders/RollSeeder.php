<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\M_roll;
class RollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        M_roll::factory()->count(50)->create();
    }
}
