<?php

namespace Database\Seeders;

use App\Models\T_tenant;
use Illuminate\Database\Seeder;

class FakerTenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        T_tenant::factory()->count(1)->create();
    }
}
