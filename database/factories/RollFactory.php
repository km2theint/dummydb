<?php

namespace Database\Factories;

use App\Models\M_roll;
use Illuminate\Database\Eloquent\Factories\Factory;

class RollFactory extends Factory
{
    protected $model = Roll::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $accountByRandom = App\Account::all()->random();
        $relatedRollName = $tenantByRandom()->get()->name;
        $relatedRollIsActive = $tenantByRandom()->get()->is_active;

        return [
            'name' => $relatedRollName,
            'is_active' => $relatedRollIsActive
        ];
    }
}
