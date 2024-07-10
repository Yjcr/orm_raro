<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\City;
use App\Models\Company;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city_id'=> City::all()->random()->id,
            'company_id'=> Company::all()->random()->id,
            'user_id'=>User::all()->random()->id,
            'name'=>$this->faker->sentence(),
            'execution_date'=> $this->faker->dateTime(),
            'is_active' =>  $this->faker->boolean()
        ];
    }
}
