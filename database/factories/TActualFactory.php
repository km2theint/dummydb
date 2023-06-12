<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TActual;
use App\Models\T_client;
use App\Models\T_account;
class TActualFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = TActual::class;

    public function definition()
    {
        return [
            'account_id' => T_account::pluck('id')->random(),
            'client_id' => T_client::pluck('id')->random(),
            'year' => $this->faker->year(),
            'month' => $this->faker->month(),
            'count' => rand(1, 100),
            'amount' => rand(1, 100),
            'cost' => rand(100, 1000),
            'ctime' => \Carbon\Carbon::now()
        ];
    }
}
