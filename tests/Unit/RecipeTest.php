<?php

namespace Tests\Unit;

use App\Models\Recipe;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class RecipeTest extends TestCase
{
    use RefreshDatabase;
    #[Test]
    public function it_can_create_a_recipe_with_fillable_attributes()
    {
        $doctor = Doctor::factory()->create();
        $patient = Patient::factory()->create();
        $data = [
            'patient_id' => $patient->id,
            'doctor_id' => $doctor->id,
            'date' => '09/11/2024',
            'prescription' => 'John Doe',
        ];
        $recipe = Recipe::create($data);
        $this->assertModelExists($recipe);
        $this->assertEquals($doctor->id, $recipe->doctor_id);
        $this->assertEquals('09/11/2024', $recipe->date);
        $this->assertEquals($patient->id, $recipe->patient_id);
    }
}
