<?php

namespace Tests\Unit;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class AppointmentTest extends TestCase
{
    use RefreshDatabase; // Resets the database after each test

    #[Test]
    public function it_can_create_a_appointment_with_fillable_attributes()
    {
        // Arrange: Prepare data for the appointment
        $doctor = Doctor::factory()->create();
        $patient = Patient::factory()->create();
        $data = [
            'patient_id' => $patient->id,
            'doctor_id' => $doctor->id,
            'date' => '09/11/2024',
            'reason' => 'danielitis',
        ];
        $appointment = Appointment::create($data);
        $this->assertModelExists($appointment);
        $this->assertEquals($doctor->id, $appointment->doctor_id);
        $this->assertEquals('09/11/2024', $appointment->date);
        $this->assertEquals($patient->id, $appointment->patient_id);
        $this->assertEquals('danielitis', $appointment->reason);
    }
}
