<?php

namespace Database\Factories;

use App\Models\T_tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_tenantFactory extends Factory
{
    protected $model = T_tenant::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name('est'),
            'domain' => $this->faker->sentence(),
            'is_active' => rand(0,1),
        ];
    }
}
