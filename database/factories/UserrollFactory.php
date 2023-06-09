<?php

namespace Database\Factories;

use App\Model\T_userroll;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserrollFactory extends Factory
{
    protected $model = Userroll::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $accountByRandom = App\Account::all()->random();
        $relatedAccount = $accountByRandom()->get()->random();

        $rollByRandom = App\Roll::all()->random();
        $relatedRoll = $rollByRandom()->get()->random();

        return [
            'account_id' => $relatedAccount->id,
            'roll_id' => $relatedRoll->id
        ];
    }
}
