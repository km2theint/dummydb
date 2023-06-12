<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TUserlog;
use Illuminate\Support\Facades\DB;
use App\Models\T_client;
use App\Models\T_account;

class TUserlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = TUserlog::class;
    public function definition()
    {
        return [
            'account_id' => T_account::pluck('id')->random(),
            'client_id' => T_client::pluck('id')->random(),
            'log' => $this->faker->text(),
            'ctime' => \Carbon\Carbon::now()
        ];
    }
}
