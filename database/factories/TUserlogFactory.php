<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TUserlog;
use Illuminate\Support\Facades\DB;
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
            'account_id' => DB::table('t_account')->first()->id,
            'client_id' => DB::table('t_client')->first()->id,
            'log' => $this->faker->text(),
            'ctime' => \Carbon\Carbon::now()
        ];
    }
}
