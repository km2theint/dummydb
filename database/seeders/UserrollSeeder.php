<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\T_userroll;
class UserrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        T_userroll::factory()->count(50)->create();
    }
}
