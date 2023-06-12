<?php

namespace Database\Seeders;

use App\Models\T_account;
use Illuminate\Database\Seeder;

class FakerAccountSeeder extends Seeder
{
    /*
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        T_account::factory()->count(50)->create();
    }
}
