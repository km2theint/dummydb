<?php

namespace Database\Factories;

use App\Models\T_userroll;
use App\Models\T_account;
use App\Models\M_roll;
use Illuminate\Database\Eloquent\Factories\Factory;

class T_userrollFactory extends Factory
{
    protected $model = T_userroll::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $accountByRandom = T_account::inRandomOrder()->first();

        $rollByRandom = M_roll::inRandomOrder()->first();
        
        return [
            'account_id' => $accountByRandom->id,
            'roll_id' => $rollByRandom->id
        ];
    }
}
