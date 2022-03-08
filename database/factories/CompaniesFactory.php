<?php

namespace Database\Factories;

use App\Models\companies;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompaniesFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\companies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'CEO' => $this->faker->name(),
            'pvm_code' => $this->faker->randomNumber(5, true),
            'address' => $this->faker->streetAddress(),
            'phone_number' => $this->faker->randomNumber(6, true),
            'email' => $this->faker->unique()->safeEmail(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
