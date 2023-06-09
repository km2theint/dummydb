<?php

namespace Database\Factories;

use App\Models\T_account;
use App\Models\T_tenant;
use App\Models\T_client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class T_accountFactory extends Factory
{
    protected $model = T_account::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $clientData = DB::table('t_client')->first();
        $givenname = $this->faker->firstName;
        $fname = $this->faker->lastName;
        $name = $givenname.$fname;
        $email = $this->faker->unique()->safeEmail;
        return [
            'email' => $email,
            'tenant_id' => $clientData->tenant_id,
            'client_id' => $clientData->id,
            'token' => Str::random(30),
            'token_limitation' => $this->faker->datetime(),
            'screen_name' => $name,
            'is_active' => rand(0,1),
            'user_info' => $name.';'.$givenname.';'.$fname.';'.$email,
            'atime' => \Carbon\Carbon::now(),
            'ctime' => \Carbon\Carbon::now()
        ];
    }
}
