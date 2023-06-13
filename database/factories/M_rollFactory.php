<?php

namespace Database\Factories;

use App\Models\M_roll;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\T_account;
class M_rollFactory extends Factory
{
    protected $model = M_roll::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $accountByRandom = T_account::inRandomOrder()->first();
        $relatedRollName = $accountByRandom->screen_name;
        $relatedRollIsActive = $accountByRandom->is_active;

        return [
            'name' => $relatedRollName,
            'is_active' => $relatedRollIsActive
        ];
    }
}
