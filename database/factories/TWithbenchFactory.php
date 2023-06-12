<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TWithBench;
use App\Models\T_account;
use App\Models\T_client;

class TWithbenchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = TWithBench::class;

    public function definition()
    {
        return [
            'client_id' => T_client::pluck('id')->random(),
            'year' => $this->faker->year(),
            'month' => $this->faker->month(),
            'count' => rand(1, 100),
            'cost' => rand(100, 1000),
            'ctime' => \Carbon\Carbon::now()
        ];
    }
}
