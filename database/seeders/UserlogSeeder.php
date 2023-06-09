<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TUserlog;
class UserlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TUserlog::factory()->count(100)->create();
    }
}
