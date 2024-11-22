<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use App\Models\Condition;

class CertificateTest extends TestCase
{
    use RefreshDatabase;
    #[Test]
    public function it_can_create_a_certificate_with_fillable_attributes()
    {
        $data = [
            'name' => 'Flu',
        ];
      $certificate = Condition::create($data);
        $this->assertModelExists($certificate);
    }
}
