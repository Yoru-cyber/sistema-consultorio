<?php

namespace Tests\Unit;

use App\Models\Condition;
use Tests\TestCase;

class ConditionTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $data = [
            'name' => 'Flu',
        ];
        $condition = Condition::create($data);
        $this->assertModelExists($condition);
        $this->assertEquals('Flu', $condition->name);
    }
}
