<?php

namespace Tests\Unit;

use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class PatientTest extends TestCase
{
    use RefreshDatabase; // Resets the database after each test

    #[Test]
    public function it_can_create_a_patient_with_fillable_attributes()
    {
        // Arrange: Prepare data for the patient
        $data = [
            'name' => 'John Doe',
            'sex' => 'male',
            'email' => 'john.doe@example.com',
            'dni' => 123456789,
            'address' => '123 Main Street',
            'phone_number' => '555-555-5555',
            'emergency_phone_number' => '555-555-5556',
            'age' => 30,
            'birthday' => '1993-05-15',
        ];

        // Act: Create a new patient using mass assignment
        $patient = Patient::create($data);

        // Assert: Verify the patient was created and the attributes are correctly set
        $this->assertModelExists($patient);

        $this->assertEquals('John Doe', $patient->name);
        $this->assertEquals('male', $patient->sex);
        $this->assertEquals('john.doe@example.com', $patient->email);
        $this->assertEquals(123456789, $patient->dni);
        $this->assertEquals('123 Main Street', $patient->address);
        $this->assertEquals('555-555-5555', $patient->phone_number);
        $this->assertEquals('555-555-5556', $patient->emergency_phone_number);
        $this->assertEquals(30, $patient->age);
        $this->assertEquals('1993-05-15', $patient->birthday->toDateString()); // Handle date comparison
    }
}
