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
        // $clientData = DB::table('t_client')->random();
        // $clientData = T_client::all()->random()->get();
        // var_dump($clientData->client_id);
        $clientID = T_client::pluck('id')->random();
        $tenantID = T_client::where('id', $clientID)->pluck('tenant_id');
        

        $givenname = $this->faker->firstName;
        $fname = $this->faker->lastName;
        $name = $givenname.$fname;
        $email = $this->faker->unique()->safeEmail;
        return [
            'email' => $email,
            'tenant_id' => $tenantID[0],
            'client_id' => $clientID,
            'token' => Str::random(30),
            'token_limitation' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'name' => $name,
            'is_active' => rand(0,1),
            'user_info' => "{'name': $name, 'givename': $givenname, 'fname': $fname, 'email': $email}",
            'atime' => \Carbon\Carbon::now(),
            'ctime' => \Carbon\Carbon::now()
        ];
    }
}