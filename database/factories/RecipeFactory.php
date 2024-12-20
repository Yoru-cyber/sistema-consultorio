<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;
use App\Models\Doctor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
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
            'patient_id' => $this->faker->randomElement(Patient::pluck('id')),
            'doctor_id' => $this->faker->randomElement(Doctor::pluck('id')),
            'date' => $this->faker->date(),
            'prescription' => $this->faker->text()
        ];
    }
}
