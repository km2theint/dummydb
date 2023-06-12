<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TBudget;
class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TBudget::factory()->count(50)->create();
    }
}
