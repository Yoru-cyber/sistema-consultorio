<?php

namespace Tests\Unit;

use App\Models\Doctor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class DoctorTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_can_create_a_patient_with_fillable_attributes()
    {
        $data = [
            'name' => 'John Doe',
            'dni' => 123456789,
        ];
        $doctor = Doctor::create($data);
        $this->assertModelExists($doctor);

        $this->assertEquals('John Doe', $doctor->name);
        $this->assertEquals(123456789, $doctor->dni);
    }
}
