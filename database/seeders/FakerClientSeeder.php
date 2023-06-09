<?php

namespace Database\Seeders;

use App\Models\T_client;
use Illuminate\Database\Seeder;

class FakerClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        T_client::factory()->count(50)->create();
    }
}
