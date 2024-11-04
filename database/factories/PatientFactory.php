<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(),
            'age' => $this->faker->randomDigit(),
            'birthday' => $this->faker->date(),
            'dni'=>$this->faker->unique()->randomNumber(9),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->phoneNumber(),
            'emergency_phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'sex' => $this->faker->randomElement(['Masculino', 'Femenino']),

        ];
    }
}
