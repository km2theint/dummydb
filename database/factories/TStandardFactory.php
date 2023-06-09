<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\TStandard;
class TStandardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = TStandard::class;
    public function definition()
    {
        
        return [
            'account_id' => DB::table('t_account')->first()->id,
            'client_id' => DB::table('t_client')->first()->id,
            'year' => $this->faker->year(),
            'month' => $this->faker->month(),
            'count' => rand(1, 100),
            'amount' => rand(1, 100),
            'cost' => rand(100, 1000),
            'ctime' => \Carbon\Carbon::now()
        ];
    }
}
