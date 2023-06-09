<?php

namespace Database\Factories;

use App\Models\T_client;
use App\Models\T_tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_clientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = T_client::class;

    public function definition()
    {
        return [
            'tenant_id' => T_tenant::all()->random()->id,
            'name' => $this->faker->name(),
            'domain' => $this->faker->sentence(),
            'is_main_domain' => rand(1, 0),
            'is_active' => rand(1, 0),
        ];
    }
}
